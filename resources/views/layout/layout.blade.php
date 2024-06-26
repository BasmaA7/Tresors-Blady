

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>TresorsBlady</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;500;700;900&family=Oswald:wght@200..700&family=Platypi:ital,wght@0,300..800;1,300..800&family=Playfair+Display:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- <style>
      body {
            background-color: #faf5e8;
        }
    </style>  --}}

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