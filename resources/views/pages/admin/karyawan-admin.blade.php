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
                    <h1>Data Karyawan</h1>
                </div>
                <div class="text-sm font-light">
                    <h1>Berikut Data Karyawan Hotel Srikandi</h1>
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
        <div class="flex grid grid-cols-2 lg:grid-cols-2">
            <div class="flex">
                <div>
                    <a href="/tambahKaryawan-admin">
                        <button type="button" class="text-white bg-[#6688B8] hover:bg-[#6688B8]/90 focus:ring-4 focus:outline-none focus:ring-[#6688B8]/50 font-medium rounded text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#6688B8]/55 me-2 mb-6">
                            <img src="assets/tambah.svg" class="mr-2">
                            Tambah
                        </button>
                    </a>
                </div>
                <div>
                    <a href="/gajiKaryawan-admin">
                        <button type="button" class="text-white bg-[#6688B8] hover:bg-[#6688B8]/90 focus:ring-4 focus:outline-none focus:ring-[#6688B8]/50 font-medium rounded text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#6688B8]/55 me-2 mb-6">
                            <img src="assets/tambah.svg" class="mr-2">
                            Gaji Karyawan
                        </button>
                    </a>
                </div>
            </div>
            <div class="gap-4 flex justify-end">
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
                            Nama
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
                            Danila Vanila
                        </td>
                        <td class="px-6 py-4">
                            <h1 class="bg-[#4CB437] rounded text-white flex justify-center w-24">Aktif</h1>
                        </td>
                        <td class="px-6 py-4 flex">
                            <a href="/detailKaryawan-admin" class="mr-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img src="/assets/data.svg">
                            </a>
                            <a href="/editKaryawan-admin" class="mr-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img src="/assets/edit.svg">
                            </a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img src="/assets/delete.svg">
                            </a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                        <th scope="row" class="px-6 py-4 font-medium text-white-900 whitespace-nowrap dark:text-black">
                            2
                        </th>
                        <td class="px-6 py-4">
                            Danila Vanila
                        </td>
                        <td class="px-6 py-4">
                            <h1 class="bg-[#D80027] rounded text-white flex justify-center w-24">Non Aktif</h1>
                        </td>
                        <td class="px-6 py-4 flex">
                            <a href="#" class="mr-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img src="/assets/edit.svg">
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
