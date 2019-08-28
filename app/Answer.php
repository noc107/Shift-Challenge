<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * Get the user that owns the answer.
     */
    public function user() {
        return $this->belongsTo(User::class, 'fk_user');
    }

    /**
     * Get the question that owns the answer.
     */
    public function question() {
        return $this->belongsTo(Question::class, 'fk_question');
    }
}
