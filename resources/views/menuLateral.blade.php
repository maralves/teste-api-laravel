<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Menu Lateral</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('posts.list') }}" class="nav-link link-dark" aria-current="page">
                Posts
            </a>
        </li>
        <li>
            <a href="{{ route('coments.list') }}" class="nav-link link-dark">
                Comentários
            </a>
        </li>
        <li>
            <a href="{{ route('users.list') }}" class="nav-link link-dark">
                Usuários
            </a>
        </li>
    </ul>
    <hr>
</div>