<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="guessing.js" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="guessing.css" />
    <title>Guessing Game</title>
</head>

<body>
    <section class="container" id="game">
        <div class="jumbotron">
            <p class="h1"> Welcome to the guessing game!</p>
            <p class="lead"> Are you able to guess the random number between 1 to 100
                within 6 tries?</p>
            <p>P.S. You can always guess a number between 1-100 within 7 guesses.</p>
        </div>
        <div class="input_grp container" style="padding-top: 50px;">
            <input type="number" min="1" max="100" type="submit">
            <button class="btn btn-primary" type="button" id="submit"> Submit </button>
            <button class="btn btn-secondary" type="button" id="reset"> Reset </button>
            <p id="text_box" style="padding-top: 30px;"></p>
            <p id="end_box"></p>

        </div>

    </section>
</body>

</html>