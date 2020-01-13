<?php include 'header.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 google-map-contactus">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2438.6465175457047!2d-0.07081035000001032!3d52.32241645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4877de5e47184ccd%3A0xbd512d2f5b796a53!2sSt+Ives%2C+Saint+Ives%2C+Cambridgeshire+PE27+5HJ!5e0!3m2!1sen!2suk!4v1424779137851" width="100%" height="350" frameborder="0" style="border:0"></iframe>
        </div>
    </div>    
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- h2 class="middle-body-title text-center">Contact Us</h2 -->
            <p class="middle-body-text"><br><br>we love great ideas, creative challenges and ambitious clients. If you are eager to speak to us about your next project, no matter how big or small, get in touch.</p>
        </div>
    </div>
</div>
<hr>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <form class="form" role="form">
                <div class="input-group">
                    <label for="email">Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Type Your Name" aria-describedby="sizing-addon2">
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control" placeholder="Type Your Email" aria-describedby="sizing-addon2">
                </div>
                <div class="input-group">
                    <label for="email">Address:</label>
                    <input type="text" name="address" class="form-control" placeholder="Type Your Adress" aria-describedby="sizing-addon2">
                </div>
                <div class="input-group">
                    <label for="email">Message:</label>
                    <input type="text" name="message" class="form-control" placeholder="Type Your Message" aria-describedby="sizing-addon2">
                </div>
                <div class="input-group">
                    <br><button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <br>
            <p>Feel free to send us a message via the contact form,<br>
            if you have an attachment you can send it to our main email address (hello@blumarks.com).</p>           
            <br>
            <h4>Blumarks Creative Studio Ltd</h4>
            <p><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Unit 7 Cromwell Mews,<br>St Ives,<br>Cambridgeshire<br>PE27 5HJ</p>
             <p>
                <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 01223 398300
            </p>
            <p>                
                <span class="glyphicon glyphicon-send" aria-hidden="true"> hello@blumarks.com</span>
            </p>
        </div>
    </div>    
</div>
<hr>
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
