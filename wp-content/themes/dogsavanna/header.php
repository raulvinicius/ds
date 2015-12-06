<!-- CÓDIGO HTML VEM AQUI -->


<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

    <!-- 
        NÃO ESQUEÇA DE ADICIONAR UMA PÁGINA FRONTEND/"SUAPAGINA" NO PAINEL ADMIN 
        E DE ALTERAR OS PERMALINKS PARA "NOME DO POST"
    -->
    <?php $frontendUrl = "/frontend"; //variável usada nos urls dentro do ambiente de desenvolvimento frontend?>

<?php endif; ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo ( $post->post_name != '' ) ? get_the_title() . " | " : ""; ?>Dog Savanna</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!--[if IE]><link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.ico"><![endif]-->
        <link rel="icon" href="<?php bloginfo('template_url') ?>/favicon.ico">
        <link rel="apple-touch-icon" href="<?php bloginfo('template_url') ?>/apple-touch-icon.png">

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">

    </head>

    <body>
        <?php wp_path_to_js(); ?>

        <!--[if lt IE 8]>
            <p class="browserupgrade">Você está usando um navegador <strong>desatualizado</strong>. Por favor, <a href="http://browsehappy.com/">atualize seu browser</a> para melhorar sua experiência na internet.</p>
        <![endif]-->

        <?php //$fileN =  basename ( $_SERVER["SCRIPT_NAME"] ); ?>
        <?php $fileN2 = $_SERVER[ "REQUEST_URI" ] ?>
        <!-- ATENÇÃO! Alterar "ignite" pelo nome da pasta WordPress -->
        <?php $fileN2 = str_replace("/dogsavanna", '', $fileN2) ?>
        <?php $fileN2 = str_replace("/frontend", '', $fileN2) ?>
        <?php $fileN2 = explode('/', $fileN2) ?>
        <?php $fileN2 = $fileN2[1]; ?>

        <?php

        if ( $fileN2 == "" ) : 
        	$fileN2 = "index";
        endif;

        ?>

        <?php if ( $frontendUrl != "" ) : ?>

            <?php $tUrl = get_bloginfo("template_url"); ?>

            <?php require( "frontend/" . $fileN2 . '.php' ) ?>
            <?php die(); ?>

        <?php endif; ?>


        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="">
                        <nav class="ani-02-in-out">
                            <div id="logo"  class="ani-02-in-out">
                                <a href="<?php bloginfo('url') ?>" class="ani-02-in-out">
                                    <hgroup>
                                        <h1>Dog Savanna</h1>
                                        <h2>Rock’n’roll original independente</h2>
                                    </hgroup>
                                </a>
                            </div>


                            <ul id="menu" class="ani-04-in-out">
                                <li><a href="<?php bloginfo('url') ?>/a-banda" class="ani-02-in-out">A Banda</a></li>
                                <li><a href="<?php bloginfo('url') ?>/" class="ani-02-in-out">Shows</a></li>
                                <li><a href="<?php bloginfo('url') ?>/" class="ani-02-in-out">Músicas</a></li>
                                <li><a href="<?php bloginfo('url') ?>/" class="ani-02-in-out">Fotos</a></li>
                                <li><a href="<?php bloginfo('url') ?>/" class="ani-02-in-out">Vídeos</a></li>
                                <!-- <li><a href="<?php bloginfo('url') ?>/" class="ani-02-in-out">Dog.s</a></li> -->
                                <li><a href="<?php bloginfo('url') ?>/" class="ani-02-in-out">Contato</a></li>
                                <li><a href="<?php bloginfo('url') ?>/" class="ani-02-in-out">Imprensa</a></li>
                            </ul>


                            <div id="player" class="fechado pausado">
                                <div id="player-fechado" class="ani-02-in-out ani-delay-02">
                                    <div id="musica">
                                        <p id="nome-faixa" class="ani-16-in-out">Tribos</p>
                                        <p id="nome-album">Álbum: Inc.</p>
                                    </div>

                                    <div id="controles">
                                        <button id="anterior"></button>
                                        <button id="play" class="play"></button>
                                        <button id="proxima"></button>
                                    </div>

                                    <button id="abre-player">Abrir player</button>
                                </div>

                                <div id="player-aberto" class="ani-04-in-out">
                                    <button id="fechar"></button>

                                    <ul id="albuns">

                                        <li class="album">
                                            <div class="title">
                                                <h2>Inc.</h2>
                                                <a class="icon-download" href="#">Download</a>
                                            </div>

                                            <figure><img src="<?php bloginfo('template_url') ?>/img/dogsavanna-album-inc.jpg"></figure>

                                            <ul class="musicas">
                                                <li class="ani-02-in-out" data-pos="0">
                                                    <p class="nome-musica">O Endereço do Estado do Mundo</p>
                                                    <div class="icons-musica">
                                                        <a class="icon-download" href="https://api.soundcloud.com/tracks/214159865/download?secret_token=&client_id=cUa40O3Jg3Emvp6Tv4U6ymYYO50NUGpJ">Download</a>
                                                        <button class="play"></button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li class="ani-02-in-out" data-pos="1">
                                                    <p class="nome-musica">Palavras</p>
                                                    <div class="icons-musica">
                                                        <a class="icon-download" href="https://api.soundcloud.com/tracks/214160004/download?secret_token=&client_id=cUa40O3Jg3Emvp6Tv4U6ymYYO50NUGpJ">Download</a>
                                                        <button class="play"></button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li class="ani-02-in-out" data-pos="2">
                                                    <p class="nome-musica">Verdades</p>
                                                    <div class="icons-musica">
                                                        <a class="icon-download" href="https://api.soundcloud.com/tracks/220901116/download?secret_token=&client_id=cUa40O3Jg3Emvp6Tv4U6ymYYO50NUGpJ">Download</a>
                                                        <button class="play"></button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li class="ani-02-in-out" data-pos="3">
                                                    <p class="nome-musica">Tribus</p>
                                                    <div class="icons-musica">
                                                        <a class="icon-download" href="https://api.soundcloud.com/tracks/229334308/download?secret_token=&client_id=cUa40O3Jg3Emvp6Tv4U6ymYYO50NUGpJ">Download</a>
                                                        <button class="play"></button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li class="ani-02-in-out" data-pos="4">
                                                    <p class="nome-musica">Nosso Time</p>
                                                    <div class="icons-musica">
                                                        <a class="icon-download" href="https://api.soundcloud.com/tracks/230530671/download?secret_token=&client_id=cUa40O3Jg3Emvp6Tv4U6ymYYO50NUGpJ">Download</a>
                                                        <button class="play"></button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            

                                            <div class="clearfix"></div>
                                            </ul>

                                        <div class="clearfix"></div>
                                        </li>

                                        

                                        <div class="clearfix"></div>



                                        <li class="album">
                                            <div class="title">
                                                <h2>Saga</h2>
                                                <a class="icon-download" href="#">Download</a>
                                            </div>

                                            <figure><img src="<?php bloginfo('template_url') ?>/img/dogsavanna-album-saga.jpg"></figure>

                                            <ul class="musicas">
                                                <li class="ani-02-in-out" data-pos="5">
                                                    <p class="nome-musica">Dentro e Fora</p>
                                                    <div class="icons-musica">
                                                        <a class="icon-download" href="https://api.soundcloud.com/tracks/54406992/download?secret_token=&client_id=cUa40O3Jg3Emvp6Tv4U6ymYYO50NUGpJ">Download</a>
                                                        <button class="play"></button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li class="ani-02-in-out" data-pos="6">
                                                    <p class="nome-musica">Marfim</p>
                                                    <div class="icons-musica">
                                                        <a class="icon-download" href="https://api.soundcloud.com/tracks/52888265/download?secret_token=&client_id=cUa40O3Jg3Emvp6Tv4U6ymYYO50NUGpJ">Download</a>
                                                        <button class="play"></button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li class="ani-02-in-out" data-pos="7">
                                                    <p class="nome-musica">Na Minha</p>
                                                    <div class="icons-musica">
                                                        <a class="icon-download" href="https://api.soundcloud.com/tracks/95020457/download?secret_token=&client_id=cUa40O3Jg3Emvp6Tv4U6ymYYO50NUGpJ">Download</a>
                                                        <button class="play"></button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li class="ani-02-in-out" data-pos="8">
                                                    <p class="nome-musica">SAGA</p>
                                                    <div class="icons-musica">
                                                        <a class="icon-download" href="https://api.soundcloud.com/tracks/52937584/download?secret_token=&client_id=cUa40O3Jg3Emvp6Tv4U6ymYYO50NUGpJ">Download</a>
                                                        <button class="play"></button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>

                                            <div class="clearfix"></div>
                                            </ul>

                                        <div class="clearfix"></div>
                                        </li>


                                    </ul>
                                </div>

                                <audio class="aud" src="<?php bloginfo('template_url') ?>/musicas/dog-savanna-verdades.mp3" data-autoplay="0">
                                    <p>Parece que seu browser não tem suporte para áudio com HTML 5.</p>
                                </audio>

                            </div>


                        <button id="menu-mobile" class="">Abrir menu</button>


                        </nav>
                    </div>
                </div>
            </div>
        </header>


