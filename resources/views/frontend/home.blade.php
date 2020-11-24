@extends('frontend.layout')
@section('header')

<div class=banner id=layerSlider style="width: 100%;">
    <div class=ls-slide data-ls="transition3d: 33,15; slidedelay: 8000 ; durationin:0;"><img
            src=images/banner/background011.jpg class=ls-bg alt="Slide background">

        <div class="ls-l layercontent01" style="top: 50%; left: 50%; z-index:4;"
             data-ls="offsetxin:left; offsetxout:right; durationin: 4000; parallaxlevel: 8;"><img
                src=images/banner/player1.png alt=innerimage class=img-responsive
                style="max-width: 100% !important ;"></div>
        <img src=images/banner/ball1.png alt=innerimage class="ls-l layercontent02" style=z-index:5;
             data-ls="offsetxin: right; offsetxout:left; rotatein:-360; easingin: easeoutquart; durationin: 4000; delayin: 250; parallaxlevel: -5;">
        <img src=images/banner/front_particles1.png alt=particles class=ls-l style="z-index:3; left:0;"
             data-ls="offsetxin: left; offsetxout:left; scalexin:50; easingin: easeoutquart; durationin: 3000; delayin: 250;">
        <img src=images/banner/back_particles1.png alt=particles class=ls-l style="z-index:3; left:50%;"
             data-ls="offsetxin: left; offsetxout:left; scalein:90; easingin: easeoutquart; durationin: 3000; delayin: 250;">

        <h2 class="ls-l bannertext layercontent03" data-ls="offsetxin:left; rotatexin:90 ; durationin: 3500;">
            dtv</h2>
</div>

</div>
<section class="booking bg-smallwhite">
    <div class=container>
        <div class=booking-fig><h2>Doetinchemse Tennis Vereniging</h2></div>

    </div>
