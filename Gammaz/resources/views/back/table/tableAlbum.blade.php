<div id="tablealbum" class="tab-content hidden">
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
                    <th class="px-4 py-3 text-left">Upload Date</th>
                    <th class="px-4 py-3 text-left">Total Photos</th>
                    <th class="px-4 py-3 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700">
                @foreach ($album as $item)
                    <tr class="hover:bg-gray-700">
                        <td class="px-4 py-3">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3">{{ $item->NamaAlbum }}</td>
                        <td class="px-4 py-3 max-w-xs truncate">{{ $item->Deskripsi}}</td>
                        <td class="px-4 py-3">{{ $item->created_at->format('Y-m-d') }}</td>
                        
                        <td class="px-4 py-3">
                            
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex space-x-2">
                                <button onclick="editAlbum({{ $item->id }})"
                                    class="bg-yellow-500 hover:bg-yellow-600 p-2 rounded-lg" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="deleteAlbum({{ $item->id }})"
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