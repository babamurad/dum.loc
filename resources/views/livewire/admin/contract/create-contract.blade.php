@section('title', 'Admin New Contract File')
<div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    Файлы
                    @include('components.alerts')
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.contract') }}" wire:navigate>Home</a></li>
                        <li class="breadcrumb-item active">Добавить файл</li>
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
                            <h3 class="card-title">Добавить Файл Заключение договора</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="news-title">Заголовок</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="news-title" placeholder="Заголовок" wire:model.blur="title">
                                    @error('title') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Файл</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input @error('file') is-invalid @enderror" id="image" wire:model.blur="file">
                                                    <label class="custom-file-label" for="image">Выбрать файл</label>
                                                </div>
                                            </div>
                                            @error('file') <span class="error invalid-feedback" style="display: block;">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="custom-label">Название файла</label>
                                        @if ($file)
                                            <p class="text-green text-bold">{{ $file->getClientOriginalName() }}</p>
                                        @else
                                            <p class="text-danger">Название файла</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" type="number" placeholder="Порядок" wire:model="order">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-check ml-3">
                                            <input type="checkbox" class="form-check-input" id="published" wire:model="published">
                                            <label class="form-check-label" for="published">Опубликовано</label>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a type="submit" class="btn btn-secondary mr-3" href="{{ route('admin.contract') }}" wire:navigate>Отменить</a>
                                <button type="button" class="btn btn-primary" wire:click.prevent="create">Сохранить</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

