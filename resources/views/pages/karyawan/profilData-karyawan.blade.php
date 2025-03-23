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
                        <h1>Profile Data Anda</h1>
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
                <div class="sm:rounded col-span-2">
                    <table class="w-full text-sm text-left rtl:text-right">
                        <tbody>
                            <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                                <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                    Nama
                                </th>
                                <td class="px-6 py-2">
                                    Danila Vanila
                                </td>
                            </tr>
                            <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                                <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                    Jenis Kelamin
                                </th>
                                <td class="px-6 py-2">
                                    Perempuan
                                </td>
                            </tr>
                            <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                                <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                    Tanggal Lahir
                                </th>
                                <td class="px-6 py-2">
                                    24/01/2001
                                </td>
                            </tr>
                            <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                                <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                    Tempat Lahir
                                </th>
                                <td class="px-6 py-2">
                                    Jakarta
                                </td>
                            </tr>
                            <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                                <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                    Nomor NIK
                                </th>
                                <td class="px-6 py-2">
                                    234324829034
                                </td>
                            </tr>
                            <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                                <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                    Agama
                                </th>
                                <td class="px-6 py-2">
                                    Islam
                                </td>
                            </tr>
                            <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                                <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                    Nomor Telepon
                                </th>
                                <td class="px-6 py-2">
                                    08976543212
                                </td>
                            </tr>
                            <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                                <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                    Profesi
                                </th>
                                <td class="px-6 py-2">
                                    Manager
                                </td>
                            </tr>
                            <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                                <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                    Email
                                </th>
                                <td class="px-6 py-2">
                                    danilla@gmail.com
                                </td>
                            </tr>
                            <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                                <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                    Alamat
                                </th>
                                <td class="px-6 py-2">
                                    Villa Citra, Bandar Lampung
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>
