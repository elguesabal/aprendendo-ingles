for(let e=97;e<123;e++)document.getElementById(String.fromCharCode(e)).addEventListener("click",()=>{new Audio(`/assets/letters/${String.fromCharCode(e)}.mp3`).play()});
