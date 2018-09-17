
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
                    <li><a href="{{ url('/logout') }}">Log Out</a></li>
                    <li><a href="{{ url('/shopping_cart') }}"><img src="{{ URL::asset('images/logo/shop.png') }}" alt=""></a></a></li>
                  </ul>
                </div>
              </div>
            </nav>      
    </header>

    <section class="shopping-cart">
        <div class="row">
            <div class="container">
                @if (Session::has('item_removed')) 
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="fa fa-trash"></i>&ensp;{{ Session::get('item_removed') }} 
                </div>
                @endif
                <div class="col-md-4 checkout">
                    @if ($item_count > 0) 
                         <h1 class="title">Shopping cart has {!! $item_count !!} item(s)</h1>
                        <p class="no-item">You have added {!! $item_count !!} item(s) to your shopping cart.<br>Click<a href="{{ url('/#GENDER') }}"> here</a> to continue shopping</p>
                    @else
                        <h1 class="title">Shopping cart is empty</h1>
                        <p class="no-item">You have no items in your shopping cart.<br>Click<a href="{{ url('/#GENDER') }}"> here</a> to continue shopping</p>
                    @endif
                </div>
                @if ($item_count > 0) 
                <div class="col-md-5 checkout-items">
                    <div class="selected-item recent">
                        <h3>Check Out Item(s)</h3>
                        @foreach ($myItems as $item)
                        <div class="item">
                            <div class="pull-left">
                                <img class="img-cart" src="{!! $item->product_image !!}" alt="">
                            </div>
                            <div class="item-body">
                                <h4>{!! $item->product_name !!} <br> {!! $item->product_amount !!}</h4>
                                <p>Order placed on {!! date('F jS, Y', strtotime($item->purchase_date)); !!}</p>
                                <a href="/remove_item/{!! $item->product_id !!}" class="error" href="">Remove Item</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a href="" class="btn btn-xs btn-block btn-shopping">Proceed to Checkout</a>
                </div>
                <div class="col-md-3">
                    <div class="total-amount">
                        <h3>{!! $total !!}, 00 &euro;</h3>
                        <p>Total Amount</p>
                    </div>
                </div>
                @endif
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