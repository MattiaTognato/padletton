@vite('resources/css/app.css')
<div class="top-0 left-0 h-screen w-20 m-0 flex flex-col justify-between bg-gray-600">
    <div class="flex flex-col mt-4">
        <x-sidebar.sidebar-single title="Recenti" isMainIcon="true" url="/dashboard/recents" icon="fa-regular fa-clock" />
        <x-sidebar.sidebar-single title="Segnalibri" isMainIcon="true" url="/dashboard/bookmarks" icon="fa-regular fa-star" />

        <a href="/dashboard">
            <div class="relative flex items-center justify-center flex-col mt-2 mb-2 mx-auto text-white font-medium">
                <div class=" w-9 h-9 flex items-center justify-center bg-gray-800 rounded-xl">

                </div>
                <div class="text-xs">
                    MUKUND...
                </div>
            </div>
        </a>

        <x-sidebar.sidebar-single title="Condiviso" isMainIcon="true" url="/dashboard/shared" icon="fa-regular fa-handshake" />
        <x-sidebar.sidebar-single title="Galleria" isMainIcon="true" url="/dashboard/gallery" icon="fa-regular fa-compass fa-rotate-270" />
        <x-sidebar.sidebar-single title="" isMainIcon="true" url="/team/create" icon="fa-regular fa-square-plus" />
    </div>
    <div class="flex flex-col mb-8">
        <x-sidebar.sidebar-single title="" isMainIcon="false" url="" icon="fa-solid fa-bullhorn" />
        <x-sidebar.sidebar-single title="" isMainIcon="false" url="" icon="fa-solid fa-ellipsis" />
    </div>
</div>