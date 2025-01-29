<?php foreach ($allProperties as $property) {?>

<div class="box_list map_view">
    <div class="row g-0 add_top_20">
        <div class="col-4">
            <figure>
                <a href="/property?pid=<?=$property['pid']?>"><img src="<?=$property['main_image_large']?>" class="img-fluid" alt="<?=$property['name']?>" width="800" height="533"></a>
            </figure>
        </div>
        <div class="col-8">
            <div class="wrapper">
                <a href="#0" class="wish_bt"></a>
                <h3><a href="/property?pid=<?=$property['pid']?>"><?=htmlspecialchars($property['name'])?></a></h3>
                <span class="small"><i class="icon-location-outline"></i><?= htmlspecialchars($property['town']) ?>, <?= htmlspecialchars($property['country']) ?></span>
                <div class="d-block mt-3 mb-3">
                    <span class="small"><?= htmlspecialchars($property['description']['short']) ?></span>
                  </div>
            </div>
            <ul>
                <li>
                    <span class="price">From <strong>$54</strong></span>
                </li>
                <li>
                    <a href="#0" onclick="onHtmlClick('Marker',0)" class="address">View On Map</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /box_list -->

<?php } ?>