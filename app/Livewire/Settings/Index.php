<?php

namespace App\Livewire\Settings;

use App\Models\Settings;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    public $saat_dilimi; public $uygulama_adi; public $login_url; public $site_durumu; public $coklu_dil; public $kayit_sys; public $yayin_onay; public $yorum_sys; public $yorum_onay_sys; public $slider; public $emoji_reaksiyon; public $emoji_turu; public $yazi_goruntuleme; public $rss; public $sayfa_yazi_sayisi;public $post_url;public $altbilgi;public $copyright;
    //Genel Ayarlar

    //Görsel Ayarlar
    public $renk;public $logo; public $mobil_logo; public $favicon;
    //Görsel Ayarlar

    //İletişim Ayarları
    public $adres; public $email; public $telefon; public $iletisim_icerik;
    //İletişim Ayarları

    //Sosyal Medya Ayarları
    public $facebook;public $twitter; public $instagram; public $pinterest; public $linkedin; public $vk;
    //Sosyal Medya Ayarları

    //Mail Ayarları
    public $email_yonetici;public $email_kutuphane;public $email_protokol;public $email_baslik;public $email_port;public $email_username;public $email_password;
    //Mail Ayarları

    //Dil Ayarları
    public $sys_dili; public $metin_dili;
    //Dil Ayarları

    //Google Recaptcha
    public $google_api; public $google_screet;

    public function mount()
    {
        $settings = Settings::first();

        $this->saat_dilimi = $settings->saat_dilimi;
        $this->uygulama_adi = $settings->uygulama_adi;
        $this->login_url = $settings->login_url;
        $this->site_durumu = $settings->site_durumu;
        $this->coklu_dil = $settings->coklu_dil;
        $this->kayit_sys = $settings->kayit_sys;
        $this->yayin_onay = $settings->yayin_onay;
        $this->yorum_sys = $settings->yorum_sys;
        $this->yorum_onay_sys = $settings->yorum_onay_sys;
        $this->slider = $settings->slider;
        $this->emoji_reaksiyon = $settings->emoji_reaksiyon;
        $this->emoji_turu = $settings->emoji_turu;
        $this->yazi_goruntuleme = $settings->yazi_goruntuleme;
        $this->rss = $settings->rss;
        $this->sayfa_yazi_sayisi = $settings->sayfa_yazi_sayisi;
        $this->post_url = $settings->post_url;
        $this->altbilgi = $settings->altbilgi;
        $this->copyright = $settings->copyright;
        $this->renk = $settings->renk;
        $this->adres = $settings->adres;
        $this->email = $settings->email;
        $this->telefon = $settings->telefon;
        $this->iletisim_icerik = $settings->iletisim_icerik;
        $this->facebook = $settings->facebook;
        $this->twitter = $settings->twitter;
        $this->instagram = $settings->instagram;
        $this->pinterest = $settings->pinterest;
        $this->linkedin = $settings->linkedin;
        $this->vk = $settings->vk;
        $this->email_yonetici = $settings->email_yonetici;
        $this->email_kutuphane = $settings->email_kutuphane;
        $this->email_protokol = $settings->email_protokol;
        $this->email_baslik = $settings->email_baslik;
        $this->email_port = $settings->email_port;
        $this->email_username = $settings->email_username;
        $this->email_password = $settings->email_password;
        $this->sys_dili = $settings->sys_dili;
        $this->metin_dili = $settings->metin_dili;
        $this->google_api = $settings->google_api;
        $this->google_screet = $settings->google_screet;
    }


     public function render()
    {
        $settings = Settings::all();
        return view('livewire.Settings.index',compact('settings'));
    }

    public function SaveAction()
    {
        $image = Settings::first();

        Settings::updateOrCreate(
            [
                'id'=> 1,
            ],
            [
                //Genel Ayarlar
                'saat_dilimi'=> $this->saat_dilimi,
                'uygulama_adi'=> $this->uygulama_adi,
                'login_url'=> $this->login_url,
                //Switch
                'site_durumu'=> $this->site_durumu,
                'coklu_dil'=> $this->coklu_dil,
                'kayit_sys'=> $this->kayit_sys,
                'yayin_onay'=> $this->yayin_onay,
                'yorum_sys'=> $this->yorum_sys,
                'yorum_onay_sys'=> $this->yorum_onay_sys,
                'slider'=> $this->slider,
                'emoji_reaksiyon'=> $this->emoji_reaksiyon,
                'emoji_turu'=> $this->emoji_turu,
                'yazi_goruntuleme'=> $this->yazi_goruntuleme,
                'rss'=> $this->rss,
                //Switch
                'sayfa_yazi_sayisi'=> $this->sayfa_yazi_sayisi,
                'post_url'=> $this->post_url,
                'altbilgi'=> $this->altbilgi,
                'copyright'=> $this->copyright,
                //Genel Ayarlar

                //Görsel Ayarlar
                'renk'=>$this->renk,
                'logo'=>$this->logo ? '/'.str_replace('public','storage',$this->logo->store('public/photos/settings')) : $image->logo,
                'mobil_logo'=>$this->mobil_logo ? '/'.str_replace('public','storage',$this->mobil_logo->store('public/photos/settings')) : $image->mobil_logo,
                'favicon'=>$this->favicon ? '/'.str_replace('public','storage',$this->favicon->store('public/photos/settings')) : $image->favicon,
                //Görsel Ayarlar

                //iletişim Ayarları
                'adres'=>$this->adres,
                'email'=>$this->email,
                'telefon'=>$this->telefon,
                //'iletisim_icerik'=>$this->iletisim_icerik,
                //iletişim Ayarları

                //Sosyal Medya Ayarları
                'facebook'=>$this->facebook,
                'twitter'=>$this->twitter,
                'instagram'=>$this->instagram,
                'pinterest'=>$this->pinterest,
                'linkedin'=>$this->linkedin,
                'vk'=>$this->vk,
                //Sosyal Medya Ayarları

                //Mail Ayarları
                'email_yonetici'=>$this->email_yonetici,
                'email_kutuphane'=>$this->email_kutuphane,
                'email_protokol'=>$this->email_protokol,
                'email_baslik'=>$this->email_baslik,
                'email_port'=>$this->email_port,
                'email_username'=>$this->email_username,
                'email_password'=>$this->email_password,
                //Mail Ayarları

                //Dil Ayarları
                'sys_dili'=>$this->sys_dili,
                'metin_dili'=>$this->metin_dili,
                //Dil Ayarları

                //Google Recaptcha
                'google_api'=>$this->google_api,
                'google_screet'=>$this->google_screet,
                //Google Recaptcha
            ]);

        return redirect()->to('settings');
    }

}
