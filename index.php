<?php include 'header.php'; ?>
<?php include 'slider.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h2 class="middle-body-title text-center">here to make you look good.</h2>
            <p class="middle-body-text">A small studio with a big design heart. We love working with our clients
                to create beautiful well crafted and carefully thought out designs
                that translate brilliantly into print and digital media.</p>
            <p class="middle-body-text"><strong><a class="read-more-home" href="studio.php">READ MORE</a></strong><br><br><br></p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <p class="border-95px-margin"></p>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <h2 class="middle-body-title text-center" style="margin-bottom:20px;">What we can do</h2>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <p class="middle-body-text">Whether for a start-up business, website development or simply
                a series of printed collateral for marketing purposes, you
                can be assured of simple yet creative solutions that get results.</p><br><br><br>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-3 col-md-3 col-lg-3"><img src="images/img1.png" width="190" height="190" alt="" title="">
           <h1 class="big-h1-text">Ideas</h1> 
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3"><img src="images/img2.png" width="190" height="190" alt="" title="">
             <h1 class="big-h1-text">Design</h1> 
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3"><img src="images/img3.png" width="190" height="190" alt="" title="">
             <h1 class="big-h1-text">Print</h1> 
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3"><img src="images/img4.png" width="190" height="190" alt="" title="">
             <h1 class="big-h1-text">Digital</h1> 
        </div>
    </div>
</div>
<br><br><br>
<?php include 'footer.php'; ?>
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
