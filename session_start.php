<?php // Script 9.6 - welcome.php 
// This is the welcome page. It's used after the user logs in.

// Address error handing.
ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

// Need the session.
session_start();

// Define a page title and include the header.
define ('TITLE', 'Welcome to my personal web page!');
require ('templates/header.html');

// Print a greeting.
print '<div id="leftcontent">
	<h1>Welcome to my personal web page, ' . ucfirst($_SESSION['username']) . '!</h1>';
	
// Print how long they've been logged in.
print '<p>You have been logged in since:<br /> ' . date ('g:i a', $_SESSION['loggedin']) . '</p>';

// Make a logout link.
print '<p><a href="logout.php">Click here to logout.</a></p>';
	
print '</div>';

require ('templates/footer.html'); // Need the footer.
?>