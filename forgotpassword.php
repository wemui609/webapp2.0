
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="css/style3.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<style>

nav{
  background-color: black;
  padding: 2px;
}

nav ul{
  list-style: none;
  color: lightgray;
}

nav ul li{
  display: inline-block;
  padding: 10px;
  border:1px lightgray solid;
}

		*{
			font-family: sans-serif;
		}
		.error{
			color:#f00;
		}
		.profilecontainer{
			margin:0px auto;
			text-align: center;
		}
		.profilecontainer img{
			padding-bottom:10px;
			border: 10px #bbb double;
			width:300px;
			height:300px;
			border-radius: 50%;
			padding:10px;
		}
		.profilecontainer span{
			display: inline-block;
			width:49%;
		}
		.profilecontainer .left{
			text-align: right;
		}
		.profilecontainer .right{
			text-align: left;
		}
	</style>
</head>
<body>
<nav>
	<ul>
		<li><a href="index.html">HOME</a></li>
		<li><a href="signup.html">REGISTER</a></li>
		<li><a href="forgotpassword.php">LOOKUP</a></li>
	</ul>
</nav>	<h2>Lookup</h2>

	<form method="post" action="forgotpassword.php">
		<label >username:<br>
			<input style="border: 1px solid #000000;" type="text" name="username" required>
			<span class="error">*</span>
		</label>

		<input type="submit" name="submit" value="Submit">  
	</form>


<div class="profilecontainer">
	<img src="default.png">
	<h3>
		<span class="left">Name:&nbsp;</span>
		<span class="right">name</span>
	</h3>
	<h4>
		<span class="left">Email:&nbsp;</span>
		<span class="right">email</span>
	</h4>
</div>

</body>
</html>