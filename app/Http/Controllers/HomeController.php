<?php

namespace App\Http\Controllers;

use Request;

use App\Questions;
use App\Options;
use App\AccessLog;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function show(){
        $questions = Questions::get();
        $this->data['questions'] = $questions;
        return view('pages.home.index',$this->data);
    }

    public function vote($id){
        if(Request::isMethod('get')){
            $question = Questions::find($id);
            if (!$question) {
                return redirect(route('showQuestion'));
            }
            $this->data['question'] = $question;
            return view('pages.home.vote',$this->data);
        } else {
            if(Input::get('vote')){
                $option = Options::find(Input::get('vote'));
                if (!$option) {
                    return redirect(route('showQuestion'));
                }
                $option->count++;
                $option->save();
            }
            return redirect(route('showResult', ['id' => $id]));
        }
    }

    public function result($id){
        $question = Questions::find($id);
        if (!$question) {
            return redirect(route('showQuestion'));
        }
        $this->data['question'] = $question;
        return view('pages.home.result',$this->data);
    }

    public function log()
    {
        $count = AccessLog::where('path', Request::path())->count();
        return "Halaman ini telah diakses sebanyak $count kali";
    }
}
