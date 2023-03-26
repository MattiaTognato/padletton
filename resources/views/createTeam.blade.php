<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="h-screen w-full bg-black text-white">
    <div class="pt-32 pl-80">
        <div class="w-96">
            <h1 class="font-semibold text-4xl">Crea un nuovo team</h1>
            <h4 class="text-base">Crea meraviglie con i tuoi compagni di squadra.</h4>
            <form action="" method="post">
                <div class="flex flex-col mt-4">
                    <label for="teamName">Nome del team</label>
                    <input type="text" name="" id="teamName" class="rounded-lg p-1">
                </div>
                <div class="flex flex-col mt-4">
                    <label for="teamUrl">URL del team</label>
                    <input type="text" name="" id="teamUrl" class="rounded-lg p-1">
                </div>
                <button type="submit" class="px-3 py-1 rounded-xl bg-pink-600 focus:outline-none text-white h-10 mt-4 float-right">Continua</button>
            </form>
        </div>
    </div>
</body>

</html>