
let galleryWrapper = document.querySelector('.gallery-wrapper');


fetch('/projektarbete-webbproduktion/images.json')
.then(function (response) {
    return response.json();
})
.then(data => {
    createImage(data);
})
.catch(error => console.log(error));


function createImage(images) {

images.forEach((image) => {
        let imgTagg = `<div class="image-container"><img class="gallery-image" src="${image.url}"></div>`; // skapa en <p> tagg (obs detta är en sträng fortfarande)

        galleryWrapper.innerHTML += imgTagg;
    });


}