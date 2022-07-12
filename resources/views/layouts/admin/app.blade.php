<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dashboard Rentalinalat.id">
    <meta name="author" content="ASIIFDEV">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/favicon.png') }}">
    <title>RENTALINALAT.ID Dashboard</title>
    <!-- Custom CSS -->
    
    <link href="{{ asset('admin/css/lib/amchart/export.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
</head>

<body class="header-fix fix-sidebar">
    
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        @include('layouts.admin.header')

        @include('layouts.admin.sidebar')
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            @include('layouts.admin.breadcrumbs')
            <!-- Container fluid  -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 CoinDash All Right Reserved.</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{asset('admin/js/lib/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin/js/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{asset('admin/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('admin/js/jquery.slimscroll.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{asset('admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>

    <script src="{{asset('admin/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
    <!-- sparkline init-->
    <script src="{{asset('admin/js/lib/sparklinechart/sparkline.init.js') }}"></script>
	
	    <!-- Amchart -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="{{asset('admin/js/lib/chart-amchart/serial.js') }}"></script>
    <script src="{{asset('admin/js/lib/chart-amchart/export.min.js') }}"></script>
    <script src="{{asset('admin/js/lib/chart-amchart/light.js') }}"></script>
    <script src="{{asset('admin/js/lib/chart-amchart/ammap.js') }}"></script>
    <script src="{{asset('admin/js/lib/chart-amchart/worldLow.js') }}"></script>
    <script src="{{asset('admin/js/lib/chart-amchart/pie.js') }}"></script>
    <script src="{{asset('admin/js/lib/chart-amchart/amstock.js') }}"></script>
    <script src="{{asset('admin/js/lib/chart-amchart/amchart-init.js') }}"></script>


    <script src="{{asset('admin/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{asset('admin/js/lib/weather/weather-init.js') }}"></script>
    <script src="{{asset('admin/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{asset('admin/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <script src="{{asset('admin/js/scripts.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin/js/custom.min.js') }}"></script>

    {{-- Data Tabel --}}
    
    <script src="{{ asset('admin/js/lib/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/datatables-init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () { 
            $('#categoryy').on('change',function(e){
            console.log(e);
            var cat_id = e.target.value;
            console.log(cat_id);
            //ajax
            $.get('/ajax-subcat?cat_id='+ cat_id,function(data){
                //success data
               console.log(data);
                var subcat =  $('#subcategoryy').empty();
                $.each(data,function(create,subcatObj){
                    var option = $('<option/>', {id:create, value:subcatObj});
                    subcat.append('<option value ="'+subcatObj+'">'+subcatObj+'</option>');
                });
            });
        });
    });
    </script>

    @include('admin.category.modal')
    @include('admin.category.modalsubcategory')
    @include('admin.product.modal')
</body>

</html>