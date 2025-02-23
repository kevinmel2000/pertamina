<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
	<title>DataTables example - Ajax data source (objects)</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($murl.'views/media/css/jquery.dataTables.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($murl.'views/resources/syntax/shCore.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($murl.'views/resources/demo.css'); ?>">
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.3.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url($murl.'views/media/js/jquery.dataTables.js'); ?>">
	</script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url($murl.'views/resources/syntax/shCore.js'); ?>">
	</script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url($murl.'views/resources/demo.js'); ?>">
	</script>
	<script type="text/javascript" language="javascript" class="init">
	
$(document).ready(function() {
	$('#example').DataTable( {
		"ajax": "<?php echo base_url($murl.'views/data/objects.txt'); ?>",
		"columns": [
			{ "data": "name" },
			{ "data": "position" },
			{ "data": "office" },
			{ "data": "extn" },
			{ "data": "start_date" },
			{ "data": "salary" }
		]
	} );
} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>Ajax data source (objects)</span></h1>
			
			<table id="example" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Extn.</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Extn.</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
				</tfoot>
			</table>
		
		</section>
	</div>
</body>
</html>