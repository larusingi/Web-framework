<head>
    <meta charset="utf-8">

    <title>Larus portfolio </title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/default.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-theme.css">

    

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.js"></script>
    <meta name="description" content="Larus api">

</head>





<body class="Site">

    <header class="">
        <?php get_header(); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    </header>

    <main class="Site-content" >
        <h1>
            <?php the_title(); ?>
        </h1>
        <?php the_content(); ?>
        
        <?php the_time('F j, Y'); ?>
        <p>the page templatezxzx</p>
        
       
      
        




    </main>

    <footer>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php get_footer(); ?>
    </footer>

</body>
