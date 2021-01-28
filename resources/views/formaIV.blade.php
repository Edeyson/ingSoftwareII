<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Forma 2</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased center">
        
            <div class="flex items-center">
                <div class="ml-4 text-lg leading-7 font-semibold"><a href="/" class="underline text-gray-900 dark:text-white"> Atras </a></div>
            </div>
            <h1>
                Forma numero 4
            </h1>
            <div>
                <?php echo $name?>
                <br>
                <?php echo $id?>
            </div>
        
    </body>
</html>
