<div class="user-sidebar">

    <div class="sidebar-inner">
        <ul class="navigation">
            <li class="{{ Request::is('dashboard') ? 'active' : false }}"><a href="/dashboard">
                    <i class="la la-home"></i> Dashboard</a>
            </li>
            <li class=" {{ Request::is('dashboard/job*') ? 'active' : false }}"><a href="{{ route('job.index') }}">
                    <i class="la la-briefcase"></i> Manage Loker </a></li>
            <li class="{{ Request::is('dashboard/category*') ? 'active' : false }}"><a
                    href="{{ route('category.index') }}"><i class="la la-file-invoice"></i> Kategori Pekerjaan </a></li>
            <li
                class="{{ Request::is('dashboard/company/*') ? 'active' : false }} {{ Request::is('dashboard/company') ? 'active' : false }} ">
                <a href="{{ route('company.index') }}"> <i class="la la-building"></i> Manage Perusahaan </a>
            </li>
            <li class=" {{ Request::is('dashboard/companycategory*') ? 'active' : false }} "><a
                    href="{{ route('companycategory.index') }}"><i class="la la-list-alt"></i> Kategori Perusahaan</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="la la-sign-out"></i>Logout</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>

        </ul>
    </div>
</div>