</section>
@endsection
@section('content')
    <section class=about>
        <div class=container>
            <div class=row><h2 class=heading>Over <span>DTV</span></h2>

                <div class=about-wrap>
                    <div class="tab-content nav-content"><p role=tabpanel class="tab-pane fade" id=matches>Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Enim amet cumque quo at eius nulla, voluptates
                        assumenda saepe, consequatur fuga sapiente. Quas optio adipisci dolor possimus quos, maiores
                        aliquid placeat! nemo ab praesentium voluptatum, exercitationem ad quo tempore quam temporibus
                        voluptates odio, qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?Lorem
                        ipsum dolor sit amet, consectetur adipisicing elit.</p>

                        <p role=tabpanel class="tab-pane active fade in" id=static>Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Enim amet cumque quo at eius nulla, voluptates asaliquid
                            placeat!Lorem ipsum dolor sit amet, consectetur adipisicing elit. nemo ab praesentium
                            voluptatum, exercitationem ad quo tempore quam temporibus voluptates odio, qui laborum
                            pariatur perferendis! Sapiente, itaque facilis deleniti unde?Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.</p>

                        <p role=tabpanel class="tab-pane fade" id=traning>Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. s quos, maiores aliquid placeat! Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Esse nemo ab praesentium voluptatum, exercitationem ad quo tempore quam
                            temporibus voluptates odio, qui laborum pariatur perferendis! Sapiente, itaque facilis
                            deleniti unde?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur expedita
                            recusandae ullam autem ducimus consectetur sed iure sequi ratione architecto optio
                            consequuntur atque dolor dolores asperiores illum, quam hic ab?</p></div>
                    <div class=nav-header id=aboutTab>
                        <ul class="nav nav-tabs clearfix" role=tablist>
                            <li><a href=#matches aria-controls=matches role=tab data-toggle=tab>Tennis</a></li>
                            <li class=active><a href=#static aria-controls=static role=tab data-toggle=tab>Squash</a>
                            </li>
                            <li><a href=#traning aria-controls=traning role=tab data-toggle=tab>Toernooien</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=latestResult>
        <div class=container>
            <div class=row><h2 class=heading>Vorige <span>resultaten</span></h2>

                <div class=latestResult-wrap><h4>Toernooi 20 november 2020</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, nemo tenetur magnam eveniet sed
                        aut, iste facere quisquam, cumque, vitae quis deleniti animi. A ipsum iusto, temporibus, beatae
                        porro nemo.</p></div>
                <div class="result clearfix">
                    <div class=result-details>
                        <div class=content><h4>Basir Ilhan</h4>

                            <p>WINST</p>

                            </div>
                        <div class=figure>
                            <div class=team-logo>
                                <div style=background:url(images/team-logo/logo01.png) class=teamLogoImg></div>
                            </div>
                        </div>
                    </div>
                    <div class=result-count>
                        <div class=count-number><span class=lost-team>2</span> <span>-</span> <span
                                class=lost-team>1</span></div>

                    </div>
                    <div class=result-details>
                        <div class="content contentresult"><h4>Ben Wennink</h4>

                            <p>Verloren</p>

                            </div>
                        <div class="figure figresult">
                            <div class=team-logo>
                                <div style=background:url(images/team-logo/logo02.png) class=teamLogoImg></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=matchSchedule>
        <div class=container>
            <div class=row><h2 class=heading>Wedstrijd <span>schema</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia
                    qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel
                    ipsam, nesciunt dolores consequatur, est tempora ut! Est?>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus
                    voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut!
                    Est.</p>

                <div class="matchSchedule_details row">
                    <div class="match_next right-triangle">
                        <div class="wrap_match_next right-triangle">
                            <div class=right-padding><h4 class=headline03>Volgende toernooi</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>
                        </div>
                    </div>
                    <div class=match_versus>
                        <div class="bg-blackimg match_versus02">
                            <div class=nextmatchDetails><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Esse harum animi a ipsa distinctio veritatis suscipit amet.</p>

                                <div class="wrap-logo clearfix">
                                    <div class=logo-match><img src=images/matchResult/logo01.png alt=image></div>
                                    <div class=match_vs>vs</div>
                                    <div class=logo-match><img src=images/matchResult/logo02.png alt=image></div>
                                </div>
                                <p class=match_dtls>October 31, 2015 | 18:25PM</p>

                                <p class=match_dtls>Wemsddley stadium (london)</p></div>
                        </div>
                    </div>
                    <div class=match_timing>
                        <ul class=counter-wrap>
                            <li><span>12</span>days</li>
                            <li><span>18</span>hours</li>
                            <li><span>27</span>minutes</li>
                            <li><span>55</span>seconds</li>
                        </ul>
                    </div>
                </div>
                <div class="matchSchedule_details row">
                    <div class=match_versus-wrap>
                        <div class=wrap_match-innerdetails>
                            <ul class="home_tInfo scrollable">
                                <li><a href="#">
                                    <ul class="t_info match_info01 headline01 clearfix">
                                        <li>1</li>
                                        <li>
                                            <div class="headline01 clearfix"><span>FC Militant Flyers</span><span
                                                    class=vs>vs</span> <span>fc Black & White Blasters</span></div>
                                            <div class="paragraph02 clearfix"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href="#">
                                    <ul class="t_info match_info01 headline01 clearfix">
                                        <li>2</li>
                                        <li>
                                            <div class="headline01 clearfix"><span>FC Crimson Buccaneers</span><span
                                                    class=vs>vs</span> <span>fc Poison Reapers</span></div>
                                            <div class="paragraph02 clearfix"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href="#">
                                    <ul class="t_info match_info01 headline01 clearfix">
                                        <li>3</li>
                                        <li>
                                            <div class="headline01 clearfix"><span>FC Muffin Kickers</span><span
                                                    class=vs>vs</span> <span>fc Ghost Assassins</span></div>
                                            <div class="paragraph02 clearfix"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href="#">
                                    <ul class="t_info match_info01 headline01 clearfix">
                                        <li>4</li>
                                        <li>
                                            <div class="headline01 clearfix"><span>FC Demolition Rockets</span><span
                                                    class=vs>vs</span> <span>fc Wind Flyers</span></div>
                                            <div class="paragraph02 clearfix"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href="#">
                                    <ul class="t_info match_info01 headline01 clearfix">
                                        <li>5</li>
                                        <li>
                                            <div class="headline01 clearfix"><span>FC Alpha Monsters</span><span
                                                    class=vs>vs</span> <span>fc Delta Miners</span></div>
                                            <div class="paragraph02 clearfix"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href="#">
                                    <ul class="t_info match_info01 headline01 clearfix">
                                        <li>6</li>
                                        <li>
                                            <div class="headline01 clearfix"><span>FC Zulu Ninjas</span><span class=vs>vs</span>
                                                <span>fc Sneaky Mutants</span></div>
                                            <div class="paragraph02 clearfix"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=match_next>
                        <div class="wrap_match_next left_triangle">
                            <div class=left_padding><h4 class=headline03>aankomende wedstrijden</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>
                        </div>
                    </div>
                </div>
                <div class="matchSchedule_details row">
                    <div class=match_next>
                        <div class="wrap_match_next right-triangle">
                            <div class=right-padding><h4 class=headline03>ranking lijst</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>
                        </div>
                    </div>
                    <div class=match_versus-wrap>
                        <div class=wrap_match-innerdetails>
                            <ul class="point_table scrollable">
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class="headline01 smallpoint">1</div>
                                        <div class="headline01 largepoint">FC Silver Bullets</div>
                                        <div class="headline01 smallpoint row row"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class="headline01 smallpoint">2</div>
                                        <div class="headline01 largepoint">FC Spinning Slammers</div>
                                        <div class="headline01 smallpoint row"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class="headline01 smallpoint">3</div>
                                        <div class="headline01 largepoint">FC Crimson Executioners</div>
                                        <div class="headline01 smallpoint row"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class="headline01 smallpoint">4</div>
                                        <div class="headline01 largepoint">FC Shaolin Robots</div>
                                        <div class="headline01 smallpoint row"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class="headline01 smallpoint">5</div>
                                        <div class="headline01 largepoint">FC Silent Xpress</div>
                                        <div class="headline01 smallpoint row"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class="headline01 smallpoint">6</div>
                                        <div class="headline01 largepoint">FC Dark Scorpions</div>
                                        <div class="headline01 smallpoint row"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class="headline01 smallpoint">7</div>
                                        <div class="headline01 largepoint">FC Cyborg Snakes</div>
                                        <div class="headline01 smallpoint row"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class="headline01 smallpoint">8</div>
                                        <div class="headline01 largepoint">FC Skull Killers</div>
                                        <div class="headline01 smallpoint row"><span>p</span><span>10</span></div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class="headline01 smallpoint">1</div>
                                        <div class="headline01 largepoint">FC Reptile Kickers</div>
                                        <div class="headline01 smallpoint row"><span>p</span><span>11</span></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






@endsection
