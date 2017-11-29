<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 19:42
 */

namespace Gomedo\Http\Controllers\Frontend;

use Gomedo\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }

}