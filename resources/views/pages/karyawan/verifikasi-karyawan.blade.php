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
            <div class="w-[45%]">
                <div class="pb-2 flex items-center justify-center font-bold text-xl">
                    <h1>Verifikasi</h1>
                </div>
                <div class="pb-4 flex items-center justify-center font-semibold">
                    <p>Masukkan kode OTP yang dikirim melalui email</p>
                </div>
                <form>
                    @csrf
                    <div class="">
                        <div class="mb-6">
                            <input type="email" id="email" name="email" class="bg-white mt-1 block w-full p-2 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan Email Anda" required>
                        </div>
                    </div>
                    <div class="mb-2 w-full flex justify-center">
                        <a href="#">
                            <button type="button" class="block w-full focus:outline-none text-white bg-[#f8d65b] hover:bg-yellow-400 focus:ring-2 focus:ring-yellow-400 font-medium rounded-lg text-sm px-12 py-1.5 me-2 mb-2">Verifikasi</button>
                        </a>
                    </div>
                    <div class="mb-6 flex justify-center font-light text-sm text-gray-600 dark:text-gray-600 ">Tidak menerima kode OTP ?
                        <a href="#" class="pl-2 font-light text-sm text-red-600 dark:text-red-600 hover:underline">Kirim Ulang</a>
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
