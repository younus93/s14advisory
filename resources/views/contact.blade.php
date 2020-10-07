<div id="contact" class="section-block-parallax jarallax black-overlay-60" data-jarallax="" data-speed="0.6"
     style="background-image: none; z-index: 0;"
     data-jarallax-original-styles="background-image: url('img/content/classic/homebg2.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-12">
                <div class="contact-box-place-office"><i class="icon-building-1"></i><h4>Bangkok Office</h4>
                    <h6>170/37 Ocean Towers 1</h6>
                    <p>13th Floor, Khwaeng Khlong Toei, Klongtoey, Bangkok 10110.</p>
                    <ul>
                        <li><i class="fas fa-envelope-open"></i>info@s14advisory.com</li>
                        <li><i class="fas fa-phone"></i>+66 2661 9955-8</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-12">
                <div class="small-heading center-holder mb-40"><span
                            class="white-color uppercase">Drop us a message!</span></div>
                <div class="mt-40">
                    <form method="post" id="contactForm" class="transparent-form">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-12">
                                <input type="text" required id="name" placeholder="First Name">
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <input type="text" required id="phone" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <input type="email" required id="email" placeholder="Email Address">
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <input type="text" required id="subject" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <textarea id="message" required placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" id="contactBtn" class="white-button button-sm semi-rounded">
                                    Send Message
                                </button>
                            </div>
                            <div class="col-12">
                               <p id="feedbackMsg"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="jarallax-container-1"
         style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;">
        <div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;http://specthemes.com/webmaker/webmaker-demo/img/content/classic/homebg2.jpg&quot;); position: absolute; top: 0px; left: 0px; width: 1920px; height: 590.4px; overflow: hidden; pointer-events: none; margin-top: 48.3px; transform: translate3d(0px, -75.1px, 0px);"></div>
    </div>
</div>
<div id="map" class="map-1">
    <script async="" defer=""
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA2lvudmnD4hV_2UbXm_n1REd2alVlXJw&amp;callback=initMap"></script>
</div>

@section('scripts')
    @parent
    <script>
        $("#contactForm").submit(function (e) {
            e.preventDefault();
            submitContactForm();
        });

        function submitContactForm()
        {
            let name = $('#name').val();
            let phone = $('#phone').val();
            let email = $('#email').val();
            let subject = $('#subject').val();
            let message = $('#message').val();
            let btn = $('#contactBtn');
            btn.attr("disabled",true);
            sendContactForm(name,phone,email,subject,message)
        }

        function sendContactForm(name,phone,email,subject,message)
        {
                $.post("{{ url('/send-contact-email') }}", {
                        _token: '{!! csrf_token() !!}',
                        name: name,
                        email: email,
                        phone: phone,
                        subject: subject,
                        message: message,
                    },
                    function (data, status) {
                        $('#contactBtn').attr('disabled',false);
                        $('#contactForm').trigger("reset");
                        $('#feedbackMsg').html("Thanks for contacting us! We will respond shortly");
                    }
                );
        }
    </script>
@append