<section class="FTsection">
<div class="container">


	<div class="fleksas">
		<div class="columnClient">

				<div>

				<h2><?php the_field('cb_section_heading'); ?></h2>
				</div>
				
				<!-- <div class="slider"> -->
				<div class="client-slider">
                
                <?php
                if(have_rows('cb_clients_repeater')):
                    while(have_rows('cb_clients_repeater')):
                        the_row(); 
                        ?>
                        <!-- HTML kuris kartojasi -->
                            <?php 
                            $image2 = get_sub_field('image');
                            // dump($image1);
                            ?>

                        <div class="clientImg">
							<img src="<?php echo $image2['sizes']['client_logos']; ?>" alt="<?php bloginfo('name'); ?>">
						</div>                        
                        <?php
                    endwhile;
                endif;
                ?>
                
			 </div>

		</div>	
	</div>
</div>

</section>