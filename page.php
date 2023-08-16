<?php
    get_header();
    global $post;
?>
	<main id="post-<?php the_ID(); ?>">
		<?php
			the_post();
            if(is_front_page()){
                get_template_part( 'template-parts/content', 'home' );
            }else{
                get_template_part( 'template-parts/content', 'page' );
            }
		?>
	</main>
<?php
get_footer();
