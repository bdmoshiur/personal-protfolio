
@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


        <li class="nav-item has-treeview {{ ($prefix =='/abouts')?'menu-open':''}}">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
                About
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('abouts.view') }}" class="nav-link {{ ($route =='abouts.view')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View About</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview {{ ($prefix =='/skills')?'menu-open':''}}">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
                Skill
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('skills.view') }}" class="nav-link {{ ($route =='skills.view')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Skill</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview {{ ($prefix =='/frontends')?'menu-open':''}}">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
                Frontend
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('frontends.view') }}" class="nav-link {{ ($route =='frontends.view')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Frontend Skill</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview {{ ($prefix =='/backends')?'menu-open':''}}">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
                Backend
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('backends.view') }}" class="nav-link {{ ($route =='backends.view')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Backend Skill</p>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-item has-treeview {{ ($prefix =='/others')?'menu-open':''}}">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
                Others
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('others.view') }}" class="nav-link {{ ($route =='others.view')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Other Skill</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview {{ ($prefix =='/services')?'menu-open':''}}">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
                Service
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('services.view') }}" class="nav-link {{ ($route =='services.view')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Service</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview {{ ($prefix =='/servicesElements')?'menu-open':''}}">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
                Services Element
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('servicesElements.view') }}" class="nav-link {{ ($route =='servicesElements.view')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Services Element</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview {{ ($prefix =='/educations')?'menu-open':''}}">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
                Education
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('educations.view') }}" class="nav-link {{ ($route =='educations.view')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Education</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview {{ ($prefix =='/experiences')?'menu-open':''}}">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
                Experience
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('experiences.view') }}" class="nav-link {{ ($route =='experiences.view')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Experience</p>
                    </a>
                </li>
            </ul>
        </li>






    </ul>
 </nav>


