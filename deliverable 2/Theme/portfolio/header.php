<nav class="navbar navbar-inverse navbar-custom ">
  <link href="https://fonts.googleapis.com/css?family=Bubbler+One|Dancing+Script|Kaushan+Script|Poiret+One|Shadows+Into+Light" rel="stylesheet">
    <div class="container-fluid backgroundCol">
        <div class="navbar-header">
            <a class="navbar-brand whiteText" href="<?php echo esc_url( home_url( '/' ) ); ?>">Larus Design</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">              
                    <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav" id="navB">
                <?php wp_list_pages(array('title_li' => null, 'exclude' => '57')); ?>
            </ul>
        </div>
    </div>
</nav>





