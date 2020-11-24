@extends('frontend.layout')
@section('header-title')
    Over ons
@endsection
@section('content')
<section class="matchSchedule countryclub">
    <div class=container>
        <div class=row><h2 class="heading small">Doetinchemse <span>Tennis Vereniging</span></h2>

            <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia
                qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel
                ipsam, nesciunt dolores consequatur, est tempora ut! Est?>Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus
                voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut!
                Est.</p></div>
    </div>
</section>
<section class=players>
    <div class=container>
        <div class=row><h2 class=heading>Ons <span>team</span></h2>

            <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?
                Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>

            <div class="wrapplayer clearfix"><a class="prv prev-player"></a> <a class="nxt next-player"></a>
                <ul class="boardmember clearfix">
                    <li class=clearfix>
                        <div>
                            <div>
                                <div class=fig01>
                                    <div class=memberimg
                                         style="background:url(images/boardMember/collega1.jpg) no-repeat top center"></div>
                                </div>
                                <div class="bg-black01 fig02"><h6 class=paragraph02>Benny Klaassen</h6>

                                    <p class="uppercaseheading red">Medewerker</p>


                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <div class=fig01>
                                    <div class=memberimg
                                         style="background:url(images/boardMember/collega2.jpg) no-repeat top center"></div>
                                </div>
                                <div class="bg-black01 fig02"><h6 class=paragraph02>Gerard Kats</h6>

                                    <p class="uppercaseheading red">Eigenaar</p>
                                </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <div class=fig01>
                                    <div class=memberimg
                                         style="background:url(images/boardMember/collega3.jpg) no-repeat top center"></div>
                                </div>
                                <div class="bg-black01 fig02"><h6 class=paragraph02>Maria Lagos</h6>
                                    <p class="uppercaseheading red">Medewerker</p>
                                </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <div class=fig01>
                                    <div class=memberimg
                                         style="background:url(images/boardMember/collega4.jpg) no-repeat top center"></div>
                                </div>
                                <div class="bg-black01 fig02"><h6 class=paragraph02>Jessica Petersen</h6>

                                    <p class="uppercaseheading red">Medewerker</p>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="sponsors bg-smallwhite">
    <div class=container>
        <div class=row><h2 class=heading>ONZE<span> SPONSOREN</span></h2>
            <ul class="client clearfix">
                <li><a href="#"><img src=images/client/client01.png alt=image></a></li>
                <li><a href="#"><img src=images/client/client02.png alt=image></a></li>
                <li><a href="#"><img src=images/client/client03.png alt=image></a></li>
                <li><a href="#"><img src=images/client/client04.png alt=image></a></li>
                <li><a href="#"><img src=images/client/client02.png alt=image></a></li>
                <li><a href="#"><img src=images/client/client05.png alt=image></a></li>
            </ul>
        </div>
    </div>
</section>
@endsection
