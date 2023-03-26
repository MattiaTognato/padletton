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
                    <div>Preferiti</div>
                    <hr class="h-px my-2 bg-gray-700 border-0 ">
                    <div>Nuova Cartella</div>
                </div>
            </div>

            <!-- center -->
            <div class="bg-yellow-500 col-span-5">
                <div class="p-3 flex flex-row justify-between">
                    <div>
                        <div class="text-gray-200">
                            Segnalibri
                        </div>
                        <div class="text-white font-semibold text-4xl">
                            Preferiti
                        </div>
                    </div>
                    <div class="mt-4 p-2 text-sm">
                        <span>Nome</span>
                        <span>Ultima modifica</span>
                    </div>
                </div>
                <div class="text-center bg-red-500 w-fit m-auto mt-40">
                    <div class="text-white font-semibold text-xl -mb-2">Non hai ancora inserito nessun padlet tra i segnalibri.</div>
                    <div class="text-gray-300">Questo è uno spazio sicuro per i padlet a cui tieni.</div>
                </div>
            </div>

            <!-- rigth -->
        </div>
    </div>
</body>

</html>