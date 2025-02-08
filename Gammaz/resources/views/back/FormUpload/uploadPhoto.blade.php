<div id="photo" class="upload-content">
    <h2 class="text-2xl font-bold mb-6 flex items-center">
        <i class="fas fa-cloud-upload-alt mr-3 text-blue-400"></i>
        Upload New Photo
    </h2>
    <form action="{{ route('uploadPhoto') }}" method="post" enctype="multipart/form-data"
        class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf
        <div class="space-y-4">
            <div>
                <label class="block text-gray-400 mb-2">Photo Title</label>
                <input type="text" name="JudulFoto"
                    class="w-fulal bg-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>
            <div>
                <label class="block text-gray-400 mb-2">Description</label>
                <textarea name="Deskripsi" rows="3"
                    class="w-full bg-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required></textarea>
            </div>
        </div>
        <div class="space-y-4">
            <div>
                <label class="block text-gray-400 mb-2">Upload Date</label>
                <input type="date" name="created_at"
                    class="w-full bg-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>
            <div>
                <label class="block text-gray-400 mb-2">Album</label>
                <select name="Album"
                    class="w-full bg-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
                    <option value="">Select Album</option>
                    @foreach ($album as $item)
                    <option value="{{ $item->id }}">{{ $item->NamaAlbum }}</option>         
                    @endforeach
                    
                </select>
            </div>
            <div>
                <label class="block text-gray-400 mb-2">Photo File</label>
                <div class="relative">
                    <input type="file" name="UploadFoto" accept="image/*"
                        class="w-full bg-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                    <i class="fas fa-image absolute right-4 top-3 text-gray-400"></i>
                </div>
            </div>
        </div>
        <div class="md:col-span-2">
            <button type="submit" name="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 py-3 rounded-lg flex items-center justify-center space-x-2">
                <i class="fas fa-upload"></i>
                <span>Upload Photo</span>
            </button>
        </div>
    </form>
</div>
