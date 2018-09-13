
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TM Apprentice Assignment</title>

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
                    <li><a href="#HOME">Home</a></li>
                    <li><a href="#PRODUCTS">Products</a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                  </ul>
                </div>
              </div>
            </nav> 

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="home_text">
                            <h2>Our Clothing , Your Comfort</h2>
                            <p>We understand that you need to look good and feel great. <br>It all starts with what you're wearing. </p>                       
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="scroll_down">
                        <a href="#"><img src="{{ URL::asset('images/mouse_click.png') }}" alt=""></i></a>
                        </div>
                    </div>
                </div>
            </div>      
    </header>


    <section class="gender">
        <div class="container">
            <div class="row">
                <div class="pull-left ckbox">
                    <input type="checkbox" id="men">
                    <label for="men"><span class="black-text text-darken-2">Men</span></label>
                    <input type="checkbox" id="women">
                    <label for="women"><span class="black-text text-darken-2">Women</span></label>
                    <input type="checkbox" id="children">
                    <label for="children"><span class="black-text text-darken-2">Children</span></label>
                </div>
                <div class="pull-right">
                    <button class="btn btn-products">SEE ALL PRODUCTS</button>
                </div>
            </div>
        </div>
    </section>

    <section class="products">
        <div class="container">
            <div class="row">
                <h5 class="men"><span>MEN</span></h5>
            </div>
            <div class=row>
                <div class="col-md-4 mt45">
                    <div class="yolomy-product active">
                        <div class="row pl15"> <h5 class="pull-left">SIZE&nbsp;<i class="fa fa-chevron-down"></i></h5></div>
                        <div class="row">
                            <img class="img-fluid" src="{{ URL::asset('images/products/tshirt.png') }}" alt="">                            
                        </div>
                        <div class="row pl15 pr15 mt25">                            
                            <h5 class="pull-left type">T-SHIRT</h5>
                            <h5 class="pull-right amount">5,00 &euro;</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt45">
                    <div class="yolomy-product">
                        <div class="row pl15"> <h5 class="pull-left">SIZE&nbsp;<i class="fa fa-chevron-down"></i></h5></div>
                        <div class="row">
                            <img class="img-fluid" src="{{ URL::asset('images/products/pants.png') }}" alt="">                            
                        </div>
                        <div class="row pl15 pr15 mt25">                            
                            <h5 class="pull-left type">PANTS FORCLAZ</h5>
                            <h5 class="pull-right amount">30,00 &euro;</h5>
                        </div>
                    </div>
                </div><div class="col-md-4 mt45">
                    <div class="yolomy-product">
                        <div class="row pl15"> <h5 class="pull-left">10LITRI</h5></div>
                        <div class="row">
                            <img class="img-fluid" src="{{ URL::asset('images/products/backpack.png') }}" alt="">                            
                        </div>
                        <div class="row pl15 pr15 mt25">                            
                            <h5 class="pull-left type">BACKPACK</h5>
                            <h5 class="pull-right amount">60,00 &euro;</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h5 class="men"><span>WOMEN</span></h5>
            </div>
            <div class=row>
                <div class="col-md-4 mt45">
                    <div class="yolomy-product">
                        <div class="row pl15"> <h5 class="pull-left">SIZE&nbsp;<i class="fa fa-chevron-down"></i></h5></div>
                        <div class="row">
                            <img class="img-fluid" src="{{ URL::asset('images/products/giacket.png') }}" alt="">                            
                        </div>
                        <div class="row pl15 pr15 mt25">                            
                            <h5 class="pull-left type">GIACKET</h5>
                            <h5 class="pull-right amount">60,00 &euro;</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt45">
                    <div class="yolomy-product">
                        <div class="row pl15"> <h5 class="pull-left">SIZE&nbsp;<i class="fa fa-chevron-down"></i></h5></div>
                        <div class="row">
                            <img class="img-fluid" src="{{ URL::asset('images/products/trekkingshoes.png') }}" alt="">                            
                        </div>
                        <div class="row pl15 pr15 mt25">                            
                            <h5 class="pull-left type">TREKKING SHOES</h5>
                            <h5 class="pull-right amount">80,00 &euro;</h5>
                        </div>
                    </div>
                </div><div class="col-md-4 mt45">
                    <div class="yolomy-product">
                        <div class="row pl15"> <h5 class="pull-left">10LITRI</h5></div>
                        <div class="row">
                            <img class="img-fluid" src="{{ URL::asset('images/products/tshirt_ladies.png') }}" alt="">                            
                        </div>
                        <div class="row pl15 pr15 mt25">                            
                            <h5 class="pull-left type">T-SHIRT</h5>
                            <h5 class="pull-right amount">20,00 &euro;</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

















    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>




</body>

</html>