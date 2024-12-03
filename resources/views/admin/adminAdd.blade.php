@extends('layout.layout')

@include('layout.adminNav')

@include('layout.adminScripts')


<body class="bg-neutral-800">
    <div>

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
                                href="../database/logout.php?admin=true"
                                class="block text-red-400 hover:bg-neutral-700 p-2 rounded">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="p-6 flex-1">
                <form id="blogForm" enctype="multipart/form-data">
                    <div class="max-w-screen-xl mx-auto bg-neutral-900 p-6 rounded-md">
                        <h1 class="text-center text-white text-2xl md:text-4xl font-bold pb-4">Create Blog</h1>
                        <div class="mb-4">
                            <label for="title" class="block text-white font-bold mb-2">Blog Title</label>
                            <input type="text" id="title" name="title" class="w-full p-2 rounded bg-neutral-600 text-white placeholder-neutral-400" placeholder="Enter blog title" required />
                        </div>
                        <input type="hidden" id="author" name="author" value="SEssion">
                        <div class="mb-4">
                            <label for="category" class="block text-white font-bold mb-2">Category</label>
                            <select id="category" name="category" class="w-full p-2 rounded bg-neutral-600 text-white" required>
                                <option value="" disabled selected>Select a category</option>
                                <option value="Software">Software</option>
                                <option value="Hardware">Hardware</option>
                                <option value="Internet of Things (IoT)">Internet of Things (IoT)</option>
                                <option value="Cloud Computing">Cloud Computing</option>
                                <option value="Artificial Intelligence (AI)">Artificial Intelligence (AI)</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="image" class="block text-white font-bold mb-2">Upload Image</label>
                            <input type="file" id="image" name="image" accept="image/*" class="w-full p-2 rounded bg-neutral-600 text-white" />
                        </div>
                        <div class="mb-4">
                            <label for="content" class="block text-white font-bold mb-2">Content</label>
                            <textarea id="content" name="content"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">Add Blog</button>
                    </div>
                </form>
            </main>
        </div>
    </div>
</body>
