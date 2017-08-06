<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package activello
 */
?>
				</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
			</div><!-- close .row -->
		</div><!-- close .container -->
	</div><!-- close .site-content -->

	<div id="footer-area">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row">
			
					<?php if( !get_theme_mod('footer_social') ) activello_social_icons(); ?>
					<div class="col-sm-3 col-md-3">
						<div class="boxes_footer">
						 <h1>About US</h1>
						 <div class="img_about"><imr src="../img/img1.png"/></div>
						 <p clas="text_about">
						 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
						 incididunt ut labore et dolore magna aliqua.sed do eiusmod tempor incididunt
						  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
						 incididunt ut labore et dolore magna aliqua.sed do eiusmod tempor incididunt
						 </p>
						 <div class="readmore_about"><a href="#"><p class="text_read_about">Read More &#187;<p></a></div>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<div class="boxes_footer">
						<h1>QUICK LINKS</h1>

<?php query_posts('showposts=5'); if (have_posts()) : while (have_posts()) : the_post(); ?>

						<a href="<?php the_permalink(); ?>"><p class="quick_text"><span>&#187; </span><?php the_title(); ?></p></a>
						<?php endwhile;?>
						<?php endif; wp_reset_query(); ?>

						
						</div>
					</div>
						<div class="col-sm-3 col-md-3">
						<div class="boxes_footer">
						 <h1>LATEST BLOG POST</h1>
						 <?php query_posts('showposts=5'); if (have_posts()) : while (have_posts()) : the_post(); ?>

						<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						
						<p><?php echo get_the_author(); ?></p>
						<p><?php $mydate =the_date(); 
						 echo date('l, F jS, Y', strtotime($mydate));
						 ?></p>
						 <p clas="text_about"> <?php the_excerpt(); ?>
        </p>
		<div class="readmore_about"><a href="#"><p class="text_read_about">Read More &#187;<p></a></div>
						
						<p><?php the_tags(); ?></p>

							<?php endwhile;?>

								

<?php endif; wp_reset_query(); ?>
						
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<div class="boxes_footer">
						<h1>CONTACT US</h1>
						<form action="/action_page.php">
	<input type="text" class="name_contact" placeholder="Name">
	<input type="email" class="email_contact"placeholder="Email">
	<input type="text" class="subject_contact" placeholder="Subject">
	
	<textarea id="subject" class="message_contact" name="message" placeholder="Message" style="height:200px"></textarea>
	
	<input  class="submit_contact" type="submit" value="Submit">

  </form>
						</div>
					</div>
					</div>
					
				</div>
				
			
			</div>
			
			</div>
			</div><!-- .site-info -->
			
			<!--<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer> 
		
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>