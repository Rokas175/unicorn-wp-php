<section>
	<div class="container">

		<div class="fleksas">
			<div class="columnTM">

				<h2 id="hello"><?php the_field('tm_section_heading'); ?></h2>

				<div class="paragraphTM"><?php the_field('tm_section_description'); ?></div>
			</div>	

			
		</div>

   

		<div class="fleksas wrap-members">
            <?php
                if(have_rows('tm_members_section_repeater')):
                    while(have_rows('tm_members_section_repeater')):
                        the_row(); 
            ?>

                <div class="columnMemb">

                    <?php 
                    $image4 = get_sub_field('image');
                    // dump($image4);
                    ?>
                
                    <img class="iconTM" src="<?php echo $image4['sizes']['tmembers']; ?>" alt="<?php bloginfo('name'); ?>">

                    <h2><?php the_sub_field('heading'); ?></h2>

                    <p class="paragraphMemb"><?php the_sub_field('description'); ?>
                    </p>
                </div>	

            <?php
                endwhile;
            endif;
            ?>
			
		</div>

	</div>

</section>
