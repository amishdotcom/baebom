<?php
$full_screen = "ON"; //ON or OFF
$autoplay  = "ON"; //ON or OFF
$loop  = "ON"; //ON or OFF
$controls  = "ON"; //ON or OFF
?>


<?php
//Control Schema
if($full_screen == 'ON')
{
$full_screen_switch = " allowfullscreen=\"allowfullscreen\"";
}
elseif($full_screen == 'OFF')
{
$full_screen_switch = "";
}
if($autoplay == 'ON')
{
$autoplay_switch = "?autoplay=1";
}
elseif($autoplay == 'OFF')
{
$autoplay_switch = "";
}
if($loop == 'ON')
{
$loop_switch = "&loop=1";
}
elseif($loop == 'OFF')
{
$loop_switch = "";
}
if($controls == 'ON')
{
$controls_switch = "?controls=1";
}
elseif($controls == 'OFF')
{
$controls_switch = "";
}
?>