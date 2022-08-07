<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>ULLWEB QRcode Generator </title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- Favicons -->
        <link href="assets/img/favicon.jpg" rel="icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" integrity="sha256-a2tobsqlbgLsWs7ZVUGgP5IvWZsx8bTNQpzsqCSm5mk=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <nav class="navbar navbar-expand-sm d-flex justify-content-between text-white navbar-light bg-transparent fixed-top">
            <div class="navbar-brand ml-5">
                <a href="index.php" style="text-decoration:none;">	
                    <h3 class="text-white animated fadeInLeft"> QRCode </h3>
                </a>
            </div> 
        </nav>
        <div class="container-fluid mx-0 px-0">
            <div class="owl-carousel banner mx-0 px-0">
                <div align="center" class="item" style="background:linear-gradient(45deg,rgba(12,12,12,0.5),rgba(13,13,13,0.7)),url(../images/1.jpg) center center;height:100vh;padding-top:15%;">
                    <h1 align="center" class="pt-5 px-1 text-white" style="font-size:55px;">  Generate your QRCode </h1>
                    <label class="text-white" style="font-size:27px;"> Get it done with ease and worry not about the technicalities </label>
                </div>
                <div align="center" class="item" style="background:linear-gradient(45deg,rgba(12,12,12,0.47),rgba(13,13,13,0.77)),url(../images/2.jpg) center center;height:100vh;padding-top:15%">
                    <h1 align="center" class="pt-5 px-1 text-white" style="font-size:55px;">    QRCode Generation </h1>
                    <label class="text-white" style="font-size:27px;"> Get it done with ease and worry not about the technicalities </label>
                </div>
            </div>
        </div>
        
        <div class="container my-5">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-5">
                    <div class="card bg-light p-5 px-3" style="box-shadow:2px 2px 2px 2px silver;">
                    <h4 align="center"> Generated QRcode </h4><br>
                        <img src="data:image/png;base64,{{$imgg}}" class="img-fluid rounded my-2">
                       
                    </div>
                </div>
            </div>
        </div>
        
    <div class="container-fluid py-5 bg-light">

<div class="row mt-4 col-mb-50">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="row">
    <div class="col-lg-4">
        <i class="fas fa-home inline-block text-danger" style="margin-bottom: 15px;font-size:55px;"></i>
        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
            <span class="before-heading">Scalable on Devices.</span>
            <h4>Responsive &amp; Retina</h4>
        </div>
        <p>Employment respond committed meaningful fight against oppression social challenges rural legal aid governance. Meaningful work, implementation, process cooperation, campaign inspire.</p>
    </div>

    <div class="col-lg-4">
        <i class="fas fa-car text-primary" style="margin-bottom: 15px;font-size:55px;"></i>
        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
            <span class="before-heading">Smartly Coded &amp; Maintained.</span>
            <h4>Powerful Performance</h4>
        </div>
        <p>Medecins du Monde Jane Addams reduce child mortality challenges Ford Foundation. Diversification shifting landscape advocate pathway to a better life rights international. Assessment.</p>
    </div>

    <div class="col-lg-4">
        <i class="fas fa-cog text-success" style="margin-bottom: 15px;font-size:55px;"></i>
        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
            <span class="before-heading">Flexible &amp; Customizable.</span>
            <h4>Truly Multi-Purpose</h4>
        </div>
        <p>Democracy inspire breakthroughs, Rosa Parks; inspiration raise awareness natural resources. Governance impact; transformative donation philanthropy, respect reproductive.</p>
    </div>
</div>
</div>
</div>

</div>
</div>
        <div class="container-fluid bg-dark text-white">
            <div class="row">
                <div align="center" class="col-md-12 py-5">
                    copyright &copy @php echo date('Y'); @endphp <br>
                    Powered by <b> ULLWEB </b>

                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
        $('.banner').owlCarousel({
				loop:true,
				lazyLoad: true,
				margin: 5,
				autoplay: true,
				animateIn: 'flipIn',
				animateOut: 'zoom',
				responsive: {
					0: {
						items: 1,
					},
					450: {
						items: 1,
					},
					650: {
						items: 1,
					},
				},
			});
        </script>
            @if(session('success'))
            <script>
                toastr.success('{{session('success')}}');
            </script>
            @endif
            @if(session('alert'))
            <script>
                toastr.warning('{{session('alert')}}');
            </script>
            @endif
        <script>
            
            $('.generate').hide();
            $('.contact').hide();
            $('.phone').hide();
            $('.sms').hide();
            $('.url').hide();
            $('.text').hide();

                function check(str) {
                    
                if(str == 'URL') {
                    $('.url').show();
                    $('.contact').hide();
                    $('.phone').hide();
                    $('.sms').hide();
                    $('.text').hide();
                    $('.generate').show();
                 }
                 else if(str == 'Phone') {
                    $('.phone').show();
                    $('.contact').hide();
                    $('.sms').hide();
                    $('.url').hide();
                    $('.text').hide();
                    $('.generate').show();
                 }
                 else if(str == 'Text') {
                    $('.text').show();
                    $('.contact').hide();
                    $('.phone').hide();
                    $('.sms').hide();
                    $('.url').hide();
                    $('.generate').show();
                 }
                 else if(str == 'SMS') {
                    $('.sms').show();
                    $('.contact').hide();
                    $('.phone').hide();
                    $('.url').hide();
                    $('.text').hide();
                    $('.generate').show();
                 }else if(str == 'Contact') {
                    $('.contact').show();
                    $('.phone').hide();
                    $('.sms').hide();
                    $('.url').hide();
                    $('.text').hide();
                    $('.generate').show();
                 }
                 else {
                    
                    $('.generate').hide();
                 }
               
            }
            
    
        </script>
    </body>
</html>