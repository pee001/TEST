<!DOCTYPE html">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>CKEditor</title>
  <script type="text/javascript" src="<?php echo base_url('ckeditor/ckeditor.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('ckfinder/ckfinder.js');?>"></script>
  </head>
<body>
  <label for="txtMessage"></label>
  <textarea name="txtMessage" id="ckeditor" class="ckeditor" cols="45" rows="5"></textarea>
  </body>
  <script type="text/javascript">
CKEDITOR.replace( 'ckeditor', {
	filebrowserBrowseUrl : '<?php echo base_url('ckfinder/ckfinder.html'); ?>',
	filebrowserImageBrowseUrl : '<?php echo base_url('ckfinder/ckfinder.html'); ?>?type=Images',
	filebrowserFlashBrowseUrl : '<?php echo base_url('ckfinder/ckfinder.html'); ?>?type=Flash',
	filebrowserUploadUrl : '<?php echo base_url('ckfinder/core/connector/php/connector.php'); ?>?command=QuickUpload&type=Files',
	filebrowserImageUploadUrl : '<?php echo base_url('ckfinder/core/connector/php/connector.php'); ?>?command=QuickUpload&type=Images',
	filebrowserFlashUploadUrl : '<?php echo base_url('ckfinder/core/connector/php/connector.php'); ?>?command=QuickUpload&type=Flash'
});
</script>
  </html>
