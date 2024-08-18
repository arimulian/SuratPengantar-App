<x-layout title="Generate PDF✨">
    <div class="my-6">
        <!-- Breadcrumb Start -->
        <div
                class="flex gap-3 sm:flex-row sm:items-center sm:justify-between"
        >
            <nav>
                <ol class="flex items-center gap-2">
                    <li class="font-medium text-primary">Buat Surat</li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb End -->
    </div>
    <!-- Form Tambah -->
    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
            <h3 class="font-medium text-black dark:text-white">
                Form Buat Surat
            </h3>
            <p class="italic before:content-['*'] before:ml-0.5 before:text-red-500 text-xs mt-3">) Wajib isi</p>
        </div>
        <form action="{{route("letter.store")}}" method="post">
            @csrf
            <div class="p-6.5">
                <div class="mb-4.5">
                    <label
                            class="mb-3 block text-sm font-medium
                             text-black dark:text-white"
                    >
                        No Surat
                    </label>
                    <input name="no"
                           type="text"
                           class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal
                            text-black outline-none transition focus:border-primary active:border-primary
                            disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input
                             dark:text-white dark:focus:border-primary"
                           disabled
                           value="{{$data['no']}}"
                    />
                </div>
                <div class="mb-4.5">
                    <label
                            class="after:content-['*'] after:ml-0.5 after:text-red-500 mb-3 block text-sm font-medium
                             text-black dark:text-white"
                    >
                        Subject
                    </label>
                    <input
                            type="text"
                            name="subject"
                            placeholder="Masukkan Subject"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            value="{{$data['subject']}}"
                            required
                    />
                    @error('subject')
                    <div class="text-sm text-danger mt-0.5">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4.5">
                    <label
                            class="after:content-['*'] after:ml-0.5 after:text-red-500 mb-3 block text-sm font-medium
                             text-black dark:text-white"
                    >
                        Pengirim
                    </label>
                    <input
                            type="text"
                            name="sender"
                            placeholder="Masukkan Pengirim"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            value="{{$data['sender']}}"
                            required
                    />
                    @error('sender')
                    <div class="text-sm text-danger mt-0.5">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4.5">
                    <label
                            class="after:content-['*'] after:ml-0.5 after:text-red-500 mb-3 block text-sm font-medium
                             text-black dark:text-white"
                    >
                        Penerima
                    </label>
                    <input
                            type="text"
                            name="receiver"
                            placeholder="Masukkan penerima"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            required
                    />
                    @error('receiver')
                    <div class="text-sm text-danger mt-0.5">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4.5">
                    <label
                            class="after:content-['*'] after:ml-0.5 after:text-red-500 mb-3 block text-sm font-medium
                             text-black dark:text-white"
                    >
                        Nama Penandatangan
                    </label>
                    <input
                            type="text"
                            name="name_signature"
                            placeholder="Masukkan nama Penandatangan"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            required
                    />
                    @error('nameSignature')
                    <div class="text-sm text-danger mt-0.5">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4.5">
                    <label
                            class="after:content-['*'] after:ml-0.5 after:text-red-500 mb-3 block text-sm font-medium
                             text-black dark:text-white"
                    >
                        Jabatan
                    </label>
                    <input
                            type="text"
                            name="position"
                            placeholder="Masukkan jabatan"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            required
                    />
                    @error('position')
                    <div class="text-sm text-danger mt-0.5">{{ $message }}</div>
                    @enderror
                </div>
                <div class="border-t my-6 italic border-stroke px-6.5 dark:border-strokedark">
                    <p class="text-xs mt-3">Body Surat</p>
                </div>
                <div class="mb-4.5">
                    <label
                            class="after:content-['*'] after:ml-0.5 after:text-red-500 mb-3 block text-sm font-medium
                             text-black dark:text-white"
                    >
                        Nama
                    </label>
                    <div
                            class="relative z-20 bg-white dark:bg-form-input"
                    >
                        <input
                                type="text"
                                name="driver"
                                placeholder="Masukkan Nama Supir"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                required
                        />
                    </div>
                </div>
                <div class="mb-4.5">
                    <label
                            class="after:content-['*'] after:ml-0.5 after:text-red-500 mb-3 block text-sm font-medium
                             text-black dark:text-white"
                    >
                        No Polisi
                    </label>
                    <div
                            class="relative z-20 bg-white dark:bg-form-input"
                    >
                        <input
                                type="text"
                                name="no_pol"
                                placeholder="Masukkan No Polisi"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                required
                        />
                    </div>
                </div>
                <div class="mb-4.5">
                    <label
                            class="after:content-['*'] after:ml-0.5 after:text-red-500 mb-3 block text-sm font-medium
                             text-black dark:text-white"
                    >
                        No HandPhone
                    </label>
                    <input
                            type="text"
                            name="phone_number"
                            placeholder="Masukkan No HandPhone"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            required
                    />
                </div>
                <div class="mb-4.5">
                    <label
                            class="after:content-['*'] after:ml-0.5 after:text-red-500 mb-3 block text-sm font-medium
                             text-black dark:text-white"
                    >
                        Jenis Barang
                    </label>
                    <input
                            type="text"
                            name="type_item"
                            placeholder="Masukkan Jenis Barang"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            required
                    />
                </div>
                <div class="mb-5.5 mt-5 flex justify-end items-center gap-2">
                    <x-link class="bg-danger" href="{{route('letter.show')}}">Go Back</x-link>
                    <x-button-primary type="submit">Save</x-button-primary>
                </div>
            </div>
        </form>
    </div>
</x-layout>
