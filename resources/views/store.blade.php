<html>
    <head>
        <title>Georgia O'Keeffe Exhibitions</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="home.css" />
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
        <link rel="stylesheet" href="{{asset('css/store.css')}}" />
        <script src="{{asset('js/store.js')}}" defer></script>
    </head>
    <body>
        @include('include.header')
        <section class="store-container">
            <h1>Merchandise</h1>
            <div class="products">
                <div class="product">
                    <img src="./assets/product1.png" alt="Product 1" />
                    <h3>Flower Painting Poster</h3>
                    <p>$25.00</p>
                    <a href="{{url('/form')}}"
                        ><button
                            class="buy-btn"
                            data-product="Flower Painting Poster"
                            data-price="25"
                        >
                            Buy
                        </button></a
                    >
                </div>
                <div class="product">
                    <img src="./assets/product2.jpg" alt="Product 2" />
                    <h3>Tote Bag</h3>
                    <p>$15.00</p>
                    <a href="{{url('/form2')}}"
                        ><button
                            class="buy-btn"
                            data-product="Georgia O'Keeffe Tote Bag"
                            data-price="15"
                        >
                            Buy
                        </button></a
                    >
                </div>
                <div class="product">
                    <img src="./assets/product3.png" alt="Product 3" />
                    <h3>Keychain</h3>
                    <p>$7.00</p>
                    <a href="{{url('/form3')}}"
                        ><button
                            class="buy-btn"
                            data-product="Exhibition Ticket"
                            data-price="50"
                        >
                            Buy
                        </button></a
                    >
                </div>
            </div>

            <div class="products">
                <div class="product">
                    <img src="./assets/product4.jpg" alt="Product 4" />
                    <h3>Art Mug</h3>
                    <p>$18.00</p>
                    <a href="{{url('/form4')}}"
                        ><button
                            class="buy-btn"
                            data-product="Art Mug"
                            data-price="18"
                        >
                            Buy
                        </button></a
                    >
                </div>
                <div class="product">
                    <img src="./assets/product5.jpeg" alt="Product 5" />
                    <h3>Painting Book</h3>
                    <p>$12.00</p>
                    <a href="{{url('/form5')}}"
                        ><button
                            class="buy-btn"
                            data-product="Painting Book"
                            data-price="30"
                        >
                            Buy
                        </button></a
                    >
                </div>
            </div>
        </section>
    </body>
</html>
