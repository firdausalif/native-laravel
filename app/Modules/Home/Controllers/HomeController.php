<?php
/**
 * Created by PhpStorm.
 * User: .SuperNova's
 * Date: 01/11/2017
 * Time: 6:34
 */

namespace App\Modules\Home\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller {

    public function index()
    {
        return view('Home::home');
    }

}