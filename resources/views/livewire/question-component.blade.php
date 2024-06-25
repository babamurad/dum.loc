<div>
    <section id="faq">
        <h2 id="sectionAbout" class="h2-responsive mt-5 mb-4 h3 text-center about text-uppercase wow animated fadeInDown">
            Часто задаваемые вопросы
        </h2>
        <div class="accordion" id="accordionExample">
            @foreach($questions as $question)
            <div class="card">
                <div class="card-header" id="heading{{ $loop->index }}">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left  {{ $loop->first? '':'collapsed' }}" type="button" data-toggle="collapse" data-target="#collapse{{ $loop->index }}"
                                aria-expanded="{{ $loop->first? 'true':'false' }}" aria-controls="collapse{{ $loop->index }}">
                            <h6>{{ $question->question }}</h6>
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $loop->index }}" class="collapse  {{ $loop->first? 'show':'' }}" aria-labelledby="heading{{ $loop->index }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {{ $question->answer }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
