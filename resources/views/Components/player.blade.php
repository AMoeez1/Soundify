<div class="bg-gray-400 text-white p-2 rounded-xl shadow-xl">
    <div class="flex items-center justify-between w-full p-2 cursor-pointer">
        <div class="flex items-center">
            <img src="{{ asset('storage/' . $song->cover) }}" alt="{{ $song->artist_name . "'s" . $song->song_name }}"
                class="w-12 rounded-lg mr-2" />
            <div>
                <span class="font-semibold">{{ $song->song_name }}</span>
                <p class="text-muted-foreground">{{ $song->artist_name }}</p>
            </div>
        </div>
        <div class="flex gap-8 items-center">
            <i class="fa fa-backward"></i>
            <i class="fa fa-play text-3xl block" id="play" onclick="playAudio('{{ asset('storage/' . $song->audio) }}')"></i>
            <i class="fa fa-pause text-3xl hidden" id='pause' onclick="pauseAudio('{{asset('storage/'. $song->audio)}}')"></i>
            <i class="fa fa-forward"></i>
        </div>
        <div class="flex items-center space-x-2">
            <i class="fa fa-heart-o hover:text-red-500 text-xl"></i>
        </div>
    </div>
</div>

<script>
function playAudio(audioSrc) {
    const audioPlayer = document.getElementById('audioPlayer');
    const playButton = document.getElementById('play');
    const pauseButton = document.getElementById('pause') 
    playButton.classList.add('hidden');
    pauseButton.classList.remove('hidden');
    audioPlayer.src = audioSrc;
    audioPlayer.play();
}

function pauseAudio(audio){
    const audioPlayer = document.getElementById('audioPlayer');
    const playButton = document.getElementById('play');
    const pauseButton = document.getElementById('pause') 
    playButton.classList.remove('hidden');
    pauseButton.classList.add('hidden');
    audioPlayer.src = audio;
    audioPlayer.pause();
}

</script>
