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
                    <h1>Transaksi Kamar Hotel Srikandi</h1>
                </div>
                <div class="text-sm font-light">
                    <h1>Silahkan lakukan Transaksi Pemesanan Kamar Hotel Srikandi</h1>
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
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Nama Lengkap</label>
                    <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Lengkap" required />
                </div>
                <div>
                    <label for="email" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Email</label>
                    <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Email" required />
                </div>
                <div>
                    <label for="telepon" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Nomor Telepon</label>
                    <input type="text" id="telepon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nomor Telepon" required />
                </div>

                <div>
                    <label for="tanggal-masuk" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Tanggal Masuk</label>
                    <input type="text" id="tanggal-masuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Tanggal Masuk" required />
                </div>
                <div>
                    <label for="tanggal-keluar" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Tanggal Keluar</label>
                    <input type="text" id="tanggal-keluar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Tanggal Keluar" required />
                </div>
            </div>

            <div class="col-span-1">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Nama Penanggung Jawab</label>
                    <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Penanggung Jawab" required />
                </div>
                <div>
                    <label for="ktgr-kamar" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Kategori Kamar</label>
                    <input type="text" id="ktgr-kamar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Kategori Kamar" required />
                </div>
                <div>
                    <label for="nmr-kamar" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Nomor Kamar</label>
                    <input type="text" id="nmr-kamar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nomor Kamar" required />
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="mtd-pembayaran" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Metode Pembayaran</label>
                        <input type="text" id="mtd-pembayaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Metode Pembayaran" required />
                    </div>
                    <div>
                        <label for="jmlh-kamar" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Jumlah Kamar</label>
                        <input type="text" id="jmlh-kamar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Jumlah Kamar" required />
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Catatan :</label>
                        <p class="text-sm font-light text-gray-600">Harap memastikan setiap informasi yang diberikan kepada tamu akurat dan jelas; kesalahan dalam penyampaian dapat berdampak pada pengalaman pelanggan dan operasional hotel.</p>
                    </div>
                    <div>
                        <label for="" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Total :</label>
                        <label for="" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Jumlah Tagihan :</label>
                    </div>
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
