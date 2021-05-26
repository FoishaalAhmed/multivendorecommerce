<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset(auth()->user()->photo) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="{{ route('profile') }}" class="d-block">{{ auth()->user()->name }}</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ URL::to('/home') }}" class="nav-link @if (request()->is('admin/dashboard') || request()->is('blogger/dashboard')) {{ 'active' }} @endif">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            @hasrole('Admin')
				<li class="nav-item @if (request()->is('admin/users') ||
					request()->is('admin/users/create') || request()->is('admin/users/*')) {{ 'menu-open' }} @endif">
					<a href="#" class="nav-link @if (request()->is('admin/users') ||
						request()->is('admin/users/create') || request()->is('admin/users/*')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-users"></i>
						<p>
							Users
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.users.create') }}" class="nav-link @if (request()->is('admin/users/create')) {{ 'active' }} @endif">
								<i class="fas fa-plus-square nav-icon"></i>
								<p>New Users</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.users.index') }}" class="nav-link @if (request()->is('admin/users')) {{ 'active' }} @endif">
								<i class="fas fa-list-alt nav-icon"></i>
								<p>Users</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item @if (request()->is('admin/categories') ||
					request()->is('admin/sub-categories') || request()->is('admin/child-categories')) {{ 'menu-open' }} @endif">
					<a href="#" class="nav-link @if (request()->is('admin/categories') ||
					request()->is('admin/sub-categories') || request()->is('admin/child-categories')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-list-alt"></i>
						<p>
							Categories
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.categories.index') }}" class="nav-link @if (request()->is('admin/categories')) {{ 'active' }} @endif">
								<i class="fas fa-list-alt nav-icon"></i>
								<p>Main Categories</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.sub-categories.index') }}" class="nav-link @if (request()->is('admin/sub-categories')) {{ 'active' }} @endif">
								<i class="fas fa-list-alt nav-icon"></i>
								<p>Sub Categories</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.child-categories.index') }}" class="nav-link @if (request()->is('admin/child-categories')) {{ 'active' }} @endif">
								<i class="fas fa-list-alt nav-icon"></i>
								<p>Child Categories</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.colors.index') }}" class="nav-link @if (request()->is('admin/colors')) {{ 'active' }} @endif">
						<i class="fas fa-paint-brush nav-icon"></i>
						<p>
							Colors
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.sizes.index') }}" class="nav-link @if (request()->is('admin/sizes')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-asterisk"></i>
						<p>
							Sizes
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.brands.index') }}" class="nav-link @if (request()->is('admin/brands')) {{ 'active' }} @endif">
						<i class="nav-icon far fa-copyright"></i>
						<p>
							Brands
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.faqs.index') }}" class="nav-link @if (request()->is('admin/faqs')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-question-circle"></i>
						<p>
							FAQ
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.contacts') }}" class="nav-link @if (request()->is('admin/contacts')) {{ 'active' }} @endif">
						<i class="nav-icon far fa-address-card"></i>
						<p>
							Contact
						</p>
					</a>
				</li>
			@else
				
            @endhasrole
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
