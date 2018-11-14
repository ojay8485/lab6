<?php
// accept a term (keyword)
// respond with a value
$query = $_GET['q'];
$all = $_GET['all'];
$definition = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites",
];
if ($all){
	$xmldata = '<?xml version="1.0" encoding="UTF-8"?>
	<entries>
		<definition name="Definition" author="Jordan">
			a statement of the exact meaning of a word, especially ina dictionary.
	 </definition>
	 <definition name="Bar" author="Jordan">
			a place that sells alcholic beverages
	 </definition>
	 <definition name="AJAX" author="Jordan">
			technique which involves the use of javascript and xml
	 </definition>
	 <definition name="HTML" author="Jordan">
			The standard markup language for creating web pages and web applications.
	 </definition>
	  <definition name="CSS" author="Jordan">
			A style sheet language used for describing the presentation of a document written in a markup language.
	 </definition>
	 <definition name="Javascript" author="Jordan">
			A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.
	 </definition>
	 <definition name="PHP" author="Jordan">
			A server-side scripting language, and a powerful tool for making dynamic and interactive websites,
	 </definition>
	 
	 
	</entries> 
	';
	header('Content-Type:text/html');
	$xmlOutput = new SimpleXMLElement($xmldata);
	print  $xmlOutput ->asXML();
}else{
	print "<h3>" . strtoupper($query) . "</h3>";
	print "<p>" . $definition[$query] . "</p>";
}