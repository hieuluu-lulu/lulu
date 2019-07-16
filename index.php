
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>MY CRUSH</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css" media="screen">
    	@charset "utf-8";
* {
	margin: 0;
	padding: 0;
	pointer-events: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-o-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
body{
	position: relative;
    background-color: #000;
    overflow: hidden;
}
dl {
	width: 250px;
	height: 340px;
	position: relative;
	margin: 120px auto;
	-webkit-transform-style: -webkit-preserve-3d;
	transform-style: preserve-3d;
}
dd {
	width: 250px;
	height: 340px;
	position: absolute;
	top: 0;
	left: 0;
}
img{width:100%;
	height:100%;
	border-radius: 10px;
}
dt {
	width: 900px;
	height: 900px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%) rotateX(90deg) translateZ(-200px);
	background: -moz-radial-gradient(center center,farthest-side,#fff5,#0005);
	background: -webkit-radial-gradient(center center,farthest-side,#fff5,#0005);
	background: -o-radial-gradient(center center,farthest-side,#fff5,#0005);
	background: radial-gradient(center center,farthest-side,#fff5,#0005);
}
.inverteds {
	transform: scaleY(-1);
	position: absolute;
	left: 0;
	top: 370px;
	width: 230px;
	height: 340px;
	opacity:0.5;
}
.inverted {
	position: relative;
	width: 230px;
	height: 340px;
}
.inverted::before {
	content: '';
	display: block;
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	background: -moz-radial-gradient(bottom,circle farthest-side,#0000,#000 66%);
	background: -webkit-radial-gradient(bottom,circle farthest-side,#0000,#000 66%);
	background: -o-radial-gradient(bottom,circle farthest-side,#0000,#000 66%);
	background: radial-gradient(bottom,circle farthest-side,#0000,#000 66%);
}
.name{
	color: #fff;
	text-align: center;
	margin-top: 80px;
	font-size: 50px;
}
.content-carrousel{
    width: 100%;
    position: absolute;
    float: right;
    animation: rotar 15s infinite linear;
    transform-style: preserve-3d;
}
.content-carrousel:hover{
    animation-play-state: paused;
    cursor: pointer;
}
@keyframes rotar{
    from{
        transform: rotateY(0deg);
    } to{
        transform: rotateY(360deg);
    }
}
@media(min-width: 300px){
	dd {
		width: 200px;
		height: 310px;
		position: absolute;
		top: 0;
		left: 0;
	}
}
@media(min-width: 1200px){
	dd {
		width: 230px;
		height: 340px;
		position: absolute;
		top: 0;
		left: 0;
	}
}
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery.min.js" type="text/javascript"></script>
<body>
    <dl>
        <dt></dt>
        <div class="content-carrousel">
            <dd><img src="1.jpg" /></dd>
            <dd><img src="2.jpg" /></dd>
            <dd><img src="3.jpg" /></dd>
            <dd><img src="4.jpg" /></dd>
            <dd><img src="5.jpg" /></dd>
            <dd><img src="6.jpg" /></dd>
            <dd><img src="7.jpg" /></dd>
            <dd><img src="8.jpg" /></dd>
            <dd><img src="10.jpg" /></dd>
            <dd><img src="11.jpg" /></dd>
        </div>
    </dl>
    <div class="name">Thi Thy's Ruby's</div>
    <embed src="silence.mp3" type="audio/mpeg" autostart="true" hidden="true">
        <audio id="player" autoplay loop>
            <source src="1.mp3" type="audio/mpeg">
        </audio>
    <script type="text/javascript" src="script.js"></script>
</body>
</head>
</html>