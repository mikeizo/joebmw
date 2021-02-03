<footer>
    <?php /*
    <div class="footer bg-light py-5">
        <div class="container">
            <div class="row">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <div class="col-12 col-md">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <div class="col-12 col-md">
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <div class="col-12 col-md">
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                    <div class="col-12 col-md">
                        <?php dynamic_sidebar( 'footer-4' ); ?>
                    </div>
                <?php endif; ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    */ ?>

    <div class="sub-footer dark py-5">
        <div class="container">
            <div class="row px-4 px-md-0">
                <div class="col-md-4">
                    © <?php echo date("Y"); ?> Zeppieri Motorsport
                </div>
                <div class="col-md-3">
                    <a href="https://www.facebook.com/Zeppieri-Motorsport-183422138347931/" target="_blank"><i class="fab fa-facebook-square fa-4x px-2"></i></a>
                    <a href="https://www.instagram.com/zeppierimotorsport/?hl=en" target="blank"><i class="fab fa-instagram fa-4x px-2"></i></a>
                </div>
                <div class="col-md-5 contact-info">
                     <strong>Email:</strong> <a href="mailto:joe@zeppierimotorsport.com">joe@zeppierimotorsport.com</a><br> <strong>Phone:</strong> 917-539-4776
                </div>
            </div><!-- .row -->
            <div class="disclaimer">
                <?php echo get_option('disclaimer'); ?>
            </div>
        </div><!-- /.container -->
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
