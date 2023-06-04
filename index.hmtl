<title>Web lấy mã 2fa</title>
<center><h1><form method = “post” action = 2fa.php?>
<br>
<br>
<br>
<br>
<br>
<div class="row">
    <div class="container">
       
          
<textarea type="“text”" giữ="" chỗ="" name="key" style="margin: 0px; width: 914px; height: 77px;" placeholder="Nhập Mã 2 FA : BK5VTVQ7D2RB... (Yêu Cầu : Không để khoảng trống )"></textarea>
<br>
<br>
<br>

<center><button type = “submit” class="myButton">Get Mã 2FA</button></center>
</form></center></h1>




<center><h1><script language="JavaScript1.2">
var message="Cảm Ơn Bạn Đã Quan Tâm Đến Chúng Tôi"
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
	background-color:#2dcc57;
	border-radius:42px;
	border:6px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	font-weight:bold;
	padding:13px 76px;
	text-decoration:none;
}
.myButton:hover {
	background-color:#0d0d0d;
}
.myButton:active {
	position:relative;
	top:1px;
}

        

    </style>
