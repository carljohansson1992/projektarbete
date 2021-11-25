
let galleryWrapper = document.querySelector('.gallery-wrapper');
let popupCont = document.querySelector('.popup-container');

fetchImages(createImage);

function fetchImages(x){
fetch('/projektarbete-webbproduktion/images.json')
.then(function (response) {
    return response.json();
})
.then(data => {
    x(data);
})
.catch(error => console.log(error));
};

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
        img.setAttribute('title', image.description);
        img.addEventListener('click', popup);



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
        //popupCont.appendChild(popUpImg);
        //popupCont.appendChild(popUpText);


    });
}
function popup(e){

    let popUpImg = document.createElement('img');
    let popUpText = document.createElement('p');

    popupCont.style.display = "flex";

    popUpImg.className = "popup-img";
    popUpImg.setAttribute('src', e.target.src);
        
    popUpText.className = "popup-text";
    popUpText.textContent = e.target.title;

    popupCont.appendChild(popUpImg);
    popupCont.appendChild(popUpText);
    console.log(e.target);
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
 