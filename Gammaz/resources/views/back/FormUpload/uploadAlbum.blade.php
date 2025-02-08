<div id="album" class="upload-content" style="display:none;">
    <h2 class="text-2xl font-bold mb-6 flex items-center">
        <i class="fas fa-folder-plus mr-3 text-green-400"></i>
        Create New Album
    </h2>
    <form action="{{ route('uploadAlbum') }}" method="post" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf
        <div class="space-y-4">
            <div>
                <label class="block text-gray-400 mb-2">Album Name</label>
                <input type="text" name="NamaAlbum"
                    class="w-full bg-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400"
                    required>
            </div>
            <div>
                <label class="block text-gray-400 mb-2">Album Description</label>
                <textarea id="Deskripsi" name="Deskripsi" rows="3"
                    class="w-full bg-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400" required></textarea>
            </div>
        </div>
        <div class="space-y-4">
            <div>
                <label class="block text-gray-400 mb-2">Creation Date</label>
                <input type="date" name="created_at"
                    class="w-full bg-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400"
                    required>
            </div>
        </div>
        <div class="md:col-span-2">
            <button type="submit" name="submit"
                class="w-full bg-green-500 hover:bg-green-600 py-3 rounded-lg flex items-center justify-center space-x-2">
                <i class="fas fa-folder-plus"></i>
                <span>Create Album</span>
            </button>
        </div>
    </form>
</div>