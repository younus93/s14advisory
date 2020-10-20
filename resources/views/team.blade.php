@section('head')
    @parent
    <style>
        .profile {
            max-height: 450px;
            max-width: 360px;
            left: -180px;
            position: relative;
            transition: ease-in 0.6s;
        }
        .team-classic:hover .profile {
            transform: translateX(180px);
        }
    </style>
@append


<div class="section-block-grey" id="team">
    <div class="container">
        <div class="section-heading center-holder">
            <h2 class="bold">Our team. <span class="italic libre-baskerville primary-color">Your advantage</span>
            </h2>
            <div class="section-heading-line"></div>
            <p>We work on a strategic review process with a predefined agenda which ensures that the financial
                advise
                matters are addressed at the right time with In-Depth discussions.</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-12">
                <div class="team-classic"
                     style="overflow: hidden; background: url('/img/background.jpg'); background-size: cover">
                    <img src="img/s14team/piyapa-chongsathien.png" class="profile" id="photo" alt="img">
                    <div class="team-classic-overlay">
                        <div class="team-classic-content">
                            <a href="https://www.linkedin.com/in/piyapa-chongsathien-7992b1104/"><i class="fab fa-linkedin"></i></a>
                        </div>
                        <a href="/team/piyapa-chongsathien">
                            <div class="team-classic-name">
                                <h4>Ms. Piyapa Chongsathien</h4>
                                <h6 class="italic libre-baskerville">
                                    Founder & Managing Director
                                </h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-4 col-12">
                <div class="team-classic">
                    <!-- <img src="https://images.pexels.com/photos/1571877/pexels-photo-1571877.jpeg?cs=srgb&dl=accomplishment-achievement-adult-1571877.jpg&fm=jpg"
                         style="max-height: 450px;" alt="img"> -->
                         <!-- <img src="https://images.pexels.com/photos/3184434/pexels-photo-3184434.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" -->
                         <img src='/img/our-team.jpg' class="w-100" style="max-height: 450px;" alt="img">
                    <div class="team-classic-overlay">
                        <a href="/team">
                            <div class="team-classic-name">
                                <h4>Meet our Team</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
