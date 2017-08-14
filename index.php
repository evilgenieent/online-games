<?php
include  "logincheck.php";
?>
<!DOCTYPE  html>
<html>
<head>

<link  rel="stylesheet"  type="text/css"  href="style.css"  />
<title>Register/Login</title>
</head>

<style>
 .container {
    overflow: auto;
    background-color: #333;
    font-family: Arial;
}

.container a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>

<body>

<div id="center-set" align="center">
<img src = "images/riara.jpg">
</div>



<div  id="center">
<div  id="center-set">
<div  id="login">
<div  id="login-st">
<form  action=""  method="POST"  id="signin"  id="reg">
   <?php
   $remarks  =  isset($_GET['remark_login'])  ?  $_GET['remark_login']  :  '';
     if  ($remarks==null  and  $remarks=="")
{
   echo  '<div  id="reg-head"  class="headrg">Login  Here</div>';
       }
     if  ($remarks=='failed')
{
   echo  '<div  id="reg-head-fail"  class="headrg">Login  Failed!,  Invalid  Credentials</div>';
       }
?>
<table  border="0"  align="center"  cellpadding="2"  cellspacing="0">
 <tr  id="lg-1">
       <td  class="tl-1"><div  align="left"  id="tb-name">Username:</div></td>
       <td><input  type="text"  id="tb-box"  name="username"  /></td>
   </tr>
 <tr  id="lg-1">
       <td  class="tl-1"><div  align="left"  id="tb-name">Password:</div></td>
       <td><input  id="tb-box"  type="password"  name="password"  /></td>
   </tr>
</table>
       <div  id="st"><input  name="submit"  type="submit"  value="Login"  id="st-btn"/></div>
       <div  id="st">
          <button class="container"><a href = "registration.php">REGISTER</a></button>

       </div>
</form>

       
</div>
</div>
</div>
</div>

 

</body>
</html>