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
        <script src="{{asset('js/artwork.js')}}" defer></script>
    </head>
    <body>
        @include('include.header')

        <div id="artwork">
            <h1>Selected Georgia O'Keeffe Paintings</h1>
        </div>

        <div class="artwork">
            <div class="sidebarprofil">
                <img
                    src="https://www.georgiaokeeffe.net/assets/img/georgia-okeeffe.jpg"
                    alt="orang"
                    class="side-img"
                />
                <div class="side-text">
                    <p class="side-name">Georgia O'Keeffe</p>
                    <p class="sidequote">
                        “My painting is what I have to give back to the world
                        for what the world gives to me.”
                    </p>
                </div>
            </div>

            <div class="painting-list">
                <div class="whitec">
                    <div class="painting">
                        <a href="{{ url('/artworkslct') }}"
                            ><img
                                src="https://www.georgiaokeeffe.net/assets/img/paintings/white-calico-flower.jpg"
                                alt="Paintings of white-calico-flower"
                                class="whitec-painting"
                            />
                            <div class="isiwhitec-painting">
                                <p>
                                    Georgia O'Keeffe. The White Calico Flower,
                                    1931. Oil on canvas, 30 3/16 x 36 3/16
                                    inches. © Georgia O'Keeffe Museum / Artists
                                    Rights Society (ARS), NY
                                </p>
                            </div>
                        </a>
                    </div>
                    <p class="artwork-painting-title">
                        The White Calico Flower, 1931 by Georgia OKeeffe
                    </p>
                </div>

                <div class="newyork">
                    <div class="painting">
                        <a href="{{ url('/newyork') }}">
                            <img
                                src="https://www.georgiaokeeffe.net/assets/img/paintings/new-york-street-with-moon.jpg"
                                alt="painting of new-york-street-with-moon"
                                class="newyork-painting"
                            />
                            <div class="isinewyork-painting">
                                <p>
                                    Georgia O'Keeffe. New York Street with Moon,
                                    1925. Oil on canvas, 30 3/16 x 36
                                    3/16inches. © Georgia O'Keeffe Museum /
                                    Artists Rights Society (ARS), NY
                                </p>
                            </div>
                        </a>
                    </div>
                    <p id="new-york-title" class="artwork-painting-title">
                        New York Street with Moon, 1925 by Georgia O'Keeffe
                    </p>
                </div>

                <div class="jimson">
                    <div class="painting">
                        <a href="{{ url('/jimson') }}">
                            <img
                                src="https://www.georgiaokeeffe.net/assets/img/paintings/jimson-weed.jpg"
                                alt="painting of autumn-leaves"
                                class="jimson-painting"
                            />
                            <div class="isijimson-painting">
                                <p>
                                    Georgia O'Keeffe. Jimson Weed, 1936. Oil on
                                    canvas, 70 x 83-1/2 inches. W© Georgia
                                    O'Keeffe Museum / Artists Rights Society
                                    (ARS), NY
                                </p>
                            </div>
                        </a>
                    </div>
                    <p class="artwork-painting-title">
                        Jimson Weed, 1936 by Georgia O'Keeffe
                    </p>
                </div>

                <div class="oriental">
                    <div class="painting">
                        <a href="{{ url('/oriental') }}">
                            <img
                                src="https://www.georgiaokeeffe.net/assets/img/paintings/oriental-poppies.jpg"
                                alt="painting of oriental"
                                class="oriental-painting"
                            />
                            <div class="isioriental-painting">
                                <p>
                                    Georgia O'Keeffe. Oriental Poppies, 1928.
                                    Oil on canvas, 30 30 x 40 1/8 inches. ©
                                    Georgia O'Keeffe Museum / Artists Rights
                                    Society (ARS), NY
                                </p>
                            </div>
                        </a>
                    </div>

                    <p class="artwork-painting-title">
                        Oriental Poppies, 1928 by Georgia O'Keeffe
                    </p>
                </div>

                <div class="blackpl">
                    <div class="painting">
                        <a href="{{ url('/black') }}">
                            <img
                                src="https://www.georgiaokeeffe.net/assets/img/paintings/black-place.jpg"
                                alt="painting of blackpl"
                                class="blackpl-painting"
                            />
                            <div class="isiblackpl-painting">
                                <p>
                                    Georgia O'Keeffe. lack Place, 1944. Oil on
                                    canvas, 36 3/16 x 40 1/8 inches. © Georgia
                                    O'Keeffe Museum / Artists Rights Society
                                    (ARS), NY
                                </p>
                            </div>
                        </a>
                    </div>
                    <p class="artwork-painting-title">
                        Black Place, 1944 by Georgia O'Keeffe
                    </p>
                </div>

                <div class="ladder">
                    <div class="painting">
                        <a href="{{ url('/ladder') }}">
                            <img
                                src="https://www.georgiaokeeffe.net/assets/img/paintings/ladder-to-the-moon.jpg"
                                alt="painting of ladder"
                                class="ladder-painting"
                            />
                            <div class="isiladder-painting">
                                <p>
                                    Georgia O'Keeffe. Ladder to the Moon, 1958.
                                    Oil on canvas, 30 40 3/16 × 30 1/4 × 1
                                    3/8inches. © Georgia O'Keeffe Museum /
                                    Artists Rights Society (ARS), NY
                                </p>
                            </div>
                        </a>
                    </div>
                    <p class="artwork-painting-title">
                        Ladder to the Moon, 1958 by Georgia O'Keeffe
                    </p>
                </div>

                <div class="cows">
                    <div class="painting">
                        <a href="{{ url('/cow') }}">
                            <img
                                src="https://www.georgiaokeeffe.net/assets/img/paintings/cows-skull-with-calico-roses.jpg"
                                alt="painting of cows"
                                class="cows-painting"
                            />
                            <div class="isicows-painting">
                                <p>
                                    Georgia O'Keeffe. Cow's Skull with Calico
                                    Roses, 1931. Oil on canvas, 36 × 24 inches.
                                    © Georgia O'Keeffe Museum / Artists Rights
                                    Society (ARS), NY
                                </p>
                            </div>
                        </a>
                    </div>
                    <p class="artwork-painting-title">
                        Cow's Skull with Calico Roses, 1931 by Georgia O'Keeffe
                    </p>
                </div>

                <div class="blueandg">
                    <div class="painting">
                        <a href="{{ url('/blue') }}">
                            <img
                                src="https://www.georgiaokeeffe.net/assets/img/paintings/blue-and-green-music.jpg"
                                alt="painting of blueandg"
                                class="blueandg-painting"
                            />
                            <div class="isiblueandg-painting">
                                <p>
                                    Georgia O'Keeffe. Blue and Green Music,
                                    1919/1921. Oil on canvas, 23 x 19 inches. ©
                                    Georgia O'Keeffe Museum / Artists Rights
                                    Society (ARS), NY
                                </p>
                            </div>
                        </a>
                    </div>
                    <p class="artwork-painting-title">
                        Blue and Green Music, 1919/1921 by Georgia O'Keeffe
                    </p>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer">
                <p>Images © Georgia O'Keeffe Museum 2024</p>
            </div>
        </footer>
    </body>
</html>
