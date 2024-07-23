<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

  <title>Product Details</title>
  <link rel="stylesheet" href="{{asset('Style/ProductsEdit.css')}}">
  <link rel="stylesheet" href="{{asset('Style/style.css')}}">
  <!-- <link rel="stylesheet" href="Style/main.css"> -->
  <link rel="stylesheet" href="{{asset('Style/Products.css')}}">
  <link rel="stylesheet" href="{{asset('Style/Responsive.css')}}">

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

  <!--  -->
  <div class="cart-details-main-container d-flex ">
    <div class="container w-50">
      <!-- Full-width images with number text -->
      
      <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <div class="myslide-inner-img">
          <img src="https://shubhangverma.com/robust/image/{{$product['image'][0]}}" style="width:100%">
        </div>
      </div>

      <!-- Next and previous buttons -->
      {{-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a> --}}

      <!-- Image text -->
      <div class="m-5">

      </div>

      <!-- Thumbnail images -->
      {{-- <div class="row">

        <div class="column">
          <img class=" cursor" src="Assests/mokup.png" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
        </div>
        <div class="column">
          <img class=" cursor" src="Assests/mokup1.png" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
        </div>
        <div class="column">
          <img class=" cursor" src="Assests/mokup2.png" style="width:100%" onclick="currentSlide(3)"
            alt="Mountains and fjords">
        </div>
        <div class="column">
          <img class=" cursor" src="Assests/mokup.png" style="width:100%" onclick="currentSlide(4)"
            alt="Northern Lights">
        </div>
        <div class="column">
          <img class=" cursor" src="Assests/mokup2.png" style="width:100%" style="width:100%" onclick="currentSlide(5)"
            alt="Nature and sunrise">
        </div>
        <div class="column">
          <img class=" cursor" src="Assests/mokup.png" style="width:100%" onclick="currentSlide(6)"
            alt="Snowy Mountains">
        </div>
      </div> --}}
    </div>
    <div class=" Product-editor  w-50 p-3 ">
      <div class=" edit-container-info-section d-flex justify-content-between align-items-center">
        <div class="m-4" style="width: 80%;">
          <h2 class="cart-details-heading">{{$product['name']}}</h2>
          <h3>Price : INR {{$product['price']}} to {{intval($product['price_to'])}} </h3>
          <p class="cart-details-text">{{$product['description']}}</p>
          </p>
        </div>
        <div class="btn-sep-cart-details">
          <button class="btn bg-pink">
            Enquire
          </button>
          
        </div>
      </div>
      <!-- pop up section start -->
      <div id="myDIV" style="display:none;">
        <svg onclick="myFunction()" class="pop-up-btn" viewBox="2 2 20 20"
          style="display: inline-block; color: rgba(0, 0, 0, 0.87); fill: rgb(255, 255, 255); height: 24px; width: 24px; user-select: none; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; top: -9px; left: -10px;">
          <path
            d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
          </path>
        </svg>
        <h3 class="mb-5">Instant quote</h3>
        <form action="/action_page.php">
          <label for="quantity">Quantity (between 1 and 5):</label>
          <input type="number" id="quantity" name="quantity" min="1" max="5">
          <hr />
          <label for="quantity">Quantity (between 1 and 5):</label>
          <input type="number" id="quantity" name="quantity" min="1" max="5">
          <hr />
          <label for="quantity">Quantity (between 1 and 5):</label>
          <input type="number" id="quantity" name="quantity" min="1" max="5">
          <hr />
          <button class="btttn-pop">Submit</button>
        </form>
      </div>
      <!-- pop up section end -->

      <hr>
      <div class="choose-color-container  m-4">
        <h5 class="">
          {{-- <span class="product-step">1</span>&nbsp; --}}
          <span class="product-caption"><b>Available Colors</b></span>
        </h5>
        <div class="color-select d-flex pt-3 pl-4">
        
            @foreach($product['color'] as $color)
            <button class="circle-border">
            <div class="circle" style="background-color:{{$color}};">
            </div>
          </button>
          @endforeach
        

        </div>
      </div>
      <hr>
      {{-- <div class=" offer-card uplaod-img-section m-4">
        <h5 class="">
          <span class="product-step"><b>2</b></span>&nbsp;
          <span class="product-caption"><b>Available offers</b></span>
        </h5>
        <ul>
          <li>Bank OfferGet ₹50 instant discount on first UPI txn on order of ₹200 and aboveT&C </li>

          <li> Bank Offer5% Cashback on Axis Bank CardT&C </li>

          <li> Bank Offer10% off up to ₹1,250 on HDFC Bank Credit Card EMI Txns, Tenure: 6 and 9 months, Min Txn Value:
            ₹7500T&C </li>

          <li> Special PriceGet extra 10% off (price inclusive of cashback/coupon)T&C</li>
        </ul>
      </div> --}}


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
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
      </ul>
    </div>
    <div class="footer-bottom">
      <p>Copyright &copy <span id="year"></span> <a href="#">@Robust</a> </p>
  </footer>




  <!-- footer end -->




</body>

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
<script>
  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
  }
</script>

<script>
  function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
</script>

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
<script>
    document.getElementById('hamburger').addEventListener('click', function() {
      document.querySelector('.open-ham').classList.toggle('show');
    });
  </script>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js"></script>

</html>