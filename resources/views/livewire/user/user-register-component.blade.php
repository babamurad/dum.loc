<div>
    <div class="container mt-3">
        <div class="row mt-5">

            <div class="col-sm-8 offset-sm-2 mt-4">
            <div class="mt-3">@include('components.alerts')</div>

                @if(auth()->check()) {{ auth()->user()->name }} @endif
                @if(!$loginform)
                <div class="card card-primary my-5">
                    <div class="card-header">
                        <h3 class="card-title">Логин</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
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

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" wire:click.prevent="login">войти</button>
                            <a href="" wire:click.prevent="regLog">Регистрация нового сотрудника</a>
                        </div>
                    </form>
                </div>
                @else
                    <div class="card card-primary my-5">
                        <div class="card-header">
                            <h3 class="card-title">Регистрация</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
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
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" wire:click.prevent="register">Регистрация</button>
                                <a href="" wire:click.prevent="regLog">Уже зарегистрированы?</a>
                                <button type="submit" class="btn btn-primary float-sm-right" wire:click.prevent="logout">Logout</button>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
