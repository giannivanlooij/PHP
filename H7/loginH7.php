<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hoofdstuk 7</title>
</head>
<body>
	<style>
		body {
		background: rgb(38,189,249);background:
		linear-gradient(76deg, rgba(38,189,249,1) 0%, 
		rgba(112,214,237,1) 60%);position: relative;
	}.login {
		border: 0,5px ridge black;
	} h2 {
		position: relative;margin-top: 800px;
	} form, h2 {
			margin-left: 40%;margin-right: 50%;
	} h2, input {
        	margin-top: 8%;
    } #box {
    background-color: #ededed;
    border-radius: 25px;
    opacity: 95%;
    padding: black 5px;
    position: absolute;
    width: 300px;
    height: 300px;
    margin-left: 35%;
    z-index: -1;
}
	</style>
<div id="box">
</div>    
    <h2><br><br>Login</h2>
    <form action="response7.php" method="POST">
        <input class="login" type="text" name="email" placeholder="email" required>
        <br>
        <input class="login" type="password" name="password" placeholder="wachtwoord" required>
        <input type="submit" name="button">
    </form>
</body>
</html>