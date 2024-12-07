<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Georgia O'Keeffe's Work of Art</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" route="{{asset('css/home.css')}}" />
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
                        src="{{asset('assets/balik.png')}}"
                        alt="mau pulang?"
                        class="paintingdesc-back" /></a
                >The White Calico Flower, 1931 by Georgia OKeeffe
            </h1>
        </div>
        <div class="paintingdesc">
            <div class="paintingdesc-painting">
                <img
                    src="https://www.georgiaokeeffe.net/assets/img/paintings/white-calico-flower.jpg"
                    class="whitec-desc"
                    alt="painting of white Calico"
                />
                <p class="paintingdesc-name">
                    The White Calico Flower, 1931 by Georgia OKeeffe
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
                            not a picture of the flower... that can be left to
                            the botanist, - but rather an irregular pattern of
                            lines and spaces, something far beyond the mere
                            drawing of a flower from nature.
                        </p>
                    </div>
                </div>

                <div class="paintingdesc-desc">
                    <p class="paintingdesc-title">
                        <span style="color: #1a4d2e"
                            ><b>The Wredhite Calico Flower</b></span
                        ><br />1931
                    </p>
                    <p>
                        Medium : Oil on canvas<br />
                        Oil on canvas
                    </p>
                    <p>
                        Dimensions :<br />30 3/16 x 36 3/16in. (76.7 x 91.9 cm)
                    </p>
                </div>
            </div>

            <div class="paintingdesc-yapping">
                <p>
                    Georgia O'Keeffe was greatly influenced by Arthur Wesley
                    Dow, with whom she studied composition for two years at
                    Columbia Teachers College. In his art book, Compositions,
                    Dow told students to paint,
                </p>

                <p>
                    Liberated by Dow's unique approach to art, O'Keeffe took the
                    notions of going "beyond the mere drawing of a flower" to
                    dazzling extremes. In her large floral designs, O'Keeffe not
                    only catches the 'still object' - canvases swimming with
                    swirls of voluptuously curved, pulsating with color - but
                    also seems to dive into the very heart of the flower itself,
                    pulling the viewer in with her.
                </p>

                <p>
                    Dow also stressed the importance of an "oriental aesthetic",
                    in particular, the Japanese concept of notan, where a
                    painting is composed using balance values of lights and
                    darks. In many O'Keeffe floral paintings, especially The
                    White Calico Flower, so reminiscent of The Great Wave off
                    Kanagawa by Katsushika Hokusai, Dow's "orientalizing"
                    influence is clearly evident. O'Keeffe would attribute Dow's
                    measured but decorative approach to composition as the basis
                    for her lifelong personal and professional compulsion to
                    'fill a space in a beautiful way.'
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
