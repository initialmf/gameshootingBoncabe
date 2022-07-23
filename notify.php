<?php
include 'remove_all_score_fb.php';
function gen_uuid()
{
  $uuid = array(
    'time_low'  => 0,
    'time_mid'  => 0,
    'time_hi'  => 0,
    'clock_seq_hi' => 0,
    'clock_seq_low' => 0,
    'node'   => array()
  );
  $uuid['time_low'] = mt_rand(0, 0xffff) + (mt_rand(0, 0xffff) << 16);
  $uuid['time_mid'] = mt_rand(0, 0xffff);
  $uuid['time_hi'] = (4 << 12) | (mt_rand(0, 0x1000));
  $uuid['clock_seq_hi'] = (1 << 7) | (mt_rand(0, 128));
  $uuid['clock_seq_low'] = mt_rand(0, 255);
  for ($i = 0; $i < 6; $i++) {
    $uuid['node'][$i] = mt_rand(0, 255);
  }
  $uuid = sprintf(
    '%08x-%04x-%04x-%02x%02x-%02x%02x%02x%02x%02x%02x',
    $uuid['time_low'],
    $uuid['time_mid'],
    $uuid['time_hi'],
    $uuid['clock_seq_hi'],
    $uuid['clock_seq_low'],
    $uuid['node'][0],
    $uuid['node'][1],
    $uuid['node'][2],
    $uuid['node'][3],
    $uuid['node'][4],
    $uuid['node'][5]
  );
  return $uuid;
}
$token = gen_uuid();
?>

        <?php 
          $score = 0;
          if( isset($_GET['score']) )
          {
            $score = $_GET['score'];
          }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KDBWM5J');</script>
