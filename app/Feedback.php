<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
use App\FeedbackComment;

class Feedback extends Model {
	/**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	public $table = 'feedbacks';

	protected $fillable = [
		
	];

	protected $guarded = [];
	
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function assignToUser($text, $user_id)
	{
		$this->text = $text;
		$this->user_id = $user_id;
		$this->save();
	}

	public function comments()
	{
		return $this->hasMany(FeedbackComment::class);
	}
}