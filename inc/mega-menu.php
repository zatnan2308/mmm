<?php
/**
 * MMM Mega Menu System
 * Custom menu fields + Walker for mega menu rendering
 * 
 * @package MMM_Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ══════════════════════════════════════════════
   1. CUSTOM FIELDS IN MENU EDITOR
   ══════════════════════════════════════════════ */

/**
 * Add custom fields to each menu item in Appearance → Menus
 */
add_action( 'wp_nav_menu_item_custom_fields', 'mmm_mega_menu_fields', 10, 5 );
function mmm_mega_menu_fields( $item_id, $item, $depth, $args, $id ) {
    $is_mega  = get_post_meta( $item_id, '_mmm_mega_parent', true );
    $icon     = get_post_meta( $item_id, '_mmm_icon_class', true );
    $desc     = get_post_meta( $item_id, '_mmm_short_desc', true );
    $is_top   = get_post_meta( $item_id, '_mmm_is_top', true );
    ?>
    <div style="clear:both; padding: 10px 0 5px; border-top: 1px dashed #ddd; margin-top: 10px;">
        <p class="description description-wide" style="margin: 5px 0;">
            <label>
                <input type="checkbox" name="mmm_mega_parent[<?php echo $item_id; ?>]" value="1" <?php checked( $is_mega, '1' ); ?>>
                <strong style="color: #0073aa;">☰ Mega Menu Parent</strong> — sub-items open as mega dropdown
            </label>
        </p>
        <p class="description description-wide" style="margin: 5px 0;">
            <label>
                Icon Class (FontAwesome) <br>
                <input type="text" name="mmm_icon_class[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $icon ); ?>" placeholder="fas fa-wrench" class="widefat" style="max-width: 300px;">
            </label>
            <br><span class="description" style="font-size: 11px; color: #999;">Examples: fas fa-oil-can, fas fa-snowflake, fas fa-bolt, fas fa-wrench</span>
        </p>
        <p class="description description-wide" style="margin: 5px 0;">
            <label>
                Short Description <br>
                <input type="text" name="mmm_short_desc[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $desc ); ?>" placeholder="Brief one-line description" class="widefat" style="max-width: 400px;">
            </label>
        </p>
        <p class="description description-wide" style="margin: 5px 0;">
            <label>
                <input type="checkbox" name="mmm_is_top[<?php echo $item_id; ?>]" value="1" <?php checked( $is_top, '1' ); ?>>
                <strong style="color: #d63638;">★ TOP</strong> — highlight this item with special styling
            </label>
        </p>
    </div>
    <?php
}

/**
 * Save custom fields when menu is saved
 */
add_action( 'wp_update_nav_menu_item', 'mmm_save_mega_fields', 10, 3 );
function mmm_save_mega_fields( $menu_id, $menu_item_db_id, $args ) {
    $fields = array(
        'mmm_mega_parent' => '_mmm_mega_parent',
        'mmm_icon_class'  => '_mmm_icon_class',
        'mmm_short_desc'  => '_mmm_short_desc',
        'mmm_is_top'      => '_mmm_is_top',
    );
    foreach ( $fields as $post_key => $meta_key ) {
        if ( isset( $_POST[ $post_key ][ $menu_item_db_id ] ) ) {
            update_post_meta( $menu_item_db_id, $meta_key, sanitize_text_field( $_POST[ $post_key ][ $menu_item_db_id ] ) );
        } else {
            delete_post_meta( $menu_item_db_id, $meta_key );
        }
    }
}


/* ══════════════════════════════════════════════
   2. MEGA MENU WALKER CLASS
   ══════════════════════════════════════════════ */

class MMM_Mega_Walker extends Walker_Nav_Menu {

    private $in_mega = false;

    /**
     * Start sub-level wrapper
     */
    function start_lvl( &$output, $depth = 0, $args = null ) {
        if ( $this->in_mega && $depth === 0 ) {
            // Don't output <ul> — mega children are rendered as cards
            return;
        }
        $output .= '<ul class="sub-menu">';
    }

    /**
     * End sub-level wrapper
     */
    function end_lvl( &$output, $depth = 0, $args = null ) {
        if ( $this->in_mega && $depth === 0 ) {
            return;
        }
        $output .= '</ul>';
    }

