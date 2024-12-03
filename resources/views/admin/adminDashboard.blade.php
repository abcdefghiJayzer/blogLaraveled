@extends('layout.layout')

@include('layout.adminNav')


<body class="bg-neutral-800">
    <div>
        <!-- Mobile Menu -->
        <div
            id="hamburgerMenu"
            class="hidden bg-neutral-950 w-64 h-screen fixed top-0 left-0 shadow-lg">
            <div class="container mx-auto p-4 pt-20">
                <h2 class="text-white font-bold text-xl mb-4"></h2>
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
                    <h2 class="text-white font-bold text-2xl mb-6">DITO yung session</h2>
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
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                    <div class="bg-neutral-900 p-6 rounded-lg shadow-lg">
                        <p class="text-white text-2xl font-bold">Total Users</p>
                        <p id="totalUser" class="text-orange-500 text-4xl font-extrabold mt-4">38</p>
                    </div>

                    <div class="bg-neutral-900 p-6 rounded-lg shadow-lg">
                        <p class="text-white text-2xl font-bold">Number of Posts</p>
                        <p id="totalPost" class="text-orange-500 text-4xl font-extrabold mt-4">3</p>
                    </div>
                </div>

                <div class="bg-neutral-850 p-1 rounded-lg">
                    <div id="cardlist" class="md:hidden space-y-4">
                        <!-- pang phone uses cards -->
                        <div class="bg-neutral-900 p-4 rounded-lg">
                            <h3 class="text-white font-bold text-md">
                                How to Learn JavaScript
                            </h3>
                            <p class="text-neutral-400 pb-6">John Doe • 2024-10-14</p>
                            <div class="text-right">
                                <a
                                    href="edit.php"
                                    class="bg-neutral-500 text-white px-4 py-2 rounded hover:bg-orange-600">Update</a>
                                <a
                                    href="edit.php"
                                    class="bg-neutral-500 text-white px-4 py-2 rounded hover:bg-orange-600">Delete</a>
                            </div>
                        </div>
                    </div>

                    <!-- table pang laptop   -->
                    <table
                        class="hidden md:table min-w-full bg-neutral-900 rounded-lg text-neutral-100">
                        <thead>
                            <tr class="text-left text-orange-500">
                                <th class="py-3 px-6 ">Title</th>
                                <th class="py-3 px-6 ">Image</th>
                                <th class="py-3 px-6 ">Author</th>
                                <th class="py-3 px-6 ">Date</th>
                                <th class="py-3 px-6 text-center" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody id="bloglist">
                            <tr class="border-b border-neutral-700">
                                <td class="py-3 px-6">How to Learn JavaScript</td>
                                <td class="py-3 px-6">John Doe</td>
                                <td class="py-3 px-6">2024-10-14</td>
                                <td class="py-3 px-6 text-right">
                                    <a
                                        href="edit.php"
                                        class="bg-neutral-500 text-white px-4 py-2 rounded hover:bg-orange-600">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <!-- modal for delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this blog?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="modalSureDelete" type="button" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </div>

</body>
