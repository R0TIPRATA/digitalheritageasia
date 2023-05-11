var filePath1 = null;
var filePath2 = null;
var selectedFilePathsrc = null;
var fullURL = null;
const gallery = document.getElementById('gallery');
const popup = document.getElementById('popup');
const popupbg = document.getElementById('popup-bg');
const selectedImage = document.getElementById('selectedImage');
const prev = document.getElementsByClassName('prev')[0];
const next = document.getElementsByClassName('next')[0];

var selectedIndex = null;
var nextIndex;
var prevIndex;
var nextIndexURL = null;
var prevIndexURL = null;
var arrSize = null;

var panoViewerURL;
var panorama;
var container;
var viewer;



const show360Viewer = function(){
  panoViewerURL = "https://ik.imagekit.io/kuborkassim/360_pictures/IMG_20220301_094702_00_cleanmerged_LMbS8FPvx.jpg";
  panorama = new PANOLENS.ImagePanorama(panoViewerURL);
  container = document.querySelector( '#main-360-viewer' );
  viewer = new PANOLENS.Viewer( { container: container } );
  viewer.add( panorama );
};

const initializeFilePaths = function (fp1,fp2) {
  if(fp1){
    filePath1 = fp1;
    arrSize = fp1.length;
  }
  if(fp2){
    filePath2 = fp2;
    arrSize = fp2.length;
  }
//  console.log("fp1: " + fp1);
//  console.log("fp2: " + fp2);
};

// const getImage = function (fullURL,currentIndex) {
//     if (selectedImage){ 
//       selectedImage.src = fullURL; 
//     }else{
//       console.log("hey hey hey!");
//       panorama = new PANOLENS.ImagePanorama(fullURL);
//       container = document.querySelector( '#main-360-viewer' );
//       viewer = new PANOLENS.Viewer( { container: container } );
//       viewer.add( panorama );
//     }  
//     popup.style.transform = `translateY(0)`;
//     popup.style.zIndex = "3";

//     selectedIndex = currentIndex;
//     //console.log("Selected index: " + selectedIndex);


//     setNextIndexURL(selectedIndex); //how to get nextindexurl? need to pass next index
//     //setPrevIndexURL(selectedIndex);
//     // console.log("Next index: " + nextIndex);
//     // console.log("Next index url: " + nextIndexURL);
//     // console.log("Prev index: " + prevIndex);
//     // console.log("Prev index url: " + prevIndexURL);
// }

const getImage = function (index, filePathSrc) { //(fullURL,currentIndex) {
  console.log("index: " + index);
  // console.log("fp1: " + filePath1);
  // console.log("fp2: " + filePath1);
  console.log("filepathSRC:" + filePathSrc);
  selectedFilePathsrc = filePathSrc;
  if(filePathSrc == "/photo_archive"){
    fullURL = filePath1[index][0];
  }else{
    fullURL = filePath2[index][0];
  }

  selectedImage.src = fullURL;
  popup.style.transform = `translateY(0)`;
  popup.style.zIndex = "5";
  popupbg.focus();

  selectedIndex = index;
  nextIndexURL = setNextIndex(index);
  prevIndexURL = setPrevIndex(index);
};

const setPrevIndex = function (selectedIndex) {
  if (selectedIndex == 0) {
    prevIndex = arrSize - 1;
  } else {
    prevIndex = selectedIndex - 1;
  }
};

const setNextIndex = function (selectedIndex) {
  if (selectedIndex == arrSize - 1) {
    nextIndex = 0;
  } else {
    nextIndex = selectedIndex + 1;
  }
};


const getNextIndexURL = function (e) {
  getImage(nextIndex,selectedFilePathsrc); //need to pass imagefilesrc
};

const getPrevIndexURL = function (e) {
  getImage(prevIndex,selectedFilePathsrc); //need to pass imagefilesrc
};

const closePopup = function(e){
  popup.style.transform = `translateY(-100%)`;
  if(selectedFilePathsrc == '/360_pictures' || selectedFilePathsrc == '/360_videos'){
    console.log("resetting panorama...");
    resetPanorama();
  }else{
    selectedImage.src = "";
  }
    popup.src = "";
    popup.alt = "";
    selectedIndex = null;
    prevIndex = null;
    currentIndex = null;
};


const resetPanorama = function(){
  viewer.remove(panorama);
  panorama.dispose(fullURL);
};

popupbg.addEventListener('click', (e) => {
  if (e.target === popupbg) {
    closePopup();
  }
});

prev.addEventListener('click', function(e){
  getPrevIndexURL();
});

popupbg.addEventListener('keydown', function(e){
  // console.log(e.key);
  const key = e.key; 
  if(key === "ArrowLeft"){
    getPrevIndexURL(); //need to pass imagefilesrc
  }else if(key === "ArrowRight"){
    getNextIndexURL(); //need to pass imagefilesrc
  }else if (key==="Escape"){
    closePopup();
  }
});

next.addEventListener('click', function(e){
  getNextIndexURL();
});

// next.addEventListener('keydown', function(e){
//   console.log(e.key);
//   const key = e.key; 
//   if(key === "ArrowRight"){
//     prev.tabIndex = -1;
//     getNextIndexURL();
//   }
// });

// press < button, call prevURL()

// function prevURL() {
//   //set prev index?
//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//      //change < link to something else
//     }
//   };
//   //send next image
//   xmlhttp.open("GET", "images.php?q=" + str, true);
//   xmlhttp.send();
// }


