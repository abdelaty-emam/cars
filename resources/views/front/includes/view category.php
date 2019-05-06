@extend('front.layout.master')
@section('allocation')
<div class="grid">
    <div class="row">
      @foreach($cars as $car)
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="txthover">
          <img src="{{asset('images/'.$car->image)}}" alt="car1">
            <div class="txtcontent">
              <div class="stars">
                <div class="glyphicon glyphicon-star"></div>
                <div class="glyphicon glyphicon-star"></div>
                <div class="glyphicon glyphicon-star"></div>
              </div>
              <div class="simpletxt">
                <h3 class="name">{{$car->name}}}</h3>
                <p>{{$car->describtion}},<br>
                  {{$car->describtion}}

                 </p>
                <h4 class="price"> {{$car->price}}&euro;</h4>
                <button>READ MORE</button><br>
                <div class="wishtxt">
                  <p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
                  <p class="paragraph2">Compare <span class="icon"><img src="{{asset('Front')}}/image/compicon.png" alt="compicon"></span></p>
                </div>
              </div>
              <div class="stars2">
                <div class="glyphicon glyphicon-star"></div>
                <div class="glyphicon glyphicon-star"></div>
                <div class="glyphicon glyphicon-star"></div>
              </div>
            </div>
        </div>   
      </div>
      @endforeach
      
      
    </div>
  </div>
  @stop


