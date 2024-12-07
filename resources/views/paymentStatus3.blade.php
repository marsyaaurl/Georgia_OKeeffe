<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Georgia O'Keeffe</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
      <link rel="stylesheet" href="{{asset('css/paymentstatus.css')}}">
      <script src="" defer></script>
  </head>
  <body>

        @include('include.header')
        <div class="waiting">
            <h1>Waiting For Your Payment</h1>
            <h3>Time left</h3>
            <div id="timer">15m 0s</div>
            <script>
                const countdownDuration = 15 * 60 * 1000;
            
                const countDownDate = new Date().getTime() + countdownDuration;
            
                const x = setInterval(function() {
                    const now = new Date().getTime();
            
                    const distance = countDownDate - now;
            
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
                    document.getElementById("timer").innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
            
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("timer").innerHTML = "EXPIRED";
                    }
                }, 1000);
            </script>
            <br />
            <h3>Virtual Account Number</h3>
            <p>1827635101828615180</p>
            <input type="submit" name="check" value="check" class="check" id="check-button">
            <script>
                document.getElementById("check-button").addEventListener("click", function(event) {
                    event.preventDefault();
                    window.location.href = "{{url('/invoice3')}}";
                });
            </script>            
        </div>
    </body>
</html>