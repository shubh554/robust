@extends('layout')
@section('content')
    <section>
    <!-- body 1st element start -->
    <div class="header-body">

      <div class="left-section">
        <h1 class="poppins-black">ROBUST</h1>
        <p class="poppins-bold f14 mb-5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et
          dolore magna aliqua.</p>
          <a href='products.html'>
            <button class="btn bg-pink">
              Shop Products
              <i class="fa fa-angle-right" aria-hidden="true"></i>
            </button>
          </a>
      </div>

      <div class="right-section">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide" style="width: 283px;">
              <div>
                <h6>We Provide Something New</h6>
                <hr>
                <!-- max limit 20 word -->
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, recusandae. Sint eveniet voluptate
                  nulla fuga vitae. Nemo eaque tenetur est?</p>
              </div>
            </div>
            <div class="swiper-slide" style="width: 283px;">
              <div>
                <h6>We Provide Something New</h6>
                <hr>
                <!-- max limit 20 word -->
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, recusandae. Sint eveniet voluptate
                  nulla fuga vitae. Nemo eaque tenetur est? 123</p>
              </div>
            </div>
            <div class="swiper-slide" style="width: 283px;">
              <div>
                <h6>We Provide Something New</h6>
                <hr>
                <!-- max limit 20 word -->
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, recusandae. Sint eveniet voluptate
                  nulla fuga vitae. Nemo eaque tenetur est? </p>
              </div>
            </div>
            <div class="swiper-slide" style="width: 283px;">
              <div>
                <h6>We Provide Something New</h6>
                <hr>
                <!-- max limit 20 word -->
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, recusandae. Sint eveniet voluptate
                  nulla fuga vitae. Nemo eaque tenetur est? </p>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
    <!-- body 1st element ends -->
  </header>


  <div class="slider-container">
    <p>Trusted by 100's of companies:</p>
    <div class="slider">
       
     
        <div class="slider-inner">
            @foreach($brands as $row)
        <div class="img-container" style="margin-left: 50px">
          <img src="https://shubhangverma.com/robust/image/{{$row->image}}" style="object-fit: contain;">
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class=" bg-b ">
    <div class="we-do-main-container justify-content-around mb-0" style="padding: 40px; gap: 0;">
      <div class="d-flex justift-content-around sep-logo hide-resp">
        <div class="w-50" style="text-align: right;">
          <h4>What we do</h4>
          <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, enim!</p>
        </div>
        <div class="vertical-line">
        </div>
        <div class="d-flex flex-column align-items-center justify-content-between">
          <div class="circle">
          </div>
          <div class="incline">
          </div>
        </div>

      </div>

      <img src="Assests/RIA.png" alt="" style="width: 330px;">
    </div>
  </div>

  <!-- About Brand logo end  -->

  <div class="heading-section">
    <h2>Top Products</h2>
  </div>
  <div class="d-flex justify-content-center align-items-center">
    <section class="hexagon-gallery">
      @foreach($categories as $category)
      <div class="hex">
        <img src="https://shubhangverma.com/robust/image/{{$category->image}}" alt="">
        <div class="item-name-hex" style="background-color:#ff2c5c;">
          <p>{{$category->category_name}}</p>
          <button onclick = "window.location = 'category/{{$category->id}}/0'">Shop Now</button>
        </div>
      </div>
      @endforeach
      
   
  </div>
  </section>

  <div class="bg-c">
    <div class="we-do-main-container justify-content-around mb-0" style="padding: 40px; gap: 0;">
      <div class="d-flex justift-content-around sep-logo">
        <div style="text-align: right; width: 80%;" class="hide-resp">
          <h4 class="disstribution ">Robust Distribution</h4>
          <p class="distribution-text"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, enim!
          </p>
        </div>
      </div>

      <div class="animated animate__animate__fadeInUp___zVJAI" style="animation-duration: 0.75s;">
        <div>
          <div class="distribution__cardThirdIcons___lYECv">
            <div class="distribution__cardThirdIcon___FzDco"><img
                src="https://static.swag.com/images-webpack/dashboard.1c98dca628c600547be1..png"
                alt="Customer service excellence icon with a user silhouette and three stars">
              <p>Engage with your<br>Remote Employees</p>
            </div>
            <hr>
            <div class="distribution__cardThirdIcon___FzDco"><img
                src="https://static.swag.com/images-webpack/circle-container.5a937d6781aeca88d8f0..png"
                alt="Award ribbon icon enclosed in a dashed circular border">
              <p>Reward your best<br>customers</p>
            </div>
            <div class="distribution__cardThirdIcon___FzDco"><img
                src="https://static.swag.com/images-webpack/people.0bcb5cac12674bf9d981..png"
                alt="Icon of three interconnected people, symbolizing a team or network, enclosed within a dashed circular border">
              <p>Convert prospects<br>and leads</p>
            </div>
            <hr>
            <div class="distribution__cardThirdIcon___FzDco"><img
                src="https://static.swag.com/images-webpack/calendar.71c2436ecd6bdf38e112..png"
                alt="Calendar icon with a star marking a special date, enclosed within a dashed circular border">
              <p>Humanize online<br>events and meetings</p>
            </div>
            <hr>

          </div>
        </div>
      </div>


    </div>
  </div>
  <!-- <div class="we-do-main-container-1  ">
      <div class="we-do">
        <h1 class="mb-5">Open up to a new experience</h1>
        <p class="mb-4  lh-3 ">Create, package and ship fully custom branded boxes. Show your employees and customers
          some love !</p>
        <div class="d-flex align-items-center justify-content-start ">
           <button class="btttn-3 mr-3">
          New Products
        </button> 
          <button class="btttn-4">
            Let's Go!
          </button>
        </div>
      </div>
    </div> -->
  </div>
  <!-- brand distribution end -->

  <!-- 
