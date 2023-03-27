<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

</head>


<body class="overflow-hidden">
    <div class="w-full absolute h-full md:w-1/3 right-0 top-0 bg-black text-white">
        <h1 class="text-center p-4">Impostazioni</h1>
        <div class="bg-yellow-500 p-4 h-full overflow-y-auto">
            <div>
                <form>
                    <h4 class="text-sm">Heading</h4>
                    <div class="bg-purple-600 p-5 rounded-xl mt-2">
                        <div>
                            <div>
                                <label for="titolo">Titolo</label>
                            </div>
                            <div>
                                <input type="text" name="titolo" id="titolo" class="w-full rounded-xl my-2 p-1">
                            </div>
                        </div>
                        <hr class="h-px my-2 bg-gray-700 border-0 ">
                        <div>
                            <div>
                                <label for="descrizione">Descrizione</label>
                            </div>
                            <div>
                                <input type="text" name="descrizione" id="descrizione" class="w-full rounded-xl my-2 p-1">
                            </div>
                        </div>
                        <hr class="h-px my-2 bg-gray-700 border-0 ">
                    </div>
                    <!-- aspetto -->
                    <h4 class="text-sm mt-4">Aspetto</h4>
                    <div class="bg-purple-600 p-5 rounded-xl mt-2">
                        <div class="flex flex-row justify-between items-center">
                            <div>Sfondo</div>
                            @php
                            $categories = \App\Models\Background::all();
                            $mainDivColour = "bg-[" . $categories[0]->colour . "]";
                            @endphp
                            <div class="{{$mainDivColour}} w-1/4 h-16 rounded-xl"></div>
                        </div>
                        <hr class="h-px my-2 bg-gray-700 border-0">
                        <div class="flex flex-row justify-between items-center">
                            <div>Combinazione di colori</div>
                            <div>
                                <input type="radio" name="combinazioneColori" id="combinazioniColori1">
                                <input type="radio" name="combinazioneColori" id="combinazioniColori2">
                            </div>
                        </div>
                        <hr class="h-px my-2 bg-gray-700 border-0 ">
                        <div class="flex flex-row justify-between items-center">
                            <div>Carattere</div>
                            <div>
                                <input type="radio" name="carettere" id="carattere1">
                                <input type="radio" name="carettere" id="carattere2">
                                <input type="radio" name="carettere" id="carattere2">
                                <input type="radio" name="carettere" id="carattere2">
                            </div>
                        </div>
                    </div>

                    <!-- layout -->
                    <h4 class="text-sm mt-4">Layout</h4>
                    <div class="bg-purple-600 p-5 rounded-xl mt-2">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <label for="postSezione">Raggruppa i post per sezione</label>
                            </div>
                            <div>
                                <input type="checkbox" name="postSezione" id="postSezione">
                            </div>
                        </div>
                    </div>

                    <!-- Pubblicazione in corso -->
                    <h4 class="text-sm mt-4">Pubblicazione in corso</h4>
                    <div class="bg-purple-600 p-5 rounded-xl mt-2">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <label for="autore">Autore e marca temporale</label>
                                <span class="block text-sm w-3/4 break-normal">Vuoi mostrare il nome dell'autore con la marca temporale sopra ogni post?</span>
                            </div>
                            <div>
                                <input type="checkbox" name="autore" id="autore">
                            </div>
                        </div>
                        <hr class="h-px my-2 bg-gray-700 border-0 ">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <label for="commenti">Commenti</label>
                                <span class="block text-sm w-3/4 break-normal">Vuoi permettere ai visitatori di commentare i post?</span>
                            </div>
                            <div>
                                <input type="checkbox" name="commenti" id="commenti">
                            </div>
                        </div>
                        <hr class="h-px my-2 bg-gray-700 border-0 ">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <label for="reazioni">Reazioni</label>
                                <span class="block text-sm w-3/4 break-normal">Vuoi dare voti, assegnare stelle, promuove o mettere "Mi piace" ai post?</span>
                            </div>
                            <div>
                                <input type="checkbox" name="reazioni" id="reazioni">
                            </div>
                        </div>
                        <hr class="h-px my-2 bg-gray-700 border-0 ">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <span>Posizione dei posti nuovi</span>
                                <span class="block text-sm w-3/4 break-normal">Dove dovrebbero comparire i nuovi post?</span>
                            </div>
                            <div>
                                <input type="radio" name="posizione" id="posizione1">
                                <input type="radio" name="posizione" id="posizione2">
                            </div>
                        </div>
                    </div>

                    <!-- Contenuti -->
                    <h4 class="text-sm mt-4">Contenuti</h4>
                    <div class="bg-purple-600 p-5 rounded-xl mt-2">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <label for="approvazione">Richiedi approvazione</label>
                                <span class="block text-sm w-3/4 break-normal">Richiedi l'approvazione dei post da parte di un moderatore.</span>
                            </div>
                            <div>
                                <input type="checkbox" name="approvazione" id="approvazione">
                            </div>
                        </div>
                        <hr class="h-px my-2 bg-gray-700 border-0 ">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <label for="parolacce">Escludi le volgarità</label>
                                <span class="block text-sm w-3/4 break-normal">Sostituisci le parolacce con delle emoji.</span>
                            </div>
                            <div>
                                <input type="checkbox" name="parolacce" id="parolacce">
                            </div>
                        </div>
                        <hr class="h-px my-2 bg-gray-700 border-0 ">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <label for="cloni">Cloni</label>
                                <span class="block text-sm w-3/4 break-normal">Vuoi consentire a chi non è amministratore di clonare questo padlet?</span>
                            </div>
                            <div>
                                <input type="checkbox" name="cloni" id="cloni">
                            </div>
                        </div>
                    </div>

                    <!-- avanzate -->
                    <h4 class="text-sm mt-4">Impostazioni avanzate</h4>
                    <div class="bg-purple-600 p-5 rounded-xl mt-2">
                        <div>
                            <div>
                                URL
                            </div>
                            <div>
                                <input type="text" name="url" id="url" class="w-full rounded-xl my-2 p-1" placeholder="ilmiopadlet">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>