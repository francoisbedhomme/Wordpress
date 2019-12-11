<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
  }
}
?>

</div>

<?php
    $lien_dinscription = get_field('lien_dinscription');
    $image_de_fond = get_field('image_de_fond');
?>

<div id="img1">
    <h1 id="txt11"> <?php the_field('baseline'); ?> </h1>
    <h2 id="txt12"> <?php the_field('titre_marron'); ?> </h2>
    <h3 id="txt13"> <?php the_field('titre_vert'); ?> </h3>
    <a href="<?php echo $lien_dinscription['url']; ?>" id=bouton1><?php echo $lien_dinscription['title']; ?></a>
    <style>
        #img1 {
            background-image: url(<?php echo $image_de_fond['url']; ?>); 
        }
    </style>
</div>

<div id="img2">
    <h1 id="txt21"> <?php the_field('champ_texte_conf'); ?> </h1>
    <h3 id="trait">_______</h3>
    <h2 id="txt22"> <?php the_field('champ_texte_riche_conf'); ?> </h2> 
</div>



<?php
    $champ_image = get_field('champ_image');
?>

<div id="img3"></div>

    <style>
        #img3 {
        background-image: url(<?php echo $champ_image['url']; ?>); 
        }
    </style>



<div id="img4">
    
    <h1 id="txt21"> <?php the_field('champ_texte_prog0'); ?> </h1>
    <h3 id="trait">_______</h3>
    
    <div id="colones">
    <div id="colone1">
    <h1 id="titre1"><?php the_field('champ_texte_prog1'); ?> </h1>        
        <div id="liste1">
            <?php
            $colonnes = get_field('champ_repeteur_prog1');
            
            echo"<table>";
            
            if($colonnes) {
                foreach($colonnes as $colonne) {
                    echo "<tr><td id='h1'>" . $colonne['heure1'] . "</td><td id='a1'>" . $colonne['activite1'] . "</td></tr>";
                }
            }
                
            echo "</table>";
                     
            ?>
        </div>
    </div>
    
    <div id="colone2">
        <h1 id="titre2"><?php the_field('champ_texte_prog2'); ?> </h1>
            <div id="liste2">
            <h2 id="L1">11:15 Jacynthe lafrenière, lauréate du prix de recherche</h2>
            <h2 id="L1">11:35 Le projet EPICALIM de la fondation</h2>
            <h2 id="L1">12:00 Cérémonie du prix de recherche</h2>
            <h2 id="L1">12:30 Lunch</h2>
            </div>
    </div>
    </div>
    <input id="bouton1"
       type="button"
       value="S'inscrire aux rencontres">
    
    <img id="legumes" src="./wp-content/themes/my-theme/assets/img/programme.png">

</div>



<?php get_footer(); ?>


