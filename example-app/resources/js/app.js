import './bootstrap';
import '../css/app.css'; // [tl! add]

document.addEventListener("DOMContentLoaded", function() {
    const frontButton = document.getElementById("frontButton");
    const backButton = document.getElementById("backButton");
    const photo = document.getElementById("photo");
    const overlayImage = document.getElementById("overlayImage");

    frontButton.addEventListener("change", function() {
        if (this.checked) {
            photo.src = frontImageSrc;
        }
    });

    backButton.addEventListener("change", function() {
        if (this.checked) {
            photo.src = backImageSrc;
        }
    });
});
