<!DOCTYPE html
		PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<style>
		body {
			margin: 18pt 18pt 24pt 18pt;
		}

		h1,h2 {
			font-family: georgia,serif;
			font-weight: bold;
		}

		p {
			font-family: georgia,serif;
			text-align: center;
			font-size: 1em;
			margin: 0.5em;
			padding: 10px;
		}
	</style>
</head>
<body>
<h1>
	<center>{$lyrics.title}</center>
</h1>
<h2>
	<a href="{$lyrics.artist|search_url}" name="Find more lyrics by $artist"><center>{$lyrics.artist}</center></a>
</h2>
<p>{$lyrics.lyrics|nl2br}</p>
<p>Lyrics provided by <a href="{$urlprovided}">{$urlprovided}</center><p>
</body>
</html>