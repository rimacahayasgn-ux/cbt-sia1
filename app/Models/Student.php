<?php

namespace App\Models;

use App\StudentStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Override;

class Student extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    #[Override]
    protected function casts()
    {
        return [
            'gender' => 'boolean',
            'status' => StudentStatusEnum::class,
        ];
    }
    
    //relasi antar tabel
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted(): void
    {
        static::updated(function (Student $student) {
            if ($student->user_id && ($student->isDirty('name') || $student->isDirty('nis'))) {
                $student->user?->update([
                    'name' => $student->name,
                    'username' => $student->nis,
                ]);
            }
        });
    }
}