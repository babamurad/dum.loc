<div class="container">
    <div class="mt-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card mb-4">
                    <img class="card-img-top" src="{{ asset('images/news/' . $newsItem->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">{{ $newsItem->title }}</h2>
                        <p class="card-text">{{ $newsItem->text }}</p>
                        <a wire:navigate href="/" class="btn btn-primary">Back to News Carousel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewire('news-component')
</div>
