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
</aside>