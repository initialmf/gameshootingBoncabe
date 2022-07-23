<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Virus Shooter BonCabe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KDBWM5J');</script>
<!-- End Google Tag Manager -->
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
<meta name="description" content="Main Virus Shoot BonCabe. Dapatkan skor tertinggi minggu ini! Tembak virus sebelum menginfeksimu!" />
	<meta property="og:locale" content="id_ID" />
	<meta property="og:type" content="game" />
	<meta property="og:title" content="Game Virus Shooter BonCabe" />
	<meta property="og:description" content="Main Virus Shoot BonCabe. Dapatkan skor tertinggi minggu ini! Tembak virus sebelum menginfeksimu!" />
	<meta property="og:url" content="https://www.boncabe.com/virus-shooter" />
	<meta property="og:site_name" content="BonCabe" />
	<meta property="article:modified_time" content="2022-01-29T05:25:02+00:00" />
	<meta property="og:image" content="https://www.boncabe.com/wp-content/uploads/boncabe-game-virus-shooter.png" />
	<meta property="og:image:width" content="472" />
	<meta property="og:image:height" content="472" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:label1" content="Estimasi waktu membaca" />
	<meta name="twitter:data1" content="2 menit" />  

    <link rel="stylesheet" href="css/website/mainLayout.css">
    <link rel="stylesheet" href="css/website/style2.css">
    <link rel="stylesheet" href="css/website/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>  
    <script src="js/website/game.js"></script>
    <script src="js/website/inputManager.js"></script>
    <script src="js/website/assetsManager.js"></script>
    <script src="js/website/collisionManager.js"></script>
    <script src="js/website/scorePanel.js"></script>
    <script src="js/website/gameplayManager.js"></script>
    <script src="js/website/background.js"></script>
    <script src="js/website/spacecraft.js"></script>
    <script src="js/website/bullet.js"></script>
    <script src="js/website/meteor.js"></script>
    <script src="js/website/enemy.js"></script>
    <script src="js/website/powerUp.js"></script>
    <script src="js/slidemenu.js" id="kbu_menu-js"></script>
    <script>
        $(document).ready(function(){$("#high-scores-page").hide();$("#about-page").hide();$("#canvas").hide();$("#game-over-box").hide();$("#start-game-button").click(function(){$("#menu-page").hide();$("#game-over-box").hide();$("#canvas").show();var b=document.getElementById("canvas");var c=b.getContext("2d");var a=new Game(b,c);a.newGame();a.run()});$("#high-scores-button").click(function(){$("#menu-page").hide();$("#high-scores-page").show();var b=JSON.parse(localStorage.getItem("scores"));if(b===null){b=[]}b.sort(function(d,c){return c.points-d.points});if(b.length<10){for(var a=0;a<b.length;a++){$("#scores-ul").append("<li>"+b[a].name+" : <span class='light-grey'>"+b[a].points+"</span></li>")}}else{for(var a=0;a<10;a++){$("#scores-ul").append("<li>"+b[a].name+" : <span class='light-grey'>"+b[a].points+"</span></li>")}}});$("#about-button").click(function(){$("#menu-page").hide();$("#about-page").show()});$(".back-button").click(function(){$("#scores-ul").html("");$("#high-scores-page").hide();$("#about-page").hide();$("#menu-page").show()});$("#exit-button").click(function(){var a=$("#name-field").val()===""?"unnamed":$("#name-field").val();console.log(a+" scored "+$("#score-field").html());var c={points:$("#score-field").html(),name:a};var b=JSON.parse(localStorage.getItem("scores"));if(b===null){b=[]}b.push(c);localStorage.setItem("scores",JSON.stringify(b));localStorage.fbid=JSON.stringify(b);$("#canvas").hide();$("#game-over-box").hide();$("#menu-page").show()})});
    </script>
    <script>
        function windowOpen() {var newWindow = window.open("https://www.facebook.com/", "_blank", "width=500, height=350");var pathname = window.location.href;var url_popup = window.close(pathname);alert(url_popup.toString());}function myFunction() {alert(window.history.localURLs.length.toString())}window.var = 1;setInterval(function(){ if(window.var < 3){window.var = window.var+1;}},15000);
    </script>  
    
    
</head>
<body class="pc-i-ws">
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KDBWM5J"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->   
    <div id="layout">
    <header>
