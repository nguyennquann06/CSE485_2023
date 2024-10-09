{{-- @extends('layouts.home')
 --}}

<div class="d-flex flex-column pe-3 ps-4 me-5 bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 text-white text-decoration-none">
        <i class="fa fa-home me-1" width="16" height="16"></i>
        <span class="fs-4">Sidebar</span>
    </a>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-3 active">
            <a href="#" class="nav-link active" aria-current="page">
                <i class="fa fa-home me-1" width="16" height="16"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item mb-3">
            <a href="#" class="nav-link bg-secondary text-white" aria-current="page">
                <i class="fa fa-home me-1" width="16" height="16"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item mb-3">
            <a href="#" class="nav-link bg-secondary text-white" aria-current="page">
                <i class="fa fa-home me-1" width="16" height="16"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item mb-3">
            <a href="#" class="nav-link bg-secondary text-white" aria-current="page">
                <i class="fa fa-home me-1" width="16" height="16"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item mb-3">
            <a href="#" class="nav-link bg-secondary text-white" aria-current="page">
                <i class="fa fa-home me-1" width="16" height="16"></i>
                <span>Home</span>
            </a>
        </li>
    </ul>
    <hr class="bg-white">
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
