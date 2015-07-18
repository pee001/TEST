<html>
<head>
  <meta charset="utf-8">
  <title>work together</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">

  <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-theme.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css');?>">
  <script src="<?php echo base_url('js/jquery-1.11.3.min.js');?>"></script>
  <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
</head>
<style>
.footer {
   height: 130px; /* ความสูงของ footer */
   display: block;
   text-align: center;
   background-color: #274472;
   margin-top: 500px;

}
.nava
{
  margin:auto;
  background-color: #274472;
  height:130px;
  width:auto;
}
img
{
  margin-left: 30px;
  margin-top: 10px;
}
hr
{
  margin: auto;
}
</style>
<body>
      <div class="text-muted nava">
      <img src="<?php echo base_url('img/logo1.jpg');?>"/>
    <!--กล่อง search  <input type="text" style="margin-left:900px;" placeholder="Search...">--->
    </div>
      <hr>
      <nav>
        <ul class="nav nav-justified "style="font-size: 20px;">
          <li ><a href=""  class="glyphicon glyphicon-home">Home</a></li>
          <li><a href="#" class="glyphicon glyphicon-user">Projects</a></li>
          <li><a href="#" class="glyphicon glyphicon-education">Services</a></li>
          <li><a href="#" class="glyphicon glyphicon-download">Downloads</a></li>
          <li><a href="#" class="glyphicon glyphicon-phone-alt">Contact</a></li>
        </ul>
      </nav>
      <hr>
<!---แสดงข่าว--->
    <div class="row">
      <div class="col-lg-9 ">
      <ul class="popular-news" style="margin-top:5px;">

      <div class="section page-heading animate-onscroll">
      <p class="breadcrumb"><a href="home.php">หน้าแรก</a>  {blog_heading}  </p>
      </div>
      {blog_entries}
      {feetnew}
      <h2>{contennew} </h2>
      <img src="<?php echo base_url('{file}');?>"width="200px" height="200px" >
      {/blog_entries}
       </ul>
      </div>
    </div>

    <div class="footer">
    </div>
</body>

</html>