<a href="https://www.boncabe.com"><img class="logo-boncabe" src="https://kbu-cdn.com/bc/wp-content/uploads/boncabe-sambal-tabur-logo.png" alt="boncabe logo"></a>
<div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="mobile-nav">
		<ul id="menu-menu" class="overlay-content">
			<li><a href="https://www.boncabe.com/">Home</a></li>
			<li class="parent-link"><a href="" class="kobe-menu-link">Produk</a>
			<ul>
				<li><a href="https://www.boncabe.com/produk">Produk BonCabe</a></li>
				<li><a href="https://www.boncabe.com/beli-boncabe">BELI BONCABE SEKARANG</a></li>
				<li class="highlight-menu"><a href="https://www.boncabe.com/snack-boncabe-makaroni-krispi">Snack BonCabe Makaroni Krispi</a></li>
				<li><a href="https://www.boncabe.com/mi-boncabe-kenikmatan-mie-pedas">Mi BonCabe Rasa Mie Goreng</a></li>
				<li><a href="https://www.boncabe.com/boncabe-level-30-rasa-original">BonCabe level 30, rasa Original</a></li>
				<li><a href="https://www.boncabe.com/boncabe-level-15-ikan-roa">BonCabe level 15, rasa Ikan Roa</a></li>
				<li><a href="https://www.boncabe.com/boncabe-level-15-rasa-original">BonCabe level 15, rasa Original</a></li>
				<li><a href="https://www.boncabe.com/boncabe-level-10-rasa-original">BonCabe level 10, rasa Original</a></li>
				<li><a href="https://www.boncabe.com/boncabe-level-3-rasa-teri">BonCabe level 3, rasa Teri</a></li>
				<li><a href="https://www.boncabe.com/boncabe-level-2-rasa-ebi-kriuk">BonCabe level 2, rasa Ebi Kriuk</a></li>
			</ul>
			</li>
			<li class="parent-link"><a href="#">Resep</a>
			<ul>
				<li><a href="https://www.boncabe.com/tempe-kriuk-boncabe-garam">Tempe Kriuk BonCabe Garam</a></li>
				<li><a href="https://www.boncabe.com/resep-telur-dadar-boncabe">Telur Dadar BonCabe</a>
				</li>
				<li><a href="https://www.boncabe.com/bakso-penyet-boncabe">Bakso Penyet BonCabe</a></li>
				<li><a href="https://www.boncabe.com/balado-terong-boncabe">Balado Terong BonCabe</a>
				</li>
			</ul>
			</li>
			<li class="parent-link"><a href="#">Game</a>
			<ul>
			<li><a href="https://www.boncabe.com/makaroni-memory">Makaroni Memory</a></li>
			<li><a href="https://www.boncabe.com/makaroni-crush">Makaroni Crush</a></li>
			<li><a href="https://www.boncabe.com/virus-shooter/">Virus Shoot BonCabe</a></li>
			</ul>
			</li>
			<li class="parent-link"><a href="#">Info</a>
			<ul>
				<li><a href="https://www.boncabe.com/beli-mi-boncabe-rasa-mie-goreng">BELI MI BONCABE</a></li>
				<li><a href="https://www.boncabe.com/tentang-boncabe">Tentang</a></li>
				<li><a href="https://www.boncabe.com/fakta-cabe">Fakta Cabai</a></li>
				<li><a href="https://www.boncabe.com/kualitas-dan-keamanan-boncabe">Kualitas dan Keamanan BonCabe</a></li>
				<li><a href="https://www.boncabe.com/tanya-jawab">Tanya / Jawab</a></li>
				<li><a href="https://www.boncabe.com/telur-dadar-boncabe">Telur Dadar BonCabe</a></li>
				<li><a href="https://www.boncabe.com/shake">BonCabe Shake</a></li>
				<li><a href="https://www.boncabe.com/boncabe-sambal-ulek">Sambal Ulek BonCabe</a></li>
				<li><a href="https://www.boncabe.com/boncabe-party">BonCabe Party</a></li>
				<li><a href="https://www.boncabe.com/boncabe-tumis">BonCabe Tumis</a></li>
				<li><a href="https://www.boncabe.com/kerupuk-boncabe">Kerupuk BonCabe</a></li>
			</ul>
			</li>
			<li><a href="https://www.boncabe.com/hubungi">Hubungi</a></li>
		</ul>
	</div>
</div>
<!-- KOBE Website Menu -->
<div class="social">
	<!--Facebook-->
	<a class="socicons" href="https://www.facebook.com/boncabe/" title="Facebook BonCabe" target="_blank" rel="nofollow noreferrer noopener"><img src="https://kbu-cdn.com/bc/wp-content/uploads/socfa.png" width="32" height="32" alt="BonCabe Facebook"/></a>
	<!--Instagram-->
	<a class="socicons" href="https://www.instagram.com/officialboncabe/" title="Instagram BonCabe" target="_blank" rel="nofollow noreferrer noopener"><img src="https://kbu-cdn.com/bc/wp-content/uploads/socin.png" width="32" height="32" alt="BonCabe Instagram"/></a>
	<!--Twitter-->
	<a class="socicons" href="https://twitter.com/boncabe" title="Twitter BonCabe" target="_blank" rel="nofollow noreferrer noopener"><img src="https://kbu-cdn.com/bc/wp-content/uploads/soctw.png" width="32" height="32" alt="BonCabe Twitter"/></a>
