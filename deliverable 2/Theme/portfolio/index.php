<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">

    <title>Larus portfolio </title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/default.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/postPage.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/frontpage.css">
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



        <?php $featured_post = new WP_Query(array('tag' => 'featured')); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php include 'imgLoader.php';?>
        <div class="post-container ">
            <div class="mini-container">
                <a href="<?php echo get_permalink(); ?>">
                    <div class="row">

                        <div class="col-xs-12 col-sm-3 ">

                            <div class="col-xs-4 col-sm-12 languageBox">
                                    
                                <div class="">
                                    <img src="<?php  echo get_stylesheet_directory_uri(); ?>/img/<?php echo $img0?>.png" class="center" onerror='this.style.display = "none"'>
                                </div>

                            </div>
                            <div class="col-xs-4 col-sm-12  languageBox">

                                <div class="">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo $img1?>.png" class="center" onerror='this.style.display = "none"'>
                                </div>

                            </div>
                            <div class="col-xs-4 col-sm-12 languageBox">

                                <div class="">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo $img2?>.png" class="center" onerror='this.style.display = "none"'>
                                </div>

                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-5">

                            <div class="middleBox">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="center" alt="project image" onerror='this.style.display = "none"'>
                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <div class="   headerTitle">
                                <?php the_title(); ?>
                            </div>
                            <div class="summaryText">
                                <?php the_excerpt(); ?>
                            </div>

                        </div>

                    </div>

                </a>

            </div>
            <div class="timeText col-sm-offset-1 col-xs-12 col-sm-9">Added on
                <?php echo get_post_time('d/m/Y \\- H:i  '); ?> </div>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>

    </main>

    <footer>
        <?php get_footer(); ?>
    </footer>

</body>

</html>
