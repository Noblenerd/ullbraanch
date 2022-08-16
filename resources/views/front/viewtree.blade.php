<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>ULLWEB Link Tree - {{$tree->identifier}} </title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <style>
            @media screen AND (min-width:550px) {
                body {
                    width:80%;
                    margin-left:10%;
                }
            }
        </style>
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
    <body style="background:linear-gradient(45deg,rgba(12,12,120,0.5),rgba(13,13,130,0.7)),url(../images/1.jpg) center center;">
    <nav class="navbar navbar-expand-sm d-flex justify-content-between text-white navbar-light bg-transparent">
            <div class="navbar-brand ml-5">
                <a href="index.php" style="text-decoration:none;">	
                    <h3 class="text-white animated fadeInLeft"> {{$tree->identifier}} </h3>
                </a>
            </div> 
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div align="center" class="col-md-12">
                    @if($tree->image)
                        <img src="../{{$tree->image}}" class="rounded-circle" height="100px" width="100px">
                    @else
                        <img src="../images/1.jpg" class="rounded-circle" height="100px" width="100px">
                    @endif

                    <p align="justify" class="text-white">
                        {{$tree->description}}
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid mx-0 px-3">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-4 text-warning"> Our Website </h2>
                </div>    
                <div align="center" class="col-lg-3" style="box-shadow:2px 2px 2px 2px gold;">
                    <a href="{{$tree->website}}" style="text-decoration:none;">
                        <i class="fas fa-home inline-block text-danger" style="margin-bottom: 15px;font-size:75px;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            
                            <h4 class="text-warning">Connect with us via our official website</h4>
                            <span class="before-heading text-white">Scalable on Devices.</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row my-4">
            <div class="col-md-12">
                    <h2 class="mt-4 text-warning"> Resources <hr class="bg-white ml-0" style="height:9px;width:70px;margin-top:-0px;"></h2>
                </div>
                <div class="owl-carousel tree mx-0 px-0">
                @foreach($resource as $val)
            
                <div align="center" class="item" style="box-shadow:2px 2px 2px 2px gold;">
                    <a href="{{$val->link}}" style="text-decoration:none;">
                        <i class="fas fa-users inline-block text-danger" style="margin-bottom: 15px;font-size:55px;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            
                            <h4 class="text-warning">{{$val->name}}</h4>
                            <span class="before-heading text-white">Like and follow us</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            </div>
            <div class="row my-4">
            <div class="col-md-12">
                    <h2 class="mt-4 text-warning"> Communities <hr class="bg-white ml-0" style="height:9px;width:70px;margin-top:-0px;"></h2>
                </div>
                <div class="owl-carousel tree mx-0 px-0">
                @foreach($community as $vad)
            
                <div align="center" class="item" style="box-shadow:2px 2px 2px 2px gold;">
                    <a href="{{$vad->link}}" style="text-decoration:none;">
                        <i class="fas fa-cog inline-block text-danger" style="margin-bottom: 15px;font-size:55px;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            
                            <h4 class="text-warning">{{$vad->name}}</h4>
                            <span class="before-heading text-white">{{$vad->desc}}</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
</div>

        <div class="container-fluid text-white">
            <div class="row">
                <div align="center" class="col-md-12 py-5">
                <hr class="bg-warning" style="height:10px;width:100%;">
                    copyright &copy @php echo date('Y'); @endphp <br>
                    Powered by <b> ULLWEB </b>

                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
        $('.tree').owlCarousel({
				loop:false,
				lazyLoad: true,
				margin: 5,
				autoplay: false,
				animateIn: 'flipIn',
				animateOut: 'zoom',
				responsive: {
					0: {
						items: 2.2,
					},
					450: {
						items: 2.2,
					},
					650: {
						items: 3,
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
                function check(str) {
        var iden = str;
        
       
        da = {
          'identifier' : iden,
          _token: '{!! csrf_token() !!}',
        };
        
        $.post(
            "{{url('check-identifier')}}",
            da,
            function(data) {
                //console.log(data);
                if(data == 'Success') {
                    $('.identity').html('<i class="text-success">Approved</i>');
                    $('.generate').show();
                 }
                 else {
                    $('.identity').html('<i class="text-danger">Try another name</i>');
                    $('.generate').hide();
                 }
               
            }
            );
    }
        </script>
    </body>
</html>