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
            <div class="pb-4 ">
                <div class="text-2xl font-bold">
                    <h1>Riwayat Transaksir</h1>
                </div>
                <div class="text-sm font-light">
                    <h1>Berikut Riwayat Transaksi yang telah dilakukan Di Hotel Srikandi</h1>
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
        <div class="mb-6 flex">
            {{-- search --}}
            <div class="pr-4 relative text-gray-600">
                <input class="w-72 border-1 bg-white h-10 px-5 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Cari Riwayat Transaksi">
            </div>
            {{-- datepicker --}}
            <div class="relative max-w-sm">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </div>
                <input datepicker id="default-datepicker" type="text" class="border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:border-black   " placeholder="DD/MM/YY">
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
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Harga
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
                            Danila Vanila
                        </td>
                        <td class="px-6 py-4">
                            28/08/2024
                        </td>
                        <td class="px-6 py-4">
                            Rp 400.000
                        </td>
                        <td class="px-6 py-4 flex">
                            <a href="/detailTransaksi-superAdmin" class="mr-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img src="/assets/detail.svg">
                            </a>
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
