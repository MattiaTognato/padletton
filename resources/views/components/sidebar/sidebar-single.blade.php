@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<a @if($url !="" ) href="{{ url($url) }}" @endif>


    <div class="relative flex items-center justify-center flex-col mt-2 mb-2 mx-auto text-white hover:font-medium cursor-pointer">
        <div class="w-9 h-9 flex items-center justify-center bg-gray-800 rounded-xl">
            <i class="{{$icon}}"></i>
        </div>
        <div class="text-xs">
            {{$title}}
        </div>
    </div>
</a>