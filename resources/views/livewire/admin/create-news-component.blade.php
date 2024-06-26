@push('editor-css')
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
@endpush
@push('editor-js')
    <!-- Summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function initializeSummernote() {
            // Summernote
            $('#summernote').summernote({
                height: 300,
                callbacks: {
                    onChange: function(contents, $editable) {
                    @this.set('text', contents);
                    }
                }
            })

            // CodeMirror
            // CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            //     mode: "htmlmixed",
            //     theme: "monokai"
            // });
        })
        document.addEventListener('livewire:load', function () {
            initializeSummernote();
        });
    </script>
@endpush
@section('title', 'Admin News Create')
<div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    Новости
                    @include('components.alerts')
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Создание Новости</li>
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
                            <h3 class="card-title">Добавить новость</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-6">
                                        @if ($image)
                                            <img class="w-25 rounded" src="{{ $image->temporaryUrl() }}" alt="News Image" >
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Изображение</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" wire:model.blur="image">
                                                    <label class="custom-file-label" for="image">Выбрать файл</label>
                                                </div>
                                            </div>
                                            @error('image') <span class="error invalid-feedback" style="display: block;">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="news-title">Заголовок</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="news-title" placeholder="Заголовок" wire:model.blur="title">
                                        @error('title') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="ml-2">Текст</label>
                                    <div wire:ignore class="col-sm-12">
                                            <textarea wire:model.defer="text" id="summernote">
                                            Place <em>some</em> <u>text</u> <strong>here</strong>
                                        </textarea>
                                    </div>
                                </div>
                                @error('text') <span class="error invalid-feedback">{{ $message }}</span> @enderror

                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="published" wire:model="published">
                                        <label class="form-check-label" for="published">Опубликовано</label>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                               <div class="card-footer">
                                   <a type="submit" class="btn btn-secondary mr-3" href="{{ route('admin.news') }}" wire:navigate>Отменить</a>
                                   <button type="button" class="btn btn-primary" wire:click.prevent="save">Сохранить</button>
                               </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

