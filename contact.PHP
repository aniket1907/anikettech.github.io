<?php
//variable setting
$name=$_REQUEST['name'];
$E-mail=$_REQUEST['Email'];
$Message=$_REQUEST['Message'];

//Check
if(empty($name) || empty($E-mail)|| empty($Message))
{
echo"Please fill all the fields";
}
else
{
mail("aniketchoudhari2001@gmail.com","Webtech Message",$Message,"From:$name<$email");
echo"<script type='text/javascript'>alert('Your message sent successfully')
window.history.log(-1)


</script>";
}


?>