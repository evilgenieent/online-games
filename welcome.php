<?php
include('session.php');
?>
<!DOCTYPE  html>
<html>
<head>

<link  rel="stylesheet"  type="text/css"  href="style.css"  />
<link  rel="stylesheet"  type="text/css"  href="slider.css"  />
<title>Home</title>
</head>
<body>
<header>
<nav>
<ul>
<li><a href  ="#">HOME</a></li>
<li><a href ="games.html">GAMES</a></li>
<li><a href = "vocabularies/vocabulary1.html">QUICK QUIZ</a></li>
<li><a href = "http://www.riarauniversity.ac.ke/rublog/">NEWS</a></li>

</ul>
</nav>
</header>
<div  id="center">
<div  id="center-set">

<h1  align='center'>Welcome  <?php  echo  $loggedin_session;  ?>  </h1>



<div id="slider">
 <figure >
  
  
   <a href = "supermario/main.html"><img src = "images/mario1.jpg"></a>
   <a href = "vocabularies/vocabulary1.html"><img src = "images/quiz.jpg"></a>
   <a href = "snakemaster/snake.htm"><img src = "images/snake.jpg"></a>
   <a href = "snakemaster/snake.htm"><img src = "images/hestrix2.jpg"></a>
   


  </figure>
</div>

<div  id="contentbox">
<?php
include('connect.php');
$sql="SELECT  *  FROM  member  where  mem_id=$loggedin_id";
$result=mysqli_query($db,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div  id="signup">
<div  id="signup-st">
<form  action=""  method="POST"  id="signin"  id="reg">
<div  id="reg-head"  class="headrg">Your  Profile</div>
<table  border="0"  align="center"  cellpadding="2"  cellspacing="0">
<tr  id="lg-1">
<td  class="tl-1"><div  align="left"  id="tb-name">Reg  id:</div></td>
<td  class="tl-4"><?php  echo  $rows['mem_id'];  ?></td>
</tr>
<tr  id="lg-1">
<td  class="tl-1"><div  align="left"  id="tb-name">Name:</div></td>
<td  class="tl-4"><?php  echo  $rows['fname'];  ?>  <?php  echo  $rows['lname'];  ?></td>
</tr>
<tr  id="lg-1">
<td  class="tl-1"><div  align="left"  id="tb-name">Email  id:</div></td>
<td  class="tl-4"><?php  echo  $rows['address'];  ?></td>
</tr>
</table>

</form>
</div>
</div>
<div  id="login">
<div  id="login-sg">
<div  id="st"><a  href="logout.php"  id="st-btn">Sign  Out</a></div>

</div>
</div>
<?php
//  close  while  loop
}
?>
</div>
</div>
</div>
<?php
//  close  connection;
mysqli_close($db);
?>
</body>
</html>