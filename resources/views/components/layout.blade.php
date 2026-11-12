@props(['title' => config('app.name')])
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<x-header />
  <main class="mx-auto max-w-5xl p-4">
    {{ $slot }}
  </main>
</body>
</html>