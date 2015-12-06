$(document).ready(function() {


	$( window ).scroll(function() 
	{
		changeMenu();
		setTimeout(showInAnimation,400);
	});
	changeMenu();
	showInAnimation();

	$( 'body' ).on( 'click', 'button.dead', function(){ return false; } );
	
	if( $( '#map-canvas' ).length > 0 )
	{
		initializeMap();
	}


	$('.segredo').remove();
		

	// $( '#saida-reserva, #home.chamada #saida-reserva' ).mask('00/00/0000', {placeholder: "__/__/____"});





	/////////////////


/*
	$( window ).resize(function(e) 
	{
	});
*/

	$('.aton-form').submit(function(){return false}); 
	$('section#contato form input[type="submit"]').bind('click', 
		function()
		{
			$(this).closest('form').validate({
				submitHandler: function(form)
				{

					$(form).find('#success').hide();
					$(form).find('#error').hide();
					$(form).find('.form-text').hide();
					$(form).find('fieldset').hide();
					$(form).find('.form-text').hide();
					$(form).find('input[type=submit]').hide();

					$(form).find('#process').show();

					$(form).ajaxSubmit({
						type: 'post',
						success: contatoOk
					});

				}, 
				rules: {
					nm: {
						required: true
					},
					ml: {
						email: true,
						required: true
					},
					msgm: {
						required: true
					}
				},
				messages: {
					nm: {
						required: 'Campo obrigatório'
					},
					ml: {
						email: 'E-mail inválido',
						required: 'Campo obrigatório'
					},
					msgm: {
						required: 'Deixe sua mensagem'
					}
				}
			});
		}
	)

	$('.alert button').bind('click', function()
	{
		$(this).closest('.alert').hide();
	})



	$('nav #menu-mobile').bind('click', function ()
	{
		if( $(this).closest('nav.menu-aberto').length > 0 )
		{
			$(this).closest('nav.menu-aberto').removeClass('menu-aberto');
		}
		else
		{
			$(this).closest('nav').addClass('menu-aberto');
		}

	})




	//-------------------PLAYER-------------------//

	/////////////////////////////////////////////////
	// Hard work by Scott Andrew (scottandrew.com) //
	/////////////////////////////////////////////////

	// the playlist is just a JSON-style object.


    $('#player #musica #nome-faixa').text(playlist[aud.pos].title);
    $('#player #musica #nome-album').text( 'Álbum: ' + playlist[aud.pos].album);

	$('body').on('click', '#player .play, .player-trigger.pausado', function (evt) {
		playMusic(evt)
	});

	$('body').on('click', '#player .pause, .player-trigger.tocando', function (evt) {
		evt.preventDefault();
		aud.pause();
	});
	
	$('#player #proxima').on('click', function(evt) {
		evt.preventDefault();
		aud.pause();
		aud.pos++;
		if (aud.pos == playlist.length) aud.pos = 0;
		aud.setAttribute('src', playlist[aud.pos].url);
        $('#player #musica #nome-faixa').text(playlist[aud.pos].title);
        $('#player #musica #nome-album').text( 'Álbum: ' + playlist[aud.pos].album);
        aud.load();

        if( $('#player.tocando').length > 0 )
        {
	        playMusic(evt);
	    }
	});
	
	$('#player #anterior').bind('click', function(evt) {
		evt.preventDefault();
		aPaused = aud.paused;
		aud.pos--;
		if (aud.pos < 0) aud.pos = playlist.length - 1;
		aud.setAttribute('src', playlist[aud.pos].url);
        $('#player #musica #nome-faixa').text(playlist[aud.pos].title);
        $('#player #musica #nome-album').text( 'Álbum: ' + playlist[aud.pos].album);
		aud.load();

        if( $('#player.tocando').length > 0 )
        {
	        playMusic(evt);
	    }

	});
	
	// JQuery doesn't seem to like binding to these HTML 5
	// media events, but addEventListener does just fine
	/*
	aud.addEventListener('progress', function(evt) {
		var width = parseInt($('#player').css('width'));
		var percentLoaded = Math.round(evt.loaded / evt.total * 100);
		var barWidth = Math.ceil(percentLoaded * (width / 100));
		$('#player .load-progress').css( 'width', barWidth );
		
	});
	aud.addEventListener('timeupdate', function(evt) {
	    var width = parseInt($('#player').css('width'));
		var percentPlayed = Math.round(aud.currentTime / aud.duration * 100);
		var barWidth = Math.ceil(percentPlayed * (width / 100));
		$('#player .play-progress').css( 'width', barWidth);
	});
	*/
	aud.addEventListener('pause', function(evt) {
		$('#player').addClass('pausado')
			.removeClass('tocando');

			console.log('pausado (ganha .play)');

		$('#player #play').addClass('play');
		$('#player #play').removeClass('pause');

		$('#player .album .musicas li button').addClass('play');
		$('#player .album .musicas li button').removeClass('pause');

		//qualquer elemento com a classe "player-trigger" herdará a classe "tocando/pausado"
		$('.player-trigger').removeClass('tocando');
		$('.player-trigger').addClass('pausado');
	});
	
	aud.addEventListener('play', function(evt) {
		$('#player').addClass('tocando')
			.removeClass('pausado');

			console.log('tocando (ganha .pause)');

		$('#player #play').removeClass('play');
		$('#player #play').addClass('pause');

		$('#player .album .musicas li[data-pos="' + aud.pos + '"] button').removeClass('play');
		$('#player .album .musicas li[data-pos="' + aud.pos + '"] button').addClass('pause');

		//qualquer elemento com a classe "player-trigger" herdará a classe "tocando/pausado"
		$('.player-trigger').addClass('tocando');
		$('.player-trigger').removeClass('pausado');
	});
	
	// aud.addEventListener('loadstart', function (evt) 
	// {
	// });

	aud.addEventListener('canplay', function(evt) {
		if(autoplay == 1)
		{
			autoplay = undefined;
			playMusic(evt);
		}
	});
	
	aud.addEventListener('ended', function(evt) {
		$('#player #proxima').trigger('click');
	});
	

	$( '#player #musica, #player #abre-player, #player #fechar' ).bind('click', function ()
	{

		if( $(this).closest('#player.fechado').length > 0)
		{
			$(this).closest('#player.fechado')
				.removeClass('fechado')
				.addClass('aberto');
		}
		else
		{
			$(this).closest('#player.aberto')
				.removeClass('aberto')
				.addClass('fechado');
		}

	})


	$( 'body' ).on('click', '.album .musicas li button.play', function (evt)
	{
		evt.preventDefault();

		if( $(this).closest('li').attr('data-pos') != aud.pos )
		{
			aud.pos = $(this).closest('li').attr('data-pos');

			aud.setAttribute('src', playlist[aud.pos].url);
	        $('#player #musica #nome-faixa').text(playlist[aud.pos].title);
	        $('#player #musica #nome-album').text( 'Álbum: ' + playlist[aud.pos].album);

			aud.load();

		}
		playMusic(evt);
	})

	$( 'body' ).on('click', '.album .musicas li button.pause', function (evt)
	{
		$('.album .musicas li.reproduzindo').removeClass('reproduzindo');
		evt.preventDefault();
		aud.pause();
	})


	setInterval(function() 
	{

		if( parseInt($('#player p#nome-faixa').css('margin-left')) < 0 )
		{
			$('#player p#nome-faixa').css('margin-left', '0')
		}
		else
		{
			$('#player p#nome-faixa').css('margin-left', '-100%')
		}

	}, 5000);


	//-------------------PLAYER-------------------//





});


		// url : templateUrl + "/musicas/dog-savanna-o-endereco-do-estado-do-mundo.mp3",
