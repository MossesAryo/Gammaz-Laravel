@extends('back.layout.template')

@section('main')
    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400">Total Photos</p>
                        <h3 class="text-2xl font-bold">1,234</h3>
                    </div>
                    <i class="fas fa-images text-blue-400 text-3xl"></i>
                </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400">Total Albums</p>
                        <h3 class="text-2xl font-bold">42</h3>
                    </div>
                    <i class="fas fa-folder text-yellow-400 text-3xl"></i>
                </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400">Total Likes</p>
                        <h3 class="text-2xl font-bold">5,678</h3>
                    </div>
                    <i class="fas fa-heart text-red-400 text-3xl"></i>
                </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400">Comments</p>
                        <h3 class="text-2xl font-bold">987</h3>
                    </div>
                    <i class="fas fa-comments text-green-400 text-3xl"></i>
                </div>
            </div>
        </div>

        <!-- Upload Form -->

        <div class="bg-gray-800 rounded-lg p-6 shadow-lg mb-8">
            <!-- Internal Navbar -->
            @include('back.FormUpload.internalNavbar')
            <!-- Upload Photo Form -->
            @include('back.FormUpload.uploadPhoto')
            <!-- Upload Album Form -->
            @include('back.FormUpload.uploadAlbum')
           
            
        </div>

       
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const tabs = document.querySelectorAll('.upload-tab');
                const contents = document.querySelectorAll('.upload-content');
        
                tabs.forEach(tab => {
                    tab.addEventListener('click', function(e) {
                        e.preventDefault();
                        
                        // Reset tabs
                        tabs.forEach(t => {
                            t.classList.remove('border-b-2', 'border-blue-500', 'bg-gray-700', 'text-white');
                            t.classList.add('text-gray-400');
                        });
        
                        // Set active tab
                        this.classList.remove('text-gray-400');
                        this.classList.add('border-b-2', 'border-blue-500', 'bg-gray-700', 'text-white');
        
                        // Hide all contents
                        contents.forEach(content => {
                            content.style.display = 'none';
                        });
        
                        // Show selected content
                        const targetId = this.getAttribute('href').substring(1);
                        document.getElementById(targetId).style.display = 'block';
                    });
                });
            });
            </script>
      

        <!-- Photo Gallery -->
        <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
            <h2 class="text-2xl font-bold mb-6 flex items-center">
                <i class="fas fa-images mr-3 text-blue-400"></i>
                Photo Gallery
            </h2>
            <div class="overflow-x-auto custom-scrollbar">
                <table class="w-full">
                    <thead class="bg-gray-700">
                        <tr>
                            <th class="px-4 py-3 text-left">#</th>
                            <th class="px-4 py-3 text-left">Preview</th>
                            <th class="px-4 py-3 text-left">Title</th>
                            <th class="px-4 py-3 text-left">Description</th>
                            <th class="px-4 py-3 text-left">Upload Date</th>
                            <th class="px-4 py-3 text-left">Album</th>
                            <th class="px-4 py-3 text-left">Stats</th>
                            <th class="px-4 py-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        <tr class='hover:bg-gray-700'>
                            <td class='px-4 py-3'>1</td>
                            <td class='px-4 py-3'>
                                <img src='/api/placeholder/64/64' class='w-16 h-16 object-cover rounded-lg'>
                            </td>
                            <td class='px-4 py-3'>Beach Sunset</td>
                            <td class='px-4 py-3 max-w-xs truncate'>Beautiful sunset over the ocean</td>
                            <td class='px-4 py-3'>2024-02-04</td>
                            <td class='px-4 py-3'>
                                <span class='bg-blue-500 px-2 py-1 rounded-full text-sm'>Vacation</span>
                            </td>
                            <td class='px-4 py-3'>
                                <div class='flex items-center space-x-4'>
                                    <span class='flex items-center'>
                                        <i class='fas fa-heart text-red-400 mr-1'></i>42
                                    </span>
                                    <span class='flex items-center'>
                                        <i class='fas fa-comment text-green-400 mr-1'></i>5
                                    </span>
                                </div>
                            </td>
                            <td class='px-4 py-3'>
                                <div class='flex space-x-2'>
                                    <a href='#' class='bg-yellow-500 hover:bg-yellow-600 p-2 rounded-lg'
                                        title='Edit'>
                                        <i class='fas fa-edit'></i>
                                    </a>
                                    <a href='#' class='bg-red-500 hover:bg-red-600 p-2 rounded-lg' title='Delete'>
                                        <i class='fas fa-trash-alt'></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class='hover:bg-gray-700'>
                            <td class='px-4 py-3'>2</td>
                            <td class='px-4 py-3'>
                                <img src='/api/placeholder/64/64' class='w-16 h-16 object-cover rounded-lg'>
                            </td>
                            <td class='px-4 py-3'>Family Picnic</td>
                            <td class='px-4 py-3 max-w-xs truncate'>Summer picnic with family and friends</td>
                            <td class='px-4 py-3'>2024-01-15</td>
                            <td class='px-4 py-3'>
                                <span class='bg-blue-500 px-2 py-1 rounded-full text-sm'>Family</span>
                            </td>
                            <td class='px-4 py-3'>
                                <div class='flex items-center space-x-4'>
                                    <span class='flex items-center'>
                                        <i class='fas fa-heart text-red-400 mr-1'></i>27
                                    </span>
                                    <span class='flex items-center'>
                                        <i class='fas fa-comment text-green-400 mr-1'></i>3
                                    </span>
                                </div>
                            </td>
                            <td class='px-4 py-3'>
                                <div class='flex space-x-2'>
                                    <a href='#' class='bg-yellow-500 hover:bg-yellow-600 p-2 rounded-lg'
                                        title='Edit'>
                                        <i class='fas fa-edit'></i>
                                    </a>
                                    <a href='#' class='bg-red-500 hover:bg-red-600 p-2 rounded-lg' title='Delete'>
                                        <i class='fas fa-trash-alt'></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
