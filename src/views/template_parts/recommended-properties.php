      <?php
        $recommendedProperties = $recommendedProperties['result']['properties']['property'];
        ?>
            <div class="container container-custom margin_80_0">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Recommended Properties</h2>
			</div>
            <div class="container">
                <div class="row">
                    <?php foreach($recommendedProperties as $property){?>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="box_grid">
                            <figure>
                                <a href="#0" class="wish_bt"></a>
                                <a href="<?=$site_url?>property/<?=$property['pid']?>">
                                    <img src="<?=$property['main_image']?>"
                                        class="img-fluid" alt = "<?=$property['name']?>"
                                        width="800" height="533">
                                    <div class="read_more"><span>Read
                                            more</span></div>
                                </a>
                            </figure>
                            <div class="wrapper">
                                <h3><a
                                        href="single-property.html"><?=$property['name']?></a></h3>
                                <div
                                    class="d-flex justify-content-between">
                                    <div class="small">
                                        <i
                                            class="icon-location-outline"></i>
                                        <span><?=$property['town']?>, <?=$property['country']?></span>
                                    </div>
                                    <div class="small">
                                        <i
                                            class="icon-home-outline"></i>
                                        <span><?=$property['property_type']['name']?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
			<!-- /carousel -->
            <p
            class="btn_home_align d-flex justify-content-center mt-4"><a
                href="explore.html" class="btn_1 rounded">More
                places to stay</a></p>
			<hr class="large">
		</div>