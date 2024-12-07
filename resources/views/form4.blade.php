<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Georgia O'Keeffe Exhibitions</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('css/home.css')}}" />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Inter"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Amiri"
        />
        <link rel="stylesheet" href="{{asset('css/form4.css')}}" />
        <script src="{{asset('js/form.js')}}" defer></script>
    </head>
    <body>
        @include('include.header')

        <div class="form-container">
            <h1>Purchase This Merch</h1>
            <form id="ticketForm">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Your full name"
                        required
                    />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Your email address"
                        required
                    />
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="Your phone number"
                        required
                    />
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input
                        type="text"
                        id="address"
                        name="address"
                        placeholder="Your address"
                        required
                    />
                </div>
                <div class="form-group quantity-group">
                    <label for="quantity">Quantity</label>
                    <div class="quantity">
                        <button
                            type="button"
                            class="minus"
                            aria-label="Decrease"
                        >
                            &minus;
                        </button>
                        <input
                            type="number"
                            id="quantity"
                            class="input-box"
                            value="1"
                            min="1"
                            max="10"
                        />
                        <button
                            type="button"
                            class="plus"
                            aria-label="Increase"
                        >
                            &plus;
                        </button>
                    </div>
                </div>
                <div class="total-container">
                    <span class="total-label">Total</span>
                    <span type="number" id="total-amount" data-price="18.00"
                        >$18.00</span
                    >
                </div>
                <div class="form-group">
                    <label for="method">Payment Method</label>
                    <select id="method" name="method" required>
                        <option value="" disabled selected>
                            Select a method
                        </option>
                        <option value="bank">BCA Virtual Account</option>
                        <option value="gopay">GoPay</option>
                        <option value="shopeepay">ShopeePay</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Purchase Status</label>
                    <input
                        type="text"
                        id="status"
                        name="status"
                        value="Pending"
                        readonly
                    />
                </div>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </body>
</html>