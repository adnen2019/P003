
<?php/*
header('Location: index.php');
exit;*/
?>
<?php
session_start() ;
 session_destroy();
session_start() ;  ?>

<?php
// Create connection
//$bdd= new PDO('mysql:host=sql210.hebergratuit.net;dbname=heber_24275120_mydb','heber_24275120','adnen1997',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ;
$bdd= new PDO('mysql:host=localhost;dbname=mydb','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ;
// Check connection
//if ($bdd->connect_error) {
  //  die("Connection failed: " . $bdd->connect_error);  }

 
/* $servername = "localhost";
$username = "root";
$password = "";
$dbname = "logins";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  }*/
   
 ?>
<!DOCTYPE html>
<html>
 <head>
     <title>psynet</title>

     <link rel="icon" type="image/png" href="bs.ico" /> 
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1"/>
     <meta name="keywords" content="Grade Responsive web template, Bootstrap Web Templates, Flat Web Templates,   Android Compatible web template, 
     Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
     <!-- Style-CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> 
     <link href="css/style1.css" rel='stylesheet' type='text/css' media="all">
     <link rel="stylesheet" type="text/css" href="site.css">
     <link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
     <!-- //css files -->
    
     <!--web font-->
     <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
     <!--//web font-->
 </head>
 <body>
 	 <div class="fluid-container">
         <header class="row">
             <?php require 'header.php' ; ?>    
	     </header>

 <?php require 'slideshow.php' ; ?>   
            
           
         <div class="container">
            
            <div>
                <form action="/cgi-bin/depression-quiz.cgi" method="post"><input name="jgoto" type="hidden" value="7"><p></p><div align="center"><p>I am a <input name="age" size="2" type="text" style="width:25px;"> year old <label for="a"><input id="a" name="gender" type="radio" value="1">Female</label> / <label for="b"><input id="b" name="gender" type="radio" value="2">Male</label> / <label for="c"><input id="c" name="gender" type="radio" value="3">Other</label></p></div><dl id="qzev"><dt>1. I do things slowly.</dt><dd><label for="100a"><input id="100a" name="100" type="radio" value="0"> Not at all</label><br> <label for="100b"><input id="100b" name="100" type="radio" value="1"> Just a little</label><br> <label for="100c"><input id="100c" name="100" type="radio" value="2"> Somewhat</label><br> <label for="100d"><input id="100d" name="100" type="radio" value="3"> Moderately</label><br> <label for="100e"><input id="100e" name="100" type="radio" value="4"> Quite a lot</label><br> <label for="100f"><input id="100f" name="100" type="radio" value="5"> Very much</label></dd></dl><dl id="qzod"><dt>2. My future seems hopeless.</dt><dd><label for="200a"><input id="200a" name="200" type="radio" value="0"> Not at all</label><br> <label for="200b"><input id="200b" name="200" type="radio" value="1"> Just a little</label><br> <label for="200c"><input id="200c" name="200" type="radio" value="2"> Somewhat</label><br> <label for="200d"><input id="200d" name="200" type="radio" value="3"> Moderately</label><br> <label for="200e"><input id="200e" name="200" type="radio" value="4"> Quite a lot</label><br> <label for="200f"><input id="200f" name="200" type="radio" value="5"> Very much</label></dd></dl><dl id="qzev"><dt>3. It is hard for me to concentrate on reading.</dt><dd><label for="300a"><input id="300a" name="300" type="radio" value="0"> Not at all</label><br> <label for="300b"><input id="300b" name="300" type="radio" value="1"> Just a little</label><br> <label for="300c"><input id="300c" name="300" type="radio" value="2"> Somewhat</label><br> <label for="300d"><input id="300d" name="300" type="radio" value="3"> Moderately</label><br> <label for="300e"><input id="300e" name="300" type="radio" value="4"> Quite a lot</label><br> <label for="300f"><input id="300f" name="300" type="radio" value="5"> Very much</label></dd></dl><dl id="qzod"><dt>4. The pleasure and joy has gone out of my life.</dt><dd><label for="400a"><input id="400a" name="400" type="radio" value="0"> Not at all</label><br> <label for="400b"><input id="400b" name="400" type="radio" value="1"> Just a little</label><br> <label for="400c"><input id="400c" name="400" type="radio" value="2"> Somewhat</label><br> <label for="400d"><input id="400d" name="400" type="radio" value="3"> Moderately</label><br> <label for="400e"><input id="400e" name="400" type="radio" value="4"> Quite a lot</label><br> <label for="400f"><input id="400f" name="400" type="radio" value="5"> Very much</label></dd></dl><dl id="qzev"><dt>5. I have difficulty making decisions.</dt><dd><label for="500a"><input id="500a" name="500" type="radio" value="0"> Not at all</label><br> <label for="500b"><input id="500b" name="500" type="radio" value="1"> Just a little</label><br> <label for="500c"><input id="500c" name="500" type="radio" value="2"> Somewhat</label><br> <label for="500d"><input id="500d" name="500" type="radio" value="3"> Moderately</label><br> <label for="500e"><input id="500e" name="500" type="radio" value="4"> Quite a lot</label><br> <label for="500f"><input id="500f" name="500" type="radio" value="5"> Very much</label></dd></dl><dl id="qzod"><dt>6. I have lost interest in aspects of life that used to be important to me.</dt><dd><label for="600a"><input id="600a" name="600" type="radio" value="0"> Not at all</label><br> <label for="600b"><input id="600b" name="600" type="radio" value="1"> Just a little</label><br> <label for="600c"><input id="600c" name="600" type="radio" value="2"> Somewhat</label><br> <label for="600d"><input id="600d" name="600" type="radio" value="3"> Moderately</label><br> <label for="600e"><input id="600e" name="600" type="radio" value="4"> Quite a lot</label><br> <label for="600f"><input id="600f" name="600" type="radio" value="5"> Very much</label></dd></dl><dl id="qzev"><dt>7. I feel sad, blue, and unhappy.</dt><dd><label for="700a"><input id="700a" name="700" type="radio" value="0"> Not at all</label><br> <label for="700b"><input id="700b" name="700" type="radio" value="1"> Just a little</label><br> <label for="700c"><input id="700c" name="700" type="radio" value="2"> Somewhat</label><br> <label for="700d"><input id="700d" name="700" type="radio" value="3"> Moderately</label><br> <label for="700e"><input id="700e" name="700" type="radio" value="4"> Quite a lot</label><br> <label for="700f"><input id="700f" name="700" type="radio" value="5"> Very much</label></dd></dl><dl id="qzod"><dt>8. I am agitated and keep moving around.</dt><dd><label for="800a"><input id="800a" name="800" type="radio" value="0"> Not at all</label><br> <label for="800b"><input id="800b" name="800" type="radio" value="1"> Just a little</label><br> <label for="800c"><input id="800c" name="800" type="radio" value="2"> Somewhat</label><br> <label for="800d"><input id="800d" name="800" type="radio" value="3"> Moderately</label><br> <label for="800e"><input id="800e" name="800" type="radio" value="4"> Quite a lot</label><br> <label for="800f"><input id="800f" name="800" type="radio" value="5"> Very much</label></dd></dl><dl id="qzev"><dt>9. I feel fatigued.</dt><dd><label for="900a"><input id="900a" name="900" type="radio" value="0"> Not at all</label><br> <label for="900b"><input id="900b" name="900" type="radio" value="1"> Just a little</label><br> <label for="900c"><input id="900c" name="900" type="radio" value="2"> Somewhat</label><br> <label for="900d"><input id="900d" name="900" type="radio" value="3"> Moderately</label><br> <label for="900e"><input id="900e" name="900" type="radio" value="4"> Quite a lot</label><br> <label for="900f"><input id="900f" name="900" type="radio" value="5"> Very much</label></dd></dl><p><input name="p" type="hidden" value="1"></p><div align="center"><input type="submit" value=" Save and Continue on to Part 2 of the Quiz "></div></form>
            </div>
          
              
		 </div>
		
 <?php require 'dr.php' ; ?>
          
         <footer id="foo" class="row">
             <div class="col-lg-12">
             <?php require 'footer.php' ; ?>
             </div>	     
         </footer>
     </div>
     <script type="text/javascript">
          email=document.getElementById("defaultLoginFormEmail") ;
        mdp=document.getElementById("defaultLoginFormPassword") ;
        signin=document.getElementById("signin") ; 
         function connVerif(){
            if(email.value==""){ 
                signin.type="button" ;
                email.focus() ;
            }
               else if (mdp.value==""){ 
                signin.type="button" ;
                mdp.focus() ;    }
                else{signin.type="submit" ;}}
           //Pour masquer la division :
         /*  document.getElementById("inscri").style.display ="none" ;
            ///Pour afficher la division :
         function register() {
             document.getElementById("inscri").style.display ="block"; 
             document.getElementById("login").style.display ="none"; 
             }
         function signin() {
             document.getElementById("inscri").style.display ="none"; 
             document.getElementById("login").style.display ="block"; 
             }*/
     </script>
     <script src="js/jquery-2.2.4.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
 </body>
</html>
