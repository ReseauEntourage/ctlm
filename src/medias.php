<div class="container">
    <h2>Les articles sur le film</h2>
    <?php
    $loop = new WP_Query( array( 'post_type' => 'media') );
    if ( !($loop->have_posts()) )
        echo "<h4>Pas d'article pour l'instant</h4>";

    while ( $loop->have_posts() ) : $loop->the_post();
        ?>
        <?php $ids = get_the_ID(); ?>
        <div class="media">
            <h4><?php echo the_title(); ?></h4>
            <div class="texte_media">
                <?php echo the_content(); ?>
            </div>
            <?php $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
            if ( $image_src ):
            ?>
            <div class="image_media">
                <img src="<?php ' . $image_src[0]  . '?>" width="100%" />
            </div>
            <?php endif; ?>
        </div>
        <?php
    endwhile;
    ?>

</div>

