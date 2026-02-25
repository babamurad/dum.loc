<div>
    <div class="container mt-3">
        <div class="row mt-5">

            <div class="col-sm-8 offset-sm-2 mt-4">
                <div class="mt-3">@include('components.alerts')</div>

                @if(auth()->check())
                    <div class="alert alert-info">
                        Вы вошли как {{ auth()->user()->name }}
                        <button wire:click="logout" class="btn btn-sm btn-danger float-end">Выйти</button>
                    </div>
                @endif

                @if($loginform)
                    <div class="card card-primary my-5">
                        <div class="card-header">
                            <h3 class="card-title">Логин</h3>
                        </div>
                        <div class="card-body">
                            <form wire:submit="login">
                                <div class="form-group mb-3">
                                    <label for="loginEmail">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="loginEmail"
                                           placeholder="Enter email" wire:model="email">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="loginPassword">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="loginPassword"
                                           placeholder="Password" wire:model="password">
                                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <button type="submit" class="btn btn-primary">Войти</button>
                                    <button type="button" class="btn btn-link" wire:click="toggleForm">Регистрация нового сотрудника</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="card card-primary my-5">
                        <div class="card-header">
                            <h3 class="card-title">Регистрация</h3>
                        </div>
                        <div class="card-body">
                            <form wire:submit="register">
                                <div class="form-group mb-3">
                                    <label for="regName">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="regName" placeholder="Your name" wire:model="name">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="regEmail">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="regEmail"
                                           placeholder="Enter email" wire:model="email">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="regPassword">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="regPassword"
                                           placeholder="Password" wire:model="password">
                                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password_confirmation">Confirm Password:</label>
                                    <input type="password" id="password_confirmation" class="form-control" wire:model="password_confirmation" placeholder="Confirm Password">
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <button type="submit" class="btn btn-primary">Регистрация</button>
                                    <button type="button" class="btn btn-link" wire:click="toggleForm">Уже зарегистрированы?</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
