<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="flex grid grid-cols-1 lg:grid-cols-2">
        <div class="h-screen bg-[#c1e0e9] flex items-center justify-center min-h-screen">
            <div class="w-[40%]">
                <div class="pb-2 flex items-center justify-center font-bold text-xl">
                    <h1>Buat Kata Sandi Baru</h1>
                </div>
                <div class="pb-4 flex items-center justify-center font-semibold">
                    <p>Minimal menggunakan 8 Karakter Huruf </p>
                </div>
                <form>
                    <div class="mb-6 relative">
                        <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi Baru</label>
                        <input type="password" id="password" name="password" class="bg-white mt-1 block w-full px-2 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="***********" required>
                        <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 flex items-center pt-5 pr-3 text-gray-500">
                            <!-- SVG for eye icon -->
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="mb-6 relative">
                        <label for="password" class="block text-sm font-medium text-gray-700">Konfirmasi Kata Sandi</label>
                        <input type="password" id="password" name="password" class="bg-white mt-1 block w-full px-2 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="***********" required>
                        <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 flex items-center pt-5 pr-3 text-gray-500">
                            <!-- SVG for eye icon -->
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="mb-2 w-full flex justify-center">
                        <a href="#">
                            <button type="button" class="block w-full focus:outline-none text-white bg-[#f8d65b] hover:bg-yellow-400 focus:ring-2 focus:ring-yellow-400 font-medium rounded-lg text-sm px-12 py-1.5 me-2 mb-2">Simpan</button>
                        </a>
                    </div>
                    <div class="mb-6 flex justify-center">
                        <a href="/login-karyawan" class="font-light text-sm text-gray-600 dark:text-gray-600 hover:underline">Kembali ke halaman login</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="h-screen bg-white">
            <div class="flex items-center justify-center mt-28">
                <img src="/assets/logo-2.png">
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        const eyeIcon = document.querySelector('#eyeIcon');

        togglePassword.addEventListener('click', function(e) {
            // Toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle the eye slash icon
            eyeIcon.classList.toggle('hidden');
        });

    </script>
</body>
</html>
