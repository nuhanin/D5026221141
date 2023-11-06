<html>
    <head>

    </head>
    <body>
        <form id="myForm" class="was-validated">
            <div class="form-group">
              <label for="nama">Nama:</label>
              <input type="text" class="form-control" id="nama" required>
              <div class="invalid-feedback">Nama harus diisi.</div>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" required>
              <div class="invalid-feedback">Email harus diisi dengan benar (contoh: nama@example.com).</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </body>
</html>
