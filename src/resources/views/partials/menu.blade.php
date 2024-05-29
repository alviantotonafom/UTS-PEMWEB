<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="{{ Url('/') }}">
            Sekolah XYZ
        </a>
    </div>

    <ul class="c-sidebar-nav">
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('frontend_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/daftar-layanans*") ? "c-show" : "" }} {{ request()->is("admin/profiles*") ? "c-show" : "" }} {{ request()->is("admin/abouts*") ? "c-show" : "" }} {{ request()->is("admin/blogs*") ? "c-show" : "" }} {{ request()->is("admin/galleries*") ? "c-show" : "" }} {{ request()->is("admin/tims*") ? "c-show" : "" }} {{ request()->is("admin/sosial-media*") ? "c-show" : "" }} {{ request()->is("admin/footers*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-globe c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.frontend.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('daftar_layanan_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.daftar-layanans.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/daftar-layanans") || request()->is("admin/daftar-layanans/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-concierge-bell c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.daftarLayanan.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('profile_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.profiles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/profiles") || request()->is("admin/profiles/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-user-circle c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.profile.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('about_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.abouts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/abouts") || request()->is("admin/abouts/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-address-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.about.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('blog_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.blogs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/blogs") || request()->is("admin/blogs/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-newspaper c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.blog.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('gallery_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.galleries.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/galleries") || request()->is("admin/galleries/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-camera-retro c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.gallery.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('tim_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.tims.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/tims") || request()->is("admin/tims/*") ? "c-active" : "" }}">
                                <i class="fa-fw fab fa-teamspeak c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.tim.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('sosial_medium_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.sosial-media.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sosial-media") || request()->is("admin/sosial-media/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-share-square c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.sosialMedium.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('footer_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.footers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/footers") || request()->is("admin/footers/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-shoe-prints c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.footer.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('dataInduk_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/gurudantenagakependidikans*") ? "c-show" : "" }} {{ request()->is("admin/jenisgtks*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fa fa-university c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.dataInduk.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('gurudantenagakependidikan_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.gurudantenagakependidikans.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/gurudantenagakependidikans") || request()->is("admin/gurudantenagakependidikans/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-user-circle c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.gurudantenagakependidikan.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('jenisgtk_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.jenisgtks.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/jenisgtks") || request()->is("admin/jenisgtks/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-chalkboard-teacher c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.jenisgtk.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>