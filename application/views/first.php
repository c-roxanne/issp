<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Clinic Item Monitoring System</h1>
<button><a href='<?php echo base_url();?>Main/view_add/'">ADD ITEM</a></button>
		<table id="table" class="display" cellspacing="0" width="100%">
		<thead>
			 <th>Item Number</th>
			 <th>Item Name</th>
			 <th>Type of Item</th>
			 <th>Quantity Delivered</th>
			 <th>Date Delivered</th>
			 <th>Comment</th>
			 <th>Action</th>
		 </thead>
		 <?php 
        if(isset($item)){
            foreach ($item as $row){
                echo "<th>".$row->item_no."</th>";
                echo "<th>".$row->item_name."</th>";
                echo "<th>".$row->item_type."</th>";
                echo "<th>".$row->item_quantity."</th>";
                echo "<th>".$row->item_quantity_date."</th>";
                echo "<th>".$row->comment."</th>";

            echo "</tr>";
        }
        }else{
            echo "no current record";
        }
        ?>
		</table>
	
</div>
</body>
</html>