

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
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                        customColor: '#4E6E5D',
                        bgColor:'#D3BD9C',

                    }
                }
            }
        }
    </script>

    
</body>

</html>