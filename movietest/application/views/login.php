<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap-theme.min.css');?>">
	<script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>"></script>
	<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>

</head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	</style>
<body>
	<?php echo validation_errors(); ?>
   <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('index.php/Checklogin');?>" >
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">ชื่อสมาชิก</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="username">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่าน</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-info">login</button>
    </div>
  </div>
</form>

</body>
</html>
