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
                >New York Street with Moon, 1925 by Georgia O'Keeffe
            </h1>
        </div>
        <div class="paintingdesc">
            <div class="paintingdesc-painting">
                <img
                    src="https://www.georgiaokeeffe.net/assets/img/paintings/new-york-street-with-moon.jpg"
                    class="whitec-desc2"
                    alt="painting of white Calico"
                />
                <p class="paintingdesc-name">
                    New York Street with Moon, 1925 by Georgia O'Keeffe
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
                            One can't paint New York as it is, but rather as it
                            is felt.
                        </p>
                    </div>
                </div>

                <div class="paintingdesc-desc">
                    <p class="paintingdesc-title">
                        <span style="color: #1a4d2e"
                            ><b>New York Street with Moon</b></span
                        ><br />1925
                    </p>
                    <p>
                        Medium :<br />
                        Oil on canvas<br />
                    </p>
                    <p>
                        Dimensions : <br />
                        30 3/16 x 36 3/16in. (76.7 x 91.9 cm)
                    </p>
                </div>
            </div>

            <div class="paintingdesc-yapping">
                <p>
                    In 1910, after a period of disillusionment with the art
                    scene and a brief stint as a commercial artist in Chicago,
                    O'Keeffe returned to Virginia where her family had moved
                    eight years before. She taught briefly at the Chatham
                    Institute, where she had attended high school, and then
                    began taking art classes at the University of Virginia. From
                    1914 to 1916, while she taught summer classes in Virginia,
                    O'Keeffe spent her winters studying in New York. While
                    O'Keeffe stayed in New York, she started her painting of
                    this city.
                </p>

                <p>
                    After O'Keeffe's marriage to Stieglitz in 1924, her artist's
                    eye turned outward again. During their residence in New
                    York, O'Keeffe painted many Manhattan skyscapes, including
                    her first Manhattan view, the haunting New York Street with
                    Moon.
                </p>

                <p>
                    With these words, Georgia O'Keeffe neatly conveys her
                    passion for the skyscraper city, as well as her idea of art
                    as a medium for expressing her emotions and her vision of
                    the world. The simplified forms reminiscent of photography
                    and of Precisionism, contribute to the personal symbolism
                    characteristic of her mature work. O'Keeffe continued to
                    paint New York scenes until the onset of the Great
                    Depression, when the utopian spirit of the city vanished.
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
