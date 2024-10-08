<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    <style>
        .inline-all > * {
            display: flex;
            align-items: center;
            font-size: 15px;
        }
    </style>
    <title>K-Store</title>
</head>
<body class="w-full m-0 p-0 pt-[100px] h-screen">
    {{ $slot }}
</body>
<script>
    function confirmDeleteArticle(id) { 
        if (confirm('Are you sure you want to delete this article?')) {
            window.location.href = '/admin/artikel/delete/' + id;
        }
    }

    function confirmDeleteProduct(id) { 
        if (confirm('Are you sure you want to delete this product?')) {
            window.location.href = '/admin/produk/delete/' + id;
        }
    }

    function logoutButton() { 
        if (confirm('Are you sure you want to Logout?')) {
            window.location.href = '/logout';
        }
    }
</script>
</html>