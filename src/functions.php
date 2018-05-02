<?php add_theme_support( 'post-thumbnails' );
?>
<?php
  /*** CUSTOM FUNCTIONS ***/

  function root_url() {
    echo esc_url(home_url('/'));
  }

  function asset_path($path) {
    echo esc_url(path_join('/wp-content/themes/'.get_template(), $path));
  }

  function asset_url($path) {
    echo esc_url(path_join(get_template_directory_uri(), $path));
  }
?>
<?php
register_post_type(
  'projection',
  array(
    'label' => 'Projection',
    'labels' => array(
      'name' => 'Projections',
      'singular_name' => 'Projection',
      'all_items' => 'Projections',
      'edit_item' => 'Éditer Projection',
      'new_item' => 'Nouvelle Projection',
      'view_item' => 'Voir Projection',
      'not_found' => 'Pas de Projection trouvée',
      'not_found_in_trash'=> 'Pas de Projection dans la corbeille'
      ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
      'title',
      'editor',
      'thumbnail',
      'custom-fields',
    ),
    'has_archive' => true
  )
);

register_post_type(
  'media',
  array(
    'label' => 'Presse',
    'labels' => array(
      'name' => 'Articles de presse',
      'singular_name' => 'Article de presse',
      'all_items' => 'Articles de presse',
      'edit_item' => 'Éditer article de presse',
      'new_item' => 'Nouvel article de presse',
      'view_item' => 'Voir Presse',
      'not_found' => 'Pas d\'article trouvé',
      'not_found_in_trash'=> 'Pas d\'article dans la corbeille'
      ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
      'title',
      'editor',
      'thumbnail',
    ),
    'has_archive' => true
  )
);
?>