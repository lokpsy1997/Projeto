<?php

namespace App\Http\Controllers;

use Helper;

    class SomeController extends Controller
    {

        public function __construct()
        {
            Helper::shout('now i\'m using my helper class in a controller!!');
        }