</div>
<div class="container wrap">
	<div id="main-nav">
		<div class="nav">
			<ul>
				<li><a href="https://www.boncabe.com/">Home</a></li>
				<li class="parent-link"><a>Produk</a>
				<ul>
					<li><a href="https://www.boncabe.com/produk">Produk BonCabe</a></li>
					<li><a href="https://www.boncabe.com/beli-boncabe">BELI BONCABE SEKARANG</a></li>
					<li class="highlight-menu"><a href="https://www.boncabe.com/snack-boncabe-makaroni-krispi">Snack BonCabe Makaroni Krispi</a></li>
					<li><a href="https://www.boncabe.com/mi-boncabe-kenikmatan-mie-pedas">Mi BonCabe Rasa Mie Goreng</a></li>
					<li><a href="https://www.boncabe.com/boncabe-level-30-rasa-original">BonCabe level 30, rasa Original</a></li>
					<li><a href="https://www.boncabe.com/boncabe-level-15-ikan-roa">BonCabe level 15, rasa Ikan Roa</a></li>
					<li><a href="https://www.boncabe.com/boncabe-level-15-rasa-original">BonCabe level 15, rasa Original</a></li>
					<li><a href="https://www.boncabe.com/boncabe-level-10-rasa-original">BonCabe level 10, rasa Original</a></li>
					<li><a href="https://www.boncabe.com/boncabe-level-3-rasa-teri">BonCabe level 3, rasa Teri</a></li>
					<li><a href="https://www.boncabe.com/boncabe-level-2-rasa-ebi-kriuk">BonCabe level 2, rasa Ebi Kriuk</a></li>
				</ul>
				</li>
				<li class="parent-link"><a>Resep</a>
				<ul>
					<li><a href="https://www.boncabe.com/tempe-kriuk-boncabe-garam">Tempe Kriuk BonCabe Garam</a></li>
					<li><a href="https://www.boncabe.com/resep-telur-dadar-boncabe">Telur Dadar BonCabe</a>
					</li>
					<li><a href="https://www.boncabe.com/bakso-penyet-boncabe">Bakso Penyet BonCabe</a></li>
					<li><a href="https://www.boncabe.com/balado-terong-boncabe">Balado Terong BonCabe</a>
					</li>
				</ul>
				</li>
				<li class="parent-link"><a href="#">Game</a>
			<ul>
			<li><a href="https://www.boncabe.com/makaroni-memory">Makaroni Memory</a></li>
			<li><a href="https://www.boncabe.com/makaroni-crush">Makaroni Crush</a></li>
			<li><a href="https://www.boncabe.com/virus-shooter/">Virus Shoot BonCabe</a></li>
			</ul>
			</li>
			<li class="parent-link"><a href="#">Info</a>
			<ul>
				<li><a href="https://www.boncabe.com/beli-mi-boncabe-rasa-mie-goreng">BELI MI BONCABE</a></li>
				<li><a href="https://www.boncabe.com/tentang-boncabe">Tentang</a></li>
				<li><a href="https://www.boncabe.com/fakta-cabe">Fakta Cabai</a></li>
				<li><a href="https://www.boncabe.com/kualitas-dan-keamanan-boncabe">Kualitas dan Keamanan BonCabe</a></li>
				<li><a href="https://www.boncabe.com/tanya-jawab">Tanya / Jawab</a></li>
				<li><a href="https://www.boncabe.com/telur-dadar-boncabe">Telur Dadar BonCabe</a></li>
				<li><a href="https://www.boncabe.com/shake">BonCabe Shake</a></li>
				<li><a href="https://www.boncabe.com/boncabe-sambal-ulek">Sambal Ulek BonCabe</a></li>
				<li><a href="https://www.boncabe.com/boncabe-party">BonCabe Party</a></li>
				<li><a href="https://www.boncabe.com/boncabe-tumis">BonCabe Tumis</a></li>
				<li><a href="https://www.boncabe.com/kerupuk-boncabe">Kerupuk BonCabe</a></li>
			</ul>
			</li>
			<li><a href="https://www.boncabe.com/hubungi">Hubungi</a></li>
			</ul>
		</div>
	</div>
		</div>
	</header>
	<br>
<br>
<div id="wrapper">
	<div id="menu-page">
		<img class="game-title" src="images/boncabe-virus-shooter.png" width="500" height="150" alt="boncabe virus shooter">
		<br>
		
		<table class="gmenu">
		<ul>
			<li>
			    <a id="start-game-button" href="#">
    				START GAME
    			</a>
			</li>
			<li>
			    <a href="notify.php">
    				SCORES
    			</a>
			</li>
		</ul>
		</table>
		
	</div>
	<div>
		<canvas id="canvas" width="900" height="700">
		Your web browser does not support a canvas </canvas>
	</div>
</div>

    <script>function disableBack() { window.history.forward(); }setTimeout("disableBack()", 0);window.onunload = function () { null };
    </script>

    <script>
        function openNav() {document.getElementById("myNav").style.width = "100%";}
        function closeNav() {document.getElementById("myNav").style.width = "0%";}
    </script>
	</div>
</body>
</html>