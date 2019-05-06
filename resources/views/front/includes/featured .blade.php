<div class="feturedsection">
		<h1 class="text-center"><span class="bdots">&bullet;</span>F E A T U R E S<span class="carstxt">C A R S</span>&bullet;</h1>
	</div>
	@foreach($cars as $car)
	<div class="feturedimage">
		<div class="row firstrow">
			<div class="col-lg-6 costumcol colborder1">
				
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
						<img src="{{asset('images/'.$car->image)}}" alt="porsche">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>{{$car->name}}</h1>
							<p>"Lorem ipsum dolor sit amet, consectetur ,<br>
			 						sed do eiusmod tempor incididunt </p>
			 				<h2>price:{{$car->price}} &euro;</h2>
			 				<button id="btnRM" onclick="rmtxt()">READ MORE</button>
			 				<div id="readmore">
			 						<h1>{{$car->name}}</h1>
			 						<p>"Lorem ipsum dolor sit amet, consectetur ,<br>
			 						sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
			 						sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
			 						sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
			 						sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br>
			 						</p>
			 						<button id="btnRL">READ LESS</button>
			 				</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
		@endforeach
	</div>