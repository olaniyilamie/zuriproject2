<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('icons/css/all.min.css')}}">

        <title>ZURI STAGE 2 PROJECT_Olamiee</title>
        <style type="text/css">
            body{
                background-color: black;
                color:white;
                font-family: "sans serif";
            }
            .navfont{
              font-size: 12px;
              font-weight: bold;
              color:darkgoldenrod;  
            }
           
            .textreduce{
                font-size: 14px;
                margin-inline: 5px;
                margin-right: 200px;
            }
            @media all and (min-width:320px) and (max-width:425px){
				.textreduce{
                margin-right: 0px;
                }
                .webdiv{
                    padding-top:0px;
                }
                .webtext{
                    margin-bottom: 0px;
                }
                .cvcol{
                    text-align: center;
                }
            }
        </style>
    </head>
    <body>
       <div class="container-fluid">
        <div class="row" id="home" >
            <div class="col-12">
                <div class="row fixed-top" >
                    <div class="col-3 navfont">
                        <nav class="navbar navbar-expand-lg navbar-dark  py-0 my-0 ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link text-warning navfont" href="#home">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-warning navfont" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-warning navfont" href="#skill">Skills</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-warning navfont" href="#portfolio">Portfolio</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-warning navfont" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Contact me
                                        </a>
                                        <div class="dropdown-menu py-0" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item text-warning navfont py-0" href="tel:0703-620-4411" >Call</a>
                                            <a class="dropdown-item text-warning navfont py-1"  href="" data-toggle="modal" data-target="#contactform">Message</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-7 text-right">
                    <a href="<?php echo url('https://github.com/olaniyilamie')?>" target="_blank"><i class="fab fa-github text-warning"></i></a>
                    <a href="<?php echo url('https://linkedin.com/in/olaniyilamie');?>" target="_blank"><i class="fab fa-linkedin text-warning"></i></a>
                    <a href="<?php echo url('https://twitter.com/_olamie');?>" target="_blank"><i class="fab fa-twitter-square text-warning"></i></a>
                    <a href="mailto:olaniyilamie@gmail.com" target="_blank"><i class="fas fa-envelope text-warning"></i></a>
                    <a href="<?php echo url('https://internship.zuri.team/')?>" target="_blank"><img src="<?php echo asset('zuri.jpg');?>"  alt="Zuri logo" class="img-fluid btn btn-sm btn-outline-dark"></a>
                    </div>
                    <div class="col-2 text-right">
                        <img src="<?php echo asset('logo.png');?>" class="img-fluid"  alt="software developer logo">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row mt-5"  id="about">
                    <div class="col-md-3 mt-1 offset-md-2 text-center">
                        <img src="<?php echo asset('meee.png');?>" class="img-fluid img-thumbnail rounded mt-md-1 "  alt="software developer image"> 
                        <p class="font-weight-bolder text-info webtext">OLANIYI OLAMIDE</p>
                    </div>
                    <div class="col-md-7 mt-md-5">
                        <p class="font-weight-bold my-0 text-center text-md-left">WEB DESIGNER</p>
                        <p class="textreduce text-justify">I am a php web developer that dedicates to the quest of developing unique websites that leverage on best pratice technology to deliver top user experience
                            that convert visitors into customers and help your business grow. I also like working in a team.</p>
                        <div class="row">
                            <div class="col-12 cvcol">
                                <p class="btn badge badge-sm badge-dark d-inline" data-toggle="modal" data-target="#contactform">Get in Touch</p>
                                <a class="badge badge-pill badge-outline-secondary d-inline text-warning navfont" download="olamidecv" href="<?php echo asset('my_cv.pdf');?>">Download cv <i class="fas fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 px-0 mt-3">
                        <h4 class="alert alert-info py-0 text-center font-weight-bolder" id="skill">SKILLS</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="row ">
                                    <div class="col-9 mx-0">
                                        <h5 class="">HTML/CSS</h5>
                                    </div>
                                    <div class="col-2">
                                        <h5 class="text-right">90%</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-9 ml-2 ml-md-0 bg-warning" style="height: 3px;">

                                    </div>
                                    <div class="col-2 bg-info bg-dark" style="height: 3px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row  mt-2 mt-md-0">
                                    <div class="col-9 mx-0">
                                        <h5 class="">JavaScript</h5>
                                    </div>
                                    <div class="col-2">
                                        <h5 class="text-right">70%</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-7 ml-2 ml-md-0 bg-warning" style="height: 3px;">

                                    </div>
                                    <div class="col-4 bg-info bg-dark" style="height: 3px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  mt-2 mt-md-0">
                            <div class="col-12">
                                <div class="row ">
                                    <div class="col-9 mx-0">
                                        <h5 class="">BootStrap</h5>
                                    </div>
                                    <div class="col-2">
                                        <h5 class="text-right">90%</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-9 ml-2 ml-md-0 bg-warning" style="height: 3px;">

                                    </div>
                                    <div class="col-2 bg-info bg-dark" style="height: 3px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  mt-2 mt-md-0">
                            <div class="col-12">
                                <div class="row ">
                                    <div class="col-9 mx-0">
                                        <h5 class="">Ajax</h5>
                                    </div>
                                    <div class="col-2">
                                        <h5 class="text-right">90%</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-9 ml-2 ml-md-0 bg-warning" style="height: 3px;">

                                    </div>
                                    <div class="col-2 bg-info bg-dark" style="height: 3px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mt-2 mt-md-0 ">
                            <div class="col-12">
                                <div class="row ">
                                    <div class="col-9 mx-0">
                                        <h5 class="">Jquery</h5>
                                    </div>
                                    <div class="col-2">
                                        <h5 class="text-right">70%</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-7 ml-2 ml-md-0 bg-warning" style="height:3px;">

                                    </div>
                                    <div class="col-4 bg-info bg-dark" style="height: 3px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 mt-md-0 ">
                            <div class="col-12">
                                <div class="row ">
                                    <div class="col-9 mx-0">
                                        <h5 class="">PHP</h5>
                                    </div>
                                    <div class="col-2">
                                        <h5 class="text-right">90%</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-9 ml-2 ml-md-0 bg-warning" style="height:3px;">

                                    </div>
                                    <div class="col-2 bg-info bg-dark" style="height: 3px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 mt-md-0 ">
                            <div class="col-12">
                                <div class="row ">
                                    <div class="col-9 mx-0">
                                        <h5 class="">MySql</h5>
                                    </div>
                                    <div class="col-2">
                                        <h5 class="text-right">90%</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-9 ml-2 ml-md-0 bg-warning" style="height:3px;">

                                    </div>
                                    <div class="col-2 bg-info bg-dark" style="height: 3px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 px-0 mt-3">
                        <h4 class="alert alert-info py-0 text-center font-weight-bolder" id="portfolio">PORTFOLIO</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 px-2 mt-3">
                        <a href="<?php echo asset('portfolio1.jpg');?>" target="_blank"><img src="<?php echo asset('portfolio1.jpg');?>" class="img-fluid rounded-circle"  alt="downloadedonline"></a>
                    </div>
                    <div class="col-md-3 px-2 mt-3">
                        <a href="<?php echo asset('portfolio2.jfif');?>" target="_blank"><img src="<?php echo asset('portfolio2.jfif');?>" class="img-fluid rounded-circle mt-md-5"  alt="downloadedonline"></a>    
                    </div>
                    <div class="col-md-3 px-3 mt-3">
                        <a href="<?php echo asset('portfolio3.jfif');?>" target="_blank"><img src="<?php echo asset('portfolio3.jfif');?>" class="img-fluid rounded-circle"  alt="downloadedonline"></a>
                    </div>
                    <div class="col-md-3 px-2 mt-3">
                        <a href="<?php echo asset('portfolio4.jfif');?>" target="_blank"><img src="<?php echo asset('portfolio4.jfif');?>" class="img-fluid rounded-circle mt-md-3"  alt="downloadedonline"></a>
                    </div>
                </div>
            </div>
        </div>
       </div>
       <div class="row">
            <div class="col-12 text-center">
                <p class="font-weight-bolder pt-3 navfont">SECOND STAGE ZURI PROJECT : DESIGN BY OLAMIEE</p>
            </div>
       </div>
       <div class="modal" tabindex="-1" role="dialog" id="contactform">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content bg-info">
                <div class="modal-header py-1">
                    <h5 class="modal-title text-dark"> MESSAGE US <i class="fas fa-comments"></i></h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-1 ">
                    <form action="<?php echo route('messagesent')?>" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                 <div class="row mb-1">
									<div class="col-12">
										<label for="nam">Name <span class="text-danger">*</span></label>
									</div>
									<div class="col-12">
										<input type="text" name="name" id="nam" class="form-control form-control-sm" required>
									</div>
								</div>
								<div class="row mb-1">
									<div class="col-12">
										<label for="mail">Email <span class="text-danger">*</span></label>
									</div>
									<div class="col-12">
										<input type="email" name="email" id="mail" class="form-control form-control-sm" required>
									</div>
								</div>
								<div class="row mb-1">
									<div class="col-12">
				    					<label for="number">Phone-Number <span class="text-danger">*</span></label>
									</div>
					    			<div class="col-12">
						        		<input type="text" name="number"  id="number" class="form-control form-control-sm" required>
									</div>
								</div>
								<div class="row mb-1">
									<div class="col-12">
										<label for="sub">Subject <span class="text-danger">*</span></label>
									</div>
									<div class="col-12">
										<input type="text" name="subject"  id="sub" class="form-control form-control-sm" required>
									</div>
								</div>	
								<div class="row mb-1">
									<div class="col-12">
										<label for="det">Details <span class="text-danger">*</span></label>
									</div>
									<div class="col-12">
										<textarea row=4 name="detail"  id="det" class="form-control form-control-sm" required></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<button class="btn-block btn-dark btn-sm sendbtn">SEND</button>
									</div>
								</div>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
         </div>
         
       <script src="{{ asset('jquery-3.5.1.min.js') }}" ></script>
       <script src="{{ asset('popper.min.js') }}" ></script>
       <script src="{{ asset('bootstrap.min.js') }}" ></script>
       
       <script type="text/javascript">
           $(document).ready(function(){
                $('.sendbtn').click(function(){
                
				alert("Your message has been received successfully");
				})
           })
		</script>
    </body>
</html>
