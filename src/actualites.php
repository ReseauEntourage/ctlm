<div class="container">
    <h2>1000 projections pour changer le regard sur les personnes sans-domicile</h2>
    <p class="info_ws">L’objectif de cette campagne est de mettre à disposition d’institutions (écoles, associations, administrations, hôpitaux, entreprises, cinémas…) le film comme tout le Monde afin qu’elles organisent des projections et contribuent à faire évoluer les préjugés sur les personnes sans-domicile. Les inscriptions à cette campagne sont ouvertes <a href="https://docs.google.com/forms/d/1y4gDomZACXvGMZ8Mdh0QA3tbU-82erIZNTgz-bRwBq4/viewform?edit_requested=true" target="_blank">en remplissant ce formulaire</a>.
    </p>
    <?php
    $loop = new WP_Query( array( 'type-post' => 'post'));
    if ( !($loop->have_posts()) )
        echo "<h4>Pas d'actualité pour l'instant</h4>";

    while ( $loop->have_posts() ) : $loop->the_post();
        ?>
        <div class="actu">
            <h4><?php echo get_the_title() ?></h4>
            <p class="date"><?php echo the_date() ?></p>
            <div class="texte">
                <p>
                <?php the_content() ?>
                </p>
            </div><div class="image_actu">
                 <?php $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                 echo '<img src="' . $image_src[0]  . '" width="100%"  />'; ?>
            </div>
        </div>
        <?php
    endwhile;
    ?>
</div>
