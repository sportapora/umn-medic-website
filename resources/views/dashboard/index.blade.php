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
            <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default"
            >
                <div
                    class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-list-check">
                        <path d="M11 18H3"/>
                        <path d="m15 18 2 2 4-4"/>
                        <path d="M16 12H3"/>
                        <path d="M16 6H3"/>
                    </svg>
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

            <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default"
            >
                <div
                    class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-users">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4
                            class="text-title-md font-bold text-black "
                        >
                            {{count($currentUser)}}
                        </h4>
                        <span class="text-sm font-medium">Total User</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-stroke bg-white py-6 shadow-default mt-10 px-4">
            <h2 class="text-medic-primary-dark font-extrabold text-2xl mb-4">Pengajuan Terbaru</h2>
            <div class="overflow-x-auto">
                <table id="pengajuan-table" class="w-full table-auto border border-green-200 rounded-lg">
                    <thead>
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-semibold">
                            <span class="flex">
                                Nama Lengkap

                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">
                            <span class="flex">
                                Nama Organisasi

                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">
                            <span class="flex">
                                Nama Acara

                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">
                            <span class="flex">
                                Tanggal Acara

                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">
                            <span class="flex">
                                Status

                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">
                            <span class="flex">
                                Action

                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($currentPengajuan as $data)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-4 px-6 text-gray-800">{{ $data->nama_lengkap }}</td>
                            <td class="py-4 px-6 text-gray-800">{{ $data->nama_organisasi }}</td>
                            <td class="py-4 px-6 text-gray-800">{{ $data->nama_acara }}</td>
                            <td class="py-4 px-6 text-gray-800">{{ $data->tanggal_acara }}</td>
                            <td class="py-4 px-6 text-gray-800">
                                @if($data->status == 'Approved')
                                    <span
                                        class="bg-blue-100 text-blue-800 font-medium me-2 px-2.5 py-0.5 rounded">
                                {{ $data->status }}</span>
                                @elseif($data->status == 'Pending')
                                    <span
                                        class="bg-gray-100 text-gray-800 font-medium me-2 px-2.5 py-0.5 rounded">
                                {{ $data->status }}</span>
                                @elseif($data->status == 'Completed')
                                    <span
                                        class="bg-green-100 text-green-800 font-medium me-2 px-2.5 py-0.5 rounded">
                                {{ $data->status }}</span>
                                @elseif($data->status == 'Canceled')
                                    <span
                                        class="bg-red-100 text-red-800 font-medium me-2 px-2.5 py-0.5 rounded">
                                {{ $data->status }}</span>
                                @elseif($data->status == 'On progress')
                                    <span
                                        class="bg-yellow-100 text-yellow-800 font-medium me-2 px-2.5 py-0.5 rounded">
                                {{ $data->status }}</span>
                                @endif
                            </td>
                            <td class="py-4 px-6">
                                <a href="{{route('pengajuan-jasa.show', $data)}}"
                                   class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded transition">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="py-4 px-6 text-center text-gray-500">
                                Tidak ada daftar pengajuan jasa terbaru
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="border border-stroke bg-white py-6 shadow-default mt-10 px-4">
            <h2 class="text-medic-primary-dark font-extrabold text-2xl mb-4">User Terbaru</h2>
            <div class="overflow-x-auto">
                <table id="user-table" class="w-full table-auto border border-green-200 rounded-lg">
                    <thead>
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-semibold">
                            <span class="flex">
                                Nama Lengkap

                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">
                            <span class="flex">
                                Email

                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">
                            <span class="flex">
                                NIM

                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">
                            <span class="flex">
                                Photo

                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">
                            <span class="flex">
                                Action

                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($currentUser as $data)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-4 px-6 text-gray-800">{{ $data->name }}</td>
                            <td class="py-4 px-6 text-gray-800">{{ $data->email }}</td>
                            <td class="py-4 px-6 text-gray-800">{{ $data->nim }}</td>
                            <td class="py-4 px-6 text-gray-800"><img src="{{ asset('storage/' . $data->photo) }}" alt="{{$data->name}}"></td>
                            <td class="py-4 px-6 text-gray-800">
                                @if(!$data->is_verified)
                                    <div class="flex flex-row gap-4">
                                        <form action="{{ route('user.verify', $data->id) }}" method="POST"
                                              class="inline-block">
                                            @csrf
                                            @method('PUT')
                                            <button
                                                class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded transition">
                                                Accept
                                            </button>
                                        </form>
                                        <form action="{{ route('user.decline', $data->id) }}" method="POST"
                                              class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded transition">
                                                Decline
                                            </button>
                                        </form>
                                    </div>
                                @else
                                    <p class="text-medic-primary">User terverifikasi</p>
                                @endif
                            </td>
                            <td class="py-4 px-6">
                                <a href="{{route('pengajuan-jasa.show', $data)}}"
                                   class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded transition">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-4 px-6 text-center text-gray-500">
                                Tidak ada daftar user terbaru
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('script')
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>

        <script>
            if (document.getElementById("pengajuan-table") && typeof simpleDatatables.DataTable !== 'undefined') {
                const dataTable = new simpleDatatables.DataTable("#pengajuan-table", {
                    tableRender: (_data, table, type) => {
                        if (type === "print") {
                            return table
                        }
                        const tHead = table.childNodes[0]
                        const filterHeaders = {
                            nodeName: "TR",
                            attributes: {
                                class: "search-filtering-row"
                            },
                            childNodes: tHead.childNodes[0].childNodes.map(
                                (_th, index) => ({
                                    nodeName: "TH",
                                    childNodes: [
                                        {
                                            nodeName: "INPUT",
                                            attributes: {
                                                class: "datatable-input",
                                                type: "search",
                                                "data-columns": "[" + index + "]"
                                            }
                                        }
                                    ]
                                })
                            )
                        }
                        tHead.childNodes.push(filterHeaders)
                        return table
                    }
                });
            }
        </script>
        <script>
            if (document.getElementById("user-table") && typeof simpleDatatables.DataTable !== 'undefined') {
                const dataTable = new simpleDatatables.DataTable("#user-table", {
                    tableRender: (_data, table, type) => {
                        if (type === "print") {
                            return table
                        }
                        const tHead = table.childNodes[0]
                        const filterHeaders = {
                            nodeName: "TR",
                            attributes: {
                                class: "search-filtering-row"
                            },
                            childNodes: tHead.childNodes[0].childNodes.map(
                                (_th, index) => ({
                                    nodeName: "TH",
                                    childNodes: [
                                        {
                                            nodeName: "INPUT",
                                            attributes: {
                                                class: "datatable-input",
                                                type: "search",
                                                "data-columns": "[" + index + "]"
                                            }
                                        }
                                    ]
                                })
                            )
                        }
                        tHead.childNodes.push(filterHeaders)
                        return table
                    }
                });
            }
        </script>
    @endpush
@endsection
