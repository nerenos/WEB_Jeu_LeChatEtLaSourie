<script>
var x;
var y;
var di;
var dx;
var dy;
var xa = 0;
var ya = 0;
var acc = 5;
var timer = 1;
var rd = 420;
var xdd = Math.floor(rd*Math.random());
var ydd = Math.floor(rd*Math.random());
x1 = 0;
x2 = 0;
xd = 1;
yd = 1;
function cour() {
document.getElementById('x').innerHTML = xdd;
xa += xd;
ya += yd;
if(xa<0){xd = -xd;}
if(xa>450){xd = -xd;}
if(ya<0){yd = -yd;}
if(ya>450){yd = -yd;}
dx = Math.pow((Math.pow(xa,2)-Math.pow(x1,2)),0.5);
dy = Math.pow((Math.pow(ya,2)-Math.pow(y1,2)),0.5);
if(dx > xdd){di = Math.floor(2*Math.random());
if(di==0){xd = -xd;}
xdd = Math.floor(rd*Math.random());
}
if(dy > ydd){di = Math.floor(2*Math.random());
if(di==0){yd = -yd;}
ydd = Math.floor(rd*Math.random());}
x = xa;
y = ya;
window.document.getElementById(idel).style.left= x;
window.document.getElementById(idel).style.top= y;
document.getElementById('y').innerHTML = ydd;
setTimeout(cour, timer);
}

function move(e) {
if (navigator.appName!="Microsoft Internet Explorer") {
sx=e.pageX;
sy=e.pageY;
}
else {
sx=event.clientX;
sy=event.clientY;
}
d = Math.pow((Math.pow(sx-(x+x1),2)+Math.pow(sy-(y+y1),2)),0.5);
if(d<20){ alert('gagn�e');}
}
document.onmousemove=move;
</script>
<div style="background-image:url(jeux/attrape/images/terrain.jpg);margin:20px;border: 5px solid red;height:550px;width: 550px;"><div id="map" style="cursor:url(images/chat.gif) 25 25,url(jeux/attrape/images/chat.gif) 25 25, auto;margin:25px;height:500px;width:500px;"><div id="titi" style="height:40px;width:40px;background-image:url(jeux/attrape/images/sourie.gif);position: relative;top:0;left:0;"></div></div></div><div style="height:30px;width;50px;" id="x"></div><div style="height:30px;width;50px;" id="y"></div>
<script>
var idel = "map";
x1 = window.document.getElementById(idel).offsetLeft;
y1 = window.document.getElementById(idel).offsetTop;
var idel = "titi";
cour();
</script>