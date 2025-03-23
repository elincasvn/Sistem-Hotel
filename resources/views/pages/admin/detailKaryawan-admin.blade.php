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
        <div class="border-b-3 dark:border-gray-300 rounded-lg grid grid-cols-2 gap-4 mb-4">
            <div class="pb-4">
                <div class="text-2xl font-bold">
                    <h1>Detail Karyawan</h1>
                </div>
                {{-- <div class="text-sm font-light">
                    <h1>Anda Dapat Mengelola Akun Admin</h1>
                </div> --}}
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
        <div class="grid grid-cols-4 gap-4">
            <div class="">
                <div class="">
                    <img src="/assets/avatar.png">
                </div>
                {{-- <div>
                    <label class="" for="file_input">
                        <img src="/assets/ikon-ubah.svg">
                    </label>
                    <input class="text-white" id="file_input" type="file">
                </div> --}}
            </div>
            {{-- <div class="mt-6 flex justify-end">
                <a href="#">
                    <button type="button" class="text-black bg-white border-1 hover:bg-white /90 focus:ring-4 focus:outline-none focus:ring-[#6688B8]/50 font-medium rounded text-sm px-5 py-1 text-center inline-flex items-center dark:focus:ring-[#6688B8]/55 me-2 mb-6">
                        Tambah
                    </button>
                </a>
            </div> --}}

            <div class="sm:rounded">
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
                                NIK
                            </th>
                            <td class="px-6 py-2">
                                234324829034
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
                                Nomor Telepon
                            </th>
                            <td class="px-6 py-2">
                                08976543212
                            </td>
                        </tr>
                        <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                            <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                Status
                            </th>
                            <td class="px-6 py-2">
                                Aktif
                            </td>
                        </tr>
                        <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                            <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                Alamat
                            </th>
                            <td class="px-6 py-2">
                                Villa Citra, Bandar Lampun
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
                                Email
                            </th>
                            <td class="px-6 py-2">
                                danilla@gmail.com
                            </td>
                        </tr>
                        <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                            <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                Tanggal Lahir
                            </th>
                            <td class="px-6 py-2">
                                24-01-2000
                            </td>
                        </tr>
                        <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                            <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                Password
                            </th>
                            <td class="px-6 py-2">
                                *********
                            </td>
                        </tr>
                        <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                            <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                                Profesi
                            </th>
                            <td class="px-6 py-2">
                                Manajer
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="relative overflow-x-auto sm:rounded">
            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Surat
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
                            Dokumen Surat
                        </td>
                        <td class="px-6 py-4 flex">
                            <a href="#" class="mr-4 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img src="/assets/data.svg">
                            </a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                        <th scope="row" class="px-6 py-4 font-medium text-white-900 whitespace-nowrap dark:text-black">
                            2
                        </th>
                        <td class="px-6 py-4">
                            Dokumen Surat
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
        <div class="grid grid-cols-2 gap-4 ">

        </div>

    </div>
</body>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>
