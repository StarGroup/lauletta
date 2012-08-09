 </div>
		   <!-- END CONTENT -->
	</div>
    <!-- END WRAPPER -->

	<!-- BEGIN FOOTER -->
	<div id="footer">
	<?php if( (get_option('boldy_footer_actions')!="no") && is_home() ) {?>

		<div id="footerActions" <?php if(get_option('boldy_actions_hide')=="hidden"){echo 'style="display:none"';}?>>
			<div id="footerActionsInner">

				<div id="quickContact">
          <p id="success" class="successmsg" style="display:none;">Your email has been sent! Thank you!</p>
          <p id="bademail" class="errormsg" style="display:none;">Please enter your name, a message and a valid email address.</p>
          <p id="badserver" class="errormsg" style="display:none;">Your email failed. Try again later.</p>
					<form action="<?php //bloginfo('template_url'); ?>/sendmail.php" method="post" id="quickContactForm">
            <div class="leftSide">
              <input type="text" placeholder="your name" id="quickName" name="name" />
              <input type="text" placeholder="your email" id="quickEmail" name="email" />
              <input type="submit" name="submit" id="submitinput" value="Send"/>
            </div><!--/.leftSide-->
            <div class="rightSide">
              <textarea id="quickComment" name="comment" placeholder="your message"></textarea>
            </div><!--/.rightSide-->
            <input type="hidden" id="quickReceiver" name="receiver" value="<?php //echo get_option('boldy_contact_email')?>"/>
					</form>
				</div><!--/#quickContact-->

        <?php if(get_option('boldy_twitter_user')!="" && get_option('boldy_latest_tweet')!="no"){ ?>
          <div id="twitter">
            <a href="http://twitter.com/<?php echo get_option('boldy_twitter_user'); ?>" class="action">Follow Us!</a>
            <div id="latest">
              <div id="tweet">
                <div id="twitter_update_list"></div>
              </div><!--/#tweet-->
              <div id="tweetBottom"></div>
            </div><!--/#latest-->
          </div><!--/#twitter-->
          <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
          <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php echo get_option('boldy_twitter_user'); ?>.json?callback=twitterCallback2&amp;count=<?php
          if(get_option('boldy_number_tweets')!=""){
          echo get_option('boldy_number_tweets');
          }else{
          echo "1";
          } ?>">
          </script>
        <?php }?>

			</div><!--/#footerActionsInner-->
		</div><!--footerActions-->

		<?php }?>
		<div id="footerWidgets">
			<div id="footerWidgetsInner">
				<!-- BEGIN FOOTER WIDGET -->
				<?php /* Widgetized sidebar */
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) : ?><?php endif; ?>


				<div style="position: relative">				<?php
//http://codex.wordpress.org/Function_Reference/get_post

/**
* set arguments to query wordpress content
* @arg:  cat = category number (found when hovering over category title for editing)
* @arg:  p = post id (found when hovering over post title for editing)
**/

/*
Locations Loop
*/
$args = array( 'cat' => '4', 'p' => '243' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<div class="footer-block-locations" >

	<div class="block-content">

    <?php the_content(); ?>

	</div><!-- /.block-content -->

</div><!-- /.footer-block-->
<div style="clear:both;"></div>
<?php
 endwhile;
?>

<?php
/*
More Info Loop
*/
$args = array( 'cat' => '5', 'p' => '266' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<div class="footer-block-info">

	<div class="block-content">

    <?php the_content(); ?>

	</div><!-- /.block-content -->

</div><!-- /.footer-block-->
<div style="clear:both;"></div>
<?php
 endwhile;
?>

<?php
/*
Our Lawyers Loop
*/
$args = array( 'cat' => '6', 'p' => '269' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<div class="footer-block-lawyers" >

	<div class="block-content">

    <?php the_content(); ?>

	</div><!-- /.block-content -->

</div><!-- /.footer-block-->
<div style="clear:both;"></div>
<?php
 endwhile;
?>

<?php
/*
Contact Us Loop
*/
$args = array( 'cat' => '7', 'p' => '272' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<div class="footer-block-contact">

	<div class="block-content">

    <?php the_content(); ?>

	</div><!-- /.block-content -->

</div><!-- /.footer-block-->
<div style="clear:both;"></div>
<?php
 endwhile;
?>
			</div>
	<!-- END FOOTER WIDGETS -->
				<!-- BEGIN COPYRIGHT -->
				<div id="copyright">
					<div id="copyright-block">
					<?php if (get_option('boldy_copyright') <> ""){
						echo stripslashes(stripslashes(get_option('boldy_copyright')));
						}else{
							echo 'Just go to Theme Options Page and edit copyright text';
						}?>
						</div>
          <div id="footer-watermark">
          <img src="<?php bloginfo('template_directory'); ?>/images/lauletta-footer-watermark.png" alt=""/>
          </div>
				</div>
				<!-- END COPYRIGHT -->
				</div>

		</div>
	</div>
	<!-- END FOOTER -->
</div>
<!-- END MAINWRAPPER -->
<?php if (get_option(' boldy_analytics') <> "") {
		echo stripslashes(stripslashes(get_option('boldy_analytics')));
	}

wp_footer()
?>

</body>
</html>


