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
            @foreach($chunkedNewsItems as $chunk)
            <div class="carousel-item {{ $loop->first? 'active':'' }}">
                <div class="row justify-content-center">
                    @foreach($chunk as $newsItem)
                        <div class="col-md-4">
                            <div class="card mb-2 h-100" style="border: solid 1px #a5a1a185;">
                                <img class="card-img-top" src="{{ asset('images/news/' . $newsItem->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $newsItem->title }}</h4>
                                    @php  @endphp
                                    <p class="card-text">{!! \Illuminate\Support\Str::words($newsItem->text, 12, '...') !!}</p>
                                    <a href="{{ route('single.news', ['id' => $newsItem->id]) }}" class="btn btn-primary" wire:navigate>ЧИтать далее</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endforeach
            <!--/.First slide-->

            <!-- Add more slides as needed -->
        </div>
        <!--/.Slides-->
    </div>
</div>
<!--/.News Carousel Wrapper-->

