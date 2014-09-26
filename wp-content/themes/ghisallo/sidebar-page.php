<aside id="sidebar" class="small-12 large-4 columns">
	<div class="subpage-nav">
		<ul id="nav_sub">
			<?php
	        if($post->post_parent) {

	            $parent = get_post($post->post_parent);

	            //Check to see if we have a grandparent
	            if($parent->post_parent) {
	                $page_list    = wp_list_pages( array( 'title_li' => '', 'child_of' => $parent->post_parent, 'echo' => false ) );
	            }

	            else
	            {
	                $page_list    = wp_list_pages( array( 'title_li' => '', 'child_of' => $post->post_parent, 'echo' => false ) );
	            }
	        }


	        if ($page_list) { ?>

	            <nav class="sidebar-nav">
	                <ul>
	                    <?php echo $page_list; ?>
	                </ul>
	            </nav>
		    <?php } ?>
		</ul>
	</div>
	<hr>
	<div class="sidebar-features">
		<aside>
			<img src="<?php bloginfo('template_url'); ?>/assets/img/img-side-donate.jpg">
			<h3>Give Us a Hand</h3>
			<p>We need additional funds to support our current youth programs and expand to new schools and community partners in addition to continued development of our Cycle Academy materials.</p>
			<p>We are also in need of used but usable kids bikes for our free youth Earn-A-Bike and Maintenance program we offer through Boys and Girls Club East Club.</p>
			<a href="<?php echo home_url();?>/donate/" class="button">Donate Now</a>
		</aside>
	</div>
</aside>
