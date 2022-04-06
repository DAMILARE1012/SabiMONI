const play = document.getElementById("video");

// document.querySelector("#video").addEventListener("DOMContentLoaded", () => {
//     play.src = "";
// });
document.querySelector("#play").addEventListener("click", () => {
    // console.log("hello im cliccked");

    // console.log(play);
    // console.log(typeof play);
    play.play()

    document.querySelector("#play").style.display = "none";
});