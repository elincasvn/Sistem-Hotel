<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

</head>
<body>
    <x-sidebar-admin />
    <div class="p-8 sm:ml-64">
        <div class="border-b-3 dark:border-gray-200 rounded-lg grid grid-cols-2 gap-4 mb-4">
            <div class="pb-4 pr-4">
                <div class="text-2xl font-bold">
                    <h1>Kamar Reguler</h1>
                </div>
                <div class="text-sm font-light">
                    <h1>Berikut Data Pemesanan Kamar Reguler</h1>
                </div>
            </div>
            <div class="pb-4 ml-24">
                <div class="flex justify-end text-l font-bold">
                    <h1>Nama Admin</h1>
                </div>
                <div class="mr-15 flex justify-end text-sm font-light">
                    <h1>Admin</h1>
                </div>
            </div>
        </div>
        <x-breadcrumb-superAdmin />
        <div class="mb-2 flex">
            {{-- search --}}
            <div class="pr-4 relative text-gray-600">
                <input class="w-72 border-1 bg-white h-10 px-5 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Cari Riwayat Transaksi">
            </div>
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
        </div>
        <div class="relative overflow-x-auto sm:rounded">
            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="bg-[#6688B8] text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Kamar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
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
                        <td class="px-6 py-4">
                            <h1 class="bg-[#4CB437] rounded text-white flex justify-center w-24">Tersedia</h1>
                        </td>
                        <td class="px-6 py-4 flex">
                            {{-- <a href="#" class="mr-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img src="/assets/edit.svg">
                            </a> --}}
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                        <th scope="row" class="px-6 py-4 font-medium text-white-900 whitespace-nowrap dark:text-black">
                            2
                        </th>
                        <td class="px-6 py-4">
                            Deluxe
                        </td>
                        <td class="px-6 py-4">
                            Rp. 500.000
                        </td>
                        <td class="px-6 py-4">
                            <h1 class="bg-[#D80027] rounded text-white flex justify-center w-24">Terisi</h1>
                        </td>
                        <td class="px-6 py-4 flex">
                            <a href="/detailPemesananKamar-admin" class="mr-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img src="/assets/detail.svg">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <x-pagination-superAdmin />
        </div>
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="flex items-center justify-center h-42 rounded-sm ">
                {{-- <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                        </svg>
                    </p> --}}
            </div>
        </div>
    </div>
    </div>
</body>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>
