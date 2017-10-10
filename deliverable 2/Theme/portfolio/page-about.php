<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">

    <title>Larus portfolio </title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/default.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/about.css">
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
        <div class="col-xs-12 col-sm-8 topRow">
            <div>
                <div class="AboutText">About me:</div>
            </div>
            <div>
                <?php echo get_post_meta($post->ID, 'About_me_text', true); ?>
            </div>
            <div class=" ">
                <div class="AboutText">Education:</div>
            </div>


            <?php $education = get_post_meta($post->ID, 'education', false); ?>       
                <?php foreach($education as $ed) {echo '<div class=" ">'.$ed.'</div>';} ?>

        </div>

        <div class="col-xs-12 col-sm-4 topRow">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profile.jpg" class="profilePic center">
        </div>

        <div class="col-xs-12 skills">
            <div class="AboutText">Skills :</div>
        </div>
        

       <div class="flex-container col-xs-12">
            <div class="flex-item">Java:</div>
            <div class="flex-itemB"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/4star.png" class="img-responsive stars"></div>
        </div>
        <div class="flex-container col-xs-12">
            <div class="flex-item">C#:</div>
            <div class="flex-itemB"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/5star.png" class="img-responsive stars"></div>
        </div>

        <div class="flex-container col-xs-12">
            <div class="flex-item">Sql:</div>
            <div class="flex-itemB"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/4star.png" class="img-responsive stars"></div>
        </div>

        <div class="flex-container col-xs-12">
            <div class="flex-item">Javascript:</div>
            <div class="flex-itemB"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/5star.png" class="img-responsive stars"></div>
        </div>
        <div class="flex-container col-xs-12">
            <div class="flex-item">HTML:</div>
            <div class="flex-itemB"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/4star.png" class="img-responsive stars"></div>
        </div>
        <div class="flex-container col-xs-12">
            <div class="flex-item">CSS:</div>
            <div class="flex-itemB"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/3star.png" class="img-responsive stars"></div>
        </div>
        <div class="flex-container col-xs-12 bottom">
            <div class="flex-item">Photoshop:</div>
            <div class="flex-itemB"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1star.png" class="img-responsive stars"></div>
        </div>

    </main>

    <footer>
        <?php get_footer(); ?>
    </footer>

</body>

</html>
