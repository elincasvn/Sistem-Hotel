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
        <div class="border-b-3 dark:border-gray-300 rounded-lg grid grid-cols-2 gap-4 mb-4">
            <div class="pb-4">
                <div class="text-2xl font-bold">
                    <h1>Edit Akun Admin</h1>
                </div>
                {{-- <div class="text-sm font-light">
                    <h1>Anda Dapat Mengelola Akun Admin</h1>
                </div> --}}
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
        <div class="grid grid-cols-5 gap-4">
            <div class="">
                <div class="">
                    <img src="/assets/avatar.png">
                </div>
                <div>
                    <label class="" for="file_input">
                        <img src="/assets/ikon-ubah.svg">
                    </label>
                    <input class="text-white" id="file_input" type="file">

                </div>
            </div>
            <div class="col-span-4 w-[90%]">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Nama Lengkap</label>
                    <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Lengkap" required />
                </div>
                <div>
                    <label for="telepon" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Nomor Telepon</label>
                    <input type="text" id="telepon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nomor Telepon" required />
                </div>
                <div>
                    <label for="email" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Email</label>
                    <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Email" required />
                </div>
                <div>
                    <label for="password" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Password</label>
                    <input type="text" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Password" required />
                </div>
                <div>
                    <label for="agama" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Agama</label>
                    <input type="text" id="agama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Agama" required />
                </div>
                <div>
                    <label for="jenis-kelamin" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Jenis Kelamin</label>
                    <input type="text" id="jenis-kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Jenis Kelamin" required />
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
    </div>
</body>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>
