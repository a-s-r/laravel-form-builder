<?php

namespace Asr\FormBuilder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormBuilderController extends Controller
{
    public function add($a, $b){
    	$result = $a + $b;
	    return view('formBuilderViews::add', compact('result'));
    }

    public function subtract($a, $b){
    	echo $a - $b;
    }
}
