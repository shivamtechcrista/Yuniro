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
        if ($request->ajax()) {
            $data = Contact::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
          
        return view('admin.contacts');
    }
}
