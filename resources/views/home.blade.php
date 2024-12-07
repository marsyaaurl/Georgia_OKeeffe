<!DOCTYPE html>
<html lang="en">
<head>
    <title>Georgia O'Keeffe</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
    <script src="{{asset('js/home.js')}}" defer></script>
</head>
<body>
    @include('include.header')

    <section>
        <img src="./assets/Photo.png" alt="Photo of Georgia" class="home-photo" id="home" title="Photo of Georgia">
        <div class="name-container">
            <h2 class="name1">Georgia</h2>
            <h2 class="name2">O'<span class="name3">Keeffe</span></h2>
        </div>
    </section>

    <section>
        <div class="painting-container">
            <button id="prev-but">&laquo;</button>

            <a href=""><img src="./assets/Jimson_Weed_White_Flower_No._1_by_Georgia_O_Keeffe_large.webp" alt="Jimson Weed White Flower" class="famous-painting1" title="Jimson Weed White Flower"></a>
            <a href=""><img src="./assets/Oriental_Poppies_by_Georgia_O_Keeffe_large.webp" alt="Oriental Poppies" class="famous-painting1" title="Oriental Poppies"></a>
            <a href=""><img src="./assets/Blue_and_Green_Music_by_Georgia_O_Keeffe_large.webp" alt="Blue and Green Music" class="famous-painting1" title="Blue and Green Music"></a>
            <a href=""><img src="./assets/Ram_s_Head_White_Hollyhock_and_Little_Hills_by_Georgia_O_Keeffe_large.webp" alt="Ram's Head White Hollyhock and Little Hills" class="famous-painting1" title="Ram's Head White Hollyhock and Little Hills"></a>
            <a href=""><img src="./assets/Red_Canna_by_Georgia_O_Keeffe_large.webp" alt="Red Canna" class="famous-painting1" title="Red Canna"></a>
        
            <a href=""><img src="./assets/abstraction-white-rose.jpg" alt="Jimson Weed White Flower" class="famous-painting2 hidden" title="Jimson Weed White Flower"></a>
            <a href=""><img src="./assets/autumn-leaves.jpg" alt="Autumn Leaves" class="famous-painting2 hidden" title="Autumn Leaves"></a>
            <a href=""><img src="./assets/black-iris.jpg" alt="Black Iris" class="famous-painting2 hidden" title="Black Iris"></a>
            <a href=""><img src="./assets/ladder-to-the-moon.jpg" alt="Ladder to the Moon" class="famous-painting2 hidden" title="Ladder to the Moon"></a>
            <a href=""><img src="./assets/light-iris.jpg" alt="Light Iris" class="famous-painting2 hidden" title="Light Iris"></a>
            
            <button id="next-but">&raquo;</button>
        </div>
    </section>
    
    <section>
        <div class="about-section">
            <img src="./assets/Portrait of Georgia.png" alt="Georgia O'Keeffe" class="about-photo" title="Georgia O'Keeffe">
            <h2>About</h2>
            <div class="basic-info">
                <p>Born: November 15, 1887, Sun Prairie, Wisconsin, U.S</p><br>
                <p>Died: March 6, 1986, Santa Fe, New Mexico, U.S.</p><br>
                <p>Nationality: American</p><br>
                <p>Art Movement: Modernism</p><br>
                <p>Field: Painting</p>
            </div>
            <div class="detailed-info">
                <p>Georgia O'Keeffe (1887–1986) was an American painter renowned as a pioneer of 20th-century modern art. 
                    Her work is characterized by a unique focus on natural forms, emphasizing bold, enlarged details and vibrant colors. 
                    O'Keeffe is most famous for her large-scale paintings of flowers, desert landscapes, and abstracted representations of nature, 
                    offering a deeply personal vision of traditional subjects.
                </p>
                <br>
                <p>
                    Born in Wisconsin, O'Keeffe studied art in Chicago and New York before embarking on her professional career. 
                    In the 1920s, she gained widespread recognition for her flower paintings, where she magnified ordinary objects into monumental, 
                    emotionally evocative pieces. While many interpreted her work as having feminist overtones, O'Keeffe herself often resisted such interpretations. 
                </p>
                <br>
                <p>
                    In addition to her flowers, O'Keeffe was deeply inspired by the landscapes of the American Southwest, particularly New Mexico, 
                    where she eventually relocated and spent much of her life. The desert, mountains, and animal skulls that populated the region frequently appeared in her work, 
                    reflecting her fascination with the beauty and solitude of the natural world.
                </p>
                <br>
                <p>
                    O'Keeffe’s legacy in the art world is profound, merging modernist abstraction with naturalist aesthetics. Her works continue to be celebrated in major museums worldwide, 
                    including the Georgia O'Keeffe Museum in Santa Fe, New Mexico, which is dedicated to preserving her life and art.
                </p>
            </div>
        </div>
    </section>

    <div class="video-container">
        <h2>Georgia O'Keeffe Biography</h2>
        <video controls>
            <source src="./assets/Georgia O'Keeffe- A Brief History.mp4" type="video/mp4">
            <track kind="subtitles" src="./assets/Subtitle.vtt" srclang="en" label="English">
            Your browser does not support the video tag.
        </video>
    </div>

    <section>
        <div class="quote">
            <div class="quote-img">
            <img src="./assets/Portrait of georgia (1).png" alt="Portrait of Georgia" title="Portrait of Georgia">
            </div>
            <blockquote><i>"I’ve been absolutely terrified every moment of my life and I’ve never let it keep me from a single thing that I wanted to do."</i></blockquote>
            <br>
            <p>- Georgia O'Keeffe</p>
        </div>
    </section>

    <footer>
        <div class="footer">
            <p>Images © Georgia O'Keeffe Museum 2024</p>
        </div>
    </footer>
</body>
</html>
