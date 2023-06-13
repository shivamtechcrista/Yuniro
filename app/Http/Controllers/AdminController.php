<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use DataTables;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin-dashboard');
    }

    public function contact(Request $request){
        $contacts = Contact::paginate(5);
  
        return view('admin.contacts',compact('contacts'));
    }
}
