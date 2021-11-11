<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hunting the Bear</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .conclusion{
        font-size:20px;
        text-align: center;
        font-weight: bold;
        color:black;
    }
    </style>
</head>

<body>
<div class="container">
    <h1>Hunting the Bear Game</h1>
    <div class="alert alert-success">
        <div class="container">
            <div class="row">
                <div class="name">
                    Name: <?php
                    $name = $_GET["name"] ;
                    echo $name ;
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="userrole">
                    User role: <?php
                    $mrole = $_GET["role"];
                    echo  $mrole ; ?>
                </div>
            </div>
            <div class="row">
                <div class="botrole">
                    Computer role: <?php
                    $bot=rand(0,2);
                    switch ($bot) {
                        case 0:
                            $comp = "Bear";
                            echo $comp;
                            break;
                        case 1:
                            $comp = "Hunter";
                            echo $comp;
                            break;
                        case 2:
                            $comp = "Government";
                            echo $comp;
                            break;
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="conclusion">
                    <?php
                        $mrole;
                        $bot;
                        if ($mrole == $comp) {
                            echo "YOU TIE";
                        }
                        else if ($mrole == "Hunter" && $bot == 0 || $mrole == "Bear" && $bot == 2 || $mrole == "Government" && $bot == 1) {
                            echo "YOU WIN";
                        }
                        else if ($mrole == "Bear" && $bot == 1 || $mrole == "Hunter" && $bot == 2 || $mrole == "Government" && $bot == 0) {
                            echo "YOU LOSE";
                        }
                        else{echo "idk.";}
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
