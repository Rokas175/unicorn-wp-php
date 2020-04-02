<header class="main-header">

<div class="container fleksas header-line">
    <div class="header-logo">
            <a href="#">

            <?php 
            //Duomeny isvedimas is ACF
            // get_field('lauko pavadinimas'); - reiksme grazona (return)
            // the_field('lauko pavadinimas'); - reiksme spausdinas (echo)

            // logo_type = 1 - Text, 0 - Image
            if(get_field('logo_type', 'option')):
                echo "<h2>".get_field('text', 'option')."</h2>";
            else:
                $image = get_field('image', 'options');
                // dump($image);
                echo '<img src="'.$image['sizes']['logo'].'" alt="'.$image['alt'].'">';
            endif;
            

       
     // $image = get_field('image');
            // dump($image);
            ?>

                <!-- <img src="assets/images/logo.png" alt="Unicorn"> -->
            </a>
    </div>




<div class="burger"><i class="fas fa-hamburger"></i></div>
    <nav class="main-nav">

        <?php

        $menu_options = [
            'menu_class' => 'meniu fleksas',
            'container' => false,
            'theme_location' => 'primary-navigation',
            'walker' => new custom_navwalker()
        ];

        wp_nav_menu($menu_options);
        ?>

    </nav>

</div>
</header>