<div wire:ignore style="height: 100vh;">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Yorumlar</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Yorumlar</li>
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
        <div class="table-responsive mt-5">
            <table id="scroll_hor"class="table table-striped table-bordered display nowrap"style="width: 100%">
                <thead>
                <!-- start row -->
                <tr>
                    <th>#</th>
                    <th>Paylaşan Kişi</th>
                    <th>Yorum İçeriği</th>
                    <th>Yorum Yapılan Post</th>
                    <th>İp Adresi</th>
                    <th>Durumu</th>
                    <th>İşlemler</th>
                </tr>
                <!-- end row -->
                </thead>
                <tbody>
                @foreach($comments as $comment)
                    <tr>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->name}}</td>
                        <td>{{Str::words($comment->comment_detail, 8, '...')}}</td>
                        <td>{{$comment->post_id}}</td>{{-- Yorumların post_id ile postun kendi adı eşleşecek --}}
                        <td>{{$comment->ip_adress}}</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" wire:click="UpdateStatus({{$comment->id}})" type="checkbox"  id="flexSwitchCheckChecked" @if($comment->status) checked @endif >
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-danger" wire:click="CommentDelete({{$comment->id}})"><i class="fas fa-trash-alt"></i> Sil</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
