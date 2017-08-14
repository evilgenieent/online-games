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
<div  id="signup">
<div  id="signup-st">
 <div  align="center">
<?php  
     $remarks  =  isset($_GET['remarks'])  ?  $_GET['remarks']  :  '';
     if  ($remarks==null  and  $remarks=="")
{
   echo  '<div  id="reg-head"  class="headrg">Register  Here</div>';
       }
     if  ($remarks=='success')
{
   echo  '<div  id="reg-head"  class="headrg">Registration  Success</div>';
       }
     if  ($remarks=='failed')
{
   echo  '<div  id="reg-head-fail"  class="headrg">Registration  Failed!,  Username  exists</div>';
       }
?>
       </div>
<form  name="reg"  action="execute.php"  onsubmit="return  validateForm()"  method="post"  id="reg">
<table  border="0"  align="center"  cellpadding="2"  cellspacing="0">
  
   <tr>
       <td  class="t-1"><div  align="left"  id="tb-name">First&nbsp;Name:</div></td>
       <td  width="171"><input  type="text"  name="fname"    id="tb-box"/></td>
   </tr>
   <tr>
       <td  class="t-1"><div  align="left"  id="tb-name">Last&nbsp;Name:</div></td>
       <td><input  type="text"  name="lname"  id="tb-box"/></td>
   </tr>
     <tr>
       <td  class="t-1"><div  align="left"  id="tb-name">Email:</div></td>
       <td><input  type="text"  id="tb-box"  name="address"  /></td>
   </tr>
 <tr>
       <td  class="t-1"><div  align="left"  id="tb-name">Username:</div></td>
       <td><input  type="text"  id="tb-box"  name="username"  /></td>
   </tr>
 <tr>
       <td  class="t-1"><div  align="left"  id="tb-name">Password:</div></td>
       <td><input  id="tb-box"  type="password"  name="password"  /></td>
   </tr>
</table>
       <div  id="st"><input  name="submit"  type="submit"  value="Submit"  id="st-btn"/></div>
        <div  id="st">
          
         <button class="container"><a href = "index.php">LOGIN</a></button>

        </div>
</form>
</div>
</div>

</body>
</html>