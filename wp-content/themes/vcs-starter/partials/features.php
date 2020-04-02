<section class="FTsection">
	<div class="container">

		<div class="fleksas wrap-features">
            <?php
            if(have_rows('fb_features_repeater')):
                while(have_rows('fb_features_repeater')):
                    the_row(); //gauname vienos eilutes duomenis
                    //the_sub_field('sub_field_pavadinimas'); //reiksme atspausdina
                    //get_sub_field('sub_field_pavadinimas'); //reiksme grazina
                    ?>
                    <!-- HTML kuris kartojasi -->
                        <div class="columnFT">

                            <?php the_sub_field('icon'); ?>
                            <!-- <img class="iconFT" src="assets/images/icon2.png"> -->

                            <h2><?php the_sub_field('heading'); ?></h2>

                            <p class="paragraphFT"><?php the_sub_field('description'); ?>
                            </p>
                        </div>	
                    <?php
                endwhile;
            endif;
            ?>

		</div>
	</div>

</section>