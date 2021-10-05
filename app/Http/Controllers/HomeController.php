<?php

namespace App\Http\Controllers;
use App\studentTable;
use DB ;
use App\Division;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


             $id= studentTable::count() ;

             $myid=$id+1;

            $division=DB::table('divisions')->get();
            $singleDiv=DB::table('divisions')->first();

            $district=DB::table('divisions')->get();







            return view('home',[
                'myid'=>$myid ,
                'division'=>$division ,
                'district'=>$district ,


            ]) ;

        }


}
