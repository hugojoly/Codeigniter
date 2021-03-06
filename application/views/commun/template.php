<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?></title>
        <link href="<?php echo base_url("assets/css/conteneurs.css"); ?>" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div id="conteneur">
            <header>
                <h1><?php echo $heading; ?></h1>
            </header>
            <nav>
                <ul>
                    <li><a href="<?php echo site_url('accueil/'); ?>">Accueil</a></li>
                    <li><a href="<?php echo site_url('tournee/'); ?>">Les tournées de collecte</a></li>
                    <li><a href="<?php echo site_url('conteneurs/'); ?>">Les conteneurs</a></li>
                    <li><a href="<?php echo site_url('test/'); ?>">TEST</a></li>
                </ul>
            </nav>
            <section>
                <?php echo $contenu; ?>
            </section>
            <footer>
                <p>l Partenaires l Recrutement l Contact l Crédits & mentions légales l</p>
            </footer>
        </div>    
    </body>
</html>