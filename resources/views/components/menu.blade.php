
<div class="d-flex flex-column flex-shrink-0 p-3 " style=" background-color:#043679;" >
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">

    <div style="text-align: left;" class="pt-5">
     <img src="{{ asset('assets/images/green.png') }}"  class="img-fluid" alt="Logo FSJ18" style="width: 30rem; ">
     </div>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ url('students') }}" class="nav-link {{ request()->is('students*') ? 'active' : '' }}" style="color: white;">
                <i class="fa fa-users"></i> Estudiantes
            </a>
        </li>
        <li>
            <a href="{{ url('teachers') }}" class="nav-link {{ request()->is('teachers*') ? 'active' : '' }}" style="color: white;">
                <i class="fa-solid fa-chalkboard-user"></i> Profesores
            </a>
        </li>
        <li>
            <a href="{{ url('attendances') }}" class="nav-link {{ request()->is('attendances*') ? 'active' : '' }}" style="color: white;">
                <i class="fa-solid fa-clipboard-user"></i> Asistencia
            </a>
        </li>
        <li>
            <a href="{{ url('./qualifications') }}" class="nav-link {{ request()->is('./qualifications*') ? 'active' : '' }}" style="color: white;">
                <i class="fa-solid fa-file-lines"></i> Calificaciones
            </a>
        </li>
        <li>
            <a href="{{ url('shifts') }}" class="nav-link {{ request()->is('shifts*') ? 'active' : '' }}" style="color: white;">
                <i class="fa-solid fa-font-awesome"></i> Turnos
            </a>
        </li>
        <li>
            <a href="{{ url('grades') }}" class="nav-link {{ request()->is('grades*') ? 'active' : '' }}" style="color: white;">
                <i class="fa-solid fa-lines-leaning"></i> Grados
            </a>
        </li>
        <li>
            <a href="{{ url('subject') }}" class="nav-link {{ request()->is('subject*') ? 'active' : '' }}" style="color: white;">
            <i class="fa-solid fa-book"></i></i> Materias
            </a>
        </li>
        <li>
            <a href="{{ url('sections') }}" class="nav-link {{ request()->is('sections*') ? 'active' : '' }}" style="color: white;">
                <i class="fa-solid fa-clone"></i> Secciones
            </a>
        </li>
        <li>
        @if (Auth::check())
                    <form action="{{ route('logout') }}" method="POST" style="float: center">
                        @csrf
                        <button type="submit" class="btn nav-link" style="color: white;"><i class="fa-solid fa-right-from-bracket"></i>Logout</button>
                    </form>
                @endif
        </li>
    </ul>
</div>
