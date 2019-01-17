<html>
<head>
  <meta name="viewport" content="width=300, initial-scale=1">
  <style>
    #canvas {
      border: 1px solid gray;
    }
    body, html {
      height: 100%;
      display: grid;
    }
    .wrap {
      /* center align */
      text-align: center;
      margin: auto;

      /* Prevent nearby text being highlighted when accidentally dragging mouse outside confines of the canvas */
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    .left {
      font-size: 100px;
      line-height: 100px;
    }
    .left, .right {
      width: 120px;
      display: inline-block;
      margin: auto;
      height: 150px;
      overflow: auto;
    }
  </style>
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
</head>
<body>
  <?php 
    $tamil_html_unicodes = array("&#x0B85",
                                "&#x0B86",
                                "&#x0B87",
                                "&#x0B88",
                                "&#x0B89",
                                "&#x0B8A",
                                "&#x0B8E",
                                "&#x0B8F",
                                "&#x0B90",
                                "&#x0B92",
                                "&#x0B93",
                                "&#x0B83",
                                "&#x0B95",
                                "&#x0B99",
                                "&#x0B9A",
                                "&#x0B9E",
                                "&#x0B9F",
                                "&#x0BA3",
                                "&#x0BA4",
                                "&#x0BA8",
                                "&#x0BAA",
                                "&#x0BAE",
                                "&#x0BAF",
                                "&#x0BB0",
                                "&#x0BB2",
                                "&#x0BB5",
                                "&#x0BB4",
                                "&#x0BB3",
                                "&#x0BB1",
                                "&#x0BA9",
                                "&#x0BB8",
                                "&#x0BB7",
                                "&#x0B9C",
                                "&#x0BB9",
                                "&#x0B95&#x0BCD&#x0BB7",
                                "&#x0B95&#x0BBF",
                                "&#x0B99&#x0BBF",
                                "&#x0B9A&#x0BBF",
                                "&#x0B9E&#x0BBF",
                                "&#x0B9F&#x0BBF",
                                "&#x0BA3&#x0BBF",
                                "&#x0BA4&#x0BBF",
                                "&#x0BA8&#x0BBF",
                                "&#x0BAA&#x0BBF",
                                "&#x0BAE&#x0BBF",
                                "&#x0BAF&#x0BBF",
                                "&#x0BB0&#x0BBF",
                                "&#x0BB2&#x0BBF",
                                "&#x0BB5&#x0BBF",
                                "&#x0BB4&#x0BBF",
                                "&#x0BB3&#x0BBF",
                                "&#x0BB1&#x0BBF",
                                "&#x0BA9&#x0BBF",
                                "&#x0BB8&#x0BBF",
                                "&#x0BB7&#x0BBF",
                                "&#x0B9C&#x0BBF",
                                "&#x0BB9&#x0BBF",
                                "&#x0B95&#x0BCD&#x0BB7&#x0BBF",
                                "&#x0B95&#x0BC0",
                                "&#x0B99&#x0BC0",
                                "&#x0B9A&#x0BC0",
                                "&#x0B9E&#x0BC0",
                                "&#x0B9F&#x0BC0",
                                "&#x0BA3&#x0BC0",
                                "&#x0BA4&#x0BC0",
                                "&#x0BA8&#x0BC0",
                                "&#x0BAA&#x0BC0",
                                "&#x0BAE&#x0BC0",
                                "&#x0BAF&#x0BC0",
                                "&#x0BB0&#x0BC0",
                                "&#x0BB2&#x0BC0",
                                "&#x0BB5&#x0BC0",
                                "&#x0BB4&#x0BC0",
                                "&#x0BB3&#x0BC0",
                                "&#x0BB1&#x0BC0",
                                "&#x0BA9&#x0BC0",
                                "&#x0BB8&#x0BC0",
                                "&#x0BB7&#x0BC0",
                                "&#x0B9C&#x0BC0",
                                "&#x0BB9&#x0BC0",
                                "&#x0B95&#x0BCD&#x0BB7&#x0BC0",
                                "&#x0B95&#x0BC1",
                                "&#x0B99&#x0BC1",
                                "&#x0B9A&#x0BC1",
                                "&#x0B9E&#x0BC1",
                                "&#x0B9F&#x0BC1",
                                "&#x0BA3&#x0BC1",
                                "&#x0BA4&#x0BC1",
                                "&#x0BA8&#x0BC1",
                                "&#x0BAA&#x0BC1",
                                "&#x0BAE&#x0BC1",
                                "&#x0BAF&#x0BC1",
                                "&#x0BB0&#x0BC1",
                                "&#x0BB2&#x0BC1",
                                "&#x0BB5&#x0BC1",
                                "&#x0BB4&#x0BC1",
                                "&#x0BB3&#x0BC1",
                                "&#x0BB1&#x0BC1",
                                "&#x0BA9&#x0BC1",
                                "&#x0B95&#x0BC2",
                                "&#x0B99&#x0BC2",
                                "&#x0B9A&#x0BC2",
                                "&#x0B9E&#x0BC2",
                                "&#x0B9F&#x0BC2",
                                "&#x0BA3&#x0BC2",
                                "&#x0BA4&#x0BC2",
                                "&#x0BA8&#x0BC2",
                                "&#x0BAA&#x0BC2",
                                "&#x0BAE&#x0BC2",
                                "&#x0BAF&#x0BC2",
                                "&#x0BB0&#x0BC2",
                                "&#x0BB2&#x0BC2",
                                "&#x0BB5&#x0BC2",
                                "&#x0BB4&#x0BC2",
                                "&#x0BB3&#x0BC2",
                                "&#x0BB1&#x0BC2",
                                "&#x0BA9&#x0BC2",
                                "&#x0BBE",
                                "&#x0BC6",
                                "&#x0BC7",
                                "&#x0BC8",
                                "&#x0BB8&#x0BCD&#x0BB0&#x0BC0",
                                "&#x0BB8&#x0BC1",
                                "&#x0BB7&#x0BC1",
                                "&#x0B9C&#x0BC1",
                                "&#x0BB9&#x0BC1",
                                "&#x0B95&#x0BCD&#x0BB7&#x0BC1",
                                "&#x0BB8&#x0BC2",
                                "&#x0BB7&#x0BC2",
                                "&#x0B9C&#x0BC2",
                                "&#x0BB9&#x0BC2",
                                "&#x0B95&#x0BCD&#x0BB7&#x0BC2",
                                "&#x0B95&#x0BCD",
                                "&#x0B99&#x0BCD",
                                "&#x0B9A&#x0BCD",
                                "&#x0B9E&#x0BCD",
                                "&#x0B9F&#x0BCD",
                                "&#x0BA3&#x0BCD",
                                "&#x0BA4&#x0BCD",
                                "&#x0BA8&#x0BCD",
                                "&#x0BAA&#x0BCD",
                                "&#x0BAE&#x0BCD",
                                "&#x0BAF&#x0BCD",
                                "&#x0BB0&#x0BCD",
                                "&#x0BB2&#x0BCD",
                                "&#x0BB5&#x0BCD",
                                "&#x0BB4&#x0BCD",
                                "&#x0BB3&#x0BCD",
                                "&#x0BB1&#x0BCD",
                                "&#x0BA9&#x0BCD",
                                "&#x0BB8&#x0BCD",
                                "&#x0BB7&#x0BCD",
                                "&#x0B9C&#x0BCD",
                                "&#x0BB9&#x0BCD",
                                "&#x0B95&#x0BCD&#x0BB7&#x0BCD",
                                "&#x0B94");
    // foreach ($tamil_html_unicodes as $key => $tamil_html_unicode) {
        ?>
    <div class="wrap">
      <div class="left"><?= $tamil_html_unicodes[0] ?></div>
      <div id="canvasDiv" class="right"><br/><br/><button onclick="clearCanvas()">Clear</button></div>
    </div>
    
        <?php
  ?>
  
  <script type="text/javascript">
    var canvasDiv = document.getElementById('canvasDiv');
    var canvasWidth  = 100;
    var canvasHeight = 100;

    canvas = document.createElement('canvas');
    canvas.setAttribute('width', canvasWidth);
    canvas.setAttribute('height', canvasHeight);
    canvas.setAttribute('id', 'canvas');
    canvasDiv.prepend(canvas);
    if(typeof G_vmlCanvasManager != 'undefined') {
    	canvas = G_vmlCanvasManager.initElement(canvas);
    }
    context = canvas.getContext("2d");


    // Simple canvas drawing
    $('#canvas').mousedown(function(e) {
      var mouseX = e.pageX - this.offsetLeft;
      var mouseY = e.pageY - this.offsetTop;
    		
      paint = true;
      addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop);
      redraw();
    });
    $('#canvas').mousemove(function(e) {
      if(paint){
        addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);
        redraw();
      }
    });
    $('#canvas').mouseup(function(e) {
      paint = false;
    });
    $('#canvas').mouseleave(function(e) {
      paint = false;
    });

    var clickX = new Array();
    var clickY = new Array();
    var clickDrag = new Array();
    var paint;

    function addClick(x, y, dragging) {
      clickX.push(x);
      clickY.push(y);
      clickDrag.push(dragging);
    }
    function redraw() {
      context.clearRect(0, 0, context.canvas.width, context.canvas.height); // Clears the canvas
      
      context.strokeStyle = "#000";
      context.lineJoin = "round";
      context.lineWidth = 2;
    			
      for(var i=0; i < clickX.length; i++) {		
        context.beginPath();
        if(clickDrag[i] && i){
          context.moveTo(clickX[i-1], clickY[i-1]);
         }else{
           context.moveTo(clickX[i]-1, clickY[i]);
         }
         context.lineTo(clickX[i], clickY[i]);
         context.closePath();
         context.stroke();
      }
    }
    // Clear the canvas context using the canvas width and height
    function clearCanvas() {
      clickX = new Array();
      clickY = new Array();
      clickDrag = new Array();
      context.clearRect(0, 0, canvas.width, canvas.height);
    }

    // Add touch event listeners to canvas element
    canvas.addEventListener("touchstart", function(e)
    {
      // Mouse down location
      var mouseX = (e.changedTouches ? e.changedTouches[0].pageX : e.pageX) - this.offsetLeft,
        mouseY = (e.changedTouches ? e.changedTouches[0].pageY : e.pageY) - this.offsetTop;
      
      paint = true;
      addClick(mouseX, mouseY, false);
      redraw();
    }, false);
    canvas.addEventListener("touchmove", function(e){
      
      var mouseX = (e.changedTouches ? e.changedTouches[0].pageX : e.pageX) - this.offsetLeft,
        mouseY = (e.changedTouches ? e.changedTouches[0].pageY : e.pageY) - this.offsetTop;
            
      if(paint){
        addClick(mouseX, mouseY, true);
        redraw();
      }
      e.preventDefault()
    }, false);
    canvas.addEventListener("touchend", function(e){
      paint = false;
        redraw();
    }, false);
    canvas.addEventListener("touchcancel", function(e){
      paint = false;
    }, false);

  </script>

</body>
</html>
