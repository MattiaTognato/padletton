@vite('resources/css/app.css')
<a @if($url !="" ) href="{{ url($url) }}" @endif>


    <div class="relative flex items-center justify-center flex-col mt-2 mb-2 mx-auto text-white hover:font-medium cursor-pointer">
        <div class="w-9 h-9 flex items-center justify-center bg-gray-800 rounded-xl">
        </div>
        <div class="text-xs">
            {{$title}}
        </div>
    </div>
</a>