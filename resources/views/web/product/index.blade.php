@extends('layouts.web.app')
@section('content')
    <script>
        function row() {
            $('#row').css('display', '');
            $('#grid').css('display', 'none');
            $('#btn-row').removeClass('btn-outline-danger').addClass('btn-danger active');
            $('#btn-grid').removeClass('btn-danger active').addClass('btn-outline-danger');
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                    $("#row #data").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            $(".filters :checkbox").click(function() {
                var centang = $(".filters :checkbox").is(':checked');
                if(centang == true){
                    var value = $(this).val().toLowerCase();
                    $("#row #data").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                    console.log(value);
                }
                else{
                    $("#row #data").css('display', '');
                }
            });
        }

        function grid() {
            $('#grid').css('display', '');
            $('#row').css('display', 'none');
            $('#btn-grid').removeClass('btn-outline-danger').addClass('btn-danger active');
            $('#btn-row').removeClass('btn-danger active').addClass('btn-outline-danger');
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                    $("#grid #data").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            $(".filters :checkbox").click(function() {
                var centang = $(".filters :checkbox").is(':checked');
                if(centang == true){
                    var value = $(this).val().toLowerCase();
                    $("#grid #data").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                    console.log(value);
                }
                else{
                    $("#grid #data").css('display', '');
                }
            });
        }
    </script>
    <script>
        $(document).ready(function() {
           grid();
           var dateToday = new Date();
            // var fordate = $(".forDate").datepicker();
            // console.log(fordate);
            filterTanggal();
            $(".forDate,.toDate").change(function() {
                    bacaTanggal();
                });
                hapus();
            });
    </script>
    <script>
        function bacaTanggal() {
            var fordate = $(".forDate").val();
            var todate = $(".toDate").val();
            var harga = $("#harga").text().replace(/[A-Za-z$-/]/g, "");
            var productId = $('#id_produk').val();
            console.log(todate);
            days = (Date.parse(todate) - Date.parse(fordate)) / (1000 * 60 * 60 * 24);
            // Create our number formatter.
            var formatter = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
            });
            total = days * harga;
            // console.log(total);
            // console.log('Dari Tanggal: ' + fordate + ' Sampai Tanggal: ' + todate);
            if(Date.parse(todate) < Date.parse(fordate)){
                $("#status").text('Input Tanggal tidak sesuai!');
                $("#total").val('Rp. 0');
                $("#jumlah_hari").val(' Input Salah!').attr('style', 'color:red;font-weight:bold');
                $('#submitcart').prop('disabled', true);
            }
            else if(Date.parse(todate) === Date.parse(fordate)){
                $("#status").text('Minimal Order 1 Hari!');
                $("#total").val('Rp. 0');
                $("#jumlah_hari").val(' Input Salah!').attr('style', 'color:red;font-weight:bold');
                $('#submitcart').prop('disabled', true);
            }
            else{
                $.ajax({
                    type:'GET',
                    url:'/ajax/filterdate?start_date=' + fordate + '&end_date=' + todate + '&product_id=' + productId,
                    data:'_token = <?php echo csrf_token() ?>',
                    success:function(data) {
                        $("#status").text(data);
                        console.log($("#status").text());
                        if ($("#status").text() === 'Tidak Tersedia'){
                            $("#total").val('Rp. 0');
                            $('#submitcart').prop('disabled', true);
                        }
                    }
                });
                $("#total").val(formatter.format(total));
                $("#jumlah_hari").val(' ' + (Date.parse(todate) - Date.parse(fordate)) / (1000 * 60 * 60 * 24) + ' Hari').attr('style', 'color:red;font-weight:bold');
                $('#submitcart').prop('disabled', false);
            }
        }

        function hapus() {
            $(".forDate").click(function() {
                $(".forDate").val("");
                $(".toDate").val("");
                filterTanggal();
            });
        }

        function filterTanggal() {
            $(function() {
                $(".forDate").each(function() {
                    $(this).datepicker({
                        locale: "id",
                        dateFormat: "DD, dd MM yy",
                        duration: "fast",
                        regional: "id",
                        minDate: dateToday,
                        showAnim: "show",
                        showStatus: true,
                        onSelect: function() {
                            $(this).each(function(){
                                getdate();
                            })
                        }
                    });
                })
            });
        }
        function getdate() {
            var dateObject = $(this).datepicker('getDate');
                            // console.log(dateObject);
            $(function() {
                $(".toDate").each(function() {
                    $(this).datepicker({
                        dateFormat: "DD, dd MM yy",
                        duration: "fast",
                        minDate: dateObject,
                        showStatus: true,
                        showAnim: "slide",
                    });
                });
            });
        }
    </script>


    <style>
        .btn-nav-accordion[aria-expanded="true"] .fa-chevron-down {
            transform: rotate(180deg);
        }

        .btn-nav-accordion[aria-expanded="true"] .title {
            color: #CC1522;
            font-weight: 800;
        }

        .kategori[aria-expanded="true"] .fa-chevron-right {
            transform: rotate(-90deg);
        }

        .kategori[aria-expanded="true"] .title {
            color: #CC1522;
            font-weight: 800;
        }

        .card-header {
            padding: 0.5rem 1rem;
            margin-bottom: 0;
            background-color: transparent;
            border: none;
            /* border-bottom: 1px solid #CC1522 !important; */
        }

        .collapse_1 {
            border: 1px solid #CC1522 !important;
        }

        .tanggal {
            /* border: 1px solid #CC1522 !important; */
            margin-bottom: 20px;
        }

        .card {
            border: none;
        }

        .filter-content {
            margin-top: 0px;
        }
        .label_kategori{
            font-size: 1rem;
            font-weight: 400;
            display: block;
            margin-bottom: 0;
            color: black;
            border: none;
            padding: 0;
            border-radius: 0;
        }
        .form-check-input:checked {
            background-color: #CC1522;
            border-color: #CC1522;
        }
    </style>
    <div class="container-fluid p-lg-5 p-0 mt-5 mt-md-0 mt-lg-0">
        <div class="row p-lg-5 p-4">
            <aside class="col-md-5 col-xxl-3 col-lg-4 mt-lg-5 mt-md-5">
                <div class="card mt-lg-5 mt-md-5">
                    <div class="tanggal d-inline-block">
                        <article class="filter-group">
                            <header class="card-header" id="collapse_tanggal">
                                <div class="input-group rounded">
                                    <span class="input-group-text border-0 mt-2" id="forDate">
                                        <i class="bi bi-calendar-date me-2"></i>
                                    </span>
                                    <input type="search" class="form-control rounded border-0 boxSearch forDate"
                                        placeholder="Dari Tanggal" aria-label="Search" aria-describedby="forDate" name="fromdate"  autocomplete="off" required/>
                                </div>
                            </header>
                        </article> <!-- filter-group  .// -->

                        <article class="filter-group">
                            <header class="card-header">
                                <div class="input-group rounded">
                                    <span class="input-group-text border-0 mt-2" id="toDate">
                                        <i class="bi bi-calendar-date-fill me-2"></i>
                                    </span>
                                    <input type="search" class="form-control rounded border-0 boxSearch toDate"
                                        placeholder="Sampai Tanggal" aria-label="Search" name="todate"
                                        aria-describedby="toDate" autocomplete="off" required/>
                                </div>
                            </header>
                        </article> <!-- filter-group  .// -->
                        <div class="m-auto p-2 text-center">
                            <div class="input-group p-2">
                                <div class="input-group-text" style="background: transparent; border:none;line-height: 0;padding: 0;">
                                    <label for="" class="label_kategori">Jumlah Hari: </label>
                                    <input style="color: black" class="form-input mt-0 me-2" id="jumlah_hari" type="text" value=" 0 Hari" readonly>
                                </div>
                            </div>
                            <button class="btn btn-custom" style="width: 100%;">
                                <span id="status">FILTER</span>
                            </button>
                        </div>
                    </div>
                    <article class="filter-group collapse_1">
                        <header class="card-header text-center m-auto">
                            <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true"
                                class="btn-nav-accordion">
                                <h6 class="title mt-2"><b>Kategori</b></h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_1" style="">
                            <div class="card-body">
                                <ul class="list-menu ms-3">
                                    @foreach ($kategori as $item)
                                        <li>
                                            <article class="filter-group">
                                                <header class="">
                                                    <a href="#" data-toggle="collapse"
                                                        data-target="#{{ Str::slug($item->name) }}" aria-expanded="false"
                                                        class="kategori">
                                                        <i class="icon-control fa fa-chevron-right"></i>
                                                        <h6 class="title">{{ $item->name }}</h6>
                                                    </a>
                                                </header>
                                                <div class="filter-content collapse mt-0 filters" id="{{ Str::slug($item->name) }}"
                                                    style="">
                                                    <div class="card-body">
                                                        <ul class="list-menu">
                                                            @foreach ($item->parent->sortBy('name') as $s)
                                                                <li>
                                                                    <div class="input-group mb-2">
                                                                        <div class="input-group-text" style="background: transparent; border:none;line-height: 0;padding: 0;">
                                                                          <input class="form-check-input mt-0 me-2" id="{{ urlencode($s->name) }}" type="checkbox" value="{{ urlencode($s->name) }}" aria-label="Checkbox for following text input">
                                                                          <label for="{{ urlencode($s->name) }}" class="label_kategori">{{ $s->name }}</label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div> <!-- card-body.// -->
                                                </div>
                                            </article> <!-- filter-group  .// -->
                                        </li>
                                    @endforeach
                                </ul>
                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group  .// -->
                </div> <!-- card.// -->

            </aside>
            <main class="col-md-7 col-lg-8">

                <header class="border-bottom mb-4 pb-3">
                    <div class="form-inline">
                        <div class="row mt-lg-0 mt-3">
                            <div class="col-lg-8 col-md-5 col-sm-3 col-xs-4 mt-md-2 mt-2">
                                <div class="btn-group">
                                    <button class="btn btn-outline-danger" onclick="row();" id="btn-row">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <button href="#" class="btn  btn-danger active" onclick="grid();" id="btn-grid">
                                        <i class="fa fa-th"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-9 col-xs-4">
                                <form class="pb-3">
                                    <div class="input-group rounded">
                                        <span class="input-group-text border-0 mt-2" id="search-addon">
                                            <i style="" class="bi bi-search"></i>
                                        </span>
                                        <input type="search" class="form-control rounded border-0 boxSearch" placeholder="Cari Produk"
                                            aria-label="Search" aria-describedby="search-addon" id="search" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </header><!-- sect-heading -->
                <div class="row text-center" id="grid">
                    @foreach ($produk as $item)
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-4" id="data">
                            <span hidden>{{ strtolower(urlencode($item->category->name)) }}</span>
                            <figure class="card card-product-grid">
                                <div class="img-wrap" style="height: 216px">
                                    <img src="{{ asset('images/produk/' . $item->foto) }}" class="img-fluid img-produk">
                                </div> <!-- img-wrap.// -->
                                <figcaption class="info-wrap">
                                    <div class="fix-height listSearch">
                                        <a href="{{ url('product/' . $item->slug) }}" class="title" id="nama-produk"><b>{{ $item->name }}</b></a>
                                        <div class="price-wrap mt-4">
                                            <span class="textProduct">Harga Sewa</span><br>
                                            <span class="price">{{ moneyFormat($item->dayRate) }}<span
                                                    class="textDay">/Day</span></span>
                                        </div> <!-- price-wrap.// -->
                                    </div>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                    @endforeach
                </div> <!-- row end.// -->
                <div class="row text-center" id="row">
                    @foreach ($produk as $item)
                    <div class="col-lg-12 card card-product-grid m-2" id="data">
                            <span hidden>{{ strtolower(urlencode($item->category->name)) }}</span>
                            <div class="row row_item">
                                <div class="col-sm-4">
                                    <figure>
                                        {{-- <span class="ribbon off">-30%</span> --}}
                                        <a href="{{ url('product/' . $item->slug) }}">
                                            <img class="img-fluid lazy img-produk" src="{{ asset('images/produk/' . $item->foto) }}" data-src="{{ $item->name }}" alt="" style="height: 100%;width: 100%">
                                        </a>
                                        {{-- <div data-countdown="2019/05/15" class="countdown"></div> --}}
                                    </figure>
                                </div>
                                <div class="col-sm-8 text-start m-auto listSearch">
                                    <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                            class="icon-star voted"></i><i class="icon-star voted"></i><i
                                            class="icon-star"></i></div>
                                    <a href="{{ url('product/' . $item->slug) }}" class="title">
                                        <b>{{ $item->name }}</b>
                                    </a>
                                    <p class="textProduct">{{ $item->description }}</p>
                                    <div class="price-wrap mt-4">
                                        <span class="textProduct">Harga Sewa</span><br>
                                        <span class="price">{{ moneyFormat($item->dayRate) }}<span
                                                class="textDay">/Day</span></span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> <!-- row end.// -->
            </main>
        </div>
    </div>
    <section style="height: 130px;"></section>
@endsection
