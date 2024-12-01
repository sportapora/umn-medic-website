@extends('layouts.main', ['title' => 'Dashboard'])

@section('content')
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <div
            class="col-span-12 rounded-sm border border-stroke bg-white py-6 shadow-default xl:col-span-4"
        >
            <h4
                class="italic mb-6 px-7.5 text-xl text-black " id="quote"
            >
                {{$quotes['content']}} - {{$quotes['author']}}
            </h4>

        </div>

        <div
            class="mt-10 grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 2xl:gap-7.5"
        >
            <!-- Card Item Start -->
            <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default"
            >
                <div
                    class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-check"><path d="M11 18H3"/><path d="m15 18 2 2 4-4"/><path d="M16 12H3"/><path d="M16 6H3"/></svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4
                            class="text-title-md font-bold text-black "
                        >
                            {{$contactUsCount}}
                        </h4>
                        <span class="text-sm font-medium">Total Pengajuan Jasa</span>
                    </div>
                </div>
            </div>
            <!-- Card Item End -->

            <!-- Card Item Start -->
            <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default"
            >
                <div
                    class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4
                            class="text-title-md font-bold text-black "
                        >
                            {{$usersCount}}
                        </h4>
                        <span class="text-sm font-medium">Total User</span>
                    </div>
                </div>
            </div>
            <!-- Card Item End -->
        </div>
    </div>
@endsection
