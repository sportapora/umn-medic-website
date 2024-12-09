@extends('layouts.main', ['title' => 'List Pengajuan Jasa'])

@section('content')
    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                <h1 class="text-3xl font-bold text-green-600 mb-6 border-b pb-3">List Pengajuan Jasa</h1>
            </div>

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
                    @forelse($pengajuan as $data)
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
                                Tidak ada daftar pengajuan jasa tersedia
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
    @endpush
@endsection
