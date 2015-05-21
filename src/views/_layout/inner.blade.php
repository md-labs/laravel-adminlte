@extends('adminlte::_layout.base')

@section('content')
	<div class="wrapper">
        <header class="main-header">
            <a class="navbar-brand logo" href="{{ Admin::instance()->router->routeHome() }}">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">{{ trans('adminlte::lang.title-short') }}</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">{{ trans('adminlte::lang.title') }}</span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                @include('adminlte::_partials.user')
            </nav>
        </header>
        @include('adminlte::_partials.aside')
        <div class="content-wrapper">
			@yield('innerContent')
		</div>
	</div>
@stop