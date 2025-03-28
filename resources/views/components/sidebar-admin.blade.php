<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-white">
        <a href="" class="flex items-center">
            <img src="assets/logo.png" class="" alt="" />
        </a>
        <ul class="space-y-4 pr-4 pl-4 font-medium">
            <li>
                <a href="/dashboard-admin" class="bg-white border-2 border-yellow-400 flex items-center p-2 text-gray-900 rounded-lg dark:text-[#255b9b] hover:bg-yellow-100 dark:hover:bg-[#f8d65b] group">
                    <img src="/assets/dashboard.svg">
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/kamar-admin" class="bg-white border-2 border-yellow-400 flex items-center p-2 text-gray-900 rounded-lg dark:text-[#255b9b] hover:bg-gray-100 dark:hover:bg-[#f8d65b] group">
                    <img src="/assets/kamarr.svg">
                    <span class="flex-1 ms-3 whitespace-nowrap">Kamar</span>
                </a>
            </li>
            <li>
                <a href="/transaksi-admin" class="bg-white border-2 border-yellow-400 flex items-center p-2 text-gray-900 rounded-lg dark:text-[#255b9b] hover:bg-gray-100 dark:hover:bg-[#f8d65b] group">
                    <img src="/assets/transaksi.svg">
                    <span class="flex-1 ms-3 whitespace-nowrap">Transaksi</span>
                </a>
            </li>
            <li>
                <a href="/riwayatTransaksi-admin" class="bg-white border-2 border-yellow-400 flex items-center p-2 text-gray-900 rounded-lg dark:text-[#255b9b] hover:bg-gray-100 dark:hover:bg-[#f8d65b] group">
                    <img src="/assets/riwayat-transaksi.svg">
                    <span class="flex-1 ms-3 whitespace-nowrap">Riwayat Transaksi</span>
                </a>
            </li>
            <li>
                <a href="/laundry-admin" class="bg-white border-2 border-yellow-400 flex items-center p-2 text-gray-900 rounded-lg dark:text-[#255b9b] hover:bg-gray-100 dark:hover:bg-[#f8d65b] group">
                    <img src="/assets/laundry.svg">
                    <span class="flex-1 ms-3 whitespace-nowrap">Laundry</span>
                </a>
            </li>

            <li>
                <a href="/karyawan-admin" class="bg-white border-2 border-yellow-400 flex items-center p-2 text-gray-900 rounded-lg dark:text-[#255b9b] hover:bg-gray-100 dark:hover:bg-[#f8d65b] group">
                    <img src="/assets/karyawan.svg">
                    <span class="flex-1 ms-3 whitespace-nowrap">Karyawan</span>
                </a>
            </li>

            <div class="mt-20 mb-4  align-bottom">
                <li>
                    <a href="#" class="bg-white border-2 flex items-center p-2 text-gray-900 rounded-lg dark:text-red-800 hover:bg-gray-100 dark:hover:bg-[#f8d65b] group">
                        <img src="/assets/logout.svg">
                        <span class="flex-1 ms-3 whitespace-nowrap">Keluar</span>
                    </a>
                </li>
            </div>
        </ul>
    </div>
</aside>
