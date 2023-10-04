<div wire:ignore style="height: 100vh;">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Kategoriler</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kategoriler</li>
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
        <button class="btn btn-sm btn-info text-white btn-lg px-4 fs-4 font-medium mb-3 mt-3" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">
            <i class="fa fa-plus"></i> Kategori Oluştur
        </button>
        <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" aria-labelledby="bs-example-modal-lg" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form wire:submit.prevent="CategorySave" method="POST">
                    <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                            <h4 class="modal-title" id="myLargeModalLabel">Kategori Oluştur</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="tb-fname" placeholder="Kategori Adı" wire:model="categori_adi">
                                            <label for="tb-fname">Kategori Adı</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger text-white font-medium waves-effect text-start" data-bs-dismiss="modal">İptal</button>
                            <button type="submit" class="btn btn-info text-white font-medium waves-effect text-start" >Ekle</button>
                        </div>
                    </div>
                </form>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="table-responsive">
            <table id="scroll_hor"class="table table-striped table-bordered display nowrap"style="width: 100%">
                <thead>
                <!-- start row -->
                <tr>
                    <th>#</th>
                    <th>Kategori Adı</th>
                    <th>Durumu</th>
                    <th>İşlemler</th>
                </tr>
                <!-- end row -->
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->categori_adi}}</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" wire:click="UpdateStatus({{$category->id}})" id="flexSwitchCheckChecked" @if($category->status) checked   @endif>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-danger" wire:click="CategoryDelete({{$category->id}})"><i class="fas fa-trash-alt"></i> Sil</button>
                            <a href="#" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Düzenle</a>{{--{{route('posts.edit',['id'=>$p->id])}}--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>

