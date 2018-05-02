<div class="menu_burger">
    <div class="titre_menu_burger"><h1>Comme tout le monde</h1></div><div class="burger">
        <div class="tranche"></div>
        <div class="tranche"></div>
        <div class="tranche"></div>
    </div>
</div>
<div class="fenetre">
    
</div>
<div class="menu_ouvert">
    <ul>
        <li><h3 class="titre_menu">Menu</h3><i class="fa fa-times" aria-hidden="true"></i></li>
        <a href="index.php" <?php if ($_GET[page]=='medias' or $_GET[page]=='actualites' or $_GET[page]=='partenaires' or $_GET[page]=='projections' or $_GET[page]=='filmequipe' or $_GET[page]=='webserie' or $_GET[page]=='contact'){ }else {echo 'class="active"';} ?>><li>Accueil</li></a>
        <a href="/?page=filmequipe" <?php if ($_GET[page]=='filmequipe'){ echo 'class="active"';} ?>><li>Le film et l'équipe</li></a>
        <a href="/?page=projections" <?php if ($_GET[page]=='projections'){ echo 'class="active"';} ?>><li>Voir le film</li></a>
        <a href="/?page=actualites" <?php if ($_GET[page]=='actualites'){ echo 'class="active"';} ?>><li>1000 projections</li></a>
        <a href="/?page=webserie" <?php if ($_GET[page]=='webserie'){ echo 'class="active"';} ?>><li>La web-série</li></a>
        <a href="/?page=medias" <?php if ($_GET[page]=='medias'){ echo 'class="active"';} ?>><li>Médias</li></a>
        <a href="/?page=partenaires" <?php if ($_GET[page]=='partenaires'){ echo 'class="active"';} ?>><li>Partenaires</li></a>
        <a href="/?page=contact" <?php if ($_GET[page]=='contact'){ echo 'class="active"';} ?>><li>Contact</li></a>
    </ul>
</div>
<div class="menu">
    <a href="index.php"><img class="logo" src="wp-content/themes/ctlm/images/logo.png"></a>
    <ul>
        <li><a href="index.php" <?php if ($_GET[page]=='medias' or $_GET[page]=='actualites' or $_GET[page]=='partenaires' or $_GET[page]=='projections' or $_GET[page]=='filmequipe' or $_GET[page]=='webserie' or $_GET[page]=='contact'){ }else {echo 'class="active"';} ?>>Accueil</a></li>
        <li><a href="/?page=filmequipe" <?php if ($_GET[page]=='filmequipe'){ echo 'class="active"';} ?>>Le film et l'équipe</a></li>
        <li><a href="/?page=projections" <?php if ($_GET[page]=='projections'){ echo 'class="active"';} ?>>Voir le film</a></li>
        <li><a href="/?page=actualites" <?php if ($_GET[page]=='actualites'){ echo 'class="active"';} ?>>1000 projections</a></li>
        <li><a href="/?page=webserie" <?php if ($_GET[page]=='webserie'){ echo 'class="active"';} ?>>La web-série</a></li>
        <li><a href="/?page=medias" <?php if ($_GET[page]=='medias'){ echo 'class="active"';} ?>>Médias</a></li>
        <li><a href="/?page=partenaires" <?php if ($_GET[page]=='partenaires'){ echo 'class="active"';} ?>>Partenaires</a></li>
        <li><a href="/?page=contact" <?php if ($_GET[page]=='contact'){ echo 'class="active"';} ?>>Contact</a></li>
    </ul>
</div>
<script>
    $('.burger').click(function(){
        $('.fenetre').css({'display':'inline-block'});
        $('.menu_ouvert').css({'display':'inline-block'});
    })
    $('.menu_ouvert li i').click(function(){
        $('.fenetre').css({'display':'none'});
        $('.menu_ouvert').css({'display':'none'});
    });
    $('.fenetre').click(function(){
        $('.fenetre').css({'display':'none'});
        $('.menu_ouvert').css({'display':'none'});
    });
</script>