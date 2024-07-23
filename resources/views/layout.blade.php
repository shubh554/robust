<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="Assests/favicon.png" type="image/x-icon">

  <!-- Poppins Font from Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Font Awesome and Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom Stylesheets -->
  <link rel="stylesheet" href="{{asset('Style/main.css')}}">
  <link rel="stylesheet" href="{{asset('Style/Products.css')}}">
  <link rel="stylesheet" href="{{asset('Style/style.css')}}">
  <link rel="stylesheet" href="{{asset('Style/Responsive.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <title>Robust</title>
</head>



<body onload="removeLoader();">
 


  <header>

    <!-- navbar start -->
   
    <div class="div-main">
      <div class="top-nav-main-container">
        <div class="top-nav hide-resp f13 poppins-medium">
          <div class="d-flex align-items-center">
            <i class="d-flex g5 fa fa-phone pr-3">
              <p class="poppins-medium">+91 7778926169</p>
            </i>
            {{-- <div class="dropdown">
              <span>What We Offer <i class="fa fa-chevron-down"></i></span>
              <div class="dropdown-content">
                <!-- <a href="what-we-huge.html"> -->
                <a href="#">
                  <p> <span>Robust bulk order -</span>
                    Easily shop our curated selection
                    of the highest quality swag.
                  </p>
                </a>
                <p> <span>Robust bulk order -</span> Easily shop our curated selection of the highest quality swag.</p>
                <p> <span>Robust bulk order -</span> Easily shop our curated selection of the highest quality swag.</p>
                <p> <span>Robust bulk order -</span> Easily shop our curated selection of the highest quality swag.</p>
              </div>
            </div> --}}
          </div>
          <div class="top-nav-right-container">
            <div class="serach-top">
              <i class="fa fa-search">
                <input type="search" placeholder="Search by product name or type">
              </i>
            </div>
  
            <div class="signup">
               <a href='#'>
                <p>
                  Signup
                </p>
                <p>
                  Login
                </p>
              </a>
            </div>
            
            {{-- <div class="cart f24">
              <a href='cart.html' style='color: white;'>
                <i class="fa fa-shopping-cart">
                </i>
              </a>
            </div> --}}
          </div>
        </div>
      </div>
      <div class="nav-main">
        <nav>
          <div class="logo">
            <a href='index.html'>
              <img src="Assests/logo2.png" alt="">
            </a>
          </div>
          <div class="links hide-resp">
            <ul class="d-flex align-items-center f13 poppins-semibold ">
              <!-- <a href='products.html'> -->
              <!--  <li>All Robust</li>-->
              <!--</a>-->
              <!--<li>-->
              <!--  <div class="dropdown">-->
              <!--    <p class=" dropdown-toggle mb-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"-->
              <!--      aria-expanded="false">-->
              <!--      Brands-->
              <!--    </p>-->
              <!--    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">-->
              <!--      <div class="d-flex" style="font-size:13px;">-->
              <!--        @foreach($brands as $row)-->
              <!--        <a class="dropdown-item" href="#">{{$row->brand_name}}</a>-->
              <!--        @endforeach-->
              <!--      </div>-->
  
              <!--    </div>-->
              <!--  </div>-->
              <!--</li>-->
              <li>
                <div class="dropdown">
                  <p class=" dropdown-toggle mb-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Apparel
                  </p>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="d-flex" style="font-size:13px;">
                      <a class="dropdown-item" href="category/12/24">T Shirts</a>
                      <a class="dropdown-item" href="category/12/25">Hats</a>
                      <a class="dropdown-item" href="category/12/26">Footwear</a>
                      <a class="dropdown-item" href="category/15/27">Sweatshirts</a>
                      <a class="dropdown-item" href="category/15/28">Outwear</a>
                    </div>
  
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <p class=" dropdown-toggle mb-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Office
                  </p>
                  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <div class="d-flex" style="font-size:13px;">
                      <a class="dropdown-item" href="category/11/29">Desk Accessories</a>
                      <a class="dropdown-item" href="category/11/30">Notebooks</a>
                      <a class="dropdown-item" href="category/15/31">Pens</a>
                    </div>
  
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <p class=" dropdown-toggle mb-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Drinkware
                  </p>
                  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <div class="d-flex" style="font-size:13px;">
                      <a class="dropdown-item" href="category/15/20">Water Bottles</a>
                      <a class="dropdown-item" href="category/15/21">Mugs</a>
                      <a class="dropdown-item" href="category/15/22">Tumblers</a>
                      <a class="dropdown-item" href="category/15/23">Glassware</a>
                   </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <p class=" dropdown-toggle mb-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Bags
                  </p>
                  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <div class="d-flex" style="font-size:13px;">
                      <a class="dropdown-item" href="#">Totes</a>
                      <a class="dropdown-item" href="#">Backpacks</a>
                      <a class="dropdown-item" href="#">Pouches</a>
                    </div>
  
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <p class=" dropdown-toggle mb-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Tech
                  </p>
                  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <div class="d-flex" style="font-size:13px;">
                      <a class="dropdown-item" href="#">Tech Accessories</a>
                      <a class="dropdown-item" href="#">Chargers</a>
                      <a class="dropdown-item" href="#">Audio</a>
                    </div>
  
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <p class=" dropdown-toggle mb-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Wellness
                  </p>
                  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <div class="d-flex" style="font-size:13px;">
                      <a class="dropdown-item" href="#">Self Care</a>
                      <a class="dropdown-item" href="#">Fitness & Recreation</a>
                      <a class="dropdown-item" href="#">Camping & Outdoors</a>
                    </div>
  
                  </div>
                </div>
              </li>
              <a href='category/17/0'> 
                <li>Eco Friendly</li>
              </a>
            </ul>
          </div>
          <div>
          <div class="hamburger webhide" id="hamburger">
              <i class="fa fa-bars"></i>
           </div>
          <div class="links open-ham webhide">
            <ul class="d-flex align-items-center f13 poppins-semibold ">
              <!-- <a href='products.html'> -->
              <!--  <li>All Robust</li>-->
              <!--</a>-->
              <!--<li>-->
              <!--  <div class="dropdown">-->
              <!--    <p class=" dropdown-toggle mb-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"-->
              <!--      aria-expanded="false">-->
              <!--      Brands-->
              <!--    </p>-->
              <!--    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">-->
              <!--      <div class="d-flex" style="font-size:13px;">-->
              <!--        @foreach($brands as $row)-->
              <!--        <a class="dropdown-item" href="#">{{$row->brand_name}}</a>-->
              <!--        @endforeach-->
              <!--      </div>-->
  
              <!--    </div>-->
              <!--  </div>-->
              <!--</li>-->
              <li>
                <div class="dropdown">
                  <p class=" dropdown-toggle mb-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Apparel
                  </p>
                  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <div class="d-flex" style="font-size:13px;">
                      <a class="dropdown-item" href="category/12/24">T Shirts</a>
                      <a class="dropdown-item" href="category/12/25">Hats</a>
                      <a class="dropdown-item" href="category/12/26">Footwear</a>
                      <a class="dropdown-item" href="category/15/27">Sweatshirts</a>
                      <a class="dropdown-item" href="category/15/28">Outwear</a>


                    </div>
  
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <p class=" dropdown-toggle mb-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Office
                  </p>
                  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <div class="d-flex" style="font-size:13px;">
                      <a class="dropdown-item" href="category/11/29">Desk Accessories</a>
                      <a class="dropdown-item" href="category/11/30">Notebooks</a>
                      <a class="dropdown-item" href="category/15/31">Pens</a>
                    </div>
  
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <p class=" dropdown-toggle mb-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Drinkware
                  </p>
                  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <div class="d-flex" style="font-size:13px;">
                      <a class="dropdown-item" href="category/15/20">Water Bottles</a>
                      <a class="dropdown-item" href="category/15/21">Mugs</a>
                      <a class="dropdown-item" href="category/15/22">Tumblers</a>
                      <a class="dropdown-item" href="category/15/23">Glassware</a>
                   </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <p class=" dropdown-toggle mb-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Bags
                  </p>
                  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <div class="d-flex" style="font-size:13px;">
                      <a class="dropdown-item" href="#">Totes</a>
                      <a class="dropdown-item" href="#">Backpacks</a>
                      <a class="dropdown-item" href="#">Pouches</a>
                    </div>
  
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <p class=" dropdown-toggle mb-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Tech
                  </p>
                  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <div class="d-flex" style="font-size:13px;">
                      <a class="dropdown-item" href="#">Tech Accessories</a>
                      <a class="dropdown-item" href="#">Chargers</a>
                      <a class="dropdown-item" href="#">Audio</a>
                    </div>
  
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <p class=" dropdown-toggle mb-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Wellness
                  </p>
                  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <div class="d-flex" style="font-size:13px;">
                      <a class="dropdown-item" href="#">Self Care</a>
                      <a class="dropdown-item" href="#">Fitness & Recreation</a>
                      <a class="dropdown-item" href="#">Camping & Outdoors</a>
                    </div>
  
                  </div>
                </div>
              </li>
              <a href='products.html'> 
                <li>Eco Friendly</li>
              </a>
            </ul>
         </div>
        </div>
        </nav>
      </div>
    </div>

    @yield('content') 
    <footer class="mt-0">

        <div class="footer-content">
          <h3>Robust</h3>
          <p>Address : 302, Berry's Plaza, Above Samsung Showroom, Nr. Cow Circle, Akota, Vadodara, Gujarat - 390020
             Mobile : +91 7778926169 / +91 90152 54103
              Email : robustpromo@gmail.com
             website : www.robustpromo.com</p>
          <ul class="socials">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
          </ul>
        </div>
        <div class="footer-bottom">
          <p style="text-align: center;">Copyright &copy <span id="year"></span> <a href="#">@Robust</a> </p>
      </footer>
    
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="Script/main.js">
    </script>
    <script>
      document.getElementById('hamburger').addEventListener('click', function() {
        document.querySelector('.open-ham').classList.toggle('show');
      });
    </script>
    
    
    
    <script src="Script/slidercustom.js"></script>
    </body>
    
    
    
    </html>