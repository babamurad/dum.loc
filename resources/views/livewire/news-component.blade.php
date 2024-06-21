<!-- News Carousel Wrapper-->
<div>
    <h3 class="h3 mt-3">Новости</h3>
    <div id="newsCarousel" class="carousel slide carousel-multi-item" data-ride="carousel" style="    height: auto;">
        <!--Controls-->
        <a class="news-carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="news-carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-2">
                            <img class="card-img-top" src="{{ asset('img/placeholder-200.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">News Title 1</h4>
                                <p class="card-text">Brief description of the news.</p>
                                <a href="{{ route('single.news') }}" class="btn btn-primary" wire:navigate>Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-2">
                            <img class="card-img-top" src="{{ asset('img/placeholder-200.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">News Title 2</h4>
                                <p class="card-text">Brief description of the news.</p>
                                <a href="{{ route('single.news') }}" class="btn btn-primary" wire:navigate>Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-2">
                            <img class="card-img-top" src="{{ asset('img/placeholder-200.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">News Title 3</h4>
                                <p class="card-text">Brief description of the news.</p>
                                <a href="{{ route('single.news') }}" class="btn btn-primary" wire:navigate>Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-2">
                            <img class="card-img-top" src="{{ asset('img/placeholder-200.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">News Title 4</h4>
                                <p class="card-text">Brief description of the news.</p>
                                <a href="{{ route('single.news') }}" class="btn btn-primary" wire:navigate>Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.First slide-->
            <!--Second slide-->
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-2">
                            <img class="card-img-top" src="{{ asset('img/placeholder-200.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">News Title 5</h4>
                                <p class="card-text">Brief description of the news.</p>
                                <a href="{{ route('single.news') }}" class="btn btn-primary" wire:navigate>Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-2">
                            <img class="card-img-top" src="{{ asset('img/placeholder-200.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">News Title 6</h4>
                                <p class="card-text">Brief description of the news.</p>
                                <a href="{{ route('single.news') }}" class="btn btn-primary" wire:navigate>Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-2">
                            <img class="card-img-top" src="{{ asset('img/placeholder-200.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">News Title 7</h4>
                                <p class="card-text">Brief description of the news.</p>
                                <a href="{{ route('single.news') }}" class="btn btn-primary" wire:navigate>Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-2">
                            <img class="card-img-top" src="{{ asset('img/placeholder-200.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">News Title 8</h4>
                                <p class="card-text">Brief description of the news.</p>
                                <a href="{{ route('single.news') }}" class="btn btn-primary" wire:navigate>Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.Second slide-->
            <!-- Add more slides as needed -->
        </div>
        <!--/.Slides-->
    </div>
</div>
<!--/.News Carousel Wrapper-->

