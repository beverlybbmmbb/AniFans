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
        $limit = $request->get('limit', 10);
        $difficulty = $request->get('difficulty');

        $query = TriviaQuestion::query();

        if ($difficulty) {
            $query->where('difficulty', $difficulty);
        }

        $questions = $query->inRandomOrder()->limit($limit)->get();

        return response()->json($questions);
    }

    public function submitAnswers(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $validated = $request->validate([
            'answers' => 'required|array',
            'answers.*.question_id' => 'required|exists:trivia_questions,id',
            'answers.*.answer' => 'required|in:a,b,c,d',
        ]);

        $correctAnswers = 0;
        $totalQuestions = count($validated['answers']);

        foreach ($validated['answers'] as $answer) {
            $question = TriviaQuestion::findOrFail($answer['question_id']);

            if ($question->correct_answer === $answer['answer']) {
                $correctAnswers++;
            }
        }

        $percentage = ($correctAnswers / $totalQuestions) * 100;
        $score = $correctAnswers * 10;

        $result = TriviaResult::create([
            'user_id' => Auth::id(),
            'score' => $score,
            'correct_answers' => $correctAnswers,
            'total_questions' => $totalQuestions,
            'percentage' => $percentage,
        ]);

        return response()->json([
            'message' => 'Trivia completed!',
            'result' => $result,
            'correct_answers' => $correctAnswers,
            'total_questions' => $totalQuestions,
            'percentage' => $percentage,
            'score' => $score,
        ]);
    }

    public function getLeaderboard(Request $request)
    {
        $limit = $request->get('limit', 10);

        $leaderboard = TriviaResult::with('user')
            ->orderByDesc('score')
            ->limit($limit)
            ->get();

        if ($request->wantsJson()) {
            return response()->json($leaderboard);
        }

        return view('pages.trivia-leaderboard', compact('leaderboard'));
    }

    public function getUserResults()
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $results = TriviaResult::where('user_id', Auth::id())
            ->orderByDesc('created_at')
            ->paginate(10);

        if (request()->wantsJson()) {
            return response()->json($results);
        }

        return view('pages.trivia-results', compact('results'));
    }
}
