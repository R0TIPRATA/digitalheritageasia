var isVid = false;
var filePath1 = null;
var filePath2 = null;
var arrSize1 = null;
var arrSize2 = null;
var selectedFilePathsrc = null;
var fullURL = null;
const gallery = document.getElementById('gallery');
var popup = document.getElementById('popup');
var popupbg = document.getElementById('popup-bg');
const selectedImage = document.getElementById('selectedImage');
const prev = document.getElementsByClassName('prev')[0];
const next = document.getElementsByClassName('next')[0];
const prev2 = document.getElementById('prev-vid');
const next2 = document.getElementById('next-vid');

var selectedIndex = null;
var nextIndex ;
var prevIndex;
var nextIndexURL = null;
var prevIndexURL = null;

var panoViewerURL;
var panorama;
var container;
var viewer;

var vidpanoViewerURL;
var vidpanorama;
var vidcontainer;
var vidviewer;


const initializeFilePaths = function (fp1,fp2) {
  filePath1 = fp1;
  arrSize1 = fp1.length;
  filePath2 = fp2;
  arrSize2 = fp2.length;
};


const getImage = function (index, filePathSrc) { //(fullURL,currentIndex) {
  
  console.log("index: " + index);
  //console.log("filepathSRC:" + filePathSrc);
  selectedFilePathsrc = filePathSrc;
  var arrSize; 

  if(filePathSrc == "/360_pictures"){
    isVid = false;
    fullURL = filePath1[index][0];
    console.log("fullURL:" + fullURL);
    arrSize = arrSize1;
    popup = document.getElementById('popup');
    popupbg = document.getElementById('popup-bg');

    if(!panorama){
      container = document.querySelector('#photo-360-viewer');
      viewer = new PANOLENS.Viewer( { container: container } );
    }
    panorama = new PANOLENS.ImagePanorama(fullURL);
    viewer.add( panorama );

  }else{ //360_video
    isVid = true;
    console.log("hi1");
    fullURL = filePath2[index][0];
    arrSize = arrSize2;
    popup = document.getElementById('popup2');
    popupbg = document.getElementById('popup2-bg');
    
    if(!vidpanorama){
      console.log( document.querySelector('#vid-360-viewer'));
      vidcontainer = document.querySelector('#vid-360-viewer');
      vidviewer = new PANOLENS.Viewer( { container: vidcontainer } );
    }
    console.log("fullURL: " + fullURL);
    vidpanorama = new PANOLENS.VideoPanorama(fullURL); //video element
    var videoType = document.createAttribute("type");
    videoType.value="mp4/video";
    var el = vidpanorama.videoElement;
    console.log(el instanceof Element); //true!
    console.log("vidPanorama: ");
    console.dir(vidpanorama.videoElement);
    // vidpanorama.muted=false;
    // var panovid = vidpanorama.src;
    // console.log("panovid: " + panovid);
    // var text = Object.values(panovid);
    // console.log(text);
    // panovid.setAttribute('type', 'video/mp4');
    // console.log({
    //   src: panovid.getAttribute('src'),
    //   type: panovid.getAttribute('type'),
    // })
    vidviewer.add( vidpanorama );
    // var videlement = vidpanorama.getVideoElement();
    // var n = videlement.querySelectorAll( 'source' );
    // var text = "";
    // for(let x in n){
    //   text += n[x].nodeName + "<br>";
    // }
    // console.log("text: " + text);

  }

  popup.style.transform = `translateY(0)`;
  popup.style.zIndex = "5";
  // popupbg.addEventListener('click', (e) => {
  //   if (e.target === popupbg) {
  //     closePopup();
  //   }
  //   console.log("hello");
  // });

  selectedIndex = index;
  nextIndexURL = setNextIndex(index, arrSize);
  prevIndexURL = setPrevIndex(index, arrSize);
};

const setPrevIndex = function (selectedIndex,arrSize) {
  if (selectedIndex == 0) {
    prevIndex = arrSize - 1;
  } else {
    prevIndex = selectedIndex - 1;
  }
};

const setNextIndex = function (selectedIndex,arrSize) {
  if (selectedIndex == arrSize - 1) {
    nextIndex = 0;
  } else {
    nextIndex = selectedIndex + 1;
  }
};


const getNextIndexURL = function (e) {
  if(!isVid){
    resetPanorama();
  }else{
    resetVidPanorama();
  }
  getImage(nextIndex, selectedFilePathsrc); 
};

const getPrevIndexURL = function (e) {
  if(!isVid){
    resetPanorama();
  }else{
    resetVidPanorama();
  }
  getImage(prevIndex, selectedFilePathsrc); 
};

const closePopup = function(e){
  popup.style.transform = `translateY(-100%)`;
  popup.src = "";
  popup.alt = "";
  selectedIndex = null;
  prevIndex = null;
  currentIndex = null;
  if(!isVid){  
    resetPanorama();
  }else{
    resetVidPanorama();
  }
};


const resetPanorama = function(){
  viewer.remove(panorama);
  panorama.dispose(fullURL);
};

const resetVidPanorama = function(){
  vidviewer.remove(vidpanorama);
  vidpanorama.dispose(fullURL);
};


document.getElementById('popup').addEventListener('click', (e) => {
  if (e.target === popupbg) {
    closePopup();
  }
});

document.getElementById('popup2').addEventListener('click', (e) => {
  if (e.target === popupbg) {
    closePopup();
  }
});

prev.addEventListener('click', function(e){
  getPrevIndexURL();
});

next.addEventListener('click', function(e){
  getNextIndexURL();
});

prev2.addEventListener('click', function(e){
  getPrevIndexURL();
});

next2.addEventListener('click', function(e){
  getNextIndexURL();
});

const tablinks = document.getElementsByClassName("tablinks");

for (let i = 0; i < tablinks.length; i++) {
  tablinks[i]. addEventListener('click',function(e){
   var id = e.target.id;
    openTab(e,id);
  });  
};

//tabs movement
const openTab = function(e,id) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  console.log(document.getElementById(id+"-tab"));
  document.getElementById(id+"-tab").style.display = "block";
  e.currentTarget.className += " active";
};
