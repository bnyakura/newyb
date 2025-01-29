<?php
global $path;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title><?=$page_title;?></title>

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- BASE CSS -->
    <link href="<?= SITE_URL ?>public/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=SITE_URL?>public/assets/css/style.css" rel="stylesheet">
    <?php if ($path === '/properties') {?>
        <link href="<?=SITE_URL?>public/assets/css/allproperties.css" rel="stylesheet">
    <?php }?>
    <?php if ($path === '/property') { ?>
        <link href="<?=SITE_URL?>public/assets/css/singleproperty.css" rel="stylesheet">
    <?php } ?>
    
    <!-- <link href="css/style.css" rel="stylesheet"> -->
	<link href="<?=SITE_URL?>public/assets/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?=SITE_URL?>public/assets/css/custom.css" rel="stylesheet">

</head>

<body class="datepicker_mobile_full">
<div id="page">
    <?php include 'nav.php';?>
<main>