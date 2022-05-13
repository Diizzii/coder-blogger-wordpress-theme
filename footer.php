		<!-- Footer -->
		<footer class="p-3 text-white text-center position-relative">
			<div class="container">
                <?php
                if( get_theme_mod( "coder-blogger-footer-text-input" ) ){
                    ?>
                    <p><?php echo get_theme_mod( "coder-blogger-footer-text-input" ); ?></p>
                <?php
                }
                ?>
                <p class="footer-links">
	                <?php
	                if( get_theme_mod( "coder-blogger-footer-link-1" ) && get_theme_mod( "coder-blogger-footer-link-1-label" ) ){
		                ?>
                        <a
                                href="<?php the_permalink( get_theme_mod( "coder-blogger-footer-link-1" ) ); ?>"><?php echo get_theme_mod( "coder-blogger-footer-link-1-label" ) ?></a>
		                <?php
	                }
	                if( get_theme_mod( "coder-blogger-footer-link-2" ) && get_theme_mod( "coder-blogger-footer-link-2-label" ) ){
		                ?>
                        ||
                        <a
                                href="<?php the_permalink( get_theme_mod( "coder-blogger-footer-link-2" ) ); ?>"><?php echo get_theme_mod( "coder-blogger-footer-link-2-label" ) ?> </a>
		                <?php
	                }
	                ?>
                </p>
                <p class="copyright">
                    Theme Copyright &copy; 2022
                    <a href="https://dkdev.link" target="_blank">Dieter Kribbel</a>
                </p>
			</div>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>