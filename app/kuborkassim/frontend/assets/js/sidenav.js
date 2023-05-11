//sidenav
scrollTo = (element) => {
    window.scroll({
      behavior: 'smooth',
      left: 0,
      top: element.offsetTop
    });
  }
  
  document.getElementById("firstDot").addEventListener('click', () => {
    scrollTo(document.getElementById("sect1"));
  });  
  
  document.getElementById("secondDot").addEventListener('click', () => {
    scrollTo(document.getElementById("sect2"));
  });  
  
  document.getElementById("thirdDot").addEventListener('click', () => {
    scrollTo(document.getElementById("sect3"));
  });  
  
  document.getElementById("fourthDot").addEventListener('click', () => {
    scrollTo(document.getElementById("sect4"));
  });  
  
  document.getElementById("fifthDot").addEventListener('click', () => {
    scrollTo(document.getElementById("sect5"));
  });  
  
  document.getElementById("sixthDot").addEventListener('click', () => {
    scrollTo(document.getElementById("sect6"));
  });  
  