<section class="footerDark">
	<div class="container">

		<div class="fleksas">

			<div class="columnFooter">

				<div class="footer-logo">
                    <a href="#">

                        <?php 

                            $image = get_field('fo_logo_image', 'option');

                        ?>

                        <img src="<?php echo $image['sizes']['footer_logo'] ?>" alt="<?php bloginfo('name'); ?>">
                    </a>

				</div>

				<div>
					<p class="paragraphFooter"><?php the_field('facb_section_description'); ?>
					</p>
				</div>

				
                <div>
                <?php echo do_shortcode(get_field('facb_form_shortcode')); ?>
                </div>

			</div>

			<div class="fleksas all-footer-menus">
				<div class="footer-menu-column">
					<div>
						<h3><?php the_field('facb_links_section'); ?></h3>
						
						<ul>
						<?php
						if(have_rows('facb_link_section_names')):
							while(have_rows('facb_link_section_names')):
								the_row(); 
						?>
							<!-- HTML kuris kartojasi -->

							<li><a href="#"><?php the_sub_field('social_names'); ?></a></li>
						
						<?php
							endwhile;
						endif;
						?>
						</ul>
					</div>
				</div>

				<div class="footer-menu-column">
					<div>
						<h3><?php the_field('cacb_friends_section'); ?></h3>

						<ul>
						<?php
						if(have_rows('facb_friends_section_names')):
							while(have_rows('facb_friends_section_names')):
								the_row(); 
						?>
							<!-- HTML kuris kartojasi -->

							<li><a href="#"><?php the_sub_field('friend_names'); ?></a></li>
						
						<?php
							endwhile;
						endif;
						?>
						</ul>

					</div>
				</div>

				<div class="footer-menu-column">
					<div>
						<h3><?php the_field('facb_social_section'); ?></h3>
						<ul>
						<?php
						if(have_rows('facb_social_section_names')):
							while(have_rows('facb_social_section_names')):
								the_row(); 
						?>
							<!-- HTML kuris kartojasi -->

							<li><a href="#"><?php the_sub_field('social_names'); ?></a></li>
						
						<?php
							endwhile;
						endif;
						?>
						</ul>
					</div>
				</div>

			</div>
			
		</div>	


		<!-- <hr> -->

		<div class="fleksas footer-last-block">
			<div class="footer-end-column">
				<p class="last-block-p"><?php the_field('facb_section_end'); ?></p>
				<p class="last-block-p"><?php the_field('facb_copyright_section'); ?></p>
			</div>


			<div class="footer-end-column">
				<?php

				$menu_options = [
					'menu_class' => 'meniu-end',
					'container' => false,
					'theme_location' => 'footer-navigation',
					'walker' => new custom_navwalker()
				];

				wp_nav_menu($menu_options);
				?>


			</div>

		</div>








	</div>

</section>



