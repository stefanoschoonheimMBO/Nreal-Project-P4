const bg_obj = document.querySelector(".bg-galaxy");

const options = {
    layers: 3,
    amount_per_layer: 50,
    layer_speeds: ["20s", "30s", "40s"],
};
const layers = [];

window.onload = () => {
    for (let i = 0; i < options.layers * 2; ++i) {
        const layer = document.createElement("div");
        layer.classList.add("layer");
        layer.style.setProperty(
            "--sped",
            options.layer_speeds[
                options.layer_speeds.length - 1 - Math.floor(i / 2)
            ]
        );

        for (let j = 0; j < options.amount_per_layer; ++j) {
            const star = document.createElement("div");
            star.classList.add("star");
            star.style.setProperty(
                "--color",
                `hsl(${Math.floor(Math.random() * 360)}, 100%, 50%)`
            );
            star.style.setProperty(
                "--pos-x",
                Math.floor(Math.random() * 100) + "%"
            );
            star.style.setProperty(
                "--pos-y",
                Math.floor(Math.random() * 100) + "%"
            );
            star.style.setProperty(
                "--size",
                (Math.floor(i / 2) * 2).toString()
            );

            layer.appendChild(star);
        }
        layers.push(layer);
        bg_obj.appendChild(layer);
    }
};
