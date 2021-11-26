
let galleryWrapper = document.querySelector('.gallery-wrapper');
let popupCont = document.querySelector('.popup-container');
let jsonImages;

fetchImages(createImage);

function fetchImages(x){
    fetch('/projektarbete-webbproduktion/images.json')
    .then(function (response) {
        return response.json();
    })
    .then(data => {
        jsonImages = data;
        x(data);
    })
    .catch(error => console.log(error));
}



function createImage(images){
    
images.forEach((image, index) => {
        
        let testDiv = document.createElement('div');
        testDiv.className = 'image-container';
        testDiv.setAttribute('src', image.url);

        let titleElement = document.createElement('h2');
        titleElement.textContent = image.title;
        titleElement.className = 'gallery-title';

        let img = document.createElement('img');
        img.className = 'gallery-image';
        img.setAttribute('src', image.url);
        img.setAttribute('alt', image.alt);
        img.setAttribute('title', image.description);
        img.dataset.index = index;
        img.addEventListener('click', popup);

        galleryWrapper.appendChild(testDiv);
        testDiv.appendChild(titleElement);
        testDiv.appendChild(img);
    });
}

function popup(e){
    
    let popUpImg = document.createElement('img');
    let currentImg = jsonImages[e.target.dataset.index];

    popupCont.style.display = "flex";
    popUpImg.className = "popup-img";
    popUpImg.setAttribute('src', currentImg.url);


    let popUpText = document.createElement('p');
    popUpText.textContent = currentImg.description;
    popUpText.className = "popup-text";

    let quit = document.createElement('button');
    quit.textContent = "X";
    quit.className = "quit-button";
    quit.addEventListener('click', closePop);
    
    popupCont.replaceChildren(popUpImg, popUpText, quit);
    console.log(currentImg.url);
}

function closePop(){
    
    popupCont.style.display = "none";
}

 