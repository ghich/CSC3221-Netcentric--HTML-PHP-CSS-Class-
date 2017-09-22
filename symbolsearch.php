<?php  // This must be the FIRST line in a PHP webpage file
ob_start();		// Enable output buffering
?>
<?php	// Specify no-caching header controls for page
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");   			// Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");	// always modified
header("Cache-Control: no-store, no-cache, must-revalidate");	// HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");   // HTTP/1.0
?>
<HTML>
<Head>
	<title>Kaldorn's Honeypot WIP</title>
</head>
	<link rel="stylesheet" type="text/css" href="style.css" />
<body>
	<div id="navbar">
		<ul id="menu">
			<li><a class="active" href="symbolsearch.php">Symbol Search</a></li>
			<li><a href="stockhistory.php">Stock History</a></li>
			<li><a href="stockquote.php">Stock Quote</a></li>
			<li><a href="default.php">Home</a></li>
		</ul>
	</div>
<!--<H1>In development</H1>-->

	<div id="content">
		<H2>Symbol Search</h2>
		<form id="symbolsearch" action="symbolsearch.php" method="post">
			&nbsp		&nbsp
			<input type="text" "value="Search" placeholder="LNKD, MSFT...">
			<input type="submit" value="Quote">
		</form>
		<br>
				<table id="stocktable">
			<thead>
					<th>Company</th>
					<th>Symbol</th>
					<th></th>
					<th></th
			</thead>
			<tbody class="hovertable">
				<tr>
					<td align="left">Tesla Motors Inc</td>
					<td align="right">TSLA</td>
					<td><a href="http://kaldorn.cs.spu.edu/stockquote.php">Stock Quote</a></td>
					<td> <a href="http://kaldorn.cs.spu.edu/stockhistory.php">Stock History</a></td>
				</tr>
			</tbody>
		</table>
		<br>
		<br>
	</div>

</body>
</html>
<?php // This is the LAST section in a PHP webpage file
ob_end_flush();
?>