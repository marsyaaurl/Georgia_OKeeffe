<!DOCTYPE html>
<html lang="en">
<head>
    <title>Georgia O'Keeffe</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
    <link rel="stylesheet" href="{{ asset('css/invoice2.css') }}">
</head>
<body>

@include('include.header')

<div class="title">
    <h1>Rooted in Place</h1>
    <br />
    <p>Invoice Number<br /><b>{{ 'INV' . str_pad($ticket->id, 6, '0', STR_PAD_LEFT) }}</b></p>
</div>

<div class="invoice">
    <h2>Ticket Payment</h2>
    <hr>
    <table>
        <tr>
            <td class="payment-info">Invoice Number</td>
            <td class="payment-info">{{ 'INV' . str_pad($ticket->id, 6, '0', STR_PAD_LEFT) }}</td>
        </tr>
        <tr>
            <td class="payment-info">In the name of</td>
            <td class="payment-info">{{ $ticket->name }}</td>
        </tr>
        <tr>
            <td class="payment-info">Email</td>
            <td class="payment-info">{{ $ticket->email }}</td>
        </tr>
        <tr>
            <td class="payment-info">Purchased on</td>
            <td class="payment-info">{{ \Carbon\Carbon::parse($ticket->created_at)->format('F jS, Y') }}</td>
        </tr>
        <tr>
            <td class="payment-info">Effective on</td>
            <td class="payment-info">{{ \Carbon\Carbon::parse($ticket->selectDate)->format('F jS, Y') }}</td>
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
            <td>Rooted in Place</td>
            <td>{{ $ticket->quantity }}</td>
            <td>${{ number_format($ticket->totalPrice / $ticket->quantity, 2) }}</td>
            <td>${{ number_format($ticket->totalPrice, 2) }}</td>
        </tr>
    </table>
    <br />

    <table class="subtotal">
        <tr>
            <td>Subtotal</td>
            <td>${{ number_format($ticket->totalPrice, 2) }}</td>
        </tr>
        <tr>
            <td>Discount</td>
            <td>0</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>${{ number_format($ticket->totalPrice, 2) }}</td>
        </tr>
    </table>
</div>

</body>
</html>
