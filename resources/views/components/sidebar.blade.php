<div>
    <aside
            :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
            class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
            @click.outside="sidebarToggle = false"
    >
        <!-- SIDEBAR HEADER -->
        <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
            <a class="bg-clip-text text-transparent bg-gradient-to-r from-teal-500 to-blue-500 font-semibold
            text-3xl text-center ml-10" href="{{route('letter.show')}}">AJWA
                {{--                <img width="150" src="https://seeklogo.com/images/F/freepik-logo-E05E514182-seeklogo.com.png" alt="Logo"/>--}}
            </a>

            <button
                    class="block lg:hidden"
                    @click.stop="sidebarToggle = !sidebarToggle"
            >
                <svg
                        class="fill-current"
                        width="20"
                        height="18"
                        viewBox="0 0 20 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                            d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
                            fill=""
                    />
                </svg>
            </button>
        </div>
        <!-- SIDEBAR HEADER -->

        <div
                class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear"
        >
            <!-- Sidebar Menu -->
            <nav
                    class="mt-5 px-4 py-4 lg:mt-9 lg:px-6"
                    x-data="{selected: $persist('Dashboard')}"
            >
                <!-- Menu Group -->
                <div>
                    <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

                    <ul class="mb-6 flex flex-col gap-1.5">
                        <!-- Menu Item Dashboard -->
                        <li>
                            <a
                                    class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                                    href="{{route('letter.show')}}"
                                    @click="selected = (selected === 'Dashboard' ? '':'Dashboard')"
                                    :class="{ 'bg-gradient-to-r from-teal-500 to-blue-500': (selected === 'Dashboard') && (page[0] ===
                                    'dashboard') }"
                            >
                                <svg width="18" height="18" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"></path>
                                </svg>
                                Daftar Surat
                            </a>
                        </li>
                        <!-- Menu Item Dashboard -->
                        <!-- Menu Item Master data -->
                        {{--                        <li>--}}
                        {{--                            <a--}}
                        {{--                                    class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"--}}
                        {{--                                    href="#"--}}
                        {{--                                    @click.prevent="selected = (selected === 'Master' ? '':'Master')"--}}
                        {{--                                    :class="{ 'bg-gradient-to-r from-teal-500 to-blue-500': (selected === 'Master')}"--}}
                        {{--                            >--}}
                        {{--                                <svg width="18" height="18" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"--}}
                        {{--                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">--}}
                        {{--                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z"></path>--}}
                        {{--                                </svg>--}}

                        {{--                                Master Data--}}
                        {{--                                <svg--}}
                        {{--                                        class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"--}}
                        {{--                                        :class="{ 'rotate-180': (selected === 'Master') }"--}}
                        {{--                                        width="20"--}}
                        {{--                                        height="20"--}}
                        {{--                                        viewBox="0 0 20 20"--}}
                        {{--                                        fill="none"--}}
                        {{--                                        xmlns="http://www.w3.org/2000/svg"--}}
                        {{--                                >--}}
                        {{--                                    <path--}}
                        {{--                                            fill-rule="evenodd"--}}
                        {{--                                            clip-rule="evenodd"--}}
                        {{--                                            d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"--}}
                        {{--                                            fill=""--}}
                        {{--                                    />--}}
                        {{--                                </svg>--}}
                        {{--                            </a>--}}

                        {{--                            <!-- Dropdown Menu Start -->--}}
                        {{--                            <div--}}
                        {{--                                    class="translate transform overflow-hidden"--}}
                        {{--                                    :class="(selected === 'Master') ? 'block' :'hidden'"--}}
                        {{--                            >--}}
                        {{--                                <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">--}}
                        {{--                                    <li>--}}
                        {{--                                        <a--}}
                        {{--                                                class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"--}}
                        {{--                                                href="{{route('item.index')}}"--}}
                        {{--                                        >Pengendara</a>--}}
                        {{--                                    </li>--}}
                        {{--                                </ul>--}}
                        {{--                            </div>--}}
                        {{--                            <!-- Dropdown Menu End -->--}}
                        {{--                        </li>--}}
                        <!-- Menu Item Master Data -->

                        <!-- Menu Item PDF -->
                        <li>
                            <a
                                    class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                                    href="{{route('letter.create')}}"
                                    @click="selected = (selected === 'Document' ? '':'Document')"
                                    :class="{ 'bg-gradient-to-r from-teal-500 to-blue-500': (selected === 'Document')&& (page[3] ===
                                    'document')}"
                            >
                                <svg height="20" width="20" data-slot="icon" fill="none" stroke-width="1.5"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"></path>
                                </svg>
                                Buat Surat
                            </a>
                        </li>
                        <!-- Menu Item Document -->

                    </ul>
                </div>
            </nav>
            <!-- Sidebar Menu -->
        </div>
    </aside>

</div>