@section('title', 'Admin News')
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
                    Новости
                    @include('components.alerts')
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Новости</li>
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
                                    <h3 class="card-title">Список новостей</h3>
                                    <a class="btn btn-sm btn-success ml-5" href="{{ route('admin.news.create') }}" wire:navigate>Добавить новость</a>
                                </div>
                                <div class="col-sm-4 offset-2 text-right">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-10"><label>Per Page</label></div>
                                            <div class="col-sm-2">
                                                <select class="form-control" wire:model.live="perPage">
                                                    <option value="5">5</option>
                                                    <option value="10">10</option>
                                                    <option value="15">15</option>
                                                    <option value="25">25</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Изображение</th>
                                    <th>Заголовок</th>
                                    <th>Порядок</th>
                                    <th>Статус</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>
                                            <img class="w-25 rounded" src="{{ asset('images/news') . '/' . $item->image }}" alt="{{ $item->title }}">
                                        </td>
                                        <td class="w-25">
                                            <a href="{{ route('admin.news.edit', ['id' => $item->id]) }}">
                                                {{ $item->title }}
                                            </a>
                                        </td>
                                        <td>
                                            <i class="fas fa-chevron-circle-left mr-2 mt-1 text-muted" role="button" wire:click="DecOrder({{$item->id}})"></i>
                                            <span>{{ $item->order }}</span>
                                            <i class="fas fa-chevron-circle-right ml-2 mt-1 text-muted" role="button" wire:click="IncOrder({{$item->id}})"></i>
                                        </td>
                                        <td class="w-25">
                                            <div class="row">
                                                <div class="form-check ml-3">
                                                    <input role="button" type="checkbox" class="form-check-input larger-checkbox" id="published" wire:model="published" wire:click="unPublish({{ $item->id }})" {{ $item->published == true? 'checked': '' }}>
                                                </div>
                                                <span class="badge p-2 ml-1 {{ $item->published == true? 'bg-success': 'bg-danger' }}">{{ $item->published == true? 'Опубликовано': 'Не Опубликовано' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="{{ route('admin.news.edit', ['id' => $item->id]) }}" type="button" class="btn btn-secondary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDeleteNews" wire:click="deleteId({{ $item->id }})">
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
                            {{ $news->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <script>
        window.addEventListener('closeNewsModal', event=> {
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
                    <button  @click="$dispatch('delete-news')" type="button" class="btn btn-danger" wire:click="destroy">Удалить</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

