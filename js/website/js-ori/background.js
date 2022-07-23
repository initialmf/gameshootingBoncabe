var Background = function(canvas, assetsManager) {
    this.canvas = canvas;
    this.assetsManager = assetsManager;

    this.scrollSpeed = 50;
    this.xPosition = 0;
    this.yPosition = 0;
};

Background.prototype.update = function() {
    this.yPosition += this.scrollSpeed;
    if (this.yPosition >= this.canvas.height) {
        this.yPosition = 0;
    }

    this.xPosition += this.scrollSpeed;
    if (this.xPosition >= this.canvas.width) {
        this.xPosition = 0;
    }

    // this.yPosition += this.scrollSpeed;
    // if (this.yPosition >= this.canvas.height) {
    //     this.yPosition = 0;
    // }
    // this.yPosition += this.scrollSpeed;
    // if (this.yPosition >= this.canvas.width) {
    //     this.yPosition = 0;
    // }


    this.xPosition += this.scrollSpeed;
    if (this.xPosition >= this.canvas.height) {
        this.xPosition = 0;
    }
    // this.xPosition += this.scrollSpeed;
    // if (this.xPosition >= this.canvas.width) {
    //     this.xPosition = 0;
    // }
};

Background.prototype.draw = function(ctx) {
    ctx.drawImage(this.assetsManager.images["background"],
        this.xPosition, this.yPosition);


    ctx.drawImage(this.assetsManager.images["background"],
        this.xPosition, this.yPosition - this.canvas.height);
    ctx.drawImage(this.assetsManager.images["background"],
        this.xPosition, this.yPosition - this.canvas.width);


    ctx.drawImage(this.assetsManager.images["background"],
        this.yPosition, this.xPosition - this.canvas.height);
    ctx.drawImage(this.assetsManager.images["background"],
        this.yPosition, this.xPosition - this.canvas.width);

};