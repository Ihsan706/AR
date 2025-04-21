<style>
* {
    direction: ltr;
    text-align: left;
}

</style>
<?php
$supject = "طرق معالجة اخطاء الشباب وفشلهم في الحياة مشروع احسان";
$secondLine = "https://th.bing.com/th/id/OIP.K9eXqUM-myRBddaGB5nL0wHaHL?rs=1&pid=ImgDetMain";
$numbar = 0;
$filename = "pic.txt";
$lines = file($filename, FILE_IGNORE_NEW_LINES);
$text = "";
foreach ($lines as $lineNumber => $lineContent) {
$numbar+=1;

    $text .= $lineContent . " "; 
}
//$text_str = implode(" ", $text);


$word = explode(" ", $text);

?>
<h1 class="text"><?php echo $supject ; ?></h1>
<div class="imgdiv">
<input type="image" src="https://th.bing.com/th/id/R.0e3248681202fcf911cd50c0c9d42c0a?rik=UtU2WCwwvJ49lA&pid=ImgRaw&r=0" value="morephoto" class="pic1" alt="Ihsan: no photo please add a photo by puting a photo link and writing its in $secondLine make shoer that the photo name is the first line" name="morephoto"
onclick="window.open('https://th.bing.com/th/id/OIP.m_Vx4Dre6NLNpTrGfdm1ggAAAA?rs=1&pid=ImgDetMain'); console.log('this was done by Ihsan');">

<input type="image" src="<?php echo $secondLine; ?>" value="morephoto" class="pic1" alt="Ihsan: no photo please add a photo by puting a photo link and writing its in $secondLine make shoer that the photo name is the first line" name="morephoto"
onclick="window.open('https://github.com/Ihsan706/AR/archive/refs/heads/main.zip'); console.log('this was done by Ihsan');">

<input type="image" src="R.jpeg" value="morephoto" class="pic1" alt="Ihsan: no photo please add a photo by puting a photo link and writing its in $secondLine make shoer that the photo name is the first line" name="morephoto"
onclick="window.open('https://maqall.net/self-development/ways-address-youth-mistakes/'); console.log('this was done by Ihsan');">

</div>
<div id="test">
<?php
//untel all words are done
$q = 0;
while ($q < count($word)){
	$speed = rand(0,45);
	?><p class="words" style="animation-range-end:<?php echo $speed; ?>vh;"><?php echo $word[$q]; ?></p><?php
	$q += 1;
}
?>
</div>
<style>
#test{
	direction: rtl;
    padding-bottom: 45vh;
}
.words{
	    display: inline-flex;
    flex-direction: row-reverse;
position: relative;
    display: inline-block;
    margin-right: 1vw;
    font-size: 3vw;
	    animation-name: textcome;
    animation-timing-function: ease-in-out;
    animation-timeline: view();
    animation-range-end: 20vh;
    animation-duration: 6s;
}
@keyframes textcome{
	from{opacity:0;     transform: translateY(20vh) rotate(-100deg);     scale: 1;}
	to{opacity:1;     transform: translateY(0vh) rotate(0deg);     scale: 1;}
}
.imgdiv{
	    position: relative;
    background: aqua;
    border-width: 20vw;
    border-radius: 20rem;
    overflow: hidden;
    height: 15vh;
    margin-top: 10vh;
}
.pic1{
	    height: 100%;
    object-fit: cover;
    width: 31.9vw;
    margin: 0px;
    position: relative;	
}
.text{
    position: fixed;
    z-index: 2;
	top:0px;
    text-align: center;
    width: -webkit-fill-available;
    color: #00aaff;
    background: linear-gradient(180deg, black, #0000009c, transparent);
	margin-top: 0px;
	    animation-duration: 5s;
    animation-name: text;
    animation-timing-function: ease-in-out;
	font-size: 4vw;
}
body,html{
	    background: blue;
		background: linear-gradient(45deg, blue , #00002d);
	margin:0px;
	 /*  animation-duration: 5s;
    animation-name: back;
    animation-timing-function: ease-in-out;
	*/
}
@keyframes text{
	0%{opacity:0;}
	100%{opacity:1;}
}
.q{
	background: linear-gradient(45deg, black, blue);
	    position: absolute;
		width:100vw;
		height
}
@keyframes back{
	0%{    background: linear-gradient(45deg, black, black);}
	100%{    background: linear-gradient(45deg, black, blue);}
}
</style>