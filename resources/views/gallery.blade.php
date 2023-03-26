<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="flex flex-row bg-black h-screen">
    @include('partials.sidebar')
    <div class="w-full text-lg">
        @include('partials.header')
        <div class="grid grid-cols-6 grid-rows-1 h-screen">
            <!-- left -->
            <div class="bg-red-500 col-span-1">
                <div class="p-3">
                    <div>Tutto</div>
                    <hr class="h-px my-2 bg-gray-700 border-0 ">
                    <div>Muro</div>
                    <hr class="h-px my-2 bg-gray-700 border-0 ">
                    <div>Lista</div>
                    <hr class="h-px my-2 bg-gray-700 border-0 ">
                    <div>Griglia</div>
                </div>
            </div>

            <!-- center -->
            <div class="bg-yellow-500 col-span-5">
                <div class="p-3 flex flex-row justify-between">
                    <div>
                        <div class="text-gray-200">
                            Galleria
                        </div>
                        <div class="text-white font-semibold text-4xl">
                            Tutto
                        </div>
                    </div>
                    <div class="mt-4 p-2 text-sm">
                        <span>Nome</span>
                        <span>Data di creazione</span>
                    </div>
                </div>
            </div>

            <!-- rigth -->
        </div>
    </div>
</body>

</html>