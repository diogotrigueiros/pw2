function playAudio(audioId) {
    var audio = document.getElementById(audioId);
    audio.play();
}

function stopAudio(audioId) {
    var audio = document.getElementById(audioId);
    audio.pause();
    audio.currentTime = 0;
}