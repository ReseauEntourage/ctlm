<div class="container">
    <h2>Les prochaines projections</h2>
    <?php 
    $loop = new WP_Query( array( 'post_type' => 'projection') );
    if ( !($loop->have_posts()) )
        echo "<h4>Pas de projection prévue pour l'instant</h4>";

    while ( $loop->have_posts() ) : $loop->the_post();
        ?> 
        <?php $ids = get_the_ID(); ?>
        <div class="projection">
            <h4><?php echo the_title(); ?></h4>
            <div class="infos_proj">
                <?php echo the_content(); ?></h4>
            </div>
            <?php $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
            if ( $image_src ):
            ?>
            <div class="image_proj">
                <img src="<?php ' . $image_src[0]  . '?>" width="100%" />
            </div>
            <?php endif; ?>
        </div>
        <?php
    endwhile;
    ?>

</div>
    