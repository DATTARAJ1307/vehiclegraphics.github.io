<?php
/**
 * Displays footer site info
 *
 * @package Auto Motors
 * @subpackage auto_motors
 */

?>
<div class="site-info">
    <div class="container">
        <p><?php auto_motors_credit(); ?> <?php echo esc_html(get_theme_mod('automobile_hub_footer_text',__('By Themespride','auto-motors'))); ?></p>
    </div>
</div>