<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $fillable = [
        'type',
        'cource_id',
        'chapter_id',
        'question',
        'answer_1',
        'question_explan',
        'answer_2',
        'answer_3',
        'correct_answer',
        'status',
        'explaination'
    ];
}
