<!-- Start: Slider Section -->
<div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
    <!-- Carousel slides -->
    <div class="carousel-inner">
        <div class="item active">
            <figure>
                <img alt="Home Slide" src="{{asset('assets')}}/images/header-slider/home-v3/header-slide.jpg" />
            </figure>
            <div class="container">
                <div class="carousel-caption">
                   <br>
                   <br>
                   <br>
                    <p>Kitap Yurdu.com  <strong>Kitaplar ,</strong> <strong>Dergiler ,</strong> <strong>Music,</strong> <strong>Çizgi Dergiler</strong></p>

                        <form action="{{route('getproduct')}}" method="post">
                            @csrf
                            @livewire('search')
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    @livewireScripts

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: Slider Section -->
