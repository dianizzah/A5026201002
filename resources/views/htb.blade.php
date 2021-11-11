<!DOCTYPE HTML>
<html>
  <head>
    <title>Hunting Bear Game</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nosifer&family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">

    <style>
      body {
        background-image: url("https://cdnb.artstation.com/p/assets/images/images/027/870/313/large/bandarai-art-ebguwbewsaahd1f.jpg?1592817765");
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        background-blend-mode:luminosity;
        color: whitesmoke;
        justify-content: center;
        margin:100px;
        text-align: justify;
        font-family: 'Roboto Mono', monospace;
        }

      .container-fluid{
        padding: 20px;
        background-color: whitesmoke;
        color: black;
        width: 50%;
        border-radius: 10px ;
        margin: auto;
      }

      .container-fluid input[type=text]{
        width: 100%;
        padding: 12px 20px;
        margin-bottom: 25px;
        display: inline-block;
        border: 1px solid rgb(221, 23, 23);
        border-radius: 4px;
        box-sizing: border-box;
      }

      /* Set a style for the submit/login button */
       .btn {
        padding: 15px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom:10px;
        opacity: 0.8;
        font-weight: bold;
      }

      .container {
        display: block;
        position: relative;
        padding-left: 30px;
        margin-left: 30px;
        cursor: pointer;
        font-size: 18px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      /* Hide the browser's default radio button */
      .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
      }

      /* Create a custom radio button */
      .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: rgb(161, 160, 160);
        border-radius: 50%;
      }

      /* On mouse-over, add a grey background color */
      .container:hover input ~ .checkmark {
        background-color: #ccc;
      }

      /* When the radio button is checked, add a blue background */
      .container input:checked ~ .checkmark {
        background-color: #636568;
      }

      /* Create the indicator (the dot/circle - hidden when not checked) */
      .checkmark:after {
        content: "";
        position: absolute;
        display: none;
      }

      /* Show the indicator (dot/circle) when checked */
      .container input:checked ~ .checkmark:after {
        display: block;
      }

      /* Style the indicator (dot/circle) */
      .container .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: rgb(255, 255, 255);
      }
    </style>
  </head>

<body>
    <p style="font-size: 80px; text-align: center; font-family: 'Nosifer', cursive;">'HUNTING THE BEAR' GAME</p>
    <p style="padding: 50px;">A simultaneous, zero-sum game, it has only two possible outcomes: a draw, or a win for one player and a loss for the other. A player who decides to play BEAR will beat another player who has chosen GOVERNMENT ("Bear attacks the Government"), but will lose to one who has played HUNTER ("Hunter shoots Bear"); a play of HUNTER will lose to a play of GOVERNMENT ("Government arrests Hunter"). If both players choose the same role, the game is tied. The players for this game are <b>user</b> and <b>computer</b>.</p>

    <div class="container-fluid" id="myForm">
      <form action="tugas4" method="get"> @csrf
          <label for="nama"><b>Username:</b></label>
          <input type="text" minlength="3" placeholder="The length of name should be 3 characters or more" name="name" required>
          <br>
          <br>
          <p style="font-weight: bold;">Please select your role!</p>

          <div class="roling">
            <label class="container">Bear
            <input type="radio" id="role" name="role" value="Bear"  required>
            <span class="checkmark"></span></label>
           
            <label class="container" >Hunter
            <input type="radio" id="role" name="role" value="Hunter" required>
            <span class="checkmark"></span></label>

            <label class="container">Government
            <input type="radio" id="role" name="role" value="Government" required>
            <span class="checkmark"></span></label>
          </div>

          <br>
        <button type="submit" class="btn" style="background-color: rgb(49, 37, 37);color: white;">Dare the Computer!</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      </form>
    </div>

</body>

</html>
