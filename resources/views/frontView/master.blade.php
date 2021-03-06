<?php 
use Illuminate\Http\Request;

/*Start Menu Table:Data Retrive*/
$id=session()->get('id');
$pictures=session()->get('pictures');
$PlatterName=session()->get('PlatterName');
$item_1=session()->get('item_1');
$price_1=session()->get('price_1');
$item_2=session()->get('item_2');
$price_2=session()->get('price_2');
$item_3=session()->get('item_3');
$price_3=session()->get('price_3');
$item_4=session()->get('item_4');
$price_4=session()->get('price_4');
$item_5=session()->get('item_5');
$price_5=session()->get('price_5');

/*End RESERVATION Table:Data Retrive*/
$menu=\DB::table('specialmenus')->get(); /*specialmenus table connection to the database*/
 ?>

<!doctype html>
<html lang="en">
    <head>
        <!--meta tags-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="business template based on HTML5">
        <meta name="keywords" content="onepage, business, clean, modern">
        <meta name="author" content="Shinur">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--title-->
        <title>The Paradise</title>
        @yield('css')

    </head>
    <body>
        
        @include('frontView.inc.header')

        <!--******=====start hero section =====******-->   
        <section id="home" class="hero-area">
            <div class="container">
                <div class="col-md-12">
                    <div class="hero-content-area">
                        <h1 class="wow fadeInLeft" data-wow-delay=".2s">The Paradise Restaurant<br>
                        <span>Thai & Indian Food</span></h1>
                         <a href="#reservation" class="wow fadeInLeft button-btn hero-left-button" data-wow-delay=".2s">Reserve Now</a>
                         <a href="#contact" class="wow fadeInRight button-btn hero-right-button" data-wow-delay=".2s"> Contact Us</a>
                    </div>
                </div>
            </div>
        </section>


        <!--******=====start about section=====******-->
        <section id="about" class="section-padding about">
            <div class="container">
                <div class="about-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 about-left-content wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <h2>The Paradise Restaurant</h2>
                            <h3>Suitable For Business, Startup Website</h3>
                            <p>To develop a financial strategy for your future, it's important for your financial professional to see a complete, 360-degree view of your financial picture, including how your retirement assets are integrated and work with one another. Our financial strategies and asset management services use insurance products, such as annuities, to help you.</p>
                            <a href="#" class="btn button-btn" data-toggle="modal" data-target="#orderModal">Order Now</a>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-12 offset-md-1 about-right-content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <img src="{{asset('frontend')}}/assets/images/about/about-1.jpg" alt="" class="img-responsive"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--******=====end about section=====******-->

        <!--******===== Food Menu Area Start ******=====-->
        <section  class="sahebian-food-menu section-padding">
          <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <div class="section-title mb-30">
                  <h2>Paradise menu</h2>
                  <p>We help create retirement income strategies for people in or nearing retirement so their retirement income lasts as long as they do.</p>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <div class="food-menu-box">
                     <div class="book-wrapper">
                        <div class="book-cover">
                           <img src="{{asset('frontend')}}/assets/images/menu/menu.jpg" alt="Menu">
                        </div>
                        <div class="pages-container">
                           <div class="pages">
                              <div class="page-num-1">
                                 <div class="pages-content">
                                    <div class="pages-background"></div>
                                    <div class="content-inner">
                                       <img src="{{asset('frontend')}}/assets/images/menu/breakfast.png" alt="breakfast" />
                                       <h2>Breakfast</h2>
                                       <div class="text">
                                          <ul>
                                             <li>Dosa <span>: $12.00</span></li>
                                             <li>Ghee Roast <span>: $06.00</span></li>
                                             <li>Masala Dosa <span>: $10.00</span></li>
                                             <li>Egg omlet <span>: $09.00</span></li>
                                             <li>Egg burji <span>: $09.00</span></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="page-num-2">
                                 <div class="pages-content">
                                    <div class="content-inner">
                                       <img src="{{asset('frontend')}}/assets/images/menu/breakfast.png" alt="breakfast" />
                                       <h2>Lunch</h2>
                                       <div class="text">
                                          <ul>
                                             <li>Dosa <span>: $12.00</span></li>
                                             <li>Ghee Roast <span>: $06.00</span></li>
                                             <li>Masala Dosa <span>: $10.00</span></li>
                                             <li>Egg omlet <span>: $09.00</span></li>
                                             <li>Egg burji <span>: $09.00</span></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="page-num-3">
                                 <div class="pages-content">
                                    <div class="content-inner">
                                       <img src="{{asset('frontend')}}/assets/images/menu/breakfast.png" alt="breakfast" />
                                       <h2>Dinner</h2>
                                       <div class="text">
                                          <ul>
                                             <li>Dosa <span>: $12.00</span></li>
                                             <li>Ghee Roast <span>: $06.00</span></li>
                                             <li>Masala Dosa <span>: $10.00</span></li>
                                             <li>Egg omlet <span>: $09.00</span></li>
                                             <li>Egg burji <span>: $09.00</span></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="page-num-4">
                                 <div class="pages-content">
                                    <div class="content-inner">
                                       <h2>The End</h2>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="food-menu-slider owl-carousel">
                     <div class="single-food-menu">
                        <div class="menu-slider-inner">
                           <img src="{{asset('frontend')}}/assets/images/menu/breakfast.png" alt="breakfast" />
                           <h2>Breakfast</h2>
                           <div class="text">
                              <ul>
                                 <li>Dosa <span>: $12.00</span></li>
                                 <li>Ghee Roast <span>: $06.00</span></li>
                                 <li>Masala Dosa <span>: $10.00</span></li>
                                 <li>Egg omlet <span>: $09.00</span></li>
                                 <li>Egg burji <span>: $09.00</span></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="single-food-menu">
                        <div class="menu-slider-inner">
                           <img src="{{asset('frontend')}}/assets/images/menu/breakfast.png" alt="breakfast" />
                           <h2>Lunch</h2>
                           <div class="text">
                              <ul>
                                 <li>Dosa <span>: $12.00</span></li>
                                 <li>Ghee Roast <span>: $06.00</span></li>
                                 <li>Masala Dosa <span>: $10.00</span></li>
                                 <li>Egg omlet <span>: $09.00</span></li>
                                 <li>Egg burji <span>: $09.00</span></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="single-food-menu">
                        <div class="menu-slider-inner">
                           <img src="{{asset('frontend')}}/assets/images/menu/breakfast.png" alt="breakfast" />
                           <h2>dinner</h2>
                           <div class="text">
                              <ul>
                                 <li>Dosa <span>: $12.00</span></li>
                                 <li>Ghee Roast <span>: $06.00</span></li>
                                 <li>Masala Dosa <span>: $10.00</span></li>
                                 <li>Egg omlet <span>: $09.00</span></li>
                                 <li>Egg burji <span>: $09.00</span></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
          </div>
      </section>
      <!--******===== Food Menu Area End ******=====-->

      <!--******===== Booking Table Area Start ******=====-->
      <section id="reservation" class="sahebian-booking-table-area" data-scroll-index="4">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-sm-12">
                  <div class="booking-left section_100">
                     <div class="site-heading">
                        <h2>book a table</h2>
                     </div>
                     <div class="booking-form">
                        <form action="reservation" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    <input type="text" placeholder="Name" name="name" required>
                                 </p>
                              </div>
                              <div class="col-md-6">
                                 <p>
                                    <input type="email" placeholder="Email" name="email" required>
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    <input type="tel" placeholder="Phone" name="phone" required>
                                 </p>
                              </div>
                              <div class="col-md-6">
                                 <p>
                                    <input type="int" placeholder="Person" name="person" required>
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    <input id="reservation_date" name="date" placeholder="Expected Date" data-select="datepicker" type="date" required>
                                 </p>
                              </div>
                              <div class="col-md-6">
                                 <p>
                                    <input type="text" placeholder="Occation" name="occation" required>
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <p>
                                    <textarea placeholder="Special Request" name="srequest" required></textarea>
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <p>
                                    <button type="submit">make a reservation</button>
                                 </p>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="booking-right">
                     <img src="{{asset('frontend')}}/assets/images/book.png" alt="book image" />
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--******===== Booking Table Area End ******=====-->

      <!-- ******=====Signature Dish Area Start******===== -->
      <section id="sahebian-food-menu" class="sahebian-signature-dish-area section-padding">
         <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <div class="section-title mb-50">
                  <h2>Paradise Signature Items</h2>
                  <p>We help create retirement income strategies for people in or nearing retirement so their retirement income lasts as long as they do.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <?php
                    foreach ($menu as $data):
                  ?>
               <div class="col-lg-4">
                  <div class="single-signature">
                    
                     <div class="signature-img">
                        <a href="#">
                        <img src="{{$data->pictures}}" alt="Signature" />
                        </a>
                     </div>
                     <div class="signature-text">
                        <h3><a href="#">{{$data->PlatterName}}</a></h3>
                        <ul>
                           <li>{{$data->item_1}} <span>: {{$data->price_1}}TK</span></li>
                           <li>{{$data->item_2}} <span>: {{$data->price_2}}TK</span></li>
                           <li>{{$data->item_3}} <span>: {{$data->price_3}}TK</span></li>
                           <li>{{$data->item_4}} <span>: {{$data->price_4}}TK</span></li>
                           <li>{{$data->item_5}} <span>: {{$data->price_5}}TK</span></li>
                        </ul>
                     </div>

                  </div>
                   
               </div>
               <?php 
                    endforeach;
                ?>

               <!--<div class="col-lg-4">
                  <div class="single-signature">
                     <div class="signature-img">
                        <a href="#">
                        <img src="{{asset('frontend')}}/assets/images/signature/signature-2.jpg" alt="Signature" />
                        </a>
                     </div>
                     <div class="signature-text">
                        <h3><a href="#">Cupcake Recipes</a></h3>
                        <ul>
                           <li>Rice 1 Plets <span>: $12.00</span></li>
                           <li>Salad 1 Plets <span>: $06.00</span></li>
                           <li>Checken 2 Piece <span>: $10.00</span></li>
                           <li>soft drink <span>: $09.00</span></li>
                        </ul>
                     </div>
                  </div>
               </div>-->

               <!-- <div class="col-lg-4">
                  <div class="single-signature">
                     <div class="signature-img">
                        <a href="#">
                        <img src="{{asset('frontend')}}/assets/images/signature/signature-3.jpg" alt="Signature" />
                        </a>
                     </div>
                     <div class="signature-text">
                        <h3><a href="#">Bread Spicy Soup</a></h3>
                        <ul>
                           <li>Rice 1 Plets <span>: $12.00</span></li>
                           <li>Salad 1 Plets <span>: $06.00</span></li>
                           <li>Checken 2 Piece <span>: $10.00</span></li>
                           <li>soft drink <span>: $09.00</span></li>
                        </ul>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
      </section>
      <!--******===== Signature Dish Area End ******=====-->
     <!--******===== Start Reservation Area******===== -->
      <section id="order" class="order-area ptb-100">
          <div class="container">
              <h2>Its all about good food !</h2>
              <a href="#" class="btn button-btn" data-toggle="modal" data-target="#orderModal">Order Now</a>
          </div>
      </section>
      <!--******===== End Reservation Area******===== -->

        <!--******===== Start Reservation Modal ******=====-->
        <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Order Our Food From menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- <form action="{{action('OrderController@insert')}}" method="post" enctype="multipart/form-data" class="modalForm"> -->
                        <form action="order" method="post" enctype="multipart/form-data" class="modalForm">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control" placeholder="Address" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="date" name="date" class="form-control" placeholder="11/11/19" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="int" name="foodnumber" class="form-control" placeholder="Food number" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="time" name="time" class="form-control" placeholder="Time" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <select name="person" class="form-control" required>
                                            <option value="1">1 Person</option>
                                            <option value="2">2 Person</option>
                                            <option value="3">3 Person</option>
                                            <option value="4">4 Person</option>
                                            <option value="5">5 Person</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <!--<button type="submit" value="submit" class="btn btn-primary">Order Now</button>-->

                                    <input class="btn btn-primary" type="submit" value="Order Now">



                                  </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--******===== End Reservation Modal ******=====-->

      <!--******=====EVENT AREA******=====-->
      <section id="event" class="event-area section-padding">          
        <div class="container">
           <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="section-title mb-50">
                <h2>Comming events</h2>
               
              </div>
            </div>
          </div>
            <div class="row event-list">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="single-event">
                        <div class="event-img">
                             <img src="{{asset('frontend')}}/assets/images/event/events-1.jpg" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>22</span>December</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="single-event.html">Ktherine Ryan to host Event Awards 2017</a></h3>
                                <p class="event-meta"><a href="#">29 September 2017 </a>- 196 Manhattan, MY, USA</p>
                                <p>Comedian Katherine Ryan will present this year's Event Awards on 13 October at the iconic Eventim Apollo in Hammersmith, London.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-img">
                             <img src="{{asset('frontend')}}/assets/images/event/events-2.jpg" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>22</span>December</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="single-event.html">Ktherine Ryan to host Event Awards 2017</a></h3>
                                <p class="event-meta"><a href="#">29 September 2017 </a>- 196 Manhattan, MY, USA</p>
                                <p>Comedian Katherine Ryan will present this year's Event Awards on 13 October at the iconic Eventim Apollo in Hammersmith, London.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--******=====EVENT AREA END******=====-->

     <!--******===== Contact Area Start ******=====-->
      <section id="contact" class="sahebian-contact-area section-padding" data-scroll-index="7">
         <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <div class="section-title mb-50">
                  <h2>Get In Touch</h2>                 
                </div>
              </div>
            </div>
            <div class="row">
               <div class="col-lg-5 col-md-5">
                  <div class="contact-left">
                      <h3 style="color:red;text-align: center">{{Session::get('message')}}</h3>
                      <form action="feedback" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                        <p>
                           <input class="input" type="text" placeholder="Your Name" id="name" name="name" required>
                        </p>
                        <p>
                           <input class="input" type="email" placeholder="Your Email" id="email" name="email" required> 
                        </p>
                        <p>
                           <textarea class="input" name="message" id="msg" placeholder="Write your message here..." required></textarea>
                        </p>
                        <p>
                           <button type="submit">Send Message</button>
                        </p>
                     </form>
                  </div>
               </div>
               <div class="col-lg-7 col-md-7">
                  <div class="contact-right">
                     <div class="single-contact-info">
                        <h3>Opening hours 8:00 AM - 10:00 PM<span>40% off friday only</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                     </div>
                     <div class="single-contact-info">
                        <p>157/B, White Oak Drive Kansas City </p>
                        <p>689 - Lynn Street, South Boston</p>
                     </div>
                     <div class="single-contact-info info-contact-details">
                        <p><span>Fax</span> :  (513) 352-3209 </p>
                        <p><span>Tel</span> :  012-927-4585-22</p>
                        <p><span>Email</span> :  <a href="mailto: paradise@gmail.com">paradise@gmail.com</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--******===== Contact Area End ******=====-->

     @include('frontView.inc.footer')

       
       

     @yield('js')

    </body>
</html>