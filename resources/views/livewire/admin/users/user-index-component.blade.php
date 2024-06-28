@section('title', 'Admin Users')
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
                        <li class="breadcrumb-item active">Пользователи</li>
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
                                    <h3 class="card-title">Список пользоаптелей</h3>
                                    <a class="btn btn-sm btn-success ml-5" href="{{ route('admin.users.create') }}" wire:navigate>Добавить нового пользователя</a>
                                </div>
{{--                                <div class="col-sm-4 offset-2 text-right">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-sm-10"><label>Per Page</label></div>--}}
{{--                                            <div class="col-sm-2">--}}
{{--                                                <select class="form-control" wire:model.live="perPage">--}}
{{--                                                    <option value="5">5</option>--}}
{{--                                                    <option value="10">10</option>--}}
{{--                                                    <option value="15">15</option>--}}
{{--                                                    <option value="25">25</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Имя</th>
                                    <th>Email</th>
                                    <th>Доступ</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>
                                            <a href="{{ route('admin.users.edit', ['id' => $user->id]) }}" wire:navigate>{{ $user->name }}</a>
                                        </td>
                                        <td class="w-25">
                                            {{ $user->email }}
                                        </td>
                                        <td class="w-25">
                                            <div class="row">
                                                <div class="form-check ml-3">
                                                    <input role="button" type="checkbox" class="form-check-input larger-checkbox"
                                                           wire:model="utype" wire:click="ChangeType({{ $user->id }})"
                                                           {{ $user->utype == 'ADM'? 'checked': '' }}
                                                           @if($userId == $user->id) disabled @endif >
                                                </div>
                                                <span class="badge p-2 ml-1 {{ $user->utype == 'ADM'? 'bg-success': 'bg-danger' }}">
                                                    {{ $user->utype == 'ADM'? 'Открыт': 'Закрыт' }}
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <button href="#" type="button" class="btn btn-secondary btn-sm"
                                                        wire:click="editUser({{ $user->id }})"  @if($user->admin) disabled @endif>
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDeleteNews"
                                                        wire:click="deleteId({{ $user->id }})" @if($userId == $user->id || $user->admin) disabled @endif>
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
                            {{ $users->links() }}
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
                    <p>Вы действительно хотите удалить эту данные пользователя {{ $delName }}?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-danger" wire:click.prevent="destroy">Удалить</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

