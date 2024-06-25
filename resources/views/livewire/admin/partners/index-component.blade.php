@section('title', 'Admin Partners')
@push('date-css')
{{--    это протестировал скрипты--}}
{{--    <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">--}}
{{--@endpush--}}
{{--@push('datepicker')--}}
{{--    <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>--}}
{{--    <script>--}}
{{--        document.addEventListener('livewire:load', function () {--}}
{{--            //Date picker--}}
{{--            $('#reservationdate').datetimepicker({--}}
{{--                format: 'L'--}}
{{--            });--}}
{{--            // $('#datepicker').datepicker({--}}
{{--            //     format: 'yyyy-mm-dd',--}}
{{--            //     autoclose: true--}}
{{--            // }).on('changeDate', function (e) {--}}
{{--            // @this.set('selectedDate', e.format('yyyy-mm-dd'));--}}
{{--            // });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endpush--}}
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
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Партнеры</li>
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
                            <h3 class="card-title">Список партнеров</h3>
                            <a class="btn btn-sm btn-success ml-5" href="{{ route('admin.partners.create') }}" wire:navigate>Добавить нового партнера</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if($partners->count() > 0)
                            <table class="table table-bordered">
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
                                @foreach($partners as $partner)
                                    <tr>
                                        <td>{{ $partner->id }}</td>
                                        <td>
                                            <img class="w-25 rounded" src="{{ asset('images/partners') . '/' . $partner->image }}" alt="{{ $partner->title }}">
                                        </td>
                                        <td class="w-25">
                                            <a href="{{ route('admin.partners.edit', ['id' => $partner->id]) }}" wire:navigate>
                                            {{ $partner->title }}
                                            </a>
                                        </td>
                                        <td class="w-25">
                                            <i class="fas fa-sort"></i>
                                            {{ $partner->order }}
                                        </td>
                                        <td class="w-25">
                                            <span class="badge p-2 {{ $partner->published == true? 'bg-success': 'bg-danger' }}">{{ $partner->published == true? 'Опубликовано': 'Не Опубликовано' }}</span>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="{{ route('admin.partners.edit', ['id' => $partner->id]) }}" wire:navigate type="button" class="btn btn-secondary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete" wire:click="deleteId({{ $partner->id }})">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @else
                                <p>Список партнеров пуст.</p>
                            @endif
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            {{ $partners->links() }}
                        </div>

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
                    <p>Вы действительно хотите удалить данные партнера?</p>
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

