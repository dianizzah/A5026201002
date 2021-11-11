<html>
    <head>
        <title>5026201002_ETS Kode A</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


      <script>
        function pilih(){
          var x = document.forms["myForm"]["product"].value;
          if(x==""){
            alert("Kamu harus memilih jenis barang!");
            return false;
          }
        }
      </script>

      <style>
          .container{
              background-color: rgb(248, 237, 212);
              padding: 50px 50px;
              border-radius: 5px;
              box-sizing: border-box;
          }

          body{
              margin: 50px;
              text-align: center;
              background-color: rgb(40, 43, 43);
          }

          p{
              text-align: left;
              font-weight: bold;
              color: honeydew;
          }

          button{
            border: none;
            color: white;
            width: 200px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 15px 25px;
            cursor: pointer;
         }

         label{
             text-align: left;
         }

         input::-webkit-outer-spin-button, input::-webkit-inner-spin-button{
            -webkit-appearance: none;
            margin: 0;
         }


      </style>
    </head>
    <body>
    <p>Dian Nizzah Fortuna</p>
    <p>Dian</p>
    <p>5026201002</p>

    <h1 style="text-align: center; font-weight: bolder; color: ivory;">Form Input Data Barang</h1>
    <br>

    <div class="container">
      <form name="myForm" class="form-horizontal" action="/action_page.php" onsubmit="return pilih()">
        <div class="form-group row justify-content-center">
            <label class="col-form-label col-sm-3" for="name">Nama Barang</label>
            <div class="col-sm-1 pt-sm-1">:</div>
            <div class="col-sm-7">
                <input type="text" class="form-control" pattern="[a-zA-Z]{10,}" name="name" oninvalid="this.setCustomValidity('Nama harus alphabet dan tidak boleh kurang dari sepuluh karakter')" oninput="this.setCustomValidity('')" required>
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label class="col-form-label col-sm-3" for="price">Harga</label>
            <div class="col-sm-1 pt-sm-1">:</div>
            <div class="col-sm-7">
                <input type="number" class="form-control" pattern="[0-9]" min="5000" oninvalid="this.setCustomValidity('Harga minimal adalah 5000')" oninput="this.setCustomValidity('')" name="price" required>
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label class="col-form-label col-sm-3" class="form-control" for="product">Jenis Barang</label>
            <div class="col-sm-1 pt-sm-1">:</div>
            <div class="col-sm-7">
                <select class="form-control" id="barang" name="product">
                    <option value=""></option>
                    <option value="mak">Makanan</option>
                    <option value="min">Minuman</option>
                    <option value="non">Non Mamin</option>
                </select>
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label class="col-form-label col-sm-3" class="form-control" for="bcode">Kode Barcode</label>
            <div class="col-sm-1 pt-sm-1">:</div>
            <div class="col-sm-7">
                <input type="text" class="form-control" pattern="[0-9]{10,}" name="bcode" oninvalid="this.setCustomValidity('Kode barcode harus berupa angka dan terdiri dari minimal 10 karakter')" oninput="this.setCustomValidity('')" required>
            </div>
        </div>

                <button class="btn btn-primary" type="submit" >Kirim</button>
                <button class="btn btn-success" type="reset">Reset</button>
      </form>
    </div>

    </body>
</html>
