@extends('layout.layout')

@include('layout.navbar')


<section class="h-screen bg-cover bg-center bg-neutral-950 relative bg-fixed
    bg-[url('{{ asset('layoutImages/hero-bg-mobile.png') }}')]
    md:bg-[url('{{ asset('layoutImages/hero-bg.png') }}')]
    bg-no-repeat">

    <div class="absolute inset-x-10 bottom-0 h-40 bg-gradient-to-t from-black to-transparent pointer-events-none"></div>

    <div class="flex pt-64 justify-center h-full backdrop-blur-sm">
        <h1 class="font-bold text-center text-4xl md:text-6xl lg:text-8xl text-white">LinkTechTalk</h1>
    </div>
</section>




<section class="max-w-screen-lg mx-auto">
    <h1 class="text-center font-bold text-white text-3xl p-10 mt-4 uppercase">
        Blog
    </h1>

    <div
        class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-4 mx-6">
        <div
            class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4 w-full md:w-auto">
            <div class="flex flex-col md:flex-row md:items-center w-full">
                <label for="sort-by" class="text-white pb-2 md:pb-0">Sort By:</label>
                <select id="sort-by" class="bg-neutral-800 text-white border border-neutral-700 rounded p-2 md:mx-2">
                    <option value="datetime DESC">Newest</option>
                    <option value="datetime ASC">Oldest</option>
                </select>

            </div>

            <div class="flex flex-col md:flex-row md:items-center w-full">
                <label for="category" class="text-white pb-2 md:pb-0">Category:</label>
                <select
                    id="category"
                    class="bg-neutral-800 text-white border border-neutral-700 rounded p-2 md:mx-2">
                    <option value="*">All</option>
                    <option value="Software">Software</option>
                    <option value="Hardware">Hardware</option>
                    <option value="Internet of Things (IoT)">Internet of Things (IoT)</option>
                    <option value="Cloud Computing">Cloud Computing</option>
                    <option value="Artificial Intelligence (AI)">Artificial Intelligence (AI)</option>
                </select>
            </div>
        </div>

        <div class="w-full md:w-auto">
            <input
                id="searchInput"
                type="text"
                placeholder="Search..."
                class="bg-neutral-800 text-white border border-neutral-700 rounded p-2 mt-2 md:mt-0 w-full md:w-auto" />
        </div>
    </div>

    <section
        id="cardlist"
        class="grid p-4 md:grid-cols-2 lg:grid-cols-3 mx-auto max-w-screen-lg">
    </section>
</section>