var playlist = [
	{
		url : "http://dogsavanna.com.br/wp-content/themes/dogsavanna/musicas/dog-savanna-o-endereco-do-estado-do-mundo.mp3",
		title : "O Endereço do Estado do Mundo",
		album : "Inc."
	},
	{
		url : "http://dogsavanna.com.br/wp-content/themes/dogsavanna/musicas/dog-savanna-palavras.mp3",
		title : "Palavras",
		album : "Inc."
	},
	{
		url : "http://dogsavanna.com.br/wp-content/themes/dogsavanna/musicas/dog-savanna-verdades.mp3",
		title : "Verdades",
		album : "Inc."
	},
	{
		url : "http://dogsavanna.com.br/wp-content/themes/dogsavanna/musicas/dog-savanna-tribus.mp3",
		title : "Tribus",
		album : "Inc."
	},
	{
		url : "http://dogsavanna.com.br/wp-content/themes/dogsavanna/musicas/dog-savanna-nosso-time.mp3",
		title : "Nosso Time",
		album : "Inc."
	},
	{
		url : "http://dogsavanna.com.br/wp-content/themes/dogsavanna/musicas/dog-savanna-saga.mp3",
		title : "SAGA",
		album : "SAGA"
	},
	{
		url : "http://dogsavanna.com.br/wp-content/themes/dogsavanna/musicas/dog-savanna-dentro-e-fora.mp3",
		title : "Dentro e Fora",
		album : "SAGA"
	},
	{
		url : "http://dogsavanna.com.br/wp-content/themes/dogsavanna/musicas/dog-savanna-na-minha.mp3",
		title : "Na Minha",
		album : "SAGA"
	},
	{
		url : "http://dogsavanna.com.br/wp-content/themes/dogsavanna/musicas/dog-savanna-marfim.mp3",
		title : "Marfim",
		album : "SAGA"
	}
];

