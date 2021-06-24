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

				<li class="nav-item @if (request()->is('admin/users') || request()->is('admin/users/*')) {{ 'menu-open' }} @endif">
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

				<li class="nav-item">
					<a href="{{ route('admin.services.index') }}" class="nav-link @if (request()->is('admin/services')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-cogs"></i>
						<p>
							Services
						</p>
					</a>
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

				<li class="nav-item @if (request()->is('admin/seller-categories') || request()->is('admin/seller-categories/*')) {{ 'menu-open' }} @endif">
					<a href="#" class="nav-link @if (request()->is('admin/seller-categories') ||
						request()->is('admin/seller-categories/create') || request()->is('admin/seller-categories/*')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-user-secret"></i>
						<p>
							Seller Categories
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.seller-categories.create') }}" class="nav-link @if (request()->is('admin/seller-categories/create')) {{ 'active' }} @endif">
								<i class="fas fa-plus-square nav-icon"></i>
								<p>New Seller Category</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.seller-categories.index') }}" class="nav-link @if (request()->is('admin/seller-categories')) {{ 'active' }} @endif">
								<i class="fas fa-list-alt nav-icon"></i>
								<p>Seller Categories</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item @if (request()->is('admin/merchant-categories') || request()->is('admin/merchant-categories/*')) {{ 'menu-open' }} @endif">
					<a href="#" class="nav-link @if (request()->is('admin/merchant-categories') ||
						request()->is('admin/merchant-categories/create') || request()->is('admin/merchant-categories/*')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-user"></i>
						<p>
							Merchant Categories
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.merchant-categories.create') }}" class="nav-link @if (request()->is('admin/merchant-categories/create')) {{ 'active' }} @endif">
								<i class="fas fa-plus-square nav-icon"></i>
								<p>New Merchant Category</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.merchant-categories.index') }}" class="nav-link @if (request()->is('admin/merchant-categories')) {{ 'active' }} @endif">
								<i class="fas fa-list-alt nav-icon"></i>
								<p>Merchant Categories</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item @if (request()->is('admin/estore-categories') || request()->is('admin/estore-categories/*')) {{ 'menu-open' }} @endif">
					<a href="#" class="nav-link @if (request()->is('admin/estore-categories') ||
						request()->is('admin/estore-categories/create') || request()->is('admin/estore-categories/*')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-male"></i>
						<p>
							E-store Categories
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.estore-categories.create') }}" class="nav-link @if (request()->is('admin/estore-categories/create')) {{ 'active' }} @endif">
								<i class="fas fa-plus-square nav-icon"></i>
								<p>New E-store Category</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.estore-categories.index') }}" class="nav-link @if (request()->is('admin/estore-categories')) {{ 'active' }} @endif">
								<i class="fas fa-list-alt nav-icon"></i>
								<p>E-store Categories</p>
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
				<li class="nav-item @if (request()->is('admin/pages') || request()->is('admin/pages/*')) {{ 'menu-open' }} @endif">
					<a href="#" class="nav-link @if (request()->is('admin/pages') ||
						request()->is('admin/pages/create') || request()->is('admin/pages/*')) {{ 'active' }} @endif">
						<i class="nav-icon fas fa-file"></i>
						<p>
							Pages
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.pages.create') }}" class="nav-link @if (request()->is('admin/pages/create')) {{ 'active' }} @endif">
								<i class="fas fa-plus-square nav-icon"></i>
								<p>New Pages</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.pages.index') }}" class="nav-link @if (request()->is('admin/pages')) {{ 'active' }} @endif">
								<i class="fas fa-list-alt nav-icon"></i>
								<p>Pages</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.contacts') }}" class="nav-link @if (request()->is('admin/contacts')) {{ 'active' }} @endif">
						<i class="nav-icon far fa-address-card"></i>
						<p>
							Contact
						</p>
					</a>
				</li>
			@endhasrole

			@hasrole('Seller')
				<li class="nav-item @if (request()->is('seller/products') || request()->is('seller/products/*')) {{ 'menu-open' }} @endif">
					<a href="#" class="nav-link @if (request()->is('seller/products') || request()->is('seller/products/*')) {{ 'active' }} @endif">
						<i class="nav-icon fab fa-product-hunt"></i>
						<p>
							Products
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('seller.products.create') }}" class="nav-link @if (request()->is('seller/products/create')) {{ 'active' }} @endif">
								<i class="fas fa-plus-square nav-icon"></i>
								<p>New Products</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('seller.products.index') }}" class="nav-link @if (request()->is('seller/products')) {{ 'active' }} @endif">
								<i class="fas fa-list-alt nav-icon"></i>
								<p>Products</p>
							</a>
						</li>
					</ul>
				</li>
            @endhasrole

			@hasrole('Merchant')
				<li class="nav-item @if (request()->is('merchant/products') || request()->is('merchant/products/*')) {{ 'menu-open' }} @endif">
					<a href="#" class="nav-link @if (request()->is('merchant/products') || request()->is('merchant/products/*')) {{ 'active' }} @endif">
						<i class="nav-icon fab fa-product-hunt"></i>
						<p>
							Products
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('merchant.products.create') }}" class="nav-link @if (request()->is('merchant/products/create')) {{ 'active' }} @endif">
								<i class="fas fa-plus-square nav-icon"></i>
								<p>New Products</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('merchant.products.index') }}" class="nav-link @if (request()->is('merchant/products')) {{ 'active' }} @endif">
								<i class="fas fa-list-alt nav-icon"></i>
								<p>Products</p>
							</a>
						</li>
					</ul>
				</li>
            @endhasrole

			@hasrole('Estore')
				<li class="nav-item @if (request()->is('estore/products') || request()->is('estore/products/*')) {{ 'menu-open' }} @endif">
					<a href="#" class="nav-link @if (request()->is('estore/products') || request()->is('estore/products/*')) {{ 'active' }} @endif">
						<i class="nav-icon fab fa-product-hunt"></i>
						<p>
							Products
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('estore.products.create') }}" class="nav-link @if (request()->is('estore/products/create')) {{ 'active' }} @endif">
								<i class="fas fa-plus-square nav-icon"></i>
								<p>New Products</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('estore.products.index') }}" class="nav-link @if (request()->is('estore/products')) {{ 'active' }} @endif">
								<i class="fas fa-list-alt nav-icon"></i>
								<p>Products</p>
							</a>
						</li>
					</ul>
				</li>
            @endhasrole
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
