<div wire:ignore style="height: 100vh;">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Sosyal Medya Ayarları</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Social Medya</li>
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
            <i class="fa fa-plus"></i> Sosyal Medya Oluştur
        </button>
        <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" aria-labelledby="bs-example-modal-lg" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form wire:submit.prevent="SocialAdd" method="POST">
                    <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                            <h4 class="modal-title"     id="myLargeModalLabel">Sosyal Medya Oluştur</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-floating">
                                            <div class="mb-3">
                                                <label>Sosyal Medya Adı</label>
                                                <input type="text" class="form-control" placeholder="Prestatürk" wire:model="social_name"/>
                                            </div>
                                            <div class="mb-3">
                                                <label>Sosyal Medya Url</label>
                                                <input type="text" class="form-control" placeholder="https://prestaturk.com/" wire:model="social_url" />
                                            </div>
                                            <div class="mb-3">
                                                <label>Sosyal Medya İcon (Font Awesome Tercihimizdir.)</label>
                                                <input type="text" class="form-control" placeholder="fa fa-prestaturk" wire:model="social_icon" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger text-white font-medium waves-effect text-start" data-bs-dismiss="modal"> <i class="fa fa-arrow-left"></i> İptal</button>
                            <button type="submit" class="btn btn-info text-white font-medium waves-effect text-start" ><i class="fa fa-plus"></i> Ekle</button>
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
                    <th>Sosyal Medya Adı</th>
                    <th>Sosyal Medya Url'si</th>
                    <th>Sosyal Medya İconu</th>
                    <th>Durumu</th>
                    <th>İşlemler</th>
                </tr>
                <!-- end row -->
                </thead>
                <tbody>
                @foreach($socialmedia as $social)
                    <tr>
                        <td>{{$social->id}}</td>
                        <td>{{$social->social_name}}</td>
                        <td>{{$social->social_url}}</td>
                        <td>{{$social->social_icon}} <i class="{{$social->social_icon}}"></i> </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" wire:click="UpdateStatus({{$social->id}})"  id="flexSwitchCheckChecked" @if($social->status) checked @endif>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-danger" wire:click="DelteSocialMedia({{$social->id}})"><i class="fas fa-trash-alt"></i> Sil</button>
                            <a href="#" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Düzenle</a>{{--{{route('posts.edit',['id'=>$p->id])}}--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>

