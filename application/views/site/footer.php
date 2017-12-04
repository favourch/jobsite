 <!-- Footer -->
        <div class="section footer transparent" style="background-image: url('<?php echo public_url(); ?>/site/images/background03.jpg');">
            <div class="container">
                <div class="top flex space-between items-center">
                    <img src="<?php echo public_url(); ?>/site/images/footer-logo.png" alt="footer-logo" class="img-responsive">
                    <ul class="list-unstyled footer-menu flex">
                        <li><a href="#0">Home</a></li>
                        <li><a href="#0">About</a></li>
                        <li><a href="#0">Browse Jobs</a></li>
                        <li><a href="#0">Browse candidates</a></li>
                        <li><a href="#0">Contact</a></li>
                    </ul> <!-- end .footer-menu -->             
                </div> <!-- end .top -->
                <div class="footer-widgets flex no-column space-between">                   
                    <div class="widget">
                        <h6>Về English center work</h6>
                        <ul class="list-unstyled">
                            <?php foreach($pagefooter as $row): ?>
                            <li><a href="<?php echo base_url($row->cat_name.'-pv'); ?>"><?php echo $row->title; ?></a></li>
                        <?php endforeach; ?>
                            <li><a href="#0">Our Partners</a></li>
                            <li><a href="#0">Blog</a></li>
                            <li><a href="#0">FAQ</a></li>
                            <li><a href="#0">Pricing</a></li>
                            <li><a href="#0">Help Center</a></li>
                            <li><a href="#0">Team</a></li>
                            <li><a href="#0">Contact Us</a></li>
                        </ul>
                    </div> <!-- end .widget -->
                    <div class="widget">
                        <h6>For candidates</h6>
                        <ul class="list-unstyled">
                            <li><a href="#0">Browse Jobs</a></li>
                            <li><a href="#0">Browse categories</a></li>
                            <li><a href="#0">Submit Resume</a></li>
                            <li><a href="#0">Candidate Dashboard</a></li>
                            <li><a href="#0">Job Alerts</a></li>
                            <li><a href="#0">My Bookmarks</a></li>
                        </ul>
                    </div> <!-- end .widget -->
                    <div class="widget">
                        <h6>For companies</h6>
                        <ul class="list-unstyled">
                            <li><a href="#0">Browse Candidates</a></li>
                            <li><a href="#0">Company Dashboard</a></li>
                            <li><a href="#0">Add A Job</a></li>
                            <li><a href="#0">Packages</a></li>
                        </ul>
                    </div> <!-- end .widget -->
                    <div class="widget">
                        <h6>Follow us</h6>
                        <ul class="list-unstyled social-icons flex no-column">
                            <li><a href="#0"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#0"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#0"><i class="ion-social-youtube"></i></a></li>
                            <li><a href="#0"><i class="ion-social-instagram"></i></a></li>
                            <li><a href="#0"><i class="ion-social-linkedin"></i></a></li>
                        </ul>               
                        <h6>Subscribe Us</h6>
                        <p>Morbi in ligula nibh. Maecenas ut mi at odio hendrerit eleifend tempor vitae augue.</p>
                        <form class="form-inline subscribe-form flex no-column no-wrap items-center">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your email">
                            </div> <!-- end .form-group -->
                            <button type="submit" class="button"><i class="ion-ios-arrow-thin-right"></i></button>
                        </form>
                    </div> <!-- end .widget -->
                </div> <!-- end .footer-widgets -->
                <div class="bottom flex space-between items-center">
                    <p class="copyright-text small">&copy; 2017 <a href="#0">JobPress</a>. All Rights Reserved. Designed by <a href="#0">LeoStudo</a>.</p>
                    <ul class="list-unstyled copyright-menu flex no-column">
                        <li><a href="#0">Privacy policy</a></li>
                        <li><a href="#0">Terms of service</a></li>
                        <li><a href="#0">Conditions</a></li>
                    </ul> <!-- end .copyright-menu -->
                </div> <!-- end .bottom -->
            </div> <!-- end .container -->
        </div> <!-- end .footer -->


        <!-- Scripts -->
        <!-- jQuery -->     
        <script src="<?php echo public_url(); ?>/site/js/jquery-3.1.1.min.js" ></script>
        <!-- Bootstrap -->
        <script src="<?php echo public_url(); ?>/site/js/bootstrap.min.js" ></script>
        <script src="<?php echo public_url(); ?>/site/js/bootstrap-datepicker.js" ></script>
        <!-- google maps -->
        <script src="../../maps.googleapis.com/maps/api/js-key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8.js"></script>
        <!-- Owl Carousel -->
        <script src="<?php echo public_url(); ?>/site/js/owl.carousel.min.js"></script>
        <!-- Wow.js -->
        <script src="<?php echo public_url(); ?>/site/js/wow.min.js"></script>
        <!-- Typehead.js -->
        <script src="<?php echo public_url(); ?>/site/js/typehead.js"></script>
        <!-- Tagsinput.js -->
        <script src="<?php echo public_url(); ?>/site/js/tagsinput.js"></script>
        <!-- Bootstrap Select -->
        <script src="<?php echo public_url(); ?>/site/js/bootstrap-select.js"></script>      
        <!-- Waypoints -->
        <script src="<?php echo public_url(); ?>/site/js/jquery.waypoints.min.js"></script>
        <!-- CountTo -->
        <script src="<?php echo public_url(); ?>/site/js/jquery.countTo.js"></script>
        <!-- Isotope -->
        <script src="<?php echo public_url(); ?>/site/js/isotope.pkgd.min.js"></script>
        <script src="<?php echo public_url(); ?>/site/js/imagesloaded.pkgd.min.js"></script>
        <!-- Magnific-Popup -->
        <script src="<?php echo public_url(); ?>/site/js/jquery.magnific-popup.js"></script>
        <!-- Scripts.js -->
        <!-- <script src="<?php echo public_url(); ?>/site/js/scripts.js"></script> -->
<script>
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy'    
});
</script>