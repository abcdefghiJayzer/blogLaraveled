@extends('layout.layout')


<body class="bg-neutral-900 flex items-center justify-center min-h-screen">
    <div class="container mx-auto max-w-xl">
        <div class="max-w-md bg-neutral-800 mx-auto rounded-xl px-10 py-10">
            <a href="index.php">
                <svg class="h-8 w-8 text-gray-200" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" />
                </svg>
            </a>
            <h3 class="text-center text-white text-2xl font-bold mb-6">Login</h3>
            <form id="loginForm" class="max-w-sm">
                <div class="mb-4">
                    <input type="text" placeholder="Username or Email" id="userInput" name="userInput" class="w-full p-2 border rounded-lg mt-1">
                </div>
                <div class="mb-8">
                    <input type="password" placeholder="Password" id="password" name="password" class="w-full p-2 border rounded-lg mt-1" required>
                </div>
                <div class="text-center">
                    <input type="submit" value="Login" class="rounded-lg w-full bg-orange-500 text-neutral-800 font-semibold py-2 cursor-pointer hover:bg-orange-400 hover:text-black">
                </div>

                <div class="text-center my-4 ">
                    <span class="text-neutral-100">or Log in with</span>
                </div>

                <div class="flex flex-row mb-8 text-center gap-x-3">

                    <a href="" class="bg-yellow-500 py-2 w-full rounded-xl cursor-pointer hover:bg-yellow-400 font-semibold"><i class='fab fa-google pr-5'></i>Google</a>

                    <a href="" class="bg-blue-500 w-full py-2 rounded-xl cursor-pointer hover:bg-blue-400 font-semibold"><i class="fab fa-facebook-f pr-5"></i>Facebook

                    </a>

                </div>

                <div class="text-center">
                    <a href="register.php" class="text-white">No Account Yet? <span class="text-orange-500 hover:underline">Register here</span></a>
                </div>
            </form>
        </div>
    </div>
</body>
