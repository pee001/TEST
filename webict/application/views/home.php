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
      <div class="text-muted nava ">
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



<!---แสดงข่าว--->
    <div class="row">
      {blog_entries}
      <div class="col-lg-12 img ">
          <ul class="breadcrumb " >

              <img src="<?php echo base_url('{file}');?>"width="200px" height="200px" ><h6>
              <a  href="<?php echo base_url('index.php/Findall/findnew?id={idnew}');?>" class="mtitle">{feetnew}</a></h6>
            <div
              class="post-meta"><span><a class="glyphicon glyphicon-calendar"></a>{datenew}</span>
            </div>

          </ul>
      </div>
      {/blog_entries}

    </div>


              <div class="footer">

              </div>

</body>

</html>
