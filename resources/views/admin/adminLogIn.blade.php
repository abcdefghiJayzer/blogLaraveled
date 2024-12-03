@extends('layout.layout')


<body class="bg-orange-400 flex items-center justify-center min-h-screen">

    <div class="container  mx-auto max-w-xl">
        <div class="max-w-md bg-neutral-800 mx-auto rounded-xl px-10 py-10">
            <h3 class="text-center text-white text-2xl font-bold mb-6 uppercase">Admin</h3>
            <form id="loginForm" class="max-w-sm">
                <div class="mb-4">
                    <input type="text" placeholder="Username" id="userInput" name="userInput" class="w-full p-2 bg-neutral-100 rounded-lg mt-1">
                    <small id="emailError" style="color: red; display: none;">Please include '@' in the email address.</small>
                </div>
                <div class="mb-8">
                    <input type="password" placeholder="Password" id="password" name="password"
                        class="w-full p-2 bg-neutral-100 rounded-lg mt-1">
                </div>
                <div class="mb-2 text-center ">
                    <input type="submit" value="Login"
                        class="rounded-lg w-1/2 bg-orange-500 text-neutral-100 font-semibold py-2 cursor-pointer hover:bg-orange-400">
                </div>
            </form>
        </div>
    </div>

</body>
