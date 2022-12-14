@extends('layouts.app')

@section('title', 'مدیریت کاربران')

@section('content')
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class=""><a href="{{ route('admin.home') }}">خانه</a></li>
                    <li class="" aria-current="page">لیست هنرمندان</li>
                </ol>
            </nav>

            @include('messages')
            <div class="row">

                <div class="col-md-8">
                    <form>
                        <div>
                            <div class="row">
                                <div class="col-md-8"><input class="form-control" type="search" name="search" placeholder="نام یا ایمیل کاربری را که می خواهید را جستجو کنید..."></div>
                                <div class="col-md-4"><button class="btn btn-secondary">جستجو</button></div>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>

            @include('users.table')
        </div>
    </div>


@endsection
