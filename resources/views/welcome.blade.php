<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Tailwind CSS</title>
</head>
<body>
    
    <div class="container">
        <div class="grid grid-cols-1 grid-rows-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-4">
            <div class="bg-blue-200 col-span-3 col-start-2">A</div>
            <div class="bg-blue-300 col-start-1">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500 col-span-3 row-span-2">D</div>
            <div class="bg-blue-600">E</div>
            <div class="bg-blue-700">F</div>
        </div>
    </div>

    <div class="container">
        <div class="grid grid-flow-col grid-rows-3 grid-cols-4">
            <div class="bg-blue-200">1</div>
            <div class="bg-blue-300">2</div>
            <div class="bg-blue-400">3</div>
            <div class="bg-blue-500">4</div>
            <div class="bg-blue-600">5</div>
            <div class="bg-blue-700">6</div>
            <div class="bg-blue-800">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>
    </div>

</body>
</html>