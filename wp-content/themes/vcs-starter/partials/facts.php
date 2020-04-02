<?php 
  //Duomeny isvedimas is ACF
    // get_field('lauko pavadinimas'); - reiksme grazona (return)
    // the_field('lauko pavadinimas'); - reiksme spausdinas (echo)

    $image5 = get_field('fan_background_image');
    // dump($image5);
?>

<section class="greyBgPic" style="background-image: url(<?php echo $image5['sizes']['1536x1536']; ?>);">
	<div class="greyBg">
        <div class="container">

            <div class="fleksas">
                <div class="columnFacts">
                    <h2><?php the_field('fan_heading'); ?></h2>
                </div>	
            </div>


            <div class="sizeDown">
                <div class="fleksas wrapinu lineOrange">

                    <?php
                        if(have_rows('fan_project_numbers_repeater')):
                            while(have_rows('fan_project_numbers_repeater')):
                                the_row(); 
                                
                    ?>
                                    
                        <div class="columnNumbers">
                            <h2><?php the_sub_field('numbers'); ?></h2>

                            <p class="paragraphNumbers"><?php the_sub_field('facts'); ?></p>
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