Another do we what start
   -->

  <!-- <div class="we-do-main-container-1 my-5 ">
    <img src="Assests/main.gif" alt="">
    <div class="we-do">
      <h1 class="mb-5">What we do</h1>
      <p class="mb-4  lh-3 ">Build Your Own Unique Designs with Confidence</p>
      <div class="d-flex align-items-center justify-content-start ">
        <button class="btttn-3 mr-3">
          New Products
        </button>
        <button class="btttn-4">
          View All Products
        </button>
      </div>
    </div> -->
  <!-- <div >
        <img src="Assests/R1A.png" alt="">
    </div> -->
  <!-- </div> -->

  <!-- 
Another do we what end
   -->

  <!-- what we do section start -->
  <!-- what we do section end  -->

  <!-- body section start -->
  <!-- <div class="mx-auto my-5 overlay">
    <div class="products-heighlight mx-auto my-5">

      <div class="heighlight-about w-50">
        <h1>ROBUST
          BEST
          PRODUCTS</h1>
        <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ,or incididunt ut
          labore et
          dolor
          dolor</p>
        <h6>
          COPORATE GIFTING
        </h6>
        <h6>
          PROMOTIONAL MERCHANDISING
        </h6>
        <h6>
          ADVERTISING PRODUCTS
        </h6>
        <button class="btttn-2 heighlight-btn">
          SHOP THE BENEFITS
          <i class="fa fa-angle-right" aria-hidden="true"></i>
        </button>
      </div>

      <div class="heighlight-slider w-50">

        <div class="slideshow-container">

          <div class="mySlides ">
            <div class="numbertext">1 / 3</div>
            <img src="Assests/1.png" style="width:100%">
            <div class="text">Caption Text</div>
          </div>

          <div class="mySlides ">
            <div class="numbertext">2 / 3</div>
            <img src="Assests/1.png" style="width:100%">
            <div class="text">Caption Two</div>
          </div>

          <div class="mySlides ">
            <div class="numbertext">3 / 3</div>
            <img src="Assests/1.png" style="width:100%">
            <div class="text">Caption Three</div>
          </div>

          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
        <br>

  
      </div>
    </div>
  </div> -->

  <div class="new-experience-main-container">
    <div class="experience-inner">
      <img src="Assests/own-img.png" alt="">
      <div class="experience-box">
        <h1> <span> Open up</span> <br>to a new experience.</h1>
        <p>
          Create, package and ship fully custom branded boxes. Show your employees and customers some love!
        </p>
        <button class="btn bg-pink">
          Let’s Go!
        </button>
      </div>
    </div>
  </div>
  <div class="bg-d Automation">
    <div >
      <h4>Robust Automation</h4>
      <p class="distribution-text"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, enim!
      </p>
      <a href='automation.html'>
        <button>
          Find Out More
        </button>
      </a>
    </div>
  </div>
  <!-- About Brand logo start -->
  <!-- <div class="brand-about-container">
    <div class="brand-item">
      <img src="Assests/brand-1.png" alt="">
      <h5>PROMOTIONAL MERCHANDISING</h5>
      <p>Promotional merchandising involves employing promotional products to help companies and other
        organizations advertise their products and services. According to the Advertising Specialty Institute,
        more than 750,000 different products are available for use in promotional advertising campaigns and
        promotions. The arsenal of products available for promotional merchandising range from clothing items to
        functional office gifts.</p>
    </div>
    <div class="brand-item">
      <img src="Assests/brand-2.png" alt="">
      <h5>COPORATE GIFTING</h5>
      <p>Corporate gifting is a gesture of gifting valuables to clients, employees, or any other co-habitant
        within the business space. Recipients see it as an expression of gratitude, appreciation, and value.</p>
    </div>
    <div class="brand-item">
      <img src="Assests/brand-3.png" alt="">
      <h5>ADVERTISING PRODUCTS</h5>
      <p>Product advertising attempts to create a demand for a product. This includes promoting consumer awareness
        that a specific product exists and fostering their interest in the product. Product advertising also
        strives to encourage consumers to make purchase decisions quickly based on seeing a product.</p>
    </div>
  </div> -->
  @endsection
  