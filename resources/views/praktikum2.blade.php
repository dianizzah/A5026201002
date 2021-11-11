<!DOCTYPE html>

<html>
    <head>
      <title>Praktikum 2 - 5026201002</title>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <style>
        body{
          background-image:url("https://studioghiblimovies.com/wp-content/uploads/2020/03/barcode-scanners-qr-code-2d-code-creative-barcode.jpg");
          background-position: fixed;
          background-size: auto;
          color: azure;
        }

        label{
          font-weight: bold;
          color: black;
        }

        input, select {
          width: 100%;
          padding: 10px 10px;
          margin: 8px 0;
          border: 1px solid rgb(222, 182, 235);
          border-radius: 4px;
          box-sizing: border-box;
        }

        input[type=submit] {
          width: 100%;
          background-color: #ec86e7;
          font-weight: bold;
          font-style: italic;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }

        input[type=reset] {
          width: auto;
          background-color: #af4a4a;
          color: rgb(255, 255, 255);
          padding: 8px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }

        div {
          border-radius: 5px;
          background-color: #b1e8f8;
          padding: 20px;
          margin: 30px;
        }
      </style>

        <script>
          function pilih(){
            var x = document.forms["myForm"]["ycourse"].value;
            if(x==""){
              alert("You should choose one of our courses below");
              return false;
            }
          }
        </script>
    </head>

    <body>
      <h1 style="text-align: center;">Registration Form</h1>

    <div>
      <form name="myForm" action="/action_page.php" method="post" onsubmit="return pilih()">
        <label for="name">Name:</label>
        <input type="text" name="yname" required>

        <label for="alamat">Address:</label>
        <input type="text" name="yaddress" required>

        <label for="email">E-mail address:</label>
        <input type="email" name="yemail" required>

        <label for="pass">Password:</label>
        <input type="password" name="ypass" required>

        <label for="phone">Telephone:</label>
        <input type="tel" pattern="[0-9]{}" minlength="7" name="ynumber" required>

        <label for="zip">Zip code:</label>
        <input type="text" name="zipcode" required>

        <label for="ycourse">Select your course:</label>
        <select id="course" name="ycourse">
          <option value=""></option>
          <option value="btech">BTECH</option>
          <option value="bba">BBA</option>
          <option value="bca">BCA</option>
          <option value="bcom">B COM</option>
          <option value="g4g">GEEKFORGEEKS</option>
        </select>

        <input type="submit" value="Send">
        <input type="reset" value="Reset">
      </form>
    </div>

    </body>
</html>
