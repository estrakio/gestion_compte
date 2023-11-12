<?php
    function button_maker($url, $name)
    {
        $button = "<a class='button_nav'href='$url'>$name</a>";
        return($button);
    }


?>



<div class="nav">
    <div class="nom_app">
        <a href="index.php?content=accueil" style="color: white">
        Gestion des <span style="color: #fbfc74">Comptes</span>
        </a>
    </div>
    <div class="menu">
        <?=button_maker("index.php?content=add_data", "Ajouter les données du mois")?>
        <?=button_maker("index.php?content=comparatif", "Comparatif")?>
        <?=button_maker("index.php?content=graphique", "Graphique")?>
    </div>

</div>


