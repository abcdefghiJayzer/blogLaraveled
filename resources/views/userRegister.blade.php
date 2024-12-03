@extends('layout.layout')


<body class="bg-neutral-800 flex items-center justify-center min-h-screen">
    <div class="container mx-auto items-center max-w-md">
        <div class="mx-auto bg-neutral-900  rounded-xl px-10 py-10 max-w-lg">
            <h3 class="text-center text-white text-2xl font-bold mb-6">Register</h3>
            <form id="registerForm">
                <div class="mb-4">
                    <input type="username" placeholder="Username" id="username" name="username" class="w-full p-2 border rounded-lg mt-1" required>
                </div>
                <div class="mb-4">
                    <input type="email" placeholder="Email" id="email" name="email" class="w-full p-2 border rounded-lg mt-1" required>
                </div>
                <div class="mb-4">
                    <input type="password" placeholder="Password" id="password" name="password"
                        class="w-full p-2 border rounded-lg mt-1" required>
                </div>
                <div class="mb-4">
                    <input type="password" placeholder="Confirm Password" id="confirm-password" name="confirm-password"
                        class="w-full p-2 border rounded-lg mt-1" required>
                </div>
                <div class="mb-8 text-center">
                    <input type="submit" value="Register"
                        class="w-1/2 bg-orange-500 text-neutral-800 font-semibold py-2 cursor-pointer hover:bg-orange-400 hover:text-black rounded-lg">
                </div>
                <div class="text-center">
                    <a href="login.php" class="text-white ">Already Have an Account? <span class="text-orange-500 hover:underline">Log in here</span></a>
                </div>
            </form>
        </div>
    </div>
</body>
