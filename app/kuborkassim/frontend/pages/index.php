
  <!-- section 1: cover image -->
  <div class="heroimg">
  <!-- <button class="circular-btn" id="kkassim-home-btn" onClick="document.getElementById('sect1').scrollIntoView();">
        <div class="text-center"><i class="material-icons material-icons-outlined">expand_more</i></div></button> -->
  </div>
  <div class="stars"></div>

  <!-- scroll at side -->
  <div class="side-nav">
    <div class="side-nav-row">
      <li id="firstDot" class="navButton"></li>
      <span class="tooltiptext">Introduction</span>
    </div>
    <div class="side-nav-row">
      <li id="secondDot" class="navButton"></li>
      <span class="tooltiptext">Interactive Map</span>
    </div>
    <div class="side-nav-row">
      <li id="thirdDot" class="navButton"></li>
      <span class="tooltiptext">Origins & History</span>
    </div>
    <div class="side-nav-row">
      <li id="fourthDot" class="navButton"></li>
      <span class="tooltiptext">Kubor Kassim Today</span>
    </div>
    <div class="side-nav-row">
      <li id="fifthDot" class="navButton"></li>
      <span class="tooltiptext">Experience Digital Kubur Kassim</span>
    </div>
    <div class="side-nav-row">
      <li id="sixthDot" class="navButton"></li>
      <span class="tooltiptext">Contribute</span>
    </div>
  </div>

  <!-- section 2: intro and map -->
  <div class="intro sect" id="sect1">
    <div class="title flex flex-ai-c flex-jc-c"> Kubor Kassim: A Memory Tribute </div>
    <img class="imgcenter cursiveborder" src="frontend/assets/img/borderart.svg" alt="border">

    <div>
      <div class="intro-sect" id="intro-sect-1">
        <img class="topicon" src="frontend/assets/img/homeicon1.png">
        <p class="text-center">
          Kubor Kassim (translated as Kassim cemetery from Malay) exemplifies Singapore’s valuable and unique, yet
          essentially
          vulnerable, cultural heritage. Sited in a contested land, surrounded by private properties, and in an area of
          Singapore
          particularly affected by the shortage of land and population pressures, it qualifies for the label as a ‘site at
          risk of
          disappearance’. The one-century old Kubor Kassim is part of a collective of cemeteries in Eastern Singapore
          called the
          Mohammedan cemeteries. The land occupied by Kubur Kassim is believed to have served as a burial ground for
          Muslims in
          the area even before Kassim’s endowment. Endowed by Ahna Mohamed Kassim bin Ally Mohamed, a cargo
          boat and
          steam launch owner, it opened in 1921 and has over 3,000 graves. When Ahna Kassim passed away in 1935, the land
          was
          given to a group of trustees to manage.
        </p><br>
      </div>
      <div class="intro-sect ">  
        <img class="topicon" src="frontend/assets/img/homeicon2.png">
        <p class="text-center">
          Many villagers from kampung Pachitan, a village nestled between kampung Eunos and Kembangan (today full-fledged
          urban
          neighbourhoods with tens of thousands of residents and train stations), were buried at Kubor Kassim. The
          kampung
          (small ‘village’ in Malay) had many Javanese settlers who moved to Singapore after the Japanese occupation after
          World
          War II. Today, most of the graves in Kubor Kassim are anonymous or have lost
          their
          identification engravings and are designated with standard burial markers. 
        <p><br>
      </div>
      <div class="intro-sect ">        
        <img class="topicon" src="frontend/assets/img/homeicon3.png">
        <p class="text-center">
          Apart from
          unidentified
          graves, Kubor Kassim has also elaborate graves, in some cases with individual shrines, decorative elements and
          private
          fences: for instance, the tomb of Dr. Hafizudin Sirajudin Moonshi, former Singapore Municipal Commissioner and a
          prominent leader of the Indian Muslim community, recognised for establishing the first clinic by a Muslim in
          Singapore,
          and Ms. Che Lembek binte Abdin, former headmistress of Kampong Glam Girl’s School. The
          cemetery also
          houses Khanqah Khairiyyah, a surau (‘prayer house’ in Malay) where religious classes are conducted, and a
          meeting place
          for a local tariqa (a ‘Sufi Muslim order’ in Arabic). Some of Kubor Kassim’s tombs seem to be dedicated to the
          orang
          bunian, a kind of super-natural human-like beings often portrayed in Malay folklore.
        </p><br>
      </div>
      <div class="intro-sect ">    
        <img class="topicon" src="frontend/assets/img/homeicon4.png">
        <p class="text-center">
          Closed for burials since the end of the 1980s, the land where the cemetery sits is state land, managed by
          Singapore Land
          Authority (SLA). However, some descendants of Ahna Kassim are contesting governmental ownership.
          Today, as
          for the last few decades, the cemetery is maintained by the combined, yet often asymmetric, efforts of private
          supporters (e.g., caretakers, community and volunteer groups, Kassim family members), MUIS, Majlis Ugama Islam
          Singapura
          (the Islamic Religious Council of Singapore), and public agencies such as NEA, the National Environment Agency. Cemeteries typically use a considerable amount of space,
          and
          particularly older ones, are typically located in premium and highly-sought land,
          often
          subjected to redevelopment. In the Urban Redevelopment Authority (URA) 2019 master plan, the site where Kubor
          Kassim
          sits was earmarked for future residential development, which could include flats, condominiums, and detached,
          semi-detached and terrace houses. This potential threat to its existence is not exclusive to Kubor
          Kassim
          but to most of Singapore’s cemeteries, regardless of faith. In the handling of faith matters in Singapore,
          pragmatism is
          emphasised, and all religious places are treated equally – including burial grounds.
        </p>
      </div>
    </div><br>
    <hr class="goldLine">
    <div class="intmap">
      <h4 class="text-center">Map of Kubor Kassim</h4>
      <div class="interactive-map" id="sect2">
        <img src="frontend/assets/img/map.svg">

        <div class="map-point" id="mainEntrance">
          <!-- <span class="material-icons-outlined map-icon" onclick="showInfo()">place</span> -->
          <span class="material-icons-outlined map-icon">place</span>
          <span class="tooltiptext">Main entrance</span>
        </div>

        <div class="map-point" id="shrineKhs">
          <span class="material-icons-outlined map-icon">place</span>
          <span class="tooltiptext">Shrine of Khawaja Habibullah Shah</span>
        </div>

        <div class="map-point" id="surau">
          <span class="material-icons-outlined map-icon">place</span>
          <span class="tooltiptext">Surau</span>
        </div>

        <div class="map-point" id="indiv">
          <span class="material-icons-outlined map-icon">place</span>
          <span class="tooltiptext">Individual graves</span>
        </div>

        <div class="map-point" id="cluster">
          <span class="material-icons-outlined  map-icon">place</span>
          <span class="tooltiptext">Cluster graves</span>
        </div>

        <div class="map-point" id="catGrave">
          <span class="material-icons-outlined map-icon">place</span>
          <span class="tooltiptext">Cat graves</span>
        </div>

        <div class="map-point" id="trees">
          <span class="material-icons-outlined map-icon">place</span>
          <span class="tooltiptext">Fruit trees/Coconut plantation</span>
        </div>

        <div class="map-point" id="shrineDr">
          <span class="material-icons-outlined map-icon">place</span>
          <span class="tooltiptext">Shrine of Dr. Moonshi</span>
        </div>

        <div class="map-point" id="banyan">
          <span class="material-icons-outlined map-icon">place</span>
          <span class="tooltiptext">Banyan tree</span>
        </div>
      </div>

      <p class="text-center instructions">Please select a location to learn more.</p>
      <div id="intmap-modal">
        <div id="modal-content" id="map-info">
          <div id="placeTitle"></div>
          <div id=intmap-content>
            <div id="placeImage"></div>
            <div id="placeContent"></div>
          </div>  
          <div class="modalBtns">
            <div id="closeBtn">
              <btn class="secondarybtn" onClick="closeModal()">
                <caption>Close</caption>
              </btn>
            </div>
            <div id="mapBtns">
              <btn class="rectbtn" onClick="prevMp()">
                <caption>&#10094;</caption>
              </btn>
              <btn class="rectbtn" onClick="nextMp()">
                <caption>&#10095;</caption>
              </btn>
            </div>
          </div>  
        </div>
      </div>
    </div>  
  </div>

  <!-- section 3: history of kubur kassim-->
  <div class="hist" id="sect3">

    <div class="bghalfp">
      <div class="bgorigins flex flex-ai-c flex-jc-c flex-as-c">
        <h1>Origins and History of Kubor Kassim</h1>
      </div>
    </div>

    <div class="sect text-center">
      <p>
        Tucked away in the landed housing estate along Siglap Road lies Kubor Kassim (or ‘Kassim Cemetery’), a serene
        Muslim cemetery that offers its own miniature ecosystem of flora and fauna. The cemetery – initially known as
        the ‘Grave of the Wakaff Siglap Hill’ – was formally established on the 30th of April 1921 as part of an
        endowment donated by Ahna Mohamed Kassim bin Ally Mohamed, a cargo boat and steam launch owner (Remember
        Singapore, 2019). The land occupied by Kubor Kassim is believed to have served as a burial ground for Muslims in
        the area even before Kassim’s endowment (NHB, 2016).
      </p><br>
      <p>
        When Ahna Kassim passed away in 1935, the land was given to a group of trustees to manage. Beyond the cemetery,
        the endowment additionally comprises the Kassim mosque located along Changi Road and surrounding residential
        houses in the Siglap/Kembangan area (Kassim Mosque, 2022) . Kubor Kassim has historically served its function as
        a burial ground for Muslims who lived in Siglap in the past. It is also a centre for religious activities, since
        the site also houses its own surau (prayer house) named Khanqah Khairiyyah (NHB, 2016). The cemetery stopped
        receiving burials in the 1980s, but currently has over 3,000 graves.
      </p>
    </div>
    </p>
  </div>
  <hr class="goldLine">
  <!-- section 4: a network of cemetries -->
  <div class="network">
    <div class="wrapper sect">
      <section class="left">
        <h2>A Network of Cemeteries</h2>
        <p>Kubor Kassim is part of the Mohammedan network of cemeteries located across eastern Singapore.
        </p><br>
        <p>There were numerous other Muslim burial grounds along East Coast Road alone, including the graves of Tok
          Lassam
          (chieftain and founder of Kampong Siglap), his wife and panglima (commander-in-chief) located towards the end
          of Jalan
          Sempedan</p><br>
        <p>In other parts of eastern Singapore like Kallang and Geylang, there were also Mohammedan burial sites, though they have since been exhumed for land redevelopment purposes.</p><br>
        <p>Many villagers from kampung (small ‘village’ in Malay) Pachitan, a village previously nestled between kampung
          Eunos
          and Kembangan (today full-fledged urban neighbourhoods with train stations and thousands of
          residents) were
          buried at Kubor Kassim. The kampung was built by Javanese settlers who moved to Singapore after the Japanese
          occupation after World War II. </p><br>
      </section>

      <section class="right">
        <div class="carousel flex-col">
          <div class="mySlides1 fade flex-col">
            <div class="panel flex flex-ai-c flex-jc-c flex-col">
              <div class="img-cemetery1" onclick="plusSlide(1,0)"></div>
              <p class="caption text-center">Mohammedan burial ground along Siglap Road, known as Kubor Kassim (Ministry of National Development, 1958). </p>
            </div>
          </div>
          <div class="mySlides1 fade">
            <div class="panel flex flex-ai-c flex-jc-c flex-col">
              <div class="img-cemetery2"  onclick="plusSlide(2,0)"> </div>
              <p class="caption text-center">Mohammedan burial ground at the end of Jalan Sempedan, where the grave of Tok Lassam is located (Singapore Survey Department, 1977).</p>
            </div>
          </div>
          <div class="mySlides1 fade">
            <div class="panel flex flex-ai-c flex-jc-c flex-col">
              <div class="img-cemetery3"  onclick="plusSlide(3,0)"></div>
              <p class="caption text-center">The graves of  Tok Lassam and his wife in the foreground, with the grave of the panglima in the background (Tok Lassam, 2019).</p>
            </div>
          </div>
          <div class="mySlides1 fade">
            <div class="panel flex flex-ai-c flex-jc-c flex-col">
              <div class="img-cemetery4" onclick="plusSlide(4,0)"></div>
              <p class="caption text-center">Mohammedan cemetery along Geylang Road (Singapore Survey Department, ca. 1930).</p>
            </div>
          </div>
          <br>

          <div style="text-align:center">
            <span class="dot1" onclick="currentSlide(0,0)"></span>
            <span class="dot1" onclick="currentSlide(1,0)"></span>
            <span class="dot1" onclick="currentSlide(2,0)"></span>
            <span class="dot1" onclick="currentSlide(3,0)"></span>
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- section 5: notable residents in kubor kassim -->
  <div class="residents">
    <div class="wrapper sect">
      <section class="left">
        <div class="carousel flex-col">
          <!-- <div class="btnWrapper">
              <a class ="prev" onclick = "plusSlide(-1)"><</a>
            </div> -->
          <div class="mySlides2 fade flex-col">
            <!-- <img src = "app/img/drmoonshi.png"> -->
            <div class="panel flex flex-ai-c flex-jc-c flex-col">
              <div class="img-residents1" onclick="plusSlide(1,1)"></div>
              <!-- <div class="pinkrect"></div> -->
              <p class="caption">A portrait of Dr Hafizudin Sirajudin Moonshi (Abdul Rashid, 2012).</p>
            </div>
          </div>
          <div class="mySlides2 fade">
            <!-- <img src = "app/img/shaykh.png"> -->
            <div class="panel flex flex-ai-c flex-jc-c flex-col">
              <!-- <div class="bluerect"></div> -->
              <div class="img-residents2" onclick="plusSlide(0,1)"></div>
              <p class="caption">A portrait of Sheikh Khawaja Habibullah Shah (Shadhiliyyah, n.d.).</p>
            </div>
          </div>
          <!-- <div class="btnWrapper btnWrapper-right">
              <a class = "next" onclick="plusSlide(1)">></a>
            </div>   -->
          <br>

          <div style="text-align:center">
            <span class="dot2" onclick="currentSlide(0,1)"></span>
            <span class="dot2" onclick="currentSlide(1,1)"></span>
          </div>
        </div>
      </section>

      <section class="right">
        <h2>Notable Residents in Kubur Kassim</h2>
        <p>Kubor Kassim is host to several internees of notable background, including prominent community leaders,
          respected
          Muslim sheikhs (religious leaders) and Ahna Mohamed Kassim himself. </p></br>
        <p>One of these Malay-Muslim community leaders includes Dr Hafizudin Sirajudin Moonshi bin Hakeem Abdul Hamid
          (better
          known as ‘Dr Moonshi’), one of Singapore's earliest Islamic doctors. He was first to establish a private
          Muslim clinic
          at North Bridge Road named ‘Moonshi Dispensary’ in April 1916. He also served as
          Singapore’s
          Municipal Commissioner in between 1921 and 1923 and was renominated in 1924. Under this title, Dr Moonshi
          fought for
          the retainment of Malay characters for street names in Singapore. He was actively involved in the Malay
          Volunteer Club
          and Indian Association and served time as an executive committee member of the Mohammedan Advisory Board
          between 1920
          and 1941.</p><br>
        <p>Another notable internee within the community is Che Lembek Binte Abidin, a former headmistress of Kampong
          Glam
          Girls’ School during the 1940s and Second World War. Daing Siti Fatimah, a renowned
          traditional medicine practitioner, is also buried at Kubor Kassim.
          An esteemed Sufi ulama (‘scholar’ in Arabic) buried at Kubor Kassim is Sheikh Khawaja Habibullah Shah, whose
          shrine
          and burial ground is connected to the surau. His religious knowledge covers a wide range of the tariqas found
          in
          Sufism, including that of the Qadiriyah, Naqshahbandiyah, Suhrawardiyah, Chistiyah and Sanusiyah nature. He
          has
          approximately 100,000 students and 45 Caliphs around the world.
        </p>
      </section>
    </div>
  </div>

  <!-- section 6: kubor kassim today -->
  <div class="kktoday" id="sect4">
    <div class="bgtoday flex flex-ai-c flex-jc-c flex-as-c">
      <h1>Kubor Kassim Today</h1>
    </div>
    <div class="sect">
      <p class="text-center">In 1987, the government issued a recruitment notice to Kubor Kassim for the purpose of rebuilding projects in Siglap 
        under the Land Acquisition Act. The Singapore Land Authority (SLA) officially took over the site on February 16, 1989, 
        making it state land till today. As for the last few decades, the cemetery is maintained by the combined, yet often asymmetric,
        efforts of private supporters (e.g. caretakers, community and volunteer groups, Kassim family members), Majlis Ugama Islam Singapura
        (MUIS, the Islamic Religious Council of Singapore), and public agencies such as the National Environment Agency (NEA). Cemeteries
        typically use a considerable amount of space, and particularly older ones, are typically located in premium and highly-sought land,
        often subjected to redevelopment. Situated in a prime location surrounded by the landed estates of Siglap, the Urban Redevelopment Authority (URA)
        earmarked the site for future residential development, which could include flats, condominiums, and detached, semi-detached and terrace houses,
        in its 2019 Master Plan. This potential threat to its existence is not exclusive to Kubor Kassim but to most of Singapore’s cemeteries,
        regardless of faith. In the handling of faith matters in Singapore, pragmatism is emphasised, and all religious places are treated equally,
        including burial grounds.

      </p><br>
      <p class="text-center">In efforts of preserving the cemetery land, the descendants of Ahna Kassim have fought for claims over the land, back from the Singapore Land Authority,
         in recent years. On a community level, the site has been frequented by tours organized by local heritage enthusiasts. Weekly Sunday
         classes held at the surau and community activities organized during key religious dates - like Ramadhan, Hari Raya Puasa and Hari Raya Haji for instance
         - have also kept the space alive previously. 
      </p><br>
      <p class="text-center">Kubor Kassim also uniquely displays evidence of inter-faith practices: though a Muslim cemetery, some of its graves have joss sticks and incense,
        ritual practices commonly associated with other religions like Taoism but not traditionally tied to the Muslim faith .
      </p>
    </div>
  </div>

  <!-- section 7: Unique feature of Graves-->
  <div class="fgraves">
    <div class = "sect flex flex-col flex-ai-c flex-jc-c">
        <h2 class="text-center">Unique Features of Graves</h2>

            <div class="img-block">
                <div class="col-2-1">
                  <img id="fig12a" src="frontend/assets/img/figure12a.png" alt="figure 12a">  
                </div>
                <p class="caption text-center">Graves with uniformly-coloured burial markers.</p>
              </div>  

          <p>Today, most of the graves in Kubor Kassim are anonymous or have lost their identification engravings and are
            designated with standard burial markers. Some graves at Kubor Kassim are also uniquely built using bricks manufactured in Singapore, a testament to the once booming brick industry here. </p><br>
          <p>These locally-produced bricks can be characterised by the factory names that are imprinted onto the brick
            recess. Certain southern and western parts of Singapore had good natural supply of clay to
            manufacture the bricks, therefore commercial kilns were built in these areas as well - like Bukit Merah and
            Alexandra in the south.</p><br>  
            
          <div class="img-block">
            <div class="col-1-1">
              <img id="fig13" src="frontend/assets/img/figure13.png" alt="figure 13">  
              <img id="fig14" src="frontend/assets/img/figure14.png" alt="figure 14"> 
            </div>
            <p class="caption">A brick from ‘美能實 Ceramics’, used to construct a grave in Kubor Kassim.</p>
          </div>    

        <p>The brick industry has its roots in the early 1800s, when Indian convict labour was used under the management
          of the British to build local government and religious buildings like the Istana and Sri Marriaman Temple. By
          the turn of the 21st century, much of the factory land in the west were acquired
          to build new housing estates for Singapore’s growing population.
        </p><br>
    
        <p>The coloured cloths that shroud the tombstones of Muslim graves, including those found in Kassim, signal the
          internee’s status: with white denoting a normal-status internee and yellow denoting a highly-respected
          internee. Yellow cloths are also sometimes associated with the practice of black magic.
        </p>
    </div>
  </div> 

  <!-- section 8: Experience -->
  <div class="experience sect" id="sect5">
    <div class="flex flex-ai-c flex-jc-c">
      <!-- <div class="title hr">Experience Digital Kubor Kassim </div> -->
      <h2 class="text-center">Experience Digital Kubor Kassim</h2>
    </div>
    <div class="row flex flex-ai-c flex-jc-c">
      <div onclick="location.href='pano'" class="card card-vir">
        <div id="rectangle">
          <h4>Visit Kubor Kassim Virtually</h4>
        </div>
      </div>
      <div onclick="location.href='experience'"class="card card-vfa">
        <div id="rectangle">
          <h4>Views from Above</h4>
        </div>
      </div>
      <div onclick="location.href='parchive'" class="card card-pa">
        <div id="rectangle">
          <h4>Photographic Archive</h4>
        </div>
      </div>
    </div>
  </div>
  <hr class="goldLine">

  <!-- section 9: Visit -->
  <div class="visit">
    <div class="flex flex-ai-c flex-jc-c">
      <h2>Visit Kubor Kassim</h2>
    </div>
    <div class="sect">
      <div id="gmap">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7655277340714!2d103.92074491493173!3d1.3162610620486714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da22a582fcc477%3A0x7f583980fd3e3fbc!2sKubur%20Kassim!5e0!3m2!1sen!2ssg!4v1652165627493!5m2!1sen!2ssg"
          width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div id="directions">
        <p>Nearest bus stop: 83231 Bef Siglap Dr</p>
        <p>Buses: 40, 401</p>
        <p>Directions: Alight bus at bus stop and walk along Siglap road past Cheviot Hill. (1 minute walk)
        </p>
      </div>
    </div>
  </div>

  <!-- section 10: Contribute -->
  <div class="contribute" id="sect6">
    <div class="flex flex-ai-c flex-jc-c">
      <div class="title hr">Have something to contribute? </div>
    </div>
    <div id="contributetext">
      <div class="row">
        <p>Do you have stories, pictures, or videos to share with us? We will be happy to hear from you!
        </p>
      </div>
      <a class="rectbtn" href="mailto:davidocon@smu.edu.sg?subject=Contribute to Kubor Kassim Project">Contribute
        today</a>
    </div>
  </div>
  </body>

  </html>