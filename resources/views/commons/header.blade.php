<style>
  
  .carousel-inner img {
      
      width: 100%;
      height: 40px;
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  
  </style>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner" role="listbox">
      <div class="item active">
         <img src="{{ secure_asset('header1.jpg') }}"length = 50 , width = 100>
        <div class="carousel-caption">
          <h3>???</h3>
          <p>????</p>
        </div>      
      </div>

      <div class="item">
        <img src="{{ secure_asset('header2.jpg') }}"length = 100 , width = 100>
        <div class="carousel-caption">
          <h3>???</h3>
          <p>???</p>
        </div>      
      </div>
    
      <div class="item">
         <img src="{{ secure_asset('header3.jpg') }}"length = 100 , width = 100>
        <div class="carousel-caption">
          <h3>???</h3>
          <p>???</p>
        </div>      
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
