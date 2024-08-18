<x-layout title="Letter✨">
    <div class="flex justify-between items-center mb-5">
        <!-- Breadcrumb Start -->
        <div
                class="flex gap-3 xl:text-lg text-xs sm:flex-row sm:items-center sm:justify-between"
        >
            <nav>
                <ol class="flex items-center gap-2">
                    <li class="font-medium text-primary">Surat</li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb End -->
        {{--        <div class="flex gap-2 my-4">--}}
        {{--            <x-link class="bg-primary" href="{{route('item.create')}}">--}}
        {{--                                <span>--}}
        {{--                              <svg width="20" height="20" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"--}}
        {{--                                   viewBox="0 0 24 24"--}}
        {{--                                   xmlns="http://www.w3.org/2000/svg" aria-hidden="true">--}}
        {{--                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>--}}
        {{--                              </svg>--}}
        {{--                            </span>--}}
        {{--                Buat Surat--}}
        {{--            </x-link>--}}
        {{--        </div>--}}
    </div>
    <x-title-table>
        <h1 class="text-lg my-4 font-bold text-black dark:text-white xl:text-lg">
            Daftar Surat✨
        </h1>
        <div class="max-w-full overflow-x-auto">
            <x-table>
                <x-table.thead>
                    <x-table.tr>
                        <x-table.th>#</x-table.th>
                        <x-table.th>Nomor</x-table.th>
                        <x-table.th></x-table.th>
                        <x-table.th>Pengendara</x-table.th>
                        <x-table.th>Jenis Barang</x-table.th>
                        <x-table.th>Action</x-table.th>
                    </x-table.tr>
                </x-table.thead>
                @foreach($letters as $key => $letter)
                    <x-table.tbody>
                        <x-table.td>{{$letters->firstItem() + $key}}</x-table.td>
                        <x-table.td>{{$letter->no}}</x-table.td>
                        <x-table.td><a class="text-primary hover:underline text-sm"
                                       href="{{route('download.pdf', $letter->id)}}" target="_blank">Download</a>
                        </x-table.td>
                        <x-table.td>{{$letter->driver}}</x-table.td>
                        <x-table.td>{{$letter->type_item}}</x-table.td>
                        <x-table.td>
                            <div class="flex items-center space-x-2  lg:space-x-3.5">
                                <!--Edit--->
                                <a href="{{route('preview.pdf', $letter->id)}}" target="_blank">
                                    <svg class="stroke-2 stroke-primary
                        hover:fill-blue-200" height="20" width="20" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                    </svg>
                                </a>
                                <!--Edit--->
                                {{--                                <a href="#">--}}
                                {{--                                    <svg class="stroke-2 stroke-primary--}}
                                {{--                        hover:fill-blue-200" height="20" width="20" data-slot="icon" fill="none" stroke-width="1.5"--}}
                                {{--                                         stroke="currentColor"--}}
                                {{--                                         viewBox="0 0--}}
                                {{--                            24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">--}}
                                {{--                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"></path>--}}
                                {{--                                    </svg>--}}
                                {{--                                </a>--}}
                                <!--Delete--->
                                <a href="{{ route('letter.destroy', $letter->id) }}"
                                   data-confirm-delete="true">
                                    <svg class="stroke-2 stroke-red-400 hover:fill-red-200" height="20"
                                         width="20"
                                         data-slot="icon"
                                         fill="none"
                                         stroke-width="1.5"
                                         stroke="currentColor" viewBox="0 0
                            24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
                                    </svg>
                                </a>
                            </div>
                        </x-table.td>
                    </x-table.tbody>
                @endforeach
            </x-table>
            <!--Pagination-->
            <x-pagination>
                <div class="items-center col-span-3 hidden lg:flex">
                    <p class="text-sm text-gray-700 dark:text-gray-400">
                        {!! __('Showing') !!}
                        @if ($letters->firstItem())
                            <span class="font-medium">{{ $letters->firstItem() }}</span>
                            {!! __('to') !!}
                            <span class="font-medium">{{ $letters->lastItem() }}</span>
                        @else
                            {{ $letters->count() }}
                        @endif
                        {!! __('of') !!}
                        <span class="font-medium">{{ $letters->total() }}</span>
                        {!! __('data') !!}
                    </p>
                </div>
                <div class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    {{ $letters->links() }}
                </div>
            </x-pagination>
            <!-- Pagination -->
        </div>
    </x-title-table>
</x-layout>