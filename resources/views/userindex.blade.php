
@extends('frontend.layout.main')
@section('main.container')

<!--

TemplateMo 587 Tiya Golf Club

https://templatemo.com/tm-587-tiya-golf-club

-->
    <!-- </head>
    
    <body>

        <main>

            <nav class="navbar navbar-expand-lg">                
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="Tiya Golf Club">
                        <span class="navbar-brand-text">
                            Tiya
                            <small>Golf Club</small>
                        </span>
                    </a>

                    <div class="d-lg-none ms-auto me-3">
                        <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Member Login</a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Membership</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Events</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact Us</a>
                            </li>

                           
                        </ul>

                        <div class="d-none d-lg-block ms-lg-3">
                            <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Member Login</a>
                        </div>
                    </div>
                </div>
            </nav> -->
            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Profile</a>
                            </li>

            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/userlogout">Logout</a>
                            </li>

            <div class="d-none d-lg-block ms-lg-3">
                            <!-- <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">User Login</a> -->
                        </div>
                    </div>
                </div>
            </nav>
      
            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">                
                <div class="offcanvas-header">
                    <!-- <h5 class="offcanvas-title" id="offcanvasExampleLabel">Member Login</h5> -->
                    
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                
                <div class="offcanvas-body d-flex flex-column">
                    <form class="custom-form member-login-form" action="/userloginAction" method="post" role="form" autocomplete="off">
                        @csrf
                        <div class="member-login-form-body">
                            <div class="mb-4">
                                <label class="form-label mb-2" for="username">Username</label>

                                <input type="text" name="user" id="user" class="form-control" placeholder="Enter your username" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-password">Password</label>

                                <input type="password" name="password" id="password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Enter your password" required="">
                            </div>

                           
                            <div class="col-lg-5 col-md-7 col-8 mx-auto">
                                <button type="submit" class="form-control">Login</button>
                            </div>
                            @if(session('error'))
                            <p style="color:red">
                            {{session('error')}}
                            </p>
                            @endif
                            <div class="text-center my-4">
                                <a href="/userregister">Register?</a>
                            </div>
                        </div>
                    </form>

                   
                    <div class="mt-auto mb-5">
                        <p>
                            

                           
                        
                        </p>
                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </div>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                <div class="section-overlay"></div>

                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg> -->

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <h2 class="text-white">Welcome to Bansaree</h2>

                            <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                                <span>Bansaree is</span>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">Modern</b>
                                    <b>Creative</b>
                                    <b>Lifestyle</b>
                                </span>
                            </h1>

                            <div class="custom-btn-group">
                                <a href="#section_2" class="btn custom-btn smoothscroll me-3">Our Story</a>

                                <a href="#section_3" class="link smoothscroll">Become a member</a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <!-- <div class="ratio ratio-16x9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/MGNgbNGOzh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div> -->
                        </div>

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </section>


            <section class="about-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-lg-5 mb-4">About Bansaree</h2>
                        </div>

                        <div class="col-lg-5 col-12 me-auto mb-4 mb-lg-0">
                            <h3 class="mb-3">History Of Bansaree</h3>
                                    @foreach($aboutcont as $value)
                                    <h3>{{$value->title}}</h3>
                                    <p>{{$value->descript}}</p>
                                    @endforeach
                            <!-- <p><strong>Since 1984</strong>, Tiya is ranked #8 in the top 10 golf courses in the world. Tiya is Bootstrap 5 HTML CSS template for golf clubs. Anyone can modify and use this layout for commercial purposes.</p>

                            <p>Tiya Golf Club is 100% free CSS template provided by TemplateMo website. Please tell your friends about our website. Thank you for visiting.</p> -->
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                            <div class="member-block">
                                <div class="member-block-image-wrap">
                                    <img src="images/members/portrait-young-handsome-businessman-wearing-suit-standing-with-crossed-arms-with-isolated-studio-white-background.jpg" class="member-block-image img-fluid" alt="">

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="member-block-info d-flex align-items-center">
                                    <h4>Michael</h4>

                                    <p class="ms-auto">Founder</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="member-block">
                                <div class="member-block-image-wrap">
                                    <img src="images/members/successful-asian-lady-boss-red-blazer-holding-clipboard-with-documens-pen-working-looking-happy-white-background.jpg" class="member-block-image img-fluid" alt="">

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-linkedin"></a>
                                        </li>
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="member-block-info d-flex align-items-center">
                                    <h4>Sandy</h4>

                                    <p class="ms-auto">Co-Founder</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <!-- <section class="section-bg-image">
                <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path></svg>

                
                <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path></svg>
            </section> -->


            <section class="membership-section section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                            <h2><span>Products</span> Gallery</h2>
                        </div>
                          

                        <!-- <span class="tm-site-name brand-text font-weight-light">
                <center>
                    <h1 class="tm-page-fonts "><b>View Products</b></h1>
                </center>
            </span> -->

                <div class="container"  style="float:right">
               
                    <div class="form-group">
                    <label for="category"><b>Category:</b></label>
                    <select name="categories" id="categories" class="custom-select" >
                        <!-- <option value="select">Select</option> -->
                        @foreach($cate as $value)
                        <option value="{{$value->id}}">{{$value->catname}}</option>
                        @endforeach
                    </select>
                    <a href="/view" class="btn btn-warning text-dark" >Search</a>
                    
                    </div>
                    
                    
                </div>
          


          
                        <div class="row ">
                @foreach($procontents as $value)
                <div class="col-md-4 product">
                <br><br>
                    <div class="card">
                        <div class="card-body">

                            <center> <img src="/productsimage/{{$value->pimage}}" alt="Image" width="200px" height="200px" class=""><br>

                                <label> Name:{{$value->pname}}</label><br>

                                <label>Description:{{$value->pdescription}} </label><br>
                               <label for="price">Price:{{$value->price}}</label>
                               <a href="/addcart/{{$value->id}}" class="btn btn-primary">Cart</a>
                            </center>
                        </div>
                    </div>
                </div>

                @endforeach

            </div> 

                        <!-- <div class="container">
                            
                        </div> -->
                        <!-- <div class="container">
                            <div class="row">
                                <div class="col-sm-3">

                                </div>
                            </div>
                        </div> -->
