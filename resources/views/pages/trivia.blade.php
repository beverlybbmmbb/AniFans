@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-white transition-all duration-500" id="app">

<!-- HEADER -->
<div class="bg-black text-white p-6 md:p-10">

    <h1 class="text-2xl md:text-4xl font-bold">Trivia Animación</h1>

    <div class="mt-3 flex flex-wrap gap-4 text-sm md:text-lg">

        <div>⏱ Tiempo: <span id="timer">60</span>s</div>
        <div>⭐ Puntos: <span id="score">0</span></div>

        <div class="text-green-400">✔ Correctas: <span id="correct">0</span></div>
        <div class="text-red-400">✖ Fallos: <span id="wrong">0</span></div>

    </div>

    <div class="mt-3 text-sm">
        <span id="progressText">Pregunta 0 / 0</span>
    </div>

</div>

<!-- GAME -->
<div class="max-w-4xl mx-auto p-4 md:p-8">

    <!-- PROGRESS -->
    <div class="w-full bg-gray-300 h-2 rounded mb-6 overflow-hidden">
        <div id="progressBar"
             class="bg-black h-2 w-0 transition-all duration-500"></div>
    </div>

    <!-- QUESTION -->
    <h2 id="question"
        class="text-xl md:text-2xl font-bold mb-6 transition-all duration-300 opacity-0 translate-y-3">
        Cargando...
    </h2>

    <!-- ANSWERS -->
    <div id="answers" class="space-y-3 transition-all duration-300 opacity-0"></div>

    <!-- NEXT -->
    <button onclick="nextQuestion()"
        class="mt-6 bg-black text-white px-6 py-3 rounded w-full hover:scale-[1.02] transition">
        Siguiente
    </button>

   

</div>

<!-- FINAL SCREEN -->
<div id="finalScreen"
     class="hidden fixed inset-0 bg-black text-white flex flex-col items-center justify-center p-6 text-center">

    <h1 class="text-4xl font-bold mb-4 animate-pulse">🎉 Trivia completada</h1>

    <p class="text-xl mb-2">Puntuación final:</p>
    <p class="text-5xl font-bold text-green-400" id="finalScore">0</p>

    <div class="mt-6 flex flex-col md:flex-row gap-4">

        <button onclick="location.reload()"
            class="bg-white text-black px-6 py-3 rounded hover:scale-105 transition">
            Volver a jugar
        </button>

        <a href="/perfil/{{ auth()->id() }}"
           class="bg-green-500 px-6 py-3 rounded hover:scale-105 transition">
            Ir a mi perfil
        </a>

    </div>

</div>

</div>

@endsection

@section('scripts')
<script>

let questions = [];
let current = 0;
let answers = [];

let score = 0;
let correct = 0;
let wrong = 0;

let timer = 60;
let interval;
let finished = false;
let locked = false;

/* INIT */
document.addEventListener("DOMContentLoaded", () => {
    fetchQuestions();
    loadLeaderboard();
});

/* QUESTIONS */
function fetchQuestions() {

    fetch("{{ url('/trivia/questions?limit=10') }}")
    .then(res => res.json())
    .then(data => {

        questions = data;

        if (!Array.isArray(questions) || questions.length === 0) {
            alert("No hay preguntas");
            return;
        }

        showQuestion();
        startTimer();
    });
}

/* TIMER */
function startTimer() {

    clearInterval(interval);

    timer = 60;
    document.getElementById('timer').innerText = timer;

    interval = setInterval(() => {

        if (finished) return;

        timer--;
        document.getElementById('timer').innerText = timer;

        if (timer <= 0) lockQuestion();

    }, 1000);
}

/* ANIMATION QUESTION */
function showQuestion() {

    if (finished) return;

    if (current >= questions.length) {
        finishGame();
        return;
    }

    locked = false;

    let q = questions[current];

    let questionEl = document.getElementById('question');
    let answersEl = document.getElementById('answers');

    questionEl.classList.add("opacity-0", "translate-y-3");
    answersEl.classList.add("opacity-0");

    setTimeout(() => {

        questionEl.innerText = q.question;

        document.getElementById('progressText').innerText =
            `Pregunta ${current + 1} / ${questions.length}`;

        document.getElementById('progressBar').style.width =
            ((current + 1) / questions.length) * 100 + '%';

        answersEl.innerHTML = '';

        ['a','b','c','d'].forEach(letter => {

            let btn = document.createElement('button');

            btn.innerText = q['option_' + letter];

            btn.className =
                "w-full p-4 border rounded-xl transition hover:scale-[1.03] hover:bg-black hover:text-white";

            btn.onclick = () => selectAnswer(letter, btn);

            answersEl.appendChild(btn);
        });

        questionEl.classList.remove("opacity-0", "translate-y-3");
        answersEl.classList.remove("opacity-0");

    }, 250);
}

/* LOCK */
function lockQuestion() {

    locked = true;

    document.querySelectorAll('#answers button')
        .forEach(b => b.disabled = true);
}

/* ANSWER */
function selectAnswer(answer, btn) {

    if (locked || finished) return;

    let q = questions[current];

    lockQuestion();

    if (answer === q.correct_answer) {

        btn.classList.add("bg-green-500", "text-white", "scale-105");

        score += 10;
        correct++;

        pulse(btn);

    } else {

        btn.classList.add("bg-red-500", "text-white", "animate-pulse");

        wrong++;
    }

    updateStats();

    answers.push({
        question_id: q.id,
        answer: answer
    });

    locked = true;
}

/* ANIMATION */
function pulse(el) {
    el.classList.add("scale-110");
    setTimeout(() => el.classList.remove("scale-110"), 200);
}

/* UPDATE */
function updateStats() {

    document.getElementById('score').innerText = score;
    document.getElementById('correct').innerText = correct;
    document.getElementById('wrong').innerText = wrong;
}

/* NEXT */
function nextQuestion() {

    if (finished) return;

    current++;
    showQuestion();
    startTimer();
}

/* FINISH */
function finishGame() {

    finished = true;
    clearInterval(interval);

    document.getElementById('finalScore').innerText = score;
    document.getElementById('finalScreen').classList.remove('hidden');

    submit();
}

/* SUBMIT */
function submit() {

    fetch("{{ url('/trivia/submit') }}", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ answers })
    })
    .then(res => res.json())
    .then(() => loadLeaderboard());
}

/* LEADERBOARD */
function loadLeaderboard() {

    fetch("{{ url('/trivia/leaderboard') }}")
    .then(res => res.json())
    .then(data => {

        let container = document.getElementById('leaderboard');
        container.innerHTML = '';

        data.forEach((u, i) => {

            container.innerHTML += `
                <div class="flex justify-between p-3 bg-gray-100 rounded-xl hover:bg-gray-200 transition">
                    <span>#${i+1} ${u.user?.name ?? 'Jugador'}</span>
                    <b>${u.score} pts</b>
                </div>
            `;
        });
    });
}

</script>
@endsection