<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package englishTeach
 */

global $englishteach;
?>
<footer class="contact_footer" id="contact_footer">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo font_nav">
        <h3><?php bloginfo( 'name' ); ?></h3>
    </a>

    <div class="contact_data">
        <?php if ($englishteach['address']) { ?>
            <span class="address"><?php echo esc_attr($englishteach['address']); ?></span>
        <?php } ?>

        <?php if ($englishteach['phone']) { ?>
            <span class="phone">Телефон: <?php echo esc_attr($englishteach['phone']); ?></span>
        <?php } ?>

        <?php if ($englishteach['email']) { ?>
            <span class="email"><a href="mailto:o.natusik_85@rambler.ru">Email: <?php echo esc_attr($englishteach['email']); ?></a></span>
        <?php } ?>
    </div>

    <div class="social">
        <?php
            foreach ($englishteach['social'] as $key => $value){
                if ($key == 'Ok'){ ?>
                    <a href="<?php echo esc_url($englishteach['social']['Ok']); ?>" class="ok">Ok</a>
                <?php } ?>

                <?php if ($key == 'Viber'){ ?>
                    <a href="<?php echo esc_url($englishteach['social']['Viber']); ?>" class="vb">Viber</a>
                <?php } ?>

                <?php if ($key == 'WatsApp'){ ?>
                    <a href="<?php echo esc_url($englishteach['social']['WatsApp']); ?>" class="wts">WhatsApp</a>
                <?php }
            }
        ?>
    </div>
    <a href="#top_header" class="top font_nav" id="top">Вверх</a>
</footer>
<?php wp_footer(); ?>
</body>
</html>