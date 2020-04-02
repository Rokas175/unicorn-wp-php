<section>
	<div class="container">

		<div class="fleksas">
			<div class="columnPS">

				<h2><?php the_field('pas_section_heading'); ?></h2>

				<p class="paragraphPS"><?php the_field('pas_section_description'); ?>
				</p>
			</div>	
		</div>

		<div class="fleksas centering">

			<ul class="fotoMenu">
                <?php
                if(have_rows('pas_menu_section_repeater')):
                    while(have_rows('pas_menu_section_repeater')):
                        the_row(); 
                        ?>
                        <!-- HTML kuris kartojasi -->

                        <li><a href="#"><?php the_sub_field('menu_option'); ?></a></li>
                    
                        <?php
                    endwhile;
                endif;
                ?>

			</ul>

		</div>
	</div>

	<!-- <div class="portfolioSlider fleksas"> -->
	<div class="portfolioSlider">
		<div class="screenshots-slider">
            <?php
                if(have_rows('pas_section_screenshots_repeater')):
                    while(have_rows('pas_section_screenshots_repeater')):
                        the_row(); 
                        ?>
                        <!-- HTML kuris kartojasi -->
                            <?php 
                            $image3 = get_sub_field('screenshot');
                            // dump($image1);
                            ?>

                            <div>
                                <img src="<?php echo $image3['sizes']['screenshots']; ?>" alt="<?php bloginfo('name'); ?>">
                            </div>                        
                        <?php
                    endwhile;
                endif;
            ?>
        
		</div>

	</div>


</section>