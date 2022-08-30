<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuilderController extends Controller{


 function index(){
  // $result = DB::table('details')->count();
  // $result = DB::table('details')->max('roll');
  // $result = DB::table('details')->min('roll');
  // $result = DB::table('details')->avg('roll');
  $result = DB::table('details')->sum('roll');
  return $result;
 }

}