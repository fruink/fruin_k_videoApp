<?php

	function redirect_to($location) {
		if($location != NULL) {
		header("Location: {$location}");
	}else{
			echo "Redirect was not sent.";
		}
	}

	function sendMessage($name, $email, $phone, $subject, $msg, $direct) {
			$to = "karleefruin23@gmail.com";
			$subj = "Message from karleefruin.com";
			$extra = "Reply-To: {$email}";
			$body = "Name: {$name}\n\nEmail: {$email}\n\nMessage: {$msg}";
			//echo $body;
			//This will not work locally on your machine...unless you go into wamp and turn it on
			//mail($to, $subj, $body, $extra);
			redirect_to($direct);

	}

?>
