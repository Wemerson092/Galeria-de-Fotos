window.addEventListener("DOMContentLoaded", () => {
    //pega todas as imagens
    var todas = document.querySelectorAll(".galeria img");

    if(todas.length>0) {
        for (let img of todas) {
            img.onclick = () => {
                /* sair de tela cheia */
                if(document.webkitFullscreenElement || document.fullscreenElement) {
                    if(document.exitFullscreen) { 
                        document.exitFullscreen();
                    } else if(document.webkitExitFullscreen) {
                        document.webkitExitFullscreen();
                    }
                }
                else {
                    if(img.requestFullscreen) {
                        img.requestFullscreen();
                    } else if(img.webkitRequestFullscreen) {
                        img.webkitRequestFullscreen();
                    }
                }
            }
        }
    }
})