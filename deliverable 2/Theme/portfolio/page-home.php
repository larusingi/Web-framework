<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">

    <title>Larus portfolio </title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/default.css">
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

    <main id="frontMain" class="Site-content">

        <div class="cell">
            <a id="a0" href="<?php echo get_page_link(get_post_meta($post->ID, 'linkToProject', true));?>"> 
                <img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/img/proj.png" alt="projects"></a>
        </div>
        <div class="cell">
            <a id="a1" href="<?php echo get_page_link(get_post_meta($post->ID, 'linkToContact', true));?>">    <img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact.png" alt="projects"></a>
        </div>
        <div class="cell">
            <a id="a2" href="<?php echo get_page_link(get_post_meta($post->ID, 'linkToAbout', true));?>">   <img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about.png" alt="projects"></a>
        </div>

    </main>

    <footer>
        <?php get_footer(); ?>
    </footer>

</body>

<!--<script type="text/javascript">
    
    $(document).ready(function() {
   
        console.log("ready!");
        
            $('ul li a').each(function(i) {
                 console.log(i);
               $("#a"+i).attr("href", $(this).attr('href')) 
             
    });
        
    });
</script>-->

</html>
