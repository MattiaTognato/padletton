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
        <div class="h-screen flex flex-col">
            <!-- left -->
            <div class="bg-red-500 flex flex-row justify-between">
                <div class="p-4">
                    <h1 class="text-white text-4xl font-bold">Condiviso</h1>
                </div>
                <div class="mt-4 p-2 text-sm">
                    <span>Nome</span>
                    <span>Ultima modifica</span>
                </div>
            </div>


            <div>
                <div class="text-center bg-red-500 w-fit m-auto mt-60">
                    <div class="text-white font-semibold text-xl -mb-2">Non ci sono ancora padlet condivisi.</div>
                    <div class="text-gray-300">Condividere fa bene a tutti.</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>