<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\Questions;
use App\Options;
use Illuminate\Support\Facades\Input;
use Validator;

class QuestionController extends Controller
{
    public function manage(){
        $questions = Questions::get();
        $this->data['questions'] = $questions;
        return view('pages.questions.manage',$this->data);
    }

    public function add(){
        if(Request::isMethod('get')){
            return view('pages.questions.add');
        } else {
            $validator = Validator::make(
                Input::all(),
                ['question' => 'required']
            );
            if($validator->fails()){
                return redirect()->back();
            } else {
                $question = new Questions;
                $question->question = Input::get('question');
                $question->save();
            }
            return redirect(route('showManageQuestion'));
        }
    }

    public function update($id){
        if(Request::isMethod('get')){
            $question = Questions::find($id);
            if (!$question) {
                return redirect()->back();
            }
            $this->data['question'] = $question;
            return view('pages.questions.update',$this->data);
        } else {
            $validator = Validator::make(
                Input::all(),
                ['question' => 'required']
            );
            if($validator->fails()){
                return redirect()->back();
            } else {
                $question = Questions::find($id);
                $question->question = Input::get('question');
                $question->save();
            }
            return redirect(route('showManageQuestion'));
        }
    }

    public function delete($id){
        $question = Questions::find($id);
        if (!$question) {
            return redirect()->back();
        }
        $question->delete();
        return redirect()->back();
    }
}
