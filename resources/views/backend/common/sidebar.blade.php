<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('backend.home') }}">
                <img src="{{ asset('') }}backend/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{ asset('') }}backend/assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                <img src="{{ asset('') }}backend/assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                <img src="{{ asset('') }}backend/assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
            </a><!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu">
                <li>
                    <h3>Menu</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('backend.home') }}">
                        {{-- <svg xmlns="http:// www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z"/></svg> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 36 36" fill="none">
                            <path d="M25.18 12.32l-5.91 5.81a3 3 0 1 0 1.41 1.42l5.92-5.81z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18 4.25A16.49 16.49 0 0 0 5.4 31.4l.3.35H30.3l.3-.35A16.49 16.49 0 0 0 18 4.25zM29.34 29.75H6.66a14.43 14.43 0 0 1-3.11-7.84H7v-2H3.55A14.41 14.41 0 0 1 7 11.29l2.45 2.45 1.41-1.41L8.43 9.87A14.41 14.41 0 0 1 17 6.29v3.5h2V6.3a14.47 14.47 0 0 1 13.4 13.61H28.92v2h3.53A14.43 14.43 0 0 1 29.34 29.75z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <li>
                    <h3>Components</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('message.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 20.2895V5C3 3.89543 3.89543 3 5 3H19C20.1046 3 21 3.89543 21 5V15C21 16.1046 20.1046 17 19 17H7.96125C7.35368 17 6.77906 17.2762 6.39951 17.7506L4.06852 20.6643C3.71421 21.1072 3 20.8567 3 20.2895Z"/>
                        </svg>
                        <span class="side-menu__label">Messages</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19,2H9C7.3438721,2.0018311,6.0018311,3.3438721,6,5v1H5C3.3438721,6.0018311,2.0018311,7.3438721,2,9v10c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-1h1c1.6561279-0.0018311,2.9981689-1.3438721,3-3V5C21.9981689,3.3438721,20.6561279,2.0018311,19,2z M17,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8h14V19z M17,10H3V9c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V10z M21,15c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-1V9c-0.0008545-0.7719116-0.3010864-1.4684448-0.7803345-2H21V15z M21,6H7V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V6z"/></svg> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M24 24H0V3h5V0h2v3h10V0h2v3h5v21zM2 22h20V5H2v3h20v2H2v12zM20 19H8v-2h12v2zM6 19H4v-2h2v2zM20 15H8v-2h12v2zM6 15H4v-2h2v2z"/>
                        </svg>
                        <span class="side-menu__label">Schedule</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Schedule</a></li>
                        <li><a href="{{ route('schedule.create') }}" class="slide-item">Create Schedule</a></li>
                        <li><a href="{{ route('schedule.index') }}" class="slide-item">All Schedules</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19,2H9C7.3438721,2.0018311,6.0018311,3.3438721,6,5v1H5C3.3438721,6.0018311,2.0018311,7.3438721,2,9v10c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-1h1c1.6561279-0.0018311,2.9981689-1.3438721,3-3V5C21.9981689,3.3438721,20.6561279,2.0018311,19,2z M17,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8h14V19z M17,10H3V9c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V10z M21,15c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-1V9c-0.0008545-0.7719116-0.3010864-1.4684448-0.7803345-2H21V15z M21,6H7V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V6z"/></svg> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 108.582 108.582">
                            <path d="M78.119 73.246c-6.566-3.363-13.357-6.156-20.227-8.791-.513-.193-1.123-.588-1.336-1.035-.562-1.24-.947-2.555-1.354-3.85-.248-.836-.471-1.615-1.379-2.021-.248-.106-.471-.584-.471-.895.055-3.016-.648-6.182 1.592-8.813.068-.082.098-.197.145-.295 1.209-2.639 1.414-5.66 3.104-8.121.043-.053.053-.135.061-.205.197-1.883.396-3.748.559-5.623.017-.23-.186-.645-.387-.717-.928-.324-.879-1.076-.873-1.82 0-3.664 0-4.195-.006-7.859 0-2.131-.627-4.021-2.234-5.473-1.835-1.646-3.718-3.24-5.604-4.83-.904-.77-.99-1.363-.135-2.207.379-.375.857-.645 1.297-.957-.098-.145-.193-.287-.287-.432-.57 0-1.143-.074-1.693.008-2.086.338-4.18.633-6.223 1.113-3.908.922-7.703 2.143-10.871 4.76-2.164 1.785-3.895 3.867-4.115 6.813-.109 1.543-.096 3.098-.109 4.637-.012 2.521.023 1.908-.031 4.418-.014.41-.238 1.084-.525 1.174-1.016.332-1.049.982-.908 1.83.1.584.025 1.191.152 1.762.35 1.574.725 3.148 1.178 4.695.334 1.154.988 2.244 1.176 3.416.359 2.344 1.234 4.381 2.818 6.152.256.295.453.783.424 1.174-.125 1.797-.311 3.604-.555 5.396-.051.348-.416.871-.713.938-1.201.244-1.383 1.166-1.672 2.104-.373 1.232-.777 2.461-1.254 3.652-.148.373-.521.758-.889.926-2.127.922-4.299 1.777-6.445 2.679-2.281.959-4.588 1.877-6.818 2.936-2.299 1.103-4.531 2.337-6.779 3.546-1.326.707-2.563 1.493-3.598 2.467L0 89.236c15.256 0 23.221 11.031 39.098 12.391l-5.85-8.072 9.07-24.811-2.805-6.025h5.619l-2.814 6.025 9.072 24.811-5.695 7.877c11.559-1.936 30.006-12.195 38.956-12.195L81.52 75.73c-.961-.984-2.092-1.812-3.401-2.484z"/>
                            <path d="M89.391 6.955c-10.582 0-19.19 8.609-19.19 19.191 0 .418.016.84.045 1.273l-8.81 5.725c-.526.344-.801.967-.692 1.586.104.621.569 1.117 1.182 1.266l13.445 3.246c3.627 3.879 8.707 6.094 14.021 6.094 10.582 0 19.191-8.607 19.191-19.189S99.973 6.955 89.391 6.955zM89.391 42.187c-4.582 0-8.957-1.971-12.004-5.406-.213-.24-.496-.41-.809-.486l-10.361-2.502 6.541-4.25c.502-.326.775-.908.707-1.502-.078-.67-.117-1.289-.117-1.895 0-8.846 7.197-16.043 16.043-16.043s16.043 7.197 16.043 16.043-7.198 16.041-16.043 16.041z"/>
                            <path d="M83.561 25.6h-2.664v9.215h2.664z"/>
                            <path d="M90.473 21.936h-2.664v13.213h2.664z"/>
                            <path d="M97.08 14.816h-2.666v20h2.666z"/>
                        </svg>
                        <span class="side-menu__label">About</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">About</a></li>
                        <li><a href="{{ route('about.create') }}" class="slide-item">Create About</a></li>
                        <li><a href="{{ route('about.show') }}" class="slide-item">View About</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19,2H9C7.3438721,2.0018311,6.0018311,3.3438721,6,5v1H5C3.3438721,6.0018311,2.0018311,7.3438721,2,9v10c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-1h1c1.6561279-0.0018311,2.9981689-1.3438721,3-3V5C21.9981689,3.3438721,20.6561279,2.0018311,19,2z M17,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8h14V19z M17,10H3V9c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V10z M21,15c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-1V9c-0.0008545-0.7719116-0.3010864-1.4684448-0.7803345-2H21V15z M21,6H7V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V6z"/></svg> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 32 32" fill="none">
                            <path d="M8 16c0 1.105-.895 2-2 2s-2-.895-2-2c0-1.105.895-2 2-2s2 .895 2 2zM30.973 3.329l-1.025 6.153c-.546 3.273-2.512 6.096-5.393 7.742L21 19.272V24c0 4.411-3.589 8-8 8s-8-3.589-8-8v-4.141C3.278 19.412 2 17.862 2 16c0-2.209 1.791-4 4-4s4 1.791 4 4c0 1.862-1.278 3.412-3 3.859V24c0 1.796.797 3.406 2.051 4.506C9.03 28.339 9 28.173 9 28c0-2.206 1.794-4 4-4s4 1.794 4 4c0 .173-.03.339-.051.506C18.203 27.406 19 25.796 19 24v-4.76l-3.555-2.016c-2.881-1.646-4.847-4.469-5.393-7.742L9.027 3.329C8.931 2.748 9.094 2.156 9.474 1.707 9.854 1.258 10.411 1 11 1h1.277C12.624.405 13.262 0 14 0c1.105 0 2 .895 2 2 0 1.105-.895 2-2 2-.738 0-1.376-.405-1.723-1H11.59c-.309 0-.544.277-.493.582l.929 5.571c.444 2.667 2.064 4.992 4.412 6.334l1.853 1.059C18.811 16.844 19.4 17 20 17s1.189-.156 1.71-.454l1.852-1.058c2.348-1.342 3.969-3.668 4.413-6.336l.928-5.57C28.954 3.277 28.719 3 28.41 3h-.687C27.376 3.595 26.738 4 26 4c-1.105 0-2-.895-2-2s.895-2 2-2c.738 0 1.376.405 1.723 1H29c.589 0 1.146.258 1.526.707C30.906 2.156 31.069 2.748 30.973 3.329zM6 19c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zM15 28c0-1.103-.897-2-2-2s-2 .897-2 2 .897 2 2 2 2-.897 2-2z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="side-menu__label">Treatment</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Treatment</a></li>
                        <li><a href="{{ route('treatment.create') }}" class="slide-item">Create Treatment</a></li>
                        <li><a href="{{ route('treatment.index') }}" class="slide-item">View Treatments</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19,2H9C7.3438721,2.0018311,6.0018311,3.3438721,6,5v1H5C3.3438721,6.0018311,2.0018311,7.3438721,2,9v10c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-1h1c1.6561279-0.0018311,2.9981689-1.3438721,3-3V5C21.9981689,3.3438721,20.6561279,2.0018311,19,2z M17,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8h14V19z M17,10H3V9c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V10z M21,15c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-1V9c-0.0008545-0.7719116-0.3010864-1.4684448-0.7803345-2H21V15z M21,6H7V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V6z"/></svg> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 1024 1024" fill="none">
                            <path d="M632 698.3l141.9-112c4.1-3.2 4.1-9.4 0-12.6L632 461.7c-5.3-4.2-13-0.4-13 6.3v76H295c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h324v76c0 6.7 7.8 10.4 13 6.3zM893.3 293.3L730.7 130.7c-7.5-7.5-16.7-13-26.7-16V112H144c-17.7 0-32 14.3-32 32v278c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V184h136v136c0 17.7 14.3 32 32 32h320c17.7 0 32-14.3 32-32V205.8l136 136V422c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-83.5c0-17-6.7-33.2-18.7-45.2zM640 288H384V184h256v104zM904 724h-56c-4.4 0-8 3.6-8 8v108H184V732c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v148c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V732c0-4.4-3.6-8-8-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="side-menu__label">Treatment Procedure</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Treatment Procedure</a></li>
                        <li><a href="{{ route('procedure.create') }}" class="slide-item">Create Procedure</a></li>
                        <li><a href="{{ route('procedure.index') }}" class="slide-item">All Procedures</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,21H20V4.5C20,4.223877,19.776123,4,19.5,4S19,4.223877,19,4.5V21h-3v-8.5c0-0.276123-0.223877-0.5-0.5-0.5S15,12.223877,15,12.5V21h-3V8.5C12,8.223877,11.776123,8,11.5,8S11,8.223877,11,8.5V21H8v-4.5C8,16.223877,7.776123,16,7.5,16S7,16.223877,7,16.5V21H3V2.5C3,2.223877,2.776123,2,2.5,2S2,2.223877,2,2.5v19.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z"/></svg> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M21 6.5C21 5.12 19.88 4 18.5 4h-13C4.12 4 3 5.12 3 6.5v11C3 18.88 4.12 20 5.5 20h13c1.38 0 2.5-1.12 2.5-2.5v-11zM10 16V8l6 4-6 4z"/>
                        </svg>
                        <span class="side-menu__label">Video</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Video</a></li>
                        <li><a href="{{ route('video.add') }}" class="slide-item">Add Video</a></li>
                        <li><a href="{{ route('video.index') }}" class="slide-item">All Videos</a></li>
                    </ul>
                </li>
                <li>
                    <h3>Email</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('email.inbox') }}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="side-menu__icon"
                            viewBox="0 0 24 24">
                            <path d="M21 4V3H3v1H2v16h1v1h18v-1h1V4h-1zM20 7h-1v1h-2v1h-2v1h-2v1h-2v-1H9V9H7V8H5V7H4V6h1V5h14v1h1v1zM20 18h-1v1H5v-1H4v-8h1v1h2v1h2v1h1v1h4v-1h1v-1h2v-1h2v-1h1v8z"/>
                        </svg>
                        <span class="side-menu__label">Email</span>
                    </a>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>
<!--/APP-SIDEBAR-->