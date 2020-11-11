@extends('layouts.website', ['class' => 'bg-default'])

@extends('layouts.clinic.nav')

@section('content')
   
  <div class="wrapper">
    <!-- Header section -->
    <header class="header-5">
      <div class="page-header">
        <div class="container">
          <div class="row align-items-center text-left">
            <div class="col-lg-5 col-12">
              <h1 class="display-3">Meet us,<span class="text-primary"> it's free.</span></h1>
              <p class="lead pb-4">Not just another practice management system....bla bla bla</p>
              <form action="{{ route('wait.store') }}" method ="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-2">
                  <div class="col-sm-8 col-12 from-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" aria-label="First Name" required>
                  </div>                
                </div>


                <div class="row mb-2">
                  <div class="col-sm-8 col-12 from-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" aria-label="Last Name" required>
                  </div>                
                </div>

                <div class="row mb-2">
                  <div class="col-sm-8 col-12 from-group">
                    <label for="signupSrEmail">Your email</label>
                    <input type="email" class="form-control" name="signupSrEmail" id="signupSrEmail" placeholder="Your email" aria-label="Your email" required>
                  </div>                
                </div>       

                <div class="row mb-2">
                  <div class="col-sm-8 col-12 form-group">
                    <button class="btn btn-primary clinic_registerBtn">Submit</button>
                  </div>
                </div>         

              </form>
            </div>
            <div class="col-lg-7 col-12 pl-0">
              <img class="ml-lg-5" src="../assets/img/ill/bg6-2.svg" width="100%">
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End of Header Section -->
    
    <!-- About us Section -->
    <div id="about-us" class="section features features-5">
        <div class="container">
          <div class="row">
            <div class="col-md-8 text-center mx-auto">
              <h3 class="display-3">Nice to meet you</h3>
              <p class="lead">bla bla bla who we are.</p>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-lg-12 mt-md-5">
              <div class="row">
                <div class="col-md-6">
                  <div class="info">
                    <div class="pr-md-5">
                      <div class="icon icon-shape icon-shape-primary shadow rounded-circle mb-4">
                        <i class="ni ni-favourite-28"></i>
                      </div>
                      <h5 class="display-5">Awesome features</h5>
                      <p>The kit comes with three pre-built pages to help you get started faster.</p>
                      <ul class="list-unstyled">
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                              <div class="mr-3">
                                <i class="ni ni-favourite-28"></i>
                              </div>
                            </div>
                            <div>
                              <p class="mb-0">Beautiful elements</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                              <div class="mr-3">
                                <i class="ni ni-check-bold"></i>
                              </div>
                            </div>
                            <div>
                              <p class="mb-0">Amazing page examples</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                              <div class="mr-3">
                                <i class="ni ni-check-bold"></i>
                              </div>
                            </div>
                            <div>
                              <p class="mb-0">Super friendly support team</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info">
                    <div class="pr-md-5">
                      <div class="icon icon-shape icon-shape-primary shadow rounded-circle mb-4">
                        <i class="ni ni-money-coins"></i>
                      </div>
                      <h5 class="display-5">Best prices</h5>
                      <p> If you're taught you can’t do anything, you won’t do anything. </p>
                      <ul class="list-unstyled">
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                              <div class="mr-3">
                                <i class="ni ni-check-bold"></i>
                              </div>
                            </div>
                            <div>
                              <p class="mb-0">Beautiful elements</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                              <div class="mr-3">
                                <i class="ni ni-check-bold"></i>
                              </div>
                            </div>
                            <div>
                              <p class="mb-0">Amazing page examples</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                              <div class="mr-3">
                                <i class="ni ni-check-bold"></i>
                              </div>
                            </div>
                            <div>
                              <p class="mb-0">Super friendly support team</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-md-6">
                  <div class="info">
                    <div class="pr-md-5">
                      <div class="icon icon-shape icon-shape-primary shadow rounded-circle mb-4">
                        <i class="ni ni-support-16"></i>
                      </div>
                      <h5 class="display-5">Community support</h5>
                      <p>That’s the main thing people are always controlled by!</p>
                      <ul class="list-unstyled">
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                              <div class="mr-3">
                                <i class="ni ni-check-bold"></i>
                              </div>
                            </div>
                            <div>
                              <p class="mb-0">Beautiful elements</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                              <div class="mr-3">
                                <i class="ni ni-check-bold"></i>
                              </div>
                            </div>
                            <div>
                              <p class="mb-0">Amazing page examples</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                              <div class="mr-3">
                                <i class="ni ni-check-bold"></i>
                              </div>
                            </div>
                            <div>
                              <p class="mb-0">Super friendly support team</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info">
                    <div class="pr-md-5">
                      <div class="icon icon-shape icon-shape-primary shadow rounded-circle mb-4">
                        <i class="ni ni-laptop"></i>
                      </div>
                      <h5 class="display-5">Responsive componenets</h5>
                      <p>They're slowed down by their perception of themselves.</p>
                      <ul class="list-unstyled">
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                              <div class="mr-3">
                                <i class="ni ni-check-bold"></i>
                              </div>
                            </div>
                            <div>
                              <p class="mb-0">Beautiful elements</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                              <div class="mr-3">
                                <i class="ni ni-check-bold"></i>
                              </div>
                            </div>
                            <div>
                              <p class="mb-0">Amazing page examples</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <div>
                              <div class="mr-3">
                                <i class="ni ni-check-bold"></i>
                              </div>
                            </div>
                            <div>
                              <p class="mb-0">Super friendly support team</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- End of About us section-->
      
    <!-- Features Section -->
    <div id="features" class="section features-2">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 col-md-8 mr-auto text-left">
              <div class="pr-md-5">
                <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle mb-5">
                  <i class="ni ni-favourite-28"></i>
                </div>
                <h3>Awesome features</h3>
                <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                <ul class="list-unstyled mt-5">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-primary mr-3">
                          <i class="ni ni-settings-gear-65"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Carefully crafted components</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-primary mr-3">
                          <i class="ni ni-html5"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Amazing page examples</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-primary mr-3">
                          <i class="ni ni-satisfied"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Super friendly support team</h6>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-7 col-md-12 pl-md-0">
              <div class="row">
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-info shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="ni ni-satisfied text-info"></i>
                    </div>
                    <h5 class="info-title text-white">Best Quality</h5>
                    <p class="description">What matters is the people who are sparked by it. And the people who are like offended by it.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-danger info-raised shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="ni ni-palette text-danger"></i>
                    </div>
                    <h5 class="info-title text-white">Awesome Design</h5>
                    <p class="description">Because it's about motivating the doers. Because I’m here to follow my dreams and inspire the world.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-default shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="ni ni-spaceship text-default"></i>
                    </div>
                    <h5 class="info-title text-white">Great Performance</h5>
                    <p class="description">There’s nothing I really wanted to do in life that I wasn’t able to get good at. We’re constantly growing.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-primary shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="ni ni-planet text-primary"></i>
                    </div>
                    <h5 class="info-title text-white">Fast Development</h5>
                    <p class="description">I always felt like I could do anything. That’s the main thing people are controlled by the force! </p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-warning info-raised shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="ni ni-glasses-2 text-warning"></i>
                    </div>
                    <h5 class="info-title text-white">Super Fresh</h5>
                    <p class="description">Thoughts- their perception of themselves! They're slowed down by their perception of themselves.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-success shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="ni ni-notification-70 text-success"></i>
                    </div>
                    <h5 class="info-title text-white">Organized Content</h5>
                    <p class="description">If you're taught you can’t do anything, you won’t do anything. I was taught I could do everything.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- End Of Features Section -->
    
    <!-- Pricing Section -->
        <div class="pricing-4" id="pricing-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto text-center">
              <h2 class="title">Pick the best plan for you</h2>
              <h4 class="description">You have Free Unlimited Updates and Premium Support on each package.</h4>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-4">
              <div class="card card-pricing card-coin" style="background-image: url('./assets/img/">
                <div class="card-header">
                  <img src="./assets/img/theme/vue.jpg" class="img-center shadow">
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <h5 class="text-uppercase">Standard Pack</h5>
                      <span>£ 39</span>
                      <hr class="bg-info">
                    </div>
                  </div>
                  <div class="row">
                    <ul class="list-group">
                      <li class="list-group-item">50 messages</li>
                      <li class="list-group-item">100 emails</li>
                      <li class="list-group-item">No Support</li>
                    </ul>
                  </div>
                </div>
                <div class="card-footer text-center bg-transparent">
                  <button class="btn btn-primary mb-3">Get plan</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-pricing card-coin" style="background-image: url('./assets/img/">
                <div class="card-header">
                  <img src="./assets/img/theme/react.jpg" class="img-center shadow">
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <h5 class="text-uppercase">Premium Pack</h5>
                      <span>£ 49</span>
                      <hr class="bg-info">
                    </div>
                  </div>
                  <div class="row">
                    <ul class="list-group">
                      <li class="list-group-item">100 messages</li>
                      <li class="list-group-item">1K emails</li>
                      <li class="list-group-item">Premium Support</li>
                    </ul>
                  </div>
                </div>
                <div class="card-footer text-center bg-transparent">
                  <button class="btn btn-primary mb-3">Get plan</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-pricing card-coin" style="background-image: url('./assets/img/">
                <div class="card-header">
                  <img src="./assets/img/theme/sketch.jpg" class="img-center shadow">
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <h5 class="text-uppercase">Platinum Pack</h5>
                      <span>£ 69</span>
                      <hr class="bg-info">
                    </div>
                  </div>
                  <div class="row">
                    <ul class="list-group">
                      <li class="list-group-item">350 messages</li>
                      <li class="list-group-item">10K emails</li>
                      <li class="list-group-item">24/7 Support</li>
                    </ul>
                  </div>
                </div>
                <div class="card-footer text-center bg-transparent">
                  <button class="btn btn-primary mb-3">Get plan</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- End Of Pricing Section -->
    
    
    <!-- Contact Us Section -->
        <div class="contactus-1 bg-default" style="background-image: url('./assets/img/ill/1.svg')">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-5 d-flex justify-content-center flex-column">
              <h2 class="title text-white">Get in Touch</h2>
              <h4 class="description text-white">You need more information? Check what other persons are saying about our product. They are very happy with their purchase.</h4>
              <div class="info info-horizontal">
                <div class="icon icon-shape icon-shape-primary shadow rounded-circle text-white">
                  <i class="ni ni-square-pin"></i>
                </div>
                <div class="description">
                  <h4 class="info-title text-white">Find us at the office</h4>
                  <p class="description ml-3 text-white"> Bld Mihail Kogalniceanu, nr. 8,<br>
                    7652 Bucharest,<br>
                    Romania
                  </p>
                </div>
              </div>
              <div class="info info-horizontal">
                <div class="icon icon-shape icon-shape-primary shadow rounded-circle text-white">
                  <i class="ni ni-mobile-button"></i>
                </div>
                <div class="description">
                  <h4 class="info-title text-white">Give us a ring</h4>
                  <p class="description ml-3 text-white"> Michael Jordan<br>
                    +40 762 321 762<br>
                    Mon - Fri, 8:00-22:00
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-7 ml-auto mr-auto">
              <div class="card card-contact card-raised">
                <form role="form" id="contact-form" method="post" action="{{route('wait.sendmail')}}">
                    @csrf
                    <div class="card-header text-center">
                        <h4 class="card-title">Contact Us</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First name</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="First Name..." aria-label="First Name..." type="text" name="send_firstname">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-2">
                            <div class="form-group">
                                <label>Last name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-collection"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Last Name..." aria-label="Last Name..." name="send_lastname">
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email Here..." name="send_email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Your message</label>
                            <textarea class="form-control" id="message" rows="6" name="send_text"></textarea>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="custom-control custom-checkbox mt-2">
                                <input class="custom-control-input" id="customCheck" type="checkbox">
                                <label class="custom-control-label" for="customCheck">
                                    <span>I'm not a robot</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary pull-right">Send Message</button>
                        </div>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- End Of Contact Us Section -->
    
    <!-- Footer Section -->
      <footer class="footer">
      <div class="container">
        <div class="row row-grid align-items-center mb-5">
          <div class="col-lg-6">
            <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
            <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
          </div>
          <div class="col-lg-6 text-lg-center btn-wrapper">
            <button target="_blank" href="https://twitter.com/creativetim" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
              <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
            </button>
            <button target="_blank" href="https://www.facebook.com/CreativeTim/" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
              <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
            </button>
            <button target="_blank" href="https://dribbble.com/creativetim" rel="nofollow" class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
              <span class="btn-inner--icon"><i class="fab fa-dribbble"></i></span>
            </button>
            <button target="_blank" href="https://github.com/creativetimofficial" rel="nofollow" class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip" data-original-title="Star on Github">
              <span class="btn-inner--icon"><i class="fab fa-github"></i></span>
            </button>
          </div>
        </div>
        <hr>
        <div class="row align-items-center justify-content-md-between">
          <div class="col-md-6">
            <div class="copyright">
              © 2020 <a href="" target="_blank">Clinic Notes</a>.
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav nav-footer justify-content-end">
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Clinic Notes</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/blog" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Of Footer Section -->
  </div>
@endsection
