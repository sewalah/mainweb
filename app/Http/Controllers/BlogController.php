<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class BlogController extends Controller {

	public function main(){
		$data['name'] = 'Robotys';
		return view('blog/main')->with($data);
	}

}
