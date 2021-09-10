<!DOCTYPE HTML> 
<html>
<head>
<title>Зареєструватися</title>
<style>
table{
background:transparent;
padding:20px;
border-radius: 30px;}
.button {
  display: inline-block;
  text-align: center;
  margin: 0px;
  width: 190px;
  height: 40px;
  background-color: orange;
  cursor: pointer;
  border-radius: 10px;

  box-shadow: 0 3px 20px rgba(0,0,0,.25),
  inset 0 2px 0 rgba(255,255,255,.6),
  0 2px 0 rgba(0,0,0,.1),
  inset 0 0 20px rgba(0,0,0,.1);
}
td.col1{background: rgb(69,69,69);
padding:10 px;
border-radius: 10px;}
td.col2{background: pink;padding:10 px;
border-radius: 10px;}
td.col3{background: violet;padding:10 px;
border-radius: 10px;}
button{background: gray;}
border1{ BORDERCOLORDARK="#ffffff"; BORDERCOLORLIGHT="#738278"}
fieldset{background: rgb(255,222,173);
width: 70%;
    position:center;}
.submit{
    margin-top: 30px;
    width: 140px;
    height: 40px;
    color: white;
}

</style>
    </head>
<body Background="img/1.fon.jpg"  background=images/fon.jpg>
<TABLE  bgcolor="transparent" BORDER="0" class="border1" width="50%"  align="center" >
<tr><td>
<form method="post" action="check2.php" >
<fieldset>
    <legend align="center" ><B><font size="4" face="Lucida Console" >Зареєструватися</font></B></legend>
<br>
<b>Прізвище:</b><br>
<input type="text" Name="SurName" SIZE=30 VALUE="">
<br>
<b>Ім'я:</b><br>
<input type="text" Name="Name" SIZE=30 VALUE="">
    <br>
<b>По-батькові:</b><br>
<input type="text" Name="Father" SIZE=30 VALUE="">
    <br>
<b>Місце народження(місто,країна):</b><br>
<input type="text" Name="City" SIZE=30 VALUE="">
    <br>
<b>Діяльність:</b><br>
<input type="text" Name="Activity" SIZE=30 VALUE="">
    <br>

    <button type="submit" name="submit" class="submit">Відправити дані</button>
    </fieldset>
    
</form>
    </td></tr></TABLE></body>