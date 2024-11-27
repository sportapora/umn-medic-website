<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} - UMN Medical Center</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-gray-900">
<div class="flex h-screen overflow-hidden">

    <!-- ===== Content Area Start ===== -->
    <div
        class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden"
    >
        <!-- ===== Main Content Start ===== -->
        <main>
            <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">

                <!-- ====== Forms Section Start -->
                <div
                    class="rounded-sm border border-stroke bg-white shadow-default"
                >
                    <div class="flex flex-wrap items-center">
                        <div class="w-full lg:block lg:w-1/2">
                            <div class="px-26 py-17.5 text-center">
                                <a class="mb-5.5 inline-block" href="{{route('home')}}">
                                    <img
                                        src="{{asset('assets/logos/medic-logo.png')}}"
                                        alt="Logo"
                                    />
                                </a>
                            </div>
                        </div>
                        <div
                            class="w-full border-stroke xl:w-1/2 xl:border-l-2"
                        >
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- ====== Forms Section End -->
            </div>
        </main>
        <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
</div>
</body>
</html>
