<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function quiz_questions(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        // Retrieve all questions
        $questions = Questions::all();

        // Ensure each question has a comment
        foreach ($questions as $question) {
            if (empty($question->comment)) {
                $question->comment = '-';
            }
        }

        // Shuffle the collection and take the first 10 questions
        $questions_to_be_asked = $questions->shuffle()->take(10);

        // Return the view with the selected questions
        return view('quiz.test', ['questions_to_be_asked' => $questions_to_be_asked]);
    }
    public function test_result_calculator(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        // Initialize test result
        $test_result = 0;

        // Loop through the request input
        foreach ($request->input() as $key => $value) {
            // Check if the key is an answer (assuming the answer fields are prefixed with 'answer_')
            if (str_starts_with($key, 'answer_')) {
                $question_id = str_replace('answer_', '', $key);
                $question = Questions::find($question_id);

                if ($question->answer == $value) {
                    $test_result += 1;
                }
            }
        }

        // Return the view with the test result
        return view('quiz.result', ['test_result' => $test_result]);
    }
}
