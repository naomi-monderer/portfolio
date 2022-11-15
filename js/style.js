document.addEventListener('DOMContentLoaded',()=>
{
    
// cursor     
 const innerCursor  = document.querySelector('.inner-cursor');
 const outerCursor = document.querySelector('.outer-cursor');

 document.addEventListener('mousemove', moveCursor)

 function moveCursor(e){
      
    let x = e.clientX;
    let y = e.clientY;

    innerCursor.style.left = `${x}px`;
    innerCursor.style.top = `${y}px`;
    outerCursor.style.left = `${x}px`;
    outerCursor.style.top = `${y}px`;

 }
     
 
let links = Array.from(document.querySelectorAll("a"));
let paragraphs = Array.from(document.querySelectorAll("p"));
let images = Array.from(document.getElementsByTagName("img"));
let titresh1 = Array.from(document.getElementsByTagName("h1"));
let titresh2 = Array.from(document.getElementsByTagName("h2"));

console.log(images);
console.log(links);
console.log(paragraphs)

links.forEach((link) => {

    link.addEventListener('mouseover', () => {
        innerCursor.classList.add("grow")
    });


    link.addEventListener('mouseleave', () => {
        innerCursor.classList.remove("grow")
    });
    
});

images.forEach((image) => {

    image.addEventListener('mouseover', () => {
        innerCursor.classList.add("grow")
    });


    image.addEventListener('mouseleave', () => {
        innerCursor.classList.remove("grow")
    });
});
1898
paragraphs.forEach((paragraph) => {

    paragraph.addEventListener('mouseover', () => {
        innerCursor.classList.add("grow")
    });


    paragraph.addEventListener('mouseleave', () => {
        innerCursor.classList.remove("grow")
    });
    
});

titresh1.forEach((titre) => {

    titre.addEventListener('mouseover', () => {
        innerCursor.classList.add("grow")
    });


    titre.addEventListener('mouseleave', () => {
        innerCursor.classList.remove("grow")
    });
    
});

titresh2.forEach((titre) => {

    titre.addEventListener('mouseover', () => {
        innerCursor.classList.add("grow")
    });


    titre.addEventListener('mouseleave', () => {
        innerCursor.classList.remove("grow")
    });
    
});



})