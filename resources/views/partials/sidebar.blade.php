<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <p></p>
                    <a href="/">
                        <span style="color: #25396f">SidutaTaniku</span>
                    </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ $active === 'dashboard' ? 'active' : '' }}">
                    <a href="/" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub {{ $active === 'data' ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Data</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="#">Data Tanam</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Data Panen</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Data Produksi</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="/komoditas">Komoditas</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="/kecamatan">Kecamatan</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub {{ $active === 'input' ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Input</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="#">Input Data Tanam</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Input Data Panen</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Input Data Produksi</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">Forms &amp; Tables</li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Form Elements</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="#">Input</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Input Group</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Select</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Radio</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Checkbox</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Textarea</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
