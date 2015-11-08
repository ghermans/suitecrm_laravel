<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class createMeetingValidator extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
          'meetings_subject' => 'required',
    			'meetings_message' => 'required'
        ];
    }
}
