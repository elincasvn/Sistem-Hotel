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
                    <h1>Detail Pemesanan Laundry</h1>
                </div>
                {{-- <div class="text-sm font-light">
                    <h1>Anda Dapat Mengelola Akun Admin</h1>
                </div> --}}
            </div>
            <div class="pb-4 ml-24">
                <div class="flex justify-end text-l font-bold">
                    <h1>Nama Admin</h1>
                </div>
                <div class="mr-18 flex justify-end text-sm font-light">
                    <h1>Admin</h1>
                </div>
            </div>
        </div>
        {{-- <x-breadcrumb-superAdmin /> --}}
        <div class="relative overflow-x-auto sm:rounded">
            <table class="w-full text-sm text-left rtl:text-right">
                <tbody>
                    <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                        <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                            Nama Lengkap
                        </th>
                        <td class="px-6 py-2">
                            Danila Vanila
                        </td>
                    </tr>
                    <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                        <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                            Kategori Kamar
                        </th>
                        <td class="px-6 py-2">
                            VIP
                        </td>
                    </tr>
                    <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                        <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                            Nomor Kamar
                        </th>
                        <td class="px-6 py-2">
                            12
                        </td>
                    </tr>
                    <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                        <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                            Berat Laundry
                        </th>
                        <td class="px-6 py-2">
                            12 Kg
                        </td>
                    </tr>
                    <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                        <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                            Total Harga
                        </th>
                        <td class="px-6 py-2">
                            Rp. 18.000
                        </td>
                    </tr>
                    <tr class="border-b-1 border-gray-400 odd:bg-white odd:dark:bg-white-900 even:bg-white-50 even:dark:bg-white-800 dark:border-white-700 border-white-200">
                        <th scope="row" class="px-6 py-2 font-medium text-white-900 whitespace-nowrap dark:text-black">
                            Nama Penanggung Jawab
                        </th>
                        <td class="px-6 py-2">
                            Admin
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-6 flex justify-end">
            <a href="/laundry-admin">
                <button type="button" class="text-black bg-white border-1 hover:bg-white /90 focus:ring-4 focus:outline-none focus:ring-[#6688B8]/50 font-medium rounded text-sm px-5 py-1 text-center inline-flex items-center dark:focus:ring-[#6688B8]/55 me-2 mb-6">
                    Kembali
                </button>
            </a>
        </div>
    </div>
</body>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>
