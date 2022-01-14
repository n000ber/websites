let words = "";
let rand_word = "";
let word_len = "";
let counter = 5;
let correct = 0; //See if got any occurrence of matched letter
let success = 1; //Increments to check if all letters are matched
let incorrect = 0;

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
        hangman(rand_word, user_input);

    } else {
        description_box.textContent = "Invalid Input. Please only enter a character!";
    }

}

function hangman(word, guess) {
    word = word.toLowerCase();
    guess = guess.toLowerCase();

    word_len = word.length;
    let underscore_pattern = "";


    for (let i = 0; i < word_len; i++) {
        underscore_pattern += "_ ";
    }


    if (guess === "0") {
        counter = 5;
        description_box.textContent = `You have ${counter} tries remaining!`;
        text_box.textContent = underscore_pattern;
    }

    else {


        for (let i = 0; i < word_len; i++) {
            for (let j = 0; j < guess.length; j++) {
                if (word[i] == guess[j]) {
                    let patt_index = i * 2;
                    underscore_pattern = underscore_pattern.replaceAt(patt_index, guess[j]);
                    description_box.textContent = `Correct guess! You have ${counter} tries remaining!`;
                    correct = 1;
                    success++;
                    
                } else {
                    incorrect++;
                    
                }
                if (incorrect === word_len) {
                    incorrect = 0;
                    counter--;
                    description_box.textContent = `Wrong guess! You have ${counter} tries remaining!`;
                    continue;
                }

            }
        }
        


        text_box.textContent = underscore_pattern;

        console.log(`Success is ${success}`);
        console.log(`word_len is ${word_len}`);

    }


}

function generateWord() {
    let rand = Math.floor((Math.random() * 3000) + 1);
    rand_word = words[rand];
    console.log(rand_word);
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
    generateWord();
}

if (correct === 0 && success === 1) {
    readTextFile();
} else if (counter > 0 && success !== word_len) {
    validateInput();
}

if (success === word_len) {
    end_box.textContent = `Congrats! You've won!`;
} else if (counter === 0) {
    end_box.textContent = `You've lost! Try again!`;
}




let reset = document.getElementById("reset")
reset.addEventListener("click", resetInput);
reset.addEventListener("keypress", resetInput);

let submit = document.getElementById("submit")
submit.addEventListener("click", validateInput);
submit.addEventListener("keypress", validateInput);
