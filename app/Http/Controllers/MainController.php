<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\UserContactUsMail;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Permission;
use App\Models\Product;
use App\Models\Role;
use App\Models\Slider;
use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        $title = 'Добро пожаловать в нашу Компанию';
        return view('main.index', compact('title'));
    }

    

}
