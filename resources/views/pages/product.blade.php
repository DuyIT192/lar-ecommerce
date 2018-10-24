@extends('pages.master')
@section('css')
 <style>
    .mySlides {display:none}
    .demo {cursor:pointer}
</style>
@endsection
@section('title','trangchu')
@section('keyword','sản phẩm đẹp ')
@section('descript','sản phẩm tốt giá rẻ')
@section('content','sản phẩm đẹp')
@section('contents')
<!----- BEGIN: wrapper ------>
<div id="wrapper">

    <!----- BEGIN: header ------>

    <div id="header"> 
    <div id="header11"> 
        <!----- BEGIN: header1 ------>
        <div class="header1">   
            <ul>        
                <li>
                    <i class="fa fa-phone fa-1x" aria-hidden="true"></i>
                    <h4 class="text1">0393.103.755</h4>
                </li>

                <li>
                    <i class="fa fa-envelope fa-1x" aria-hidden="true"></i>
                    <h4 class="text1">truongduyduc95@gmail.com</h4>
                </li>
            <ul>    
        </div>  
        <!----- END: header1 ------>    

        <!----- BEGIN: header2 ------>
        <div class="header2">               
            <ul>
                <li>
                    <a href="#"><i class="fa fa-facebook-f fa-1.5x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </li>
                <li>
                    <button type="submit" class="btn-search" ><img src="pages/images/search-icon-png-8.png"></button>
                    <div class="m-search">
                        <input type="text" value="" name="s" id="s" class="form" placeholder="Nhập tên sản phẩm...">
                    </div>
                </li>
                <li>
                    <a href="#" class="cart">0</a>
                </li>
                
            </ul>
        </div>  
        <!----- END: header2 ------>
        </div>
    </div>
    <!----- END: header ------>

    <!----- BEGIN: slide ------>
    <div id="slide">
        <!-- <img src="pages/images/slide-3.jpg" alt=""> 
                              -->
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="pages/images/slider-1.png" alt="Los Angeles" style="width:100%;">
              </div>

              <div class="item">
                <img src="pages/images/slider-2.png" alt="Chicago" style="width:100%;">
              </div>
            
              <div class="item">
                <img src="pages/images/slider-1.png" alt="New york" style="width:100%;">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>          


    </div>
    <!----- BEGIN: slide ------>

    <!----- BEGIN: menu ------>
    <div id="menu">

        <!----- BEGIN: menu1 ------>
        <div id="menu1">
            <img src="pages/images/logo.png" alt="">
            <div id="menu-icon"><a href="javascript: void(0)">
                    <img src="pages/images/menu-icon.png" style="width: 35px; height: 40px;" alt="menu-icon"></a>
            </div>
        </div>
        <!----- END: menu1 ------>

        <!----- BEGIN: menu2 ------>
        <div id="menu2">
            <ul id="menubar">
                <li class="active"><a href="#">TRANG CHỦ</a></li>
                <li><a href="#">GIỚI THIỆU</a></li>
                <li><a href="#">PRODUCT</a></li>
                <li><a href="#">BÁO GIÁ</a></li>
                <li><a href="#">TIN TỨC - SỰ KIỆN</a></li>
                <li><a href="#">LIÊN HỆ</a></li>
                
            </ul>
        </div>
        <!----- END: menu2 ------>   

    </div>
    <!----- END: menu ------>
    
    
    <!----- END: COMMONT ------>
    <div id="commont">
         <!----- BEGIN: box1  ------>
         <div id="box1" >
         <img src="pages/images/cat1.jpg">
            <!----- BEGIN: box1-1  ------>
             <div id="box1-1">
                <span>Phổ biến nhất</span>
             </div>
             <!----- END: box1-1 ------>
             <!----- BEGIN: box1-2  ------>
             <div id="box1-2">
                <h4><a href="#">ĐỒNG HỒ EPOS SWISS</a></h4>
             </div>
             <!----- END: box1-2 ------>
         </div>
         <!----- END: box1 ------>
         
         <!----- BEGIN: box1  ------>
         <div id="box1" >
         <img src="pages/images/cat2.jpg">
            <!----- BEGIN: box1-1  ------>
             <div id="box1-1">
                <span>Phổ biến nhất</span>
             </div>
             <!----- END: box1-1 ------>
             <!----- BEGIN: box1-2  ------>
             <div id="box1-2">
                <h4><a href="#">ĐỒNG HỒ EPOS SWISS</a></h4>
             </div>
             <!----- END: box1-2 ------>
         </div>
         <!----- END: box1 ------>
         
         <!----- BEGIN: box1  ------>
         <div id="box1" >
         <img src="pages/images/cat3.jpg">
            <!----- BEGIN: box1-1  ------>
             <div id="box1-1">
                <span>Phổ biến nhất</span>
             </div>
             <!----- END: box1-1 ------>
             <!----- BEGIN: box1-2  ------>
             <div id="box1-2">
                <h4><a href="#">ĐỒNG HỒ EPOS SWISS</a></h4>
             </div>
             <!----- END: box1-2 ------>
         </div>
         <!----- END: box1 ------>
         
         <!----- BEGIN: box1  ------>
         <div id="box1" >
         <img src="pages/images/cat4.jpg">
            <!----- BEGIN: box1-1  ------>
             <div id="box1-1">
                <span>Phổ biến nhất</span>
             </div>
             <!----- END: box1-1 ------>
             <!----- BEGIN: box1-2  ------>
             <div id="box1-2">
                <h4><a href="#">ĐỒNG HỒ EPOS SWISS</a></h4>
             </div>
             <!----- END: box1-2 ------>
         </div>
         <!----- END: box1 ------>
         
         
         
    </div>
    <!----- END: COMMONT ------>
    
    <!----- BEGIN: PRODUCT COMMONT ------>
        <div id="productcommont">
            
            <!----- BEGIN: titleproductcommont  ------>
            <div id="titleproductcommont">
                <h5><span>Sản phẩm nổi bật</span></h5>
                
            </div>
            <!----- BEGIN: titleproductcommont  ------>
            
             <!----- BEGIN: boxproduct  ------>
            <div id="boxproduct">
            
                <!----- BEGIN: box2  ------>
                <div id="box2">
                    <!----- BEGIN: box2-1  ------>
                    <div id="box2-1" >
                        <a href="file:///E:/duc/html-css/productdetail.html"><img src="pages/images/pro-ft1.jpg" ></a>
                        <div class="cart" >
                            <a href="file:///E:/duc/html-css/product.html"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>                               
                        </div>
                        <div class="cart" >
                            <a href="file:///E:/duc/html-css/shoppingcart.html"><i class="fa fa-cart-plus" style="font-size:24px"></i></a>
                        </div>
                        <div class="seo" >
                            <span>-8,3%</span>
                        </div>
                    </div>
                    <!----- END: box2-1  ------>
                    
                    <!----- BEGIN: box2-2  ------>
                    <div id="box2-2">                               
                                <h5><a href="#">Đồng hồ mẫu 01</a></h5>
                                <p>
                                    <span class="gia">12.000.000 VND</span>
                                    <span class="giakm">11.000.000 VND</span>
                                 </p>   
                    </div>
                    <!----- END: box2-2  ------>
                    
                </div>
                <!----- END: box2  ------>
                
                <!----- BEGIN: box2  ------>
                <div id="box2">
                    <!----- BEGIN: box2-1  ------>
                    <div id="box2-1" >
                        <a href="file:///E:/duc/html-css/productdetail.html"><img src="pages/images/pro-ft2.jpg" ></a>
                        <div class="cart" >
                            <a href="file:///E:/duc/html-css/product.html"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>                               
                        </div>
                        <div class="cart" >
                            <a href="file:///E:/duc/html-css/shoppingcart.html"><i class="fa fa-cart-plus" style="font-size:24px"></i></a>
                        </div>
                        <div class="seo" >
                            <span>-8,3%</span>
                        </div>
                    </div>
                    <!----- END: box2-1  ------>
                    
                    <!----- BEGIN: box2-2  ------>
                    <div id="box2-2">                               
                                <h5><a href="#">Đồng hồ mẫu 01</a></h5>
                                <p>
                                    <span class="gia">12.000.000 VND</span>
                                    <span class="giakm">11.000.000 VND</span>
                                 </p>   
                    </div>
                    <!----- END: box2-2  ------>
                    
                </div>
                <!----- END: box2  ------>
                
                <!----- BEGIN: box2  ------>
                <div id="box2">
                    <!----- BEGIN: box2-1  ------>
                    <div id="box2-1" >
                        <a href="#"><img src="pages/images/pro-ft3.jpg" ></a>
                        <div class="cart" >
                            <a href="#"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>                               
                        </div>
                        <div class="cart" >
                            <a href="#"><i class="fa fa-cart-plus" style="font-size:24px"></i></a>
                        </div>
                        <div class="seo" >
                            <span>-8,3%</span>
                        </div>
                    </div>
                    <!----- END: box2-1  ------>
                    
                    <!----- BEGIN: box2-2  ------>
                    <div id="box2-2">                               
                                <h5><a href="#">Đồng hồ mẫu 01</a></h5>
                                <p>
                                    <span class="gia">12.000.000 VND</span>
                                    <span class="giakm">11.000.000 VND</span>
                                 </p>   
                    </div>
                    <!----- END: box2-2  ------>
                    
                </div>
                <!----- END: box2  ------>
                
                <!----- BEGIN: box2  ------>
                <div id="box2">
                    <!----- BEGIN: box2-1  ------>
                    <div id="box2-1" >
                        <a href="#"><img src="pages/images/pro-ft4.jpg" ></a>
                        <div class="cart" >
                            <a href="#"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>                               
                        </div>
                        <div class="cart" >
                            <a href="#"><i class="fa fa-cart-plus" style="font-size:24px"></i></a>
                        </div>
                        <div class="seo" >
                            <span>-8,3%</span>
                        </div>
                    </div>
                    <!----- END: box2-1  ------>
                    
                    <!----- BEGIN: box2-2  ------>
                    <div id="box2-2">                               
                                <h5><a href="#">Đồng hồ mẫu 01</a></h5>
                                <p>
                                    <span class="gia">12.000.000 VND</span>
                                    <span class="giakm">11.000.000 VND</span>
                                 </p>   
                    </div>
                    <!----- END: box2-2  ------>
                    
                </div>
                <!----- END: box2  ------>
                    
            </div>
            <!----- BEGIN: boxproduct  ------>

        </div>
    <!----- BEGIN: PRODUCT COMMONT ------>
    
    
    <!---------------- BEGIN: INTRO ------------------->
    <div id="newsintro">
    <!------ BEGIN: box3-1 ----->
    <div id="box3-1">
        
            <!------ BEGIN: box3 ----->
            <div id="box3">
                <div id="image1">
                    <i class="fa fa-automobile" style="font-size:50px;color:white"></i>
                </div>
                <div id="content">
                    <h5>Giao hàng miễn phí</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                </div>
            </div>
            <!------ END: box3 ----->
            
            <!------ BEGIN: box3 ----->
            <div id="box3">
                <div id="image1">
                    <i class="fa fa-shopping-basket" style="font-size:50px;color:white"></i>
                </div>
                <div id="content">
                    <h5>Giao hàng miễn phí</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                </div>
            </div>
            <!------ END: box3 ----->
            
            <!------ BEGIN: box3 ----->
            <div id="box3">
                <div id="image1">
                    <i class="fa fa-shopping-bag" style="font-size:50px;color:white"></i>
                </div>
                <div id="content">
                    <h5>Giao hàng miễn phí</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                </div>
            </div>
            <!------ END: box3 ----->
            
            
            
            
     </div>
     <!------ END: box3-1 -----> 
        
    </div>
    <!---------------- END: INTRO ------------------->
    
    
    <!----- BEGIN: PRODUCT COMMONT ------>
        <div id="productcommont">
            
            <!----- BEGIN: titleproductcommont  ------>
            <div id="titleproductcommont">
                <h5><span>ĐỒNG HỒ ARIES GOLD</span></h5>
                
            </div>
            <!----- BEGIN: titleproductcommont  ------>
            
             <!----- BEGIN: boxproduct  ------>
            <div id="boxproduct">
            
                <!----- BEGIN: box2  ------>
                <div id="box2">
                    <!----- BEGIN: box2-1  ------>
                    <div id="box2-1" >
                        <a href="#"><img src="pages/images/pro-ft1.jpg" ></a>
                        <div class="cart" >
                            <a href="#"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>                               
                        </div>
                        <div class="cart" >
                            <a href="#"><i class="fa fa-cart-plus" style="font-size:24px"></i></a>
                        </div>
                        <div class="seo" >
                            <span>-8,3%</span>
                        </div>
                    </div>
                    <!----- END: box2-1  ------>
                    
                    <!----- BEGIN: box2-2  ------>
                    <div id="box2-2">                               
                                <h5><a href="#">Đồng hồ mẫu 01</a></h5>
                                <p>
                                    <span class="gia">12.000.000 VND</span>
                                    <span class="giakm">11.000.000 VND</span>
                                 </p>   
                    </div>
                    <!----- END: box2-2  ------>
                    
                </div>
                <!----- END: box2  ------>
                
                <!----- BEGIN: box2  ------>
                <div id="box2">
                    <!----- BEGIN: box2-1  ------>
                    <div id="box2-1" >
                        <a href="#"><img src="pages/images/pro-ft2.jpg" ></a>
                        <div class="cart" >
                            <a href="#"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>                               
                        </div>
                        <div class="cart" >
                            <a href="#"><i class="fa fa-cart-plus" style="font-size:24px"></i></a>
                        </div>
                        <div class="seo" >
                            <span>-8,3%</span>
                        </div>
                    </div>
                    <!----- END: box2-1  ------>
                    
                    <!----- BEGIN: box2-2  ------>
                    <div id="box2-2">                               
                                <h5><a href="#">Đồng hồ mẫu 01</a></h5>
                                <p>
                                    <span class="gia">12.000.000 VND</span>
                                    <span class="giakm">11.000.000 VND</span>
                                 </p>   
                    </div>
                    <!----- END: box2-2  ------>
                    
                </div>
                <!----- END: box2  ------>
                
                <!----- BEGIN: box2  ------>
                <div id="box2">
                    <!----- BEGIN: box2-1  ------>
                    <div id="box2-1" >
                        <a href="#"><img src="pages/images/pro-ft3.jpg" ></a>
                        <div class="cart" >
                            <a href="#"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>                               
                        </div>
                        <div class="cart" >
                            <a href="#"><i class="fa fa-cart-plus" style="font-size:24px"></i></a>
                        </div>
                        <div class="seo" >
                            <span>-8,3%</span>
                        </div>
                    </div>
                    <!----- END: box2-1  ------>
                    
                    <!----- BEGIN: box2-2  ------>
                    <div id="box2-2">                               
                                <h5><a href="#">Đồng hồ mẫu 01</a></h5>
                                <p>
                                    <span class="gia">12.000.000 VND</span>
                                    <span class="giakm">11.000.000 VND</span>
                                 </p>   
                    </div>
                    <!----- END: box2-2  ------>
                    
                </div>
                <!----- END: box2  ------>
                
                <!----- BEGIN: box2  ------>
                <div id="box2">
                    <!----- BEGIN: box2-1  ------>
                    <div id="box2-1" >
                        <a href="#"><img src="pages/images/pro-ft4.jpg" ></a>
                        <div class="cart" >
                            <a href="#"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>                               
                        </div>
                        <div class="cart" >
                            <a href="#"><i class="fa fa-cart-plus" style="font-size:24px"></i></a>
                        </div>
                        <div class="seo" >
                            <span>-8,3%</span>
                        </div>
                    </div>
                    <!----- END: box2-1  ------>
                    
                    <!----- BEGIN: box2-2  ------>
                    <div id="box2-2">                               
                                <h5><a href="#">Đồng hồ mẫu 01</a></h5>
                                <p>
                                    <span class="gia">12.000.000 VND</span>
                                    <span class="giakm">11.000.000 VND</span>
                                 </p>   
                    </div>
                    <!----- END: box2-2  ------>
                    
                </div>
                <!----- END: box2  ------>
                    
            </div>
            <!----- BEGIN: boxproduct  ------>

        </div>
    <!----- BEGIN: PRODUCT COMMONT ------>
    
    
    
    
    <!----- BEGIN: PRODUCT COMMONT ------>
        <div id="news">
            
            <!----- BEGIN: titleproductcommont  ------>
            <div id="title2">
                <h5><span>Tin tức mới nhất</span></h5>
            </div>
            <!----- END: titleproductcommont  ------>
            
            <!----- BEGIN: box4  ------>
            <div id="box4">
            
                <!----- BEGIN: box4-1  ------>
                <div id="box4-1">
                    <img src="pages/images/new1-300x237.jpg">
                    <h5><a href="#">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT</a></h5>
                    <span>Ngày 01 - 09 - 2017</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                    
                </div>
                <!----- END: box4-1  ------>
                
                <!----- BEGIN: box4-1  ------>
                <div id="box4-1">
                    <img src="pages/images/new2-300x237.jpg">
                    <h5><a href="#">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT</a></h5>
                    <span>Ngày 01 - 09 - 2017</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                    
                </div>
                <!----- END: box4-1  ------>
                
                <!----- BEGIN: box4-1  ------>
                <div id="box4-1">
                    <img src="pages/images/new3-300x237.jpg">
                    <h5><a href="#">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT</a></h5>
                    <span>Ngày 01 - 09 - 2017</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                    
                </div>
                <!----- END: box4-1  ------>
                
                <!----- BEGIN: box4-1  ------>
                <div id="box4-1">
                    <img src="pages/images/new4-300x237.jpg">
                    <h5><a href="#">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT</a></h5>
                    <span>Ngày 01 - 09 - 2017</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                    
                </div>
                <!----- END: box4-1  ------>
                
            </div>
            <!----- END: box4  ------>
            
            
              
        </div>
    <!----- BEGIN: PRODUCT COMMONT ------>
    
     <!----- BEGIN: FOOTER  ------>
     
     <div id="footer">

        <!----- BEGIN: footer1 ------>
        <div id="footer1">
            <img src="pages/images/bg-sendmail.png" alt="">
            <div id="footer1-1" style="background:white;">
            <p class="textemail" id="text-email">Gửi email cho chúng tôi để được tư vấn!</p>
            </div>
            <div id="footer1-2">
            <form action="" class="input7">
                <input class="input8" placeholder="Nhập địa chỉ email" type="text"><input class="input9" value="Gửi" type="submit">
            </form>
            </div>
        </div>
        <!----- END: footer1 ------>

        <!----- BEGIN: footer2 ------>
        <div id="footer2">
            <div id="footer2-1">
                <div class="box6" id="footer-contact">
                    <h4 class="title1" id="contact">LIÊN HỆ</h4>
                    <p class="gach-ngang">&nbsp;</p>
                    <br>
                    <ul>
                        <li>
                            <i class="fa fa-map-marker" style="padding-right: 13px;" aria-hidden="true"></i>
                            <span>534 Núi Thành - Hải Châu - Tp Đà Nẵng</span>
                        </li>
                        <li>
                            <i class="fa fa-envelope" style="padding-right: 13px;" aria-hidden="true"></i>
                            <span>truongduyduc95@gmail.com</span>
                        </li>
                        <li>
                            <i class="fa fa-phone" style="padding-right: 13px;" aria-hidden="true"></i>
                            <span>0393.103.755</span>
                        </li>
                        <li>
                            <ul id="footer-social">
                                <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                                <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                                <li><i class="fa fa-skype" aria-hidden="true"></i></li>
                                <li><i class="fa fa-google-plus" aria-hidden="true"></i></li>
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="box6" id="footer-service">
                    <h4 class="title1" id="service">DỊCH VỤ</h4>
                    <p class="gach-ngang">&nbsp;</p>
                    <br>
                    <ul class="footer2-type">
                        <li><a href="#">Mua</a> </li>
                        <li><a href="#">Bán</a> </li>
                        <li><a href="#">Thanh toán</a> </li>
                        <li><a href="#">Ship hàng</a> </li>
                        <li><a href="#">Đổi trả</a> </li>
                    </ul>
                </div>
                <div class="box6" id="footer-support">
                    <h4 class="title1" id="service">HỔ TRỢ</h4>
                    <p class="gach-ngang">&nbsp;</p>
                    <br>
                    <ul class="footer2-type1">
                        <li><a href="#">Chính sách và điều khoản</a></li>
                        <li><a href="#">Thủ tục đăng ký</a></li>
                        <li><a href="#">Hỗ trợ khách hàng</a></li>
                    </ul>
                </div>
                <div class="box6" id="footer-link">
                    <h4 class="title1" id="link">LIÊN KẾT</h4>
                    <p class="gach-ngang">&nbsp;</p>
                    <br>
                    <ul class="footer2-type2">
                        <li><a href="?act=home">Trang chủ</a></li>
                        <li><a href="?act=about">Giới thiệu</a></li>
                        <li><a href="?act=services">Dịch vụ</a></li><a href="?act=services">
                        </a><li><a href="?act=services"></a><a href="?act=quotes">Báo giá</a></li>
                        <li><a href="?act=news">Tin tức -  Liên hệ</a></li>
                        <li><a href="?act=contact">Liên hệ</a></li>             
                    </ul>
                </div>      
            </div>
            <div id="footer2-2">
            Coppy Right: Truong Duy Duc
            </div>  
        </div>
        <!----- END: footer2 ------>

    </div>
      <!----- BEGIN: FOOTER  ------>
</div>
<!----- BEGIN: wrapper ------>
@endsection