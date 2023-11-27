<section class="ftco-gallery">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            @foreach ($photo_footer as $item)
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="{{ Storage::url($item->photo_footer) }}"
                        class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url({{ Storage::url($item->photo_footer) }});">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row">
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                </a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md">
                @foreach ($sejarah as $item)
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Kaloka</h2>
                        <p>{{ $item->keterangan }}</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a
                                    href="https://www.youtube.com/channel/UCsr6PFarY9XlKxh-WiDmPDw"><span
                                        class="icon-youtube"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/kalokabagstore"><span
                                        class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/kalokabagstore.tmg/"><span
                                        class="icon-instagram"></span></a></li>
                            <li class="ftco-animate"><a
                                    href="https://api.whatsapp.com/send/?phone=6281227994621&text&type=phone_number&app_absent=0"><span
                                        class="icon-whatsapp"></span></a></li>
                        </ul>
                    </div>
                @endforeach
            </div>
            <div class="col-md-2">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Menu</h2>
                    <ul class="list-unstyled">
                        <li><a href="/" class="py-2 d-block">Home</a></li>
                        <li><a href="/shop" class="py-2 d-block">Shop</a></li>
                        <li><a href="/about" class="py-2 d-block">About</a></li>
                        <li><a href="/contact" class="py-2 d-block">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Help</h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                            <li><span class="py-2 d-block">COD / Bayar di Tempat</span></li>
                            <li><span class="py-2 d-block">Order Online</span></li>
                            <li><span class="py-2 d-block">Reseller &amp; Dropshipper</span></li>
                        </ul>
                        {{-- <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">FAQs</a></li>
                            <li><a href="#" class="py-2 d-block">Contact</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li>
                                <span class="icon icon-map-marker"></span>
                                <span class="text">
                                    Jl. MT Haryono No.94, Pandean, Temanggung II, Kec. Temanggung, Kabupaten Temanggung,
                                    Jawa Tengah 56213
                                </span>
                            </li>
                            <li>
                                <a href="/contact"><span class="icon icon-phone"></span><span
                                        class="text">0852-2893-9495</span></a>
                            </li>
                            <li>
                                <a href="/contact"><span class="icon icon-envelope"></span><span
                                        class="text">kalokabagstore.tmg@gmail.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i
                        class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                        target="_blank">Mirakel Hafiza</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
