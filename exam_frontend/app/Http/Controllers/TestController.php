<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;
use App\Test;

class TestController extends Controller
{
    public function index()
    {
        return view('base');
    }

    public function get(Request $request)
    {
        $tests = Test::orderBy('id', 'asc')->get();
        return response()->json($tests);
    }

    public function store(Request $request)
    {
        $seData = $request->get('selectedEmployee');
        if($seData['name']){

          if( DB::table('tests')->insert(['user_employee_name' => $seData['name']]) ){
            return response('success');
          } else {
            return response('failed');
          }
        } else {
          return response('failed');
        }
    }

    public function delete($id)
    {
        Test::destroy($id);

        return response()->json("ok");
    }
}
