<section>
	<div class="container Empty-space">

        <?php
            if(have_rows('pb_posts_repeater')):
                while(have_rows('pb_posts_repeater')):
                    the_row(); //gauname vienos eilutes duomenis
                    //the_sub_field('sub_field_pavadinimas'); //reiksme atspausdina
                    //get_sub_field('sub_field_pavadinimas'); //reiksme grazina
        ?>
                        		<div class="columnChess fleksas">

                                <?php 
                                $image6 = get_sub_field('image');
                                // dump($image6);
                                ?>

                                    <div class="chessBlock">
                                        <img src="<?php echo $image6['sizes']['post_pics']; ?>" alt="<?php bloginfo('name'); ?>">

                                    </div>

                                    <div class="chessBlock centering">

                                        <div class="preheadingChess"><?php the_sub_field('pre_heading'); ?></div>
                                        <h2><?php the_sub_field('heading'); ?></h2>

                                        <p class="paragraphChess"><?php the_sub_field('description'); ?>
                                        </p>
                                    </div>

                                </div>

        <?php
                endwhile;
            endif;
        ?>

	</div>

</section>
