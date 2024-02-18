<!doctype html>
<html class="no-js" lang="zxx">
@include('includes.head')
 
    <body>
    <div class="container-xxl bg-white p-0">

        @include('includes.header')
    
        @include('includes.spinner')
	
@yield('content')
		
		@include('includes.footer')
		@include('includes.footerJs')

		
    </body>
</html>