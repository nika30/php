<html>
<head>
<title>
Index
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style type="text/css">
@font-face {

      font-family: waltograph;
      src: url(waltograph.ttf); 
}
<style>
a:link {
		color: black;
		text-decoration:none;

	}

	a:visited {
		color: black;
		text-decoration:none;
	}

	a:active {
		background-color: black;
		text-decoration:none;
	}

	a:hover {
		color:red;
		text-decoration:none;
	}
</style>
<style>
#topo{
     width:1360px;
     height:100px;
     background-color:black;
     position:absolute;
     top:0%;
     left:0%;
   }
#login1{
     width:195px;
     height:470px;
     background-color:white;
     position:absolute;
     top:15.5%;
     left:0.1%;
   }
#rodape{
     width:1360px;
     height:60px;
     background-color:black;
     position:absolute;
     bottom:0%;
     left:0%;
   }
#evolu{
  
     position:absolute;
     top:0%;
     right:0%;
}
#evolu2{
  
     position:absolute;
     top:0%;
     left:0%;
}
#rock{

     width:200px;
     height:280px;
     position:absolute;
     top:30%;
     left:41%;
     background-image:url("hand.jpg");
     background-repeat: no-repeat;
     background-attachment: scroll;
     background-size:200px 280px;
}
#rock2{
  
     position:absolute;
     bottom:10%;
     left:41%;
}
#star{
  
     position:absolute;
     top:16%;
     left:0.3%;
}
#star2{
  
     position:absolute;
     top:16%;
     left:10.8%;
}
#login-box{
position:absolute;
   top:30%;
   left:1%;
  
    
}
#raio{
  
     position:absolute;
     top:54%;
     left:0%;
}
#titulo{
  
     position:absolute;
     top:0%;
     left:38.9%;
}
#raul{
  
     position:absolute;
     bottom:13%;
     right:0.8%;
}
#cadastre{
  
     position:absolute;
     bottom:50%;
     right:18%;
}
#cadastro{
     width:20px;
     height:18px;
     background-color:white;
     position:absolute;
     bottom:64.2%;
     right:32%;
}

</style>
<body>
<div id="topo"></div>
<div id="titulo"><img src="imagensindex\titulo.jpg" width="250" height="100"></div>
<div id="evolu"><img src="imagensindex\evolu.jpg" width="200" height="100"></div>
<div id="evolu2"><img src="imagensindex\evolu2.jpg" width="200" height="100"></div>
<div id="rodape"></div>
<div id="login1"><p><font size ="4" face="waltograph"font color="black"><center>Rock In:</center></div></p>
</font>
<div id="star"><img src="imagensindex\star.jpg" width="50" height="50"></div>
<div id="star2"><img src="imagensindex\star.jpg" width="50" height="50"></div>
<div id="raul"><img src="imagensindex\raul.jpg" width="350" height="210"></div>
<div id="raio"><img src="imagensindex\raio.png" width="200" height="170"></div>
<div id="cadastre"><img src="imagensindex\cadastre.jpg" width="280" height="150"></div>
<div id="cadastro"><p><font size="4" face="waltograph"><a href="cadastro.php"style="text-decoration:none">cadastro!?!</p></font></div></a>
<div id="rock"></div>
<div id="rock2"><img src="imagensindex\rock.jpg" width="150" height="100"></div>
<div id="all">
  <div id="login-box">
    <div id="login-inputs">
      <form name='form' action='senha.php' method='post'>
<label>LOGIN: </label>
<input type="text" name="login"/><br />
<label>SENHA: </label>
<input type='password' name='senha' /><br />
<input type="submit" value="Enviar"/>
</form>
      <p><font size="2" face="waltograph"><a href="esqueceu.php"style="text-decoration:none">Esqueceu a sua senha?</p></font></a>
    </div>
  </div>
</div>

</body>
</html>
