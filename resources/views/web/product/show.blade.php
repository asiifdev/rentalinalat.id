@extends('layouts.web.app')
@section('content')
    {{-- =========================== Custom CSS and JavaScript ============================== --}}
    <style>
        .img-produk-show {
            max-width: 609px;
            max-height: 499px;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: #F1F1F1;
            border-radius: 30px;
        }

        .title {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            font-size: 36px;
            color: #0D0D0D;
        }

        .description {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            color: #0D0D0D;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#submitcart').prop('disabled', true);
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
                $("#jumlah_hari").val('0');
                $('#submitcart').prop('disabled', true);
            }
            else if(Date.parse(todate) === Date.parse(fordate)){
                $("#status").text('Minimal Order 1 Hari!');
                $("#total").val('Rp. 0');
                $("#jumlah_hari").val('0');
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
                $("#jumlah_hari").val((Date.parse(todate) - Date.parse(fordate)) / (1000 * 60 * 60 * 24));
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


    {{-- ========================== MAIN CONTENT ------------------------------ --}}
    <div class="container-fluid p-5 mt-3">
        <div class="row mb-4 justify-content-center allign-items-center m-auto">
            @foreach ($produk as $item)
                <div class="col-lg-4 text-center">
                    <img src="{{ asset('images/produk/' . $item->foto) }}" alt="{{ $item->name }}"
                        class="img-fluid img-produk-show">
                </div>
                <div class="col-lg-8 text-start m-auto mt-3">
                    <figcaption class="ms-3">
                        <form action="{{ route('ajax.cart') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="fix-height listSearch">
                                <a href="{{ url('product/' . $item->slug) }}">
                                    <span class="title">{{ $item->name }}</span>
                                    @auth
                                        <input type="text" name="user_id" id="user_id" value="{{ auth()->user()->id }}" hidden>
                                    @endauth
                                    <input type="text" name="product_id" id="id_produk" value="{{ $item->id }}" hidden>                                        
                                    <input type="text" name="jumlah_hari" id="jumlah_hari" value="" hidden>
                                </a>
                                <div class="mt-3 p-2">
                                    <span class="description">{{ $item->description }}</span><br><br>
                                    <span class="description">Harga Sewa</span><br>
                                    <span class="price" id="harga">{{ moneyFormat($item->dayRate) }}<span
                                            class="textDay">/Day</span></span>
                                </div> <!-- price-wrap.// -->

                                {{-- ROW TANGGAL --}}
                                <div class="row mt-3 p-2">

                                    <div class="col-lg-6 col-xxl-4 col-xl-6 col-md-6 col-sm-6">
                                        <div class="input-group rounded">
                                            <span class="input-group-text border-0 mt-2" id="forDate">
                                                <i class="bi bi-calendar-date me-2"></i>
                                            </span>
                                            <input type="search" class="form-control rounded border-0 boxSearch forDate"
                                                placeholder="Dari Tanggal" aria-label="Search" aria-describedby="forDate" name="fromdate"  autocomplete="off" required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xxl-4 col-xl-6 col-md-6 col-sm-6">
                                        <div class="input-group rounded">
                                            <span class="input-group-text border-0 mt-2" id="toDate">
                                                <i class="bi bi-calendar-date-fill me-2"></i>
                                            </span>
                                            <input type="search" class="form-control rounded border-0 boxSearch toDate"
                                                placeholder="Sampai Tanggal" aria-label="Search" name="todate"
                                                aria-describedby="toDate" autocomplete="off" required/>
                                        </div>
                                    </div>
                                </div>
                                {{-- END ROW TANGGAL --}}

                                <div class="ms-2">
                                    <span style="font-weight: 400;font-size: 16px;line-height: 24px;color: #000000;">
                                        Status :
                                        <span class="text-danger" id="status" style="font-weight: bold">
                                            -
                                        </span>
                                    </span><br><br>
                                    <span class="mt-2">Total</span><br>
                                    <input class="price" id="total" name="total" value="{{ moneyFormat(0) }}" autocomplete="off" readonly="readonly" required/>
                                </div>
                                <div class="p-5 pt-2 ps-2">
                                    <button id="submitcart" class="btn btn-lg-lg btn-custom addToCart" type="submit" style="width: 50%" href="">Masukkan Ke
                                        Keranjang</button>
                                </div>
                            </div>
                        </form>
                    </figcaption>
                </div>
            @endforeach
        </div>
        <span class="ms-3" style="font-weight: 500;font-size: 20px;color: #0D0D0D;">Produk Lainnya</span>
        <div class="row p-4 mt-2 text-center allign-items-center justify-content-center">
            @foreach ($related as $item)
                @if (isset($item))
                    <div class="col-md-6 col-sm-12 col-lg-4 col-xl-3 col-xxl-3 col-xs-6">
                        <figure class="card card-product-grid">
                            <div class="img-wrap" style="height: 216px">
                                <img src="{{ asset('images/produk/' . $item->foto) }}" class="img-fluid img-produk">
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <div class="fix-height listSearch">
                                    <a href="{{ url('product/' . $item->slug) }}"
                                        class="title"><b>{{ $item->name }}</b></a>
                                    <div class="price-wrap mt-4">
                                        <span class="textProduct">Harga Sewa</span><br>
                                        <span class="price">{{ moneyFormat($item->dayRate) }}<span
                                                class="textDay">/Day</span></span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->
                @else
                    <div class="col-12">
                        <span>Related Produck is Empty</span>
                        {!! 'Produk Kosong' !!}
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
