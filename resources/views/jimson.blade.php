<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Georgia O'Keeffe's Work of Art</title>
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
        <link rel="stylesheet" href="{{asset('css/artwork.css')}}" />
    </head>
    <body>
        @include('include.header')

        <div class="artworkslct-title">
            <h1 id="artworkslct">
                <a href="{{url('/artwork')}}"
                    ><img
                        src="../assets/balik.png"
                        alt="mau pulang?"
                        class="paintingdesc-back" /></a
                >Jimson Weed, 1936 by Georgia O'Keeffe
            </h1>
        </div>
        <div class="paintingdesc">
            <div class="paintingdesc-painting">
                <img
                    src="https://www.georgiaokeeffe.net/assets/img/paintings/jimson-weed.jpg"
                    class="whitec-desc2"
                    alt="painting of white Calico"
                />
                <p class="paintingdesc-name">
                    Jimson Weed, 1936 by Georgia O'Keeffe
                </p>
            </div>

            <div class="paintingdesc-kanan">
                <div class="paintingdesc-view-quote">
                    <div class="paintingdesc-quote">
                        <img
                            src="../assets/kutip2.png"
                            alt="gambar kutip2"
                            class="paintingdesc-kutip2"
                        />
                        <p class="paintingdesc-isiquote">
                            When you take a flower in your hand and really look
                            at it, it's your world for the moment, I want to
                            give that world to someone else.
                        </p>
                    </div>
                </div>

                <div class="paintingdesc-desc">
                    <p class="paintingdesc-title">
                        <span style="color: #1a4d2e"><b>Jimson Weed</b></span
                        ><br />1936
                    </p>
                    <p>
                        Medium :<br />
                        Oil on canvas<br />
                    </p>
                    <p>
                        Dimensions : <br />
                        70 x 83-1/2 in.
                    </p>
                </div>
            </div>

            <div class="paintingdesc-yapping">
                <p>
                    Throughout her long career that is just what she did, often
                    rendering a flower or even a weed around her house in
                    Abiquiu, N.M., in extreme close-up, so realistically and
                    with such precision that they have a highly tactile quality.
                    And flowers are what people associate Georgia O'Keeffe with
                    most.
                </p>

                <p>
                    In 1936, cosmetics executive Elizabeth Arden commissioned
                    O'Keeffe to paint Jimson Weed to hang in the exercise room
                    of the new Arden Sports Salon in New York. The result was
                    the largest of O'Keeffe's flower paintings. The artist
                    placed the four blossoms in an exuberant design that repeats
                    the tight rhythm of the pinwheel-shaped plant. She
                    emphasized her subject's fresh beauty with a light,
                    restricted palette.
                </p>
            </div>
        </div>
        <footer>
            <div class="footer">
                <p>Images © Georgia O'Keeffe Museum 2024</p>
            </div>
        </footer>
    </body>
</html>
