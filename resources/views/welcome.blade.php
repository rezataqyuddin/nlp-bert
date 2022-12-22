<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include("templates.head")

<body class="antialiased">
    @include("ml.hero")
    @include("ml.intro")
    @include("ml.survey")
</body>

</html>