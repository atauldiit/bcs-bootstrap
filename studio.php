<?php include 'header.php';?>
<?php //include 'slider.php';?>
<div class="container-fluid">  
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <p class="middle-body-text" style="margin-top: 20px;">Located in the heart of St Ives, Cambridgeshire. We are a fun loving and friendly bunch of creative folks who love to build long term relationships with our clients, understand their business and brand and help them communicate with their audience.</p>
    </div>
  </div>
</div>
<div class="container-fluid">  
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <p style="font-size: 36px; border-bottom: 1px solid #444444; padding-bottom: 10px; margin: 20px 0;">The boys and girls who make it happen</p>
    </div>
  </div>
</div>
<div class="container-fluid">  
  <div class="row">
      <div class="col-sm-3 col-md-3 col-lg-3 employee-active"><img src="images/employee.png" height="262" width="262"></div>
      <div class="col-sm-3 col-md-3 col-lg-3 employee-active"><img src="images/employee.png" height="262" width="262"></div>
      <div class="col-sm-3 col-md-3 col-lg-3 employee-active"><img src="images/employee.png" height="262" width="262"></div>
    <div class="col-sm-3 col-md-3 col-lg-3 employee-active"><img src="images/employee.png" height="262" width="262"></div>
  </div>
    <div class="row" style="margin-top:20px;">
      <div class="col-sm-3 col-md-3 col-lg-3 employee-active"><img src="images/employee.png" height="262" width="262"></div>
      <div class="col-sm-3 col-md-3 col-lg-3 employee-active"><img src="images/employee.png" height="262" width="262"></div>
      <div class="col-sm-3 col-md-3 col-lg-3 employee-active"><img src="images/employee.png" height="262" width="262"></div>
    <div class="col-sm-3 col-md-3 col-lg-3 employee-active"><img src="images/employee.png" height="262" width="262"></div>
  </div>
</div>
<hr>
<?php include 'footer.php';?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script>
$(function () {
  var nua = navigator.userAgent
  var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
  if (isAndroid) {
    $('select.form-control').removeClass('form-control').css('width', '100%')
  }
})
</script> 
<!-- For for slider --> 
<script>
$('.carousel').carousel({
  interval: 2000
})
</script>
</body>
</html>
