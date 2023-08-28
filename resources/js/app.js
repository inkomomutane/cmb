import "./bootstrap";
import "flowbite";
// Default theme
import "@splidejs/splide/css";
import Splide from "@splidejs/splide";

new Splide(".splide", {
    type: "loop",
    autoplay: true,
    arrows: false,
    perPage: 1,
}).mount();
