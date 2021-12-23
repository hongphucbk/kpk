<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="v1/image/kpk.png" type="image/icon type">

    <title>KPK Digital Transformation | @yield('title')</title>
    <link rel="stylesheet" href="v1/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <script src="v1/js/action.js"></script>        
    <style>
      .banner{
        background: url(v1/image/banner.jpg);
        background-size: cover;
      }
      
    </style>
  </head>
  <body>
        <!-----------------------header-------------------------------->
        @include('page.layout.header')
        
          <script type="text/javascript">
            //jquery for toggle dropdown menus
            $(document).ready(function(){
              //toggle sub-menus
              $(".sub-btn").click(function(){
                $(this).next(".sub-menu").slideToggle();
              });
        
              //toggle more-menus
              $(".more-btn").click(function(){
                $(this).next(".more-menu").slideToggle();
              });
            });
            //javascript for the responsive navigation menu
            var menu = document.querySelector(".menu");
            var menuBtn = document.querySelector(".menu-btn");
            var closeBtn = document.querySelector(".close-btn");

            menuBtn.addEventListener("click", () => {
            menu.classList.add("active");
            });

            closeBtn.addEventListener("click", () => {
            menu.classList.remove("active");
            });
          </script>

        <section class="banner" id="home">
            <div class="content">
                <h2>KPK Digital Transformation</h2>
                <p>KPK chuyển đổi số cùng doanh nghiệp của bạn. </p>
                <a href="#about-us" class="btn hero">Read More >></a>
            </div>
        </section>
        
           
<!-------------------Product--------------------------->
        <section class="product" id="product">            
            <div class="title">
                <h2 class="titleText"><span>Products</span></h2>
                <p>ISO 9001, ISO 14001 manufacturer of single-sided, double-sided,
                    Aluminum boards, multi-layer printed circuit boards. Various
                    materials & RoHS finishes supplied (including electroless plating
                    /immersion gold, Tin plated, HASL, OSP). Additional products & 
                    services include the design, production & printed circuit board
                    assemblies. UL approved.<br> </p>
            </div>
            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <a href="#"><img src="v1/image/product1.jpg"></a>
                   </div>
                    <div class="text">
                        <h3>Product A</h3>
                        <p>Capable of automated assembly, hand insertion and soldering,
                            reflowing and wave soldering.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <a href="#"><img src="v1/image/product2.jpg"></a>
                    </div>
                    <div class="text">
                        <h3>Product B</h3>
                        <p>Additional products manufactured include PCBs with multiple
                        sequential laminations.</p>
                    </div>
                </div>
            </div>
            <div class="title">
                <a href="product.html" class="btn btn-view-all">View all</a>
            </div>
        </section>

<!--------------------Solution------------------------->
        <section class="solution" id="solution">
            <div class="title">
                <h2 class="titleText"><span>Solutions</span></h2>
                <p>We create solutions to solve your problems and make 
                    you work effectively <br> </p>
            </div>
            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <a href="#"><img src="v1/image/solution1.png"></a>
                    </div>
                    <div class="text">
                        <h3>Smart Factory</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <a href="#"><img src="v1/image/solution2.jpg"></a>
                        
                    </div>
                    <div class="text">
                        <h3>Smart Maintance</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <a href="#"><img src="v1/image/solution3.jpg"></a>
                        
                    </div>
                    <div class="text">
                        <h3>Smart Traffic</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <a href="#"><img src="image/solution4.jpg"></a>
                        
                    </div>
                    <div class="text">
                        <h3>Smart System</h3>
                    </div>
                </div>
            </div>
        </section>

<!---------------------About us-------------------------->
    <section class="about-us" id="about-us">
        <div class="title">
            <h2 class="titleText"><span>About us</span></h2>
            <p>KPK Digital Transformation is an Authorized Distributor of HMS Industrial Networks AB 
                and as well as 
                a System Integrator in providing solutions for Industrial IoT. We work closely with
                our partners to offer customers wide range of complete application solutions across 
                a diverse range of industries. Aucontech has always been striving in offering to our
                customers with high-quality, high-performance, reliable products and services. <br>

                Our mission is to help our customer deploy leading edge solutions that leverage 
                technology to improve safety, reduce costs, increase productivity as well as product
                quality.</p>
        </div>
    </section>        
    <!-------------------Our Assurance--------------------------->
            <section class="assurance" id="assurance">
                <div class="title">
                    <h2 class="titleText"><span>Our Assurance</span></h2>
                    
                </div>
                <div class="content">
                    <img src="v1/image/assurance1.jpg">
                    <img src="v1/image/assurance2.png">
                    <img src="v1/image/assurance4.jpg">
                    <img src="v1/image/assurance5.jpg">
                </div>
            </section>
    <!-------------------Customer--------------------------->
    <section class="customer">
        <div class="title">
            <h2 class="titleText"><span>Customer</span></h2>
            <p>We cooperate with many companies<br> </p>
        </div>
        <div class="slideshow">
            <div class="slide-wrapper">
            <div class="slide"><a href="#"><img src="v1/image/customer1.jpg"></a></div>
            <div class="slide"><a href="#"><img src="v1/image/customer2.png"></a></div>
            <div class="slide"><a href="#"><img src="v1/image/customer3.jpg"></a></div>
            <div class="slide"><a href="#"><img src="v1/image/customer4.jpg"></a></div>
            <div class="slide"><a href="#"><img src="v1/image/customer5.png"></a></div>
            <div class="slide"><a href="#"><img src="v1/image/customer6.jpg"></a></div>        
            </div>
        </div>
    </section>


    <!---------------------Footer--------------------------->
    <footer class="footer">
        <div class="info">
            <div class="row">
                <div class="footer-col">
                    <h4>PRODUCTS</h4>
                    <ul>
                        <li><a href="#">eBuy</a></li>
                        <li><a href="#">HighTech</a></li>
                        <li><a href="#">LiFe</a></li>
                        <li><a href="#">GoFar</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>SOLUTIONS</h4>
                    <ul>
                        <li><a href="#">Smart Factory</a></li>
                        <li><a href="#">Smart System</a></li>
                        <li><a href="#">Smart Traffic</a></li>
                        <li><a href="#">Smart Maintance</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>PROJECT</h4>
                    <ul>
                        <li><a href="#">Communication</a></li>
                        <li><a href="#">Monitering system</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>CONTACT</h4>                        
                    <div>
                        <ul>
                            <li><a href=""><i class="fas fa-home"></i>
                                449 Truong Chinh, Tan Binh District, HCM City, VN  </a>                                
                            </li>
                            <li><a href=""><i class="fas fa-envelope"></i>
                                sale@kpk.vn</a>                                
                            </li>                        
                            <li><a href=""><i class="fas fa-phone"></i>
                                094 111 2022</a>                                
                            </li>
                            <li><a href=""><i class="fas fa-phone"></i>
                                094 111 2022</a>                                
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-row">                
            <div class="copyright">
                    <h4>Copyright @ 2021 KPK.VN</h4>
            </div>
            <div class="face-in">
                <div class="face-in-icon">
                    <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                </div>
                <div class="face-in-icon">
                    <a href="#"><i class="fab fa-youtube fa-2x"></i></a>
                </div>
            </div>
        </div>
    </footer>
      
    </body>
</html>