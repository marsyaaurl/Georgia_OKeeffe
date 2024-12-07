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
                >Blue and Green Music, 1919/1921 by Georgia O'Keeffe
            </h1>
        </div>
        <div class="paintingdesc">
            <div class="paintingdesc-painting">
                <img
                    src="https://www.georgiaokeeffe.net/assets/img/paintings/blue-and-green-music.jpg"
                    class="whitec-desc2"
                    alt="painting of white Calico"
                />
                <p class="paintingdesc-name">
                    Blue and Green Music, 1919/1921 by Georgia O'Keeffe
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
                            You asked me about music. I like it better than
                            anything in the world color gives me the same thrill
                            once in a long, long time, sometimes a story or
                            something that will call a picture to my mind will
                            affect me like music. Do you think we can ever get
                            much of it in Art?"
                        </p>
                    </div>
                </div>

                <div class="paintingdesc-desc">
                    <p class="paintingdesc-title">
                        <span style="color: #1a4d2e"
                            ><b>Blue and Green Music</b></span
                        ><br />1919/1921
                    </p>
                    <p>
                        Medium :<br />
                        Oil on canvas<br />
                    </p>
                    <p>Dimensions : <br />23 x 19 in. (58.4 x 48.3 cm)</p>
                </div>
            </div>

            <div class="paintingdesc-yapping">
                <p>
                    Wassily Kandinsky carefully discusses his ideas of the
                    meaning of color in his book. O'Keeffe obviously had her own
                    palette, and she was probably inspired by Kandinsky, to make
                    it that, her own. Perhaps O'Keeffe tried to bring forth her
                    own visual symphony in this image, perhaps inspired by
                    classical music. Kandinsky views the light blue color as the
                    equal of the sounds of a flute, dark blue means chello and
                    an even darker blue would be an organ.
                </p>

                <p>
                    O'Keeffe's Specials ultimately led to further abstractions
                    such as Blue and Green Music, which features a soaring yet
                    controlled surge of colors. Critics of the time responded
                    with comments based on Regression Theory by Freud and strong
                    emphasis on the feminine nature of her paintings. While this
                    partly troubled O'Keeffe, she also realized that that same
                    feminine essence made her work unique. Unfortunately,
                    O'Keeffe found critical opinion too invasive and after her
                    exhibits of abstractions and the famous flower paintings,
                    she generally produced art that would not be linked with
                    sexuality.
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
