<!DOCTYPE html>
<html>

<head>
    @include("BackEnd.Components.head")

</head>

<body>
    <div id="wrapper">
    @include("BackEnd.Components.sidebar")

    <div id="page-wrapper" class="gray-bg">
    @include("BackEnd.Components.nav")  
    @include($template)
    @include('backend.Components.footer')
    </div>

    <!-- Mainly scripts -->
    @include('backend.Components.script')
</body>
</html>