<!-- End Google Tag Manager -->
  <meta name="robots" content="noindex, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <!--<base href="https://www.boncabe.com/virus-shooter/" target="_blank">-->
  <title>Virus Shooter BonCabe Poin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
  <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="css/website/style2.css" />
  <link rel="stylesheet" href="css/website/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <script>  
      window.onload = function () {
        var pic = document.getElementById('pic');
        pic.src = "assets/avatars/selectyouravatar.png";
      }

      function dosomething(value)
      {
        
        if(value == "01")
        {
            var pic = document.getElementById('pic');
            pic.src = "assets/avatars/1.png";

            localStorage.setItem('valuephoto', "1");
            var valuephoto = localStorage.getItem("valuephoto");
            var d = new Date();
            d.setTime(d.getTime() + (1*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
            document.cookie = 'valuephoto' + "=" + valuephoto+ ";" + expires + ";path=/";
            
            
            document.getElementById('avataroke').innerHTML = "<a type='button' href='#konfirmasiavatar' target= '_self' style='background-color: #008000;width: 100px;height: 50px;border-radius: 25px;margin-top: 10px;'>OK</a>" ;
        }
        if(value == "02")
        {
            var pic = document.getElementById('pic');
            pic.src = "assets/avatars/2.png";

            localStorage.setItem('valuephoto', "2");
            var valuephoto = localStorage.getItem("valuephoto");
            var d = new Date();
            d.setTime(d.getTime() + (1*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
            document.cookie = 'valuephoto' + "=" + valuephoto+ ";" + expires + ";path=/";
            
            document.getElementById('avataroke').innerHTML = "<a type='button' href='#konfirmasiavatar' target= '_self' style='background-color: #008000;width: 100px;height: 50px;border-radius: 25px;margin-top: 10px;'>OK</a>" ;
        }
        if(value == "03")
        {
            var pic = document.getElementById('pic');
            pic.src = "assets/avatars/3.png";

            localStorage.setItem('valuephoto', "3");
            var valuephoto = localStorage.getItem("valuephoto");
            var d = new Date();
            d.setTime(d.getTime() + (1*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
            document.cookie = 'valuephoto' + "=" + valuephoto+ ";" + expires + ";path=/";
            
            document.getElementById('avataroke').innerHTML = "<a type='button' href='#konfirmasiavatar' target= '_self' style='background-color: #008000;width: 100px;height: 50px;border-radius: 25px;margin-top: 10px;'>OK</a>" ;
        }
        if(value == "04")
        {
            var pic = document.getElementById('pic');
            pic.src = "assets/avatars/4.png";

            localStorage.setItem('valuephoto', "4");
            var valuephoto = localStorage.getItem("valuephoto");
            var d = new Date();
            d.setTime(d.getTime() + (1*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
            document.cookie = 'valuephoto' + "=" + valuephoto+ ";" + expires + ";path=/";
            
            document.getElementById('avataroke').innerHTML = "<a type='button' href='#konfirmasiavatar' target= '_self' style='background-color: #008000;width: 100px;height: 50px;border-radius: 25px;margin-top: 10px;'>OK</a>" ;
        }
        if(value == "05")
        {
            var pic = document.getElementById('pic');
            pic.src = "assets/avatars/5.png";

            localStorage.setItem('valuephoto', "5");
            var valuephoto = localStorage.getItem("valuephoto");
            var d = new Date();
            d.setTime(d.getTime() + (1*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
            document.cookie = 'valuephoto' + "=" + valuephoto+ ";" + expires + ";path=/";
            
            document.getElementById('avataroke').innerHTML = "<a type='button' href='#konfirmasiavatar' target= '_self' style='background-color: #008000;width: 100px;height: 50px;border-radius: 25px;margin-top: 10px;'>OK</a>" ;
        }
      }
      
        
      
      var scorescore = 0;
      var plid = "";
      var plnama = "";
      
  </script>
<?php
	if (isset($_GET['score'])) {
    if($_GET['score'] != "" || $_GET['score'] != null)
    {
?>
    <script type="text/javascript">  
      scorescore=<?php echo $_GET['score']; ?>;
    </script>
<?php 
    } }
?>



<?php 
if(isset($_COOKIE["plid"])) {
?>
    <script type="text/javascript">  
      plid=<?php echo $_COOKIE["plid"]; ?>
    </script>
<?php
}
?>


<?php 
if(isset($_COOKIE["plnama"])) {
?>
    <script type="text/javascript">  
      plnama=<?php echo $_COOKIE["plnama"]; ?>
    </script>
<?php
}
?>










<style type="text/css">
.button-flat-circle {
    border: 1px solid #801515;        
    background-color: #FFD700;        
    color: #FFFFFF;                   
    font-size: 16px;                  
    width: 80px;                     
    height: 80px;                    
    line-height: 16px;                
    text-align: center;               
    border-radius: 50%;               
}
.button-flat-circle:hover {
    opacity: 0.8;                     
}
.button-flat-circle:active {
    background: #550000;              
}
</style>


<style type="text/css">
.button-flat-circle-terpilih {
    border: 1px solid #801515;        
    background-color: #FFFFF0;        
    color: #FFFFFF;                   
    font-size: 16px;                  
    width: 200px;                     
    height: 200px;                    
    line-height: 16px;                
    text-align: center;               
    border-radius: 50%;               
    
      pointer-events: none;
      cursor: not-allowed;
      /*opacity: 0.65;*/
      filter: alpha(opacity=65);
      -webkit-box-shadow: none;
      box-shadow: none;
}
.button-flat-circle-terpilih:hover {
    opacity: 0.8;                     
}
.button-flat-circle-terpilih:active {
    background: #550000;              
}
</style>


    <style type="text/css">
    a.pilihavatar-link {
        padding:17px 0;
        text-align: center;
        margin:7% auto;
        position: relative;
        width: 300px;
        color: #fff;
        text-decoration: none;
        background-color: #FFBA00;
        border-radius: 3px;
        box-shadow: 0 5px 0px 0px #eea900;
        display: block;
    }
    a.pilihavatar-link:hover {
        background-color: #ff9900;
        box-shadow: 0 3px 0px 0px #eea900;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    
    #pilihavatar {
        visibility: hidden;
        opacity: 0;
        margin-top: -200px;
    }
    #pilihavatar:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 99999999999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }

    @media (min-width: 768px){
        .pilihavatar-container {
            width:600px;
        }
    }
    @media (max-width: 767px){
        .pilihavatar-container {
            width:100%;
        }
    }
    .pilihavatar-container {
        position: relative;
        margin:7% auto;
        padding:30px 50px;
        background-color: #fafafa;
        color:#333;
        border-radius: 3px;
    }

    a.pilihavatar-close {
        position: absolute;
        top:3px;
        right:3px;
        background-color: #333;
        padding:7px 10px;
        font-size: 20px;
        text-decoration: none;
        line-height: 1;
        color:#fff;
    }

    .pilihavatar-form {
        margin:10px auto;
    }
        .pilihavatar-form h2 {
            margin-bottom: 5px;
            font-size: 37px;
            text-transform: uppercase;
        }
        .pilihavatar-form .input-group {
            margin:10px auto;
        }
            .pilihavatar-form .input-group input {
                padding:17px;
                text-align: center;
                margin-bottom: 10px;
                border-radius:3px;
                font-size: 16px; 
                display: block;
                width: 100%;
            }
            .pilihavatar-form .input-group input:focus {
                outline-color:#FB8833; 
            }
            .pilihavatar-form .input-group input[type="email"] {
                border:0px;
                position: relative;
            }
            .pilihavatar-form .input-group input[type="submit"] {
                background-color: #FB8833;
                color: #fff;
                border: 0;
                cursor: pointer;
            }
            .pilihavatar-form .input-group input[type="submit"]:focus {
                box-shadow: inset 0 3px 7px 3px #ea7722;
            }

    </style>
    
    
    
    
    
    
    
    
    
    
    
    <style type="text/css">
    a.konfirmasiavatar-link {
        padding:17px 0;
        text-align: center;
        margin:7% auto;
        position: relative;
        width: 300px;
        color: #fff;
        text-decoration: none;
        background-color: #FFBA00;
        border-radius: 3px;
        box-shadow: 0 5px 0px 0px #eea900;
        display: block;
    }
    a.konfirmasiavatar-link:hover {
        background-color: #ff9900;
        box-shadow: 0 3px 0px 0px #eea900;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    
    #konfirmasiavatar {
        visibility: hidden;
        opacity: 0;
        margin-top: -200px;
    }
    #konfirmasiavatar:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 99999999999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }

    @media (min-width: 768px){
        .konfirmasiavatar-container {
            width:600px;
        }
    }
    @media (max-width: 767px){
        .konfirmasiavatar-container {
            width:100%;
        }
    }
    .konfirmasiavatar-container {
        position: relative;
        margin:7% auto;
        padding:30px 50px;
        background-color: #fafafa;
        color:#333;
        border-radius: 3px;
    }

    a.konfirmasiavatar-close {
        position: absolute;
        top:3px;
        right:3px;
        background-color: #333;
        padding:7px 10px;
        font-size: 20px;
        text-decoration: none;
        line-height: 1;
        color:#fff;
    }

    .konfirmasiavatar-form {
        margin:10px auto;
    }
        .konfirmasiavatar-form h2 {
            margin-bottom: 5px;
            font-size: 37px;
            text-transform: uppercase;
        }
        .konfirmasiavatar-form .input-group {
            margin:10px auto;
        }
            .konfirmasiavatar-form .input-group input {
                padding:17px;
                text-align: center;
                margin-bottom: 10px;
                border-radius:3px;
                font-size: 16px; 
                display: block;
                width: 100%;
            }
            .konfirmasiavatar-form .input-group input:focus {
                outline-color:#FB8833; 
            }
            .konfirmasiavatar-form .input-group input[type="email"] {
                border:0px;
                position: relative;
            }
            .konfirmasiavatar-form .input-group input[type="submit"] {
                background-color: #FB8833;
                color: #fff;
                border: 0;
                cursor: pointer;
            }
            .konfirmasiavatar-form .input-group input[type="submit"]:focus {
                box-shadow: inset 0 3px 7px 3px #ea7722;
            }

    </style>
    

</head>
<body class="notify">
 <!-- Google Tag Manager (noscript) -->
 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KDBWM5J"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->  
<div id="layout">
  <header><a href="https://www.boncabe.com"><img class="boncabelogo" src="https://kbu-cdn.com/bc/wp-content/uploads/boncabe-sambal-tabur-logo.png" width="246" height="145" alt="BonCabe - Sambal Tabur dari KOBE."/></a>
<div class="social">
	<!--Facebook-->
	<a class="socicons" href="https://www.facebook.com/boncabe/" title="Facebook BonCabe" target="_blank" rel="nofollow noreferrer noopener"><img src="https://kbu-cdn.com/bc/wp-content/uploads/socfa.png" width="32" height="32" alt="BonCabe Facebook"/></a>
	<!--Instagram-->
	<a class="socicons" href="https://www.instagram.com/officialboncabe/" title="Instagram BonCabe" target="_blank" rel="nofollow noreferrer noopener"><img src="https://kbu-cdn.com/bc/wp-content/uploads/socin.png" width="32" height="32" alt="BonCabe Instagram"/></a>
	<!--Twitter-->
	<a class="socicons" href="https://twitter.com/boncabe" title="Twitter BonCabe" target="_blank" rel="nofollow noreferrer noopener"><img src="https://kbu-cdn.com/bc/wp-content/uploads/soctw.png" width="32" height="32" alt="BonCabe Twitter"/></a>
</div>
<!-- KOBE Mobile Menu -->
<div class="mobile-menu-kobe" onclick="openNav()">
	<div class="line">
	</div>
	<div class="line">
	</div>
	<div class="line">
	</div>
</div>
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
<!-- KOBE Mobile Menu -->
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
</header>
 
    <section class="container col-md-6">
      <section class="mx-auto">
        <div id="" class="text-center">
        </div>
        <section class="memory-game">
        <table class="maintable">
	<tr>
		<td>
			<a type="button" href="index.php" target= "_self" class="btn btn-success">PLAY GAME</a>
		</td>
	</tr>
	<tr>
		<td>
			<h3>AYO KUMPULKAN POINT ANDA</h3>
				
      

        <br>
				<div id="status">
                    <script>
                        
                      function statusChangeCallback(response) { 
                        if (response.status === 'connected') { 
                          localStorage['fbid'] = response.authResponse['userID'];
                          testAPI(response);
                        }
                      }
                      
                      function testAPI(response) { 
                          
                        if(getCookie("plnama") != undefined && getCookie("plnama") != "")
                        {
                            FB.api('/me', function(response) {
                              localStorage['fbname'] = response.name;
                              fbid = localStorage['fbid'];
                              fbname = localStorage['fbname'];
                              
                                    setTimeout(function(){
                                        window.location.href = "verifikasifbkonfirmasi.php?plnama="+getCookie("plnama")+"&&fbid="+response.id+
                                                        "&&fbname="+response.name;
                                    }, 1000);
                            });     
                        }
                        else
                        {
                            window.location.href = "#closed";
                            
                            FB.api('/me', function(response) {
                              console.log('Successful login for: ' + response.name);
                              localStorage['fbname'] = response.name;
                              fbid = localStorage['fbid'];
                              fbname = localStorage['fbname'];
                              
                              document.cookie = "nama_user_boncashoot="+response.name;
                              
                              
                              if(scorescore == 0)
                              {
                                  document.getElementById('status').innerHTML = '<p style="font-weight: bold">' + response.name + '<p>' +
                                  '<?php include 'statusregister.php';?>' + 
                                  '<?php include 'my_score.php';?>';
                              }
                              if(scorescore != 0)
                              {
                                  document.getElementById('status').innerHTML = '<p style="font-weight: bold;color: black;padding-left:18px;">🏆 Selamat Point anda bertambah : ' + scorescore + '  <p>';
                                setTimeout(function(){
                                    $.ajax({
                                        url: "fbv3.php?fbname=" + fbname + "&fbid=" + fbid + "&fbpoint=" + scorescore,
                                        success: function(data) {
                                            window.location.href = "notify.php";
                                        }
                                    });
                                }, 5000);
                              }
                                  
                            });
                        }
                      }
                      
                      
                      function checkLoginState() { // Called when a person is finished with the Login Button.
                        FB.getLoginStatus(function(response) { 
                          statusChangeCallback(response);
                        });
                      }
                      window.fbAsyncInit = function() {
                        FB.init({
                        appId: '2051777478331030',
                          cookie: true, 
                          xfbml: true, 
                          version: 'v12.0' 
                        });
                        FB.getLoginStatus(function(response) { 
                          callpopup(response);
                        });
                      };
                      function callpopup(response)
                      {
                        
                            if(getCookie("plnama") === "")
                            {

                              if(scorescore != 0)
                              {
                                document.getElementById('status').innerHTML = "<p style='font-weight:bold;color: white;'>KAMU MENDAPATKAN POIN : "+scorescore+"</p><p style='font-weight:bold;color: white;'>SILAHKAN LOGIN UNTUK SAVE POIN</p><a type='button' href='#pilihavatar' target= '_self' style='background-color: red;width: 100px;height: 30px;border-radius: 25px;'>LOGIN</a>" ;
                              }
                              else
                              {
                                  document.getElementById('status').innerHTML = "<p style='font-weight:bold;color: red;'>YOUR NETWORK IS PROBLEM , PLEASE CHECK OR RECHANGE YOUR NETWORK</p>" ;
                              }
                            }
                            else if(getCookie("plnama") === undefined)
                            {
                              
                              if(scorescore != 0)
                              {
                                document.getElementById('status').innerHTML = "<p style='font-weight:bold;color: white;'>KAMU MENDAPATKAN POIN : "+scorescore+"</p><p style='font-weight:bold;color: white;'>SILAHKAN LOGIN UNTUK SAVE POIN</p><a type='button' href='#pilihavatar' target= '_self' style='background-color: red;width: 100px;height: 30px;border-radius: 25px;'>LOGIN</a>" ;
                              }
                              else
                              {
                                  document.getElementById('status').innerHTML = "<p style='font-weight:bold;color: red;'>YOUR NETWORK IS PROBLEM , PLEASE CHECK OR RECHANGE YOUR NETWORK</p>" ;
                              }
                            }
                            else
                            {
                                
                                var plid = getCookie("plid");
                                var plnama = getCookie("plnama");
                                  
                                document.cookie = "nama_user_boncashoot="+getCookie("plnama");
                                
                                  if(scorescore == 0)
                                  { 
                                    document.getElementById('status').innerHTML = '<p style="font-weight: bold">' + getCookie("plnama") + '<p>' +
                                      '<?php include 'statusregister.php';?>' + 
                                      '<?php include 'my_score.php';?>' +
                                      '<br><br>' ;
                                      

                                  }
                                  if(scorescore != 0)
                                  {
                                      document.getElementById('status').innerHTML = '<p style="font-weight: bold;color: black;padding-left:18px;">🏆 Selamat Point anda bertambah : ' + scorescore + '  <p>';
                                    setTimeout(function(){
                                        $.ajax({
                                            url: "fbv3.php?fbname=" + getCookie("plnama") + "&fbid=" + getCookie("plid") + "&fbpoint=" + scorescore,
                                            success: function(data) {
                                                window.location.href = "notify.php";
                                            }
                                        });
                                    }, 5000);
                                  }
                            }
                        
                        
                        
                        //   }
                      }
                        function getCookie(cName) {
                          const name = cName + "=";
                          const cDecoded = decodeURIComponent(document.cookie); //to be careful
                          const cArr = cDecoded.split('; ');
                          let res;
                          cArr.forEach(val => {
                            if (val.indexOf(name) === 0) res = val.substring(name.length);
                          })
                          return res
                        }
                      
                      
                      
                    </script>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
				</div>
<p></p>
		</td>
	</td>
</tr>
</table>

<table class="list_score">
<tr>
<th>
TOP 10 SEPANJANG MASA
</th>
</tr>
<tr>
<td class="w_all">
<?php include 'winner_list.php';?>
</td>
</tr>
</table>
</section>
<script src='js/slidemenu.js' id='kbu_menu-js'></script>
<br>




























<div class="pilihavatar-wrapper" id="pilihavatar">
    <div class="pilihavatar-container">
        
        <center>
        <h6 style="font-weight: bolder;">
            select your avatar
        </h6>

        
        
        </center>
        <center>
        <button class="button-flat-circle" value="01" onclick="dosomething(this.value)">
            <img src="assets/avatars/1.png" height ="50" width="50">
        </button>
        <button class="button-flat-circle" value="02" onclick="dosomething(this.value)">
            <img src="assets/avatars/2.png" height ="50" width="50">
        </button>
        <button class="button-flat-circle" value="03" onclick="dosomething(this.value)">
            <img src="assets/avatars/3.png" height ="50" width="50">
        </button>
        <button class="button-flat-circle" value="04" onclick="dosomething(this.value)">
            <img src="assets/avatars/4.png" height ="50" width="50">
        </button>
        <button class="button-flat-circle" value="05" onclick="dosomething(this.value)">
            <img src="assets/avatars/5.png" height ="50" width="50">
        </button>
        </center>
        
        <br>
        <br>
        
        <center>
            <button class="button-flat-circle-terpilih">
                <img id="pic" height ="150" width="150">
            </button>
            
            <br>
            <br>
            <br>
            <div id="avataroke">
        </center>
        
        
        
            
            <br>
            
            <a class="pilihavatar-close" href="#closed">X</a>
            
            <center>
            <!--<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>-->
            </center>
            
            
      </div>
    </div>
</div>



















<div class="konfirmasiavatar-wrapper" id="konfirmasiavatar">
    <div class="konfirmasiavatar-container">
        
        
        <div style="background-color: #FFEFD5;border-color: #800000; border-style: solid solid solid; padding-top: 20px; padding-bottom: 20px; padding-right: 20px; padding-left: 20px;width: 100%;">

            <form method="post" role="form" enctype="multipart/form-data" action="procwithoutfb.php?score=<?php echo $score; ?>">
                
                

                <table>
                    <tbody>
               
                    <tr>
                            <input type="text" name="email" class="form-control" placeholder="your email" style="width: 100%;">
                            <br>
                            <input type="text" name="nama" class="form-control" placeholder="your nickname" style="width: 100%;">
                            <br>
                        
                    </tr>
                    </tbody>
                      
                </table>
                <button type="submit" class="btn btn-primary btn-block">SAVE</button>
            </form>
            
        </div>
        
            <br>
            
            <a class="konfirmasiavatar-close" href="#closed">X</a>
            
            <center>
            <!--<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>-->
            </center>
            
            
      </div>
    </div>
</div>









</body>
</html>