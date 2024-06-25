@section('title', 'Admin FAQ')
<div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        Вопросы
                        @include('components.alerts')
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Вопросы</li>
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
                                <h3 class="card-title">Список вопросов и  ответов</h3>
                                <a class="btn btn-sm btn-success ml-5" href="{{ route('admin.questions.create') }}" wire:navigate>Добавить новый вопрос</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if($questions->count() > 0)
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Вопрос</th>
                                            <th>Ответ</th>
                                            <th>Порядок</th>
                                            <th>Статус</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($questions as $question)
                                            <tr>
                                                <td>{{ $question->id }}</td>
                                                <td>
                                                    {{ $question->question }}
                                                </td>
                                                <td>
                                                    {{ \Illuminate\Support\Str::limit($question->answer, 70, $end = '...')  }}
                                                </td>
                                                <td>
                                                    <i class="fas fa-sort"></i>
                                                    {{ $question->order }}
                                                </td>
                                                <td class="w-25">
                                                    <span class="badge p-2 {{ $question->published == true? 'bg-success': 'bg-danger' }}">{{ $question->published == true? 'Опубликовано': 'Не Опубликовано' }}</span>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="{{ route('admin.questions.edit', ['id' => $question->id]) }}" wire:navigate type="button" class="btn btn-secondary btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete" wire:click="deleteId({{ $question->id }})">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p>Список вопросов и ответов пуст.</p>
                                @endif
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                {{ $questions->links() }}
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
                        <p>Вы действительно хотите удалить вопрос-ответ?</p>
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

