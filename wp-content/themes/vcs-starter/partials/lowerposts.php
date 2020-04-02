<section class="FTsection">
	<div class="container">

		<div class="posts-slider fleksas">

        <?php
            if(have_rows('lp_lower_posts_repeater')):
                while(have_rows('lp_lower_posts_repeater')):
                    the_row(); //gauname vienos eilutes duomenis
                    //the_sub_field('sub_field_pavadinimas'); //reiksme atspausdina
                    //get_sub_field('sub_field_pavadinimas'); //reiksme grazina
                    ?>
                    <!-- HTML kuris kartojasi -->
                        <div class="columnLower">

                            <div class="vertLine">
                                <h2><?php the_sub_field('header'); ?></h2>
                                <p class="paragraphLower"><?php the_sub_field('info'); ?>
                                </p>
                            </div>
                        </div>	

                    <?php
                endwhile;
            endif;
            ?>	
	
		</div>
    </div>

</section>