<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div id="app" class="flex flex-col items-center p-8">
        <h1 class="text-xl font-bold mb-8">Components</h1>
        <div>
            <h1 class="text-l">Context-menu</h1>
            <div class="bg-gray-400 w-32 h-32 flex items-center justify-center">
                <dropdown-menu>
                    <template v-slot:trigger>
                        <button class="text-blue-500">...</button>
                    </template>

                    <li><a href="#" class="dropdown-item hover:bg-gray-200">Edit</a></li>
                    <li><a href="#" class="dropdown-item hover:bg-gray-200">Delete</a></li>
                    <li><a href="#" class="dropdown-item hover:bg-gray-200">Report</a></li>
                </dropdown-menu>
            </div>
            <hr>
            <div class="bg-gray-400 w-32 h-32 flex items-center justify-center">
                <dropdown-menu>
                    <template v-slot:trigger>
                        <button class="text-blue-500">...</button>
                    </template>

                    <li><a href="#" class="dropdown-item hover:bg-gray-200">Edit</a></li>
                    <li><a href="#" class="dropdown-item hover:bg-gray-200">Delete</a></li>
                    <li><a href="#" class="dropdown-item hover:bg-gray-200">Report</a></li>
                </dropdown-menu>
            </div>
        </div>
    </div>

    <script src="{{asset('/js/app.js')}}" crossorigin="anonymous"></script>
</body>
</html>