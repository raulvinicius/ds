<?php get_header(); ?>




        <section id="home">

            <section id="apresentacao">
                <div class="container-fluid">

                    <div class="row">
                        <div id="bg-logo">
                        </div>

                        <div id="button-apresentacao" class="col-xs-offset-1 col-xs-10">
                            <button id="comeca-rock" class="player-trigger pausado ani-02-in-out">
                                <p>Que comece o rock!</p>
                                <i></i>
                            </button>

                        </div>
                    </div>

                </div>
            </section>

            <section id="sobre">
                <div class="container-fluid">
                    <div class="row">
                        <div id="bg-h2" class="col-sm-offset-1 col-sm-10">
                            <h2>Rock’n’roll original independente</h2>
                        </div>
                    </div>
                    <div id="bg-texto" class="row">
                        <div class="col-sm-offset-3 col-sm-6">
                            <p>A Dog Savanna é uma banda de músicas autorais – riffs marcantes de guitarra grave, voz autêntica no estilo drive vocal, baixo denso e bateria intensa – que sobrevive na selva da produção independente.</p>
                        </div>
                    </div>
                </div>

            </section>

            <section id="shows">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-offset-3 col-lg-6">

                            <h2>Shows</h2>

                            <table>
                                <tbody>
                                    <tr id="tr-title">
                                        <th>Data</th>
                                        <th>Evento</th> 
                                        <th>Local</th>
                                    </tr>

                                    <tr>
                                        <td id="data">13/04/2015</td>
                                        <td id="evento">Porão do Rock</td> 
                                        <td id="local">Estádio Mané Garrincha <br />Brasília-DF</td>
                                    </tr>
                                    
                                    <tr>
                                        <td id="data">05/04/2015</td>
                                        <td id="evento">Cover Me</td> 
                                        <td id="local">Ginásio de Esportes <br />Sobradinho-DF</td>
                                    </tr>

                                    <tr>
                                        <td id="data">30/05/2015</td>
                                        <td id="evento">Rock in Rio</td> 
                                        <td id="local">Estádio Mané Garrincha <br />Brasília-DF</td>
                                    </tr>
                                </tbody>
                            </table>

                            <a href="#" class="ani-02-in-out"><p>Ver todos os shows</p></a>

                        </div>
                    </div>
                </div>
            </section>

            <section id="fotos">
                <div class="container-fluid">
                    <div class="row">
                        <div id="title-fotos" class="col-md-3 col-sm-5">
                            <div id="caixa-title">
                                <h2>Fotos da estrada</h2>
                                <a href="#">Ver todas</a>  
                            </div>
                        </div>

                        <div id="galeria" class="col-md-9 col-sm-7">
                            <figure>
                                <ul>
                                    <li>
                                        <div id="lupa" class="ani-02-in-out"></div>
                                        <img class="ani-06-in-out" src="<?php bloginfo('template_url') ?>/img/dogsavanna-foto-01.jpg">
                                    </li><li>
                                        <div id="lupa" class="ani-02-in-out"></div>
                                        <img class="ani-06-in-out" src="<?php bloginfo('template_url') ?>/img/dogsavanna-foto-02.jpg">
                                    </li><li>
                                        <div id="lupa" class="ani-02-in-out"></div>
                                        <img class="ani-06-in-out" src="<?php bloginfo('template_url') ?>/img/dogsavanna-foto-03.jpg">
                                    </li><li>
                                        <div id="lupa" class="ani-02-in-out"></div>
                                        <img class="ani-06-in-out" src="<?php bloginfo('template_url') ?>/img/dogsavanna-foto-04.jpg">
                                    </li><li>
                                        <div id="lupa" class="ani-02-in-out"></div>
                                        <img class="ani-06-in-out" src="<?php bloginfo('template_url') ?>/img/dogsavanna-foto-05.jpg">
                                    </li><li>
                                        <div id="lupa" class="ani-02-in-out"></div>
                                        <img class="ani-06-in-out" src="<?php bloginfo('template_url') ?>/img/dogsavanna-foto-06.jpg">
                                    </li>
                                </ul>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            
        </section>



<?php get_footer(); ?>