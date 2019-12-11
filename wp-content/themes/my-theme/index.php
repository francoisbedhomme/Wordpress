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

<div id="img1">
    <h1 id="txt11">Les rencontres de la Fondation le 03 décembre à Bruxelles</h1>
    <h2 id="txt12">Chaîne alimentaire végétale et durabilté :</h2>
    <h3 id="txt13">Une question d'équilibre !</h3>
    <input id="bouton1"
       type="button"
       value="S'inscrire aux rencontres">
</div>

<div id="img2">
    <h1 id="txt21">La conférence</h1>
    <h3 id="trait">_______</h3>
    <h2 id="txt22">Les Rencontres de la Fondation s'intitulent cette année "Chaîne alimentaire végétale et durabilité : une question d'équilibre" ! Elles se tiendront le 3 décembre prochain à Bruxelles et auront pour objectif de décrypter la transition nutritionelle des système alimentaires à travers le monde, qui appelle à favoriser une alimentation plus végétale.</h2> 
</div>

<div id="img3"></div>

<div id="img4">
    
    <h1 id="txt21">au programme</h1>
    <h3 id="trait">_______</h3>
    
    <div id="colones">
    <div id="colone1">
    <h1 id="titre1">les végétaux dans la chaine alimentaire</h1>
        <div id="liste1">
            <h2 id="L1">8:30 introduction par christophe Fondation</h2>
            <h2 id="L1">9:00 Wim de vries wageningen</h2>
            <h2 id="L1">9:45 Bejamin alles paris XIII university</h2>
            <h2 id="L1">10:15 armando perez cueto copenhagen university</h2>
            <h2 id="L1">10:45 cofee break</h2>
        </div>
    </div>
    
    <div id="colone2">
        <h1 id="titre2">les activités de la fondation</h1>
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


