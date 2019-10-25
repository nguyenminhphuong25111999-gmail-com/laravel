<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditQuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'noidung'=>'unique:CauHoi,noidung,'.$this->segment(4).',cauhoi_id'
        ];
    }

    public function messages(){
        return[
            //
            'noidung.unique'=>'Nội dung đã bị trùng...'
        ];
    }
}
