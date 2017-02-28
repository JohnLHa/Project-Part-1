window.onload = function() {
    var div = document.getElementById("images");

    for(var i = 0; i < images.length; ++i) {
        var img = document.createElement("img");
        img.src = images[Math.floor(Math.rand() * 10)];
        div.appendChild(img);
    }
};