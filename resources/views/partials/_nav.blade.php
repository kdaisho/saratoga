<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="/{{ __('messages.lang') }}">Saratoga</a>
			</div>

			<div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li {{{ (Request::is('/en') ? 'class=active' : '') }}}>
						<a href="/{{ __('messages.lang') }}">{{ __('messages.home') }}</a>
					</li>
					<li class="active">
						<a href="/{{ __('messages.lang') }}/about">{{ __('messages.about') }}</a>
					</li>
					<li {{ Request::is('/en/contact') ? ' class="active"' : null }}>
						<a href="/{{ __('messages.lang') }}/contact">{{ __('messages.contact') }}</a>
					</li>
					<li>
						@yield('langSwitcher')
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</div><!-- /.container-fluid -->
</nav>