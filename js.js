const num1 = Math.ceil(Math.random() * 10);
const num2 = Math.ceil(Math.random() * 10);
const questionEl = document.getElementById("question");
const formEl = document.getElementById("form");
const inputEl = document.getElementById("input");
const scroeEl = document.getElementById("score");

let score = JSON.parse(localStorage.getItem("score"));

if (!score || score < 0) {
  score = 0;
}

scroeEl.innerText = `score: ${score}`;

questionEl.innerText = `請問${num1}乘以${num2}是多少?`;

const correctAns = num1 * num2;

formEl.addEventListener("submit", () => {
  const userAns = +inputEl.value;
  if (userAns === correctAns) {
    score++;
    updateLocalStorage();
  } else {
    score--;
    updateLocalStorage();
  }
});

function updateLocalStorage() {
  localStorage.setItem("score", JSON.stringify(score));
}
