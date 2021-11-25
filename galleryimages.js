
let galleryWrapper = document.querySelector('.gallery-wrapper');
let popupCont = document.querySelector('.popup-container');

fetch('/projektarbete-webbproduktion/images.json')
.then(function (response) {
    return response.json();
})
.then(data => {
    createImage(data);
})
.catch(error => console.log(error));


function createImage(images)    {

images.forEach((image) => {
        
        let testDiv = document.createElement('div');
        testDiv.className = 'image-container';
        

        let titleElement = document.createElement('h2');
        titleElement.textContent = image.title;
        titleElement.className = 'gallery-title';

        let img = document.createElement('img');
        img.className = 'gallery-image';
        img.setAttribute('src', image.url);
        img.setAttribute('alt', image.alt);
        img.addEventListener('click', popup);

        let popUpImg = document.createElement('img');
        let popUpText = document.createElement('p');

        function popup(){

    

            popupCont.style.display = "flex";
        
            popUpImg.className = "popup-img";
            popUpImg.setAttribute('src', image.url);
        
            popUpText.className = "popup-text";
            popUpText.textContent = image.description;
        
            console.log(image.url);
        }

        galleryWrapper.appendChild(testDiv);
        testDiv.appendChild(titleElement);
        testDiv.appendChild(img);
        popupCont.appendChild(popUpImg);
        popupCont.appendChild(popUpText);


    });
}
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
 