<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pollquestion extends Model
{ 
    protected $table = 'poll_question';
    protected $primaryKey = 'qid';
}
