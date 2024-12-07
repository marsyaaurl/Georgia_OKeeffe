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
                >Ladder to the Moon, 1958 by Georgia O'Keeffe
            </h1>
        </div>
        <div class="paintingdesc">
            <div class="paintingdesc-painting">
                <img
                    src="https://www.georgiaokeeffe.net/assets/img/paintings/ladder-to-the-moon.jpg"
                    class="whitec-desc2"
                    alt="painting of white Calico"
                />
                <p class="paintingdesc-name">
                    Ladder to the Moon, 1958 by Georgia O'Keeffe
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
                            The images are all of transition: the ladder itself
                            implies passage from one level to another; the moon
                            is cut neatly in half by the bold slicing light,
                            halfway between full and new; and the evening sky is
                            in flux, still pale along the line of the horizon,
                            shading into deep azure night at the top of the
                            canvas. ”
                        </p>
                    </div>
                </div>

                <div class="paintingdesc-desc">
                    <p class="paintingdesc-title">
                        <span style="color: #1a4d2e"
                            ><b>Ladder to the Moon</b></span
                        ><br />1958
                    </p>
                    <p>
                        Medium :<br />
                        Oil on canvas<br />
                    </p>
                    <p>
                        Dimensions : <br />
                        40 3/16 × 30 1/4 × 1 3/8in. (102.1 × 76.8 × 3.5 cm)
                        Accession number
                    </p>
                </div>
            </div>

            <div class="paintingdesc-yapping">
                <p>
                    In 1958, O'Keeffe painted Ladder to the Moon. The painting
                    shows a handmade wooden ladder suspended in the turquoise
                    sky. In the background are the pitch-black Pedernal
                    Mountains and a pearl-colored half-moon. This painting was
                    very similar to a picture taken of O'Keeffe and her
                    surroundings at Ghost Ranch. In the picture, a large wooden
                    ladder is leaned against an outer wall of a patio from where
                    it rises up into the sky with the Pedernal Mountains in the
                    background. Some say her immediate surroundings at Ghost
                    Ranch were the inspiration for this piece of art. Others
                    interpret the painting as a religious work. In Pueblo
                    culture, the ladder is used to symbolize the link between
                    the Pueblos and cosmic forces. The fact that the ladder is
                    pointed up in the sky may represent the link between nature
                    and the cosmos.
                </p>

                <p>
                    In her biography of O'Keeffe, Roxanna Robinson describes
                    this work as somewhat of a self-portrait of the artist in
                    her later years, highlighting the transitory nature of the
                    stage of life she was at when she painted it. She writes,
                </p>

                <p>
                    The images are all of transition: the ladder itself implies
                    passage from one level to another; the moon is cut neatly in
                    half by the bold slicing light, halfway between full and
                    new; and the evening sky is in flux, still pale along the
                    line of the horizon, shading into deep azure night at the
                    top of the canvas
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
