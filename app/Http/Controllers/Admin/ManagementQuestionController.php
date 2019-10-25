<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\QuestionModel;
use App\Http\Requests\AddQuestionRequest;
use App\Http\Requests\EditQuestionRequest;

class ManagementQuestionController extends Controller
{
    //
    public function getQuestion()
    {
    	$data['lstquestion'] = QuestionModel::all();
    	return view('backend.management_question', $data);
    }
    public function postQuestion(AddQuestionRequest $request){
        $question = new QuestionModel();
        $question->noidung = $request->content;
        $question->linh_vuc_id = $request->topic;
        $question->phuong_an_a = $request->result_a;
        $question->phuong_an_b = $request->result_b;
        $question->phuong_an_c = $request->result_c;
        $question->phuong_an_d = $request->result_d;
        $question->dap_an = $request->result;
        $question->save();
        return back();
    }
     public function getEditQuestion($id){
    	//
        $data['question'] = QuestionModel::find($id);
    	return view('backend.edit_question', $data);
    }
    
    public function postEditQuestion(EditQuestionRequest $request, $id){
        $question = QuestionModel::find($id);
        $question->noidung = $request->content;
        $question->linh_vuc_id = $request->topic;
        $question->phuong_an_a = $request->result_a;
        $question->phuong_an_b = $request->result_b;
        $question->phuong_an_c = $request->result_c;
        $question->phuong_an_d = $request->result_d;
        $question->dap_an = $request->result;
        $question->save();
        return redirect()->intended('admin/management_question');
    }

    public function getDeleteQuestion($id){
    	//
        QuestionModel::destroy($id);
        return back();
    }
}