@extends('layout.layout')



<body class="bg-neutral-800">
    <div>

        <nav class="md:hidden bg-neutral-900 sticky top-0 z-[99999]">
            <div
                class="container mx-auto flex justify-between items-center p-4 max-w-screen-lg">
                <button class="text-white" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars fa-lg"></i>
                </button>
                <p
                    class="text-white font-bold text-center text-xl lg:text-left w-full">TECHina Mo</>
            </div>
            <div
                id="mobileSearchBar"
                class="hidden bg-neutral-900 pt-0 p-4 lg:hidden">
                <input
                    type="text"
                    placeholder="Search..."
                    class="w-full p-2 rounded bg-neutral-600 text-white placeholder-neutral-400" />
            </div>
        </nav>
        <!-- Mobile Menu -->
        <div
            id="hamburgerMenu"
            class="hidden bg-neutral-950 w-64 h-screen fixed top-0 left-0 shadow-lg">
            <div class="container mx-auto p-4 pt-20">
                <h2 class="text-white font-bold text-xl mb-4">SEssion</h2>
                <ul class="space-y-2">
                    <li>
                        <a
                            href="index.php"
                            class="block text-white hover:bg-neutral-700 p-2 rounded">Dashboard</a>
                    </li>
                    <li>
                        <a
                            href="add.php"
                            class="block text-white hover:bg-neutral-700 p-2 rounded">Create</a>
                    </li>
                    <li>
                        <a
                            href="../database/logout.php?admin=true"
                            class="block text-red-400 hover:bg-neutral-700 p-2 rounded">Logout</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex">
            <nav
                class="hidden md:block bg-neutral-900 sticky top-0 z-[99999] w-64 h-screen">
                <div class="container mx-auto p-4 pt-10">
                    <h2 class="text-white font-bold text-2xl mb-6">SEssion</h2>
                    <ul class="space-y-4 text-xl">
                        <li>
                            <a
                                href="index.php"
                                class="block text-white hover:bg-neutral-700 p-2 rounded">Dashboard</a>
                        </li>
                        <li>
                            <a
                                href="add.php"
                                class="block text-white hover:bg-neutral-700 p-2 rounded">Create</a>
                        </li>
                        <li>
                            <a
                                href="login.php"
                                class="block text-red-400 hover:bg-neutral-700 p-2 rounded">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>


            <main class="p-6 flex-1">

              

            </main>
        </div>
    </div>
</body>

</html>
