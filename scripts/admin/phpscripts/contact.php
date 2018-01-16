<?php
	require_once("admin/phpscripts/init.php");
	if(isset($_POST["name"])){
		//echo "Thanks, {$_POST['name']}";
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$msg = $_POST['msg'];
		$direct = "thankyou.php";
	}else{
		echo "Please fill out the form...";
	}




?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Me</title>
</head>

<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    	<label>Name:</label>
        <input required name="name" type="text">
        <label>Email:</label>
        <input required name="email" type="email">
        <label>Phone Number:</label>
        <input name="phone" type="tel">
        <label>Message:</label>
        <textarea name="msg"></textarea>
        <input type="submit" value="send">
        </form>

</body>
</html>
