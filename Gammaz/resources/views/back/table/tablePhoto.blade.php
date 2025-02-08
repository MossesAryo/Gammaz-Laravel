<div id="tablephoto" class="tab-content bg-gray-800 rounded-lg p-6 shadow-lg">
    <h2 class="text-2xl font-bold mb-6 flex items-center">
        <i class="fas fa-images mr-3 text-blue-400"></i>
        Photo Gallery
    </h2>
    <div class="overflow-x-auto custom-scrollbar">
        <table class="w-full">
            <thead class="bg-gray-700">
                <tr>
                    <th class="px-4 py-3 text-left">Id</th>
                    <th class="px-4 py-3 text-left">Title</th>
                    <th class="px-4 py-3 text-left">Description</th>
                    <th class="px-4 py-3 text-left">Created Date</th>
                    <th class="px-4 py-3 text-left">Album</th>
                    <th class="px-4 py-3 text-left">Stats</th>
                    <th class="px-4 py-3 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700">
                @foreach ($photo as $item)
                    <tr class="hover:bg-gray-700">
                        <td class="px-4 py-3">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3">{{ $item->JudulFoto }}</td>
                        <td class="px-4 py-3 max-w-xs truncate">{{ $album->Deskripsifoto }}</td>
                        <td class="px-4 py-3">{{ $item->created_at->format('Y-m-d') }}</td>
                        <td class="px-4 py-3">
                            <span
                                class="bg-blue-500 px-2 py-1 rounded-full text-sm">{{ $item->album->NamaAlbum }}</span>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex items-center space-x-4">
                                <span class="flex items-center">
                                    <i class="fas fa-heart text-red-400 mr-1"></i>
                                    {{ $album->likes_count }}
                                </span>
                                <span class="flex items-center">
                                    <i class="fas fa-comment text-green-400 mr-1"></i>
                                    {{ $album->comments_count }}
                                </span>
                            </div>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex space-x-2">
                                <button onclick="editAlbum({{ $album->id }})"
                                    class="bg-yellow-500 hover:bg-yellow-600 p-2 rounded-lg" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="deleteAlbum({{ $album->id }})"
                                    class="bg-red-500 hover:bg-red-600 p-2 rounded-lg" title="Delete">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>