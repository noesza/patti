<?php
/*
Plugin Name: Plugin Patti
Plugin URI: http://noemieszabotorillec.referentnumerique-insarouen.fr
Description: Ceci est mon plugin Patti - étape 4, atelier dev back-end.
Author: Noémie Szabo
Version: 1.0
Author URI: http://noemieszabotorillec.referentnumerique-insarouen.fr
*/


function afficherTexte() {

$monTexte = "<hr><p>Destinée aux chercheurs d’emplois en situation de reconversion, la formation <strong>Référent.e Numérique Entreprise</strong> prépare en 8 mois aux métiers du numérique et est couronnée par l’obtention de <span style='color:red;'>3 certifications</span>.</p><p>Le métier de référent numérique consiste à accompagner les structures dans la mise en place de solutions numériques adaptées à leurs besoins.<br>La formation est menée conjointement par :</p><ul><li><a href='https://www.insa-rouen.fr/'>l’INSA</li><li><a href='https://www.cesi.fr/'>le CESI</li><li><a href='https://simplonline.co/'>Simplon.co.</li></ul><hr>";

return $monTexte;
}

add_shortcode('simplon', 'afficherTexte');

