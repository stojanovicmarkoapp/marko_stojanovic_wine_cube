<!doctype html>
<html lang="en">
@include("common.control_panel.head")
<body class="dashboard dashboard_1 z_index_minus_10">
    <div class="full_container">
            @include('common.control_panel.sidebar')
            <div id="content">
                @include('common.control_panel.topbar')
                @yield("vista")
            </div>
    </div>
    @include("common.control_panel.footer")
    @include("common.control_panel.scripts")
</body>
</html>
