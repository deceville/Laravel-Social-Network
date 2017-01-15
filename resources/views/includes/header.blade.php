<header>
	<div class="container">
		<ul id="gn-menu" class="gn-menu-main">
			<li class="gn-trigger">
				<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
				<nav class="gn-menu-wrapper">
					<div class="gn-scroller">
						<ul class="gn-menu">
							<li class="gn-search-item">
								<input placeholder="Search" type="search" class="gn-search">
								<a class="gn-icon gn-icon-search"><span>Search</span></a>
							</li>
						  	@if(\Request::is('dashboard', 'account')) 
						  	<li><a class="gn-icon gn-icon-cog" href="{{ route('account') }}">Account</a></li>
						  	@endif
							<li><a href="#about" class="gn-icon gn-icon-help">About</a></li>
						  	@if(\Request::is('dashboard', 'account')) 
						  	<li><a class="gn-icon gn-icon-download" href="{{ route('logout') }}">Log out</a></li>
						  	@endif
						</ul>
					</div><!-- /gn-scroller -->
				</nav>
			</li>
			@if(\Request::is('dashboard', 'account'))
			<li><a href="{{ route('dashboard') }}">LOL MANIA</a></li>
			@else
			<li><a href="#">LOL MANIA</a></li>
			@endif
			<li class="hidden-xs"></li>
		</ul>
	</div>
</header>