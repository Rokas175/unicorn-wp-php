<section>



	<div class="container">
	
        <div class="columnTop">
            <h2 id="stories"><?php the_field('fa_section_heading'); ?></h2>
            <div class="paragraphTop">
                <?php the_field('fa_section_description'); ?> 
            </div>
        </div>	

        <div class="fleksas FTmsg">
            <?php
            if(have_rows('fa_articles_repeater')):
                while(have_rows('fa_articles_repeater')):
                    the_row(); 
             ?>
                    <!-- HTML kuris kartojasi -->
                    <div class="columnFA">
                        <div class="whiteMsg">
                            <h2><?php the_sub_field('heading'); ?></h2>
                            <p class="paragraphFA"><?php the_sub_field('description'); ?></p>
                        </div>

                        <div class="fleksas picText">
                            <div>
                                <?php 
                                $image1 = get_sub_field('image');
                                // dump($image1);
                                ?>
                                <!-- <img class="profPic" src="assets/images/gail.jpg" alt="gail"> -->
                                <img class="profPic" src="<?php echo $image1['sizes']['pfpic']; ?>" alt="<?php bloginfo('name'); ?>">

                            </div>
                            <div class="author">
                                <p><?php the_sub_field('author'); ?></p>
                                <P><?php the_sub_field('date'); ?></P>
                            </div>
                        </div>
                    </div>  
                    
            <?php
                endwhile;
            endif;
            ?>
        
        </div>	
	
			
		
	</div>

</section>