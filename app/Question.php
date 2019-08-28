<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * Get the dimension of the question.
     */
    public function dimension() {
        return $this->belongsTo(Dimension::class, 'fk_dimension');
    }

}
