<?php  
require_once('inc.session5.php');
session_start();
require('connection.php');
require_once('cart10.php');	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CART_LESSON</title>
<meta charset='utf-8' >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="cart.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type"  content="text/html" charset="UTF-8" />
<link href="css/menu1.css" rel="stylesheet">
<link href="css/menu1_cart.css" rel="stylesheet">
<style>
input {
font-size: 1.7rem;
margin-bottom: 1rem;
height: 5rem;
width: 80%;
}
input:focus{
background-color:#acecdd;	
}
.btn-danger {
width: 100%;
}
#my_form{
background-color: coral;
width: 53rem;
border-radius: 2rem;
border: 5px solid #62e1ee;
}
.table {
margin-top: 0.3rem;
width: 90%;
background-color: #00beff;
}
h2{
margin-top: 3rem;	
margin-bottom: 3rem;
}
.error{
font-size: 2rem;
color: green;
}
#enter_account{
margin-top: 14rem;
}
a{
color: red;
}
@media (min-width: 240px ) and (max-width:1366px) 
{
#enter_account {
margin-top: 1rem;
}
#menu {
margin-top: -1rem;
}
}
@media (min-width: 240px ) and (max-width:414px) 
{
.error {
font-size: 1.5rem;
}
.table {
font-size: 60%;
}
#my_form {
width: 99%;
}
input {
height: 3rem;
margin-bottom: 0.1rem
}
h4,h2{
margin-top: 5px;
margin-bottom: 5px;
font-size: 1.4rem;
}
#menu {
margin-top: -1rem;
}
input {
font-size: 1.3rem;
}
p {
margin: 10px 0 10px;
}	
}
@media (min-width: 1024px ) and (max-width:1024px) 
{
#my_form {
width: 90%;	
}	
}
@media (min-width: 1440px ) and (max-width:1440px) 
{
#my_form {
width: 60%;
margin-right: 15%;
}
}
</style>
</head>
<body>	
<div class="container-fluid">
<div class="row">
<div class="col-md-6" style='background-color:;'>
<div id='menu' style="display:"></div>
<textarea id='enter' style='display:none;'/></textarea>	
<?php	include('shopping_cart.php') ;?>
</div>	
<div class="col-md-6" style='background-color:;'>				
<?php 
include('reg_user.php') ;
 ?> 
<div id="enter_account">
<?php
echo '<h2>'.$_SESSION['success'].'</br>';
echo 'Приветстувем вас,  '.$_SESSION['username'].'</br>';
echo 'Ваш email '. $_SESSION['email'].'</br></h2>';
include('logout.php') ?> 
</div> 
<?php  if (isset($_SESSION['username'])) : ?> 
<div id="enter_logout">
<a href="p9.php?logout='1'" > 
Выйти из аккаунта?
</a> 
</div>
<h2 style="color: green;">ПЕРЕЙТИ К ОПЛАТЕ?</h2>		
<a href="other.php" style="color: green;">ДА</br></a>
<?php
endif ?> 
</div>
</div>
</div>
<script src='modul/dom.js'></script>
</body>
</html>