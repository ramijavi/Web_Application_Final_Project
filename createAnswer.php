<html>
<head>
<?PHP
if (empty($_GET['questionID'])) {
	echo "No question ID was given.";
	die();
}
?>
</head>
<body>
<form action="answerProcess.php?questionID=<?PHP echo $_GET['questionID']; ?>" method="post">
Insert Answer: <input type="text" name="answer"><br>
<input type="submit">
</form>
</body>
</html>
