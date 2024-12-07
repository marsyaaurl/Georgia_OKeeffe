<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Georgia O'Keeffe</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
      <link rel="stylesheet" href="{{asset('css/invoice.css')}}">
      <script src="" defer></script>
  </head>
  <body>

    @include('include.header')
        <div class="title">
            <h1>Georgia O’Keeffe: Making a Life</h1>
            <br />
            <p>Invoice Number<br /><b>INV12-192-1203</b></p>
        </div>
        <div class="invoice">
            <h2>Ticket Payment</h2>
            <hr>
            <table>
                <tr>
                    <td class="payment-info">Invoice Number</td>
                    <td class="payment-info">INV12-192-1203</td>
                </tr>
                <tr>
                    <td class="payment-info">In the name of</td>
                    <td class="payment-info">Quyun</td>
                </tr>
                <tr>
                    <td class="payment-info">Email</td>
                    <td class="payment-info">quyunpayung@gmail.com</td>
                </tr>
                <tr>
                    <td class="payment-info">Purchased on</td>
                    <td class="payment-info">November 29th 2024</td>
                </tr>
                <tr>
                    <td class="payment-info">Effective on</td>
                    <td class="payment-info">November 30th 2024</td>
                </tr>
            </table>
            <br />
            
            <table class="payment-detail">
                <tr>
                    <th>Event</th>
                    <th>Qty</th>
                    <th>Unit Price</th>
                    <th>Amount</th>
                </tr>
                <tr>
                    <td>Georgia O'Keeffe: Making a Life</td>
                    <td>2</td>
                    <td>$22.00</td>
                    <td>$44.00</td>
                </tr>
            </table>
            <br />

            <table class="subtotal">
                <tr>
                    <td>Subtotal</td>
                    <td>$44.00</td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$44.00</td>
                </tr>
            </table>
        </div>
    </body>
</html>