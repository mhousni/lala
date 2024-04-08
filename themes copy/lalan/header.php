<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="css/main.css"> -->
</head>
<body>
    <main>
        <header>
            <div class="left">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt=""></a>
                <a href="" id="menu" class="menu"><i class="fa-solid fa-bars"></i></a>
            </div>
            <nav id="middle" class="middle active">
                <ul class="child-parent">
                    <li>
                        <a href="#">HOME <i class="fa-solid fa-chevron-down"></i></a>
                        <span></span>
                        <ul class="child">
                            <li><a href="">ABOUT US</a><span></span></li>
                            <li><a href="">CONTACT US</a><span></span></li>
                        </ul>
                    </li>
                    <li><a href="">JOB SEEKERS</a><span></span></li>
                    <li><a href="">EMPLOYERS</a><span></span></li>
                    <li><a href="">COMMUNITY</a><span></span></li>
                    <li><a href="">UPPSKILLING</a><span></span></li>
                </ul>
            </nav>
            <div id="right" class="right">
                <a href="#" class="btn">
                    SIGN-IN / SIGN-UP
                </a>
            </div>
        </header>