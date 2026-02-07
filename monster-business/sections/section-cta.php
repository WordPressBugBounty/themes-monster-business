<?php 
/**
 * Template part for displaying About Section
 *
 *@package Monster Business
 */
?>
    <?php 
        $cta_small_description  = monster_business_get_option( 'cta_small_description' );
        $cta_description        = monster_business_get_option( 'cta_description' );
        $cta_button_label       = monster_business_get_option( 'cta_button_label' );
        $cta_button_url         = monster_business_get_option( 'cta_button_url' );
    ?>

    <?php if ( !empty($cta_description ) )  :?>
        <div class="section-header">
            <h3><?php echo esc_html($cta_small_description); ?></h3>
            <h2 class="section-title"><?php echo esc_html($cta_description); ?></h2>
        </div><!-- .section-header -->
    <?php endif;?>

    <?php if ( !empty($cta_button_label ) )  :?>
        <div class="read-more">
            <a href="<?php echo esc_url($cta_button_url); ?>" class="btn"><?php echo esc_html($cta_button_label); ?></a>
        </div><!-- .read-more -->
    <?php endif;?>