<!-- newcode content - begin -->

                            <!-- <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                    <a href="#">
                                        <img src="images/event1.jpg" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="description">
                                <label for="name"></label>
                                <p style="color:blue"></p>
                            </div>

                              <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                    <a href="#">
                                        <img src="images/event1.jpg" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="description">
                                <label for="name"></label>
                                <p style="color:blue"></p>
                            </div>

                              <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                    <a href="#">
                                        <img src="images/event1.jpg" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="description">
                                <label for="name"></label>
                                <p style="color:blue"></p>
                            </div> -->
 <!-- newcode content -end -->

                        <div class="col-lg-6 col-12 mb-3 mb-lg-0">
                            <!-- <h4 class="mb-4 pb-lg-2">Membership Fees</h4> -->

                            
                        </div>

                        <!-- <div class="col-lg-5 col-12 mx-auto">
                         <h4 class="mb-4 pb-lg-2">Please join us!</h4>
                            <form action="#" method="post" class="custom-form membership-form shadow-lg" role="form">
                                <h4 class="text-white mb-4">Become a member</h4>

                                    <div class="form-floating">
                                        <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Full Name" required="">
                                        
                                        <label for="floatingInput">Full Name</label>
                                    </div>

                                    <div class="form-floating">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                        
                                        <label for="floatingInput">Email address</label>
                                    </div>

                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>
                                        
                                        <label for="floatingTextarea"> Comments</label>
                                    </div>

                                    <button type="submit" class="form-control">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section> -->


            <section class="events-section section-bg section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-lg-3">Highlighting Events</h2>
                        </div>

                        <div class="row custom-block mb-3">
                            <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                <!-- <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                    <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">24</h6>
                                    
                                    <strong class="text-white">Feb 2048</strong>
                                </div> -->
                            </div>

                            <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                    <a href="#">
                                        <img src="images/event1.jpg" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 order-3 order-lg-0">
                                <div class="custom-block-info mt-2 mt-lg-0">
                                    <a href="event-detail.html" class="events-title mb-3">Tamilnadu Global Investors Meet</a>

                                    <p class="mb-0">Honourable Chief Minister of Tamil Nadu Thiru M.K. Stalin invited global investors to the state and said that the state is committed to providing all necessary facilitation and support to the investors. 

