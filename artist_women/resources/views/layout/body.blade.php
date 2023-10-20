@php
    use Illuminate\Support\Facades\Route;
@endphp
    <div class="title-content row d-flex justify-content-between my-2">
        @if(Route::currentRouteName() === 'getAllArt')
            <h1 class="col">Danh sách art</h1>
        @else
            <h1 class="col">Danh sách </h1>
        @endif
        <button type="button" class=" col-2 btn btn-dark">Thêm mới</button>
    </div>
<div class="content d-flex justify-content-center">
    
    <table class="table table-dark table-striped ">
        @yield('content')
    </table>
</div>