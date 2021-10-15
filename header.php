<!DOCTYPE html>
<html lang="id" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht-device-widht, initial-scale=1">

    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?> </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=xhhhze">
    <link rel="profile" href="http://pmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    
    <?php wp_head();?>
</head>
<body background="http://localhost/wordpress/wp-content/uploads/2021/10/bg-1.jpg" style="background-size: contain; background-repeat: round;" <?php body_class(); ?> >
<!-- Header Navigation -->
    <div class="container-fluid bg-darkalt">
        <header class="flex-wrap p-3 d-flex justify-content-between ">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="<?php bloginfo('name'); ?> " class="mb-3 d-flex align-items-center mb-md-0 me-md-auto text-dark text-decoration-none"></a>
            <strong class="nav nav-blog">
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?></strong>
            </ul>
        </header>
    </div>
<!-- End of Header Navigation -->
    