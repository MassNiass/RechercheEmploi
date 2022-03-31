<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="template/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="template/css/swiper.css" rel="stylesheet">
	<link href="template/css/styles.css" rel="stylesheet">

	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
    <title>{{isset($title) ? $title : "Laravel"}}</title>
</head>
<body>
    @yield("menu")

    @yield("content")

    @include("footer")

<!-- Back To Top Button -->
<button onclick="topFunction()" id="myBtn">
    <img src="template/images/up-arrow.png" alt="alternative">
</button>
<!-- end of back to top button -->

<!-- Scripts -->
<script src="template/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
<script src="template/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
<script src="template/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
<script src="template/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>
