<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('public/web-assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public/web-assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('public/web-assets')}}/css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{url('public/web-assets')}}/css/style.css">

    <title>Web Pelayanan Surat Desa Nusa Poring<</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    <x-layout-front.header />
    <x-utils.notif />
    {{$slot}}

    <x-layout-front.footer />

    <script src="{{url('public/web-assets')}}/js/jquery.min.js"></script>
    <script src="{{url('public/web-assets')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('public/web-assets')}}/js/owl.carousel.min.js"></script>
    <script src="{{url('public/web-assets')}}/js/app.js"></script>
</body>

</html>