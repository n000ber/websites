let counter = 1;
let end_box = document.getElementById("end_box");
end_box.textContent = "";
let text_box = document.getElementById("text_box");
let same_rand;

function validateInput() {
    let user_input = parseInt(this.previousElementSibling.value);
    let text_box = document.getElementById("text_box");
    if (!Number.isInteger(user_input) || user_input > 100 || user_input < 1) {
        text_box.textContent = "Invalid Input! Please only enter an integer between 0 and 100!";
    } else {
        if (counter === 1) {
            rand = parseInt(generateRand());
            console.log(rand);
            compareResult(rand, user_input);
            same_rand = rand;
        } else{
            compareResult(same_rand, user_input);
        }
    }
}

function generateRand() {
    let rand = Math.floor(Math.random() * 100) + 1;
    return rand;
}

function compareResult(rand, user_input) {
    
    if (counter >= 6 && rand !== user_input) {
        text_box.textContent = "6th try incorrect!";
        end_box.textContent = `You've used all your tries! The number was ${rand}. Try again!`;
        counter = 1;
        rand = parseInt(generateRand());

    } else if (rand === user_input) {
        text_box.textContent = `Congrats! You have guessed correctly in ${counter} try!`;
        counter = 1;
        rand = parseInt(generateRand());

    } else if (rand > user_input) {
        text_box.textContent = `${counter} try: Too low. Guess Higher!`;
        counter++;
        end_box.textContent = "";

    } else if (rand < user_input) {
        text_box.textContent = `${counter} try: Too high. Guess Lower!`;
        counter++;
        end_box.textContent = "";
    }
}

function resetGame() {
    let rand = parseInt(generateRand());
    counter = 1;
    text_box.textContent = "Game has been reset!";


}

let submit = document
    .getElementById("submit")
    .addEventListener("click", validateInput);

let reset = document.getElementById("reset").addEventListener("click", resetGame)

