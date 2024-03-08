<!DOCTYPE HTML>
<html>
@include('layout.head')
<body>
<div class="language-switch">
             <select name="">
             <option value="">English</option>
            <option value="">Hindi</option>
            <option value="">Arabic</option>
            </select>
            </div>
@include('layout.header');
@include('layout.assid')
@yield('main_content')

@include('layout.script')
@include('layout.footer')
</body>
</html>