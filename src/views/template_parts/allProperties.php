<?php
$allProperties = $allProperties['result']['properties']['property'];
?>

<div class="container-fluid full-height">

<div class="row">
    <div class="col-lg-6 content-left order-md-last order-sm-last order-last">
    <div id="results_map_view">
   <div class="container-fluid">
       <!-- /row -->
        <div class="search_map_wp ">
            <div class="custom-search-input-2 map_view d-flex g-2">
                <div class="form-group flex-fill">
                    <select class="wide">
                        <option>Where are you going</option>	
                        <option>Shops</option>
                        <option>Hotels</option>
                        <option>Restaurants</option>
                        <option>Bars</option>
                        <option>Events</option>
                        <option>Fitness</option>
                    </select>
                    <i class="icon_pin_alt"></i>
                </div>
                <div class="form-group flex-fill">
                    <input class="form-control" type="text" name="dates" placeholder="When..">
                    <i class="icon_calendar"></i>
                </div>
                <div class="form-group flex-fill">
                    <div class="panel-dropdown search-page-panel-dropdown">
                        <a href="#">Guests <span class="qtyTotal">1</span></a>
                        <div class="panel-dropdown-content">
                            <!-- Quantity Buttons -->
                            <div class="qtyButtons">
                                <label>Adults</label>
                                <input type="text" name="adults" value="1">
                            </div>
                            <div class="qtyButtons">
                                <label>Childrens</label>
                                <input type="text" name="children" value="0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group-btn">
                    <input type="submit" value="Search">
                </div>
            </div>
        </div>
        <!-- /search_map_wp -->
   </div>
   <!-- /container -->
</div>
<!-- /results -->

<div class="filters_listing version_3">
    <div class="container-fluid">
        <ul class="clearfix">
            <li>
                <div class="switch-field">
                    <h6><strong>145</strong> results</h6>
                </div>
            </li>
            <li><a class="btn_filt_map" data-bs-toggle="collapse" href="#filters" aria-expanded="false" aria-controls="filters" data-text-swap="Less filters" data-text-original="More filters">More filters</a></li>
        </ul>
    </div>
    <!-- /container -->
</div>
<!-- /filters -->
        
<div class="collapse map_view" id="filters">
    <div class="container-fluid margin_30_5">
        <h6>District</h6>
        <div class="row">
        <div class="col-md-6">
            <div class="filter_type">
                <ul>
                    <li>
                        <label class="container_check">All <small>(945)</small>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="container_check">La Defanse <small>(45)</small>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="filter_type">
                <ul>
                    <li>
                        <label class="container_check">Paris Center <small>(30)</small>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="container_check">Latin Quartes<small>(25)</small>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </li>
                </ul>
            </div>
        </div>
        </div>
            <div class="row">
            <div class="col-md-12">
                <div class="add_bottom_30">
                    <h6>Distance</h6>
                    <div class="distance"> Radius around selected destination <span></span> km</div>
                    <input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal">
                </div>
            </div>
            </div>
        <!-- /row -->
    </div>
</div>
<!-- /Filters -->
<?php
include 'propertyItem.php';
?>
    
<p class="text-center add_top_30"><a href="#0" class="btn_1 rounded"><strong>Load more</strong></a></p>
</div>
<!-- /content-left-->

<div class="col-lg-6 map-right">
    <div id="map"></div>
    <!-- map-->
</div>
<!-- /map-right-->

</div>
<!-- /row-->
</div>
<!-- /container-fluid -->	