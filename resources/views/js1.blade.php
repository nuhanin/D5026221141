<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Latihan JS1</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function changeText() {
                var name = document.getElementById("id");
                var span = document.getElementById("output");//mendapatkan object tulisan
                var textBox = document.getElementById("textbox");//mendapatkan object text box

                textBox.style.color = "red";
                span.innerHTML = textBox.value;// membaca isi text box dan mnegubah tulisan non input
            }
        </script>
      </head>

      <body>
        <div class="container">
            <script>
                function showAlert(){
                    alert("Selamat anda mendapatkan 100 jt");
                }
            </script>
            <button class="btn btn-primary" onclick="showAlert();">klik disini!</button>
            <br>

            <button onclick="changeText();" class="btn btn-warning">Click me!</button>
            <br>
            <span id="output">replace me</span>
            <input id="textbox" type="text" class="form-control"/>




        </div>
      </body>
</html>
