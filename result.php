<?php
/* CSV to HTML Table Converter */
/* GEF */
/* 01 Jun 2011 1917 -0400 */

$url=html_entity_decode($_GET['url']);
//$url='http://www.bized.co.uk/sites/bized/files/docs/abzuau.csv';
$file = file_get_contents($url);
$lineDelim = "\n";
$fieldDelim = ',';
if (isset($_GET['hasHeader']) && $_GET['hasHeader']=='on')
		$hasHeader = TRUE;
	else
		$hasHeader = FALSE;


$line = str_getcsv($file,$lineDelim);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CSV to HTML Table</title>
<?php if ($_GET['pretty'] == 'on') { ?>
	<script type="text/javascript" src="common/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="common/DataTables-1.7.6/media/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="common/DataTables-1.7.6/media/css/demo_table.css" />
	<link rel="stylesheet" type="text/css" href="common/DataTables-1.7.6/media/css/demo_page.css" />
	<script type="text/javascript">
		$(document).ready(function(){
			$('#csvtable').dataTable();
		});
	</script>
	<style type="text/css">
		body {
			font:  10pt arial black;
		}
	</style>
<? } ?>
</head>
<body>
<table id="csvtable">
	<?php if ($hasHeader) { ?>
	<thead>
		<tr>
			<?php $head = str_getcsv($line[0],$fieldDelim);
			foreach ($head as $element){ ?>
		<th><?php echo $element; ?></th>
		<?php } ?>
		</tr>
	</thead>
	<?php } ?>
	<tbody>
	<?php foreach ($line as &$element){ 
			$row = str_getcsv($element,$fieldDelim);
			if (!$hasHeader) {?>
		<tr>
		<?php foreach ($row as $element){ ?>
			<td><?php echo htmlentities($element); ?></td>
		<?php } ?>
		</tr>
		<?php }
		else {
			$hasHeader = FALSE;
		} ?>
	<?php } ?>
	</tbody>
</table>
<p>File Source: <?php echo $url; ?></p>
</body>
</html>

