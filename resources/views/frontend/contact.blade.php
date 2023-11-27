@extends('frontend/layouts/main')
@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('frontend') }}/images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Contact</span></p>
                    <h1 class="mb-0 bread">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="w-100"></div>
                @foreach ($kontak as $item)
                    <div class="col-md-3 d-flex">
                        <div class="info bg-white p-4">
                            <p><span>{{ $item->judul }} :</span> {{ $item->isi }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="/contact" method="post" class="bg-white p-5 contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" id="nama"
                                placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" id="email"
                                placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea cols="30" rows="7" name="pesan" id="pesan" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.341172895466!2d110.16849247485064!3d-7.315517371931541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a829dcb294e9d%3A0x3f8a817c7b5dc5b8!2sToko%20Tas%2C%20Koper%20%26%20Aksesoris%20Kaloka%20Pandean%20Temanggung!5e0!3m2!1sid!2sid!4v1698044034905!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Data Berhasil Ditambahkan',
                text: '{{ session('success') }}'
            })
        </script>
    @endif
@endsection
