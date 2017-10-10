<head>
    <meta charset="utf-8">

    <title>Larus portfolio </title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/default.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/postPage.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/single.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-theme.css">

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.js"></script>
    <meta name="description" content="Larus api">

</head>

<body class="Site">

    <header class="headerBackg">
        <?php get_header(); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    </header>

    <main class="Site-content">
        <div class="col-xs-12">
            <h1 class="centerText headerText">
                <?php the_title(); ?>
            </h1>
        </div>

        <div class="col-xs-12">
            <div class="">
                <img src="<?php the_post_thumbnail_url(); ?>" class="center imgBorder" alt="project image">
            </div>
        </div>

        <div class="col-xs-12 contentBox">
            <?php echo get_the_content(); ?>
        </div>

        <div class="timeText col-xs-12">Added on
            <?php echo get_post_time('d/m/Y \\- H:i  '); ?>
        </div>

        <div class="col-xs-12 ">

            <div class="wrapper">

                <div>
                    <?php if (get_previous_post()) : ?>
                    <a href="<?php echo get_previous_post()->guid; ?>">
                        <button class="button  standard nav-previous"> <- Previous</button>
                    </a>
                    <?php endif; ?>

                    <?php if (get_next_post()) : ?>
                    <a href="<?php echo get_next_post()->guid; ?>">
                        <button class="button  standard nav-next">Next -> </button>
                    </a>
                    <?php endif; ?>

                </div>


            </div>

        </div>

    </main>

    <footer>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php get_footer(); ?>
    </footer>

</body>
