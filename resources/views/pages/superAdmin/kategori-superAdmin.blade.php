<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

</head>
<body>
    <x-sidebar-superAdmin />
    <div class="p-8 sm:ml-64">
        <div class="border-b-3 dark:border-gray-200 rounded-lg grid grid-cols-2 gap-4 mb-4">
            <div class="pb-4">
                <div class="text-2xl font-bold">
                    <h1>Kategori Kamar</h1>
                </div>
                <div class="text-sm font-light">
                    <h1>Data Kategori Kamar Yang Tersedia Di Hotel Srikandi</h1>
                </div>
            </div>
            <div class="pb-4 ml-24">
                <div class="flex justify-end text-l font-bold">
                    <h1>Nama Super Admin</h1>
                </div>
                <div class="mr-18 flex justify-end text-sm font-light">
                    <h1>Super Admin</h1>
                </div>
            </div>
        </div>
        <x-breadcrumb-superAdmin />
        <div class="flex grid grid-cols-2 lg:grid-cols-2">
            <!-- Modal Tambah -->
            <button data-modal-target="tambah-modal" data-modal-toggle="tambah-modal" class="w-[120px] text-white bg-[#6688B8] hover:bg-[#6688B8]/90 focus:ring-4 focus:outline-none focus:ring-[#6688B8]/50 font-medium rounded text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#6688B8]/55 me-2 mb-6" type="button">
                <img src="assets/tambah.svg" class="mr-2">
                Tambah
            </button>
            <!-- Main modal -->
            <div id="tambah-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-white-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 rounded-t dark:border-white border-gray-200">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-black">
                                Tambah Kategori Kamar
                            </h3>
                            <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-white dark:hover:text-black" data-modal-hide="tambah-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5">
                            <form class="" action="#">
                                <div>
                                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama Kategori</label>
                                    <input type="text" name="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" placeholder="Masukkan Nama Kategori" required />
                                </div>
                                <div>
                                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Harga</label>
                                    <input type="text" name="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" placeholder="Rp" required />
                                </div>
                                <button type="submit" class="mt-8 w-full text-white bg-[#292929] hover:bg-[#292929] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 text-center dark:bg-[#292929] dark:hover:bg-[#292929] dark:focus:ring-[#292929]">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gap-4 flex justify-end">
                {{-- dropdown --}}
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="border-1 ml-4 mb-6  focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-white dark:focus:ring-[#6688B8] font-light" type="button">Kategori <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Regular</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Deluxe</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">VIP</a>
                        </li>
                    </ul>
                </div>
                {{-- search --}}
                <div class="relative text-gray-600">
                    <input class="w-72 border-1 bg-white h-10 px-5 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Search">
                </div>
            </div>
        </div>
        <div class="relative overflow-x-auto sm:rounded">
            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="bg-[#6688B8] text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                        <th scope="row" class="px-6 py-4 font-medium text-white-900 whitespace-nowrap dark:text-black">
                            1
                        </th>
                        <td class="px-6 py-4">
                            Regular
                        </td>
                        <td class="px-6 py-4">
                            Rp. 400.000
                        </td>
                        <td class="px-6 py-4 flex">
                            <div class="mr-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <!-- Modal Edit -->
                                </button>
                                <img src="/assets/edit.svg" data-modal-target="edit-modal" data-modal-toggle="edit-modal">
                                <!-- Main modal -->
                                <div id="edit-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow-sm dark:bg-white-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 rounded-t dark:border-white border-gray-200">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-black">
                                                    Edit Kategori Kamar
                                                </h3>
                                                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-white dark:hover:text-black" data-modal-hide="edit-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5">
                                                <form class="" action="#">
                                                    <div>
                                                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama Kategori</label>
                                                        <input type="text" name="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" placeholder="Masukkan Nama Kategori" required />
                                                    </div>
                                                    <div>
                                                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Harga</label>
                                                        <input type="text" name="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" placeholder="Rp" required />
                                                    </div>
                                                    <button type="submit" class="mt-8 w-full text-white bg-[#292929] hover:bg-[#292929] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 text-center dark:bg-[#292929] dark:hover:bg-[#292929] dark:focus:ring-[#292929]">Simpan</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img src="/assets/delete.svg">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <x-pagination-superAdmin />
        </div>

    </div>
</body>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>
