<!--
/**
 * Created by PhpStorm.
 * User: Sumo Stephane
 * Tools: Xampp, Photoshop
 * Date: 03/02/2018
 * Time: 21:30
 */
-->
<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="personal.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- 
  <style>
  	#dropdown{
  		overflow: hidden;
  	}

  	#dropdown #dropbtn{
  		font-size: 16px;
  		border: none;
  		outline: none;
  		color: white;
  		padding: 14px 16px;
  		background-color: inherit;
  		font: inherit;
  		margin: 0;
  	}

  	#menunav a:hover, #dropdown:hover #dropbtn{
  		background-color: red;
  	}

  	#dropdown-content {
  		display: none;
  		position: absolute;
    	background-color: #f9f9f9;
    	min-width: 160px;
    	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    	z-index: 1;
  	}

  	#dropdown-content a{
  	    float: none;
	    color: black;
    	padding: 12px 16px;
    	text-decoration: none;
    	display: block;
    	text-align: left;	
  	}

  	#dropdown:hover #dropdown-content{
  		display: block;
  	}
  </style>
  -->
</head>
<body>
  <div id="wrap">
    <!-- <div id="header"> 
    </div> -->
    <div id="menunav">
      <a href="#" style="color:silver; text-decoration: none; cursor: pointer" class="hove">SSA</a> <span class="magic"><a href="personal.php" style="color:silver; text-decoration: none; cursor: pointer">HOME</a></span> 

      <!-- <a href="#" style="color:silver; text-decoration: none; cursor: pointer" class="hover">Page</a>

        <span class="magic1"><a href="#" style="color:silver; text-decoration: none; cursor: pointer" class="hover">Page1</a></span> -->
      <span class="magic2"><a href="inscription.php" style="color:silver; text-decoration: none; cursor: pointer" class="hover">Inscription</a></span>
      <span class="magic3"><a href="connexion.php" style="color:silver; text-decoration: none; cursor: pointer" class="hover">Connexion</a></span>
      <span class="magic4"><a href="inscription.php" style="color:silver; text-decoration: none; cursor: pointer" class="hov"><img src="images/util1.jpg" alt="ok" height="22" width="22" style="margin-right: 5px">Sign Up</a></span>
      <span class="magic5"><a href="connexion.php" style="color:silver; text-decoration: none; cursor: pointer" class="hov"><img src="images/util.jpg" alt="ok" height="22" width="22" style="margin-right: 5px">Login</a></span>
      <!-- 
      <div id="dropdown">
      	<button id="dropbtn">Dropdown
      		<i class="fa fa-caret-down"></i>
      	</button>
      	<div id="dropdown-content">
      		<a href="#">Link 1</a>
      		<a href="#">Link 2</a>
      	</div>
      </div> -->
    </div>
  </div>
  <div id="wrapper">
    <div id="container">
      <!-- <p>Bla</p>
      <p>Coupe</p>
      Some <span class="test">Text here</span> to come <br/>
      powerful  
      <span class="test1">Text here</span> to come <br/>
      <span class="test2">Text here</span> to come <br/>
      hohohohohohohohohohohohoh -->
    </div>
    <div id="presentation" style="height: 550px; width: 500px">
      <img src="images/perso.jpg" class="img-circle" alt="image"/><br />
      <h3 style="color: red; font-size: 30px">Welcome!</h3>
      Hello everybody, i'm Sumo Stephane. 
I made this website with the goal of displaying my overall knowledge 
when it comes to web-programming. I happen to also be knowledgeable in 
Java, C, C++, C#, Python programming languages, 
in Network Administration, 
as well as being multi-cultural, notably in English, French and German.
      <form action="#" type="post">
        <input type="submit" id="button" value="View Details >>"/>
      </form>
    </div>
    <br />
  </div>
  <br />
  <div id="signature">
    <br>
    <hr class="horizontal" size="4"/>
    <img src="images/cyber.jpg" style="margin: 100px 0px 100px 350px"/>
  </div>
  <div id="footer">
    <hr class="horizontal" size="4"/>
    <a href="#" class="foot hover">Back to top</a> <br/>
    © 2018 Company, Inc.-<a href="#" class="foot hover">Privacy</a> - <a href="#" class="foot hover">Terms</a>
  </div>  
</body>
</html>