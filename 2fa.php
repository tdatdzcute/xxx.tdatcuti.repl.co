<title>Mã 2FA Của Bạn Đây</title>
<br>
<br>

<center><h1 style="border:2px solid Tomato;"> Mã 2 FA : <?php 

require_once 'GoogleAuthenticator.php';

if (isset($_GET['key']))
{
	$key = trim($_GET['key']);
	$ga = new PHPGangsta_GoogleAuthenticator();
	$code = $ga->getCode($key);
	$list = [
	"key"=>$key,
	"code"=>$code
	];
	$daucatmoi = json_encode($list, JSON_PRETTY_PRINT);
	$memay = json_decode($daucatmoi, true);
	echo $memay['code'];
}
// THUÊ THIẾT KẾ WEB INBOX TUANORI.ME NHÉ
?></h1></center>
<br>
<br>
<br>
<center><a href="/" class="myButton">Quay về trang chủ</a></center>

<center><h1><script language="JavaScript1.2">
var message="Cảm Ơn Bạn Đã Sử Dụng"
var neonbasecolor="yellow"
var neontextcolor="blue"
var flashspeed=100  //in milliseconds
var n=0
if (document.all||document.getElementById){
document.write('<font color="'+neonbasecolor+'">')
for (m=0;m<message.length;m++)
document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
document.write('</font>')
}
else
document.write(message)

function crossref(number){
var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
return crossobj
} 
function neon(){
if (n==0){
for (m=0;m<message.length;m++)
//eval("document.all.neonlight"+m).style.color=neonbasecolor
crossref(m).style.color=neonbasecolor
}

//cycle through and change individual letters to neon color
crossref(n).style.color=neontextcolor

if (n<message.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout("beginneon()",1500)
return
}
}

function beginneon(){
if (document.all||document.getElementById)
flashing=setInterval("neon()",flashspeed)
}
beginneon()
</script></h1></center>
    <style>
        .myButton {
	background-color:#0fa34f;
	border-radius:42px;
	border:12px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:28px;
	padding:18px 76px;
	text-decoration:none;
	text-shadow:0px 0px 50px #ff12ef;
}
.myButton:hover {
	background-color:#2a53bd;
}
.myButton:active {
	position:relative;
	top:1px;
}
    </style>