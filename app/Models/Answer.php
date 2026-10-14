<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    // use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'is_correct'=> 'boolean',
        ];

    // relasi inverse ke model question
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    protected static function booted(): void
    {
        static::creating(function (Answer $answer) {
            if (empty($answer->letter)) {
                $existingCount = Answer::where('question_id', $answer->question_id)->count();
                $letters = ['A', 'B', 'C', 'D'];
                $answer->letter = $letters[$existingCount % 4] ?? 'A';
            }
        });

        static::saved(function (Answer $answer) {
            if ($answer->is_correct && $answer->question_id) {
                Question::where('id', $answer->question_id)->update(['correct_answer' => $answer->letter]);
            }
        });
    }
}