<html>
<head>
<style>
#canvas {
border: 1px solid gray;
}
</style>
</head>
<body>
<div id="canvasDiv"></div>
<script type="text/javascript">
var canvasDiv = document.getElementById('canvasDiv');
var canvasWidth  = 100;
var canvasHeight = 100;

canvas = document.createElement('canvas');
canvas.setAttribute('width', canvasWidth);
canvas.setAttribute('height', canvasHeight);
canvas.setAttribute('id', 'canvas');
canvasDiv.appendChild(canvas);
if(typeof G_vmlCanvasManager != 'undefined') {
	canvas = G_vmlCanvasManager.initElement(canvas);
}
context = canvas.getContext("2d");
</script>

</body>
</html>
