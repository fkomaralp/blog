<div style="height: 100vh;">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Kullanıcılar</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kullanıcılar</li>
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
        <button type="button" class="btn btn-info mb-3" data-bs-toggle="modal" data-bs-target="#samedata-modal" data-bs-whatever="@getbootstrap">
           <i class="fa fa-plus"></i> Kullanıcı Ekle
        </button>
        <div class="modal fade" id="samedata-modal" tabindex="-1" aria-labelledby="exampleModalLabel1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <form method="POST" action="{{ route('register') }}">
                        <div class="modal-header d-flex align-items-center">
                            <h4 class="modal-title" id="exampleModalLabel1">Kullanıcı Ekle</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="control-label">Kullanıcı İsmi</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="control-label">Kullanıcı E-posta Adresi</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="pass" class="control-label">Kullanıcı Şifre</label>
                                    <input type="password" class="form-control" id="pass" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="pass-t" class="control-label">Kullanıcı Şifre Tekrarı</label>
                                    <input type="password" class="form-control" id="pass-t" name="password_confirmation">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline btn-secondary" data-bs-dismiss="modal">İptal</button>
                            <button type="submit" class="btn btn-info">Kullanıcı Ekle</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
            <div class="table-responsive">
                <table id="scroll_hor"class="table table-striped table-bordered display nowrap"style="width: 100%">
                    <thead>
                    <!-- start row -->
                    <tr>
                        <th>#</th>
                        <th>İsim</th>
                        <th>Email</th>
                        <th>İşlemler</th>
                    </tr>
                    <!-- end row -->
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <button class="btn btn-sm btn-danger" wire:click="UserDelete({{$user->id}})"><i class="fas fa-trash-alt"></i> Sil</button>
                                <button class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> Düzenle</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

    </div>

</div>

