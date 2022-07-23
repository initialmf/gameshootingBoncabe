<!DOCTYPE html>
<html lang="en">
<head>
<!---->

<meta charset="utf-8">
		<meta name="description" content="Example page of use pure Javascript JoyStick">
		<meta name="author" content="Roberto D'Amico">
		<link rel="shortcut icon" type="image/png" href="http://bobboteck.github.io/img/roberto-damico-bobboteck.png">
		
		<script src="joy.js"></script>


<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="spaceshooter, JavaScript, game, html5, canvas" />
    <meta name="author" content="Michal Goly" />

    <title>Play Game</title>

    <link rel="stylesheet" href="../css/mobile/style_play.css" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="../js/mobile/game.js"></script>
    <script src="../js/mobile/inputManager.js"></script>
    <script src="../js/mobile/assetsManager.js"></script>
    <script src="../js/mobile/collisionManager.js"></script>
    <script src="../js/mobile/scorePanel.js"></script>
    <script src="../js/mobile/gameplayManager.js"></script>
    <script src="../js/mobile/background.js"></script>
    <script src="../js/mobile/spacecraft.js"></script>
    <script src="../js/mobile/bullet.js"></script>
    <script src="../js/mobile/meteor.js"></script>
    <script src="../js/mobile/enemy.js"></script>
    <script src="../js/mobile/powerUp.js"></script>

    <script>
        $(document).ready(function () {
                $("#menu-page").hide();
                $("#game-over-box").hide();
                $("#canvas").show();

                var canvas = document.getElementById("canvas");
                var context = canvas.getContext("2d");
                var game = new Game(canvas, context);
                game.newGame();
                game.run();
        });  
    </script>
    
    
    

    <script type="text/javascript">
        //  alert(document.getElementById("joy3Direzione"));
          
        function kanan()
        {
                if(window.value == "")
                {
                    yyy()
                }
        }
        function kiri()
        {
                if(window.value == "")
                {
                    xxx()
                }
        }
        setInterval(function(){ 
            if(window.value != "")
            {
                window.value="";
            }
        }, 1000);

        function windowOpen() {   
            var newWindow = window.open("https://www.facebook.com/", "_blank", "width=500, height=350");  
            
            var pathname = window.location.href;
            var url_popup = window.close(pathname);
            alert(url_popup.toString());
        }   

        function myFunction() { 
            alert(window.history.localURLs.length.toString())
        }


        window.var = 1;
        setInterval(function(){ 
            if(window.var < 3)
            {
                window.var = window.var+1; 
            }
        }, 15000);

    </script>
    <meta meta name="viewport" content="user-scalable=no" />
</head>
<body style="background-color:#FFD700;">
    
    <div id="wrapper">
        <div id="menu-page">
            <li><a id="start-game-button" href="#">Start Game</a></li>
        </div>
        <div id="high-scores-page">
            <h1>High Scores</h1>
            <a class="back-button" href="#">Menu</a>
            <ul id="scores-ul">

            </ul>
        </div>
        <div id="about-page">
            <h1>About</h1>
            <a class="back-button" href="#">Menu</a>
            <h2>PT.Kobe Boga Utama</h2>
            
        </div>
        <div>
            <canvas id="canvas" width="800" height="700">
                Your web browser does not support a canvas
            </canvas>
        </div>

        <div id="game-over-box">
            <h1>Game Over</h1>
        
        </div>
        
        
    </div>






    
    
    
    
    
    
    
    
    
    <div id="joy3Div" style="width:270px;height:270px;margin:50px;position:fixed;bottom:10px;left:300px;border-width: 125px;">
    </div>
		
		
<script type="text/javascript">

    var joy3Param = { "title": "joystick3" };
    var Joy3 = new JoyStick('joy3Div', joy3Param);
    
    var joy3IinputPosX = document.getElementById("joy3PosizioneX");
    var joy3InputPosY = document.getElementById("joy3PosizioneY");
    var joy3Direzione = document.getElementById("joy3Direzione");
    var joy3X = document.getElementById("joy3X");
    var joy3Y = document.getElementById("joy3Y");
    

    
    setInterval(function(){ joy3IinputPosX.value=Joy3.GetPosX(); }, 50);
    setInterval(function(){ joy3InputPosY.value=Joy3.GetPosY(); }, 50);
    setInterval(function(){ joy3Direzione.value=Joy3.GetDir(); }, 50);
    setInterval(function(){ joy3X.value=Joy3.GetX(); }, 50);
    setInterval(function(){ joy3Y.value=Joy3.GetY(); }, 50);
</script>


    



</body>
</html>