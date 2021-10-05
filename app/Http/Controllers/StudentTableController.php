<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\studentTable;
class StudentTableController extends Controller
{

  public function upload(Request $request){


 $this->validate($request,[
             'image'    =>'mimes:jpg,jpeg,png',
           ]);

    $userData  = new studentTable();
            $userData->student_Name    = $request->student_Name;
            $userData->father_Name  = $request->father_Name;
            $userData->student_id   = $request->student_id;
            $userData->division    = $request->division;
            $userData->district   = $request->district;
             $userData->details   = $request->details;
              $image = $request->file('image') ;
             $imageName=uniqid().'.'.$image->getClientOriginalExtension();
                            $derectory='upload/userprofileimg/';
                            $imagePath=$derectory.$imageName;
                            $image->move($derectory,$imageName);
            $userData->save();
            return redirect()->route('home');
   }

}








