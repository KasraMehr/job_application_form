<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index()
    {
        $questions = Questions::all();
        foreach ($questions as $question){
            if (empty($question->comment)){
                $question->comment = '-';
            }
        }
        return view('question.index', compact('questions'));
    }

    public function create(Request $request)
    {
//        $validator = validator((array)$request);
//
//        if ($validator->fails()) {
//            return redirect()->back()->withErrors($validator)->withInput();
//        }

        $input = request()->all();
        Questions::create([
            'category' => $input['category'],
            'text' => $input['text'],
            'first_option' => $input['first_option'],
            'second_option' => $input['second_option'],
            'third_option' => $input['third_option'],
            'fourth_option' => $input['fourth_option'],
            'answer' => $input['answer'],
            'comment' => $input['comment']
        ]);

        return redirect(route('questions.index'))->with('success', 'question has been created');
    }

    public function edit($id): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $question = Questions::find($id);

        if (!$question) {
            return redirect()->back()->with('error', 'Question not found!');
        }
        return view('question.edit', compact('question'));
    }


    public function update(Request $request, $id)
    {
//        $validator = validator((array)$request);
//
//        if ($validator->fails()) {
//            return redirect()->back()->withErrors($validator)->withInput();
//        }

        // Find the property by ID
        $question = Questions::find($id);

        // If property not found, redirect back with an error message
        if (!$question) {
            return redirect()->back()->with('error', 'Question not found!');
        }

        // Update property attributes based on the form data
        $question->update($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Question updated successfully!');
    }


    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $question = Questions::find($id);

        if (!$question) {
            return redirect()->back()->with('error', 'Question not found!');
        }

        // Delete the property
        $question->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Question deleted successfully!');
    }

}
