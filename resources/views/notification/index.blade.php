<!doctype html>
@section('notifications')

<title>atNEZO | Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="../../public/css/style.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">


<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<body style="font-family: Open Sans, sans-serif">

<div class="container divide-y divide-blue-200">


        @if ($notifications->count())

            `           @foreach($notifications as $notification)

                             <x-notification
                                 :notification="$notification"

                             />

                        @endforeach

                    </div>

            @else
                   <p style="text-align: center">No Post Yet. Please check back latter!</p>
        @endif

</div>


<!-- fixed nav -->
    <x-nav />


    <div style="margin-bottom: 7%"></div>
</body>
</html>
