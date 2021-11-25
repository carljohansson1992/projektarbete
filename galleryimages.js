
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
    console.log(jsonImages[3].url);
})
.catch(error => console.log(error));
};

console.log(jsonImages);
/*function createPopup(){
    let popUpImg = document.createElement('img');
    let popUpText = document.createElement('p');

    popUpImg.className = "popup-img";
    popUpImg.setAttribute('src', image.url);
        
    popUpText.className = "popup-text";
    popUpText.textContent = image.description;

    popupCont.appendChild(popUpImg);
    popupCont.appendChild(popUpText);
}
*/
function createImage(images)    {
    
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

        //let descriptionElement = document.createElement('p');
        //descriptionElement.textContent = image.description;
       // descriptionElement.className = 'gallery-description';

        //let popUpImg = document.createElement('img');
        //let popUpText = document.createElement('p');

        /*function popup(){
            
           
            popupCont.style.display = "flex";
        
            popUpImg.className = "popup-img";
            popUpImg.setAttribute('src', image.url);
        
            popUpText.className = "popup-text";
            popUpText.textContent = image.description;
        
            console.log(image.url);
        }*/

        galleryWrapper.appendChild(testDiv);
        testDiv.appendChild(titleElement);
        testDiv.appendChild(img);
        //testDiv.appendChild(descriptionElement);
        //popupCont.appendChild(popUpImg);
        //popupCont.appendChild(popUpText);


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
    
    popupCont.replaceChildren(popUpImg, popUpText);
    console.log(currentImg.url);

}
//function popup(){
    //fetchImages(createPopup);
    //popupCont.style.display = "flex";
//}
//function popup(e){
   // console.log([0]);
//}

/*function popup(){
    
    popupCont.style.display = "block";

    popUpImg.className = "popup-img";
    popUpImg.setAttribute('src', image.url);

    popUpText.className = "popup-text";
    popUpText.textContent = image.description;

    console.log(image.url);
}*/
    

        
    //function popup(){
    //popupCont.style.display = "block";
    //console.log(image.url);
//}
/* window.addEventListener('click', closePop);
function closePop(){
    popupCont.style.display = "none";
    console.log("close");
} */
 