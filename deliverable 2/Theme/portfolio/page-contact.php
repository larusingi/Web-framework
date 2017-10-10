<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">

    <title>Larus portfolio </title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/default.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/contact.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-theme.css">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.js"></script>
    <meta name="description" content="Larus api">

</head>

<body class="Site">

    <header class="headerBackg">
        <?php get_header(); ?>
    </header>

    <main class="Site-content">
        <div class="container">




        </div>
        <div id="greeting" class="">

            <?php echo get_post_meta($post->ID, 'greeting', true); ?>
        </div>


        <form id="contactForm" action="mailto:myforms@mydomain.com" subject=myform_submission">

            <div class="space">
                <input class="fieldColor " type="text" name="name" placeholder="<?php echo get_post_meta($post->ID, 'name_field', true); ?>">
            </div>

            <div class="space">
                <input class="fieldColor " type="text" name="adress" placeholder="<?php echo get_post_meta($post->ID, 'mail_field', true); ?>">
            </div>

            <div id="middleInput" class="fieldColor"><?php echo get_post_meta($post->ID, 'message_field', true); ?></div>
            
            <div class="space">

                <input class="fieldColor biggerRow " type="text" name="mail">

            </div>


      


            <div id="buttonDiv">
                <button type="submit " value="submtit" id="buttonSend" class="btn btn-primary btn-lg center-block">send</button>
            </div>

            <div class="col-xs-12 text-row">
                Or
            </div>
        </form>


        <div class="flex-container col-xs-12">
            <a href=" <?php echo get_post_meta($post->ID, 'fblink', true); ?>">
                <div class="flex-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fb.png" class="img-responsive stars"></div>
            </a>
            <a href="<?php echo get_post_meta($post->ID, 'instagramlink', true); ?>">
                <div class="flex-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/insta.png" class="img-responsive stars"></div>
            </a>
            <a href="<?php echo get_post_meta($post->ID, 'linkedlink', true); ?>">
                <div class="flex-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linked.png" class="img-responsive stars"></div>
            </a>
            <a href="<?php echo get_post_meta($post->ID, 'twitterlink', true); ?>">
                <div class="flex-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tw.png" class="img-responsive stars"></div>
            </a>
        </div>










    </main>

    <footer>
        <?php get_footer(); ?>
    </footer>

</body>

</html>
