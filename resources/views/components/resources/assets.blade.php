
@if ($type == 'style' || $type == 'css')
    <link rel="stylesheet" href="{{ $path }}">
@elseif ($type == 'script' || $type == 'js')
    <script src="{{ $path }}"></script>
@endif