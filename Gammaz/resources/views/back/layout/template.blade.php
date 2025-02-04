<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .photo-card {
            transition: transform 0.2s;
        }

        .photo-card:hover {
            transform: translateY(-5px);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 8px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #2d3748;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #4a5568;
            border-radius: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #718096;
        }

        .modal {
            transition: opacity 0.3s ease-in-out;
        }

        .grid-mask {
            background-image: radial-gradient(#4a5568 1px, transparent 1px);
            background-size: 20px 20px;
        }
    </style>
</head>

<body class="bg-gray-900 text-gray-100 min-h-screen grid-mask">
    <!-- Navbar -->
    @include('back.layout.navbar')
    <!-- Main Content -->
    @yield('main')
</body>

</html>