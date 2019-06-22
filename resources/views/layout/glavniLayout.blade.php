<!DOCTYPE html>
<html lang="en">
<head>
@include('components.head')
</head>
<body>
@include('components.nav')
<div id="colorlib-page">
@include('components.header')
<section class="ftco-fixed clearfix">
@include('components.left')
@yield('sadrzaj')
</section>
@include('components.loader')
</div>
@include('components.footerScript')
</body>
</html>