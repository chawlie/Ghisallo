<aside id="sidebar" class="small-12 large-4 columns">
	<div class="subpage-nav">
		<ul id="nav_sub">
			<?php
			if ($post->post_parent)
				$children = wp_list_pages("sort_column=menu_order&depth=1&title_li=&child_of=".$post->post_parent."&echo=0"); else
				$children = wp_list_pages("sort_column=menu_order&depth=1&title_li=&child_of=".$post->ID."&echo=0");
			if ($children) { ?>
			<?php echo $children; ?>
			<?php } ?>
		</ul>
	</div>
	<?php do_action('foundationPress_before_sidebar'); ?>
	<?php dynamic_sidebar("sidebar-widgets"); ?>
	<?php do_action('foundationPress_after_sidebar'); ?>
</aside>