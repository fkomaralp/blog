<div style="height:100vh;">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Tema Yönetimi</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tema Yönetimi</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->
    <!-- Container fluid  -->
    <!-- -------------------------------------------------------------- -->
    <div class="container-fluid">
        @foreach($themes as $t)
            <div class="col-lg-3 col-md-3 col-xl-2 float-left">
                <!-- Card -->
                <div class="card m-2">
                    <img class="card-img-top img-responsive" src="{{$t->banner}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center"style="color:#9518A1"><b>{{$t->name}}</b></h4>
                        <p class="card-text">{{$t->description}}</p>
                        <a href="#!" wire:click="activateTheme({{$t->id}})" class="btn container @if($t->status == 1) btn-success @else btn-danger @endif">@if($t->status == 1) Aktif @else Aktif Et @endif</a>
                    </div>
                </div>
                <!-- Card -->
            </div>
        @endforeach

    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Container fluid  -->
</div>
