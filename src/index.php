<?php
/**
 * The main template file
 */
?>
<?php
	get_template_part( 'head', get_post_format() );
	get_template_part( 'menu', get_post_format() );
	if ($_GET['page']=='partenaires'){
	    get_template_part( 'partenaires', get_post_format() );
	} else if ($_GET['page']=='medias'){
	    get_template_part( 'medias', get_post_format() );
	} else if ($_GET['page']=='actualites'){
	    get_template_part( 'actualites', get_post_format() );
	} else if ($_GET['page']=='projections'){
	    get_template_part( 'projections', get_post_format() );
	} else if ($_GET['page']=='filmequipe'){
	    get_template_part( 'filmequipe', get_post_format() );
	} else if ($_GET['page']=='webserie'){
	    get_template_part( 'webserie', get_post_format() );
	} else if ($_GET['page']=='contact'){
	    get_template_part( 'contact', get_post_format() );
	} else {
        get_template_part( 'accueil', get_post_format() );
	}
?>
</div>
	<?php	get_footer(); ?>
