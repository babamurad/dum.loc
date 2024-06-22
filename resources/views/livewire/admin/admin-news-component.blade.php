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
                            <h3 class="card-title">Список новостей</h3>
                            <a class="btn btn-sm btn-success ml-5" href="{{ route('admin.create.news') }}" wire:navigate>Добавить новость</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Изображение</th>
                                    <th>Заголовок</th>
                                    <th>Статус</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>
                                            <img class="w-25" src="{{ asset('images/news') . '/' . $item->image }}" alt="">
                                        </td>
                                        <td class="w-25">
                                            {{ $item->title }}
                                        </td>
                                        <td class=" {{ $item->published? 'text-success': 'text-danger' }}  w-25">{{ $item->published? 'Опубликован': 'Не Опубликован' }}</td>
                                        <td><div>
                                                <button type="button" class="btn btn-secondary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

