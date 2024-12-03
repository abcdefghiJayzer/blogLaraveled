<nav class="bg-neutral-900 sticky top-0 z-[99999]">
    <div
        class="container mx-auto flex justify-between items-center p-4 max-w-screen-lg">
        <a href="index.php" class="text-white font-bold text-xl lg:text-left w-full">LinkTechTalk</a>
        <div class="lg:flex items-center space-x-8 font-semibold">

            <?php echo isset($_SESSION['username']) ?
                '<div class="relative inline-block text-left">
                  <button
                    class="flex items-center text-white"
                    onclick="toggleUserMenu(event)"
                  >
                    <i class="fas fa-user fa-lg hover:text-orange-400"></i>
                    <h1 class="block px-4 py-2 text-white-400 rounded-md hover:text-orange-400">
                    ' . $_SESSION['username'] . '
                    </h1>
                      <a
                      href="./database/logout.php?user=1"
                      class="block px-4 py-2 text-red-400 rounded-md hover:bg-neutral-300"
                      >Logout</a
                    >
                  </button>
                  <div
                    class="user-menu hidden absolute left-0 mt-6 z-20 w-48 bg-white rounded-md shadow-2xl"
                  >
                    <a
                      href="../database/logout.php?user=1"
                      class="block px-4 py-2 text-red-400 rounded-md hover:bg-neutral-300"
                      >Logout</a
                    >
                  </div>
              </div>'

                : '<div class="flex items-center space-x-4">
                <a href="login.php" class="text-white text-sm hover:text-neutral-400 w-10">Log In</a>
                <a href="register.php" class="text-white text-sm hover:text-neutral-400">Register</a>
              </div>
              '; ?>
        </div>
    </div>
    <div
        id="mobileSearchBar"
        class="hidden bg-neutral-900 pt-0 p-4 lg:hidden">
        <input
            type="text"
            placeholder="Search..."
            class="w-full p-2 rounded bg-neutral-600 text-white placeholder-neutral-400" />
    </div>

    <div
        id="mobileMenu"
        class="hidden bg-neutral-900 p-4 lg:hidden shadow-lg font-semibold">
        <a
            href=""
            class="block text-white hover:text-neutral-400 py-2">Logout</a>
    </div>
</nav>
