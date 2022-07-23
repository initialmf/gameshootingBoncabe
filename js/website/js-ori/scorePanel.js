var ScorePanel = function(game) {
    this.game = game;
    this.assetsManager = game.assetsManager;
    this.spacecraft = game.spacecraft;
};

ScorePanel.prototype.draw = function(ctx) {
    ctx.fillStyle = "#f2f2f2";
    ctx.font = "25px kenvector_future_thin";
    ctx.fillText(this.spacecraft.livesRemaining, 540, 30);
    ctx.drawImage(this.assetsManager.images["livesRemaining"], 555, 10);

    ctx.fillText("Score: " + this.spacecraft.score + "                       Level: "+window.var.toString(), 10, 28);
    
    
    
    if (this.game.isPaused) {
        ctx.drawImage(this.assetsManager.images["resumeIcon"], 5, 670);
        ctx.font = "10px kenvector_future_thin";
        ctx.fillText("Paused", 200, 300);
    } 
    
};