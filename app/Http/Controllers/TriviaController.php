<?php

namespace App\Http\Controllers;

use App\Models\TriviaQuestion;
use App\Models\TriviaResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TriviaController extends Controller
{
    public function index()
    {
        return view('pages.trivia');
    }

    public function getQuestions(Request $request)
    {
        return response()->json(
            TriviaQuestion::select(
                'id',
                'question',
                'option_a',
                'option_b',
                'option_c',
                'option_d',
                'correct_answer'
            )
            ->inRandomOrder()
            ->limit($request->limit ?? 10)
            ->get()
        );
    }

    public function submitAnswers(Request $request)
    {
        $answers = $request->input('answers', []);

        $correct = 0;

        foreach ($answers as $a) {
            $q = TriviaQuestion::find($a['question_id']);

            if ($q && $q->correct_answer === $a['answer']) {
                $correct++;
            }
        }

        $score = $correct * 10;

        $result = TriviaResult::create([
            'user_id' => auth()->id(),
            'score' => $score,
            'correct_answers' => $correct,
            'total_questions' => count($answers),
            'percentage' => ($correct / max(count($answers), 1)) * 100,
            'played_at' => now(),
        ]);

        return response()->json([
            'score' => $score,
            'result' => $result
        ]);
    }

    public function getLeaderboard()
    {
        return TriviaResult::with('user')
            ->orderByDesc('score')
            ->limit(10)
            ->get();
    }
}