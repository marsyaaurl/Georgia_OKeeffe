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
                >Oriental Poppies, 1928 by Georgia O'Keeffe
            </h1>
        </div>

        <div class="paintingdesc">
            <div class="paintingdesc-painting">
                <img
                    src="https://www.georgiaokeeffe.net/assets/img/paintings/oriental-poppies.jpg"
                    class="whitec-desc"
                    alt="painting of white Calico"
                />
                <p class="paintingdesc-name">
                    Oriental Poppies, 1928 by Georgia O'Keeffe
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
                            Anyone who doesn't feel the crosses simply doesn't
                            get that country. If I could paint the flower
                            exactly as I see it no one would see what I see
                            because I would paint it small like the flower is
                            small. So I said to myself - I'll paint what I see -
                            what the flower is to me but I'll paint it big and
                            they will be surprised into taking time to look at
                            it - I will make even busy New Yorkers take time to
                            see what I see of flowers. ”
                        </p>
                    </div>
                </div>

                <div class="paintingdesc-desc">
                    <p class="paintingdesc-title">
                        <span style="color: #1a4d2e"
                            ><b>Oriental Poppies</b></span
                        ><br />1928
                    </p>
                    <p>
                        Medium :<br />
                        Oil on canvas<br />
                    </p>
                    <p>
                        Dimensions : <br />
                        30 x 40 1/8 in.
                    </p>
                </div>
            </div>

            <div class="paintingdesc-yapping">
                <p>
                    Flowers fascinated Georgia and they were her favorite
                    subject on canvas. She seems to have liked particular
                    flowers - the calla lily, poppy, canna, iris, petunia, and
                    jimson weed. O'Keeffe painted Oriental Poppies in 1928. This
                    stunning work was declared a groundbreaking, art
                    masterpiece.
                </p>

                <p>
                    O'Keeffe was very much drawn to the abstract - and
                    abstracting aspects of the flowers. She explores the
                    elements of colour, shape and texture of the objects she
                    paints. Which of these is most dominant seems to depend on
                    the individual flower. She was preoccupied with simple forms
                    from the very beginning and her earliest flower paintings.
                    Colour is often bold, frequently carefully modulated but
                    tends to come across as somewhat 'flat'.
                </p>

                <p>
                    In "Oriental Poppies," O'Keeffe depicts two giant poppy
                    flowers. Measuring 30" x 40", this oil painting is an
                    explosion of brilliant colors on a vast canvas, lending a
                    mesmerizing effect. O'Keefe used dazzling red and orange as
                    the main color of the petals. The hollowed centre and the
                    inner contours of the flowers are painted in deep purple.
                    The skillful shading and velvety finish of the petals
                    accentuates the vibrancy of the flowers. "Oriental Poppies"
                    almost looks like a close up photograph. O'Keeffe did not
                    give any background to the painting, to artfully draw focus
                    onto the flowers. The absence of context in the painting
                    presents them in a new light as pure abstracts. "Oriental
                    Poppies" exudes a startling pull, as if casting a hypnotic
                    spell on the viewer.
                </p>

                <p>
                    Georgia O'Keeffe believed that due to the fast-paced lives
                    people live, they merely glance at flowers, but never really
                    observed their exquisiteness. She wished to give such
                    rushing people experience and the feel of the true beauty of
                    flowers. In her words,
                </p>

                <p>
                    Georgia O'Keeffe's ability to capture beauty that often went
                    unobserved led to her receipt of the Presidential Medal of
                    Freedom and the National Medal of Arts as well as election
                    to the American Academy of Arts and Letter.
                </p>

                <p>
                    Oriental Poppies is now a part of a collection at the
                    University of Minnesota Art Museum, Minneapolis.
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
