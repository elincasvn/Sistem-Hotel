<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

</head>
<body>
    {{-- <x-sidebar-admin /> --}}
    <div class="w-full h-screen bg-[#c1e0e9]">
        <div class="flex mr-12 ml-12 grid grid-cols-2 gap-4">
            <div>
                <img src="/assets/logo.png" class="w-32 h-32">
            </div>
            <div class="flex justify-end items-center">
                <img src="/assets/logout.svg">
                <a href="#" class="ml-2 font-medium text-red-600 dark:text-[#D80027] hover:underline">Logout</a>
            </div>
        </div>
        <div class="mr-24 ml-24 bg-white p-8">
            <div class="border-b-3 dark:border-gray-300 rounded-lg grid grid-cols-2 gap-4 mb-4">
                <div class="pb-4">
                    <div class="text-2xl font-bold">
                        <h1>Data Tunjangan Gaji Anda</h1>
                    </div>
                </div>
                <div class="pb-4 ml-24">
                </div>
            </div>
            <div class="grid grid-cols-5 gap-4">
                <div class="">
                    <div class="mb-8">
                        <img src="/assets/avatar.png">
                    </div>
                    <div class="mb-8 flex items-center">
                        <img src="/assets/profile.svg">
                        <a href="/editData-karyawan" class="ml-2 font-medium text-blue-600 dark:text-[#255B9B] hover:underline">Edit Data</a>
                    </div>
                    <div class="mb-8 flex items-center">
                        <img src="/assets/tunjangan.svg">
                        <a href="/tunjangan-karyawan" class="ml-2 font-medium text-blue-600 dark:text-[#255B9B] hover:underline">Tunjangan</a>
                    </div>
                    <div class="mb-8 flex items-center">
                        <img src="/assets/dokumen.svg">
                        <a href="/dokumen-karyawan" class="ml-2 font-medium text-blue-600 dark:text-[#255B9B] hover:underline">Dokumen</a>
                    </div>
                </div>
                <div class="sm:rounded col-span-4">
                    <<div class="relative overflow-x-auto sm:rounded">
                        <table class="w-full text-sm text-left rtl:text-right">
                            <thead class="">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Bulan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nominal
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
                                        Januari
                                    </th>
                                    <td class="px-6 py-4">
                                        23/01/2024
                                    </td>
                                    <td class="px-6 py-4">
                                        Rp. 5.000.000
                                    </td>
                                    <td class="px-6 py-4">
                                        <h1 class="bg-[#4CB437] rounded text-white flex justify-center w-24">Selesai</h1>
                                    </td>
                                    <td class="px-6 py-4 flex">
                                        <a href="#" class="mr-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            <img src="/assets/data.svg">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                                    <th scope="row" class="px-6 py-4 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                        Januari
                                    </th>
                                    <td class="px-6 py-4">
                                        23/01/2024
                                    </td>
                                    <td class="px-6 py-4">
                                        Rp. 5.000.000
                                    </td>
                                    <td class="px-6 py-4">
                                        <h1 class="bg-[#4CB437] rounded text-white flex justify-center w-24">Selesai</h1>
                                    </td>
                                    <td class="px-6 py-4 flex">
                                        <a href="#" class="mr-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            <img src="/assets/data.svg">
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>
