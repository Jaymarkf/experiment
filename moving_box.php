<DOCTYPE html>
<html>
<style>

<?php
for($i=0;$i<=70;$i++){
        echo '#d:active ~.particles-'.$i.'{';
        echo 'background-color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).');';
        echo 'transition:1s;';
        echo 'transform:translate('.cos(mt_rand(0,50)) * mt_rand(0,300).'px,'.sin(mt_rand(0,50)) * mt_rand(0,300).'px);';
        echo 'transition-delay:0.71s;';
        echo 'animation: 3s ease 0s normal forwards 1 fadein;';
        echo '}';
}
?>
<?php
for($i=0;$i<=70;$i++){
        echo '#d:active ~.particle-'.$i.'{';
        echo 'background-color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).');';
        echo 'transition:1s;';
        echo 'transform:translate('.cos(mt_rand(0,50)) * mt_rand(0,300).'px,'.sin(mt_rand(0,50)) * mt_rand(0,300).'px);';
        echo 'transition-delay:0.7s;';
    echo 'animation: 3s ease 0s normal forwards 1 fadein;';
        echo '}';
}
?>
@keyframes fadein{
    0% { opacity:1; }
    45% { opacity:0.7; }
    100% { opacity:0; }
}

#d:active ~ .dash, #d:active ~.dash-1{


    animation:xb 2.6s;
}
#d:active ~ .x, #d:active ~.b{
animation: xb 2.6s;
animation-fill-mode: forwards;
}

.name{
transition:0.8s;
transition-delay:0.8s;
text-shadow: 0 0 4px red;
color: red;
}
#d:active ~ .name{
transform:scale(40);
opacity:0.6;

}
@keyframes xb{
0%{transform:translateY(0);}
40%{
transform:translateY(-400px);
}
100%{
transform:translateY(-400px);
position:relative;
}
}
.dash {
    position: absolute;
    left: 280px;
    bottom: -31px;
    width: 0;
    height: 0;
    border-top-left-radius:50px;
    border-top-right-radius:50px;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 40px solid red;
    filter:blur(1px);
}
.dash-1 {
    position: absolute;
    left: 250px;
    bottom: -31px;
    width: 0;
    height: 0;
    border-top-left-radius:50px;
    border-top-right-radius:50px;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 40px solid red;
}

</style>
<body>
<button id="d">hold me until boom!</button>
<div class='x' style='position:absolute;width:10px;height:10px;background-color:red;bottom:0;left:250px;border-radius:50%'></div>
<div class='b' style='position:absolute;width:10px;height:10px;background-color:red;bottom:0;left:280px;border-radius:50%'></div>
<div class='dash''></div>
<div class='dash-1''></div>
</body>
<?php
for($i = 0; $i<=70;$i++){
echo"<div class='particles-".$i."' style='width:10px;height:10px;position:absolute;left:250px;bottom:380px;border-radius:50%;'></div>";
}
for($i = 0; $i<=70;$i++){
echo"<div class='particle-".$i."' style='width:5px;height:5px;position:absolute;left:280px;bottom:380px;'></div>";

}
?>

<div class='star'></div>

</html>