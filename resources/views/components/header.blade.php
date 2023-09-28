<header class="fixed flex top-0">
    <a href="{{ route('javascript') }}" class="px-2 @if(request()->routeIs('javascript')) underline @endif">JavaScript</a>
    <a href="{{ route('jquery') }}" class="px-2 @if(request()->routeIs('jquery')) underline @endif">jQuery</a>
</header>
