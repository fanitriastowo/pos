<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Crud;

class HomeController extends Controller {

    public function index() {
        return response(Crud::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
