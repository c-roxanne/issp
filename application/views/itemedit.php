<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo validation_errors(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
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

<?php echo form_open('stockc/itemedit/'.$data['item_no'], "class='form-horizontal'"); ?>

 <div class="form-group">
 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Item Name </label>
 	<div class="col-sm-9">
 		<input type="text" id="form-field-1" placeholder="Item Name" name="item_name" class="col-xs-10 col-sm-5" value="<?php echo $data['item_name']; ?>">
 	</div>
 </div>

 <div class="form-group">
 	<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Item Type </label>
 		<div class="col-sm-9">
 			<input type="number" id="form-field-2" placeholder="Item Type" class="col-xs-10 col-sm-5" name="item_type" value="<?php echo $data['item_type']; ?>">
 		</div>
 </div>

 <div class="form-group">
	 <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Item Quantity </label>
		 <div class="col-sm-9">
			 <input type="number" id="form-field-2" placeholder="Item Quantity" class="col-xs-10 col-sm-5" name="item_quantity" value="<?php echo $data['item_quantity']; ?>">
		 </div>
 </div>

 <div class="form-group">
 	<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Item Stock </label>
 		<div class="col-sm-9">
 			<input type="number" id="form-field-3" placeholder="Item Stock" class="col-xs-10 col-sm-5" name="item_stock" value="<?php echo $data['item_stock']; ?>">
 		</div>
 </div>

 <div class="form-group">
	 <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> comment </label>
		 <div class="col-sm-9">
			 <input type="number" id="form-field-2" placeholder="Edit Comment" class="col-xs-10 col-sm-5" name="comment" value="<?php echo $data['comment']; ?>">
		 </div>
 </div>

 <div class="space-4"></div>
 <div class="clearfix form-actions">
 <div class="col-md-offset-3 col-md-9">
 <button class="btn btn-info" type="submit">
 <i class="ace-icon fa fa-check bigger-110"></i>
 Submit
 </button>

 &nbsp; &nbsp; &nbsp;
 <button class="btn" type="reset">
 <i class="ace-icon fa fa-undo bigger-110"></i>
 Reset
 </button>
 </div>
 </div>
 </form>