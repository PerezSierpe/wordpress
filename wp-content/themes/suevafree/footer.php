<footer id="footer">
<div class="container">
	
		<?php if ( is_active_sidebar('bottom-sidebar-area') ) : ?>
        
            <!-- FOOTER WIDGET BEGINS -->
            
                <section class="row widget">
                    <?php dynamic_sidebar('bottom-sidebar-area') ?>
                </section>
                
            <!-- FOOTER WIDGET END -->
            
        <?php endif; ?>

         <div class="row copyright" >
            <div class="span6" >
            <p>
				<?php if (suevafree_setting('suevafree_copyright_text')): ?>
                   <?php echo stripslashes(suevafree_setting('suevafree_copyright_text')); ?>
                <?php else: ?>
                  <?php _e('Copyright','wip'); ?> <?php echo get_bloginfo("name"); ?> <?php echo date("Y"); ?> 
                <?php endif; ?> 
                | <?php _e('Theme by','wip'); ?> <a href="http://www.themeinprogress.com/" target="_blank">Theme in Progress</a> |
                <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_s' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>

            </p>
            </div>
            <div class="span6" >
                <!-- start social -->
                <div class="socials">
                    <?php suevafree_socials(); ?>
                </div>
                <!-- end social -->

            </div>
		</div>
	</div>
</footer>

<?php wp_footer() ?>   

</body>
<!-- Pure Chat Snippet -->
<script type='text/javascript'>
(function () {	var done = false;	var script = document.createElement('script'); script.async = true;	script.type = 'text/javascript';	script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) {	if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({ c: '11cb38d5-b18e-4783-b497-3db7757d4c7d', f: true }); done = true;	}	};	})();
</script>
<!-- End Pure Chat Snippet -->
</html>