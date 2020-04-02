<?php 
  //Duomeny isvedimas is ACF
    // get_field('lauko pavadinimas'); - reiksme grazona (return)
    // the_field('lauko pavadinimas'); - reiksme spausdinas (echo)

    $image = get_field('hb_background_image');

?>


<section class="backgr-img main-page" style="background-image: url(<?php echo $image['sizes']['1536x1536']; ?>);">


	<div class="container hero">

		<div class="main-block"> 
			<h1 id="home"><?php the_field('hb_heading'); ?></h1>
			<p> <?php the_field('hb_description'); ?></p>

            <?php 
                $link = get_field('hb_link');
                $target = $link['target'] ? ' target="_blank" ' : '';
                     //      =    salyga       ?   jei true          : jei false
            ?>

        <a  href="<?php echo $link['url'] ?>" <?php echo $target; ?> class="header-button"><span class="headBtn-border"><?php echo $link['title']; ?></span></a>

		</div>
			
	</div>

	</div>
</section>