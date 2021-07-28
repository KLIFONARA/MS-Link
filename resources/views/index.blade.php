<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="@klifonara | Link Shortener">
  <meta name="keywords" content="klifonara, link, shortener, photography, club">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>KLIFONARA - Link</title>

  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">

  <style>
    .raleway {
      font-family: 'Raleway', sans-serif;
    }
  </style>

</head>

<body class="bg-black bg-opacity-90">
  <div class="flex flex-col items-center py-12">
    <img class="w-32 h-32 mb-5" src="{{ url('/img/klifonara-logo.png') }}" alt="">
    @foreach ($links as $link)
    <a target="_" class="w-4/5 sm:w-3/4" href="{{ env('APP_URL') . $link->link->slug }}">
      <div
        class="flex w-full justify-center items-center bg-white border-2 border-white text-black hover:bg-black hover:text-white rounded-md px-2 py-3 mb-4 cursor-pointer transition-all">
        <p class="raleway text-center">{{ $link->link->name }}</p>
      </div>
    </a>
    @endforeach
  </div>
</body>

</html>