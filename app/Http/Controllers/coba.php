<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;

class coba extends Controller
{
    // protected $navbar;
    // protected $info;

    public function index(){
    	$navbar=[
	    	
	    	'home' => 'Home',
	    	'rooms' => 'Kamar',
	    	'resto' => 'Resto',
	    	'book' => 'Pesan',
	    	'hm' => 'Aula'
    	];

        $info=[
            'nama' => 'Wade Wilson',
            'alamat' => 'Brooklyn Street 245'
        ];
    	$kamars = \App\Kamar::get();

    	return view('index', compact('kamars', 'navbar', 'info'));
        // ->withInfo($this->info)->withNavbar($this->navbar);
    }

}
