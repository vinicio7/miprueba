<?php
use App\Models\User;
$user = User::count();
?>
@extends('layouts.admin')

@section('content_admin')

    <main class="main" style="height: 46em;">
        <div class="container-fluid">
            <div class="row">
                <!-- main title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2>Usuarios</h2>
                        <span class="main__title-stat">{{$user}} Total</span>
                    </div>
                </div>
                <div id="app">
                    <users-component></users-component> 
                       
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection