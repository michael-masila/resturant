<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    
                @foreach ($showfood as $showfood)
                    <div class="item">
                        <div style="background-image: url('/postimage/{{$showfood->image}}');" class='card card1'>
                            <div class="price"><h6>{{$showfood->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$showfood->title}}</h1>
                              <p class='description'>{{$showfood->description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                 @endforeach   
                </div>
            </div>
        </div>
    </section>