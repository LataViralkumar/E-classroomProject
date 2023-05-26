<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="favicon.ico" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Homepage</title>
  <link rel="stylesheet" href="../CSS/sign_up.scss">
  <link rel="stylesheet" href="../BOOTSTRAP/css/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/home.css">
  <link rel="stylesheet" href="../CSS/media.css">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/slider.css">
  <script src="../JS/script.js"></script>
  <script src="../BOOTSTRAP/jquery-3.4.1.js"></script>
  <script src="../BOOTSTRAP/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/e2c3d82e56.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="js/user_sign_up.js"></script>

  <style>
   .form_text {
   font-size: 1.1rem;
   background: linear-gradient(90deg, #FAD961 0%, #F76B1C 100%);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
}

  </style>
</head>

<body  style="background-color:#dcdcdc;"  ng-app="">
  <section class="back_1">
    <nav class="navbar navbar-expand-sm navbar-light">
     
    <a href="#" class="navbar-brand">
     <b class="font_color">E-Classroom</b>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu" >
     
       <span class="navbar-toggler-icon nav_color_font"></span>
      
        
    </button>  
    <div class="collapse navbar-collapse  " id="menu" >
    
    <ul class="navbar-nav ml-auto ">
        <li class="nav-item"><a href="#" class="nav-link nav_color_font hvr-grow font-weight-bold font_color">Home</a> </li>
        <li class="nav-item"><a href="#" class="nav-link nav_color_font hvr-grow font-weight-bold font_color" data-toggle="modal" data-target="#modelId"  >Sign In</a> </li>
        <li class="nav-item"><a href="#" class="nav-link nav_color_font hvr-grow font-weight-bold font_color" data-toggle="modal" data-target="#modelId_signup"  >Sign Up</a> </li>
        <li class="nav-item"><a href="#about" class="nav-link nav_color_font hvr-grow  font-weight-bold font_color">About Us</a> </li>
        <li class="nav-item"><a href="#" class="nav-link nav_color_font hvr-grow font-weight-bold font_color">Contact Us</a> </li>
        <li class="nav-item"><a href="#feedback" class="nav-link nav_color_font hvr-grow font-weight-bold font_color">Feedback</a> </li>
       </ul>
        </div>
        </nav>



<!-- SIGN IN MODAL START-->
  <!-- <div class="modal" id="sign_in_model">
   <div class="modal-dialog">
     <div class="modal-content ">
      <div class="modal-header" >
        <h2  >sign in</h2>
        <button  type="button" class="close" data-dismiss="modal" >&times;</button>
      </div>
         <div class="modal-body ">
           <form action="user_login.php" method="POST" >
             <div class="from-group" >
               <label>Email_Id:</label>
               <input type="text" name="Email_Id" placeholder="Enter Email. . ."  class="form-control">
             </div>
             <div class="from-group">
                <label>Password</label>
                <input type="password" name="Password"  placeholder="Enter Password. . ." class="form-control">
              </div>

              <div class="modal-footer" >
              
                  <button  type="submit" class="btn btn-primary" >Login</button>
                  <button  type="button" class="btn btn-primary"  class="close" data-dismiss="modal">Close</button>

                </div>
           </form>
           
         </div>
     </div>
  

   </div>    
  </div>
   -->


   <!-- Modal login -->
<div class="modal fade bd-example-modal-xl " style="background-image: linear-gradient(to right, #f78ca0 0%, #f9748f 19%, #fd868c 60%, #fe9a8b 100%);" id="modelId" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
	 <div class="modal-content ">
		  <div class="modal-header">
				<h5 class="modal-title text-danger form_text" >Student Login:</h5>
				  <button type="button" class="close" data-dismiss="modal"  aria-label="Close" >
					 <span aria-hidden="true">&times;</span>
				  </button>
			 </div>
		<div class="modal-body" style="margin: 0px; padding: 0px;">
		  <div class="container-fluid">
						
						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-6 col-12 m-0 ">
                <h1></h1>
									<!-- <img src="logo.svg" class="figure-img img-fluid img-set" alt="" style="width: 25px; height: 25px;"> -->
				
									<div class="produt">
<div class="text-center p-0  ">
<h3 class="text-danger form_text m-0" style="font-size:2em ;">Login</h3>
<hr class="w-25 mx-auto">
</div>
</div>

											
  <form action="user_login.php" method="POST">

  <div class="form-group mx-5">
	 <label for="exampleInputEmail1"  class="form_text" >Email address: </label>
	 <input type="text" name="Email_Id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group mx-5">
	 <label for="exampleInputPassword1" class="form_text">Password:</label>
	 <input type="password" name="Password" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="form-group form-check mx-5">
	 <input type="checkbox" class="form-check-input" id="exampleCheck1">
	 <label class="form-check-label form_text " for="exampleCheck1">Remebar Me..!</label>
  </div>
  <button type="submit"  class="btn btn-primary mx-5" style="background-color: #FAD961;
  background-image: linear-gradient(90deg, #FAD961 0%, #F76B1C 100%); border: none;
  ">Submit</button>
  <h1></h1>
</form>
								  
									 </figcaption> 
								</figure>
							</div>

							<div class="col-sm-6 col-md-6 col-lg-6 col-12 m-0 p-0">
								 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
	 <div class="carousel-item active">
		   <img src="img/login2.svg" style="width: 100%; height:100v;" class="figure-img img-fluid" alt="">
	 </div> 
  </div>

</div>
</div>
</div>
</div>
</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #FAD961;
      background-image: linear-gradient(90deg, #FAD961 0%, #F76B1C 100%); border: none;
      ">Close</button>
		  <!-- <button type="button" class="btn btn-primary">Save</button> -->
		</div>
	 </div>
  </div>
</div>

<!--SIGN IN MODAL END-->

<!-- SIGN UP MODEL START -->

<div class="modal fade bd-example-modal-xl " style="background-image: linear-gradient(to right, #f78ca0 0%, #f9748f 19%, #fd868c 60%, #fe9a8b 100%);" id="modelId_signup" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
	 <div class="modal-content  " >
		  <div class="modal-header">
				<h5 class="modal-title text-danger form_text">Student Signup:</h5>
				  <button type="button" class="close" data-dismiss="modal"  aria-label="Close" >
					 <span aria-hidden="true">&times;</span>
				  </button>
			 </div>
		<div class="modal-body" style="margin: 0px; padding: 0px;">
		  <div class="container-fluid ">
						
						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-6 col-12 " >
                <h1></h1>
									<!-- <img src="logo.svg" class="figure-img img-fluid img-set" alt="" style="width: 25px; height: 25px;"> -->
				
									<div class="produt">
<div class="text-center  p-0  ">
<h1 class="text-danger form_text" style="font-size:1.5em ;">Register</h1>
<hr class="w-25">
</div>
</div>

							
  <form action="sign_up/sign_up.php" method="POST">
   
    <div class="row">
      
      <div class="col">
        <div class="form-group  ">
        <label for="" class="form_text">* Username:</label>
        <input name="User_Name" class="form-control " type="text" required>
        </div>

        <div class="form-group">
          <label for="" class="form_text">* Mobile Number:</label>
          <input type="tel" name="User_Mobile" class="form-control "  pattern="^\d{10}$" type="text" required>
          </div>

          <div class="form-group">
            <label for="" class="form_text">* Conform Password:</label>
            <input type="password" name="Conform_Password"  class="form-control" type="text" minlength="8"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!,@,#,$,&,$,.]).{8,}"   title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required >
            </div>

      </div>
      <div class="col">
        <div class="form-group">
        <label for="" class="form_text">* Email:</label>
       <input class="form-control" type="email" name="User_Email"  aria-describedby="emailHelp" required>
      </div>

      <div class="form-group">
        <label for="" class="form_text">* Password:</label>
       <input class="form-control" type="password" name="User_Password" minlength="8"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!,@,#,$,&,$,.]).{8,}"   title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
       
      </div>
      </div>
  
  
    </div>
    <label class="form_text" for="">* all fields are mandatory. . .</label></br>
    <button type="submit" class="btn btn-secondary " name="sign_up" value="sign_up" style="background-color: #FAD961;
    background-image: linear-gradient(90deg, #FAD961 0%, #F76B1C 100%); border: none;
    ">Submit</button>
    
     <h1></h1>
    
</form>

</div>
<div class="col-sm-6 col-md-6 col-lg-6 col-12 m-0 " style="margin: 0px; padding: 0px;">
   <img src="img/signup.svg" alt="" style="height: 100%; width: 100%;"  srcset="">
 
</div>
   

       

</div>
</div>
</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #FAD961;
      background-image: linear-gradient(90deg, #FAD961 0%, #F76B1C 100%); border: none;
      ">Close</button>
		  <!-- <button type="button" class="btn btn-primary">Save</button> -->
		</div>
	 </div>
  </div>
</div>

 <!-- <div class="modal " id="sign_up_model">
   <div class="modal-dialog">
     <div class="modal-content ">
      <div class="modal-header" >
        <h2>sign Up</h2>
        <button  type="button" class="close" data-dismiss="modal" >&times;</button>
      </div>
         <div class="modal-body signup__overlay " >
           <form  name="myform" action="sign_up/sign_up.php" method="POST">
           <div class="from-group">
               <label>Name</label>
               <input type="text" name="User_Name"  placeholder="Enter Name. . ."   class="form-control" required>
             </div>
             <div class="from-group">
               <label><i ></i>Email_Id</i></label>
               <input type="email" name="User_Email"  placeholder="Enter Email. . ." class="form-control " required>
             </div>
             <div class="from-group">
                <label><i > </i>Mobile No</label>
                <input type="tel" name="User_Mobile" pattern="^\d{10}$"  placeholder="Enter Mobile. . ." class="form-control" required>
              </div>
              
              <div class="from-group">
                <label><i >Password </i></label>
                <input type="password" name="User_Password"  minlength="8"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!,@,#,$,&,$,.]).{8,}"   title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password(8 characters minimum). . ." class="form-control" required>
              </div>

              <div class="from-group">
                <label><i >Conform Password </i></label>
                <input type="password" name="Conform_Password"  minlength="8"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!,@,#,$,&,$,.]).{8,}"   title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Conform Password(8 characters minimum). . ." class="form-control" required>
              </div>


              <div class="modal-footer" >
              
                  <button  type="submit" class="btn btn-primary"  name="sign_up" value="sign_up"   >Sign Up</button>
                  <button  type="button" class="btn btn-primary"  class="close" data-dismiss="modal">Close</button>

                </div>

           </form>  
           
         </div>
     </div>
  

   </div>    
  </div> -->

  <!--<div class="back_1 img_align_main div_1"> -->

    <section>
      <div class="container-fluid back_12">
        <div class="row">
          <div class="col-md-12">
       <div class="d-flex display_flex ">
          <div class="items align_center">
          <h3 class="h3 font_all font_color" style="text-align: center;" > Welcome to E-Classroom</h3>
          <p class="font_color" ><b>E-CLASSROOM CONTAIN MANY TYPES OF E-LEARNING FACILITIES
             WITH PROBLEM SOLVING,ONLINE COURSE,GROUP DISCUSSION SYSTEM, SUBJECT EXPERTS.
          </b>
            </p>
            
          
          </div>
          <div class="items">
          <img class="img-fluid img_1_align" src="img/home.svg ">
        </div>
        </div>
        </div>
        </div>
        
        </section>
        </section>
      
        
              <!-- partial:index.partial.html -->
              <section>
              <h1 class="h1 font_color" style="text-align: center">Select your Exam</h1> 
<div class="cards-list">
 
  <div class="card 1">
    <div class="card_image"><img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" /> </div>
    <div class="card_title title-black">
      <p>GATE</p>
    </div>
  </div>
  
    <div class="card 2">
    <div class="card_image">
      <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
      </div>
    <div class="card_title title-black">
      <p>SSC</p>
    </div>
  </div>
  
  <div class="card 3">
    <div class="card_image">
      <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
    </div>
    <div class="card_title title-black">
      <p>BANKING</p>
    </div>
  </div>
    
    <div class="card 4">
    <div class="card_image">
      <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
      </div>
    <div class="card_title title-black">
      <p>STATE EXAM</p>
    </div>
    </div>
  
  </div>
  <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    </section>  

    <!--card end-->
  

           <section>
            <div class="d-flex display_flex ">
                <div class="items align_center">
                <h3 class="h3 font_all font_color" style="text-align: center;"> Features of E-Classroom</h3>
                
                <div class="itmes align-self-center why_align ">
                    <ul>
                    <li class="h6 font_color" style="font-size:1.3vw" >Real-time Exam Prep Community</li>
                    <li  class="h6 font_color " style="font-size:1.3vw" >Latest Exam Notifications</li>
                    <li  class="h6 font_color " style="font-size:1.3vw" >GROUP DISSCUSION</li>
                    <li  class="h6 font_color " style="font-size:1.3vw" >Problem Solveing</li>
                    </ul>
                </div>

                </div >
                <div class="items">
                <img class="img-fluid" src="img/online.svg ">
              </div>
            </div>     
            </section>
                   <!-- slider start-->
                   <section>
                   <div class="container-fluid">
                       
                     <h1 class="h1 font_color" style="text-align:center;">Notifcation</h1>
                    <div class="wrapper display_flex">
                      <div class="_background">
                            
                       <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1537132206/news-slider/background.jpg" alt=""> -->
                      </div>
          
                      <!--<div class="item-bg"></div>-->
                    
                      <div class="news-slider"> 
                      
                        <div class="news-slider__wrp swiper-wrapper">
                          <div class="news-slider__item swiper-slide">
                            <a href="#" class="news__item">
                              <div class="news-date">
                                <span class="news-date__title">24</span>
                                <span class="news-date__txt">May</span>
                              </div>
                              <div class="news__title">
                                  <h2 style="color:black;">IBPS EXAM 2019</h2> 
                              </div>
                    
                              <p class="news__txt">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                              </p>
                    
                              <div class="news__img">
                                <img src="img/not_i2.jpg" alt="notification">
                              </div>
                            </a>
                          </div>
                    
                          <div class="news-slider__item swiper-slide">
                            <a href="#" class="news__item">
                              <div class="news-date">
                                <span class="news-date__title">25</span>
                                <span class="news-date__txt">May</span>
                              </div>
                              <div class="news__title">
                                  <h2 style="color:black;">SSC CGL EXAM</h2> 
                              </div>
                    
                              <p class="news__txt">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                              </p>
                    
                              <div class="news__img">
                                <img src="img/not_i1.jpg" alt="notification">
                              </div>
                            </a>
                          </div>
                    
                         
                    
                          
                    
                          <div class="news-slider__item swiper-slide">
                            <a href="#" class="news__item">
                              <div class="news-date">
                                <span class="news-date__title">28</span>
                                <span class="news-date__txt">May</span>
                              </div>
                              <div class="news__title">
                                  <h2 style="color:black;">GATE EXAM 2019</h2> 
                              </div>
                    
                              <p class="news__txt">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                              </p>
                    
                              <div class="news__img">
                                <img src="img/not_i3.jpg" alt="notification">
                              </div>
                            </a>
                          </div>
                    
                        
                        </div>
                    
                        <div class="news-slider__ctr">
                    
                          <div class="news-slider__arrows">
                            <button class="news-slider__arrow news-slider-prev">
                              <span class="icon-font">
                                <svg class="icon icon-arrow-left"><use xlink:href="#icon-arrow-left"></use></svg>
                              </span>
                            </button>
                            <button class="news-slider__arrow news-slider-next">
                              <span class="icon-font">
                                <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
                              </span>
                            </button>
                          </div>
                    
                          <div class="news-slider__pagination"></div>
                    
                        </div>
                    
                      </div>
                    
                    </div>
                    
                    <svg hidden="hidden">
                      <defs>
                        <symbol id="icon-arrow-left" viewBox="0 0 32 32">
                          <title>arrow-left</title>
                          <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
                        </symbol>
                        <symbol id="icon-arrow-right" viewBox="0 0 32 32">
                          <title>arrow-right</title>
                          <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
                        </symbol>
                      </defs>
                    </svg>
                    <!-- partial -->
                      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
                    <script  src="../JS/script.js"></script>
                </section>

                   <!-- slider end-->
                  
           <!-- part two-->
           <section>
           <div class="d-flex display_flex"> 
              <div class="items_p2 order-2">
                      <img class="img-fluid align-self-md-center img_align" src="img//test.svg " >
              </div>
                   <div class="items_p2 align_center_div_1 align-self-center align_order order-1 font_all_3 ">
                     <h4 class="h3 font_color"style="text-align: center;">  E-classroom Test Series</h4>
                     <h6 class="h6 font_color" style="text-align: center; font-size: 1.1vw;" >Attempt our exam-wise mock tests daily to  improve your score</h6>
                     </div>
                     <div class="itmes_p2 align_center_div_2 align-self-center order-3 ">
                        <ul>
                        <li class="h6 font_color" style="font-size:1.3vw" >Designed by exam experts</li>
                        <li  class="h6 font_color" style="font-size:1.3vw" >Based on the latest exam patterns</li>
                        <li  class="h6 font_color" style="font-size:1.3vw" >Detailed Solutions & Performance Analysis</li>
                        <li  class="h6 font_color" style="font-size:1.3vw">All India Rank & Scorecard</li>
                        </ul>
                    </div>
              </div>
              </section>
           <!--part two end-->
   <!--about us start-->

   <section id="about" class="banner">
    <div class="container-fluid back_12">
      <div class="row">
        <div class="col-md-12" >
              <div class="d-flex align-items-start table clearfix" >
                  <div class="p-2 ml-auto">
                      <table class="table-borderless  float-left "  style="width: 100%;">
                        
                            <tr>
                              <th scope="col">
                                <ul>
                                    <li class="h6" style="font-size:1.3vw;"><b>About Us</b></li>
                                    <li  class="h6 " style="font-size:1.3vw;" ><a><b>Achievement</b></a></li>
                                    <li  class="h6 " style="font-size:1.3vw;" ><a><b>Our Team</b></a></li>
                                    <li  class="h6 " style="font-size:1.3vw;" ><a><b>Our Client</b></a></li>
                                </ul>
                              </th>   
                            </tr>
                           </table>
                            </div>

                            <div class="p-2">       
                           <table class="table table-borderless">
                            
                            <tr>
                              <th scope="col">
                                  <ul>
                                      <li class="h6" style="font-size:1.3vw;"><b>Company</b></li>
                                      <li  class="h6 " style="font-size:1.3vw;" ><a><b>Blog</b></a></li>
                                      <li  class="h6 " style="font-size:1.3vw;" ><a><b>Contect</b></a></li>
                                  </ul>
                              </th>       
                            </tr>
                              </table>
                               </div>

                 <div class="p-2">       
                 <table class="table table-borderless">
                      <tr>
                        <th scope="col">

                            <ul>
                                <li class="h6" style="font-size:1.3vw;"><b>POPULAR EXAMS</b></li>
                                <li  class="h6 " style="font-size:1.3vw;" ><a><b>GATE</b></a></li>
                                <li  class="h6 " style="font-size:1.3vw;" ><a><b>SSC</b></a></li>
                                <li  class="h6 " style="font-size:1.3vw;" ><a><b>BANKING</b></a></li>
                                <li  class="h6 " style="font-size:1.3vw;" ><a><b>STATE EXAM</b></a></li>
                                </ul>
                        </th>
                      </tr>
                      </table>
                  </div>

                  <div class="p-2">       
                      <table class="table table-borderless">
                           <tr>
                             <th scope="col">
                                    <h3> E-Classroom </h3></br>   
                                     E-classroom is online learning platform 
                                   </br> Memnagar, Tower - A, 2nd Floor </br> ahmedabad
                                   </br>support@E-classroom.in
                             </th>
                           
                           </tr>
                           </table>
                       </div>


                       <div class="p-2">       
                        <table class="table table-borderless">
                             <tr>
                               <th scope="col">
                                <div class="social">
                                  <h2>Social Media</h2>
                                  
                                  <a class="link" href="https://twitter.com/" target="_blank">
                                    <img class="icon-btn" src="img/instagram.svg" alt="">
                                  </a>
                                  
                                  <a class="link" href="https://www.facebook.com/" target="_blank">
                                    <img class="icon-btn" src="img/facebook.svg" alt="">
                                  </a>
                                  
                                  <a class="link" href="https://plus.google.com/" target="_blank">
                                    <img class="icon-btn" src="img/google-plus.svg" alt="">
                                  </a>
                                  
                                  <a class="link" href="https://www.instagram.com/"  target="_blank">
                                    <img class="icon-btn" src="img/youtube.svg" alt="">
                                  </a>
                                  
                                  <a class="link" href="https://github.com/" target="_blank">
                                    <img class="icon-btn" src="img/twitter.svg" alt="">
                                  </a>
                                </div>
                                  
                               </th>
                             
                             </tr>
                             </table>
                         </div>
              
      </div>
      </div>
      </div>
      
      </section>
      <div id="feedback" class="container my-0 z-depth-1">


<!--Section: Content-->
<section  class="dark-grey-text p-5">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-5 mb-4 mb-md-0">

      <div class="view">
        <img src="https://mdbootstrap.com/img/illustrations/undraw_Group_chat_unwm.svg" class="img-fluid" alt="smaple image">
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-7 mb-lg-0 mb-4">

      <!-- Form -->
      <form action="F_BACK.PHP" method="POST">

        <!-- Section heading -->
        <h3 class="font-weight-bold my-3">Give Feedback</h3>
        
        <p class="text-muted mb-4 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam vitae, fuga similique quos aperiam tenetur quo ut rerum debitis.</p>
   
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Enter your Feedback.." name="feed_back" aria-label="Enter your email address"
            aria-describedby="button-addon2">
            </br>
          <div class="input-group-append">
          
            <button class="btn btn-md btn-primary rounded-right m-0 px-3 py-2 z-depth-0 waves-effect" name="feed" type="submit" id="button-addon2">Submit</button>
          </div>
        </div>
      
        <small class="form-text black-text"><strong>* <!--Leave your email address to be notified first.--></strong></small>
        
      </form>
      <!-- Form -->

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->
  
</section>
<!--Section: Content-->


</div>
      
    
   <!--about us end-->
    
</body>

</html>