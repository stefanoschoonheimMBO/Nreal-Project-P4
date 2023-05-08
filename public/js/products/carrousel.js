const carrousel = document.querySelector(".buy-product .product .carrousel");
const images = document.querySelectorAll(
    ".buy-product .product .carrousel .imgs img"
);

const controls = document.querySelectorAll(
    ".buy-product .product .carrousel .controls .carrousel-btn"
);

let currentIndex = 0;
let maxIndex = images.length;

//@param index: number
const setImage = (index) => {
    let prevIndex = currentIndex;
    if (index < maxIndex) {
        currentIndex = index % maxIndex;
    }
    images[prevIndex].classList.remove("active");
    images[currentIndex].classList.add("active");
    controls[prevIndex].classList.remove("active");
    controls[currentIndex].classList.add("active");
};

const nextImage = () => {
    setImage(currentIndex + 1);
};

let interval = setInterval(() => {
    nextImage();
}, 5000);

controls.forEach((el) => {
    el.addEventListener("click", () => {
        clearInterval(interval);
        interval = setInterval(() => {
            nextImage();
        }, 5000);
        setImage(parseInt(el.dataset.index));
    });
});

// Default setup
images[0].classList.add("active");
controls[0].classList.add("active");