Inaugurating the Tamil Nadu Global Investors Meet (TNGIM) 2024 at Chennai Trade Centre, Nandambakkam, the Chief Minister shared his vision for transforming Tamil Nadu into a $1 trillion economy by 2030 and said that this Global Investors Meet will act as a catalyst for economic and industrial growth.</p>
                                    <div class="d-flex flex-wrap border-top mt-4 pt-3">

                                        <div class="mb-4 mb-lg-0">
                                            <div class="d-flex flex-wrap align-items-center mb-1">
                                                <span class="custom-block-span">Location:</span>

                                                <p class="mb-0">Chennai Trade Centre, Nandambakkam,</p>
                                            </div>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <!-- <span class="custom-block-span">Ticket:</span> -->

                                                <!-- <p class="mb-0">300</p> -->
                                            </div>
                                        </div>

                                        <!-- <div class="d-flex align-items-center ms-lg-auto">
                                            <a href="event-detail.html" class="btn custom-btn">Buy Ticket</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row custom-block custom-block-bg">
                            <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                <!-- <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                    <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">28</h6>
                                    
                                    <strong class="text-white">Feb 2048</strong>
                                </div> -->
                            </div>

                            <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                <div class="custom-block-image-wrap">
                                    <a href="#">
                                        <img src="images/event2.jpg" class="custom-block-image img-fluid" alt="">

                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 order-3 order-lg-0">
                                <div class="custom-block-info mt-2 mt-lg-0">
                                    <a href="event-detail.html" class="events-title mb-3">Great Handloom Events</a>

                                    <p class="mb-0">Department of handloom inaugurate this year ceremony at kodambakkam. Ministers are participating this events. They aim to raise the local handloom people to improve their lifestyle and family background from their profession </p>

                                    <div class="d-flex flex-wrap border-top mt-4 pt-3">

                                        <div class="mb-4 mb-lg-0">
                                            <div class="d-flex flex-wrap align-items-center mb-1">
                                                <span class="custom-block-span">Location:</span>

                                                <p class="mb-0">National Center, Kodambakkam</p>
                                            </div>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <!-- <span class="custom-block-span">Ticket:</span>

                                                <p class="mb-0">$350</p> -->
                                            </div>
                                        </div>

                                        <!-- <div class="d-flex align-items-center ms-lg-auto">
                                            <a href="event-detail.html" class="btn custom-btn">Buy Ticket</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">


                                  
<div class="col-lg-12 col-12 mx-auto">
                        <!-- <h4 class="mb-4 pb-lg-2">Please join us!</h4> -->
                        @foreach($profile as $user)
                            <form action="#" method="post" class="custom-form membership-form shadow-lg" role="form">
                               <center> <h4 class="text-white mb-4">Profile</h4></center>

                                    <div class="form-floating">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" readonly value="{{$user->cusname}}">
                                        
                                        <label for="floatingInput">Name</label>
                                    </div>

                                    <div class="form-floating">
                                        <input type="text" name="age" id="age"  class="form-control" placeholder="Age" readonly value="{{$user->age}}">
                                        
                                        <label for="floatingInput">Age</label>
                                    </div>

                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="gender" name="gender" placeholder="gender" readonly value="{{$user->gender}}">
                                        
                                        <label for="floatingTextarea"> Gender</label>
                                    </div>

                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="place" name="place" placeholder="place" readonly value="{{$user->place}}">
                                        
                                        <label for="floatingTextarea"> Place</label>
                                    </div>

                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" readonly value="{{$user->phone}}">
                                        
                                        <label for="floatingTextarea"> phone</label>
                                    </div>

                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="item" name="item" placeholder="item name" readonly value="{{$user->item}}">
                                        
                                        <label for="floatingTextarea"> Item</label>
                                    </div>

                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Describe your contact details here" readonly value="{{$user->address}}"></textarea>
                                        
                                        <label for="floatingTextarea"> Address</label>
                                    </div>
                                </div>
                            </form>
                            @endforeach
                        </div>


















                            <!-- <form action="/contactAction" method="post" class="custom-form contact-form" role="form">
                                @csrf
                                <h2 class="mb-4 pb-2">Contact</h2>

                                <div class="row">
                               
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                         
                                            <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Full Name" required="">
                                            
                                            <label for="floatingInput">Full Name</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12"> 
                                        <div class="form-floating">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                            
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>
                                            
                                            <label for="floatingTextarea">Message</label>
                                        </div>

                                        <button type="submit" class="form-control">Submit Form</button>
                                    </div>
                                </div>
                            </form> -->
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="contact-info mt-5">
                                <div class="contact-info-item">

                                    <!-- <div class="contact-info-footer">
                                        <a href="#">Directions</a>
                                    </div> -->
                                </div>

                               
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
@endsection
       


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>