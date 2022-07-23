var Game=function(a,b){this.canvas=a;this.context=b;this.assetsManager=new AssetsManager();this.assetsManager.loadAll();this.inputManager=new InputManager();this.fps=60;this.interval=1000/this.fps;this.lastTime=new Date().getTime();this.currentTime=0;this.delta=0;this.frameId=0;this.isPaused=false};

Game.prototype.newGame=function(){this.background=new Background(this.canvas,this.assetsManager);this.spacecraft=new Spacecraft(this.canvas,this.inputManager,this.assetsManager);this.meteors=[];this.enemies=[];this.collisionManager=new CollisionManager(this);this.scorePanel=new ScorePanel(this);this.gameplayManager=new GameplayManager(this);this.inputManager.registerKeyListener();this.inputManager.registerMouseListener(this)};

Game.prototype.run=function(){this.frameId=window.requestAnimationFrame(this.run.bind(this));this.currentTime=new Date().getTime();this.delta=this.currentTime-this.lastTime;if(this.delta>this.interval){if(!this.isPaused){this.update(this.delta);this.collisionManager.checkAndResolve(this.delta)}if(this.spacecraft.livesRemaining==0){this.gameOver()}this.render();this.lastTime=this.currentTime-(this.delta%this.interval)}};

Game.prototype.update = function(delta) {this.background.update();this.spacecraft.update(delta);this.gameplayManager.update(delta);if(window.var == 1){for (var i = 0; i < this.meteors.length; i++) {this.meteors[i].update(delta);}}else if(window.var == 2){for (var i = 0; i < this.enemies.length; i++) {this.enemies[i].update(delta);}}else if(window.var == 3){for (var i = 0; i < this.meteors.length; i++) {this.meteors[i].update(delta);}for (var i = 0; i < this.enemies.length; i++) {this.enemies[i].update(delta);}}};

Game.prototype.render = function() {this.background.draw(this.context);this.spacecraft.draw(this.context);if(window.var == 1){for (var i = 0; i < this.meteors.length; i++) {this.meteors[i].draw(this.context);}}else if(window.var == 2){for (var i = 0; i < this.enemies.length; i++) {this.enemies[i].draw(this.context);}}else if(window.var == 3){for (var i = 0; i < this.meteors.length; i++) {this.meteors[i].draw(this.context);}for (var i = 0; i < this.enemies.length; i++) {this.enemies[i].draw(this.context);}}this.scorePanel.draw(this.context);};

Game.prototype.gameOver = function() {
    window.location.href = "notify.php?score="+this.spacecraft.score;
    window.cancelAnimationFrame(this.frameId);
    this.assetsManager.audios["gameOver"].play();
    this.assetsManager.audios["gameOver"].currentTime = 0;
    jQuery("#score-field").html(this.spacecraft.score);
    jQuery("#game-over-box").show();
    this.newGame();
};