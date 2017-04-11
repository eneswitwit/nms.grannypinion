<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Feedback;
use App;
use Carbon\Carbon;

class FeedbackComment extends Model
{
    public $table = 'feedbacks_comments';

    public function getFedback()
    {
    	return $this->belongsTo(Feedback::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function children()
    {
    	return $this->hasMany(FeedbackComment::class, 'parent_id');
    }
}