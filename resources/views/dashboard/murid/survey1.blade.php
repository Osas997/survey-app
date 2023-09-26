@extends('layout.pages')
@section('title','Survey App')
@section('content')
<div class="w-full min-h-screen overflow-x-hidden scroll-smooth ">

    <nav class="bg-white border-gray-200 border-b-2  ">
        <div class="w-full flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="" class="flex items-center">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Survey App</span>
            </a>
            <div class="flex items-center md:order-2">
                <button type="button"
                    class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="text-sm text-slate-300">username</span>
                        <span class="block text-sm text-gray-900 dark:text-white">{{ auth('murid')->user()->nama_murid
                            }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button href="#" type="submit"
                                    class="block text-start w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Sign out</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <div class="w-8/12 mx-auto px-10 mt-10">
        <div class="w-full mx-auto bg-white p-8 rounded shadow-md">
            <div class="flex justify-start items-center gap-4">
                <div class="w-6 h-6 md:w-8 md:h-8">
                    <a href="">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M14.2893 5.70708C13.8988 5.31655 13.2657 5.31655 12.8751 5.70708L7.98768 10.5993C7.20729 11.3805 7.2076 12.6463 7.98837 13.427L12.8787 18.3174C13.2693 18.7079 13.9024 18.7079 14.293 18.3174C14.6835 17.9269 14.6835 17.2937 14.293 16.9032L10.1073 12.7175C9.71678 12.327 9.71678 11.6939 10.1073 11.3033L14.2893 7.12129C14.6799 6.73077 14.6799 6.0976 14.2893 5.70708Z"
                                    fill="#0F0F0F"></path>
                            </g>
                        </svg>
                    </a>
                </div>
                <p class="font-bold text-base my-0">
                    <span class=" md:text-lg">Survey Perundungan</span>
                </p>
            </div>
            <div class="w-full bg-gray-400 rounded-full h-2.5">
                <div id="progress" class="bg-blue-600 h-2.5 duration-700 rounded-full"></div>
            </div>
            <form action="{{route('murid.submitSurvey')}}" method="post">
                @csrf
                <div id="quiz-container">

                    <!-- Quiz questions and options will be inserted here -->
                </div>
                {{-- <button id="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-full disabled:opacity-50">Submit</button> --}}
            </form>
            <button id="next-btn"
                class="bg-blue-500 text-white px-4 py-2 rounded-full disabled:opacity-50">Next</button>
        </div>
    </div>
</div>
<script>
    let dataPertanyaan = @json($dataPertanyaan);
console.log(dataPertanyaan);

let quizData = [];
dataPertanyaan.forEach((element) => {
    quizData.push({
        question: element.pertanyaan,
        options: ["Tidak Pernah", "Jarang", "Sering", "Selalu"],
    });
});

let currentQuestionIndex = 0;
let score = 0;
let jawabanUser = [];

const quizContainer = document.getElementById('quiz-container');
const progress = document.getElementById('progress');
const nextBtn = document.getElementById('next-btn');
const submit = document.getElementById('submit');
const scoreDisplay = document.getElementById('score');

// Function to load a question
function loadQuestion(questionIndex) {
    const questionData = quizData[questionIndex];
    if (questionData) {
        quizContainer.innerHTML = `
            <h2 class="text-lg font-semibold mb-2">${questionData.question}</h2>
            <div class="grid grid-cols-2 gap-4">
                ${questionData.options.map((option, index) => `
                    <label class="cursor-pointer">
                        <input type="radio" id="jawaban" value="${index+1}" class="peer sr-only"
                            name="jawaban" />
                        <div
                            class="w-full max-w-xl rounded-md bg-gray-50 p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow shadow-md  
                        peer-checked:bg-blue-500 peer-checked:text-gray-50 peer-checked:ring-blue-500 peer-checked:ring-offset-2  peer-checked:shadow-md peer-checked:shadow-blue-700 ">
                            <div class="flex flex-col gap-1">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-semibold uppercase  peer-checked:text-sky-700">${option}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </label>
                `).join('')}
               
            </div>
        `;
        if (questionIndex === quizData.length - 1) {
            // Soal terakhir, ganti teks tombol menjadi "Submit"
            nextBtn.textContent = 'Submit';
            nextBtn.disabled = false;
        } else {
            // Bukan soal terakhir, gunakan teks default "Next"
            nextBtn.textContent = 'Next';
            nextBtn.disabled = false;
        }
    } else {
        // Quiz completed
        quizContainer.innerHTML = `<p class="text-xl font-semibold text-center">Quiz completed!</p>`;
        nextBtn.disabled = true;
    }

    // Update progress bar
    const progressPercent = ((questionIndex) / quizData.length) * 100;
    progress.style.width = `${progressPercent}%`;
    console.log(jawabanUser)
}

// Event listener for option clicks
quizContainer.addEventListener('change', (e) => {
    if (e.target.tagName === 'INPUT') {
        const selectedOptionIndex = parseInt(e.target.value) - 1;
        jawabanUser[currentQuestionIndex] = selectedOptionIndex + 1;
    }
});

// Event listener for the "Next" button
nextBtn.addEventListener('click', () => {
    currentQuestionIndex++;
    if (currentQuestionIndex < quizData.length) {
        loadQuestion(currentQuestionIndex);
    } else{
        const dataToSend = {
            jawaban: jawabanUser,
        };
        console.log(
            JSON.stringify(dataToSend));

        fetch('/survey1', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer {{ csrf_token() }}',
                'Accept': 'application/json',
                "X-Requested-With": "XMLHttpRequest",
                'url': '/survey1',
                "X-CSRF-Token": document.querySelector('input[name=_token]').value},
            body: JSON.stringify(dataToSend),
        })
            .then((response) => response.json())
            .then((data) => {
                // Handle the response from the server, e.g., show a thank you message
                console.log(data);
                quizContainer.innerHTML = `<p class="text-xl font-semibold text-center">Terima kasih sudah mengikuti survei!</p>`;
            })
            .catch((error) => {
                console.log(error)
                console.error('Error:', error);
                
            });
    }
});


// Initialize the quiz
loadQuestion(currentQuestionIndex);

</script>
@endsection