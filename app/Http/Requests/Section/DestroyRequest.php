<?php

namespace App\Http\Requests\Section;

use App\Models\Section;
use Exception;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class DestroyRequest extends FormRequest
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

    public function run(){
        try {
            $section = Section::find($this->id);
            if(!$section)
                return redirect()->back()->withErrors(__('failed_messages.section.notFound'));
            if($section->delete()){
                Session::put('success_msg',__('success_messages.section.destroy'));
                return redirect()->back();
            }
        }catch (Exception $ex){
            return redirect()->back()->withErrors($ex->getMessage());
        }

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
