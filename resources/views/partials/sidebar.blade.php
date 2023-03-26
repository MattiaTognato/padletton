@vite('resources/css/app.css')
<div class="top-0 left-0 h-screen w-20 m-0 flex flex-col justify-between bg-gray-600">
    <div class="flex flex-col mt-4">
        <x-sidebar.sidebar-single title="Recenti" isMainIcon="true" url="/dashboard/recents" />
        <x-sidebar.sidebar-single title="Segnalibri" isMainIcon="true" url="/dashboard/bookmarks" />

        <a href="/dashboard">
            <div class="relative flex items-center justify-center flex-col mt-2 mb-2 mx-auto text-white font-medium">
                <div class=" w-9 h-9 flex items-center justify-center bg-gray-800 rounded-xl">

                </div>
                <div class="text-xs">
                    MUKUND...
                </div>
            </div>
        </a>

        <x-sidebar.sidebar-single title="Condiviso" isMainIcon="true" url="/dashboard/shared" />
        <x-sidebar.sidebar-single title="Galleria" isMainIcon="true" url="/dashboard/gallery" />
        <x-sidebar.sidebar-single title="" isMainIcon="true" url="/team/create" />
    </div>
    <div class="flex flex-col mb-8">
        <x-sidebar.sidebar-single title="" isMainIcon="false" url="" />
        <x-sidebar.sidebar-single title="" isMainIcon="false" url="" />
    </div>
</div>