
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yolomy Online Fashion</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:100,200,300,400,600,700,900,200italic,300italic,400italic|Merriweather:300,400,300italic">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
</head>

<body>
    <header>
            <nav class="navbar navbar-transparent">
              <div class="container">
                <div class="navbar-header">
                  <a class="navbar-logo" href="#">Yolomy</a>
                </div>

                <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/#GENDER') }}">Products</a></li>
                    <li><a href="{{ url('/shopping_cart') }}"><img src="{{ URL::asset('images/logo/shop.png') }}" alt=""></a></a></li>
                  </ul>
                </div>
              </div>
            </nav>      
    </header>

    @if (Session::has('client_added')) 
    <div class="alert alert-success no-border-radius" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <i class="fa fa-exclamation-triangle"></i>&ensp;{{ Session::get('client_added') }} 
    </div>
    @endif

    <section class="login">
    	<div class="container"> 
    		<div class="register">
    			<div class="col-md-6 login-right">
    				<h3>REGISTERED CUSTOMERS</h3>
    				<p>If you have an account with us, please log in.</p>
    				<form role="form" method="post" action="{{ url('/login/authenticate') }}" enctype="multipart/form-data" >
    					{{ csrf_field() }}
    					<div>
    						<span>Email Address<label>*</label></span>
    						<input type="text" name="email" autocomplete="off"> 
    						@if ($errors->has('email')) <div class="error">{{ $errors->first('email') }}</div> @endif
    					</div>
    					<div>
    						<span>Password<label>*</label></span>
    						<input type="password" name="password" autocomplete="off"> 
    						@if ($errors->has('password')) <div class="error">{{ $errors->first('password') }}</div> @endif
    					</div>
    					<a class="forgot" href="#">Forgot Your Password?</a>
    					<input type="submit" value="Login">
    					@if (Session::has('failed_login')) <div class="error" >{{ Session::get('failed_login') }}</div> @endif
    				</form>
    			</div>
    			<div class="col-md-6 login-left">
    				<h3>NEW CUSTOMERS</h3>
    				<p>By creating an account with our store, you will be able to move through the checkout process faster, view and track your orders in your account and more.</p>
    				<a class="acount-btn" href="{{ url('/register') }}">Create an Account</a>
    			</div>	
    			<div class="clearfix"> </div>
    		</div>
    	</div>
    </section> 


    
    <footer>
	    <div class="container">
	    	<div class="row">
		        <div class="col-md-4 brief">
		            <h4>YOLOMY</h4>
		            <p class="uppercase">We are Yolomy - we understand <br>fashion and style. We craft out <br>products with love and diligence.</p>
		        </div>
		        <div class="col-md-4 social">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <div class="social">
		                        <h4 class="mb25">We are Social</h4>
		                        <ul class="icon_list">
		                            <li><img src="{{ URL::asset('images/social_icons/g_plus.png') }}"></li>
		                            <li><img src="{{ URL::asset('images/social_icons/facebook.png') }}"></li>
		                            <li><img src="{{ URL::asset('images/social_icons/you_tube.png') }}"></li>
		                            <li><img src="{{ URL::asset('images/social_icons/flickr.png') }}"></li>
		                        </ul>
		                        <ul>
		                            <li><img src="{{ URL::asset('images/social_icons/skype.png') }}"></li>
		                            <li><img src="{{ URL::asset('images/social_icons/stumble_upon.png') }}"></li>
		                            <li><img src="{{ URL::asset('images/social_icons/twitter.png') }}"></li>
		                            <li><img src="{{ URL::asset('images/social_icons/pinterest.png') }}"></li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="col-md-4 links">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                        <p class="uppercase mb0">Credits | Privacy | About | Contact</p>
		                        <p class="fs22">Yolomy: We Mean Fashion</p>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="row">
		    	<div class="col-md-12">
			    	<div class="copyright text-center uppercase mt50">
			    		<p>Copyright 2018. yolomy inc</p>
			    	</div>		    		
		    	</div>
		    </div>
	    </div>
	</footer>



    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>




</body>

</html>