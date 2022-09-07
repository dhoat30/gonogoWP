<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/fru3zzm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header">
        <div class="logo">
            <img src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" alt="">
        </div>
        <nav class="top-nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/">Modules<span style="margin-left: 5px;"><img src="<?php echo get_theme_file_uri('/images/nav-drop-down.svg'); ?>" alt=""></span></a></li>
                <li><a href="/">Case Studies</a></li>
                <li><a href="/">Support</a></li>
                <li><a href="/">Testimonials</a></li>
            </ul>
        </nav>
        <div class="top-nav-btn">
            <a href="/" class="primary-btn">book a demo</a>
        </div>
    </header>
