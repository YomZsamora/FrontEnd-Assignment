<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YolomyController extends Controller
{
	public function home(){
		$first_name = session('first_name');
		$last_name = session('last_name');
		$first_name = ucfirst($first_name);
		$last_name = ucfirst($last_name);
		return view('index', ['first_name' => $first_name,'last_name' => $last_name,'client_id' => session('client_id'),'login_status' => session('is_logged_in')]);
	}


	public function register_client(Request $request){
		$rules = [
	        'first_name' => 'required',
	        'last_name' => 'required',
	        'email' => 'required|email',
	        'password' => 'required|confirmed|min:6',
	        'password_confirmation' => 'required|min:6'
	    ];
	    $messages = [
	        'first_name.required' => 'Your first name is needed!',
    		'last_name.required' => 'Your last name is needed!',
    		'email.required' => 'We need to know your e-mail address!',
    		'email.email' => 'Not a valid email!',
    		'password.required' => 'Must have a password!',
    		'password.confirmed' => 'Passwords dont match! Try again.',
    		'password.min:6' => 'Passwords must not be less than 6 characters!',
    		'password_confirmation.required' => 'Confirm Password!',
    		'password_confirmation.min:6' => 'Passwords must not be less than 6 characters!'
	    ];
	    $this->validate($request, $rules, $messages);

	    DB::table('clients')->insert([
			'first_name' => $request->input('first_name'), 
			'last_name' => $request->input('last_name'), 
			'email' => $request->input('email'), 
			'password' => $request->input('password'), 
		]);

		$request->session()->flash('client_added', 'You have been registered successful! You can now purchase products!');
        return redirect('/register');
	}



	public function login_client(Request $request){
		$rules = [
	        'email' => 'required',
	        'password' => 'required'
	    ];
	    $messages = [
	        'email.required' => 'Please Enter E-Mail Address!',
    		'password.required' => 'Please Enter Password!'
	    ];
	    $this->validate($request, $rules, $messages);

	    $email = $request->input('email');
        $password = $request->input('password');

        $client = DB::table('clients')->where('email',$email)->limit(1)->first();

        if ($client->email == $email && $client->password == $password)
        {
            session(['is_logged_in' => TRUE,'client_id' => $client->client_id,'first_name' => $client->first_name,'last_name' => $client->last_name,]);
            $request->session()->flash('logged_in', 'Hi ' . ucfirst($client->first_name) . '! You\'re now logged in! Search for products below & start shopping!');
            return redirect('/#GENDER');
        }
        else if ($client->email != $email || $client->password != $password)
        {
            $request->session()->flash('failed_login', 'Invalid Email & Password.');
            return redirect('/login');
        }
	}




    public function add_to_cart(Request $request, $product){
    	// Insert data then show flashdata
    	if ($product == "men_tshirt"){
    		DB::table('mycart')->insert([
				'client_id' => session('client_id'), 
				'product_name' => 'T-SHIRT', 
				'product_amount' => '5,00 €', 
				'product_image' => 'images/products/tshirt.png', 
				'purchase_date' => date("Y-m-d"), 
				'product_price' => 5
			]);
			$request->session()->flash('item_added', 'Product has been added to cart. ');
        	return redirect('/#GENDER');
    	}
    	if ($product == "pants_forclaz"){
    		DB::table('mycart')->insert([
				'client_id' => session('client_id'), 
				'product_name' => 'PANTS FORCLAZ', 
				'product_amount' => '30,00 €', 
				'product_image' => 'images/products/pants.png', 
				'purchase_date' => date("Y-m-d"),
				'product_price' => 30
			]);
			$request->session()->flash('item_added', 'Product has been added to cart. ');
        	return redirect('/#GENDER');
    	}
    	if ($product == "backpack"){
    		DB::table('mycart')->insert([
				'client_id' => session('client_id'), 
				'product_name' => 'BACKPACK', 
				'product_amount' => '60,00 €', 
				'product_image' => 'images/products/backpack.png', 
				'purchase_date' => date("Y-m-d"),
				'product_price' => 60
			]);
			$request->session()->flash('item_added', 'Product has been added to cart. ');
        	return redirect('/#GENDER');
    	}
    	if ($product == "giacket"){
    		DB::table('mycart')->insert([
				'client_id' => session('client_id'), 
				'product_name' => 'GIACKET', 
				'product_amount' => '60,00 €', 
				'product_image' => 'images/products/giacket.png', 
				'purchase_date' => date("Y-m-d"),
				'product_price' => 60
			]);
			$request->session()->flash('item_added', 'Product has been added to cart. ');
        	return redirect('/#GENDER');
    	}
    	if ($product == "trekking_shoes"){
    		DB::table('mycart')->insert([
				'client_id' => session('client_id'), 
				'product_name' => 'TREKKING SHOES', 
				'product_amount' => '80,00 €', 
				'product_image' => 'images/products/trekkingshoes.png', 
				'purchase_date' => date("Y-m-d"),
				'product_price' => 80
			]);
			$request->session()->flash('item_added', 'Product has been added to cart. ');
        	return redirect('/#GENDER');
    	}
    	if ($product == "women_tshirt"){
    		DB::table('mycart')->insert([
				'client_id' => session('client_id'), 
				'product_name' => 'WOMEN T-SHIRT', 
				'product_amount' => '20,00 €', 
				'product_image' => 'images/products/tshirt_ladies.png', 
				'purchase_date' => date("Y-m-d"),
				'product_price' => 20
			]);
			$request->session()->flash('item_added', 'Product has been added to cart. ');
        	return redirect('/#GENDER');
    	}
    }


    public function view_cart(Request $request){
    	$myItems = DB::table('mycart')->where('client_id', session('client_id'))->get();
    	$total = DB::table('mycart')->sum('product_price');
    	return view('shopping_cart', ['myItems' => $myItems,'item_count' => $myItems->count(),'total' => $total]);
    }


    public function remove_item(Request $request, $product_id){
    	DB::table('mycart')->where('product_id', $product_id)->delete();
    	$request->session()->flash('item_removed', 'Product has been removed from cart!');
        return redirect('/shopping_cart');
    }


    public function logout(Request $request){
    	if (session('is_logged_in') == TRUE) {
    		DB::table('mycart')->where('client_id', session('client_id'))->delete();
    		$request->session()->flush();
    		$request->session()->flash('logged_out', 'You\'ve Been Logged Out!');
        	return redirect('/');
    	}
    	else {
    		$request->session()->flash('not_logged_in', 'You\'re Not Logged In!');
        	return redirect('/');
    	}    	
    }
}
