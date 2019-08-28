<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    /**
     * Loads the main view.
     */
    public function index() {
        $questions = App\Question::all();
        return view('welcome', compact('questions'));
    }

    /**
     * Saves user, answers and calculate result.
     */
    public function save(Request $request) {

        $questions = App\Question::all();

        //Validates the request. If invalid returns to index page.
        $rules = array('email' => 'required');
        foreach ($questions as $question) {
            $rules['optradio-'. $question->id] = 'required';
        }
        $request->validate($rules);

        //Creates the user with the request data.
        $user = new App\User;
        $user->email = $request->email;
        $user->save();
        
        //Saves the user answers with the request data.
        foreach ($questions as $question) {
            $answer = new App\Answer;
            $answer->fk_user = $user->id;
            $answer->fk_question = $question->id;
            $answerName = "optradio-" . $question->id;
            $answer->answer = $request->$answerName;
            $answer->save();
        }
        //Calculates the user test result.
        $result = $user->calculateResult();
        
        //Gets the final result in a separate variable.
        $perspective = $result['perspective'];
        unset($result['perspective']);

        return view('result', compact('result', 'perspective'));
    }
}
