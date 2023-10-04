<div wire:ignore style="height: 100vh;">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Bloglar</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Posts</li>
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
            <i class="fa fa-plus"></i> Post Ekle
        </button>
        <div  class="modal fade" id="bs-example-modal-lg" tabindex="-1" aria-labelledby="bs-example-modal-lg" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form method="POST" wire:submit.prevent="PostSave">
                    <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                            <h4 class="modal-title" id="myLargeModalLabel">Post Oluştur</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body">
                                    <div class="mb-3">
                                        <label>Post Başlığı</label>
                                        <input type="text" class="form-control" placeholder="Post Başlığı" wire:model="post_adi"/>
                                    </div>
                                    <div class="mb-3">
                                        <label>Post Url'si (Boş bırakırsanız otomatik oluşturur)</label>
                                        <input type="text" class="form-control" placeholder="Post Url'si" wire:model="post_url" />
                                    </div>
                                    <div class="mb-3">
                                        <label>Post Video URL'si</label>
                                        <input type="url" class="form-control" placeholder="Post Video URL'si" wire:model="video_url" />
                                    </div>
                                    <div class="mb-3">
                                        <label>Meta Tagları</label>
                                        <input type="text" class="form-control" placeholder="Meta Tagları" wire:model="meta_tag" />
                                    </div>
                                    <div class="mb-3">
                                        <label>Post İçeriği</label>
                                        <textarea class="form-control" rows="5"  wire:model="post_icerigi"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label>Kategoriler</label>
                                        <select class="form-select col-12" id="inlineFormCustomSelect" wire:model="category">
                                            <option selected>Kategori Seçin</option>
                                            @foreach($categories as $c)
                                                <option value="{{$c->id}}">{{$c->categori_adi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Resim Yükle <b style="color:#9518A1">( Ana Resim )</b></label>
                                                <input type="file" class="form-control" wire:model="image"/>
                                            </div>
                                            <div class="mb-3">
                                                <label>Resim Yükle <b style="color:#9518A1">( Ek Resimler )</b></label>
                                                <input type="file" class="form-control" wire:model="more_image" multiple/>
                                            </div>
                                            <div class="mb-3">
                                                <label>Dosyalar <b style="color:#9518A1">( İndirilebilir ek dosyalar (.pdf, .docx, .zip vb. )</b></label>
                                                <input type="file" class="form-control" wire:model="files"/>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger text-white font-medium waves-effect text-start" data-bs-dismiss="modal"> <i class="fa fa-arrow-left"></i> İptal</button>
                            <button type="submit" class="btn btn-info text-white font-medium waves-effect text-start" > <i class="fa fa-plus"></i> Ekle</button>
                        </div>
                    </div>
                </form>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        @if($posts->count() > 0 )
            <div class="table-responsive">
                <table id="scroll_hor"class="table table-striped table-bordered display nowrap"style="width: 100%">
                    <thead>
                    <!-- start row -->
                    <tr>
                        <th>#</th>
                        <th>Post Adı</th>
                        <th>Post İçeriği</th>
                        <th>Post Resmi</th>
                        <th>Durumu</th>
                        <th>İşlemler</th>
                    </tr>
                    <!-- end row -->
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->post_adi}}</td>
                            <td>{{$post->post_icerigi}}</td>{{--{{Str::words($p->post_icerigi, 8, '...')}}--}}
                            <td><img src="{{$post->image}}" width="50px;"></td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" wire:click="UpdateStatus({{$post->id}})" type="checkbox" id="flexSwitchCheckChecked" @if($post->status) checked @endif >
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-danger" wire:click="DeletePost({{$post->id}})"> <i class="fas fa-trash-alt"></i> Sil</button>
                                <a href="#edit-modal{{$post->id}}" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#edit-modal"><i class="fa fa-edit"></i> Düzenle</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <div  class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="edit-modal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form method="POST" wire:submit.prevent="UpdatePost">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="myLargeModalLabel">Post Düzenle {{$post->id}}</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Post Başlığı</label>
                            <input type="text" class="form-control" placeholder="Post Başlığı" wire:model="post_adi"/>
                        </div>
                        <div class="mb-3">
                            <label>Post Url'si (Boş bırakırsanız otomatik oluşturur)</label>
                            <input type="text" class="form-control" placeholder="Post Url'si" wire:model="post_url" />
                        </div>
                        <div class="mb-3">
                            <label>Post Video URL'si</label>
                            <input type="url" class="form-control" placeholder="Post Video URL'si" wire:model="video_url" />
                        </div>
                        <div class="mb-3">
                            <label>Meta Tagları</label>
                            <input type="text" class="form-control" placeholder="Meta Tagları" wire:model="meta_tag" />
                        </div>
                        <div class="mb-3">
                            <label>Post İçeriği</label>
                            <textarea class="form-control" rows="5"  wire:model="post_icerigi"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Kategoriler</label>
                            <select class="form-select col-12" id="inlineFormCustomSelect" wire:model="category">
                                <option selected>Kategori Seçin</option>
                                @foreach($categories as $c)
                                    <option value="{{$c->id}}">{{$c->categori_adi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label>Resim Yükle <b style="color:#9518A1">( Ana Resim )</b></label>
                                    <input type="file" class="form-control" wire:model="image"/>
                                </div>
                                <div class="mb-3">
                                    <label>Resim Yükle <b style="color:#9518A1">( Ek Resimler )</b></label>
                                    <input type="file" class="form-control" wire:model="more_image" multiple/>
                                </div>
                                <div class="mb-3">
                                    <label>Dosyalar <b style="color:#9518A1">( İndirilebilir ek dosyalar (.pdf, .docx, .zip vb. )</b></label>
                                    <input type="file" class="form-control" wire:model="files"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger text-white font-medium waves-effect text-start" data-bs-dismiss="modal"> <i class="fa fa-arrow-left"></i> İptal</button>
                        <button type="submit" class="btn btn-info text-white font-medium waves-effect text-start" > <i class="fa fa-plus"></i> Ekle</button>
                    </div>
                </div>

</div>





