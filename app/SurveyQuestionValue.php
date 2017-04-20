<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyQuestionValue extends Model
{
    public $table = 'surveys_questions_values';
    public $fillable = ['survey_question_id','title'];

    public function question()
    {
    	return $this->belongsTo(SurveyQuestion::class, 'survey_question_id', 'id');
    }
}
