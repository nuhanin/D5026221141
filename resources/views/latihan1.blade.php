<html>
    <head>
        <title>CheckOut</title>
        <!-- <link rel="stylesheet" href="latihan1.css"> -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
      </head>
      <body class="bg-dark">
        <div class="container p-3 my-3 text-white text-center">
            <div class="row">
                <button type="button" class="btn btn-outline-info btn-block">
                    + Add New Address
                </button>
            </div>
        </div>

        <div class="container text-white">
            <h4>Payment Method</h4>
        </div>

        <div class="container p-3 my-3 bg-secondary text-white rounded">
            <div class="row">
                <div class="col">
                    <img src="mc_symbol_opt_45_1x.png" alt="logo" width="50px" height="50px"
                    style="float:left;width:50px;height:35px">
                </div>
                <div class="col-9">
                    <p class="p-1">Mastercard</p>
                </div>
                {{-- <div class="col">
                    <input type="radio" class="form-check-input" style="float:left;width:20px;height:20px">
                </div> --}}
                <form action="/action_page.php">
                    <div class="form-check col">
                      <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" style="float:left;width:20px;height:20px">
                      </label>
                    </div>
                </form>
            </div>
        </div>

        <div class="container p-3 my-3 bg-secondary text-white rounded">
            <div class="row">
                <div class="col">
                    <img src="mc_symbol_opt_45_1x.png" width="50px" height="50px"
                    style="float:left;width:50px;height:35px;">
                </div>
                <div class="col-9">
                    <p class="p-1">Cash On Delivery</p>
                </div>
                <form action="/action_page.php">
                    <div class="form-check col">
                      <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" style="float:left;width:20px;height:20px">
                      </label>
                    </div>
                </form>
            </div>
        </div>

        <div class="container p-3 my-3">
            <div class="row">
                <button type="button" class="btn btn-outline-info btn-block">
                    + Add Payment Method
                </button>
            </div>
        </div>

        <div class="container text-white">
            <h4>Order Summary</h4>
        </div>

        {{-- <div class="row" style="background-color: #868B8E;">
          <div class="col-11 my-3">
            <p>Special Platter</p>
            <p>Pepperoni Pizza</p>
            <p>Burger</p>
          </div>
          <div class="col-1 my-3">
            <p>1x</p>
            <p>1x</p>
            <p>1x</p>
          </div>
        </div> --}}

        <div class="container flex-column bg-secondary p-3 my-4 rounded">
            <div class="row">
                <div class="col-10">
                    <div class="p-2 text-white">Special Platter</div>
                </div>
                <div class="col text-info">
                    <p>1x</p>
                </div>
                <div class="col-10">
                    <div class="p-2 text-white">Pepperoni Pizza</div>
                </div>
                <div class="col text-info">
                    <h5>1x</h5>
                </div>
                <div class="col-10">
                    <div class="p-2 text-white">Burger</div>
                </div>
                <div class="col text-info">
                    <h4>1x</h4>
                </div>
            </div>
        </div>

        <div class="container text-white">
            <h4>Cost Summary</h4>
        </div>

        <div class="row" style="background-color: #868B8E;">
          <div class="col-10 my-3">
            <p>Shipping</p>
            <p>Items Total</p>
            <p>Total Payment</p>
          </div>
          <div class="col-2 my-3">
            <p>$0.20</p>
            <p>$35.80</p>
            <p>$36.00</p>
          </div>
        </div>

        <div class="container pt-4 my-3">
          <div class="row">
            <button class="btn btn-info btn-block">Confirm Order</button>
          </div>
        </div>
      </body>
</html>
