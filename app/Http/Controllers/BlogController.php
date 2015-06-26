<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class BlogController extends Controller {

	public function main(){
		return view('blog/main');
	}

}
