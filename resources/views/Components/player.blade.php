<div class="bg-gray-400 text-white p-2 rounded-xl shadow-xl">
    <div class="flex items-center justify-between w-full p-2 cursor-pointer">
        <div class="flex items-center">
            <img src="" alt="" id="cover" class="w-12 rounded-lg mr-2" />
            <div>
                <span class="font-semibold" id="song"></span>
                <p class="text-muted-foreground" id="artist"></p>
            </div>
        </div>
        <div class="flex gap-8 items-center">
            <i class="fa fa-backward"></i>
            <i class="fa fa-play text-3xl block" onclick="playAudio()" id="play"></i>
            <i class="fa fa-pause text-3xl hidden" onclick="pauseAudio()" id='pause'></i>
            <i class="fa fa-forward"></i>
        </div>
        <div class="flex items-center space-x-2">
            <i class="fa fa-heart-o hover:text-red-500 text-xl"></i>
        </div>
    </div>
</div>
<audio id="audioPlayer" controls style="display: none;">
    <source id="audioSource" src="" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
{{-- <script>
    function playAudio(audioSrc, songName, artistName, cover) {
        const audioPlayer = document.getElementById('audioPlayer');
        const playButton = document.getElementById('play');
        const pauseButton = document.getElementById('pause')
        const artist = document.getElementById('artist')
        const song = document.getElementById('song')
        const coverImg = document.getElementById('cover')
        artist.innerText = artistName
        song.innerText = songName
        coverImg.src = cover
        playButton.classList.add('hidden');
        pauseButton.classList.remove('hidden');
        audioPlayer.src = audioSrc;
        audioPlayer.play();
    }

    function pauseAudio(audio) {
        const audioPlayer = document.getElementById('audioPlayer');
        const playButton = document.getElementById('play');
        const pauseButton = document.getElementById('pause')
        playButton.classList.remove('hidden');
        pauseButton.classList.add('hidden');
        audioPlayer.src = audio;
        audioPlayer.pause();
    }
</script> --}}
<script>
    let currentAudioSrc = '';
    let isPlaying = false;

    function loadSavedSong() {
        const savedAudioSrc = localStorage.getItem('audioSrc');
        const savedSongName = localStorage.getItem('songName');
        const savedArtistName = localStorage.getItem('artistName');
        const savedCover = localStorage.getItem('cover');

        if (savedAudioSrc && savedSongName && savedArtistName && savedCover) {
            currentAudioSrc = savedAudioSrc;
            document.getElementById('song').innerText = savedSongName;
            document.getElementById('artist').innerText = savedArtistName;
            document.getElementById('cover').src = savedCover;
        }
    }

    function playAudio(audioSrc, songName, artistName, cover) {
        const audioPlayer = document.getElementById('audioPlayer');
        const playButton = document.getElementById('play');
        const pauseButton = document.getElementById('pause');

        if (currentAudioSrc !== audioSrc) {
            currentAudioSrc = audioSrc;
            document.getElementById('artist').innerText = artistName;
            document.getElementById('song').innerText = songName;
            document.getElementById('cover').src = cover;

            localStorage.setItem('audioSrc', audioSrc);
            localStorage.setItem('songName', songName);
            localStorage.setItem('artistName', artistName);
            localStorage.setItem('cover', cover);

            audioPlayer.src = currentAudioSrc;
        }

        if (!isPlaying) {
            audioPlayer.play();
            playButton.classList.add('hidden');
            pauseButton.classList.remove('hidden');
            isPlaying = true;
        }
    }

    function pauseAudio() {
        const audioPlayer = document.getElementById('audioPlayer');
        const playButton = document.getElementById('play');
        const pauseButton = document.getElementById('pause');

        audioPlayer.pause();
        playButton.classList.remove('hidden');
        pauseButton.classList.add('hidden');
        isPlaying = false;
    }

    window.onload = loadSavedSong;
</script>
