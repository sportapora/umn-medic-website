@extends('layouts.main', ['title' => 'Shifts List'])

@section('content')
    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                <h1 class="text-3xl font-bold text-green-600 mb-6 border-b pb-3">List of Users Shift</h1>

                <button
                    data-modal-target="create-modal" data-modal-toggle="create-modal"
                    class="bg-medic-primary font-bold mb-6 md:mb-0 hover:bg-green-800 text-white px-4 py-2 rounded-md transition">
                    Tambah Shift Baru
                </button>
            </div>
            @if(session('success'))
                <div x-data="{ show: true }"
                     x-show="show"
                     x-transition
                     x-init="setTimeout(() => show = false, 2000)" class="bg-green-100 text-green-700 p-4 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="text-red-500">{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <div class="overflow-x-auto">
                <table class="w-full table-auto border border-green-200 rounded-lg">
                    <thead class="bg-green-200 text-green-700">
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-semibold">Shift Start</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">Shift End</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($shifts as $shift)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-4 px-6 text-gray-800">{{ $shift->shift_start }}</td>
                            <td class="py-4 px-6 text-gray-800">{{ $shift->shift_end }}</td>
                            <td class="py-4 px-6 text-center">
                                <div class="flex flex-row gap-4">
                                    <button
                                        data-modal-target="edit-modal-{{$shift->id}}"
                                        data-modal-toggle="edit-modal-{{$shift->id}}"
                                        class="bg-yellow-500 hover:bg-yellow-700 text-white px-4 py-2 rounded transition">
                                        Edit
                                    </button>

                                    <div id="edit-modal-{{$shift->id}}" tabindex="-1" aria-hidden="true"
                                         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[100] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                                    <h3 class="text-xl font-semibold text-gray-900">
                                                        Tambah Data Shift Baru
                                                    </h3>
                                                    <button type="button"
                                                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                            data-modal-hide="edit-modal-{{$shift->id}}">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                             xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                  stroke-linejoin="round" stroke-width="2"
                                                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-4 md:p-5">
                                                    <form class="space-y-4" action="{{route('shifts.update', $shift)}}"
                                                          method="post">
                                                        @csrf
                                                        @method('put')
                                                        <div class="mb-3">
                                                            <label for="shift_start"
                                                                   class="text-left block mb-2 text-sm font-medium text-gray-900">Shift
                                                                Start</label>
                                                            <input type="time" name="shift_start" id="shift_start"
                                                                   value="{{old('shift_start', $shift->shift_start)}}"
                                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                            />
                                                        </div>
                                                        <div class="mb-6">
                                                            <label for="shift_end"
                                                                   class="text-left block mb-2 text-sm font-medium text-gray-900">Shift
                                                                End</label>
                                                            <input type="time" name="shift_end" id="shift_end"
                                                                   value="{{old('shift_end', $shift->shift_end)}}"
                                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                            />
                                                        </div>
                                                        <button type="submit"
                                                                class="w-full text-white bg-medic-primary hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                                            Submit
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button
                                        data-modal-target="delete-modal-{{$shift->id}}"
                                        data-modal-toggle="delete-modal-{{$shift->id}}"
                                        class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded transition">
                                        Delete
                                    </button>

                                    <div id="delete-modal-{{$shift->id}}" tabindex="-1"
                                         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                            <div class="relative bg-white rounded-lg shadow">
                                                <button type="button"
                                                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                        data-modal-hide="delete-modal-{{$shift->id}}">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                         xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                              stroke-linejoin="round" stroke-width="2"
                                                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-4 md:p-5 text-center">
                                                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true"
                                                         xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 20 20">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                              stroke-linejoin="round" stroke-width="2"
                                                              d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                    </svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah Anda
                                                        yakin?</h3>
                                                    <div class="flex flex-col gap-4 md:flex-row justify-center">
                                                        <form action="{{route('shifts.destroy', $shift)}}"
                                                              method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button data-modal-hide="delete-modal-{{$shift->id}}"
                                                                    type="submit"
                                                                    class="flex text-white w-full justify-center md:mb-0 md:w-auto bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm items-center px-5 py-2.5">
                                                                Yakin
                                                            </button>
                                                        </form>
                                                        <button data-modal-hide="delete-modal-{{$shift->id}}"
                                                                type="button"
                                                                class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100">
                                                            Batalkan
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="py-4 px-6 text-center text-gray-500">
                                Tidak ada daftar Shift tersedia
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="create-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[100] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Tambah Data Shift Baru
                    </h3>
                    <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="create-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="{{route('shifts.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="shift_start" class="block mb-2 text-sm font-medium text-gray-900">Shift
                                Start</label>
                            <input type="time" name="shift_start" id="shift_start"
                                   value="{{old('shift_start')}}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            />
                        </div>
                        <div class="mb-6">
                            <label for="shift_end" class="block mb-2 text-sm font-medium text-gray-900">Shift
                                End</label>
                            <input type="time" name="shift_end" id="shift_end"
                                   value="{{old('shift_start')}}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            />
                        </div>
                        <button type="submit"
                                class="w-full text-white bg-medic-primary hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
