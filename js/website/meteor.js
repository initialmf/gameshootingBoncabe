var Meteor=function(a,b,c,d){this.xCentre=a;this.yCentre=b;this.type=c;this.assetsManager=d;if(this.type==="big"){this.radius=48;this.mass=1000}else{if(this.type==="medium"){this.radius=21;this.mass=500}else{if(this.type==="tiny"){this.radius=9;this.mass=100}else{console.error(this.type+" is not a valid type of a meteor!")}}}this.xPosition=this.xCentre-this.radius;this.yPosition=this.yCentre-this.radius;this.xVelocity=0;this.yVelocity=10;this.rotationAngle=0;this.rotationDelayCounter=0;this.initialiseRoute();this.isExploding=false;this.explosionTimer=0;this.isExploded=false;this.explosionIndex=0};Meteor.prototype.initialiseRoute=function(){var a=Math.floor(Math.random()*5);switch(a){case 0:this.isRotatingClockwise=false;this.xVelocity=-2;break;case 1:this.isRotatingClockwise=false;this.xVelocity=-5;break;case 2:this.isRotatingClockwise=true;break;case 3:this.isRotatingClockwise=true;this.xVelocity=2;break;case 4:this.isRotatingClockwise=true;this.xVelocity=5;break;default:console.error(a+" is not a valid type of route of a meteor!");break}this.yVelocity=Math.floor(Math.random()*(12-8+1))+8};Meteor.prototype.update=function(a){if(this.isExploded){return}this.yPosition+=(this.yVelocity/10);this.xPosition+=(this.xVelocity/10);this.xCentre=this.xPosition+this.radius;this.yCentre=this.yPosition+this.radius;this.rotationDelayCounter+=a;if(this.rotationDelayCounter>25){if(this.isRotatingClockwise){this.rotationAngle+=1}else{this.rotationAngle-=1}this.rotationDelayCounter=0}if(this.isExploding){this.explosionTimer+=a;if(this.explosionTimer>50){this.explosionIndex++;this.explosionTimer=0}if(this.explosionIndex>20){this.isExploded=true;this.isExploding=false}}};Meteor.prototype.isGoingDown=function(){return this.yVelocity>0};Meteor.prototype.isGoingUp=function(){return this.yVelocity<0};Meteor.prototype.isGoingRight=function(){return this.xVelocity>0};Meteor.prototype.isGoingLeft=function(){return this.xVelocity<0};Meteor.prototype.draw=function(a){if(!this.isExploded&&!this.isExploding){if(this.type==="big"){this.drawRotatedImage(a,this.assetsManager.images.meteorBig,this.xCentre,this.yCentre,this.rotationAngle)}else{if(this.type==="medium"){this.drawRotatedImage(a,this.assetsManager.images.meteorMedium,this.xCentre,this.yCentre,this.rotationAngle)}else{this.drawRotatedImage(a,this.assetsManager.images.meteorTiny,this.xCentre,this.yCentre,this.rotationAngle)}}}else{if(this.isExploding){a.drawImage(this.assetsManager.images["explosion"+this.explosionIndex],this.xCentre-this.radius,this.yCentre-this.radius,this.radius*2,this.radius*2)}}};Meteor.prototype.drawRotatedImage=function(a,d,c,b,e){a.save();a.translate(c,b);a.rotate(e*Math.PI/180);a.drawImage(d,-(d.width/2),-(d.height/2));a.restore()};Meteor.prototype.updateRotation=function(a){this.isRotatingClockwise=this.xCentre-a>0};Meteor.prototype.explode=function(){this.isExploding=true;this.assetsManager.audios.explosion.play();this.assetsManager.audios.explosion.currentTime=0};Meteor.prototype.isOnFire=function(){return this.isExploded||this.isExploding};