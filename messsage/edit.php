<?php

	/**
	 * Edit an existing message
	 */
	
	# Open the session
	session_start();
	
	/*
	 *	Retrieve the message from storage
	 */
	
	# Get the ID for the message from the URL (GET)
	$messageId = $_GET['id'];

	# Retrieve the message from storage
	$message = $_SESSION['messages'][$messageId];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit a message</title>
                <?php include "../Templates/Header.php"; ?>   
		</head>
	<body>

		<header></header>

		<nav></nav>
		
		<aside></aside>
		
		<section>
			
			<h1>Edit a message</h1>
			
			<form method="post" action="update.php">

				<input type="hidden" name="id" value="<?=$messageId?>">

				<input type="text" name="title" placeholder="Message title" value="<?=$message['title']?>" />
				<textarea name="body" placeholder="Message body"><?=$message['body']?></textarea>

				<button type="submit">Update message</button>
				
			</form>

		</section>
		
		<footer></footer>

	</body>
</html>