<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Direktori Sekolah XYZ</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('frontend.partials.styles')
</head>

<body>
    @include('frontend.partials.header')

    <!-- Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Sekolah XYZ</h6>
                <h1 class="mb-5">Guru dan Tenaga Kependidikan</h1>
            </div>
            <div class="row">                    
                @foreach ($gurudantenagakependidikans as $gurudantenagakependidikan)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                @if ($gurudantenagakependidikan->image)
                                    <img class="img-fluid" src="{{$gurudantenagakependidikan->image->getUrl()}}" alt="Guru dan Tenaga Kependidikan">
                                @endif
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">{{$gurudantenagakependidikan->fullname}}</h5>
                                <small>Tanggal Lahir :<br>{{$gurudantenagakependidikan->dateofbirth}}</small><br>
                                <small>Jenis Kelamin :<br>{{$gurudantenagakependidikan->gender}}</small><br>
                                <small>Tanggal Perekrutan :<br>{{$gurudantenagakependidikan->hiredate}}</small><br>
                            </div>
                        </div>
                        <br><br><br>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End -->

    @include('frontend.partials.footer')

    @include('frontend.partials.scripts')
</body>

</html>
