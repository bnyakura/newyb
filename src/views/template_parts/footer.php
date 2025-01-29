</main>
	<!-- /main -->

    <footer>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-3 col-md-12 pe-5">
                    <p><img src="<?=SITE_URL?>public/assets/img/yourbookng logo white.png" alt="yourbookng" style="width:100%"></p>
                    <p>Helping you find your next stay</p>
                    <div class="follow_us">
                        <ul>
                            <li>Follow us</li>
                            <li><a href="#0"><i
                                        class="bi bi-facebook"></i></a></li>
                            <li><a href="#0"><i
                                        class="bi bi-linkedin"></i></a></li>
                            <li><a href="#0"><i
                                        class="bi bi-instagram"></i></a></li>
                            <li><a href="#0"><i
                                        class="bi bi-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ms-lg-auto">
                    <h5>UK Office</h5>
                    <ul class="links">
                        <li><a href="about.html">10 Harvey Road
                                Redhill, Surrey<br>
                                RHI4EA</a></li>
                    </ul>
                    <h5>Zimbabwe Office</h5>
                    <ul class="links">
                        <li><a href="about.html">4 York Road<br>
                                Greendale, Hararea></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 ms-lg-auto">
                    <h5>Quick links</h5>
                    <ul class="links">
                        <li><a href="explore.html">Explore
                                Home</a></li>
                        <li><a
                                href="wishlist.html">Wishlist</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div id="newsletter">
                        <h6>Save time, save money!</h6>
                        <p>Sign up and we'll send the best deals to
                            you</p>
                        <div id="message-newsletter"></div>
                        <form method="post"
                            action="phpmailer/newsletter_template_email.php"
                            name="newsletter_form"
                            id="newsletter_form">
                            <div class="form-group">
                                <input type="email"
                                    name="email_newsletter"
                                    id="email_newsletter"
                                    class="form-control"
                                    placeholder="Your email">
                                <input type="submit" value="Submit"
                                    id="submit-newsletter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--/row-->
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <ul id="footer-selector">
                        <li><img src="<?=SITE_URL?>public/assets/img/cards_all.svg" alt></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul id="additional_links">
                        <li><a href="#0">Terms and
                                conditions</a></li>
                        <li><a href="#0">Privacy</a></li>
                        <li><span>© All Rights Reserved</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->
	</div>
	<!-- page -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
    <script src="<?=SITE_URL?>public/assets/js/common_scripts.js"></script>
    <script src="<?=SITE_URL?>public/assets/js/main.js"></script>

    <?php if($path == 'search') {?>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="<?=SITE_URL?>public/assets/js/markerclusterer.js"></script>
	<script src="<?=SITE_URL?>public/assets/js/map_hotels_half_screen.js"></script>
	<script src="<?=SITE_URL?>public/assets/js/infobox.js"></script>
	<?php } ?>
	<!-- DATEPICKER  -->
	<script>
	$(function() {
	  'use strict';
	  $('input[name="dates"]').daterangepicker({
		  autoUpdateInput: false,
		  minDate:new Date(),
		  locale: {
			  cancelLabel: 'Clear'
		  }
	  });
	  $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
		  $(this).val(picker.startDate.format('MM/DD/YY') + ' - ' + picker.endDate.format('MM/DD/YY'));
	  });
	  $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
		  $(this).val('');
	  });
	});
	</script>
	
	<!-- INPUT QUANTITY  -->
	<script src="<?=SITE_URL?>public/assets/js/input_qty.js"></script>
	
</body>
</html>