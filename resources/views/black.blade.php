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
                >Black Place, 1944 by Georgia O'Keeffe
            </h1>
        </div>
        <div class="paintingdesc">
            <div class="paintingdesc-painting">
                <img
                    src="https://www.georgiaokeeffe.net/assets/img/paintings/black-place.jpg"
                    class="whitec-desc"
                    alt="painting of white Calico"
                />
                <p class="paintingdesc-name">
                    Black Place, 1944 by Georgia O'Keeffe
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
                            The Black Place is about one hundred and fifty miles
                            from Ghost Ranch and as you come to it over a hill,
                            it looks like a mile of elephants - grey hills all
                            about the same size with almost white sand at their
                            feet. When you get into the hills you find that all
                            the surfaces are evenly crackled so walking and
                            climbing are easy. I don't remember what I painted
                            on my first trip over there. I have gone so many
                            times. . . . There are probably twelve or fifteen
                            paintings of the Black Place and I painted it from
                            memory - red and later green.
                        </p>
                    </div>
                </div>

                <div class="paintingdesc-desc">
                    <p class="paintingdesc-title">
                        <span style="color: #1a4d2e"><b>Black Place</b></span
                        ><br />1944
                    </p>
                    <p>
                        Medium :<br />
                        Oil on canvas<br />
                    </p>
                    <p>
                        Dimensions : <br />
                        36 3/16 x 40 1/8 in.
                    </p>
                </div>
            </div>

            <div class="paintingdesc-yapping">
                <p>
                    The Black Place was the name O'Keeffe gave to one of her
                    favorite painting sites, located in the Bisti Badlands in
                    Navajo country, about 150 miles northwest of her home in
                    Ghost Ranch. It was a stretch of desolate gray and black
                    hills that the artist said looked from a distance like "a
                    mile of elephants."
                </p>

                <p>O'Keeffe wrote about this location:</p>

                <p>
                    The Black Place is about one hundred and fifty miles from
                    Ghost Ranch and as you come to it over a hill, it looks like
                    a mile of elephants - grey hills all about the same size
                    with almost white sand at their feet. When you get into the
                    hills you find that all the surfaces are evenly crackled so
                    walking and climbing are easy. I don't remember what I
                    painted on my first trip over there. I have gone so many
                    times. . . . There are probably twelve or fifteen paintings
                    of the Black Place and I painted it from memory - red and
                    later green.
                </p>

                <p>
                    Isolated far off the road and away from all civilization,
                    O'Keeffe made several camping trips there in the 1940s, with
                    her assistant Maria Chabot. Writing to Stieglitz in 1944,
                    the year Black Place II was made, Chabot described in words
                    what O'Keeffe captured in paint: "... the black hills -
                    black and grey and silver with arroyos of white sand curving
                    around them - pink and white strata running through them.
                    They flow downward, one below the next. Incredible
                    stillness!".
                </p>

                <p>
                    Over a period of fourteen years, from 1936 to 1949, her
                    visits to the Black Place sparked a torrent of work that was
                    almost unparalleled in her career. Between 1944 and 1945
                    alone, she completed six canvases, including Black Place II,
                    one very large pastel, and at least nine pencil sketches.
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
