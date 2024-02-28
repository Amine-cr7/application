<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="/" class="navbar-brand">Agence</a>
    <ul class="navbar-nav">
        @if (!empty($bienLink) or !empty($optionLink))
        <li class="nav-item"><a href="/admin" class="nav-link">{{ $bienLink }}</a></li>
        <li class="nav-item"><a href="/option" class="nav-link">{{ $optionLink }}</a></li>
        @else
        <li class="nav-item"><a href="/user/search" class="nav-link">{{ $searchLink }}</a></li>
        @endif
    </ul>
</nav>