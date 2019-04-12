<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
	<html>
		<head>
			<title>my form search</title>
	 		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    		<script src="js/typeahead.js"></script>
    		<script src="js/countries.js"></script>
    		<link href="css/floating-labels.css" rel="stylesheet">
    		<link rel="stylesheet" type="text/css" href="css/style.css">
		</head>
		<body>
			<div class="table-responsive">
				<table class="table talbe bordered">
					<tr>
						<td>names</td>
						<td>age</td>
						<td>professor</td>
					</tr>
					<xsl:for-each select="class/student">
					<tr>
						<td><xsl:value-of select="names"/></td>
						<td><xsl:value-of select="age"/></td>
						<td><xsl:value-of select="professor"/></td>
					</tr>
					</xsl:for-each>
				</table>
			</div>
		</body>
	</xsl:template>
</xsl:stylesheet>