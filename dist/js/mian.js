const header=document.querySelector('.main-head');

window.addEventListener('scroll',()=>{

    const scrollpos=window.scrollY;
    if(scrollpos>10){
       header.classList.add('scrolled'); 
    }else{
        header.classList.remove('scrolled');
    }
})

/*
slider part start
*/ 

///get slider item 
var sliderImages = Array.from(document.querySelectorAll('.slider-controls .images img'));

console.table(sliderImages);

///slider number of slide
var count = sliderImages.length;

// set current slide
var currentslide = 1;
// date and time / writer
var slidernumber = document.getElementById('slider-number');

// buttons
var nextbtn = document.getElementById('next');
var prevbtn = document.getElementById('prev');

//pagination 

var pageElement = document.createElement('ul');
/// set attrribute to ul
pageElement.setAttribute('id','pagination');

 var paginationActive = document.getElementById('pagination');

for(var i = 1; i <= count; i++){


  var pagiItem = document.createElement('li');
   
   pagiItem.setAttribute('data-index',i);

   pagiItem.appendChild(document.createTextNode(i));

   pageElement.appendChild(pagiItem);


}

console.log(pageElement);
console.log(pagiItem);
document.getElementById('ind').appendChild(pageElement);

var pagearr = Array.from(document.querySelectorAll('.slider-indcators .ind ul li'));

console.log(pagearr);

// btn functions
function nextSlide () {

if(nextbtn.classList.contains('disabled')){


    return false;
}
else{
 currentslide++;
   checker();

}

  
}

nextbtn.onclick = nextSlide;

function prevSlide () {

    if(prevbtn.classList.contains('disabled')){


        return false;
    }
    else{
    
        currentslide--;
       checker();
    
    }
}

prevbtn.onclick = prevSlide;

//put class active
function checker (){

    slidernumber.textContent = 'slide' + (currentslide) + 'of' + (count);

    removeClasses();

    sliderImages[currentslide - 1].classList.add("active");

  pageElement.children[currentslide - 1].classList.add("active");

  //add or remove disabled class
  if(currentslide == 1){

  prevbtn.classList.add('disabled');

  }else{

  prevbtn.classList.remove('disabled');

  }
  if(currentslide == count){

    nextbtn.classList.add('disabled');
  
    }else{
  
    nextbtn.classList.remove('disabled');
  
    }

}


 checker();


 ///romove class active
function removeClasses(){

    sliderImages.forEach(function(img){

img.classList.remove('active');
   
});

    pagearr.forEach(function (bullet) {

bullet.classList.remove('active');
   
});
}
/*
slider part end
*/ 

