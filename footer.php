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

?>
<footer class="contact_footer" id="contact_footer">
    <a href="index.html" class="logo font_nav">
        <h3>Teach</h3>
    </a>

    <div class="contact_data">
        <span class="address">г.Тирасполь ул.Юности 64а</span>
        <span class="phone">Телефон: 0 (779) 59 - 745</span>
        <span class="email"><a href="mailto:o.natusik_85@rambler.ru">Email: o.natusik_85@rambler.ru</a></span>
    </div>

    <div class="social">
        <a href="#" class="ok">Ok</a>
        <a href="#" class="vb">Viber</a>
        <a href="#" class="wts">WhatsApp</a>
    </div>

    <a href="#top_header" class="top font_nav" id="top">Вверх</a>
</footer>





<!--
	</div>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'englishteach' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'englishteach' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'englishteach' ), 'englishteach', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>
	</footer>
</div>
-->


<?php wp_footer(); ?>

</body>
</html>
