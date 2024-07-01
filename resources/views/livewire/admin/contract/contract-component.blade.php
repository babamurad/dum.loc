@section('title', 'Admin Contract')
<div>
    <style>
        .order-center {
            text-align: center; /* Центрирование содержимого ячейки */
        }

        .larger-checkbox {
            width: 12px;
            height: 18px;
            transform: scale(1.5); /* Масштабирование чекбокса */
            margin-right: 5px; /* Отступ справа */
        }
    </style>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    Заключение договора
                    @include('components.alerts')
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Договор</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="card-title">Список файлов для Заключение договора</h3>
                                    <a class="btn btn-sm btn-success ml-5" href="{{ route('admin.contract.create') }}"
                                       wire:navigate>Добавить файл</a>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Заголовок</th>
                                    <th>Файл</th>
                                    <th>Порядок</th>
                                    <th>Статус</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($files as $file)
                                    <tr>
                                        <td>{{ $file->id }}</td>
                                        <td>
                                            <a href="{{ route('admin.contract.edit', ['id' => $file->id]) }}" wire:navigate>{{$file->title}}</a>
                                        </td>
                                        <td class="w-25">
                                            <a class="p-2" href="{{ asset('images/files/' . $file->file) }}" target="_blank">
                                                <i class="fas fa-file-upload mr-1"></i>
                                                {{ $file->filename }}
                                            </a>                                        </td>
                                        <td>
                                            {{--                                            <i class="fas fa-chevron-circle-left mr-2 mt-1 text-muted" role="button"--}}
                                            {{--                                               wire:click="DecOrder({{$file->id}})"></i>--}}
                                            <span>{{ $file->order }}</span>
                                            {{--                                            <i class="fas fa-chevron-circle-right ml-2 mt-1 text-muted" role="button"--}}
                                            {{--                                               wire:click="IncOrder({{$file->id}})"></i>--}}
                                        </td>
                                        <td class="w-25">
                                            <div class="row">
                                                {{--                                                <div class="form-check ml-3">--}}
                                                {{--                                                    <input role="button" type="checkbox" class="form-check-input larger-checkbox" id="published"--}}
                                                {{--                                                           wire:model="published" wire:click="unPublish({{ $file->id }})" {{ $file->published == true? 'checked': '' }}>--}}
                                                {{--                                                </div>--}}
                                                <span class="badge p-2 ml-1 {{ $file->published == true? 'bg-success': 'bg-danger' }}">{{ $file->published == true? 'Опубликовано': 'Не Опубликовано' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="{{ route('admin.contract.edit', ['id' => $file->id]) }}"
                                                   type="button" class="btn btn-secondary btn-sm" wire:navigate>
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                        data-target="#modalDeleteNews"
                                                        wire:click="deleteId({{ $file->id }})">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            {{ $files->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <script>
        window.addEventListener('closeNewsModal', event => {
            $('#modalDeleteNews').modal('hide');
        })

    </script>
    <div wire:ignore.self class="modal fade" id="modalDeleteNews" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Удаление</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Вы действительно хотите удалить эту новость?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button @click="$dispatch('delete-news')" type="button" class="btn btn-danger" wire:click="destroy">
                        Удалить
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

