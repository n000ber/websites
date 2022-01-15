let words = "";
let rand_word = "";
let word_len = "";
let counter = 5;
let correct = 0; //See if got any occurrence of matched letter
let success = 0; //Increments to check if all letters are matched
let incorrect = 0; //Checks if the user supplied character is not found in the random word
let underscore_pattern = "";

let text_box = document.getElementById("text_box");
let description_box = document.getElementById("description_box");
let end_box = document.getElementById("end_box");

text_box.textContent = "";
description_box.textContent = "";
end_box.textContent = "";

String.prototype.replaceAt = function (index, replacement) {
    if (index >= this.length) {
        return this.valueOf();
    }
    return this.substring(0, index) + replacement + this.substring(index + 1);
}

function validateInput() {
    let user_input = this.previousElementSibling.value;

    if (user_input.length === 1 && user_input.match(/[a-z]/i)) {
        this.previousElementSibling.value = '';
        hangman(rand_word, user_input);
    } else {
        description_box.textContent = "Invalid Input. Please only enter a character!";
        this.previousElementSibling.value = '';
    }
}

function pollInput() {
    let submit = document.getElementById("submit")
    try {
        if (counter > 0 && success !== word_len && submit.previousElementSibling.value) {
            submit.addEventListener("click", validateInput);
        }
    }
    catch (err) {
        setTimeout(pollInput, 300);
    }
}

function hangman(word, guess) {
    word = word.toLowerCase();
    guess = guess.toLowerCase();
    word_len = word.length;
    if (guess === "0") {
        for (let i = 0; i < word_len; i++) {
            underscore_pattern += "_ ";
        }
        counter = 5;
        description_box.textContent = `You have ${counter} tries remaining!`;
        text_box.textContent = underscore_pattern;
    }
    else {
        for (let i = 0; i < word_len; i++) {
            if (word[i] == guess[0]) {
                let patt_index = i * 2;
                underscore_pattern = underscore_pattern.replaceAt(patt_index, guess[0]);
                description_box.textContent = `Correct guess! You have ${counter} tries remaining!`;
                correct = 1;
                incorrect = 0;
                success++;
            } else {
                incorrect++;
            }
            if (incorrect === word_len) {
                incorrect = 0;
                counter--;
                description_box.textContent = `Wrong guess! You have ${counter} tries remaining!`;
            }
            if (success === word_len) {
                end_box.textContent = `Congrats! You've won!`;
                break;
            } else if (counter === 0) {
                description_box.textContent = `The word is ${word}!`;
                end_box.textContent = `You've lost! Try again!`;
                break;
            }
        }
        text_box.textContent = underscore_pattern;
        pollInput();
        incorrect = 0;
    }
}

function generateWord() {
    let rand = Math.floor((Math.random() * 2996) + 1);
    rand_word = words[rand];
    hangman(rand_word, "0");
}

function readTextFile() {
    file = "words.txt";
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function () {
        if (rawFile.readyState === 4) {
            if (rawFile.status === 200 || rawFile.status == 0) {
                var allText = rawFile.responseText;
                words = allText.split("\n");
                generateWord();
            }
        }
    }
    rawFile.send(null);
}

function resetInput() {
    this.previousElementSibling.previousElementSibling.value = '';
    description_box.textContent = '';
    end_box.textContent = '';
    underscore_pattern = '';
    text_box.textContent = '';
    success = 0;
    generateWord();
}

if (correct === 0 && success === 0) {
    readTextFile();
} else if (counter > 0 && success !== word_len) {
    validateInput();
}

let reset = document.getElementById("reset")
reset.addEventListener("click", resetInput);

let submit = document.getElementById("submit")
submit.addEventListener("click", validateInput);
