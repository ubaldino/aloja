<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Problem;
use App\Lang;
use App\Answer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{

    public function index( Request $request , $id ) {

        $params = [
            'problem' => Problem::find( $id ) ,
            'langs' => Lang::all()
        ];
        return view( 'answer/index' , $params );
    }

    public function store( Request $request ) {
        $answer = Answer::create([
            'user_id' => Auth::id(),
            'problem_id' => Input::get( 'problem_id' ),
            'lang_id' => Input::get( 'lang_id' ),
            'source_code' => Input::get( 'source_code' )
            ]);
        return $answer;
    }



}
