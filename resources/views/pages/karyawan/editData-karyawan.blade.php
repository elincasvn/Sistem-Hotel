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
                        <h1>Edit Data Diri Anda</h1>
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
                    <div class="grid grid-cols-2 gap-4 ">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Nama Lengkap</label>
                            <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Lengkap" required />
                        </div>
                        <div>
                            <label for="jk" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Jenis Kelamin</label>
                            <input type="text" id="jk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Jenis Kelamin" required />
                        </div>
                        <div>
                            <label for="agama" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Agama</label>
                            <input type="text" id="agama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Agama" required />
                        </div>
                        <div>
                            <label for="nil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">NIK</label>
                            <input type="text" id="nil" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan NIK" required />
                        </div>
                        <div>
                            <label for="telepon" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Nomor Telepon</label>
                            <input type="text" id="telepon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nomor Telepon" required />
                        </div>
                        <div>
                            <label for="profesi" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Profesi</label>
                            <input type="text" id="profesi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Profesi" required />
                        </div>
                        <div>
                            <label for="email" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Email</label>
                            <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Email" required />
                        </div>
                        <div>
                            <label for="alamat" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Alamat</label>
                            <input type="text" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Alamat" required />
                        </div>
                        <div>
                            <label for="tl" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Tanggal Lahir</label>
                            <input type="text" id="tl" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Tanggal Lahir" required />
                        </div>
                        <div></div>
                        <div>
                            <label for="tempat" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Tempat Lahir</label>
                            <input type="text" id="tempat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Tempat Lahir" required />
                        </div>
                        <div class="mt-6 flex justify-end">
                            <a href="#">
                                <button type="button" class="text-black bg-white border-1 hover:bg-white /90 focus:ring-4 focus:outline-none focus:ring-[#6688B8]/50 font-medium rounded text-sm px-5 py-1 text-center inline-flex items-center dark:focus:ring-[#6688B8]/55 me-2 mb-6">
                                    Simpan
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>