    /**
     * Render each menu item
     */
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

        $is_mega = get_post_meta( $item->ID, '_mmm_mega_parent', true );

        /* ── Top-level items ────────────────────── */
        if ( $depth === 0 ) {

            if ( $is_mega ) {
                $this->in_mega = true;

                $output .= '<li class="mega-menu-parent">';
                $output .= '<a href="' . esc_url( $item->url ) . '" class="nav-link mega-trigger">';
                $output .= esc_html( $item->title );
                $output .= ' <i class="fas fa-chevron-down mega-chevron"></i>';
                $output .= '</a>';

                // Mega menu panel
                $output .= '<div class="mmm-mega-menu">';
                $output .= '<div class="mega-inner">';

                // Header
                $output .= '<div class="mega-header">';
                $output .= '<h3>Professional Car Service Las Vegas</h3>';
                $output .= '<span>Select a service</span>';
                $output .= '</div>';

                // Grid
                $output .= '<div class="mega-grid">';

            } else {
                $this->in_mega = false;
                $output .= '<li>';
                $output .= '<a href="' . esc_url( $item->url ) . '" class="nav-link">' . esc_html( $item->title ) . '</a>';
            }

            return;
        }

        /* ── Mega menu children (depth 1) ───────── */
        if ( $depth === 1 && $this->in_mega ) {

            $icon   = get_post_meta( $item->ID, '_mmm_icon_class', true );
            $desc   = get_post_meta( $item->ID, '_mmm_short_desc', true );
            $is_top = get_post_meta( $item->ID, '_mmm_is_top', true );

            $card_class = 'mega-service-card';
            if ( $is_top ) {
                $card_class .= ' mega-top-item';
            }

            $output .= '<a href="' . esc_url( $item->url ) . '" class="' . esc_attr( $card_class ) . '">';

            // Icon box
            $output .= '<div class="mega-icon-box' . ( $is_top ? ' mega-icon-active' : '' ) . '">';
            if ( $icon ) {
                $output .= '<i class="' . esc_attr( $icon ) . '"></i>';
            } else {
                $output .= '<i class="fas fa-cog"></i>';
            }
            $output .= '</div>';

            // Text content
            $output .= '<div class="mega-card-text">';
            if ( $is_top ) {
                $output .= '<div class="mega-title-row">';
                $output .= '<h4>' . esc_html( $item->title ) . '</h4>';
                $output .= '<span class="mega-top-badge">Top</span>';
                $output .= '</div>';
            } else {
                $output .= '<h4>' . esc_html( $item->title ) . '</h4>';
            }
            if ( $desc ) {
                $output .= '<p>' . esc_html( $desc ) . '</p>';
            }
            $output .= '</div>';

            $output .= '</a>';

            return;
        }
    }

    /**
     * Close each menu item
     */
    function end_el( &$output, $item, $depth = 0, $args = null ) {

        if ( $depth === 0 ) {
            $is_mega = get_post_meta( $item->ID, '_mmm_mega_parent', true );

            if ( $is_mega ) {
                $output .= '</div>'; // .mega-grid

                // Bottom bar
                $phone      = function_exists( 'mmm_get' ) ? mmm_get( 'mmm_phone', '(702) 954-9773' ) : '(702) 954-9773';
                $phone_link = function_exists( 'mmm_get' ) ? mmm_get( 'mmm_phone_link', '+17029549773' ) : '+17029549773';

                $output .= '<div class="mega-bottom">';
                $output .= '<div class="mega-bottom-left">';
                $output .= 'Need help deciding? Call us: <a href="tel:' . esc_attr( $phone_link ) . '">' . esc_html( $phone ) . '</a>';
                $output .= '</div>';
                $output .= '<a href="' . esc_url( home_url( '/#appointment' ) ) . '" class="mega-bottom-cta">';
                $output .= 'Book Appointment <i class="fas fa-arrow-right"></i>';
                $output .= '</a>';
                $output .= '</div>';

                $output .= '</div>'; // .mega-inner
                $output .= '</div>'; // .mmm-mega-menu

                $this->in_mega = false;
            }

            $output .= '</li>';
        }
        // depth 1 mega children: no closing needed (card is self-contained)
    }
}
