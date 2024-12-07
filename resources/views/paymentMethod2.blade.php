<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Georgia O'Keeffe</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
      <link rel="stylesheet" href="{{asset('css/paymentMethod.css')}}">
      <script src="" defer></script>
  </head>
  <body>
    

    @include('include.header')
    <h1>Payment Method</h1>
    <div class="payment-form">
        <form action="{{url('/paymentStatus2')}}" method="GET">
            <div>
                <h3>Virtual Account</h3>
                <label class="radio-option">
                    <div class="option">
                        <input type="radio" name="VA" value="BCA">
                        <img src="./assets/bca.jpg" alt="BCA" class="radio-img">
                        <h3>BCA</h3>
                    </div>
                </label>
                <label class="radio-option">
                    <div class="option">
                        <input type="radio" name="VA" value="BNI">
                        <img src="./assets/logo bni.jpg" alt="BNI" class="radio-img">
                        <h3>BNI</h3>
                    </div>
                </label>
                <label class="radio-option">
                    <div class="option">
                        <input type="radio" name="VA" value="BRI">
                        <img src="./assets/BRI Logo (Bank Rakyat Indonesia) - PNG Logo Vector Brand Downloads (SVG, EPS).jpg" alt="Mandiri" class="radio-img">
                        <h3>BRI</h3>
                    </div>
                </label>
            </div>
            <br />

            <div>
                <h3>Bank Transfer</h3>
                <label class="radio-option">
                    <div class="option">
                        <input type="radio" name="BT" value="BCA">
                        <img src="./assets/bca.jpg" alt="BCA" class="radio-img">
                        <h3>BCA</h3>
                    </div>
                </label>
                <label class="radio-option">
                    <div class="option">
                        <input type="radio" name="BT" value="BNI">
                        <img src="./assets/logo bni.jpg" alt="BNI" class="radio-img">
                        <h3>BNI</h3>
                    </div>
                </label>
                <label class="radio-option">
                    <div class="option">
                        <input type="radio" name="BT" value="BRI">
                        <img src="./assets/BRI Logo (Bank Rakyat Indonesia) - PNG Logo Vector Brand Downloads (SVG, EPS).jpg" alt="Mandiri" class="radio-img">
                        <h3>BRI</h3>
                    </div>
                </label>
            </div>
            <br />
            <div>
                <h3>E-Wallet</h3>
                <label class="radio-option">
                    <div class="option">
                        <input type="radio" name="EW" value="BCA">
                        <img src="./assets/GoPay Logo.jpg" alt="BCA" class="radio-img">
                        <h3>BCA</h3>
                    </div>
                </label>
                <label class="radio-option"> 
                    <div class="option">
                        <input type="radio" name="EW" value="BNI">
                        <img src="./assets/shopeepay.jpg" alt="BNI" class="radio-img">
                        <h3>BNI</h3>
                    </div>
                </label>
                <label class="radio-option">
                    <div class="option">
                        <input type="radio" name="EW" value="Mandiri">
                        <img src="./assets/ovo.jpg" alt="Mandiri" class="radio-img">
                        <h3>Mandiri</h3>
                    </div>
                </label>
            </div>
            <br />

            <div>
                <h3>Pay at Merchant</h3>
                <label class="radio-option">
                    <div class="option">
                        <input type="radio" name="PM" value="BCA">
                        <img src="./assets/indomaret.jpg" alt="BCA" class="radio-img">
                        <h3>Indormaret</h3>
                    </div>
                </label>
                <label class="radio-option">
                    <div class="option">
                        <input type="radio" name="PM" value="BNI">
                        <img src="./assets/alfamart.jpg" alt="BNI" class="radio-img">
                        <h3>Alfamart</h3>
                    </div>
                </label>
            </div>
            <input type="submit" class="pay" name="pay" value="Pay">
        </form>
    </div>
</body>