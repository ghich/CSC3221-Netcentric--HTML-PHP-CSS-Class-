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
			<li><a href="stockhistory.php">Stock History</a></li>
			<li><a class="active" href="stockquote.php">Stock Quote</a></li>
			<li><a href="default.php">Home</a></li>
		</ul>
	</div>

	<div id="content">
		<H2>Stock Quote</H2>
		
		<form id="stockquote" action="stockquote.php" method="post">
			&nbsp		
			<input type="text" "value="Search" placeholder="LNKD, MSFT...">
			<input type="submit" value="Quote">
		</form>
		
		<table id="stocktable">
			<thead>
					<th colspan="2">TSLA: Tesla Motors, Inc</th>
			</thead>
			<tbody class="hovertable">
				<tr>
					<td align="left">Last</td>
					<td align="right">214.93</td>
				</tr>
				<tr>
					<td align="left">Prev Close</td>
					<td align="right">211.53</td>
				</tr>
				<tr>
					<td align="left">Change</td>
					<td align="right">3.40</td>
				</tr>
				<tr>
					<td align="left">% Change</td>
					<td align="right">1.61%</td>
				</tr>
				<tr>
					<td align="left">High</td>
					<td align="right">216.37</td>
				</tr>
				<tr>
					<td align="left">Low</td>
					<td align="right">208.11</td>
				</tr>
				<tr>
					<td align="left">Daily Volume</td>
					<td align="right">5,684,097</td>
				</tr>
				<tr>
					<td align="left">Bid</td>
					<td align="right">214.87</td>
				</tr>
				<tr>
					<td align="left">Ask</td>
					<td align="right">214.51</td>
				</tr>
				<tr>
					<td align="left">52 Week High</td>
					<td align="right">286.65</td>
				</tr>
				<tr>
					<td align="left">52 Week Low</td>
					<td align="right">141.05</td>
				</tr>
				
			</tbody>
			<thead>
				<tr>
					<th colspan="2">Fundamentals</th>
				</tr>
			</thead>
			<tbody class="hovertable">
				<tr>
					<td align="left">PE Ratio</td>
					<td align="right">N/A</td>
				</tr>
				<tr>
					<td align="left">Earnings/Share</td>
					<td align="right">-6.93</td>
				</tr>			
				<tr>
					<td align="left">Div/Share</td>
					<td align="right">N/A</td>
				</tr>			
				<tr>
					<td align="left">Market Cap</td>
					<td align="right">27,892.9 Mil</td>
				</tr>
				<tr>
					<td align="left"># Shares Out</td>
					<td align="right">132,056,000</td>
				</tr>
				<tr>
					<td align="left">Div. Yield</td>
					<td align="right">N/A</td>
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