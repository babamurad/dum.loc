@section('title', 'Admin User Create')
<div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    Пользователь
                    @include('components.alerts')
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Новый пользователь</li>
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
                            <h3 class="card-title">Новый пользователь</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Имя</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your name" wire:model="name">
                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
                                                   placeholder="Enter email" wire:model="email">
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1"
                                                   placeholder="Password" wire:model="password">
                                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password:</label>
                                            <input type="password" id="password_confirmation"  class="form-control" wire:model="password_confirmation" placeholder="Confirm Password">
                                        </div>

                                        <div class="form-group mt-4">
                                            <div class="row">
                                                <div class="col-sm-1"><label>Доступ</label></div>
                                                <div class="col-sm-3">
                                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                        <input type="checkbox" class="custom-control-input ml-3" id="customSwitch3" wire:model.live="utype" {{ $utype == 'ADM'? 'checked':'' }} >
                                                        <label class="custom-control-label ml-3" for="customSwitch3" role="button">
                                                            @if($utype == 'ADM')
                                                                Открыт
                                                            @else
                                                                Закрыт
                                                            @endif
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                </form>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a type="submit" class="btn btn-secondary mr-3" href="{{ route('admin.users.index') }}" wire:navigate>Отменить</a>
                                <button type="button" class="btn btn-primary" wire:click.prevent="create">Сохранить</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

