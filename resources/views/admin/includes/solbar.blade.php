<nav class="sidebar-nav">
    <ul id="sidebarnav">

        <li class="sidebar-item">
            <a
                class="sidebar-link waves-effect waves-dark sidebar-link"
                href="{{route('dashboard')}}"
                aria-expanded="false">
                <i data-feather="home" class="feather-icon"></i
                ><span class="hide-menu">Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a
                class="sidebar-link has-arrow waves-effect waves-dark"
                href="#"
                aria-expanded="false">
                <i data-feather="message-square" class="feather-icon"></i>
                <span class="hide-menu">Yorum Sistemi</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('comments.index')}}"
                        aria-expanded="true">
                        <i data-feather="message-circle" class="feather-icon">
                        </i><span class="hide-menu">Yorumlar</span>
                    </a>
                </li>
                @if($settings->yorum_onay_sys)
                    <li class="sidebar-item">
                        <a
                            class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="#####"
                            aria-expanded="true">
                            <i data-feather="message-circle" class="feather-icon">
                            </i><span class="hide-menu">Bekleyen Yorumlar</span>
                        </a>
                    </li>
                @endif
            </ul>
        </li>
        <li class="sidebar-item">
            <a
                class="sidebar-link has-arrow waves-effect waves-dark"
                href="#"
                aria-expanded="false">
                <i data-feather="user" class="feather-icon"></i>
                <span class="hide-menu">Kullanıcı Ayarları</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="#£>"
                        aria-expanded="true">
                        <i data-feather="user-plus" class="feather-icon">
                        </i><span class="hide-menu">Yöneticiler</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('users.index')}}"
                        aria-expanded="true">
                        <i data-feather="users" class="feather-icon">
                        </i><span class="hide-menu">Üyeler</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a
                class="sidebar-link has-arrow waves-effect waves-dark"
                href="#"
                aria-expanded="false">
                <i data-feather="send" class="feather-icon"></i>
                <span class="hide-menu">Post Ayarları</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('posts.index')}}"
                        aria-expanded="true">
                        <i data-feather="edit-3" class="feather-icon">
                        </i><span class="hide-menu">Post</span>
                    </a>
                </li>
            </ul>

        </li>
        <li class="sidebar-item">
            <a
                class="sidebar-link has-arrow waves-effect waves-dark"
                href="#"
                aria-expanded="false">
                <i data-feather="copy" class="feather-icon"></i>
                <span class="hide-menu">Kategori Yönetimi</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('categories.index')}}"
                        aria-expanded="true">
                        <i data-feather="edit-3" class="feather-icon">
                        </i><span class="hide-menu">Kategoriler</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="#########"
                        aria-expanded="true">
                        <i data-feather="edit-3" class="feather-icon">
                        </i><span class="hide-menu">Alt Kategoriler</span>
                    </a>
                </li>
            </ul>

        </li>
        <li class="sidebar-item">
            <a
                class="sidebar-link has-arrow waves-effect waves-dark"
                href="#"
                aria-expanded="false">
                <i data-feather="server" class="feather-icon"></i>
                <span class="hide-menu">Genel Ayarlar</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('settings.index')}}"
                        aria-expanded="true">
                        <i data-feather="settings" class="feather-icon">
                        </i><span class="hide-menu">Site Ayarları</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="#>£½>"
                        aria-expanded="true">
                        <i data-feather="bold" class="feather-icon"></i>
                        <span class="hide-menu">Font Ayarları</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="#>£½>"
                        aria-expanded="true">
                        <i data-feather="dollar-sign" class="feather-icon"></i>
                        <span class="hide-menu">Reklam Alanları</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a
                class="sidebar-link waves-effect waves-dark sidebar-link"
                href="{{route('theme.index')}}"
                aria-expanded="true">
                <i data-feather="menu" class="feather-icon"></i>
                <span class="hide-menu">Temalar</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a
                class="sidebar-link waves-effect waves-dark sidebar-link"
                href="{{route('socialmedia.index')}}"
                aria-expanded="true">
                <i data-feather="menu" class="feather-icon"></i>
                <span class="hide-menu">Sosyal Medya Ayarları</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a
                class="sidebar-link waves-effect waves-dark sidebar-link"
                href="#£"
                aria-expanded="true">
                <i data-feather="image" class="feather-icon"></i
                ><span class="hide-menu">Slider Yönetimi</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a
                class="sidebar-link waves-effect waves-dark sidebar-link"
                href="{{route('contact.index')}}"
                aria-expanded="true">
                <i data-feather="mail" class="feather-icon"></i
                ><span class="hide-menu">İletişim Mesajları</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a
                class="sidebar-link waves-effect waves-dark sidebar-link"
                href="#!!!"
                aria-expanded="true">
                <i data-feather="link" class="feather-icon"></i
                ><span class="hide-menu">Link Yönetimi</span>
            </a>
        </li>

    </ul>
</nav>
