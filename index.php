<html>
<head>
<title>Login Page</title>
<meta name="description" content="Login Page">
<meta name="keywords" content="Login Page">
<link rel="shortcut icon" href="images/shortcut.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="mesafe"></div>
<div id="content">
<div class="title">Log in to your story</div>
<form method="post">
<div class="input"><label for="adress" class="label1">Store adress</label><br><input type="text" name="adress" id="adress" placeholder="yourstore.example.com"></div>
<div class="input"><label for="adress" class="label1">E-mail adress</label><br><input type="email" name="email" id="email" placeholder="example@example.com"></div>
<div class="input"><label for="adress" class="label1">Password</label><br><input type="password" name="pass" id="pass" placeholder="**********"></div>
<div class="submit">Log in</div>
</form>
<script>
$(function(){
	$(".submit").click(function(){
		$.ajax({
  type: "POST",
  url: "ajax.php",
  data: {store:$("#adress").val(),email:$("#email").val(),pass:$("#pass").val()},
  success: function(e){
	  alert(e);
  }
	})
	
 
});
	
})

</script>

<div class="sign">
<a href="javascript:void()"><div class="submit2">Sign up</div></a>
<div class="yazi">What is shopify? <a href="javascript:void()" class="find">Find out more</a></div>
</div>
</div>
</body>
</html>