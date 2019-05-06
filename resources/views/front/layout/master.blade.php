	@include('front.includes.header')
<body>
<!-- Header -->
<div class="allcontain">
	<div class="header">
			<ul class="socialicon">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li>Give us a call : +66666666 </li>
			</ul>
			<ul class="logreg">
				<li><a href="#">Login </a> </li>
				<li><a href="#"><span class="register">Register</span></a></li>
			</ul>
	</div>
	<!-- Navbar Up -->
	@include('front.includes.navbar')
<!--_______________________________________ Carousel__________________________________ -->

@yield('content')


	@include('front.includes.footer')

