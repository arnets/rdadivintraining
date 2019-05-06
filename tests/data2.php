<html>
<head>
	<title>data</title>
</head>
<BODY>
<?php
if (isset($_POST['submit'])) {
		$xml = new DOMDocument("1.0","UTF-8");
		$xml->load("data.xml");
		$rootTag = $xml->getElementsByTagName("document")->item(0);
		$dataTag = $xml->createElement("data");
		$name = createElement("name",$_POST['name']);
		$pass = createElement("pass",$_POST['pass']);
		$dataTag-> appendChild($name);
		$dataTag-> appendChild($pass);
		$rootTag-> appendChild($dataTag);
		$xml->save("data.xml");
		echo "xml data inserted";
}
?>
<form method="POST" action="data2.php">
	<input type="text" name="name">
	<input type="password" name="pass">
	<input type="submit" name="submit" value="submit">
</form>
</BODY>
</html>
