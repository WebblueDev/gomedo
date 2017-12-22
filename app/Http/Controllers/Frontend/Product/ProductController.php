<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 19:42
 */

namespace Gomedo\Http\Controllers\Frontend\Product;

use Gomedo\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function show()
    {

        return view('frontend.product.show.show');
    }

}