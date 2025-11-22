const INTERVAL = 3000
let currentSlide = 0
const images = document.querySelectorAll(".slide")

export default function Slider(){
    setInterval(initSlider, INTERVAL)
}

function initSlider(){
    currentSlide = (currentSlide + 1)%images.length
    slideNext()
}

function slideNext(){
    images.forEach(image=>{
        image.style.transform = `translateX(-${currentSlide * 100}%)`
    })
}