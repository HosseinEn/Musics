@extends('layouts.app')

@section('title', 'مدیریت آلبوم ها')

@section('content')
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class=""><a href="{{ route('admin.home') }}">خانه</a></li>
                    <li class="" aria-current="page">لیست آلبوم ها</li>
                </ol>
            </nav>

            @include('messages')
            <div class="row">
                <div class="col-md-4">
                    <a class="btn btn-primary w-25" href="{{ route("albums.create") }}">ایجاد آلبوم</a>
                </div>
                <div class="col-md-8">
                    <form>
                        <div>
                            <div class="row">
                                <div class="col-md-8"><input class="form-control" type="search" name="search"
                                    placeholder="نام آلبوم یا هنرمند را جستجو کنید..."></div>
                                <div class="col-md-4"><button class="btn btn-secondary">جستجو</button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <p>* با حذف آلبوم، موسیقی های آن نیز حذف خواهند شد.</p>
        @include('albums.table')
    </div>


@endsection
