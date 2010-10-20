<html>
<head>
	<title>Simple Timeline Twitter</title>

	<link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body>
<h1>Simple Example: display timeline twitter without plugins, class, whatever</h1>

<?
echo "<ul>";
foreach ( @simplexml_load_file ('http://twitter.com/statuses/user_timeline/40531821.rss')->channel->item as $item )
{
	$title = $item->title;
	$link  = $item->link;
	
	echo "<li><a href='$link'>@$title</a></li>";
}
echo '</ul>';
?>

<h3>&copy; 2010 - Deyvid Nascimento (@deyvin)</h3>
</body>
</html>