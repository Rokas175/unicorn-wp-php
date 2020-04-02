<section>
<?php 
    //Duomeny isvedimas is ACF
    // get_field('lauko pavadinimas'); - reiksme grazona (return)
    // the_field('lauko pavadinimas'); - reiksme spausdinas (echo)

    $image = get_field('waw_icon');
    // dump($image);
    // http://localhost/wp/wp-content/uploads/2020/03/brocoli.png
    
    ?>


	<div class="container">

		<div class="fleksas">
			<div class="columnW">

            <img class="iconW" src="<?php echo $image['sizes']['1536x1536']; ?>" alt="<?php bloginfo('name'); ?>">
				

				<h2 id="about"><?php the_field('waw_heading'); ?></h2>

				<p class="paragraph1W"><?php the_field('waw_description'); ?>
				</p>
			</div>	

			
		</div>
	</div>

</section>