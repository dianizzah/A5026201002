<!DOCTYPE HTML>
<html>
  <head>
    <title>Konversi JS Switch</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .container{
            text-align: center;
            object-position: center;
            margin:auto;
            padding: 50px;
        }
        body {
                background-image: url("https://img.freepik.com/free-vector/detailed-jungle-background_23-2148953379.jpg?size=626&ext=jpg");
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
                background-blend-mode:luminosity;
        }
        .computer_section{
            margin-top: 50px;
        }
        p{
            color: cornsilk;
            font-size: xx-large;
        }
        button{
            margin-top: 50px;
        }
    </style>

  </head>

  <body>
      <div class="container">
        <h1 style="font-size:80px;font-style: italic;">FOX, HUNTER, AND GOVERNMENT GAME</h1>
        <br>
        <form>
              <label style="font-weight: bold; font-size:x-large;">Please enter your favourite number (0-2):</label>
              <input type="number" id="pilihan" placeholder="Enter number" class="form-control"/>
              <br>
            <input type="submit" onclick="processPemain()" value="I am ready to dare!"/>
          </form>

          <p id="pilPemain"></p>
          <script>
              function processPemain(){
                  var pil = pilihanField.value,
                      pemain;

                  switch (pil) {
                  case "0":
                      pemain = "You chose HUNTER.";
                      break;
                  case "1":
                      pemain = "You chose GOVERNMENT.";
                      break;
                  case "2":
                      pemain = "You chose FOX.";
                      break;
                  default:
                      pemain = "You're out of this game.";
                  }

                  document.getElementById("pilPemain").innerHTML=pemain;

                  event.preventDefault();
              }
              var form = document.forms[0],
                  pilihanField = document.getElementById('pilihan');

              form.addEventListener('submit', processPemain, false);
          </script>

        <div class="computer_section">
            <h4 style="font-weight: bolder;">Computer will show its choice.</h4>
            <br>
            <button class="w3-button w3-light-grey" onclick="processComp()">Dare the Computer</button>

            <p id="comp"></p>
            <script>
                function processComp(){
                    var sistem = Math.floor(Math.random() * 3),
                    computer;

                    switch (sistem) {
                    case 0:
                        computer = "Computer chose HUNTER.";
                        break;
                    case 1:
                        computer = "Computer chose GOVERNMENT.";
                        break;
                    case 2:
                        computer = "Computer chose FOX.";
                        break;
                    default:
                        computer = "Computer is missing.";
                    }
                    document.getElementById("comp").innerHTML=computer;
                }
            </script>

            <button type="button" class="w3-button w3-block w3-black" onclick="compare(pilihan, sistem)">Who's winning?</button>
            <p id="awarding"></p>
            <script>
                    function compare(pilihan, sistem){
                        if (pilihan == sistem) {
                            alert("We are TIE.");
                        }
                        else if (pilihan == "1" && sistem == 0 || pilihan == "0" && sistem == 2 || pilihan == "2" && sistem == 1) {
                            alert("You WIN.");
                        }
                        else if (pilihan == "0" && sistem == 1 || pilihan == "1" && sistem == 2 || pilihan == "2" && sistem == 0) {
                            alert("You LOSE.");
                        }
                    }
            </script>
        </div>
      </div>
  </body>
</html>
