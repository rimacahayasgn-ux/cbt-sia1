<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Question>
 */
class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition(): array
    {
        return [
            'subject_id' => Subject::factory(),
            'payload' => fake()->sentence(10) . '?',
            'correct_answer' => fake()->randomElement(['A','B','C','D']),
            'score' => 1,
            'description' => null,
            'is_active' => true,
        ];
    }
}
