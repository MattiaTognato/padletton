<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

</head>

<style>
    input:checked+label {
        background-color: yellow;
    }
</style>

<body class="overflow-hidden">

    <div class="w-full flex flex-col absolute h-full md:w-1/3 right-0 top-0 bg-black text-white">
        <h1 class="text-center p-4">Impostazioni</h1>
        <div class="bg-yellow-500 p-4 max-h-full flex-grow overflow-y-auto">
            <div>
                <form>
                    <h4 class="selection_heading">Heading</h4>
                    <div class=" selection_single_div">
                        <div>
                            <div>
                                <label for="titolo">Titolo</label>
                            </div>
                            <div>
                                <input type="text" name="titolo" id="titolo" class="selection_text_input">
                            </div>
                        </div>
                        <hr class="horizontal_line ">
                        <div>
                            <div>
                                <label for="descrizione">Descrizione</label>
                            </div>
                            <div>
                                <input type="text" name="descrizione" id="descrizione" class="selection_text_input">
                            </div>
                        </div>
                        <hr class="horizontal_line ">
                    </div>
                    <!-- aspetto -->
                    <h4 class="selection_heading mt-4">Aspetto</h4>
                    <div class="selection_single_div">
                        <div class="flex flex-row justify-between items-center">
                            <div>Sfondo</div>
                            @php
                            $categories = \App\Models\Background::all();
                            $mainDivColour = "bg-[" . $categories[0]->colour . "]";
                            @endphp
                            <div class="{{$mainDivColour}} w-1/4 h-16 rounded-xl"></div>
                        </div>
                        <hr class="horizontal_line">
                        <div class="flex flex-row justify-between items-center">
                            <div>Combinazione di colori</div>
                            <div class="radio_container">
                                <div>
                                    <input class="hidden" id="combinazioniColori1" type="radio" name="combinazioneColori" checked>
                                    <label class="radio_label" for="combinazioniColori1">
                                        <span class="radio_text">Dark</span>
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="combinazioniColori2" type="radio" name="combinazioneColori">
                                    <label class="radio_label" for="combinazioniColori2">
                                        <span class="radio_text">Light</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal_line ">
                        <div class="flex flex-row justify-between items-center">
                            <div>Carattere</div>
                            <div class="radio_container">
                                <div>
                                    <input class="hidden" id="carattere1" type="radio" name="carattere" checked>
                                    <label class="radio_label" for="carattere1">
                                        <span class="radio_text">ABba</span>
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="carattere2" type="radio" name="carattere">
                                    <label class="radio_label" for="carattere2">
                                        <span class="radio_text">ABba</span>
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="carattere3" type="radio" name="carattere">
                                    <label class="radio_label" for="carattere3">
                                        <span class="radio_text">ABba</span>
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="carattere4" type="radio" name="carattere">
                                    <label class="radio_label" for="carattere4">
                                        <span class="radio_text">ABba</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- layout -->
                    <h4 class="selection_heading mt-4">Layout</h4>
                    <div class="selection_single_div">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <label for="postSezione">Raggruppa i post per sezione</label>
                            </div>
                            <div>
                                <label class="checkbox_label">
                                    <input type="checkbox" name="postSezione" id="postSezione" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Pubblicazione in corso -->
                    <h4 class="selection_heading mt-4">Pubblicazione in corso</h4>
                    <div class="selection_single_div">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <label for="autore">Autore e marca temporale</label>
                                <span class="block text-sm w-3/4 break-normal">Vuoi mostrare il nome dell'autore con la marca temporale sopra ogni post?</span>
                            </div>
                            <div>
                                <label class="checkbox_label">
                                    <input type="checkbox" name="autore" id="autore" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>
                        <hr class="horizontal_line ">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <label for="commenti">Commenti</label>
                                <span class="block text-sm w-3/4 break-normal">Vuoi permettere ai visitatori di commentare i post?</span>
                            </div>
                            <div>
                                <label class="checkbox_label">
                                    <input type="checkbox" name="commenti" id="commenti" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>
                        <hr class="horizontal_line ">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <label for="reazioni">Reazioni</label>
                                <span class="block text-sm w-3/4 break-normal">Vuoi dare voti, assegnare stelle, promuove o mettere "Mi piace" ai post?</span>
                            </div>
                            <div>
                                <label class="checkbox_label">
                                    <input type="checkbox" name="reazioni" id="reazioni" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>
                        <hr class="horizontal_line ">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <span>Posizione dei posti nuovi</span>
                                <span class="block text-sm w-3/4 break-normal">Dove dovrebbero comparire i nuovi post?</span>
                            </div>
                            <div class="radio_container">
                                <div>
                                    <input class="hidden" id="posizione1" type="radio" name="posizione" checked>
                                    <label class="radio_label" for="posizione1">
                                        <span class="radio_text">Primo</span>
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="posizione2" type="radio" name="posizione">
                                    <label class="radio_label" for="posizione2">
                                        <span class="radio_text">Ultimo</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contenuti -->
                    <h4 class="selection_heading mt-4">Contenuti</h4>
                    <div class="selection_single_div">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <label for="approvazione">Richiedi approvazione</label>
                                <span class="block text-sm w-3/4 break-normal">Richiedi l'approvazione dei post da parte di un moderatore.</span>
                            </div>
                            <div>
                                <label class="checkbox_label">
                                    <input type="checkbox" name="approvazione" id="approvazione" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>
                        <hr class="horizontal_line ">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <label for="parolacce">Escludi le volgarità</label>
                                <span class="block text-sm w-3/4 break-normal">Sostituisci le parolacce con delle emoji.</span>
                            </div>
                            <div>
                                <label class="checkbox_label">
                                    <input type="checkbox" name="parolacce" id="parolacce" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>
                        <hr class="horizontal_line ">
                        <div class="flex flex-row justify-between items-center">
                            <div>
                                <label for="cloni">Cloni</label>
                                <span class="block text-sm w-3/4 break-normal">Vuoi consentire a chi non è amministratore di clonare questo padlet?</span>
                            </div>
                            <div>
                                <label class="checkbox_label">
                                    <input type="checkbox" name="cloni" id="cloni" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- avanzate -->
                    <h4 class="selection_heading mt-4">Impostazioni avanzate</h4>
                    <div class="selection_single_div">
                        <div>
                            <div>
                                URL
                            </div>
                            <div>
                                <input type="text" name="url" id="url" class="selection_text_input" placeholder="ilmiopadlet">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>