<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Task For Emmanuel Gideon-dada from Punch Newspaper Nigeria">
    <meta name="keywords" content="HTML, CSS, JavaScript, WordPress, PHP, Web Development">
    <meta name="author" content="Emmanuel Gideon-dada">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
    <script src="assets/js/script.js"></script>
    <!-- Hook for additional styles/scripts -->

</head>

<body>
    <div class="navigation">
        <header>
            <nav>
                <ul>
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('/live-updates'); ?>">Live Update</a></li>
                    <li><a href="<?php echo site_url('/election'); ?>">Election 2023</a></li>
                    <li><a href="<?php echo site_url('/videos'); ?>">Videos</a></li>
                    <li><a href="#punchHomePage">Return To Punch Home Page</a></li>
                </ul>
            </nav>
        </header>
        <div class="header-bottom">
            <div class="election-header">
                <div class="logo-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/punch-2023-election-logo.png"
                        alt="Punch 2023 Election Monitor Logo" class="logo">
                    <div class="hamburger" onclick="toggleMenu()">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
            <nav class="dropdown-nav">
                <ul>
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('/live-updates'); ?>">Live Update</a></li>
                    <li><a href="<?php echo site_url('/election'); ?>">Election 2023</a></li>
                    <li><a href="<?php echo site_url('/videos'); ?>">Videos</a></li>
                    <li><a href="#punchHomePage">Return To Punch Home Page</a></li>
                </ul>
            </nav>
        </div>
    </div>