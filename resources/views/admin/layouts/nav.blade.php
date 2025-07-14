<ul class="nav nav-secondary">
    <li class="nav-item active">
        <a href="#dashboard">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
            {{-- <span class="caret"></span> --}}
        </a>

    </li>

    <li class="nav-item">
        <a href="{{ route('admin.categoria.index') }}">
            <i class="fas fa-th-list"></i>
            <p>Categorias</p>
            {{-- <span class="caret"></span> --}}
        </a>

    </li>
    <li class="nav-item">
        <a href="{{ route('home.pages.diamond.index') }}">
            <i class="fas fa-edit"></i>
            <p>Diamanetes</p>
            {{-- <span class="caret"></span> --}}
        </a>

    </li>
</ul>
