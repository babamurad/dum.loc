@section('title', 'Admin Company Info')
<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Информация о компании</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Компания</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-2"><h3 class="card-title">Данные</h3></div>
                                <div class="col-sm-2">
                                    <button class="btn btn-sm btn-success" wire:click="canEdit">Редактировать</button>
                                </div>
                                <div class="col-sm-2">
                                    <a type="submit" class="btn btn-sm btn-secondary" href="{{ route('admin.contacts') }}" wire:navigate>Отменить</a>
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-sm btn-primary" wire:click="save">Сохранить</button>
                                </div>
                                <div class="col-sm-4">
                                    @include('components.alerts')
                                </div>

                            </div>

                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Адрес</label>
                                            <textarea class="form-control @error('address') is-invalid @enderror" rows="3" placeholder="Enter ..." {{ $edit? '':'disabled' }} wire:model="address"></textarea>
                                            @error('address') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email адрес</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter email" {{ $edit? '':'disabled' }} wire:model="email">
                                            @error('email') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="phone">Номер телефона</label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Номер телефона" {{ $edit? '':'disabled' }} wire:model="phone">
                                            @error('phone') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="fax">Факс</label>
                                            <input type="text" class="form-control @error('fax') is-invalid @enderror" id="phone" placeholder="Факс" {{ $edit? '':'disabled' }} wire:model="fax">
                                            @error('fax') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="exampleInputFile">QR код</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile" {{ $edit? '':'disabled' }} wire:model="newImage">
                                                <label class="custom-file-label" for="exampleInputFile">Выбрать изображение</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Загрузить</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        @if($newImage)
                                            <img class="w-25 rounded" src="{{ $newImage->temporaryUrl() }}" alt="News Image" >
                                        @else
                                            <img class="w-25 rounded" src="{{ asset('images/contacts') . '/' . $image }}" alt="QR code" >
                                        @endif
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
