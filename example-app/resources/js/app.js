import './bootstrap';
import '../css/app.css'; // [tl! add]
import { formToJSON } from 'axios';

document.addEventListener("DOMContentLoaded", function() {
    const frontButton = document.getElementById("frontButton");
    const backButton = document.getElementById("backButton");
    const photo = document.getElementById("photo");
    const overlayFront = document.getElementById("overlayFront");
    const overlayBack = document.getElementById("overlayBack");
    const dropdown = document.getElementById("dropdown");


    photo.src = frontImageSrc;
    overlayFront.style.display = "flex";
    overlayBack.style.display = "none";

    frontButton.addEventListener("change", function() {
        if (this.checked) {
            photo.src = frontImageSrc;
            overlayFront.style.display = "flex";
            overlayBack.style.display = "none";
        }
    });

    backButton.addEventListener("change", function() {
        if (this.checked) {
            photo.src = backImageSrc;
            overlayFront.style.display = "none";
            overlayBack.style.display = "flex";
        }
    });

    dropdown.addEventListener("click", function(event) {
        const target = event.target; // クリックされた要素を取得

        // クリックされた要素がdropdown-itemであるかを確認
        if (target.classList.contains("dropdown-item")) {
            const imageSrc = target.getAttribute("data-image-src");


            // frontButtonが選択されている場合
            if (document.getElementById("frontButton").checked) {
                overlayFront.style.backgroundImage = `url(${imageSrc})`;
                overlayFront.style.backgroundSize = "contain";
                overlayFront.style.backgroundRepeat = "no-repeat";
                overlayFront.style.backgroundPosition = "center center";
            }

            // backButtonが選択されている場合
            if (document.getElementById("backButton").checked) {
                overlayBack.style.backgroundImage = `url(${imageSrc})`;
                overlayBack.style.backgroundSize = "cover";
                overlayBack.style.backgroundPosition = "center center";
            }
        }
    });

});
