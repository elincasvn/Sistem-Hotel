<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="">
        <div class="h-screen bg-[#c1e0e9] flex items-center justify-center min-h-screen">
            <div class="w-[25%] bg-[#53bcd9] rounded-lg">
                <div class="pb-8 flex items-center justify-center font-bold text-xl">
                    <h1 class="mt-4 text-2xl">Login Admin</h1>
                </div>
                <form>
                    @csrf
                    <div class="">
                        <div class="mb-6 mr-10 ml-10">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" class="bg-white mt-1 block w-full p-2 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan Email Anda" required>
                        </div>
                        <div class="mb-6 mr-10 ml-10 relative">
                            <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                            <input type="password" id="password" name="password" class="bg-white mt-1 block w-full px-2 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="***********" required>
                            <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 flex items-center pt-5 pr-3 text-gray-500">
                                <!-- SVG for eye icon -->
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.16666 10.0003C2.16666 10.0003 4.66666 4.16699 10.5 4.16699C16.3333 4.16699 18.8333 10.0003 18.8333 10.0003C18.8333 10.0003 16.3333 15.8337 10.5 15.8337C4.66666 15.8337 2.16666 10.0003 2.16666 10.0003Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.5 12.5C11.8807 12.5 13 11.3807 13 10C13 8.61929 11.8807 7.5 10.5 7.5C9.11929 7.5 8 8.61929 8 10C8 11.3807 9.11929 12.5 10.5 12.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="w-full flex justify-center pt-4 mb-4">
                        <a href="/dashboard-admin">
                            <button type="button" class="block w-full focus:outline-none text-white bg-[#f8d65b] hover:bg-yellow-400 focus:ring-2 focus:ring-yellow-400 font-medium rounded-lg text-sm px-12 py-1.5 me-2 mb-2">Login</button>
                        </a>
                    </div>
                </form>
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
