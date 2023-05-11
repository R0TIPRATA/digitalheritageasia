//global variables
var prevMapPoint = document.querySelector("#mainEntrance");
var placeIndex;

//Show info box on clicking mapPoint
function showInfo() {
  var x = document.getElementById("map-info");
  if (x.className.indexOf("show") == -1) {
    x.className += "show";
  }
}

var modal = document.getElementById("intmap-modal");
//onClick map point
const onClick = function () {
  console.log(modal);
  modal.style.display = "block";
  let elementId = this.id;
  prevElementId = elementId;
  updateInfo(elementId);
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

const closeModal = function(){
  modal.style.display = "none";
}

//map points
document.getElementById('mainEntrance').onclick = onClick;
document.getElementById('shrineKhs').onclick = onClick;
document.getElementById('surau').onclick = onClick;
document.getElementById('indiv').onclick = onClick;
document.getElementById('cluster').onclick = onClick;
document.getElementById('catGrave').onclick = onClick;
document.getElementById('trees').onclick = onClick;
document.getElementById('shrineDr').onclick = onClick;
document.getElementById('banyan').onclick = onClick;

//update title and content in infobox
function updateInfo(elementId) {
  let index;
  let placeTitle;
  let placeContent;

  switch (elementId) {
    case "mainEntrance":
      index = 1;
      placeTitle = "Main entrance";
      placeImage = "frontend/assets/img/map_ent.jpg";
      placeContent = "As a visitor to Kubor Kassim, the brightly painted iconic gates are the first thing that captures your attention before entering the cemetery grounds. Over one hundred years of history, the gate has periodically mutated colours, always captivating and uniquely distinct from the architecture of the surrounding area. <br><br> In 2022, Kubor Kassim's entrance boasts a confident yet striking combination of blue-green, turquoise, and golden colours that match the surau and its surrounding shrines.Beyond its vivid colours, Kubor Kassim's gate design draws the attention of passers-by as it radiates an Indo-Saracenic style, opposed to the contemporary architecture of the area comprising of modern condos and landed properties. This style was a popular architectural design in Malaya in the early 20th century and combines elements of Mughal (a decorative amalgam of Persian, Turkish, and Indian architecture that can be seen in buildings such as the Sultan Mosque) and classical European features.";
      break;

    case "surau":
      index = 2;
      placeTitle = "Surau";
      placeImage = "frontend/assets/img/map_surau.png";
      placeContent = "In similar fashion to the main gate, the surau that forms the landmark of the cemetery is also painted in matching colours of bright turquoise, blue-green and gold, with motifs of Islamic arches and gold cornices. The main body of the surau is long, with one end — the one closer to the main gate —  adjacent to the shrine of Sheikh Khawaja Habibullah Shah.<br><br> The surau is officially named ‘Khanqah Khairiyyah’, and has held frequent religious classes on its grounds in the past. It also used to be the meeting place for a Sufi Muslim order (Thariqah Qadiriah Naqshahbandiah Suhrawardiah Chistiah Sanusiah) every Sunday morning. There has been anecdotal evidence of lively community activities carried out here, especially during the seasons of Ramadhan and Hari Raya Haji in the past, where Muslims prayed together or cooked and distributed porridge to the community. <br><br>Post COVID-19, the surau is relatively less frequented and currently empty, with a sign informing visitors about the lack of electricity supply.";
      break;  

    case "shrineDr":
      index = 3;
      placeTitle = "Shrine of Dr. Moonshi";
      placeImage = "frontend/assets/img/map_drmoonshi.png";
      placeContent = "Kubur Kassim’s grounds, as other lands in the Siglap area, served as a burial ground for Muslims even before Kassim’s endowment in 1921. One burial site that stands out across from the surau is that of Dr Hafizudin Sirajudin Moonshi bin Hakeem Abdul Hamid (better known as ‘Dr Moonshi’), an Indian/Malay-Muslim community leader, one of Singapore’s earliest Islamic doctors. He was first to establish a private Muslim clinic at North Bridge Road named ‘Moonshi Dispensary’ in 1916. He also served as Singapore’s Municipal Commissioner between 1921 and 1923 and was renominated in 1924. Under this title, Dr Moonshi fought to retain Malay characters for street names in Singapore. In addition, he was actively involved in the Malay Volunteer Club and Indian Association. Furthermore, he served time as an executive committee member of the Mohammedan Advisory Board between 1920 and 1941. Lastly, Dr Moonshi is also one of the 16 pioneers of Jamiyah Singapore, a local Muslim missionary.<br><br>Dr Moonshi’s family grave is constructed in a similar Indo-Saracenic architectural style as the cemetery’s main gate, mixing Mughal and European features. Nowadays, painted with a similar colour palette as the gate and the surau, it harmoniously connects with these two iconic sites within the cemetery. This prominence helps his burial site stand out from the rest graves and markers in Kubor Kassim, symbolically still, one hundred years later, underscoring his remarkable contributions to the Indo-Malay Muslim society in Singapore.";
      break;  

    case "shrineKhs":
      index = 4;
      placeTitle = "Shrine of Khawaja Habibullah Shah";
      placeImage = "frontend/assets/img/map_shaykh.png";
      placeContent = "Sheikh Khawaja Habibullah Shah is a well-respected Sufi ulama, whose religious knowledge covers a wide range of the tariqas found in Sufism, including that of the Qadiriyah, Naqshahbandiyah, Suhrawardiyah, Chistiyah and Sanusiyah nature. He has been known for his competencies in accurately dissecting various religious issues and books about Sufism written in both Arabic and English. He has approximately 100,000 students and 45 Caliphs around the world (Shadhiliyyah, n.d.). He was originally born in Tamil Nadu (India) and was laid to rest on 31 October 1971 in the grounds of Kubur Kassim. <br><br> Members of local Muslim communities frequent the shrine of Sheikh Khawaja Habibullah Shah to pray for blessings or offer prayers for the sheikh, deemed a follower who is close to Allah (Being Centre, 2019). <br><br>His grave lies under a shelter that connects to the main surau, where visitors can seek shade as they meditate and offer prayers. The shrine is neatly taken care of (with elaborate yellow-green cloth and fresh flowers) and is also guarded by a gate, symbolising the deep reverence the Muslim community carries for the sheikh. Interestingly, the shrine also bears evidence of multifaith practices, as joss sticks — a ritual practice commonly associated with other religions like Taoism — can also occasionally be seen near his grave.   ";
      break;

    case "banyan":
      index = 5;
      placeTitle = "Banyan tree";
      placeImage = "frontend/assets/img/map_banyan.png";
      placeContent = "As we walk into Kubor Kassim, trees and lush vegetation surround us, providing magnificent frames for the shrines and grave markers that dot the place. As we approach the cemetery’s surau, a majestic banyan tree towers on the right-hand side and marks a junction leading to different sections within the cemetery. While it is not the only banyan tree in Kubor Kassim, its size, splendour, and distinction make it a necessary pause in our virtual visit.<br><br>Beyond being sought as providers of shady respite from the heat, banyan trees hold, in their unique aerial or outlying roots which grow downwards in all shapes and sizes, mystery and enduring mystique. Banyan trees have some of the broadest canopy coverage, and because of their longevity, they are considered sacred trees, even immortal by many. They are also India’s national tree.<br><br>Part of myths and legends, banyan trees have been looked at with reverence and captured the fascination of storytellers over the centuries. The knotted roots cascading down embrace earth and grow into stout, branch-supporting pillars that resemble new tree trunks reaching out to the skies. The graceful sprawl invites you to swing on its roots, rest in its shade and enjoy the cool breeze of its leaves.<br><br> Banyan trees are often considered sacred and profane, which probably has to do with their nature. For all its splendour, the banyan tree (Ficus bengalensis) forms through the strangulation of a host tree by seeds planted in its crevices, by animals who eat the fig flowers or fruits. Upon germination, the fig species anchors itself to the host tree’s canopy, literally branching out with the aerial roots that eventually anchor itself downwards to the earth, competing with the host tree for nutrients and eventually strangling it to death. <br><br> This splendorous yet vicious nature has inspired numerous myths and legends associated with the tree. When located at a cemetery’s heart, this naturally comes with supernatural tales and superstition. For example, some Malay folklores believe that banyan trees, with their drooping branches and dark shady crowns, can house the spirits of pontianaks, supernatural beings who are known to swing from their aerial roots to terrorise villagers. These fears inspired the Malay cult classic film Pontianak (1957), shot in Kampong Siglap, the area where Kubor Kassim sits. The film was so popular that it had two sequels and was dubbed into Cantonese for Hong Kong audiences and English for American television as an entry for the Asian Film Festival. <br><br> These stories pair well with myths surrounding  the orang bunian, supernatural human-like beings or “forest spirits” from Malay folklore that live similarly to humankind, but in a separate dimension of reality. They have grave plots dedicated to them, as in the case of Kubor Kassim. Over the years, these superstitions have made the cemetery a gathering location for those interested in the supernatural. Kubor Kassim’s banyan trees oversee these rituals and, who knows, perhaps provide a refuge for some of their participants.";
      break;  
    
    case "trees":
      index = 6;
      placeTitle = "Fruit trees/coconut plantation";
      placeImage = "frontend/assets/img/map_plants.png";
      placeContent = "As the visitor ventures deeper into Kubor Kassim, trees and lush vegetation become more present. Many provide shade and magnificently frame the shrines and grave markers that dot the place. Other tree clusters, patches of surviving secondary forest, offer thick, almost impenetrable and enigmatic walls of vegetation.<br><br>Kubor Kassim proposes a miniature ecosystem of flora. Many fruit-bearing trees inundate the cemetery with sweet fragrances all year round. Tapioca, rambutan, jackfruit, starfruit, banana, malabar plumb, mango and morinda critrifolia (noni) trees can be spotted across the cemetery. They share the space with a range of other familiar sights in Singapore, such as saga, banyan, sea apple, or rain trees.";

      break;  

    case "catGrave":
      index = 7;
      placeTitle = "Cat graves";
      placeImage = "frontend/assets/img/map_cat.png";
      placeContent = "Kubur Kassim is one of the few places in Singapore you can find burials for the beloved pets of locals, with numerous cat burials found here. Traditionally illegal under the laws of government agencies like NParks and the National Environmental Agency (NEA), pet burials were done at Kubur Kassim due to its relatively unexplored and concealed nature, where locals can memorialise their loved animals. It is important to note that the cemetery is now defunct, and does not take in new pet burials.";
      break;

    case "indiv":
      index = 8;
      placeTitle = "Individual graves";
      placeImage = "frontend/assets/img/map_indiv.png";
      placeContent = "There are some notable graves in Kubur Kassim that carry unique characteristics or stories, including a 'grave of remembrance' for the victims of the Alitalia DC-8 plane crash on July 6, 1962 in Bombay (India), namely Mohamed Said Nabi and his daughter Annie Farida Nabi. <br><br> There is also the grave of ‘Noorfalil Samad’, whose origins can interestingly be traced back to Ceylon/Sri Lanka, which raises curiosity about his story in Singapore before he passed. <br><br> Lastly, there is a grave ‘presented’ by members of an organisation known as the ‘Malay Seamens Union of Singapore’. The internee could perhaps have been a prominent member of the Malay seamen community, who fought for the status, rights and quality of seamanship for seamen working in the many ports across the world."
      break;
  
    case "cluster":
      index = 9;
      placeTitle = "Cluster graves";
      placeImage = "frontend/assets/img/map_cluster.png";
      placeContent = "Follow the main path and venture right, you will reach the southernmost section of Kubor Kassim along the fence of Siglap Close. Herein lies a cluster of 5 graves elevated with tiled sides and 2 yellow gazebo tents to shelter it from the elements. On one of them, fresh flowers are inserted into a mound of clean white sand and replaced daily. With yellow cloth draped on their headstones symbolising royalty or a religious leader, little is publicly known about them. <br><br> Through our interviews with individuals privy to it’s background, it was established that the one of the person was a powerful Chinese religious leader with practices originating from Indonesia and although not Muslim, was buried in a muslim cemetery. Today, 200+ followers of his grave maintain and manage the area, returning regularly to conduct prayers and religious rituals. Unfortunately some rituals had previously led to neighbour complaints, citing noise disturbance and large group gatherings. <br><br> Despite having only 5 out of hundreds of graves, the group significantly contributes financially to the upkeep and maintenance of the general areas of Kubor Kassim."
      break;  
  }

  let mapInfo = document.getElementById('map-info');
  //change color of map-point
  //toggleMapPoint(elementId);
  //change title
  setPlaceTitle(document.getElementById('placeTitle'), placeTitle);
  //addImage
  setPlaceImage(document.getElementById('placeImage'), placeImage);
  //change content
  setPlaceContent(document.getElementById('placeContent'), placeContent);
  //set placeIndex
  setPlaceIndex(index);
}

function setPlaceTitle(element, placeTitle) {
  element.innerHTML = "<h4>" + placeTitle + "</h4>";
}

function setPlaceImage(element, placeImage) {
  element.innerHTML = "<img src='" + placeImage + "'>";
}

function setPlaceContent(element, placeContent) {
  element.innerHTML = "<p>" + placeContent + "</p>";
}

//turns clicked icon green and changes previously clicked icon white
// function toggleMapPoint(elementId) {
//   let parent = document.getElementById(elementId);
//   let mp = parent.firstElementChild;
//   let prevPressed = prevMapPoint;
//   mp.classList.add("map-iconPressed");
//   prevPressed.classList.remove("map-iconPressed");
//   prevMapPoint = mp;
// }

//set placeIndex
function setPlaceIndex(index) {
  placeIndex = index;
}

//getElementId
function getElementId(index) {
  let elementId;
  switch (index) {
    case 1:
      elementId = "mainEntrance";
      break;
    case 2:
      elementId = "surau";
      break;
    case 3:
      elementId = "shrineDr";
      break;
    case 4:
      elementId = "shrineKhs";
      break;
    case 5:
      elementId = "banyan";
      break;
    case 6:
      elementId = "trees";
      break;
    case 7:
      elementId = "catGrave";
      break;
    case 8:
      elementId = "indiv";
      break;  
    case 9:
      elementId = "cluster";
      break;
  }
  return elementId;
}

//go to next map-point
function nextMp() {
  let placeIndex1 = placeIndex;
  if (placeIndex1 != 9) {
    placeIndex1++;
  } else {
    placeIndex1 = 1;
  }
  placeIndex = placeIndex1; //set new placeIndex
  let elementId = getElementId(placeIndex);
  updateInfo(elementId);
}

//go to prev map-point
function prevMp() {
  let placeIndex1 = placeIndex;
  if (placeIndex1 != 1) {
    placeIndex1--;
  } else {
    placeIndex1 = 9;
  }
  placeIndex = placeIndex1; //set new placeIndex
  let elementId = getElementId(placeIndex);
  updateInfo(elementId);
}
