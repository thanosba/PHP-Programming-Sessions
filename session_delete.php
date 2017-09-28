<?php // logout.php
// This is the logout page. It destroys the session information.

// Address error handing.
ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

// Need the session.
session_start();

// Delete the session variable.
unset ($_SESSION);

// Destroy the session data.
session_destroy();

// Define a page title and include the header.
define ('TITLE', 'Logout');
require ('templates/header.html');

?>
<div id="leftcontent">
	<h1>Welcome to my personal web page!</h1>
	<p>You are now logged out.</p>
	<p>Thank you for using this site. We hope that you liked it.<br />
	......Here your text .... </p>
</div>

<?php 
require ('templates/footer.html'); // Need the footer.
?>