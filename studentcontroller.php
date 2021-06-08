<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\state;
use App\Models\student;
use App\Models\district;
use App\Models\city;
use App\Models\school;
use App\Models\class1;
use Illuminate\Support\Facades\DB;

class studentcontroller extends Controller
{

    public function create()
    {
        $data= state::where('status','active')->get();
     $data1= district::where('status','active')->get();
     $data2= city::where('status','active')->get();
     $data3=school::where('status','active')->get();
     $data4=class1::where('status','active')->get();
      return view('studentform', compact('data','data1','data2','data3','data4'));
      
    }
    public function index()
    {
        return view('stateform');

    }
    public function createclass()
    {
        $data= state::where('status','active')->get();
        $data1=district::where('status','active')->get();
        $data2=city::where('status','active')->get();
        $data3=school::where('status','active')->get();
        return view('classform', compact('data','data1','data2','data3'));
             
        }
    public function createschool()
    {
        $data= state::where('status','active')->get();
        $data1=district::where('status','active')->get();
        $data2=city::where('status','active')->get();
        return view('schoolform', compact('data','data1','data2'));
             
        }
    public function createcity()
    {
        $data= state::where('status','active')->get();
        $data1=district::where('status','active')->get();
        return view('cityform', compact('data','data1'));
             
        }
    public function createdistrict()
    {
        $data= state::where('status','active')->get();
        return view('districtform', compact('data'));
             
        }
    public function storestate(Request $req)
    {
        $state= new state;
        $state->statename=$req->statename;
        $state->status=$req->status;
        $state->save();
    }
    public function storestudent(Request $req)
    {
        $student = new student;
        $student->studname= $req->studname;
        $student->mobnum=$req->mobnum;
       $student->state_id=$req->state_id;
       $student->district_id=$req->district_id;
       $student->city_id=$req->city_id;
       $student->school_id=$req->school_id;
       $student->class_id=$req->class_id;
        $student->status=$req->status;
        $student->save();
    }
    public function storedistrict(Request $req)
    {
        $district = new district;
        $district->districtname= $req->districtname;
        $district->state_id=$req->state_id;
        $district->status= $req->status;
        $district->save();
    }
    public function storecity(Request $req)
    {
        $city = new city;
        $city->cityname= $req->cityname;
        $city->state_id=$req->state_id;
        $city->district_id=$req->district_id;
        $city->status= $req->status;
        $city->save();
    }
    public function storeschool(Request $req)
    {
        $school = new school;
        $school->schoolname= $req->schoolname;
        $school->state_id=$req->state_id;
        $school->district_id=$req->district_id;
        $school->city_id=$req->city_id;
        $school->status= $req->status;
        $school->save();
    }
    public function storeclass(Request $req)
    {
        $class1 = new class1;
        $class1->classname= $req->classname;
        $class1->state_id=$req->state_id;
        $class1->district_id=$req->district_id;
        $class1->city_id=$req->city_id;
        $class1->school_id=$req->school_id;
        $class1->status= $req->status;
        $class1->save();
    }
    
    public function show()
    {
        return DB::table('students')
    ->join('states','states.id','=','students.state_id')
    ->select('students.*','states.statename')->where('students.status','active')->get();
    }
    public function showstudentdetails()
    {
        return DB::table('students')
    ->join('states','states.id','=','students.state_id')
    ->join('districts','districts.id','=','students.district_id')
    ->join('cities','cities.id','=','students.city_id')
    ->join('schools','schools.id','=','students.school_id')
    ->join('classes','classes.id','=','students.class_id')
    
    ->select('students.studname','students.mobnum','states.statename','districts.districtname',
    'cities.cityname','schools.schoolname', 'classes.classname')
    ->where('students.status','active')->get();


}
}



