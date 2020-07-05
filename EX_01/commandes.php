<?php
$historique_commande = array("5.49", '9.9',"5.49","15.99", '25');
$somme= 0

function afficher_commande ($historique_commande)

{
    {
    foreach($historique_commande as $element)
    }

    {
    echo("une commande de $element € a été reçue. <br/>");
    $somme+= +$element;
    }
}

{
    echo("le total des commandes est de $somme €.");
    return;
}

afficher_commande($historique_commande);
?>