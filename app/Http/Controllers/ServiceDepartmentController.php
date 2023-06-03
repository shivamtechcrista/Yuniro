<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceDepartmentController extends Controller
{
    
    public function index()
    {
        return view('services-department');
    }
}
