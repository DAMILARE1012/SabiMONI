document.querySelector("#play").addEventListener("click", () => {
    console.log("hello im cliccked");
    const play = document.getElementById("video");
    console.log(play);
    console.log(typeof play);
    play.src = "assets/images/videos/dgvideowsound.mp4";

document.querySelector("#play").style.display = "none";
});
