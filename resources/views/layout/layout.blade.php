

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>TresorsBlady</title>
</head>

<body >

    @include('includes.nav')
    @yield('content')
    @include('includes.footer')

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                        customColor: '#c06722',
                        bgColor:'#D3BD9C',
                        primary: '#fbf2c0',


                  
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



<script>
    $('#search-form').submit(function(e) {
    e.preventDefault();
    var formData = $(this).serialize();

    $.ajax({
        type: 'POST',
        url: '/search',
        data: formData,
        success: function(response) {
            // Traitement des résultats de la recherche
            console.log(response);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});

</script>
</body>

</html>