var aud = $('#player .aud').get(0);
aud.pos = 2;
var autoplay = aud.getAttribute('data-autoplay');
var aPaused = true;



function playMusic (evt)
{
	evt.preventDefault();
	$('.album .musicas li.reproduzindo').removeClass('reproduzindo');
	$('.album .musicas li[data-pos="' + aud.pos + '"]').addClass('reproduzindo');

		if (aud.pos < 0) {
			$('#player #proxima').trigger('click');
		} else {
			aud.play();
		}
}



function contatoOk (data)
{
	console.log($(this));
	console.log(data);

	$('#contato #process').hide();
	$('#contato form fieldset').show();
	$('#contato form .form-text').show();
	$('#contato form input[type=submit]').show();


	if( data == 'sucesso')
	{
		$('#contato form #success').show();
		$('#contato form')[0].reset();
	}
	else
	{
		$('#contato form #error').show();
	}

}


function URLize (s) 
{
    var r=s.toLowerCase();
    r = r.replace(new RegExp(/\s/g),"");
    r = r.replace(new RegExp(/[àáâãäå]/g),"a");
    r = r.replace(new RegExp(/æ/g),"ae");
    r = r.replace(new RegExp(/ç/g),"c");
    r = r.replace(new RegExp(/[èéêë]/g),"e");
    r = r.replace(new RegExp(/[ìíîï]/g),"i");
    r = r.replace(new RegExp(/ñ/g),"n");                
    r = r.replace(new RegExp(/[òóôõö]/g),"o");
    r = r.replace(new RegExp(/œ/g),"oe");
    r = r.replace(new RegExp(/[ùúûü]/g),"u");
    r = r.replace(new RegExp(/[ýÿ]/g),"y");
    r = r.replace(new RegExp(/\W/g),"");
    return r;
};

function pluralize (s, p, n)
{
	if( n != 1)
	{
		return p;
	}
	else
	{
		return s;
	}
}

function initializeMap()
{

	var myLatLgn = new google.maps.LatLng( -16.675207,-49.260501 );

	var mapCanvas = document.getElementById( 'map-canvas' );
	var mapOptions = {
		center: myLatLgn,
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		backgroundColor: '7030a0',
		scrollwheel: false
	}
	var map = new google.maps.Map( mapCanvas, mapOptions );

	var marker = new google.maps.Marker({
	    position: myLatLgn,
	    map: map,
	    title:"Hello World!"
	});

}

function changeMenu ()
{
	if( $(window).scrollTop() > 0 )
	{
		$( 'header nav' ).addClass('floating');
	}
	else
	{
		$( 'header nav' ).removeClass('floating');
	}
}

function showInAnimation () 
{

	$('.hided').each(function()
	{
		if( $( window ).scrollTop() + ( $( window ).height() * 0.8 ) > $(this).offset().top - 300 )
		{
			$(this).addClass('appeared').removeClass('hided');
		}
	})
}

