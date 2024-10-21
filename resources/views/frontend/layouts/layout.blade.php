<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Meta Tags -->
    <meta charset="utf-8">
    <meta name="author" content="Your Company Name">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- SEO Meta Tags -->
    <meta name="keywords"
        content="Website Development, Web Design, Custom Web Development, Responsive Websites, E-commerce Solutions, SEO, Digital Marketing, Web Development Company">
    <meta name="description"
        content="We are a leading website development company offering custom web development, responsive design, e-commerce solutions, and SEO services to help businesses grow online.">

    <!-- Open Graph Meta Tags (for social media sharing) -->
    <meta property="og:title" content="Professional Website Development Services | Your Company Name">
    <meta property="og:description"
        content="Get top-notch website development, web design, and digital marketing services from our expert team. Boost your online presence with a custom-built website tailored to your business.">
    <meta property="og:image" content="{{ asset('img/og-image.png') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Professional Website Development Services | Your Company Name">
    <meta name="twitter:description"
        content="We offer website development, e-commerce, and SEO services to help your business thrive online. Get a custom solution built for your needs.">
    <meta name="twitter:image" content="{{ asset('img/twitter-card-image.png') }}">
    <meta name="twitter:site" content="@YourTwitterHandle">

    <!-- Title -->
    <title>Professional Website Development Services | Your Company Name</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/logos/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/logos/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/logos/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/logos/apple-touch-icon-114x114.png') }}">

    <!-- Schema.org for SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Your Company Name",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('img/logos/logo.png') }}",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+1-800-555-5555",
        "contactType": "Customer Service"
      },
      "sameAs": [
        "https://www.facebook.com/yourcompany",
        "https://www.twitter.com/yourcompany",
        "https://www.linkedin.com/company/yourcompany"
      ]
    }
    </script>

    <!-- Additional Schema for Web Development Services -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Your Company Name - Website Development Services",
      "url": "{{ url('/') }}",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "{{ url('/search?query={search_term_string}') }}",
        "query-input": "required name=search_term_string"
      },
      "about": {
        "@type": "Service",
        "serviceType": "Website Development, Web Design, SEO, E-commerce Solutions"
      }
    }
    </script>

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">

    <!-- Custom Styles CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>


<body>

    @include('frontend.components.loader')

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        @include('frontend.layouts.header')

        @yield('content')

        @include('frontend.layouts.footer')
    </div>

    <!-- SCROLL TO TOP
    ================================================== -->
    <a href="#" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>

    <!-- bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- jquery -->
    <script src="{{ asset('js/core.min.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- form plugins js -->
    <script src="{{ asset('quform/js/plugins.js') }}"></script>

    <!-- form scripts js -->
    <script src="{{ asset('quform/js/scripts.js') }}"></script>

    <!-- all js include end -->

</body>

</html>
