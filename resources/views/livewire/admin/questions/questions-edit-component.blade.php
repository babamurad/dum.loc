@section('title', 'Admin Редактировать вопрос')
<div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    Редактировать Вопрос
                    @include('components.alerts')
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.partners.index') }}" wire:navigate>Home</a></li>
                        <li class="breadcrumb-item active">Редактирование Вопроса</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10 offset-1">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Редактировать Вопрос</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="news-title">Вопрос</label>
                                    <input wire:model="question" type="text" class="form-control @error('question') is-invalid @enderror" id="news-title" placeholder="Вопрос">
                                    @error('question') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label>Ответ</label>
                                    <textarea wire:model="answer" class="form-control @error('answer') is-invalid @enderror" rows="6" placeholder="Текст ответа ..."></textarea>
                                    @error('answer') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" type="number" placeholder="Порядок" wire:model="order">
                                    </div>
                                    <div class="form-check ml-3">
                                        <input type="checkbox" class="form-check-input" id="published" wire:model="published" {{ $published? 'checked':'' }}>
                                        <label class="form-check-label" for="published">Опубликовано</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a type="submit" class="btn btn-secondary mr-3" href="{{ route('admin.questions.index') }}" wire:navigate>Отменить</a>
                                <button type="button" class="btn btn-primary" wire:click.prevent="update">Сохранить</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

