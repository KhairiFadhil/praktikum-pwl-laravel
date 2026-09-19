<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - {{ $nama }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="bg"></div>
    <div class="bar-baran"></div>

    <main class="container">
        <div class="box-main slide-up">
            <div class="profile-section">
                <div class="profile-content">
                    <div class="avatar-wrap">
                        <div class="avatar-inner">
                            <img alt="Avatar" draggable="false" loading="lazy" width="104" height="104" class="avatar" src="{{ asset('asset/pfp.png') }}">
                        </div>
                    </div>
                    
                    <div class="data-diri">
                        <h1 class="username glitch-text" data-text="{{ $nama }}">{{ $nama }}</h1>
                        <div class="badge-wrap">
                            <div class="tooltip-wrap">
                                <div class="badge-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 250" width="18" height="18" class="icon-theme"><path d="M177.1 26c25.74.04 46.87 18.23 50.76 43.46.73 4.72-.01 9.65.18 14.47.05 1.34.64 3.03 1.6 3.9 9.93 9 16.11 20.02 17.28 33.4 1.21 13.84-1.42 26.8-10.9 37.66-.74.86-1.22 2.15-2.14 2.64-6.2 3.32-6.34 8.84-5.92 14.84 1.48 20.7-14.93 41.97-35.22 47.9a58 58 0 0 1-23.48 2.2c-10.97 13.98-24.64 22.75-43.99 22.82-19.28.07-32.55-9.09-43.68-22.76-11.7 1.49-22.67-.36-32.66-6.24-10.7-6.28-19.26-14.94-22.7-27.1-2.05-7.3-2.72-15.12-2.98-22.74-.1-3.05-.86-4.86-2.87-6.56-7.77-6.55-13.14-14.73-15.2-24.64-3.17-15.32-1.92-30.07 8.11-42.96 3-3.85 6.5-7.29 10.17-11.35-1.83-15.88.87-31.08 13.58-43.6 12.46-12.29 27.23-16.57 44.5-15C92 11.47 106.23 3.06 125.41 2.89s32.86 8.95 43.78 23.12zm32.83 64.74c-2.99-5.31-5.77-10.75-9-15.9-8.72-13.96-20.8-24.45-35.47-31.54-17.62-8.52-36.02-11.32-55.76-7.57-22.42 4.25-40.87 14.71-54.87 32.2-18.75 23.42-24.06 50.46-17.71 79.63a83.7 83.7 0 0 0 19 38c11.36 12.88 24.82 22.67 41.3 28.36 13.65 4.72 27.58 6.3 41.57 3.84a96 96 0 0 0 43.89-19.93c20.11-16.04 30.5-37.32 33.88-62.02 2.07-15.1-.63-30.12-6.83-45.07"></path><path d="M159.92 57.98c18.72 10.92 32.43 25.63 38.2 46.59 5.31 19.3 4.1 38.12-5.3 56.14-11.22 21.54-29.01 34.84-52.39 39.88-21.2 4.57-40.96-.4-58.5-13.22-13.27-9.7-22.82-22.38-28.08-38.01-4.53-13.46-5.9-27.29-1.7-41.04 2.28-7.5 4.83-15.25 9.03-21.75a94 94 0 0 1 17.7-20.33 67.2 67.2 0 0 1 38.21-15.88c9.18-.79 18.67.85 27.88 2.3 5.01.8 9.73 3.44 14.95 5.32M85.5 106l-5.5-4.18c0 7.69-.18 14.19.12 20.66a8.5 8.5 0 0 0 2.47 5.45c11.18 9.8 22.53 19.4 33.87 29 9.34 7.93 9.7 7.6 18.92-.65 8.77-7.86 18.3-14.88 27.18-22.62 3.54-3.08 8.04-6.7 8.97-10.79 1.5-6.55.4-13.7.4-21.68-6.17 5.2-11.5 9.69-16.82 14.2-8.88 7.54-17.83 15-26.56 22.71-1.99 1.76-3.24 1.44-4.88.06-12.56-10.55-25.11-21.1-38.18-32.17"></path></svg>
                                </div>
                                <div class="tooltip">
                                    <span>Student</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lokasi -->
                    <div class="Lokasi">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="13" height="13" class="icon-theme"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"></path></svg>
                        <p class="text-muted">Indonesia - Jakarta</p>
                    </div>

                    <div class="social-icons">
                        <a target="_blank" draggable="false" href="https://www.youtube.com/@kalri2232">
                            <div class="tooltip-wrap">
                                <div class="social-icon-hover">
                                    <div class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon-theme"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg>
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <span>Youtube</span>
                                    <div class="tooltip-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M16.6 17a1 1 0 0 1-.6-1v-2.5H3a1 1 0 0 1-1-1v-1q0-1 1-1h13V8a1 1 0 0 1 1.7-.7l4 4q.6.7 0 1.4l-4 4a1 1 0 0 1-1 .2"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a target="_blank" draggable="false" href="https://www.facebook.com/s4b3i/">
                            <div class="tooltip-wrap">
                                <div class="social-icon-hover">
                                    <div class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon-theme"><path d="M22.675 0h-21.35C.595 0 0 .595 0 1.326v21.348C0 23.405.595 24 1.326 24H12.82v-9.294H9.692V11.08h3.128V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.311h3.587l-.467 3.626H16.56V24h6.115C23.405 24 24 23.405 24 22.674V1.326C24 .595 23.405 0 22.675 0z"></path></svg>
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <span>Facebook</span>
                                    <div class="tooltip-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M16.6 17a1 1 0 0 1-.6-1v-2.5H3a1 1 0 0 1-1-1v-1q0-1 1-1h13V8a1 1 0 0 1 1.7-.7l4 4q.6.7 0 1.4l-4 4a1 1 0 0 1-1 .2"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a target="_blank" draggable="false" href="https://www.instagram.com/khairiefadhil/">
                            <div class="tooltip-wrap">
                                <div class="social-icon-hover">
                                    <div class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon-theme"><path d="M7.75 2C4.57 2 2 4.57 2 7.75v8.5C2 19.43 4.57 22 7.75 22h8.5C19.43 22 22 19.43 22 16.25v-8.5C22 4.57 19.43 2 16.25 2h-8.5zm0 1.5h8.5a4.25 4.25 0 0 1 4.25 4.25v8.5a4.25 4.25 0 0 1-4.25 4.25h-8.5A4.25 4.25 0 0 1 3.5 16.25v-8.5A4.25 4.25 0 0 1 7.75 3.5zm9.5 1.75a1 1 0 1 0 0 2 1 1 0 0 0 0-2zM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 1.5a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7z"></path></svg>
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <span>Instagram</span>
                                    <div class="tooltip-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M16.6 17a1 1 0 0 1-.6-1v-2.5H3a1 1 0 0 1-1-1v-1q0-1 1-1h13V8a1 1 0 0 1 1.7-.7l4 4q.6.7 0 1.4l-4 4a1 1 0 0 1-1 .2"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </a>


                        <a target="_blank" draggable="false" href="https://twitter.com">
                            <div class="tooltip-wrap">
                                <div class="social-icon-hover">
                                    <div class="icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon-theme"><path d="M24 4.557a9.8 9.8 0 0 1-2.828.775A4.93 4.93 0 0 0 23.337 3a9.86 9.86 0 0 1-3.127 1.195A4.92 4.92 0 0 0 16.616 2c-2.728 0-4.937 2.21-4.937 4.937 0 .387.044.764.127 1.124C7.728 7.86 4.1 5.885 1.671 2.905a4.9 4.9 0 0 0-.667 2.482 4.93 4.93 0 0 0 2.195 4.106 4.9 4.9 0 0 1-2.236-.616v.06c0 2.385 1.693 4.374 3.946 4.827a4.94 4.94 0 0 1-2.23.085 4.94 4.94 0 0 0 4.605 3.422A9.88 9.88 0 0 1 0 19.54a13.94 13.94 0 0 0 7.548 2.212c9.056 0 14.01-7.503 14.01-14.01 0-.213-.005-.426-.014-.637A10 10 0 0 0 24 4.557z"></path></svg>
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <span>Twitter</span>
                                    <div class="tooltip-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M16.6 17a1 1 0 0 1-.6-1v-2.5H3a1 1 0 0 1-1-1v-1q0-1 1-1h13V8a1 1 0 0 1 1.7-.7l4 4q.6.7 0 1.4l-4 4a1 1 0 0 1-1 .2"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <div class="social-boxes">
                <a target="_blank" draggable="false" class="box-simple spotify-link" href="https://open.spotify.com/playlist/5I0N2toixEX4MjLDxevOWr?si=yWnYgetFRLy-XtuIZwBHPQ">
                    <div class="spotify-inner">
                        <div class="spotify-icon-wrap">
                            <div class="spotify-icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon-theme"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"></path></svg>
                            </div>
                        </div>
                        <div class="spotify-text">
                            <p class="text-muted">My Playlist Gweh (Don't judge pls)</p>
                        </div>
                    </div>
                    <div class="spotify-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M16.6 17a1 1 0 0 1-.6-1v-2.5H3a1 1 0 0 1-1-1v-1q0-1 1-1h13V8a1 1 0 0 1 1.7-.7l4 4q.6.7 0 1.4l-4 4a1 1 0 0 1-1 .2"></path></svg>
                    </div>
                </a>
            </div>


            <div class="box-simple discord-presence">
                <div class="wrapper-avatar">
                    <div class="inner-avatar">
                        <img alt="Avatar" draggable="false" loading="lazy" width="78" height="78" class="avatar" src="{{ asset('asset/pfp.png') }}">
                    </div>
                </div>
                <div class="discord-content">
                    <div class="discord-user-row">
                        <div class="discord-name-badges">
                            <p class="discord-name">{{ $nama }}</p>
                            <div class="discord-badges">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="#F47B67"><path d="m12 20c4.4183 0 8-3.5817 8-8 0-4.41828-3.5817-8-8-8-4.41828 0-8 3.58172-8 8 0 4.4183 3.58172 8 8 8zm.7921-8.275 3.6146-2.3738c.0909-.05916.2013.03974.151.136l-1.4986 2.9416c-.0354.0707.0158.1537.0944.1537h.8973c.1033 0 .1457.1315.0618.1916l-4.0517 2.9027c-.0362.0265-.0856.0265-.1227 0l-4.05168-2.9027c-.08301-.0601-.04062-.1916.06182-.1916h.89634c.07948 0 .1307-.083.09449-.1537l-1.49862-2.9416c-.04945-.09626.06094-.19516.1519-.136l3.61545 2.3738c.0627.0415.113.098.1465.1651l.5511 1.1057c.0389.0777.1501.0777.189 0l.551-1.1057c.0336-.0671.0839-.1245.1466-.1651z"></path></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="18"><circle cx="15" cy="12" fill="#ffffff" r="6"></circle><path d="m2.20812 10.124c.42636 0 .7816-.34817.7816-.76611 0-.41793-.35524-.76615-.7816-.76615h-.42635c-.42636 0-.78177.34822-.78177.76615 0 .41794.35541.76611.78177.76611zm16.13038 9.2643c4.0504-1.811 5.7558-6.4083 3.9083-10.23937-1.2791-2.71657-3.9793-4.31859-6.8217-4.45801h-8.02965c-.71065 0-1.20812.55735-1.20812 1.18425 0 .69645.56859 1.18409 1.20812 1.18409h2.06067c.42635 0 .78158.34822.78158.76616 0 .41793-.35523.76632-.78158.76632h-5.04517c-.42635 0-.78176.34822-.78176.76615 0 .41794.35541.76611.78176.76611h3.62404c.42635 0 .78159.3484.78159.7664 0 .4179-.35524.7661-.78159.7661h-2.27402c-.42636 0-.7816.3482-.7816.7662 0 .4179.35524.7663.7816.7663h1.56336c.07112.8359.2843 1.6717.63954 2.4379 1.77654 3.8311 6.46643 5.5028 10.37463 3.7614zm-7.2725-5.1884c-1.0318-2.2025-.0466-4.80794 2.2003-5.81933 2.2469-1.0114 4.9049-.04564 5.9366 2.15683 1.0318 2.2025.0468 4.8079-2.2003 5.8193-2.2469 1.0114-4.9048.0457-5.9366-2.1568z" fill="#4f5d7f"></path><path d="m16.8142 9.86662 1.4212 2.36838c.0711.1392.0711.2089 0 .3482l-1.4212 2.3683c-.0711.1393-.2131.1393-.2842.1393h-2.7714c-.142 0-.2131-.0697-.2841-.1393l-1.4213-2.3683c-.0709-.1393-.0709-.209 0-.3482l1.4213-2.36838c.071-.13926.2132-.13926.2841-.13926h2.7714c.1422-.06971.2131 0 .2842.13926z" fill="#c5cedd"></path></svg>
                            </div>
                        </div>
                        <div class="discord-activity-text">
                            <p class="text-muted">NPM: {{ $npm }}</p>
                            <p class="text-muted">Kelas: {{ $kelas }}</p>
                        </div>
                    </div>
                    <img alt="Icon" draggable="false" loading="lazy" width="64" height="64" class="discord-activity-img" src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExZTdiNHcxeGJ0aGRmaWR4ajIzdjVjZ2xtOTc1b2libGl2dnM4NGVqNyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/xCtx06kFEc8mXJPAhc/giphy.gif">
                </div>
            </div>

            <!-- MUSIkkkkk-->
            <div class="box-simple music-player">
                <img alt="Cover" draggable="false" loading="lazy" width="78" height="78" class="track-cover" src="https://i.scdn.co/image/ab67616d0000b273e741f60a3fd2b7413c75fe9b">
                <div class="musik-container">
                    <audio id="audio" src="{{ asset('asset/melodiez.mp3') }}" loop preload="none"></audio>
                    <div class="musik-header">
                        <div class="track-title">Melodiez - Fury+</div>
                    </div>
                    <div class="musik-main">
                        <div class="musik-progress-section">
                            <div class="musik-time" id="current-time">00:00</div>
                            <div class="musik-progress-container" id="progress-container">
                                <div class="musik-progress-bar">
                                    <div class="musik-progress-filled" id="progress-filled"></div>
                                    <div class="musik-progress-indicator" id="progress-indicator"></div>
                                </div>
                            </div>
                            <div class="musik-time" id="total-time">00:00</div>
                        </div>
                        <div class="musik-controls-section">
                            <div class="musik-main-controls">
                                <button class="musik-play-btn" id="play-btn" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon-theme play-icon" id="play-svg"><path d="M21.4 9.4a3 3 0 0 1 0 5.2l-12.8 7C6.6 22.7 4 21.3 4 19V5c0-2.3 2.5-3.7 4.6-2.6z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon-theme pause-icon hidden" id="pause-svg"><path d="M6 4h4v16H6zm8 0h4v16h-4z"></path></svg>
                                </button>
                            </div>
                            <div class="musik-volume-controls">
                                <div class="musik-volume-container">
                                    <button class="musik-volume-btn" id="volume-btn" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" class="icon-theme"><path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3A4.5 4.5 0 0 0 14 7.97v8.05c1.48-.73 2.5-2.25 2.5-3.02z"></path></svg>
                                    </button>
                                    <div class="musik-volume-bar-area" id="volume-bar-area">
                                        <div class="musik-volume-bar">
                                            <div class="musik-volume-filled" id="volume-filled" style="width: 50%"></div>
                                            <div class="musik-volume-indicator" id="volume-indicator" style="left: 50%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="slide-up" style="animation-delay: 0.1s;">
            <span>Kalri 2026 &mdash; All Rights reserved</span>
        </footer>
    </main>

    <script>
        const audio = document.getElementById('audio');
        const playBtn = document.getElementById('play-btn');
        const playSvg = document.getElementById('play-svg');
        const pauseSvg = document.getElementById('pause-svg');
        const progressContainer = document.getElementById('progress-container');
        const progressFilled = document.getElementById('progress-filled');
        const progressIndicator = document.getElementById('progress-indicator');
        const currentTimeEl = document.getElementById('current-time');
        const totalTimeEl = document.getElementById('total-time');
        const volumeBarArea = document.getElementById('volume-bar-area');
        const volumeFilled = document.getElementById('volume-filled');
        const volumeIndicator = document.getElementById('volume-indicator');
        audio.volume = 0.5;
        playBtn.addEventListener('click', () => {
            if (audio.paused) {
                audio.play();
                playSvg.classList.add('hidden');
                pauseSvg.classList.remove('hidden');
            } else {
                audio.pause();
                pauseSvg.classList.add('hidden');
                playSvg.classList.remove('hidden');
            }
        });

        audio.addEventListener('timeupdate', () => {
            const pct = (audio.currentTime / audio.duration) * 100 || 0;
            progressFilled.style.width = pct + '%';
            progressIndicator.style.left = pct + '%';
            currentTimeEl.textContent = fmt(audio.currentTime);
        });

        audio.addEventListener('loadedmetadata', () => {
            totalTimeEl.textContent = fmt(audio.duration);
        });

        progressContainer.addEventListener('click', e => {
            const rect = progressContainer.getBoundingClientRect();
            const pct = (e.clientX - rect.left) / rect.width;
            audio.currentTime = pct * audio.duration;
        });

        volumeBarArea.addEventListener('click', e => {
            const rect = volumeBarArea.getBoundingClientRect();
            const pct = Math.max(0, Math.min(1, (e.clientX - rect.left) / rect.width));
            audio.volume = pct;
            volumeFilled.style.width = (pct * 100) + '%';
            volumeIndicator.style.left = (pct * 100) + '%';
        });
        function fmt(s) {
            if (isNaN(s)) return '00:00';
            const m = Math.floor(s / 60), sec = Math.floor(s % 60);
            return (m < 10 ? '0' : '') + m + ':' + (sec < 10 ? '0' : '') + sec;
        }

    </script>
</body>
</html>
