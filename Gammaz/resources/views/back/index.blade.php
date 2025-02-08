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






        <div class="bg-gray-800 rounded-lg p-6 shadow-lg mb-8">
            <!-- Internal Navbar -->
            @include('back.table.internalNavbar')

            <!-- Photo Gallery Content -->
            @include('back.table.tablePhoto')

            <!-- Album Table Content -->
            @include('back.table.tableAlbum')

            <!-- User Table Content -->
            <div id="tableuser" class="tab-content hidden">
                <!-- Add user table content here -->
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const tabButtons = document.querySelectorAll('.tab-btn');
                const tabContents = document.querySelectorAll('.tab-content');

                function switchTab(tabId) {
                    // Hide all tab contents
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                    });

                    // Reset all tab buttons
                    tabButtons.forEach(btn => {
                        btn.classList.remove('border-b-2', 'border-blue-500', 'bg-gray-700', 'text-white');
                        btn.classList.add('text-gray-400');
                    });

                    // Show selected tab content
                    const selectedContent = document.getElementById(tabId);
                    selectedContent.classList.remove('hidden');

                    // Highlight selected tab button
                    const selectedButton = document.querySelector(`[data-tab="${tabId}"]`);
                    selectedButton.classList.remove('text-gray-400');
                    selectedButton.classList.add('border-b-2', 'border-blue-500', 'bg-gray-700', 'text-white');
                }

                // Add click handlers to tab buttons
                tabButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const tabId = button.getAttribute('data-tab');
                        switchTab(tabId);
                    });
                });

                // Optional: Add album management functions
                window.editAlbum = function(albumId) {
                    // Implement edit functionality
                    console.log('Editing album:', albumId);
                };

                window.deleteAlbum = function(albumId) {
                    // Implement delete functionality
                    console.log('Deleting album:', albumId);
                };
            });
        </script>
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
                        t.classList.remove('border-b-2', 'border-blue-500', 'bg-gray-700',
                            'text-white');
                        t.classList.add('text-gray-400');
                    });

                    // Set active tab
                    this.classList.remove('text-gray-400');
                    this.classList.add('border-b-2', 'border-blue-500', 'bg-gray-700',
                        'text-white');

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
@endsection
