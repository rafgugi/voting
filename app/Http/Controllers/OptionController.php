<?php

namespace App\Http\Controllers;

use Request;

use App\Questions;
use App\Options;
use Illuminate\Support\Facades\Input;
use Validator;

class OptionController extends Controller
{
    public function add() {
        if(Request::isMethod('get')){
            $questions = Questions::get();
            $this->data['questions'] = $questions;
            return view('pages.options.add',$this->data);
        } else {
            $validator = Validator::make(
                Input::all(),
                [
                    'questions_id' => 'required',
                    'option' => 'required'
                ]
            );
            if($validator->fails()) {
                return redirect()->back();
            } else {
                $option = new Options;
                $option->option = Input::get('option');
                $option->questions_id = Input::get('questions_id');
                $option->count = 0;
                $option->save();
            }
            return redirect(route('showManageQuestion'));
        }
    }
}
