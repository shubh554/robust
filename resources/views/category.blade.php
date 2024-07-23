<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="Assests/favicon.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('Style/Products.css')}}">
  <link rel="stylesheet" href="{{asset('Style/style.css')}}">
  <link rel="stylesheet" href="{{asset('Style/Responsive.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <title>Products</title>
</head>

<body>

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
          <a href="{{url('/')}}">
            <img src="{{asset('Assests/logo2.png')}}" alt="">
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
                    <a class="dropdown-item" href="category/12/27">Sweatshirts</a>
                    <a class="dropdown-item" href="category/12/28">Outwear</a>
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
                    <a class="dropdown-item" href="{{url('category/11/29')}}">Desk Accessories</a>
                    <a class="dropdown-item" href="{{url('category/11/30')}}">Notebooks</a>
                    <a class="dropdown-item" href="{{url('category/11/31')}}">Pens</a>
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
                    <a class="dropdown-item" href="{{url('category/15/20')}}">Water Bottles</a>
                    <a class="dropdown-item" href="{{url('category/15/21')}}">Mugs</a>
                    <a class="dropdown-item" href="{{url('category/15/22')}}">Tumblers</a>
                    <a class="dropdown-item" href="{{url('category/15/23')}}">Glassware</a>
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
            <a href='{{url('category/17/0')}}'> 
              <li>Eco Friendly</li>
            </a>
            <a href="{{url('category/19/0')}}"> 
              <li>Sustainable Products</li>
            </a>
          </ul>
        </div>
        <div>
        <div class="hamburger webhide" id="hamburger">
            <i class="fa fa-bars"></i>
         </div>
        <div class="links open-ham webhide">
          <ul class="d-flex align-items-center f13 poppins-semibold ">
         
            <li>
              <div class="dropdown">
                <p class=" dropdown-toggle mb-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  Apparel
                </p>
                <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                  <div class="d-flex" style="font-size:13px;">
                    <a class="dropdown-item" href="{{url('category/12/24')}}">T Shirts</a>
                    <a class="dropdown-item" href="{{url('category/12/25')}}">Hats</a>
                    <a class="dropdown-item" href="{{url('category/12/26')}}">Footwear</a>
                    <a class="dropdown-item" href="{{url('category/12/27')}}">Sweatshirts</a>
                    <a class="dropdown-item" href="{{url('category/12/28')}}">Outwear</a>


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
                    <a class="dropdown-item" href="{{url('category/11/29')}}">Desk Accessories</a>
                    <a class="dropdown-item" href="{{url('category/11/30')}}">Notebooks</a>
                    <a class="dropdown-item" href="{{url('category/11/31')}}">Pens</a>
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
                    <a class="dropdown-item" href="{{url('category/15/20')}}">Water Bottles</a>
                    <a class="dropdown-item" href="{{url('category/15/21')}}">Mugs</a>
                    <a class="dropdown-item" href="{{url('category/15/22')}}">Tumblers</a>
                    <a class="dropdown-item" href="{{url('category/15/23')}}">Glassware</a>
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
            <a href="{{url('category/17/0')}}"> 
              <li>Eco Friendly</li>
            </a>
            <a href="{{url('category/19/0')}}"> 
              <li>Sustainable Products</li>
            </a>
          </ul>
       </div>
      </div>
      </nav>
    </div>
  </div>

  <!-- navbar end -->

  <!-- products-cardc section -->
  <div class="filter-main-product-cards-main">
   
    <div class="products-card">
       @foreach($list as $row)
      <figure class="snip1423">
        <img src="https://shubhangverma.com/robust/image/{{$row->image[0]}}" alt="sample57" style="height:200px;width:200px" />
        <figcaption>
          <h3>{{$row->name}}</i></h3>
        
          <div class="price">
            <!--<s>₹240.00</s>-->
            ₹{{$row->price}} to ₹{{intval($row->price_to)}}
          </div>
          Min Order {{$row->min_order}}
        </figcaption>
        <i class="fa fa-cart-plus"></i>
        <a href="{{url('productDetails/'.$row->id)}}"></a>
      </figure>
      @endforeach

    
    
    </div>
  </div>
  <!-- footer start-->


  <footer>

    <div class="footer-content">
      <h3>Robust</h3>
     <p>Address : 302, Berry's Plaza, Above Samsung Showroom, Nr. Cow Circle, Akota, Vadodara, Gujarat - 390020<br>
        Mobile : +91 7778926169 / +91 90152 54103<br>
         Email : robustpromo@gmail.com<br>
        website : www.robustpromo.com</p>
      <ul class="socials">
        {{-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li> --}}
      </ul>
    </div>
    <div class="footer-bottom">
      <p>Copyright &copy <span id="year"></span> <a href="#">@Robust</a> </p>
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




<script src="Script/slidercustom.js"></script>


  <!-- footer end -->

  <!-- products card section end  -->
</body>

<!-- <script>
  window.addEventListener('scroll', function () {
    var nav = document.querySelector('nav');
    if (window.scrollY > 148) {
      nav.classList.add('fixed-nav');
    } else {
      nav.classList.remove('fixed-nav');
    }
  });
</script> -->
<script src="Script/main.js">
</script>
<script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }
</script>
<script>
  document.getElementById('hamburger').addEventListener('click', function() {
    document.querySelector('.open-ham').classList.toggle('show');
  });
</script>
</html>