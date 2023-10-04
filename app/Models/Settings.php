<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $fillable =[
        "saat_dilimi",
        "uygulama_adi",
        "login_url",
        "site_durumu",
        "coklu_dil",
        "kayit_sys",
        "yayin_onay",
        "yorum_sys",
        "yorum_onay_sys",
        "slider",
        "emoji_reaksiyon",
        "emoji_turu",
        "yazi_goruntuleme",
        "rss",
        "sayfa_yazi_sayisi",
        "post_url",
        "altbilgi",
        "copyright",
        "renk",
        "logo",
        "mobil_logo",
        "favicon_logo",
        "adres",
        "email",
        "telefon",
        //"iletisim_icerik",
        "facebook",
        "twitter",
        "instagram",
        "pinterest",
        "linkedin",
        "vk",
        "email_yonetici",
        "email_kutuphane",
        "email_protokol",
        "email_baslik",
        "email_port",
        "email_username",
        "email_password",
        "sys_dili",
        "metin_dili",
        "google_api",
        "google_screet"
    ];

}
