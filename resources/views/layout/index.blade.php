<!DOCTYPE html>
<html lang="pt-br">
    @includeIf('layout.head')

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper iframe-mode" data-widget="iframe">
            @includeIf('layout.header')
            @includeIf('layout.sidebar')
            @yield('content')


        </div>
        <!-- ./wrapper -->
        @include('layout.footer')
        @include('layout.script')


    </body>