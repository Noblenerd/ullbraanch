<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>ULLWEB Link Tree Generator </title>
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
                    <h3 class="text-white animated fadeInLeft"> Link Tree </h3>
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
            <div class="col-md-12 my-2">
            <h4 align="center"> Create your Tree </h4><br>
            </div>
            
                <div class="col-md-6">
                    <div class="card p-2 px-1" style="box-shadow:2px 2px 2px 2px silver;background:linear-gradient(rgba(12,12,12,0.5),rgba(13,13,13,0.7)),url(../images/sell.gif) no-repeat center center;">
                    
                    <form method="post" enctype="multipart/form-data" action="{{url('get/tree')}}">
                        @csrf
                        <!-- Pre-Section  -->
                        <div class="section_0">
                            <p class="text-white" align="right"> STEP 1/4  </p>
                            <div class="d-flex justify-content-between my-3">    
                                <h5 class="text-warning"> Personal Info  </h5>
                                
                            </div>
                            <div class="form-group">
                            <label class="text-white"> Profile Picture </label><br>
                                <div class="input-group">
                                    
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="text-white"> Description </label><br>
                                <div class="input-group">
                                
                                    <textarea rows="5" name="description" class="form-control" placeholder="Full Description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="text-white"> Unique Identifier </label><br>
                            <div class="input-group">
                                <input type="text" name="identifier" class="form-control" onchange="checktree(this.value)" onkeyup="checktree(this.value)" placeholder="Enter your Unique Identifier">
                            </div>
                            <span class="identity"></span>
                        </div>

                            <p align="right"><button type="button" class="btn btn-primary content-justify-end mt-3" onclick="change('0', 'next')"> NEXT </button></p>
                        </div>
                        
                        <!-- Section 1 -->
                        <div class="section_1">
                        <p class="text-white" align="right"> STEP 2/4  </p>
                            <div class="d-flex justify-content-between my-4">    
                                <h5 class="text-warning"> WEBSITE  </h5>
                                
                            </div>
                            <div class="form-group">
                                <label class="text-white"> Website URL </label><br>
                                <div class="input-group">
                                
                                    <input type="text" name="website" class="form-control" placeholder="Enter your Website URL">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <button type="button" class="btn btn-secondary" onclick="change('1', 'prev')"> PREV </button>
                                <button type="button" class="btn btn-primary" onclick="change('1', 'next')"> NEXT </button>
                            </div>
                        </div>

                        <!-- Section 2 -->
                        <div class="section_2">
                        <p class="text-white" align="right"> STEP 3/4  </p>
                            <div class="d-flex justify-content-between my-4">    
                                <h5 class="text-warning"> SOCIAL MEDIA/RESOURCES  </h5>
                                
                            </div>
                            <div class="form-group">
                                <label class="text-white"> Resource Name </label><br>
                                <div class="input-group">
                                    <select name="resname_1" class="form-control" size="1">
                                        <option> Select Resource </option>
                                        <option> Instagram </option>
                                        <option> Discord </option>
                                        <option> Twittter </option>
                                        <option> Linkedin </option>
                                        <option> Magic Card </option>
                                    </select>
                                    <input type="text" name="reslink_1" class="form-control" placeholder="Enter your Resource Link">
                                </div>
                            </div>
                            
                            
                            <div class="res_body"></div>
                            <p align="right"><button type="button" class="btn btn-warning rounded addres content-justify-end mt-3 mb-2"> Add Resource </button></p><br>
                            <input type="hidden" name="resnum" class="resnum" value="1">

                            <a data-toggle="collapse" href="#ress" class="list-group-item bg-warning text-white d-flex justify-content-between my-3"><span>Doc about Resources</span><span><i class="fas fa-chevron-right"></i></span> </a>
                            <div class="collapse px-3 text-white mb-5" id="ress">
                                    Resources mean all the form of .....
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" onclick="change('2', 'prev')"> PREV </button>
                                <button type="button" class="btn btn-primary" onclick="change('2', 'next')"> NEXT </button>
                            </div>
                        </div>

                        <!-- Section 3 -->
                        <div class="section_3">
                            <p class="text-white" align="right"> STEP 4/4  </p>
                            <div class="d-flex justify-content-between my-4">    
                                <h5 class="text-warning"> COMMUNITY/RESOURCES  </h5>
                                
                            </div>
                            <div class="form-group">
                                <label class="text-white"> Community Name </label><br>
                                <div class="input-group">
                                <input type="text" name="comname_1" class="form-control" placeholder="Enter your Title">
                                
                                    <input type="text" name="comlink_1" class="form-control" placeholder="Enter your Link">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="text-white"> Community Description </label><br>
                                <div class="input-group">
                                <textarea rows="4" name="comdes_1" class="form-control" placeholder="Enter your Description"></textarea>
                                
                                </div>
                            </div>
                            <div class="com_body"></div>
                            <p align="right"><button type="button" class="btn btn-warning rounded addcom content-justify-end mt-3 mb-2"> Add Community </button></p><br>
                            <input type="hidden" name="comnum" class="comnum" value="1">

                            <a data-toggle="collapse" href="#coms" class="list-group-item bg-warning text-white d-flex justify-content-between my-3"><span>Doc about Communities</span><span><i class="fas fa-chevron-right"></i></span> </a>
                            <div class="collapse px-3 text-white mb-5" id="coms">
                                    Community mean all the form of .....
                            </div>
                            
                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" onclick="change('3', 'prev')"> PREV </button>
                                
                            </div>
                            <button class="btn btn-success rounded form-control generate mt-2" type="submit" name=""> Generate Tree Link </button>
                        </div>
                        
                        
                    </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="../images/sell.gif" class="img-fluid">
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
            
            $('.generate').show();
            $('.contact').hide();
            $('.phone').hide();
            $('.sms').hide();
            $('.url').hide();
            $('.text').hide();
            $('.section_1').hide();
            $('.section_2').hide();
            $('.section_3').hide();

            function checktree(str) {
        var iden = str;
        
       
        da = {
          'identifier' : iden,
          _token: '{!! csrf_token() !!}',
        };
        
        $.post(
            "{{url('check-identifier-tree')}}",
            da,
            function(data) {
                console.log(data);
                if(data[0]['status'] == 'Success') {
                    $('.identity').html('<i class="text-success"> <i>mxmall.com.ng/ullbranch/ulllink/'+iden+' </i> - Approved</i>');
                    $('.generate').show();
                 }
                 else {
                    $('.identity').html('<i class="text-danger">Try another name</i>');
                    $('.generate').hide();
                 }
               
            }
            );
    }


            function change(str, stp) {
                if(str == 0) {
                    if(stp == 'next') {
                        $('.section_1').show();
                        $('.section_0').hide();
                        $('.section_2').hide();
                        $('.section_3').hide();
                    }
                }
                else if(str == 1) {
                    if(stp == 'next') {
                        $('.section_2').show();
                        $('.section_0').hide();
                        $('.section_1').hide();
                        $('.section_3').hide();
                    }
                    else {
                        $('.section_0').show();
                        $('.section_1').hide();
                        $('.section_2').hide();
                        $('.section_3').hide();
                    }
                }
                else if(str == 2) {
                    if(stp == 'next') {
                        $('.section_3').show();
                        $('.section_0').hide();
                        $('.section_1').hide();
                        $('.section_2').hide();
                    }
                    else {
                        $('.section_1').show();
                        $('.section_0').hide();
                        $('.section_2').hide();
                        $('.section_3').hide();
                    }
                }
                else {
                    if(stp == 'prev') {
                        $('.section_2').show();
                        $('.section_0').hide();
                        $('.section_1').hide();
                        $('.section_3').hide();
                    }
                }
            }
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
            
            $('.addres').click(function() {
                var num = $('.resnum').val();
                var add = 1;
                var nnum = parseInt(num)+parseInt(add);
                var pres = $('.res_body').html();
                $('.res_body').append('<hr><div class="form-group"><div class="input-group"><select name="resname_'+nnum+'" class="form-control" size="1"><option> Select Resource </option><option> Instagram </option><option> Discord </option><option> Twittter </option><option> Linkedin </option><option> Magic Card </option></select><input type="text" name="reslink_'+nnum+'" class="form-control" placeholder="Enter your Link"></div></div>');
                $('.resnum').val(nnum);
            });

            $('.addcom').click(function() {
                var num = $('.comnum').val();
                var add = 1;
                var nnum = parseInt(num)+parseInt(add);
                var pres = $('.com_body').html();
                $('.com_body').append('<hr><div class="form-group"><div class="input-group"><input type="text" name="comname_'+nnum+'" class="form-control" placeholder="Enter your Title"><input type="text" name="comlink_'+nnum+'" class="form-control" placeholder="Enter your Link"></div></div><div class="form-group"><div class="input-group"><textarea rows="4" name="comdes_'+nnum+'" class="form-control" placeholder="Enter your Description"></textarea></div></div>');
                $('.comnum').val(nnum);
            });
    
        </script>
    </body>
</html>

