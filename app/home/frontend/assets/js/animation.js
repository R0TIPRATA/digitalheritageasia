function scrollTrigger(selector, options = {}){
    let els = document.querySelectorAll(selector)
    els = Array.from(els)
    els.forEach(el => {
        addObserver(el, options)
    })
}

function addObserver(el, options){
    if(!('IntersectionObserver' in window)){
        if(options.cb){
            options.cb(el)
        }else{
            entry.target.classList.add('active')
        }
        return
    }
    let observer = new IntersectionObserver((entries, observer) => { //this takes a callback function which receives two arguments: the elemts list and the observer instance
        entries.forEach(entry => {
            if(entry.isIntersecting){
                if(options.cb){
                    options.cb(el)
                }else{
                    entry.target.classList.add('fadeInDown')
                }
                observer.unobserve(entry.target)
            }
        })
    }, options)
    observer.observe(el)
}

scrollTrigger('#home-intro-text', {
    //root: document.body,
    //rootMargin:'0px',
    //threshold:0.9
    //rootMargin: '-200px',
    root: null, // Sets the framing element to the viewport
    rootMargin: "0px",
    threshold: 0.5
})