<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;

class MainController extends Controller
{
    public function index($alertType = null){
      if($alertType == 'success'){
        Alert::success('Success', 'Username Added to test table');
      }
      if($alertType == 'failed'){
        Alert::error('Failed', 'Something went wrong');
      }

      $employees = json_encode(DB::table('employees')->orderBy('name','asc')->get());

      if($employees){
        return view('base',
          [
            'dtaEmployee' => $employees
          ]
        );
      } else {
        $employees = [];
        return view('base',
          [
            'dtaEmployee' => $employees
          ]
        );
      }
    }

    public function addNameToTestTable(Request $request){

    }
}
