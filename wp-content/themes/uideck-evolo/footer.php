<?php
	/**
	* The template for displaying the header
	*
	* @package uideck-evolo
	* @since 0.1.0
	*/

?>

        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-col">
                            <h4>AHM Outsourcing Inc.</h4>
                            <p>3rd Floor, Esperanza Building, Pacita Avenue, San Pedro, Laguna, Philippines 4023</p>
                        </div>
                    </div> <!-- end of col -->
                    <div class="col-md-4">
                        <div class="footer-col middle">
                            <h4>Important Links</h4>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Inquiries: <a class="turquoise" href="mailto:info@ahmoutsourcing.com">info@ahmoutsourcing.com</a></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Read our <a class="turquoise" href="<?php echo home_url() . '/terms-and-conditions'; ?>">Terms & Conditions</a>, <a class="turquoise" href="<?php echo home_url() . '/privacy-policy'; ?>">Privacy Policy</a></div>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end of col -->
                    <div class="col-md-4">
                        <div class="footer-col last">
                            <h4>Social Media</h4>
                            <?php if(!empty(getThemeField( 'social_fb', '' ))) { ?>
                                <span class="fa-stack">
                                    <a href="<?php echo getThemeField( 'social_fb', '#' ); ?>">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                                    </a>
                                </span>
                            <?php } ?>
                            <?php if(!empty(getThemeField( 'social_tw', '' ))) { ?>
                                <span class="fa-stack">
                                    <a href="<?php echo getThemeField( 'social_tw', '#' ); ?>">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x"></i>
                                    </a>
                                </span>
                            <?php } ?>
                            <?php if(!empty(getThemeField( 'social_yt', '' ))) { ?>
                                <span class="fa-stack">
                                    <a href="<?php echo getThemeField( 'social_yt', '#' ); ?>">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-youtube fa-stack-1x"></i>
                                    </a>
                                </span>
                            <?php } ?>
                            <?php if(!empty(getThemeField( 'social_li', '' ))) { ?>
                                <span class="fa-stack">
                                    <a href="<?php echo getThemeField( 'social_li', '#' ); ?>">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                    </a>
                                </span>
                            <?php } ?>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright © <?php echo Date('Y'); ?> <a href="https://bytescrafter.net">Bytes Crafter</a> - All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/validator.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>
    </body>
</html>