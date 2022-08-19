<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{route('admin.index')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <div class="sb-sidenav-menu-heading">Interface</div>

            {{--  <!--User-->  --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                User
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseUsers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('user.create')}}">Add User</a>
                    <a class="nav-link" href="{{route('users.index')}}">Manage Users</a>
                </nav>
            </div>

            {{--  <!--Group-->  --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Other pages
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('position.create')}}">Position</a>

                </nav>
            </div>

            {{--  <!--Store-->  --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseStores" aria-expanded="false" aria-controls="collapseStores">
                <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                Store
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseStores" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('store.create')}}">Add Store</a>
                    <a class="nav-link" href="{{route('stores.index')}}">Manage Stores</a>
                </nav>
            </div>

            {{--  <!--category-->  --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsCategory" aria-expanded="false" aria-controls="collapsCategory">
                <div class="sb-nav-link-icon"><i class="fas fa-th"></i></div>
                Category
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsCategory" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('category.create')}}">Add Category</a>
                    <a class="nav-link" href="{{route('categories.index')}}">Manage Categories</a>
                </nav>
            </div>

            {{--  <!--Product-->  --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsProducts" aria-expanded="false" aria-controls="collapsProducts">
                <div class="sb-nav-link-icon"><i class="fas fa-cutlery"></i></div>
                Product
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsProducts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('product.create')}}">Add Product</a>
                    <a class="nav-link" href="{{route('products.index')}}">Manage Products</a>
                </nav>
            </div>

            {{--  <!--Table-->  --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTables" aria-expanded="false" aria-controls="collapseTables">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Table
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseTables" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('table.create')}}">Add Table</a>
                    <a class="nav-link" href="{{route('tables.index')}}">Manage Tables</a>
                </nav>
            </div>

            {{--  <!--Employee-->  --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEmployees" aria-expanded="false" aria-controls="collapseEmployees">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                Employee
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseEmployees" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('employee.create')}}">Add employee</a>
                    <a class="nav-link" href="{{route('employees.index')}}">Manage employees</a>
                </nav>
            </div>

            {{--  <!--Products-->  --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Layouts
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                </nav>
            </div>

            {{--  <!--Orders-->  --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Layouts
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                </nav>
            </div>

            {{--  <!--Reports-->  --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Layouts
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                </nav>
            </div>

            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="charts.html">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Charts
            </a>
            <a class="nav-link" href="tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Tables
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Admin
    </div>
</nav>
