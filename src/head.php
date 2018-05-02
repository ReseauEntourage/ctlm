<!doctype html>
<html>
    <head>
        <title><?php bloginfo( 'name' ); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="icon" type="image/png" href="<?php asset_path('images/fav.png'); ?>" />

        <meta property="og:url" content="<?php root_url(); ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
        <meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />
        <meta property="og:image"  content="<?php asset_url('images/fb-sharing.jpg'); ?>" />

        <link rel="stylesheet" href="<?php asset_path('font-awesome.min.css'); ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php asset_path('reset.css'); ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php asset_path('style.css'); ?>" type="text/css"/>
        <script type="text/javascript" src="<?php asset_path('jquery-3.2.1.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php asset_path('jquery.waypoints.min.js'); ?>"></script>
    </head>
    <body>
