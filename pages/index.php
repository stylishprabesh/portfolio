<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Coming Soon | Hacker Style</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family: Consolas, monospace;
}

body{
background:#000;
color:#00ff66;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
overflow:hidden;
}

/* Matrix background */
canvas{
position:fixed;
top:0;
left:0;
z-index:-1;
}

/* Terminal box */
.terminal{
width:80%;
max-width:800px;
background:rgba(0,0,0,.85);
border:2px solid #00ff66;
padding:35px;
box-shadow:0 0 25px #00ff66;
}


.dot{
width:12px;
height:12px;
border-radius:50%;
}

.red{background:#ff4444;}
.yellow{background:#ffcc00;}
.green{background:#00ff66;}

.line{
margin:12px 0;
font-size:20px;
white-space:nowrap;
overflow:hidden;
border-right:2px solid #00ff66;
animation:typing 4s steps(40,end), blink .8s infinite;
}

@keyframes typing{
from{width:0}
to{width:100%}
}

@keyframes blink{
50%{border-color:transparent;}
}

.glitch{
font-size:45px;
font-weight:bold;
text-shadow:
2px 0 red,
-2px 0 cyan;
margin:20px 0;
animation:flicker .2s infinite alternate;
}

@keyframes flicker{
from{opacity:1;}
to{opacity:.8;}
}

.countdown{
font-size:28px;
margin:25px 0;
}

.progress-box{
border:1px solid #00ff66;
height:28px;
margin-top:15px;
}

.progress{
height:100%;
width:72%;
background:#00ff66;
color:#000;
font-weight:bold;
text-align:center;
line-height:28px;
}

.footer{
margin-top:30px;
font-size:18px;
opacity:.8;
}

.blinking{
animation:blink 1s infinite;
}
</style>
</head>
<body>

<canvas id="matrix"></canvas>

<div class="terminal">
<div class="topbar">
<div class="dot red"></div>
<div class="dot yellow"></div>
<div class="dot green"></div>
</div>

<div class="line">root@server:~ initializing project...</div>

<h1 class="glitch">ACCESS DENIED</h1>

<div class="line">
Project Launch In Progress...
</div>

<div class="countdown">
⏳ Launching Soon: 27 DAYS
</div>

<div class="progress-box">
<div class="progress">
72% COMPLETE
</div>
</div>

<div class="footer">
> system_status:
<br>
> website_deployment.exe running...
<br>
> stay_tuned<span class="blinking">_</span>
</div>
</div>

<script>
// Matrix Effect
const canvas = document.getElementById("matrix");
const ctx = canvas.getContext("2d");

canvas.height=window.innerHeight;
canvas.width=window.innerWidth;

let letters="01ABCDEFGHIJKLMNOPQRSTUVWXYZ";
letters=letters.split("");

let fontSize=16;
let columns=canvas.width/fontSize;
let drops=[];

for(let i=0;i<columns;i++){
drops[i]=1;
}

function draw(){
ctx.fillStyle="rgba(0,0,0,.05)";
ctx.fillRect(0,0,canvas.width,canvas.height);

ctx.fillStyle="#00ff66";
ctx.font=fontSize+"px monospace";

for(let i=0;i<drops.length;i++){
let text=letters[Math.floor(Math.random()*letters.length)];
ctx.fillText(text,i*fontSize,drops[i]*fontSize);

if(drops[i]*fontSize>canvas.height && Math.random()>0.975){
drops[i]=0;
}
drops[i]++;
}
}

setInterval(draw,35);
</script>

</body>
</html>