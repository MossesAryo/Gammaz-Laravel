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
        <h2 class="text-2xl font-bold mb-6 flex items-center">
            <i class="fas fa-cloud-upload-alt mr-3 text-blue-400"></i>
            Upload New Photo
        </h2>
        <form action="dashboard.html" method="post" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div>
                    <label class="block text-gray-400 mb-2">Photo Title</label>
                    <input type="text" name="JudulFoto" class="w-full bg-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div>
                    <label class="block text-gray-400 mb-2">Description</label>
                    <textarea name="Deskripsi" rows="3" class="w-full bg-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required></textarea>
                </div>
            </div>
            <div class="space-y-4">
                <div>
                    <label class="block text-gray-400 mb-2">Upload Date</label>
                    <input type="date" name="TanggalUnggah" class="w-full bg-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div>
                    <label class="block text-gray-400 mb-2">Album</label>
                    <select name="Album" class="w-full bg-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                        <option value="">Select Album</option>
                        <option value="Vacation">Vacation</option>
                        <option value="Family">Family</option>
                        <option value="Work">Work</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-400 mb-2">Photo File</label>
                    <div class="relative">
                        <input type="file" name="UploadFoto" accept="image/*" class="w-full bg-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                        <i class="fas fa-image absolute right-4 top-3 text-gray-400"></i>
                    </div>
                </div>
            </div>
            <div class="md:col-span-2">
                <button type="submit" name="submit" class="w-full bg-blue-500 hover:bg-blue-600 py-3 rounded-lg flex items-center justify-center space-x-2">
                    <i class="fas fa-upload"></i>
                    <span>Upload Photo</span>
                </button>
            </div>
        </form>
    </div>

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
                                <a href='#' class='bg-yellow-500 hover:bg-yellow-600 p-2 rounded-lg' title='Edit'>
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
                                <a href='#' class='bg-yellow-500 hover:bg-yellow-600 p-2 rounded-lg' title='Edit'>
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