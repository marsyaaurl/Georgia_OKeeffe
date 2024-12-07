<html>
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
        <link rel="stylesheet" href="{{asset('css/formmembership.css')}}" />
        <script src="{{asset('js/formmembership.js')}}" defer></script>
    </head>
    <body>
        @include('include.header')

        <div class="form-container">
            <h1>Purchase Membership</h1>
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
                <a href="form.html"
                    ><button type="submit" class="submit-btn">Submit</button></a
                >
            </form>
        </div>
    </body>
</html>
