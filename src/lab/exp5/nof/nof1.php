<?php
session_start(); 
?>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	
	<style type="text/css" media="screen">
body
{
 font-family: "Helvetica Neue", "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
        font-size: 14px;
        margin-top: .5em; color: #666;

}
#container
{
width: 90%;
margin: 10px auto;
background-color: #fff;
color: #333;
border: 10px solid gray;
line-height: 130%;
}

#top
{
padding: .5em;
background-color: #FFFFFF;
border-bottom: 0px solid gray;
}

#top h1
{
padding: 0;
margin: 0;
}

#leftnav
{
float: left;
width: 160px;
margin: 0;
padding: 1em;
}

#rightnav
{
float: right;
width: 20%;
margin: 0;
padding: 1em;
}

#content
{
width: 100%;
margin-left: 0px;
border-left: 0px solid gray;
margin-right: 0px;
border-right: 0px solid gray;
padding: 1em;
#max-width: 36em;
}


#content2
{
width: 95%;
margin-left: 0px;
border-left: 0px solid gray;
margin-right: 0px;
border-right: 0px solid gray;
border-top: 0px solid gray;
padding: 1em;
#max-width: 36em;
}

#footer
{
clear: both;
margin: 0;
padding: .5em;
color: #333;
background-color: #ddd;
border-top: 0px solid gray;
}

#leftnav p, #rightnav p { margin: 0 0 1em 0; }
#content h2 { margin: 0 0 .5em 0; }





</style> 

<SCRIPT language="JavaScript"
        type="text/javascript">
<!--

function check()
{


    var dia = document.nof.dia.value;

    var len = document.nof.len.value;



if(len <= (4*dia))
{
alert("Please select length greater than 4x diameter");


}
else
{
window.location = "nof2.php?dia="+dia+"&len="+len;
}



}


//-->
</SCRIPT>


</head>
<body>


<div id="container">
<div id="top">
<a href=index.html><img border=0 src=img/vlabs.jpg style="margin-left:20%"></a><br>
</div>


<div id="content">


<p>
<form name=nof>

<table>

<tr>
<td align="right">

Enter pipe diameter: </td>
<td align="left">
<select name="dia" style="width:150px;height:30px;background-color:#D0F18F;color:#53760D;font:20px cursive;border:solid 1px #6DB72C;background-color:#D0F18F;">
<option value="">Select value</option>
<option value="0.405">0.405</option>
<option value="0.540">0.540</option>
<option value="0.675">0.675</option>
<option value="0.840">0.840</option>
<option value="1.050">1.050</option>
<option value="1.315">1.315</option>
<option value="1.660">1.660</option>
<option value="1.900">1.900</option>
<option value="2.375">2.375</option>
<option value="2.875">2.875</option>
<option value="3.500">3.500</option>
<option value="4.000">4.000</option>
</select>   inches
</td></tr>
<tr>
<td align="right">
Enter pipe length: 
</td>
<td align="left">
 <input style="width:150px;height:30px;background-color:#D0F18F;color:#53760D;font:20px/30px cursive;border:solid 1px #6DB72C;background-color:#D0F18F;" type="text" name="len" />   inches </td> </tr>
<tr> 
<td></td>
<td align="left">
<input type="button" onClick="check();" VALUE="Submit">
</td></tr>
</table>

</form>

</p>
</div>

<div id="content2">
<h1>Theory</h1>
<p align="justify">
It is a natural phenomenon for a fluid to lose head as it flows through a pipe due to its viscosity.
For smooth pipes one can analyze its head loss with the length of the pipe for a given flow condition.
A simple apparatus to study this behavior may constitute of a pipe of a certain diameter and a fixed length that has a smooth inner surface.
Lets design and conduct analysis on one such apparatus.
To start off, lets choose a pipe. Pipes commonly range in diameter from 0.5 inches to 2 inches and for a realistic lab experiment a pipe ranges in length on a few meters.
</p>
J.T. Fanning proposed that the head loss in a pipe can be expressed as,
<br><br>
<img src="img/theory.jpg">
<br>
where 
<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;h = head loss in pipe
<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;f = Fanning friction factor
<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;l = length of pipe
<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;v = superficial velocity of fluid in pipe
<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&#961; = density of fluid
<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;g = gravitational constant
<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;d = diameter of pipe<br>

</div>
<div id="footer">
<p align="center">Virtual labs IIT Bombay</p>
</div>
</div>
</body>
</html>

