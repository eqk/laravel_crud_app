@extends('admin.admin-lte.dashboard')

@section('title', 'Crud')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
<script src="/crud/app.js"></script>

<div  ng-controller="CrudCtrl" ng-app="app">
    <div class="row">
<form name="form">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Основные параметры</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                      <div class="form-group" ng-class="{ 'has-error' : form.name.$invalid && !form.name.$pristine }">
                        <label>Название модели</label>
                        <input type="name" class="form-control" ng-pattern="/^[A-Za-z]{1,25}/" required="true" ng-model="name" name="name" placeholder="Posts" autocomplete="off">
                        <small ng-show="form.name.$invalid && !form.name.$pristine" class="help-block">Только английские символы</small>
                        @{{name}}
                      </div>
                      <div class="form-group">
                        <label>Название папки для пердставлений</label>
                        <input type="name" class="form-control" ng-model="views_path" placeholder="admin">
                      </div>

                      <div class="form-group">
                        <label>Namespace контроллера</label>
                        <input type="name" class="form-control" ng-model="namespace_ctrl" placeholder="Admin">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Группа роутов</label>
                        <input type="name" class="form-control" ng-model="route_group" placeholder="admin">
                      </div>

                      <div class="form-group">
                        <label for="routes" class="checkbox-inline"><input type="checkbox" ng-checked="routes" ng-model="routes" id="routes" /> Сгенирировать пути</label>                        
                      </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Набор полей</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">Название поля</div>
                        <div class="col-md-3">Тип поля в DB</div>
                        <div class="col-md-3">Тип поля во вьюхе</div>
                    </div>
                </div>
                
                <div class="form-group" ng-repeat="item in items track by $index">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" ng-model="item.name" placeholder="Название поля" >
                        </div>

                        <div class="col-md-3">
                            <select name="type" ng-model="item.type" ng-init="item.type = 'string'" class="form-control" >
                                <option value="increments">increments</option>
                                <option value="integer">integer</option>
                                <option value="string">string</option>
                                <option value="text">text</option>
                                <option value="boolean">boolean</option>
                                <option value="float">float</option>
                                <option value="date">date</option>
                                <option value="dateTime">dateTime</option>
                                <option value="timestamp">timestamp</option>
                                
                                <!-- <option value="time">time</option> -->
                                <!-- <option value="longText">longText</option> -->
                                <!-- <option value="tinyInteger">tinyInteger</option> -->
                                <!-- <option value="smallInteger">smallInteger</option> -->
                                <!-- <option value="bigIncrements" selected="">bigIncrements</option> -->
                                <!-- <option value="bigInteger">bigInteger</option> -->
                                <!-- <option value="dateTimeTz">dateTimeTz</option> -->
                                <!-- <option value="macAddress">macAddress</option> -->
                                <!-- <option value="mediumInteger">mediumInteger</option> -->
                                <!-- <option value="mediumText">mediumText</option> -->
                                <!-- <option value="morphs">morphs</option> -->
                                <!-- <option value="timeTz">timeTz</option> -->
                                <!-- <option value="uuid">uuid</option> -->
                            </select>
                        </div>

                        <div class="col-md-3">
                            <select name="type" ng-model="item.html_type" ng-init="item.html_type = 'text'" class="form-control" >
                                <option value="text">Строка</option>
                                <option value="text">Число</option>
                                <option value="textarea">Текс</option>
                                <option value="checkbox">checkbox</option>
                                <option value="radio">radio bittons</option>
                                <option value="date">Дата</option>
                                <!-- <option value="text">Дата и Время</option> -->
                            </select>
                        </div>

                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger btn-flat" ng-click="remove_field(item)"><i class="fa fa-close"></i></button>
                        </div>

                    </div>

                    
                </div>
                </div>
                <div class="box-footer">
                    <button class="btn btn-primary btn-flat" type="button" ng-click="add_field()">Добавить поле</button>
                </div>
            </div>
        </div>

    </div>
    @{{ name }}
    <div class="alert alert-info" ng-if="form.name.$valid">
        <strong>php artisan crud:generate</strong> <span class="text-capitalize">@{{name || 'CrudEntity'}}</span>
        <span ng-if="routes">--route=yes</span> 
        <span ng-if="views_path">--view-path='@{{views_path}}'</span>
        <span ng-if="namespace_ctrl">--namespace='<span class="text-capitalize">@{{namespace_ctrl}}</span>'</span>
        <span ng-if="route_group">--route-group='@{{route_group}}'</span>
        <span ng-if="items">--fields='@{{items}}'</span>
    </div>
    </form>
</div>
@endsection
