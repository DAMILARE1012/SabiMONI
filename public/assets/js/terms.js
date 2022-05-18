const terms_visibility = document.getElementById("term_visibility");
const agree_display = document.getElementById("agree_display");
const margin_remove = document.getElementById("margin_remove");
document
    .getElementById("terms_and_conditions")
    .addEventListener("click", () => {
        if (terms_visibility.style.display === "block") {
            terms_visibility.style.display = "none";
        } else {
            terms_visibility.style.display = "block";
            window.scrollTo(0, document.body.scrollHeight);
        }
    });
document
    .getElementById("terms_and_conditions_2")
    .addEventListener("click", () => {
        if (terms_visibility.style.display === "block") {
            terms_visibility.style.display = "none";
        } else {
            terms_visibility.style.display = "block";
            window.scrollTo(0, document.body.scrollHeight);
        }
    });

document.getElementById("agree").addEventListener("click", () => {
    agree_display.style.display = "none";
    margin_remove.style.marginBottom = "20px";
});
