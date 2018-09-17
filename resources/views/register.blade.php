
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

    <section class="registration">
    		<div class="container"> 
    			<div class="register">
    				@if (Session::has('client_added')) 
				    <div class="alert alert-success" role="alert">
				        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            <span aria-hidden="true">×</span>
				        </button>
				        <i class="fa fa-user"></i>&ensp;{{ Session::get('client_added') }} <strong><a href="{{ url('/login') }}">Can now log in</a></strong>
				    </div>
				    @endif
    				<form role="form" method="post" action="{{ url('/register/new_client') }}" enctype="multipart/form-data"> 
    					{{ csrf_field() }}
    					<div class="register-top-grid">
    						<h3>PERSONAL INFORMATION</h3>
    						<div>
    							<span>First Name<label>*</label></span>
    							<input type="text" name="first_name" autocomplete="off" value="{{ old('first_name') }}"> 
    							@if ($errors->has('first_name')) <div class="error">{{ $errors->first('first_name') }}</div> @endif
    						</div>
    						<div>
    							<span>Last Name<label>*</label></span>
    							<input type="text" name="last_name" autocomplete="off" value="{{ old('last_name') }}"> 
    							@if ($errors->has('last_name')) <div class="error">{{ $errors->first('last_name') }}</div> @endif
    						</div>
    						<div>
    							<span>Email Address<label>*</label></span>
    							<input type="text" name="email" autocomplete="off" value="{{ old('email') }}"> 
    							@if ($errors->has('email')) <div class="error">{{ $errors->first('email') }}</div> @endif
    						</div>
    						<div class="clearfix"> </div>
    						<a class="news-letter" href="#">
    							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
    						</a>
    					</div>
    					<div class="register-bottom-grid">
    						<h3>LOGIN INFORMATION</h3>
    						<div>
    							<span>Password<label>*</label></span>
    							<input type="password" name="password" autocomplete="off" value="{{ old('password') }}">
    							@if ($errors->has('password')) <div class="error">{{ $errors->first('password') }}</div> @endif
    						</div>
    						<div>
    							<span>Confirm Password<label>*</label></span>
    							<input type="password" name="password_confirmation" autocomplete="off" value="{{ old('password_confirmation') }}">
    							@if ($errors->has('password_confirmation')) <div class="error">{{ $errors->first('password_confirmation') }}</div> @endif
    						</div>
    						<div class="clearfix"> </div>
    					</div>
    					<div class="clearfix"> </div>
    					<div class="register-but">
    						<input type="submit" value="submit">
    						<div class="clearfix"> </div>
    					</div>
    				</form>
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