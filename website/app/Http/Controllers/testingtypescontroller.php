<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testingtypes;
use Illuminate\Support\Facades\DB;
class testingtypescontroller extends Controller
{
    public function index(){
        $testing = testingtypes::all();
        return view('admin.testingtypes', compact('testing'));
    }

    public function testingstore(Request $request){
        $testing = new testingtypes();
        $testing->TestingTypes = $request->TestingTypes;
        $testing->TestingDescription = $request->TestingDescription;
        if($request->hasfile('TestingTypesImage')){
            $image = time().'_'.$request->TestingTypesImage->getClientOriginalName();
            $request->TestingTypesImage->move(public_path('TestingTypesImage'), $image);
            $testing->TestingTypesImage = $image;
        }
        $testing->save();
        return redirect()->back();
    }

    public function testingdestory(string $id){
    DB::select("DELETE FROM `testingtypes` WHERE id = '".$id."'");
    return redirect()->back();
    }

    public function testingedit($id){
        $datatesting= testingtypes::find($id);
        return view('customupdate.edittesting', compact('datatesting'));
    }

    public function testingupdate(Request $request ,$id){
      $datatesting= testingtypes::find($id);
    //   echo $datatesting;die;
      $datatesting->TestingTypes=$request->TestingTypes;
      $datatesting->TestingDescription=$request->TestingDescription;
      $datatesting->save();
    //   echo'yousuf';die;
    return redirect('testingtypes');
    }
}
