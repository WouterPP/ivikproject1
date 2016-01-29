<?php

	/**
	 * Update an existing message in the database
	 */
	
	# Open the session
	session_start();
	
	# Get the message ID from the URL
	$id 	= $_GET['id'];

	# Remove the message from storage
	unset($_SESSION['messages'][$id]);

	# Redirect to the list of messages
	header('location: index.php');