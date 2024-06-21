<div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    Новости
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Создание Новости</li>
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
                            <h3 class="card-title">Добавить новость</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">Изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Выбрать файл</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="news-title">Заголовок</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="news-title" placeholder="Заголовок">
                                    <span id="exampleInputEmail1-error" class="error invalid-feedback">Please enter a email address</span>
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control" rows="6" placeholder="Текст ..."></textarea>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="published">
                                    <label class="form-check-label" for="published">Опубликовано</label>
                                </div>
                            </div>
                            <!-- /.card-body -->

                               <div class="card-footer">
                                   <button type="submit" class="btn btn-secondary mr-3">Отменить</button>
                                   <button type="submit" class="btn btn-primary">Сохранить</button>
                               </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

