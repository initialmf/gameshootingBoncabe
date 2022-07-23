var Enemy=function(d,c,b,e,a){this.xPosition=d;this.yPosition=c;this.type=b;this.assetsManager=e;this.spacecraft=a;this.width=55;this.height=56;this.xVelocity=0;this.yVelocity=0;this.mass=200;this.radius=this.width/2;this.xCentre=this.xPosition+this.radius;this.yCentre=this.yPosition+this.radius;if(this.type==="enemyBlue"||this.type==="enemyGreen"){this.accelerateFactor=1;this.maxVelocity=7}else{this.accelerateFactor=1;this.maxVelocity=20}this.behaviourStarted=false;if(this.type==="enemyBlue"||this.type==="enemyRed"||this.type==="enemyBlack"){this.initialDescentDistance=Math.floor(Math.random()*(600-100+1))+100}if(this.type==="enemyGreen"||this.type==="enemyBlack"){this.bulletDelayTimer=0;this.bullets=[];this.startFire=false;this.bulletCleanUpDelayTimer=0}this.flewToPlayer=false;this.flewFromPlayer=false;this.flyingToLeftWall=false;this.flyingToRightWall=false;this.goDown=false;this.goUp=false;this.goRight=false;this.goLeft=false;this.isExploding=false;this.explosionTimer=0;this.isExploded=false;this.explosionIndex=0};Enemy.prototype.update=function(b){if(this.isExploded&&(this.type==="enemyBlue"||this.type==="enemyRed")){return}else{if(this.isExploded&&this.bullets.length!==0){for(var a=0;a<this.bullets.length;a++){this.bullets[a].update(b)}this.bulletsCleanUp(b);return}else{if(this.isExploded){return}}}this.doBehaviour();this.slowDown();this.updateDirection();this.yPosition+=(this.yVelocity/10);this.xPosition+=(this.xVelocity/10);this.radius=this.width/2;this.xCentre=this.xPosition+this.radius;this.yCentre=this.yPosition+this.radius;if((this.type==="enemyGreen"||this.type==="enemyBlack")&&this.startFire){this.bulletDelayTimer+=b;if(this.bulletDelayTimer>4000){this.fire();this.bulletDelayTimer=0}for(var a=0;a<this.bullets.length;a++){this.bullets[a].update(b)}this.bulletsCleanUp(b)}if(this.isExploding){this.explosionTimer+=b;if(this.explosionTimer>50){this.explosionIndex++;this.explosionTimer=0}if(this.explosionIndex>20){this.isExploded=true;this.isExploding=false}}};Enemy.prototype.draw=function(a){if(!this.isExploded&&!this.isExploding){a.drawImage(this.assetsManager.images[this.type],this.xPosition,this.yPosition,this.width,this.height)}else{if(this.isExploding){a.drawImage(this.assetsManager.images["explosion"+this.explosionIndex],this.xCentre-this.radius,this.yCentre-this.radius,this.radius*2,this.radius*2)}}if(this.type==="enemyGreen"||this.type==="enemyBlack"){for(var b=0;b<this.bullets.length;b++){this.bullets[b].draw(a)}}};Enemy.prototype.updateDirection=function(){if(this.goUp&&this.yVelocity===0){this.yVelocity-=this.accelerateFactor}if(this.goUp&&(Math.abs(this.yVelocity)<this.maxVelocity)){this.yVelocity-=this.accelerateFactor}if(this.goDown&&this.yVelocity===0){this.yVelocity+=this.accelerateFactor}if(this.goDown&&(Math.abs(this.yVelocity)<this.maxVelocity)){this.yVelocity+=this.accelerateFactor}if(this.goRight&&this.xVelocity===0){this.xVelocity+=this.accelerateFactor}if(this.goRight&&(Math.abs(this.xVelocity)<this.maxVelocity)){this.xVelocity+=this.accelerateFactor}if(this.goLeft&&this.xVelocity===0){this.xVelocity-=this.accelerateFactor}if(this.goLeft&&(Math.abs(this.xVelocity)<this.maxVelocity)){this.xVelocity-=this.accelerateFactor}};Enemy.prototype.slowDown=function(){if(this.yVelocity<0&&this.goDown){this.yVelocity+=this.accelerateFactor}if(this.yVelocity>0&&this.goUp){this.yVelocity-=this.accelerateFactor}if(this.xVelocity>0&&this.goLeft){this.xVelocity-=this.accelerateFactor}if(this.xVelocity<0&&this.goRight){this.xVelocity+=this.accelerateFactor}};Enemy.prototype.doBehaviour=function(){if(this.type==="enemyBlue"){this.doBlueBehaviour()}else{if(this.type==="enemyRed"){this.doRedBehaviour()}else{if(this.type==="enemyGreen"){this.doGreenBehaviour()}else{if(this.type==="enemyBlack"){this.doBlackBehaviour()}}}}};Enemy.prototype.doBlueBehaviour=function(){if(!this.behaviourStarted){this.goDown=true;this.behaviourStarted=true}else{if(this.yPosition<this.initialDescentDistance){return}if(this.xCentre<this.spacecraft.xCentre){this.goLeft=false;this.goRight=true}else{if(this.xCentre>this.spacecraft.xCentre){this.goLeft=true;this.goRight=false}else{this.goLeft=false;this.goRight=false}}}};Enemy.prototype.doRedBehaviour=function(){if(!this.behaviourStarted){this.goDown=true;this.behaviourStarted=true}else{if(this.yPosition<this.initialDescentDistance){return}if(this.xCentre<this.spacecraft.xCentre){this.goLeft=false;this.goRight=true}else{if(this.xCentre>this.spacecraft.xCentre){this.goLeft=true;this.goRight=false}else{this.goLeft=false;this.goRight=false}}}};Enemy.prototype.doGreenBehaviour=function(){if(!this.behaviourStarted){this.goDown=true;this.behaviourStarted=true}else{if(this.yPosition>0){if(this.yPosition>=700){this.startFire=false}else{this.startFire=true}}}};Enemy.prototype.doBlackBehaviour=function(){if(!this.behaviourStarted){this.goDown=true;this.behaviourStarted=true}else{if(this.yPosition>0){this.startFire=true}if(this.yPosition>10&&!this.flewToPlayer&&!this.flewFromPlayer){this.goDown=false;this.yVelocity=0;if(this.xCentre>this.spacecraft.xPosition&&this.xCentre<this.spacecraft.xPosition+this.spacecraft.width){this.flewToPlayer=true}else{if(this.xCentre<this.spacecraft.xCentre){this.goLeft=false;this.goRight=true}else{this.goLeft=true;this.goRight=false}}}else{if(this.flewToPlayer&&!this.flewFromPlayer){if(this.xCentre>300&&!this.flyingToRightWall){this.goLeft=true;this.goRight=false;this.flyingToLeftWall=true}else{if(!this.flyingToLeftWall){this.goLeft=false;this.goRight=true;this.flyingToRightWall=true}}if(this.xPosition<50||this.xPosition>500){this.goDown=true;this.goLeft=false;this.goRight=false;this.xVelocity=0;this.flewFromPlayer=true}}else{if(this.flewFromPlayer&&this.flewToPlayer){if(this.yPosition<this.initialDescentDistance){return}if(this.xCentre<this.spacecraft.xCentre){this.goLeft=false;this.goRight=true}else{if(this.xCentre>this.spacecraft.xCentre){this.goLeft=true;this.goRight=false}else{this.goLeft=false;this.goRight=false}}if(this.yPosition>=700){this.startFire=false}}}}}};Enemy.prototype.bulletsCleanUp=function(b){this.bulletCleanUpDelayTimer+=b;if(this.bulletCleanUpDelayTimer>10000){for(var a=0;a<this.bullets.length;a++){if(this.bullets[a].yPosition>4000||this.bullets[a].isExploded){this.bullets.splice(a,1);a--}}this.bulletCleanUpDelayTimer=0}};Enemy.prototype.fire=function(){this.bullets.push(new Bullet(this.xPosition+(this.width/2)-(14/2),this.yPosition+this.height/2,"red",this.assetsManager));this.assetsManager.audios.laserEnemy.play();this.assetsManager.audios.laserEnemy.currentTime=0};Enemy.prototype.explode=function(){this.isExploding=true;this.startFire=false;this.assetsManager.audios.explosion.play();this.assetsManager.audios.explosion.currentTime=0};Enemy.prototype.isOnFire=function(){return this.isExploded||this.isExploding};