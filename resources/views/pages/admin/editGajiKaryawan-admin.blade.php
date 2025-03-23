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
                    <h1>Edit Data Gaji Karyawan Hotel Srikandi</h1>
                </div>
                <div class="text-sm font-light">
                    <h1>Berikut anda dapat menambahkan data karyawan Hotel Srikandi</h1>
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
        <div class="grid grid-cols-2 gap-4">
            <div class="">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Nama Karyawan</label>
                    <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Lengkap" required />
                </div>
                <div>
                    <label for="profesi" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Profesi</label>
                    <input type="text" id="profesi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Profesi" required />
                </div>
                <div>
                    <label for="nominal" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Nominal</label>
                    <input type="text" id="nominal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nominal" required />
                </div>
            </div>

            <div class="col-span-1">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="bulan" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Bulan</label>
                        <input type="text" id="bulan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Bulan" required />
                    </div>
                    <div>
                        <label for="tahun" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Tahun</label>
                        <input type="text" id="tahun" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Tahun" required />
                    </div>
                </div>
                <div>
                    <label class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600" for="file_input">Bukti Pembayaran</label>
                    <input class="block w-[28%] h-[38px] text-sm text-black  border border-black  rounded-lg cursor-pointer bg-black dark:text-gray-600  focus:outline-none dark:bg-black  dark:border-black  dark:placeholder-white " id="file_input" type="file" placeholder="Upload">
                </div>
            </div>

        </div>
        <div class="mt-6 flex justify-end">
            <a href="#">
                <button type="button" class="text-black bg-white border-1 hover:bg-white /90 focus:ring-4 focus:outline-none focus:ring-[#6688B8]/50 font-medium rounded text-sm px-5 py-1 text-center inline-flex items-center dark:focus:ring-[#6688B8]/55 me-2 mb-6">
                    Simpan
                </button>
            </a>
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
