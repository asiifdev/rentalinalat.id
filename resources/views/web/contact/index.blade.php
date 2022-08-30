@extends('layouts.web.app')
@section('content')
<style>
    ::placeholder {
        color: #888888;
        opacity: 1; /* Firefox */
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: #888888;
    }

    ::-ms-input-placeholder { /* Microsoft Edge */
        color: #888888;
    }
    .form-contact{
        width: 100%;
        padding: 10px 12px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid #DDDDDD;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        outline: none;
        color: #0D0D0D;
        font-family: 'Poppins';
        margin: 0;
        border-radius: 10px;
    }
    .form-contact:focus{
        border: 2px solid #CC1522 !important;
        border-radius: 20px;
    }
    .form-label{
        border: none;
        font-size: 18px;
        font-family: 'Poppins';
        color:black;
        font-weight: 300;
        font-style: normal;
        margin: 0;
        padding: 0;
        padding-left: 5px;
        border-radius: 0;
    }
    .h3-contact{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 30px;
        /* identical to box height */
        color: #CC1522;
    }
    .m-auto-contact {
        /* margin-right: auto !important; */
        background: #CC1522;
    }
    .contact-information{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 30px;
        color: #FFFFFF;
    }
    .sub-contact{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 24px;
        color: #FFFFFF;
    }
    .ket-contact{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        color: #FFFFFF;
        width: 70%;
    }
    .contact-link{
        color: #FFFFFF;
    }
    .contact-link:hover{
        color: #FFFFFF;
        /* font-size: 21px; */
        /* font-weight: bold; */
        transition: width 2s;
    }
    @media (max-width: 850px) {
        .ket-contact{
            font-size: 15px;
            padding: 0;
        }
        .sub-contact{
            font-size: 18px;
            padding: 0;
        }
        .contact-information{
            font-size: 26px;
            padding: 0;
        }
        .h3-contact{
            font-size: 26px;
            padding: 0;
        }
        .form-label{
            font-size: 12px;
            padding: 0;
        }
        ::placeholder {
            font-size: 14px;
        }
     }
    </style>
    <script>
        function myMap() {
            var mapProp= {
            center:new google.maps.LatLng(-7.561750,110.802360),
            zoom:15,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoWsNFbijGOg2Fwa_tJvD9nlKDOsCU0qU&callback=myMap&v=weekly" defer></script>
<!--Hey! This is the original version
of Simple CSS Waves-->
<div class="" style="left: 0 !important;overflow: hidden;">
    <div class="row">
        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-6 m-auto-contact p-5">
            <div class="position-absolute top-50 translate-middle-y" style="width: 50%;">
                <h3 class="contact-information">Informasi Kontak</h3>
                <span class="sub-contact">Phone</span>
                <div class="ket-contact">
                    <a href="https://wa.me/6288215380301" class="contact-link">
                        <i class="bi bi-whatsapp"></i>
                        <span> 0882-1538-0301</span>
                    </a>
                    <br>
                    <a href="https://wa.me/6288215380301" class="contact-link">
                        <i class="bi bi-whatsapp"></i>
                        <span> 0882-1538-0301</span>
                    </a>
                </div><br>
                <span class="sub-contact">Email</span>
                <div class="ket-contact">
                    <a href="mailto:" class="contact-link">
                        <i class="bi bi-envelope"></i>
                        <span> 0882-1538-0301</span>
                    </a>
                </div><br>
                <span class="sub-contact">Location</span>
                <div class="ket-contact">
                    <a href="https://wa.me/6288215380301" class="contact-link">
                        <i class="bi bi-geo-alt"></i>
                        <span style="word-wrap: break-word;"> Jl. Melati No.5A, Purwosari,
                            Kec. Laweyan,Kota Surakarta,
                            Jawa Tengah 57142</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-6 col-sm-6 col-6 m-auto p-5">
            <h3 class="h3-contact mb-3 mt-5">Get in Touch</h3>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-contact" id="name" placeholder="Masukkan Nama Anda">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-contact" id="email" placeholder="name@email.com">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-contact" id="phone" placeholder="Masukkan Nomor Hp" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Subject</label>
                <textarea class="form-contact" id="exampleFormControlTextarea1" rows="8"></textarea>
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-custom" style="width: 50%">Send</button>
            </div>
        </div>
    </div>
</div>
<div id="googleMap" style="width:100%;height:500px;background: black;"></div>
<!--Header ends-->

@endsection
