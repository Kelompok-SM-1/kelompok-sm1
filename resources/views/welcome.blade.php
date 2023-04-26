<!DOCTYPE html>
<html>

<head>
    <title>Wisata Sumenep</title>
    @include('template.head')
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            @include('template.navbar')
            <div class="navbar-default navbar-static-side" role="navigation">
                @include('template.sidebar')
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome To Ourpage</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @include('template.script')

</body>

</html>
