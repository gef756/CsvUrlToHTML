<?php 
/* CSV to HTML Table Converter */
/* GEF */
/* 01 Jun 2011 1917 -0400 */

$url=$_GET['url'];
$url='http://www.bized.co.uk/sites/bized/files/docs/abzuau.csv'
$file = file_get_contents($url),"\n";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CSV to URL</title>
</head>
<body>
<table id="csvtable">
  <?php while ($line = str_getcsv($file) !== FALSE)){ ?>
      <tr> 
          <?php foreach ($line as $element) { ?>
		<td><?php echo $element; ?></td>
          <?php } ?>
      </tr>
  <?php } ?>
</table>
<p>File Source: <?php echo $url; ?></p>	
</body>
</html>

