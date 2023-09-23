const questions = [
    {
        question: "What is the capital of France?",
        options: ["Berlin", "Madrid", "Paris", "Rome"],
        correctAnswer: "Paris"
    },
    {
        question: "Which planet is known as the Red Planet?",
        options: ["Earth", "Mars", "Venus", "Jupiter"],
        correctAnswer: "Mars"
    },
    // Add more questions here
];

let currentQuestionIndex = 0;
let score = 0;

const progress = document.getElementById("progress");
const questionContainer = document.getElementById("question-container");
const scoreDisplay = document.getElementById("score");
const scoreValue = document.getElementById("score-value");
const nextButton = document.getElementById("next-button");

function renderQuestion() {
    const question = questions[currentQuestionIndex];
    const optionsHTML = question.options.map((option, index) => {
        return `
            <label class="block mb-2">
                <input type="radio" name="answer" value="${option}">
                ${option}
            </label>
        `;
    }).join("");

    questionContainer.innerHTML = `
        <h2 class="text-lg font-semibold mb-2">${question.question}</h2>
        ${optionsHTML}
    `;
}

function updateProgress() {
    const percentage = ((currentQuestionIndex + 1) / questions.length) * 100;
    progress.style.width = `${percentage}%`;
}

function showScore() {
    scoreDisplay.classList.remove("hidden");
    scoreValue.textContent = `${score}/${questions.length}`;
}

nextButton.addEventListener("click", () => {
    const selectedAnswer = document.querySelector('input[name="answer"]:checked');

    if (!selectedAnswer) {
        alert("Please select an answer.");
        return;
    }

    if (selectedAnswer.value === questions[currentQuestionIndex].correctAnswer) {
        score++;
    }

    currentQuestionIndex++;

    if (currentQuestionIndex < questions.length) {
        renderQuestion();
        updateProgress();
    } else {
        questionContainer.innerHTML = "";
        nextButton.classList.add("hidden");
        showScore();
    }
});

// Initial render
renderQuestion();
updateProgress();