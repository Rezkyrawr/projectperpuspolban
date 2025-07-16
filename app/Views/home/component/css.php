<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Perpustakaan Digital Politeknik Negeri Bandung - Akses digital ke koleksi akademik dan penelitian">
    <title>Perpustakaan Digital POLBAN | Politeknik Negeri Bandung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'polban-green': '#8BC34A',
                        'polban-dark-green': '#689F38',
                        'polban-light': '#DCEDC8',
                        'polban-blue': '#2196F3',
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif'],
                    },
                    boxShadow: {
                        'polban': '0 4px 6px -1px rgba(139, 195, 74, 0.2), 0 2px 4px -1px rgba(139, 195, 74, 0.1)',
                        'polban-lg': '0 10px 15px -3px rgba(139, 195, 74, 0.2), 0 4px 6px -2px rgba(139, 195, 74, 0.1)',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }
        
        .swiper {
            width: 100%;
            height: 100%;
        }
        
        .swiper-slide {
            height: 400px;
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        
        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }
        
        .swiper-slide:hover img {
            transform: scale(1.1);
        }
        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.3) 50%, rgba(0,0,0,0) 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-start;
            padding: 2rem;
            color: white;
            z-index: 10;
        }
        
        @media (min-width: 768px) {
            .swiper-slide {
                height: 500px;
            }
            
            .overlay {
                background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.3) 50%, rgba(0,0,0,0) 100%);
                justify-content: center;
                padding: 4rem;
            }
        }
        
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #8BC34A;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover:after {
            width: 100%;
        }
        
        .search-box {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .search-box:focus-within {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }
        
        .folder-item {
            transition: all 0.3s ease;
        }
        
        .folder-item:hover {
            transform: translateX(5px);
        }
        
        .stats-card {
            transition: all 0.3s ease;
        }
        
        .stats-card:hover {
            transform: scale(1.05);
        }
        
        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }
        
        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .floating-btn {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        /* Dropdown Folder Styles */
        .dropdown-folder {
            position: relative;
        }

        .dropdown-content {
            max-height: 0;
            overflow: hidden;
            background-color: #f9f9f9;
            border-left: 2px solid #8BC34A;
            transition: max-height 0.3s ease-out;
        }

        .dropdown-folder.active .dropdown-content {
            max-height: 500px;
            transition: max-height 0.3s ease-in;
        }

        .dropdown-folder button {
            transition: all 0.3s ease;
            text-align: left;
            width: 100%;
        }

        .dropdown-folder button i {
            transition: transform 0.3s ease;
        }

        /* Sidebar sticky */
        .sticky-sidebar {
            position: -webkit-sticky;
            position: sticky;
            top: 1rem;
            align-self: flex-start;
        }
    </style>
</head>