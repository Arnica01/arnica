@extends('layouts.app')

@section('content')


<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com --><!--  Last Published: Thu May 11 2017 02:12:15 GMT+0000 (UTC)  --><html data-wf-page="58f24ff59590171867ff6fe7" data-wf-site="58f24ff59590171867ff6fe6"><head><meta charset="utf-8"><title>web | Built </title><meta content="Based upon the free Surfing Theme PSD which Robert Mayer shared on Dribbble." name="description"><meta content="Surf Theme | Built in Webflow" property="og:title"><meta content="Based upon the free Surfing Theme PSD which Robert Mayer shared on Dribbble." property="og:description"><meta content="https://daks2k3a4ib2z.cloudfront.net/58f24ff59590171867ff6fe6/58f2ce1190a1b8136563ffbe_surf-theme-540-360.gif" property="og:image"><meta content="summary" name="twitter:card"><meta content="width=device-width, initial-scale=1" name="viewport"><meta content="Webflow" name="generator"><link href="css/normalize.css" rel="stylesheet" type="text/css"><link href="css/webflow.css" rel="stylesheet" type="text/css"><link href="css/surf-theme.webflow.css" rel="stylesheet" type="text/css"><script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script><script type="text/javascript">WebFont.load({
  google: {
    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Oswald:200,300,400,500,600,700","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Playfair Display:regular,700,900"]
  }
});</script><script src="js/modernizr.js" type="text/javascript"></script><link href="images/32.png" rel="shortcut icon" type="image/x-icon"><link href="images/256.png" rel="apple-touch-icon"><style>
.form-group .form-control {
  position: relative;
  z-index: 2;
  padding: 12px;
  width: 100%;
  box-shadow: none;
}
.form-group .form-control:focus, .form-group .form-control:active {
  box-shadow: none;
  outline: none;
}
.form-group .form-label {
    color: #222222;
    font-size: 14px;
    min-height: 42px;
    text-align: left;
    position: absolute;
    top: 14px;
    left: 10px;
    right: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    z-index: 3;}
.form-group.focus:after {
  opacity: 1;
  width: 100%;
}
.form-group.focus .form-label, .form-group.filled .form-label {
  top: -20px;
  font-size: 12px;
  left: 0px;
  color: #5da8ef;
}
</style></head>
<body>
  






  
    <main class="container w-container">
      <div class="hero-section w-clearfix">

      <button type="button" class="btn btn-link">View Map</button>
      <img src="images/map.png" class="img-fluid" alt="Responsive image">
        
       
        </div>
      </div>
    </main>
    
   
      
        
          
          
          
    

  
  
  <footer class="footer">
  <div class="footer-widgets">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="widget widget_text">
            <h4 class="widget-title">Location</h4>
            <div class="textwidget">
              <p>
                <br>Asian Institute of Technology
                <br>School of Engineeering and Technology
                <br>P.o. Box 4, Klong Luang,
                <br>Pathumthani 12120,Thailand
              </p>
            </div><!-- /.textwidget -->
          </div><!-- /.widget -->
        </div><!-- /.col-md-3 -->
      </div>
    </div>
  </div>
</footer>

<!-- Bottom -->
<div class="bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="copyright">
          <p>© Copyright <a href="#">Team AGS</a> 2018. All Rights Reserved.
          </p>
        </div>
      </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</div>



<!-- Go Top -->
<a class="go-top">
  <i class="fa fa-angle-up"></i>
</a>

</body>
</html>

    
 
<script>
$('.form-control').focusout(function() {
        $('.form-group').removeClass('focus');
    });
    $('.form-control').focus(function() {
        $(this).closest('.form-group').addClass('focus');
    });
    /// Check for the input field keypress
    $('.form-control').keyup(function() {
        if($(this).val().length > 0){
            $(this).closest('.form-group').addClass('filled');
        }
        else{
            $(this).closest('.form-group').removeClass('filled');
        }
    });
    /// Check for the input field filled focus
    var $formControl = $('.form-control');
    var values = {};
    var validate =    $formControl.each(function() {
        if($(this).val().length > 0){
            $(this).closest('.form-group').addClass('filled');
        }
        else{
            $(this).closest('.form-group').removeClass('filled');
        }
    });
</script>
</body></html>
@endsection