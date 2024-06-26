<div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    Партнеры
                    @include('components.alerts')
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.partners.index') }}" wire:navigate>Home</a></li>
                        <li class="breadcrumb-item active">Создание Партнера</li>
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
                            <h3 class="card-title">Добавить Партнера</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        @if($newImage)
                                            <img class="w-25 rounded" src="{{ $newImage->temporaryUrl() }}" alt="News Image" >
                                        @else
                                            <img class="w-25 rounded" src="{{ asset('images/partners') . '/' . $image }}" alt="Partners Logo Image" >
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Изображение</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input @error('newImage') is-invalid @enderror" id="image" wire:model.blur="newImage">
                                                    <label class="custom-file-label" for="image">Выбрать файл</label>
                                                </div>
                                            </div>
                                            @error('newImage') <span class="error invalid-feedback" style="display: block;">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="news-title">Заголовок</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="news-title" placeholder="Заголовок" wire:model.blur="title">
                                    @error('title') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea wire:model.blur="desc" class="form-control @error('desc') is-invalid @enderror" rows="6" placeholder="Текст ..."></textarea>
                                    @error('desc') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" type="number" placeholder="Порядок" wire:model="order">
                                    </div>
                                    <div class="form-check ml-3">
                                        <input type="checkbox" class="form-check-input" id="published" wire:model="published">
                                        <label class="form-check-label" for="published">Опубликовано</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a type="submit" class="btn btn-secondary mr-3" href="{{ route('admin.partners.index') }}" wire:navigate>Отменить</a>
                                <button type="button" class="btn btn-primary" wire:click.prevent="update">Сохранить</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

