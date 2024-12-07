<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Georgia O'Keeffe</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link rel="stylesheet" href="{{asset('css/buyticket3.css')}}" />
    <script src="{{asset('js/buyticket3.js')}}" defer></script>
  </head>
  <body>
    @include('include.header')

    <div class="ticket">
      <h1>A Circle that Nothing Can Break</h1>
      <div class="exhib-info">
        <img src="./assets/exhibupcom.png" alt="" />
        <div>
          <h2>December 8, 2022 - November 2, 2025</h2>
          <img src="" alt="" />
          <h3><b>Santa Fe, NM, </b><span> Georgia O'Keeffe Museum</span></h3>
          <p>
            A Circle that Nothing Can Break explores how Georgia O’Keeffe imbued shapes—the
            circle in particular—with emotional symbolism and abstract ideas. Circles and
            spirals appeared repeatedly in O’Keeffe’s drawings of the 1910s; however, the
            motif all but disappeared from her work in 1946. In the 1970s, near the close
            of her career, she returned to the theme. Including works never exhibited during
            her lifetime, this exhibition delves into a vitally significant theme in her life
            and artistic career.
          </p>
          <br />
          <h2>$60 General Admission | $50 Museum Member</h2>
        </div>
      </div>
      <div class="ticket-form">
        <form action="{{ route('buyticket3.post') }}" method="POST">
          @csrf
          @method('post')
          <label>Name</label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Your Name"
            required
          />

          <label>Email</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Your Email"
            required
          />

          <label for="date">Select Date</label>
          <input type="date" name="selectDate" placeholder="Select Date" required/>

          <label for="time">Select Time</label>
          <select id="time" name="selectTime">
            <option value="10.30 AM - 12.00 PM">10.30 AM - 12.00 PM</option>
            <option value="12.30 PM - 02.00 PM">12.30 PM - 02.00 PM</option>
            <option value="02.30 PM - 04.00 PM">02.30 PM - 04.00 PM</option>
          </select>

          <h4>How it works:</h4>
          <p>
            1. Tickets are available 60 days in advance.<br />
            2. Due to the size of our galleries, we are only able sell up to 8
            tickets per group. For information on visiting the Museum with a
            group larger than 8, please visit our Group Admission page.<br />
            3. Same-day tickets are available in a limited capacity at the
            Museum until sold out.<br />
            4. View a map of the Museum Galleries.<br />
            5. Discover more! Bring your earbuds on your visit to access the
            Museum’s Free Audio Guide.<br />
            6. Entry times are available every 15 minutes, until sold out.<br />
            7. To ensure you get the most from your museum experience, our daily
            ticket reservations end at 4:15 pm. Please arrive at the time of
            your reservation. After entering, you can stay as long as the Museum
            is open.<br />
            8. Explore all the Georgia O’Keeffe Museum’s free and discounted
            admission opportunities here.<br />
            9. Reciprocal member tickets can be booked by calling visitor
            services. For help booking tickets or any other questions, contact
            visitor services at 505-946-1000 or contact@gokm.org.<br />
          </p>

          <label for="category">Category</label>
          <select id="category" name="category">
            <option value="Adult">Adult</option>
            <option value="Kids">Kids</option>
            <option value="Infant">Infant</option>
          </select>

          <label for="paymentMethod">Payment Method</label>
            <select id="method" name="paymentMethod" required>
                <option value="" disabled selected>
                    Select a method
                </option>
                <option value="bank">BCA Virtual Account</option>
                <option value="gopay">GoPay</option>
                <option value="shopeepay">ShopeePay</option>
            </select>

          <label for="ticket-quantity"><h4>Quantity</h4></label>
          <div class="input-group">
            <button type="button" id="minus">-</button>
            <input type="number" id="ticket-quantity" value="1" name="quantity"/>
            <button type="button" id="plus">+</button>
          </div>

          <div class="total-container">
            <label for="total-amount" class="total-label">Total</label>
            <input type="text" name="totalPrice" id="total-amount" value="50" readonly />
          </div>

          <input type="submit" class="checkout" name="checkout" value="Checkout">
        </form>
      </div>
    </div>
  </body>
</html>
