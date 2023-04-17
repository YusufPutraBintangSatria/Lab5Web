<?php
require_once 'includes/database.php';
require_once 'includes/form.php';

$db = new Database();
$conn = $db->getConnection();
$form = new Form($conn);
?>

<!DOCTYPE html>
<html>
<head>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

	<title>Modular Oop Lab5Web</title>
  <link rel="stylesheet" type="text/css" href="includes/form.css">
</head>
<body>
	<h1>Modular Oop Lab5Web</h1>
	<?php
	// Check if form is submitted
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Process form data
		$form->processForm($_POST);
	}
	// Display form
	$form->displayForm();
	?>
</body>
</html>