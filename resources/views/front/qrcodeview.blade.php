<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>ULLWEB Qrcode Generator - View all Generated Codes </title>
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
                    <h3 class="text-white animated fadeInLeft"> QRcodes </h3>
                </a>
            </div> 
        </nav>
        <div class="container-fluid mx-0 px-0">
            <div class="owl-carousel banner mx-0 px-0">
                <div align="center" class="item" style="background:linear-gradient(45deg,rgba(12,12,12,0.5),rgba(13,13,13,0.7)),url(../images/1.jpg) center center;height:100vh;padding-top:15%;">
                    <h1 align="center" class="pt-5 px-1 text-white" style="font-size:55px;">    Generate QRcodes </h1>
                    <label class="text-white" style="font-size:27px;"> Get it done with ease and worry not about the technicalities </label>
                </div>
                <div align="center" class="item" style="background:linear-gradient(45deg,rgba(12,12,12,0.47),rgba(13,13,13,0.77)),url(../images/2.jpg) center center;height:100vh;padding-top:15%">
                    <h1 align="center" class="pt-5 px-1 text-white" style="font-size:55px;">  Generate QRcodes </h1>
                    <label class="text-white" style="font-size:27px;"> Get it done with ease and worry not about the technicalities </label>
                </div>
            </div>
        </div>
        
        <div class="container my-5">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h3 align="center" class="mb-3"> All Generated Codes </h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th> S/N </th>
                                    <th> Info </th>
                                    <th> Qrcode </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($list)>0)
                                    @foreach($list as $k=>$val)
                                        @php $imgg = base64_encode($val->qrcode);
                                        $dt = explode(';', $val->info);
                                        $dtc = count($dt);
                                        $inf = '';
                                        /*foreach($i=0;$i<$dtc;$i++) {
                                            $inf .= $dt[$i] .'<br>';
                                        }*/
                                         @endphp
                                        <tr>
                                            <td> {{++$k}} </td>
                                            <td> {{$inf}} </td>
                                            <td> <img src="data:image/png;base64,{{$imgg}}"> </td>
                                            <td> <a href="#edit_{{$val->id}}" data-toggle="modal" class="btn btn-primary rounded mr-2">Edit </a>
                                            <a href="#delete_{{$val->id}}" data-toggle="modal" class="btn btn-danger rounded mr-2">Delete </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="4"> No Result Found </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
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