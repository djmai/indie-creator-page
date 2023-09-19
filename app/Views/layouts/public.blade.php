<!DOCTYPE html>
<html lang="{{ $currentLanguage ?? 'en' }}">

<head>

    @include('layouts.partials.public.head')

    @isset($trakingID)
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $trakingID }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', '{{ $trakingID }}');
        </script>
    @endisset

    <script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js"
        data-id="ManuelGil" data-description="Support me on Buy me a coffee!" data-message="Support me" data-color="#FF813F"
        data-position="Right" data-x_margin="18" data-y_margin="18" is:inline></script>

</head>


<body class="body-font font-noto-sans antialiased w-full dark:text-white dark:bg-zinc-900 scroll-smooth">
    <div class="container mx-auto max-w-screen-xl">
        @section('content')
        @show
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.css"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.js" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            cookieconsent.initialise({
                palette: {
                    popup: {
                        background: '#c0c0c0',
                    },
                    button: {
                        background: '#fff',
                        text: '#c0c0c0',
                    },
                },
                position: 'bottom',
                content: {
                    href: '/cookies-policy',
                },
            });
        });
    </script>

</body>

</html>
