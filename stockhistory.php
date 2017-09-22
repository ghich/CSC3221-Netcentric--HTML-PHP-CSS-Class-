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
			<li><a href="symbolsearch.php">Symbol Search</a></li>
			<li><a class="active" href="stockhistory.php">Stock History</a></li>
			<li><a href="stockquote.php">Stock Quote</a></li>
			<li><a href="default.php">Home</a></li>
		</ul>
	</div>

	<div id="content">
		<h2>Stock History</h2>
		
		<form id="stockhistory" action="stockhistory.php" method="post">
		
			<input type="text" "value="Search" placeholder="LNKD, MSFT...">
			<input type="submit" value="Quote">
			
		</form>
		
		<table id="stocktable">
			<thead>
				<tr>
					<th>Date</th>
					<th>Last</th>
					<th>Change</th>
					<th>%Change</th>
					<th>Volume</th>
				</tr>	
			</thead>
			<tbody class="hovertable">
				<tr>
					<td>05/06/2016</td>
					<td>214.93</td>
					<td>+3.40</td>
					<td>+1.61</td>
					<td>5,684,097</td>
				</tr>
				<tr>
					<td>05/06/2016</td>
					<td>214.93</td>
					<td>+3.40</td>
					<td>+1.61</td>
					<td>5,684,097</td>
				</tr>
				<tr>
					<td>05/06/2016</td>
					<td>214.93</td>
					<td>+3.40</td>
					<td>+1.61</td>
					<td>5,684,097</td>
				</tr>
				<tr>
					<td>05/06/2016</td>
					<td>214.93</td>
					<td>+3.40</td>
					<td>+1.61</td>
					<td>5,684,097</td>
				</tr>
				<tr>
					<td>05/06/2016</td>
					<td>214.93</td>
					<td>+3.40</td>
					<td>+1.61</td>
					<td>5,684,097</td>
				</tr>
				<tr>
					<td>05/06/2016</td>
					<td>214.93</td>
					<td>+3.40</td>
					<td>+1.61</td>
					<td>5,684,097</td>
				</tr>
				<tr>
					<td>05/06/2016</td>
					<td>214.93</td>
					<td>+3.40</td>
					<td>+1.61</td>
					<td>5,684,097</td>
				</tr>
				<tr>
					<td>05/06/2016</td>
					<td>214.93</td>
					<td>+3.40</td>
					<td>+1.61</td>
					<td>5,684,097</td>
				</tr>
				<tr>
					<td>05/06/2016</td>
					<td>214.93</td>
					<td>+3.40</td>
					<td>+1.61</td>
					<td>5,684,097</td>
				</tr>
				<tr>
					<td>05/06/2016</td>
					<td>214.93</td>
					<td>+3.40</td>
					<td>+1.61</td>
					<td>5,684,097</td>
				</tr>
				<tr>
					<td>05/06/2016</td>
					<td>214.93</td>
					<td>+3.40</td>
					<td>+1.61</td>
					<td>5,684,097</td>
				</tr>
				<tr>
					<td>05/06/2016</td>
					<td>214.93</td>
					<td>+3.40</td>
					<td>+1.61</td>
					<td>5,684,097</td>
				</tr>
			</tbody>
		</table>
		<br>
	</div>
</body>