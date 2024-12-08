<html>
<head>
    <title>Georgia O'Keeffe Exhibitions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
    <link rel="stylesheet" href="{{asset('css/exhib.css')}}">
    <script src="{{asset('js/exhib.js')}}" defer></script>
</head>
<body>
    @include('include.header')

    <div class="container">
        <div class="tabs">
            <a href="#" class="tab active" data-target="current">Current</a>
            <a href="#" class="tab" data-target="upcoming">Upcoming</a>
            <a href="#" class="tab" data-target="past">Past</a>
        </div>

        <div id="current" class="exhibition-section" style="display: block;">
            <div class="exhibition-card">
                <div class="exhibition-info">
                    <p>Current Exhibition</p><p class="date">December 8, 2022 - November 2, 2025</p>
                    <h2>Georgia O'Keeffe: Making a Life</h2>
                    <p><img src="./assets/location.jpg" alt="location icon" class="location-icon"> Santa FE,NM  Georgia O'Keeffe Museum</p>
                    <br>
                    <p style="font-size: 15px;">Georgia O'Keeffe: Making a Life explores the artist's identity as a "Maker" – an individual who carefully curated her life, personal style and artistic practice. This exhibition showcases art and objects from the Museum's collection that exemplify O'Keeffe's way of living and creating, including books, furniture, artist's materials, clothing and accessories. Visitors will be invited to learn more about the art and life of Georgia O'Keeffe, and the wide-ranging scope of the Museum's collections.</p>

                <div class="ticket-info">
                    <p style="color: black;">$50 General Admission</p><br>
                    <button class="buy-ticket" data-exhibition="Making a Life"><a href="{{url('/buyticket')}}">Buy Ticket</a></button>
                </div>
            </div>
                <img src="./assets/exhib1.jpg" alt="Exhibition Image 1" class="exhib-img-right">
            </div>
        </div>

        <div id="current2" class="exhibition-section" style="display: block;">
            <div class="exhibition-card">
                <div class="exhibition-info">
                    <p>Current Exhibition</p><p class="date">December 8, 2022 - November 2, 2025</p>
                    <h2>Rooted in Place</h2>
                    <p><img src="./assets/location.jpg" alt="location icon" class="location-icon"> Santa FE,NM  Georgia O'Keeffe Museum</p>
                    <br>
                    <p style="font-size: 15px;">Many of us are familiar with Georgia O'Keeffe's explorations of flowers; however, an even more persistent botanical subject in her work was trees. Throughout her life, O'Keeffe returned over and over to depictions and descriptions of trees in paintings, sketches, watercolors, and even in her letters. She captured trees in drawings and paintings from her travels around the world and from the places she made home.</p>

                <div class="ticket-info">
                    <p style="color: black;">$50 General Admission</p><br>
                    <button class="buy-ticket" data-exhibition="Making a Life"><a href="{{url('/buyticket2')}}">Buy Ticket</a></button>
                </div>
            </div>
                <img src="./assets/exhib2.jpg" alt="Exhibition Image 2" class="exhib-img-right">
            </div>

        </div>

        <div id="upcoming" class="exhibition-section" style="display: none;">
            <div class="exhibition-card">
                <div class="exhibition-info">
                    <p>Upcoming Exhibition</p><p class="date">December 7, 2024 - October 31, 2025</p>
                    <h2>A Circle that Nothing Can Break</h2>
                    <p><img src="./assets/location.jpg" alt="location icon" class="location-icon"> Santa FE,NM  Georgia O'Keeffe Museum</p>
                    <br>
                    <p style="font-size: 15px;">A Circle that Nothing Can Break explores how Georgia O’Keeffe imbued shapes—the circle in particular—with emotional symbolism and abstract ideas. Circles and spirals appeared repeatedly in O’Keeffe’s drawings of the 1910s; however, the motif all but disappeared from her work in 1946. In the 1970s, near the close of her career, she returned to the theme. Including works never exhibited during her lifetime, this exhibition delves into a vitally significant theme in her life and artistic career.</p>

                <div class="ticket-info">
                    <p style="color: black;">$50 General Admission</p><br>
                    <button class="buy-ticket" data-exhibition="Making a Life"><a href="{{url('/buyticket3')}}">Pre Order Ticket</a></button>
                </div>
            </div>
                <img src="./assets/exhibupcom.png" alt="Exhibition Image 3" class="exhib-img-right">
            </div>

        </div>

        <div id="past" class="exhibition-section" style="display: none;">
            <div class="exhibition-card">
                <div class="exhibition-info">
                    <p>Past Exhibition</p><p class="date">April 11, 2023 - March 18, 2024</p>
                    <h2>Around the World with O’Keeffe</h2>
                    <p><img src="./assets/location.jpg" alt="location icon" class="location-icon"> Abiquiú, NM The O'Keeffe Welcome Center in Abiquiú, New Mexico</p>
                    <br>
                    <p style="font-size: 15px;">Beginning April 13th, visit the Museum’s latest exhibition, Around the World with O’Keeffe, at the O’Keeffe Welcome Center in Abiquiú. Learn about O’Keeffe’s international travels through a wide range of objects she collected on those trips, which influenced both her art and her design aesthetic. From informational pamphlets to cooking ingredients to design ideas for her home and garden, they reflect what she chose to keep as mementos of her travels-either to be shared as part of her home, or tucked away for her own viewing and recollections.</p>

                    <div class="ticket-info">
                        <p style="color: black;">$50 General Admission</p><br>
                        <button class="explore-exhibition" data-exhibition="Around the World with O’Keeffe" onclick="purchaseTicket('https://www.okeeffemuseum.org/exhibitions/around-the-world-with-okeeffe/')">Explore Exhibition</button>
                    </div>
                </div>
                <img src="./assets/exhibpast.png" alt="Exhibition Image 4" class="exhib-img-right">
            </div>
        </div>

        <div id="past2" class="exhibition-section" style="display: none;">
            <div class="exhibition-card">
                <div class="exhibition-info">
                    <p>Past Exhibition</p><p class="date">January 1, 2023 - December 31, 2023</p>
                    <h2>Selections from The Collection</h2>
                    <p><img src="./assets/location.jpg" alt="location icon" class="location-icon"> Santa FE,NM Georgia O'Keeffe Museum</p>
                    <br>
                    <p style="font-size: 15px;">An ever-changing group of selected works from the Museum’s collection are displayed in several thematic galleries at the Museum in Santa Fe. These galleries share Georgia O’Keeffe’s art from O’Keeffe’s student days and early work to some of her latest paintings. These sections include watercolors, charcoal drawings, pastels, oil paintings, and sculptures, spanning a career of more than eighty years. Through these, and drawing from our photographic collections, the Museum offers an unparalleled window into O’Keeffe’s practice as an artist.</p>
                    <div class="ticket-info">
                        <p style="color: black;">$50 General Admission</p><br>
                        <button class="explore-exhibition" data-exhibition="Around the World with O’Keeffe" onclick="purchaseTicket('https://www.okeeffemuseum.org/exhibitions/selections-from-the-collection-2/')">Explore Exhibition</button>
                    </div>
                </div>
                <img src="./assets/exhibpast2.png" alt="Exhibition Image 5" class="exhib-img-right">
            </div>
        </div>
</body>
</html>
