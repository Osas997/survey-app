@extends('layout.pages')
@section('title','Survey App')
@section('content')
<div class="w-screen h-screen overflow-x-hidden scroll-smooth ">
    
    <nav class="bg-white border-gray-200 border-b-2 dark:bg-gray-900 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Survey App</span>
        </a>
        <div class="flex items-center md:order-2">
            <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
            <div class="px-4 py-3">
                <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
            </div>
            <ul class="py-2" aria-labelledby="user-menu-button">
                <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                </li>
                <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                </li>
            </ul>
            </div>
            <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        </div>
        </div>
    </nav>
    <div class="max-w-screen-xl mx-auto px-10 mt-10">
        <div class="max-w-lg mx-auto bg-white p-8 rounded shadow-md">
            <div class="flex justify-start items-center gap-4">
                <div class="w-6 h-6 md:w-8 md:h-8">
                    <a href="">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.2893 5.70708C13.8988 5.31655 13.2657 5.31655 12.8751 5.70708L7.98768 10.5993C7.20729 11.3805 7.2076 12.6463 7.98837 13.427L12.8787 18.3174C13.2693 18.7079 13.9024 18.7079 14.293 18.3174C14.6835 17.9269 14.6835 17.2937 14.293 16.9032L10.1073 12.7175C9.71678 12.327 9.71678 11.6939 10.1073 11.3033L14.2893 7.12129C14.6799 6.73077 14.6799 6.0976 14.2893 5.70708Z" fill="#0F0F0F"></path> </g></svg>
                    </a>
                </div>
                <p class="font-bold text-base my-0">
                    <span class=" md:text-lg">Survey Perundungan</span>
                </p>
            </div>
        <div id class="w-full bg-gray-200 rounded-full h-2.5 mt-8 mb-4">
            <div id="progress" class="bg-blue-600 h-2.5 duration-700 rounded-full"></div>
        </div>
        <div id="quiz-container">
            <!-- Quiz questions and options will be inserted here -->
        </div>
        

        {{-- <div class="flex justify-center items-center mt-10">
            <button id="prev-btn" class="bg-blue-500 w-1/2 text-white px-10 py-3 rounded-lg disabled:hidden">Previous</button>
        </div> --}}
        <div id="score" class="mt-4 font-semibold"></div>
    </div>
    </div>

</div>
<script>
    const quizData = [
          {
              question: "Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati",
              options: ["Selalu", "Sering", "Jarang", "Tidak Pernah"],
          },
          {
              question: "Teman-teman dengan sengaja mengabaikan saya, tidak mengajak saya bergabung dengan kelompoknya, atau menganggap saya tidak ada",
              options: ["Selalu", "Sering", "Jarang", "Tidak Pernah"],
          },
          {
              question: "Saya dipukul, ditendang, didorong, dipojokkan ke tembok, atau dikunci di dalam ruangan",
              options: ["Selalu", "Sering", "Jarang", "Tidak Pernah"],
          },
          {
              question: "Murid lain berbohong atau menyebarkan desas-desus palsu tentang saya dan mencoba membuat orang lain tidak menyukai saya",
              options: ["Selalu", "Sering", "Jarang", "Tidak Pernah"],
          },
          // Add more questions and options here
      ];

      let currentQuestionIndex = 0;
      let score = 0;

      const quizContainer = document.getElementById('quiz-container');
      const progress = document.getElementById('progress');
      const prevBtn = document.getElementById('prev-btn');
      const scoreDisplay = document.getElementById('score');

      // Function to load a question
      function loadQuestion(questionIndex) {
          const questionData = quizData[questionIndex];
          if (questionData) {
              quizContainer.innerHTML = `
                  <h2 class="text-base font-semibold mb-6 mt-4">${questionData.question}</h2>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                      ${questionData.options.map((option, index) => `
                          <button class="bg-gray-200 hover:bg-blue-200 py-2 px-4 rounded text-start"
                                  data-index="${index}">${option}</button>
                      `).join('')}
                  </div>
              `;
          } else {
              // Quiz completed
              quizContainer.innerHTML = `<p class="text-xl font-semibold text-center">You Score Is ${score}</p>`;
              prevBtn.disabled = true;
          }

          // Update progress bar
          const progressPercent = ((questionIndex) / quizData.length) * 100;
          progress.style.width = `${progressPercent}%`;
      }

      // Event listener for option clicks
      quizContainer.addEventListener('click', (e) => {
          if (e.target.tagName === 'BUTTON') {
              const selectedOptionIndex = parseInt(e.target.getAttribute('data-index'));
              const currentQuestion = quizData[currentQuestionIndex];

              // Answer 
              // console.log(currentQuestion.options[selectedOptionIndex]);
              switch (currentQuestion.options[selectedOptionIndex]) {
                  case "Selalu":
                      score += 4;
                      break;
                  case "Sering":
                      score +=3;
                      break;
                  case "Jarang":
                      score += 2;
                      break;
                  case "Tidak Pernah":
                      score +=1;
                      break;
                  default:
                      break;
              }
              // scoreDisplay.textContent = `Score: ${score}`;
              currentQuestionIndex++;
              loadQuestion(currentQuestionIndex);
          }
      });

      // Event listener for the "Previous" button
    //   prevBtn.addEventListener('click', () => {
    //       if (currentQuestionIndex > 0) {
    //           currentQuestionIndex--;
    //           loadQuestion(currentQuestionIndex);
    //           prevBtn.disabled = currentQuestionIndex === 0; // Disable "Previous" button on the first question
    //       }
    //   });

      // Initialize the quiz
      loadQuestion(currentQuestionIndex);

</script>
@endsection
