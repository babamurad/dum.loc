@section('title', 'Admin Dashboard')
<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard - {{ auth()->check()? auth()->user()->name:'' }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
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
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <div class="row text-center">
                                <div class="col-sm-6">
                                    <h3>{{ $news }}</h3>
                                    <p>Новостей </p>
                                </div>
                                <div class="col-sm-6">
                                    <h3>{{ $newsp }}</h3>
                                    <p>Опубликовано</p>
                                </div>
                            </div>


                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('admin.news') }}" class="small-box-footer">Перейти <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <div class="row text-center">
                                <div class="col-sm-6">
                                    <h3>{{ $partners }}</h3>
                                    <p>Партнеры</p>
                                </div>
                                <div class="col-sm-6">
                                    <h3>{{ $partnersp }}</h3>
                                    <p>Опубликовано</p>
                                </div>
                            </div>

                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('admin.partners.index') }}" class="small-box-footer">Перейти <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <div class="row text-center">
                                <div class="col-sm-6">
                                    <h3>{{ $questions }}</h3>
                                    <p>Вопросы</p>
                                </div>
                                <div class="col-sm-6">
                                    <h3>{{ $questionsp }}</h3>
                                    <p>Опубликовано</p>
                                </div>
                            </div>

                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('admin.questions.index') }}" class="small-box-footer">Перейти <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <div class="row text-center">
                                <div class="col-sm-6">
                                    <h3>{{ $awards }}</h3>
                                    <p>Наград</p>
                                </div>
                                <div class="col-sm-6">
                                    <h3>{{ $awardsp }}</h3>
                                    <p>Опубликовано</p>
                                </div>
                            </div>

                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{ route('admin.awards.index') }}" class="small-box-footer">Перейти <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
