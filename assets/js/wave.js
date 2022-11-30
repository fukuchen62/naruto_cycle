// SPOTの波の動き

(function () {
  var unit = 100,
      canvasList,
      drawInfo = {},
      colorList = [],
      innerFontColorList = [],
      innerBgColorList = [];
  /**
   * Init function.
   *
   * Initialize variables and begin the animation.
   */
  function init() {
    drawInfo.seconds = 0;
    drawInfo.t = 0;

    // Get all canvas elements
    canvasList = document.querySelectorAll('.wave-bar');

    // Initialize each canvas
    Array.prototype.forEach.call(canvasList,
      function(canvas, index){
        var canvasDataSet = canvas.dataset,
            inner = canvas.nextElementSibling,
            innerDataSet;
        // Set the canvas size (Retina ready)
        canvas.width = document.documentElement.clientWidth;
        canvas.width *= devicePixelRatio;
        canvas.height = canvas.width * .04;
        canvas.height *= devicePixelRatio;
        canvas.style.height = String(canvas.height / devicePixelRatio) + "px";

        canvas.contextCache = canvas.getContext("2d");

        // Add color
        colorList.push([canvasDataSet.color1, canvasDataSet.color2, canvasDataSet.color3]);

        // Wrapper background color
        if (canvasDataSet.bgcolor) {
          canvas.parentNode.style.backgroundColor = canvasDataSet.bgcolor;
        }

        // Inner content area
        if (inner){
          innerDataSet = inner.dataset;
          if (innerDataSet.color){
            inner.style.color = innerDataSet.color;
          }
          if (innerDataSet.bgcolor){
            inner.style.backgroundColor = innerDataSet.bgcolor;
          }
        }
      }
    );
    update();
  }

  function update() {
    // Each canvas
    Array.prototype.forEach.call(canvasList,
      function(canvas, index){
        draw(canvas, colorList[index]);
      }
    );
    // 共通の描画情報の更新
    drawInfo.seconds = drawInfo.seconds + .014;
    drawInfo.t = drawInfo.seconds*Math.PI;
    // Re-call
    setTimeout(update, 35);
  }

  /**
   * Draw animation function.
   *
   * This function draws one frame of the animation, waits 20ms, and then calls
   * itself again.
   */
  function draw(canvas, color) {
    // 対象のcanvasのコンテキストを取得
    var context = canvas.contextCache;
    // キャンバスの描画をクリア
    context.clearRect(0, 0, canvas.width, canvas.height);

    //波を描画
    if (color[0]) {
      if (color[1] && color[2]) {
        // 3 waves
        drawWave(canvas, color[0], 0.3, 3, 0);
        drawWave(canvas, color[1], 0.5, 2, 250);
        drawWave(canvas, color[2], 0.2, 1.6, 100);
      } else if (color[1] && !color[2]) {
        // 2 waves
        drawWave(canvas, color[0], 0.4, 3, 0);
        drawWave(canvas, color[1], 0.6, 2, 250);
      } else {
        // single wave only
        drawWave(canvas, color[0], 1, 3, 0);
      }
    }
  }
  /**
  * 波を描画
  * drawWave(キャンバス, 色, 不透明度, 波の幅のzoom, 波の開始位置の遅れ)
  */
  function drawWave(canvas, color, alpha, zoom, delay) {
    var context = canvas.contextCache;
    context.fillStyle = color;
    context.globalAlpha = alpha;

    context.beginPath(); //パスの開始
    drawSine(canvas, drawInfo.t / 0.5, zoom, delay);
    context.lineTo(canvas.width + 10, canvas.height); //パスをCanvasの右下へ
    context.lineTo(0, canvas.height); //パスをCanvasの左下へ
    context.closePath() //パスを閉じる
    context.fill(); //塗りつぶす
  }
  /**
   * Function to draw sine
   *
   * The sine curve is drawn in 10px segments starting at the origin.
   * drawSine(キャンバス, 時間, 波の幅のzoom, 波の開始位置の遅れ)
   */
  function drawSine(canvas, t, zoom, delay) {
    var xAxis = Math.floor(canvas.height/2);
    var yAxis = 0;
    var context = canvas.contextCache;
    // Set the initial x and y, starting at 0,0 and translating to the origin on
    // the canvas.
    var x = t; //時間を横の位置とする
    var y = Math.sin(x)/zoom;
    context.moveTo(yAxis, unit*y+xAxis); //スタート位置にパスを置く

    // Loop to draw segments (横幅の分、波を描画)
    for (i = yAxis; i <= canvas.width + 10; i += 10) {
      x = t+(-yAxis+i)/unit/zoom;
      y = Math.sin(x - delay)/2.4;
      context.lineTo(i, unit*y+xAxis);
    }
  }
  init();
})();
