<html>
<head>
  <style>
    #canvas {
      border: 1px solid gray;
    }
    #canvasDiv {
        /* Prevent nearby text being highlighted when accidentally dragging mouse outside confines of the canvas */
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
  </style>
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
</head>
<body>
  <div id="canvasDiv"></div>
  <button onclick="clearCanvas()">Clear</button>
  <script type="text/javascript">
    var canvasDiv = document.getElementById('canvasDiv');
    var canvasWidth  = 60;
    var canvasHeight = 60;

    canvas = document.createElement('canvas');
    canvas.setAttribute('width', canvasWidth);
    canvas.setAttribute('height', canvasHeight);
    canvas.setAttribute('id', 'canvas');
    canvasDiv.appendChild(canvas);
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
