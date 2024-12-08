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
                >Cow's Skull with Calico Roses, 1931 by Georgia O'Keeffe
            </h1>
        </div>
        <div class="paintingdesc">
            <div class="paintingdesc-painting">
                <img
                    src="https://www.georgiaokeeffe.net/assets/img/paintings/cows-skull-with-calico-roses.jpg"
                    class="whitec-desc2"
                    alt="painting of white Calico"
                />
                <p class="paintingdesc-name">
                    Cow's Skull with Calico Roses, 1931 by Georgia O'Keeffe
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
                            To me, they are as beautiful as anything I know. To
                            me, they are strangely more living than the animals
                            walking around. The bones seem to cut sharply to the
                            center of something that is keenly alive on the
                            desert even though it is vast and empty and
                            untouchable and knows no kindness with all its
                            beauty ”
                        </p>
                    </div>
                </div>

                <div class="paintingdesc-desc">
                    <p class="paintingdesc-title">
                        <span style="color: #1a4d2e"
                            ><b>Cow's Skull with Calico Roses </b></span
                        ><br />1931
                    </p>
                    <p>
                        Medium :<br />
                        Oil on canvas<br />
                    </p>
                    <p>
                        Dimensions : <br />
                        36 × 24 in. (91.4 × 61 cm)
                    </p>
                </div>
            </div>

            <div class="paintingdesc-yapping">
                <p>
                    Over the years, O'Keeffe became an anti-authoritarian
                    revolutionary, the notoriety of her lifestyle sometimes
                    overcoming the originality of her work. She shunned European
                    traditions and influence and resisted all manner of
                    paternalism. Like Piet Mondrian, she never signed her
                    paintings, and like Jackson Pollock, she found Native
                    American art as inspiring as Renaissance art. Eventually,
                    she abandoned the New York City art scene that founded her
                    reputation and moved west to New Mexico for a more authentic
                    artistic experience. There, in a landscape unencumbered by
                    undue neighborliness and excessive vegetation, she created
                    work that was timeless, universal, and impersonal.
                </p>

                <p>
                    The rugged mountain terrain with its fossilized formations,
                    saturated color, and naked wilderness held an inexhaustible
                    fascination for O'Keeffe and was a source of inspiration for
                    most of her artistic career.
                </p>

                <p>
                    GeorgiaO'Keeffe said of the sun-bleached bones and skulls
                    she found in the desert:
                </p>

                <p>
                    To me, they are as beautiful as anything I know. To me, they
                    are strangely more living than the animals walking around.
                    The bones seem to cut sharply to the center of something
                    that is keenly alive on the desert even though it is vast
                    and empty and untouchable and knows no kindness with all its
                    beauty ”
                </p>

                <p>
                    From the grandeur and vastness of the western landscape,
                    O'Keeffe extracted a compressed, concise, and reductive
                    style. Breaking away from the constraints of scale, she
                    painted telescopic images that favored the distant and the
                    immediate. She made the small seem large and the large small
                    as she focused on a single isolated object: a mountain, a
                    stone, a flower, a bone. Educated in oriental scroll
                    painting and influenced by the work of Wassily Kandinsky,
                    she understood that emptiness could signify fullness, and
                    she applied that principle in panoramic landscape paintings,
                    as well as in lone objects placed in pictorial space.
                </p>

                <p>
                    Like Frida Kahlo, with whom she maintained a lively
                    correspondence, O'Keeffe became intimately familiar with her
                    subjects, wanting to merge and become one with them at the
                    moment of creation. "I find that I have painted my life" she
                    confided, "things happening in my life - without knowing".
                    Close acquaintance with the subject guided the accurate
                    presentation not only of the outward image but also of the
                    sensation within, transforming the subjective and personal
                    to the mystical and universal.
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
