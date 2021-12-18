// create an array of image sources;
let images = [
    'img0.jpg', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg', 'img6.jpg', 'img7.jpg'
]
let i = 0;

//add initial image to canvas
let canvas = document.getElementById('container');
canvas.style.background = `url(./images/${images[0]})`;

//add eventListeners to arrows
let arrows = document.querySelectorAll('.arrow');

arrows.forEach(function (arrow) {
    arrow.addEventListener('click', function (e) {
        if (e.target.id === "left") {
            //check to see if at beginning of array
            i--;
            if (i < 0) {
                i = images.length - 1;
            }
            canvas.style.background = `url(./images/${images[i]})`;
            canvas.style.backgroundSize = "cover";
            canvas.style.backgroundPosition = "center";
        } else if (e.target.id === "right") {
            i++;
            if (i >= images.length) {
                i = 0;
            }
            canvas.style.background = `url(./images/${images[i]})`;
            canvas.style.backgroundSize = "cover";
            canvas.style.backgroundPosition = "center";
        }
    })
});

