<section>
	<div class="container">

		<div class="fleksas">
			<div class="columnTweet">

				<div class="iconTweet">
                    <?php the_field('tb_icon'); ?>
                </div>
                
				<div class="tweet-text">
                    <?php 
                    $image7 = get_field('tb_image');
                    // dump($image7);
                    ?>

                    <div class="tweet-gail-image">
                        <img class="profPic" src="<?php echo $image7['sizes']['pfpic']; ?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                    
                    <p class="paragraphTweet"><?php the_field('tb_description'); ?>
                    </p>
                    <p class="paragraphLoveless"><?php the_field('tb_eta'); ?></p>

				</div>
			</div>	

			
		</div>
	</div>

</section>