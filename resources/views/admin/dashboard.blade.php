@extends('admin.layouts.admin_app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="jumbotron text-center">
                    <p><span class="badge badge-primary main-information">Категории 0</span></p>
                </div>
            </div>
            <div class="col-3">
                <div class="jumbotron text-center">
                    <p><span class="badge badge-primary main-information">Материалы 0</span></p>
                </div>
            </div>
            <div class="col-3">
                <div class="jumbotron text-center">
                    <p><span class="badge badge-primary main-information">Посетители 0</span></p>
                </div>
            </div>
            <div class="col-3">
                <div class="jumbotron text-center">
                    <p><span class="badge badge-primary main-information">Сегодня 0</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <a href="#" class="btn btn-block btn-primary">Создать категорию</a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-action">Категория первая</h4>
                    <p class="list-group-item-light">Кол-во материалов</p>
                </a>
            </div>
            <div class="col-6">
                <a href="#" class="btn btn-block btn-primary">Создать материал</a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-action">Материал первый</h4>
                    <p class="list-group-item-light">Категория</p>
                </a>
            </div>
        </div>
    </div>

    @endsection
