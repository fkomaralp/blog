<div wire:ignore style="height: 130vh;">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Site Ayarları</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Site Ayarları</li>
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
    <div class="container-fluid" style="display: block">
        <div class="card shadow-sm">
            <div class="p-4">
                <ul class="nav nav-tabs mb-3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="#genelayarlar" data-bs-toggle="tab" aria-expanded="false" class="nav-link active" aria-selected="true" role="tab">
                            <i class="mdi mdi-home-variant d-lg-none d-block me-1"></i>
                            <span class="d-none d-lg-block">Genel Ayarlar</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#gorselayarlar" data-bs-toggle="tab" aria-expanded="true" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                            <i class="mdi mdi-account-circle d-lg-none d-blockme-1"></i>
                            <span class="d-none d-lg-block">Görsel Ayarlar</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#iletisim" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                            <i class="mdi mdi-settings-outline d-lg-none d-block me-1"></i>
                            <span class="d-none d-lg-block">İletişim Ayarları</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#sosyalmedya" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                            <i class="mdi mdi-settings-outline d-lg-none d-block me-1"></i>
                            <span class="d-none d-lg-block">Sosyal Medya Ayarları</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#mail" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                            <i class="mdi mdi-settings-outline d-lg-none d-block me-1"></i>
                            <span class="d-none d-lg-block">Mail Ayarları</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#dil" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                            <i class="mdi mdi-settings-outline d-lg-none d-block me-1"></i>
                            <span class="d-none d-lg-block">Dil Ayaları</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#google" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                            <i class="mdi mdi-settings-outline d-lg-none d-block me-1"></i>
                            <span class="d-none d-lg-block">Google Recaptcha</span>
                        </a>
                    </li>
                </ul>
                <form wire:submit.prevent="SaveAction">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="genelayarlar" role="tabpanel">
                            <div class="card card-body">
                                <div class="mb-3">
                                    <label>Saat Dilimi</label>
                                    <input type="text" class="form-control" placeholder="Saat Dilim" wire:model="saat_dilimi"/>
                                </div>
                                <div class="mb-3">
                                    <label>Uygulama Adı</label>
                                    <input type="text" class="form-control" placeholder="Uygulama Adı" wire:model="uygulama_adi" />
                                </div>
                                <div class="mb-3">
                                    <label>Yönetici Paneli Bağlantısı</label>
                                    <input type="text" class="form-control" placeholder="Yönetici Paneli Bağlantısı" wire:model="login_url" />
                                </div>
                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="96"><b>Site Durumu ( Aktif İse Site Bakıma Alınır )</b></label>
                                    <input class="form-check-input" type="checkbox" id="96" wire:model="site_durumu"  @if($site_durumu) checked @endif>
                                </div>
                                <div class="form-check form-switch mt-3">
                                    <label class="form-check-label" for="1">Çok Dilli Sistem</label>
                                    <input class="form-check-input" type="checkbox" id="1" wire:model="coklu_dil" @if($coklu_dil) checked @endif>
                                </div>
                                <div class="form-check form-switch mt-3">
                                    <label class="form-check-label" for="29">Kayıt Sistemi</label>
                                    <input class="form-check-input" type="checkbox" id="29" wire:model="kayit_sys" @if($kayit_sys) checked @endif>
                                </div>
                                <div class="form-check form-switch mt-3">
                                    <label class="form-check-label" for="3">Yayınlamadan Önce Yayınları Onaylayın</label>
                                    <input class="form-check-input" type="checkbox" id="3" wire:model="yayin_onay" @if($yayin_onay) checked @endif>
                                </div>
                                <div class="form-check form-switch mt-3">
                                    <label class="form-check-label" for="4">Yorum Sistemi</label>
                                    <input class="form-check-input" type="checkbox" id="4" wire:model="yorum_sys" @if($yorum_sys) checked @endif>
                                </div>
                                <div class="form-check form-switch mt-3">
                                    <label class="form-check-label" for="5">Yorum Onay Sistemi</label>
                                    <input class="form-check-input" type="checkbox" id="5" wire:model="yorum_onay_sys" @if($yorum_onay_sys) checked @endif>
                                </div>
                                <div class="form-check form-switch mt-3">
                                    <label class="form-check-label" for="6">Slider</label>
                                    <input class="form-check-input" type="checkbox" id="6" wire:model="slider" @if($slider) checked @endif>
                                </div>
                                <div class="form-check form-switch mt-3">
                                    <label class="form-check-label" for="7">Emoji Reaksiyonları </label>
                                    <input class="form-check-input" type="checkbox" id="7" wire:model="emoji_reaksiyon" @if($emoji_reaksiyon) checked @endif>
                                </div>
                                <div class="form-check form-switch mt-3">
                                    <label class="form-check-label" for="8">Emoji Reaksiyonları Türü <b style="color: red">(Açıksa Gif Destekler)</b> </label>
                                    <input class="form-check-input" type="checkbox" id="8" wire:model="emoji_turu" @if($emoji_turu) checked @endif>
                                </div>
                                <div class="form-check form-switch mt-3">
                                    <label class="form-check-label" for="9">Yazı Görüntüleme Sayısını Göster</label>
                                    <input class="form-check-input" type="checkbox" id="9" wire:model="yazi_goruntuleme" @if($yazi_goruntuleme) checked @endif>
                                </div>
                                <div class="form-check form-switch mt-3">
                                    <input class="form-check-input" type="checkbox" id="10">
                                    <label class="form-check-label" for="10" wire:model="rss" @if($rss) checked @endif>RSS</label>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label>Sayfa Başına Yazı Sayısı (Sayfalandırma)</label>
                                    <input type="text" class="form-control" placeholder="7" wire:model="sayfa_yazi_sayisi"/>
                                </div>
                                <div class="mb-3">
                                    <label>Post İsteğe Bağlı URL Düğmesi Adı</label>
                                    <input type="text" class="form-control" placeholder="Post İsteğe Bağlı URL Düğmesi Adı" wire:model="post_url"/>
                                </div>
                                <div class="mb-3">
                                    <label>Altbilgi Hakkında Bölüm</label>
                                    <input type="text" class="form-control" placeholder="Altbilgi Hakkında Bölüm" wire:model="altbilgi"/>
                                </div>
                                <div class="mb-3">
                                    <label>Copyright</label>
                                    <input type="text" class="form-control" placeholder="Copyright" wire:model="copyright"/>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="gorselayarlar" role="tabpanel">
                            <div class="mb-3">
                                <label for="hue-demo">Renk seç</label>
                                <input type="text" id="hue-demo" class="form-control demo" data-control="hue" value="#ff6161" wire:model="renk"/>
                            </div>
                            <div class="mb-3">
                                <labe>Logo ()</labe>
                                <input type="file" class="form-control" wire:model="logo">
                            </div>
                            <div class="mb-3">
                                <labe>Mobil Logo (180x50 px)</labe>
                                <input type="file" class="form-control" wire:model="mobil_logo">
                            </div>
                            <div class="mb-3">
                                <labe>Favicon</labe>
                                <input type="file" class="form-control" wire:model="favicon">
                            </div>
                        </div>
                        <div class="tab-pane" id="iletisim" role="tabpanel">
                            <div class="card card-body">
                                <div class="mb-3">
                                    <label>Adres</label>
                                    <input type="text" class="form-control" placeholder="Adres" wire:model="adres"/>
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Email" wire:model="email"/>
                                </div>
                                <div class="mb-3">
                                    <label>Telefon</label>
                                    <input type="text" class="form-control" placeholder="Telefon" wire:model="telefon"/>
                                </div>
                                {{--                                        <div class="mb-3">--}}
                                {{--                                            <textarea id="mymce"  wire:model="iletisim_icerik"></textarea>--}}
                                {{--                                        </div>--}}
                            </div>
                        </div>
                        <div class="tab-pane" id="sosyalmedya" role="tabpanel">
                            <div class="card card-body">
                                <h5>Buradaki verileri boş bırakırsanız sitede görünmeyecektir</h5>
                                <div class="mb-3">
                                    <label>Facebook Url</label>
                                    <input type="text" class="form-control" wire:model="facebook"/>
                                </div>
                                <div class="mb-3">
                                    <label>Google+</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="mb-3">
                                    <label>Twitter Url</label>
                                    <input type="text" class="form-control" wire:model="twitter"/>
                                </div>
                                <div class="mb-3">
                                    <label>Youtube</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="mb-3">
                                    <label>Instagram Url</label>
                                    <input type="text" class="form-control" wire:model="instagram"/>
                                </div>
                                <div class="mb-3">
                                    <label>VK Url</label>
                                    <input type="text" class="form-control" wire:model="vk"/>
                                </div>
                                <div class="mb-3">
                                    <label>Pinterest Url</label>
                                    <input type="text" class="form-control" wire:model="pinterest"/>
                                </div>
                                <div class="mb-3">
                                    <label>linkedin Url</label>
                                    <input type="text" class="form-control" wire:model="linkedin"/>
                                </div>
                                <div class="mb-3">
                                    <label>SoundCloud</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="mb-3">
                                    <label>Theaders</label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="mail" role="tabpanel">
                            <div class="card card-body">
                                <div class="mb-3">
                                    <label>Email <b style="color:red;"> (Yönetici e-postaları bu adrese gönderilecek)</b></label>
                                    <input type="text" class="form-control" wire:model="email_yonetici"/>
                                </div>
                                <div class="mb-3">
                                    <label>Posta Kütüphanesi</label>
                                    <select class="form-control" wire:model="email_kutuphane">
                                        <option selected>Kütüphane Seç</option>
                                        <option value="laravel">Laravel Mailer</option>
                                        <option>Swift Mailer</option>
                                        <option>Php Mailer</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Protokol</label>
                                    <select class="form-control" wire:model="email_protokol">
                                        <option selected>Protokol Seç</option>
                                        <option value="smtp" selected>SMTP</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Başlık</label>
                                    <input type="text" class="form-control" wire:model="email_baslik"/>
                                </div>
                                {{--                                <div class="mb-3">--}}
                                {{--                                    <label>Host</label>--}}
                                {{--                                    <input type="text" class="form-control"/>--}}
                                {{--                                </div>--}}
                                <div class="mb-3">
                                    <label>Port</label>
                                    <input type="text" class="form-control"wire:model="email_port" />
                                </div>
                                <div class="mb-3">
                                    <label>Görünen Ad</label>
                                    <input type="text" class="form-control" wire:model="email_username"/>
                                </div>
                                <div class="mb-3">
                                    <label>Şifre</label>
                                    <input type="text" class="form-control" wire:model="email_password"/>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="dil" role="tabpanel">
                            <div class="card card-body">
                                <div class="mb-3">
                                    <label>Site Dili</label>
                                    <select class="form-control" id="exampleFormControlSelect1" wire:model="sys_dili">
                                        <option selected>Sistem Dili Seçin</option>
                                        <option value="ingilizce">İngilizce</option>
                                        <option value="turkce">Tükrçe</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Metin Düzenleyici Dili</label>
                                    <select class="form-control" id="exampleFormControlSelect1" wire:model="metin_dili">
                                        <option selected>Metin Dili Seçin</option>
                                        <option value="ingilizce">İngilizce</option>
                                        <option value="turkce">Tükrçe</option>
                                    </select>
                                </div >
                            </div>
                        </div>
                        <div class="tab-pane" id="google" role="tabpanel">
                            <div class="card card-body">
                                <div class="mb-3">
                                    <label>Api Key</label>
                                    <input type="text" class="form-control"wire:model="google_api" />
                                </div>
                                <div class="mb-3">
                                    <label>Screet Key</label>
                                    <input type="text" class="form-control"wire:model="google_screet" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-info font-medium rounded-pill px-4 mb-3 float-right">
                        <div class="d-flex align-items-center">
                            <i data-feather="send" class="feather-sm fill-white me-2"></i>Kaydet
                        </div>
                    </button>
                </form>
            </div>
        </div>


    </div>
</div>
