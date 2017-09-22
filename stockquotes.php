<?php  // This must be the FIRST line in a PHP webpage file
ob_start();		// Enable output buffering
?>

<?php	// Specify no-caching header controls for page
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");   			// Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");	// always modified
header("Cache-Control: no-store, no-cache, must-revalidate");	// HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");   // HTTP/1.0


$servername = "cs.spu.edu";
$username = "kaldorn";
$password = "kaldorn.kaldorn";

try {
    $conn = new PDO("mysql:host=$servername;dbname=quotesdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
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
<!--<H1>In development</H1>-->


</body>