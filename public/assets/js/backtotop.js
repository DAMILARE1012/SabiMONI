window.addEventListener("scroll", () => {
    let backToTop = document.querySelector("#backToTOP");
    if (window.scrollY > 1000) {
        backToTop.style.display = "block";
    } else {
        backToTop.style.display = "none";
    }
});
document.getElementById("backToTOP").addEventListener("click", () => {
    window.scrollTo(0, 0);
});
