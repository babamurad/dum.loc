@section('title', 'Admin Company Information')

<div>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    Карточка компании
                    @include('components.alerts')
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Карточка компании</li>
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
                            <h3 class="card-title">Данные</h3>
                            <a class="btn btn-sm btn-success ml-5" href="#" wire:click="addNew">Добавить новоую строку</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if($carts->count() > 0)
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Заголовок</th>
                                        <th>Подзаголовок</th>
                                        <th>Текст</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($carts as $cart)
                                        <tr>
                                            <td>{{ $cart->id }}</td>
                                            <td class="w-25">
                                                @if($editId == $cart->id)
                                                    <input class="form-control" type="text" wire:model="title">
                                                @else
                                                    {{ $cart->title }}
                                                @endif
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="form-check ml-3">
                                                        <input type="checkbox" class="form-check-input" id="published" wire:model="published" wire:click="unPublish({{ $cart->id }})" {{ $cart->published == true? 'checked': '' }}>
                                                    </div>
                                                    <span class="badge p-2 {{ $cart->published == true? 'bg-success': 'bg-danger' }}">{{ $cart->published == true? 'Опубликовано': 'Не Опубликовано' }}</span>
                                                </div>
                                            </td>
                                            <td class="w-25">
                                                {{ $cart->desc }}
                                            </td>
                                            <td>
                                                <div>
                                                    @if($editId == $cart->id)
                                                        <a href="#" type="button" class="btn btn-success btn-sm" wire:click="save()">
                                                            <i class="fas fa-save"></i>
                                                        </a>
                                                    @else
                                                        <a href="#" type="button" class="btn btn-secondary btn-sm" wire:click="edit({{ $cart->id }})">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    @endif
{{--                                                    data-toggle="modal" data-target="#modalDelete" wire:click="deleteId({{ $cart->id }})" --}}
                                                    <button type="button" class="btn btn-danger btn-sm"  wire:click="destroy({{ $cart->id }})">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>Карточка компании пуста.</p>
                            @endif
                        </div>
                        <!-- /.card-body -->

                    </div>
                </div>
            </div>
        </div>

    </section>
    <script>
        window.addEventListener('closeNewsModal', event=> {
            $('#modalDelete').modal('hide');
        })

    </script>
    <div wire:ignore.self class="modal fade" id="modalDelete" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Удаление</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Вы действительно хотите удалить данные о награде?</p>
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

