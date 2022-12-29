<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" id="themeLink" href="/css/assets.css">
    <title>Dashboard - Газстройпром</title>
</head>
<body>
<div class="container">
    @include('inc.aside')
    <main>
        @include('inc.nav')
        <div class="main-container">
            @yield('content')
        </div>
    </main>
</div>
<!-- JQuery -->
<script src="/js/jquery-3.6.0.js"></script>

<!-- Table Search / Sort / Pagination -->

<script src="/js/table-search-sort.js"></script>
<script src="/js/pagination.js"></script>

<!-- Aside JS -->

<script src="/js/aside.js"></script>

</body>
</html>

