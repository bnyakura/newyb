
<div class="bg_color_1">
    <?php include 'singlePropertyHeader.php'; ?>
    <?php
    $singlePropertyDetails = $propertyDetails['result']['properties']['property'];
    
    ?>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-8">

                <section class="hero_in tours_detail mt-4" id="yb_images" style="background:url('<?= $singlePropertyDetails['main_image'] ?>')center center / cover no-repeat">
                    <div class="wrapper">
                        <div class="container">
                            <h1 class="fadeInUp"><span></span><?= $singlePropertyDetails['name'] ?></h1>
                        </div>

                        <?=var_dump($singlePropertyDetails['images']['image']);?>
                        <span class="magnific-gallery">
                            <a href="img/gallery/tour_list_1.jpg" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">View photos</a>
                            <a href="img/gallery/tour_list_2.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
                            <a href="img/gallery/tour_list_3.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
                        </span>
                    </div>
                </section>
                <div class="pictures_grid magnific-gallery clearfix mt-1">
                    <figure><a href="img/detail_gallery/detail_1.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/detail_gallery/detail_1.jpg" alt=""></a></figure>
                    <figure><a href="img/detail_gallery/detail_2.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/detail_gallery/detail_2.jpg" alt=""></a></figure>
                    <figure><a href="img/detail_gallery/detail_3.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/detail_gallery/detail_3.jpg" alt=""></a></figure>
                    <figure><a href="img/detail_gallery/detail_4.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/detail_gallery/detail_4.jpg" alt=""></a></figure>
                    <figure><a href="img/detail_gallery/detail_5.jpg" title="Photo title" data-effect="mfp-zoom-in"><span class="d-flex align-items-center justify-content-center">+10</span><img src="img/detail_gallery/detail_5.jpg" alt=""></a></figure>
                </div>
                <!--/hero_in-->
                <section id="description">
                    <h3>Description</h3>
                    <p>Per consequat adolescens ex, cu nibh commune <strong>temporibus vim</strong>, ad sumo viris eloquentiam sed. Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                    <p>Cum et probo menandri. Officiis consulatu pro et, ne sea sale invidunt, sed ut sint <strong>blandit</strong> efficiendi. Atomorum explicari eu qui, est enim quaerendum te. Quo harum viris id. Per ne quando dolore evertitur, pro ad cibo commune.</p>

                    <!-- /pictures -->

                    <hr>
                    <div id="amenities">
                        <h3>Popular Amenities</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="bullets">
                                <li>Dolorem mediocritatem</li>
                                <li>Mea appareat</li>
                                <li>Prima causae</li>
                                <li>Singulis indoctum</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="bullets">
                                <li>Timeam inimicus</li>
                                <li>Oportere democritum</li>
                                <li>Cetero inermis</li>
                                <li>Pertinacia eum</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->
                    <hr>
                    <div id="calender">
                        <h3>Calendar</h3>
                    </div>
                    <hr>
                    <h3>Location</h3>
                    <div id="map" class="map map_single add_bottom_30"></div>
                    <!-- End Map -->
                </section>
                <!-- /section -->

            
                <div class="reviews-container">
                    <h3>Reviews</h3>
                    <div class="review-box clearfix">
                        <figure class="rev-thumb"><img src="img/avatar1.jpg" alt="">
                        </figure>
                        <div class="rev-content">
                            <div class="rating">
                                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                            </div>
                            <div class="rev-info">
                                Admin – April 03, 2016:
                            </div>
                            <div class="rev-text">
                                <p>
                                    Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /review-box -->
                </div>

            </div>
            <!-- /col -->
            
            <aside class="col-lg-4" id="sidebar">
                <div class="box_detail booking">
                    <div>
                        <h3 class="mt-0">Cannes</h3>
                        <div class="row mb-4">
                            <div class="col-6 mt-2">
                                <i class="icon-home-3"></i>
                                <span>Two Bedroom</span>
                            </div>
                            <div class="col-6 mt-2">
                                <i class="icon-bed"></i>
                                <span>Two Bedrooms</span>
                            </div>
                            <div class="col-6 mt-2">
                                <i class="icon-home-3"></i>
                                <span>Two Bedrooms</span>
                            </div>
                            <div class="col-6 mt-2">
                                <i class="icon-home-3"></i>
                                <span>Two Bedrooms</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="dates" placeholder="When..">
                        <i class="icon_calendar"></i>
                    </div>
                    <div class="panel-dropdown">
                        <a href="#">Guests <span class="qtyTotal">1</span></a>
                        <div class="panel-dropdown-content right">
                            <div class="qtyButtons">
                                <label>Adults</label>
                                <input type="text" name="qtyInput" value="1">
                            </div>
                            <div class="qtyButtons">
                                <label>Childrens</label>
                                <input type="text" name="qtyInput" value="0">
                            </div>
                        </div>
                    </div>

                    <div class="price mt-4">
                        <span>45$ <small>total</small></span>
                        <div class="score"><strong><i class="icon-info-1"></i></strong></div>
                    </div>
                    <small class="mb-5">Constantin is not currently available for instant booking, Please make an enquiry, our staff will be happy to assist you make a reservation!</small>
                    <a href="cart-1.html" class="btn_1 full-width purchase mt-4">Reserve</a>
                    <a href="wishlist.html" class="btn_1 full-width outline wishlist">Make enquiry</a>
                    <div class="text-center"><small>No money charged in this step</small></div>
                </div>
                <ul class="share-buttons">
                    <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
                    <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
                    <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
                </ul>
            </aside>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /bg_color_1 -->