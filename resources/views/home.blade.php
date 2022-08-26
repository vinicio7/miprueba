<?php
use App\Models\User;
$user = User::count();
$user_list = User::all();
?>
@extends('layouts.admin')

@section('content_admin')
 <main class="main" style="height: 46em;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="main__title">
                        <h2>Inicio</h2>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('logout') }}" class="main__title-link">Cerrar sesión</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stats">
                        <span>Total de usuarios</span>
                        <p>{{ $user}}</p>
                        <i class="icon ion-ios-stats"></i>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stats">
                        <span>Total de tareas</span>
                        <p>{{ 2 }}</p>
                        <i class="icon ion-ios-film"></i>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stats">
                        <span>Tareas atrasadas</span>
                        <p>{{ 2}}</p>
                        <i class="icon ion-ios-film"></i>
                    </div>
                </div>
   

                <!-- dashbox -->
                <div class="col-12 col-xl-6">
                    <div class="dashbox">
                        <div class="dashbox__title">
                            <h3><i class="icon ion-ios-contacts"></i> Ultimas tareas</h3>

                            <div class="dashbox__wrap">
                                <a class="dashbox__refresh" href="#"><i class="icon ion-ios-refresh"></i></a>
                                <a class="dashbox__more" href="users.html">Ver todos</a>
                            </div>
                        </div>

                        <div class="dashbox__table-wrap">
                            <table class="main__table main__table--dash">
                                <thead>
                                    <tr>
                                        <th>FACTURA</th>
                                        <th>PELICULA</th>
                                        <th>ASIENTOS</th>
                                        <th>FECHA</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end dashbox -->

                <!-- dashbox -->
                <div class="col-12 col-xl-6">
                    <div class="dashbox">
                        <div class="dashbox__title">
                            <h3><i class="icon ion-ios-star-half"></i> Ultimos usuarios</h3>
                            <div class="dashbox__wrap">
                                <a class="dashbox__refresh" href="#"><i class="icon ion-ios-refresh"></i></a>
                                <a class="dashbox__more" href="reviews.html">Ver todos</a>
                            </div>
                        </div>
                        <div class="dashbox__table-wrap">
                            <table class="main__table main__table--dash">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>FECHA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user_list as $item)
                                      <tr>
                                        <td>
                                            <div class="main__table-text">{{ $item->user_id}}</div>
                                        </td>
                                        <td>
                                            <div class="main__table-text">{{ $item->name}}</div>
                                        </td>
                                        <td>
                                            <div class="main__table-text">{{ $item->created_at}}</div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end dashbox -->
            </div>
        </div>
    </main>
@endsection