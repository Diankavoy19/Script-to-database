<!DOCTYPE HTML> 
<html>
<head>
<title>Запропонувати виставку</title>
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
<form method="post" action="check.php" >
<fieldset>
    <legend align="center" ><B><font size="4" face="Lucida Console" >Запропонуй проведення виставки</font></B></legend>
    <b>Код виставки:</b><br>
<input type="text" Name="id" SIZE=30 VALUE="">
<br>
<b>Тема виставки:</b><br>
<input type="text" Name="Thema" SIZE=30 VALUE="">
<br>
<b>Дата початку:</b><br>
<input type="date" Name="Start" SIZE=30 VALUE="">
<br>
<b>Дата закінчення:</b><br>
<input type="date" Name="End" SIZE=30 VALUE="">
<br>
<b>номер білету:</b><br>
    <input type="text" Name="Number" SIZE=30  VALUE="" >
    <br>
    <button type="submit" name="submit" class="submit">Відправити дані</button>
    </fieldset>
    
</form>
    </td></tr></TABLE></body>
