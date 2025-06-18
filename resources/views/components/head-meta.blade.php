<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Documenttttt</title>
<!-- @vite('resources/css/app.css') -->

@env('local')
    @vite('resources/css/app.css')
@else
    <link rel="stylesheet" href="{{ asset('build/assets/app-CWVmMBLi.css') }}">
@endenv