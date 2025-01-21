<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\QuestionsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(QuestionsDataTable $dataTable)
    {
        return $dataTable->render('dashboard.questions.index');
    }

    public function create()
    {
        return view('dashboard.questions.create');
    }


    public function store(QuestionRequest $request)
    {
        try {

            Question::create([
                'question_en' => $request->input('question'),
                'question_ar' => $request->input('question_ar'),
                'answer_en' => $request->input('answer'),
                'answer_ar' => $request->input('answer_ar'),
            ]);

            session()->flash('success', __('messages.created successfully.'));
            return redirect()->route('question.index');
        } catch (\Exception $ex) {
            session()->flash('error', __('messages.An error occurred while creating the question. Please try again.'));
            return redirect()->route('question.create');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $question = Question::find($id);
            if (!$question) {
                session()->flash('error', __('messages.The question is not exist'));
                return redirect()->route('question.index');
            }
            return view('dashboard.questions.edit',compact('question'));
        }catch (\Exception $ex) {
            session()->flash('error', __('messages.There was an error try again'));
            return redirect()->route('question.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionRequest $request, $id)
    {
        try {
            $question = Question::findorfail($id);

            $question->update([
                'question_en' => $request->input('question'),
                'question_ar' => $request->input('question_ar'),
                'answer_en' => $request->input('answer'),
                'answer_ar' => $request->input('answer_ar'),
            ]);
            session()->flash('success', __('messages.updated successfully.'));
            return redirect()->route('question.index');
        } catch (\Exception $ex) {
            session()->flash('error', __('messages.there was an error try again'));
            return redirect()->route('question.edit', $id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return response()->json('success');
    }
}
