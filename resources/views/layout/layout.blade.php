

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>TresorsBladyMarket</title>
    <link href="https://fonts.googleapis.com/css2?family=Eczar&family=Great+Vibes&family=Jersey+20+Charted&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

<body >

    @include('includes.nav')
    @yield('content')
    @include('includes.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                        customColor: '#c7712f',
                        bgColor:'#D3BD9C',
                        primary: '#fbf2c0',
                        bgButton:'#9dad63',
                        SectionBg: '#faf5e8',
                        TextColor :'#481E14',


                  
                }
                    }
             
            }
        }
    </script>




<script>
    document.addEventListener("DOMContentLoaded", function () {
        const backgrounds = [
            'url("http://127.0.0.1:8000/storage/slider_imgs/table.webp")',
            'url("http://127.0.0.1:8000/storage/slider_imgs/cosmitic.webp")',
            'url("http://127.0.0.1:8000/storage/slider_imgs/cuisineHero.webp")',
            // Add more background image URLs here
        ];
    
        let currentBackgroundIndex = 0;
        const backgroundSlider = document.getElementById('background-slider');
    
        function changeBackground() {
            backgroundSlider.style.transition = "background-image 1s ease-in";
            backgroundSlider.style.backgroundImage = backgrounds[currentBackgroundIndex];
            currentBackgroundIndex = (currentBackgroundIndex + 1) % backgrounds.length;
        }
    
        setInterval(changeBackground, 5000);
    });
    
    
    </script>



</body>

</html>