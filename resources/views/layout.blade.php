<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dev Tech</title>
    @include('partials.css')
</head>

<body class="index-page">
    @include('partials.navbar')
    <main class="main">
        @include('components.hero')
        @include('components.about')
        @include('components.features')
        @include('components.team')
        @include('components.team2')
        @include('components.contact')
    </main>
    @include('partials.footer')
    @include('partials.js')
</body>

</html>
