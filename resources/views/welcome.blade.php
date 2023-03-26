<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Padlet</title>
        @vite('resources\css\app.css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body class="antialiased">
    

        <nav class="sidebar rounded-tr-3xl fixed top-0 bottom-0 lg:left-0 p-2 w-[256px] overflow-y-auto text-center bg-[#222222]">
            <div class="text-gray-100 text-xl">
                <div class="p-2.5 mt-1 flex items-center">
                    <svg data-darkreader-inline-stroke="" aria-hidden="true">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32.9765 31.5C41.7187 31.5 48.8056 24.4485 48.8056 15.75C48.8056 7.05151 41.7187 0 32.9765 0C32.8293 0 32.6826 0.00199837 32.5364 0.00596933V0H25.0619H22.4233H17.1473V15.75V42H25.0619V31.5H32.5364V31.494C32.6826 31.498 32.8293 31.5 32.9765 31.5ZM32.9762 23.625H32.9766C37.2859 23.6248 40.7793 20.0991 40.7793 15.75C40.7793 11.4009 37.2859 7.87521 32.9766 7.875H32.9762H25.062V23.625H32.9762ZM72.5494 10.4996H80.464V26.1174C80.4644 26.1615 80.4646 26.2057 80.4646 26.25L80.4644 26.3296L80.464 26.3826V41.9996H72.5494V39.8932C70.2213 41.2331 67.5184 42 64.6354 42C55.8932 42 48.8063 34.9485 48.8063 26.25C48.8063 17.5515 55.8932 10.5 64.6354 10.5C67.5184 10.5 70.2213 11.2668 72.5494 12.6067V10.4996ZM64.6354 34.1246C68.9756 34.1246 72.4999 30.6484 72.5494 26.3415V26.1576C72.4999 21.8507 68.9756 18.3746 64.6354 18.3746C60.2643 18.3746 56.7208 21.9003 56.7208 26.2496C56.7208 30.5988 60.2643 34.1246 64.6354 34.1246ZM113.88 0H105.966V12.6071C103.638 11.267 100.934 10.5 98.0512 10.5C89.309 10.5 82.222 17.5515 82.222 26.25C82.222 34.9485 89.309 42 98.0512 42C100.934 42 103.638 41.233 105.966 39.8929V42H113.88V0ZM98.0509 34.125C102.422 34.125 105.965 30.5992 105.965 26.25C105.965 21.9008 102.422 18.375 98.0509 18.375C93.6798 18.375 90.1364 21.9008 90.1364 26.25C90.1364 30.5992 93.6798 34.125 98.0509 34.125ZM124.873 0H116.959V42H124.873V0ZM158.582 28.8685C157.785 33.5474 154.887 37.8501 150.432 40.1086C142.299 44.232 132.767 41.1504 128.973 33.7423C124.829 25.6496 127.926 16.1653 136.059 12.0419C143.505 8.26726 153.037 11.3489 157.181 19.4416C157.596 20.2528 157.929 21.0889 158.183 21.9397L150.175 25.9991L137.805 32.2708C140.181 34.2401 143.656 34.7055 146.83 33.0964C149.342 31.823 150.852 29.0861 150.826 26.2235L158.162 28.7547C158.303 28.8032 158.443 28.8409 158.582 28.8685ZM135.01 26.8135L148.008 20.2239C145.663 18.2386 142.314 17.7094 139.644 19.0631C136.47 20.6722 134.805 23.7433 135.01 26.8135ZM10.9922 31.0625C10.9922 33.962 8.6299 36.3125 5.71584 36.3125C2.80177 36.3125 0.439453 33.962 0.439453 31.0625C0.439453 28.163 2.80177 25.8125 5.71584 25.8125C8.6299 25.8125 10.9922 28.163 10.9922 31.0625ZM5.71584 16.625C8.6299 16.625 10.9922 14.2745 10.9922 11.375C10.9922 8.4755 8.6299 6.125 5.71584 6.125C2.80177 6.125 0.439453 8.4755 0.439453 11.375C0.439453 14.2745 2.80177 16.625 5.71584 16.625ZM160.929 0H168.841V13.1254H174.996V21.0004H168.841V42H160.929V0Z" fill="white"></path>
                    </svg>
                    <i class="bi bi-x cursor-pointer ml-28 lg:hidden"></i>
                </div>
                <div class="p-2.5 mb-20 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-[#111111] hover:bg-black text-white">
                    <i class="bi bi-bookmark-fill"></i>
                    <svg data-darkreader-inline-stroke="" color="deeppink" width="25px" height="25px"  stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Accedi</span>
                </div>
                
            </div>

            <div class="bg-[#333333] p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#333333] text-white">
                <i class="bi bi-house-door-fill"></i>
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="25px" height="25px" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                <span class="text-[15px] ml-4 text-white font-bold">Home</span>
            </div>
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#333333] text-white">
                <i class="bi bi-bookmark-fill"></i>
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="25px" height="25px" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M50.7 58.5L0 160H208V32H93.7C75.5 32 58.9 42.3 50.7 58.5zM240 160H448L397.3 58.5C389.1 42.3 372.5 32 354.3 32H240V160zm208 32H0V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192z"/></svg>
                <span class="text-[15px] ml-4 text-white font-bold">Prodotto</span>
            </div>
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#333333] text-white">
                <i class="bi bi-bookmark-fill"></i>
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="25px" height="25px" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M36.8 192H603.2c20.3 0 36.8-16.5 36.8-36.8c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0H121.7c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM64 224V384v80c0 26.5 21.5 48 48 48H336c26.5 0 48-21.5 48-48V384 224H320V384H128V224H64zm448 0V480c0 17.7 14.3 32 32 32s32-14.3 32-32V224H512z"/></svg>
                <span class="text-[15px] ml-4 text-white font-bold">Abbonamenti</span>
            </div>
        </nav>
        <main>
        <div class="content bg-[url('https://padlet.net/packs/media/images/dot_grid_dark-6b049085d136a66cadc8865290401049.png')]">
        </div>
        </main>

   
    </body>
</html>
