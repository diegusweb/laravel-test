<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{


    public function getIndex()
    {
      
      $result =\DB::table('users')
        ->select(['first_name','last_name'])
        //->where('first_name','<>','DUlio')
        ->orderBy('first_name','ASC')
        ->join('user_profies','users.id','=','profiles.id')
        //->leftjoin('user_profies','users.id','=','profiles.id')
        ->get();

        //ordena
        dd($result);

      return $result;
    }

}
