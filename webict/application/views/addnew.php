<html>
<head>
  <meta charset="utf-8">
  <title>work together</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php base_url('css/bootstrap.min.css');?>">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php base_url('css/bootstrap-theme.min.css');?>">
  <link rel="stylesheet" href="<?php base_url('css/bootstrap.css');?>">
  <script src="<?php base_url('js/jquery-1.11.3.min.js');?>"></script>
  <script src="<?php base_url('js/bootstrap.min.js');?>"></script>
  
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
.am
{
  text-align: center;
  margin-top: 70px;
}
.header {
        color: #36A0FF;
        font-size: 27px;
        padding: 10px;
    }

    .bigicon {
        font-size: 35px;
        color: #36A0FF;
    }
</style>
<body>
  <div class="row">
    <div class="text-muted nava">
       <div class="col-md-4"><img src="<?php base_url('img/logo1.jpg');?>"/></div>
       <div class="col-md-4"></div>
       <div class="col-md-4">
          <center>  <h3><font color=white>WELCOME ADMIN</font></h3>
              <a href="<?php echo base_url('index.php/Chacklogin');?>"><font color=white class="glyphicon glyphicon-home"> logout</a>
            </center>

              </div>
          </div>
        </div>

      <div class="container am">
          <div class="row">
              <div class="col-md-12">
                  <div class="well well-sm">
                      <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/Addnewcon');?>"  enctype="multipart/form-data" >
                          <fieldset>
							            <font color=red> <?php echo validation_errors();?></font>
                              <legend class="text-center header"> กรอกข้อมูล ข่าว</legend>

                              <div class="form-group">
                                  <span class="col-md-1 col-md-offset-2 text-center"></span>
                                  <div class="col-md-8">
                                      <input id="tittle" name="feetnew" type="text" placeholder="หัวข้อข่าว" class="form-control" >
                                  </div><br>
                              </div>
                                <div class="form-group">
                                     <span class="col-md-1 col-md-offset-2 text-center"></span>
                                     <div class="col-md-8">
                                         <input id="date" name="datenew" type="date" placeholder="date" class="form-control">
                                     </div>
                                 </div><br>

                                  <div class="form-group col-lg-4">
                                      <input id="uploadBtn" type="file" class="upload" name="picture">
                                  </div><br>

                                  <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></i></span>
                                    <div class="col-md-8">
                                        <textarea class="ckeditors" id="message" name="contennew" ></textarea>
                                    </div>
                                  </div>

                              <div class="form-group">
                                  <div class="col-md-12 text-center">
                                      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                  </div>
                              </div>
                          </fieldset>
                      </form>
                  </div>
              </div><?php printf('<img src="%s">',base_url('img').'/'.$file['file_name']);?>
          </div>
      </div>

  </body>
  <script type="text/javascript">
//<![CDATA[
CKEDITOR.replace( 'message');
//]]>
</script>

</html>
