@section('head')
    @parent
    <style>
        .card-header {
            border-radius: 25px !important;
            width: 50px;
            padding: 5px 5px 5px 5px;
        }

        .card-header:hover {
            background: #52ab22;
        }

        .card-header button:hover {
            color: #ffffff;
        }

        .card-header-active {
            background: #52ab22;
        }

        .card-header-active button {
            color: #ffffff;
        }
    </style>
@append

<div class="section-block" id="values">
    <div class="container">
        <div class="section-heading center-holder">
            <h2 class="bold">Our Values, <span class="italic libre-baskerville primary-color">Your Solution</span>
            </h2>
            <div class="section-heading-line"></div>
        </div>
        <div class="row mt-40">
            <div class="offset-md-3 col-md-6 col-sm-12 col-12">
                <div class="accordion" id="accordionExample">
                    <div class="d-flex justify-content-center">
                        <div class="card">
                            <div class="card-header card-header-active text-center" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" style="text-decoration: none !important"
                                            type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        S
                                    </button>
                                </h5>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" style="text-decoration: none !important"
                                            type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                        O
                                    </button>
                                </h5>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" style="text-decoration: none !important"
                                            type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                        L
                                    </button>
                                </h5>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" style="text-decoration: none !important"
                                            type="button" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="true"
                                            aria-controls="collapseFour">
                                        U
                                    </button>
                                </h5>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" style="text-decoration: none !important"
                                            type="button" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="true"
                                            aria-controls="collapseFive">
                                        T
                                    </button>
                                </h5>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center" id="headingSix">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" style="text-decoration: none !important"
                                            type="button" data-toggle="collapse"
                                            data-target="#collapseSix" aria-expanded="true"
                                            aria-controls="collapseSix">
                                        I
                                    </button>
                                </h5>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center" id="headingSeven">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" style="text-decoration: none !important"
                                            type="button" data-toggle="collapse"
                                            data-target="#collapseSeven" aria-expanded="true"
                                            aria-controls="collapseSeven">
                                        O
                                    </button>
                                </h5>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center" id="headingEight">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" style="text-decoration: none !important"
                                            type="button" data-toggle="collapse"
                                            data-target="#collapseEight" aria-expanded="true"
                                            aria-controls="collapseEight">
                                        N
                                    </button>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>S <b>Success</b>  We put our heart, mind, and soul into each and every single work. This is the secret of our success.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>O <b>Organization</b>
                                            We believe that the achievements of an organization are the results of
                                            the
                                            combined
                                            effort of each individual..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>L <b>Loyalty</b>
                                            The strength of brand loyalty begins with our service makes our client's
                                            feelings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>U <b>Understanding</b>
                                            We understand our client's needs and provide the service
                                            accordingly.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>T <b>Teamwork</b>
                                            We work together to meet the needs of our clients and to help the
                                            company
                                            win.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>I <b>Integrity</b>
                                            We uphold the highest standards of integrity in all our actions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>O <b>Outstanding</b>
                                            Our work speaks more than our word, that's why we are always outstanding in what we do..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>N <b>Nimble</b>
                                            We are quick and neat in what we do.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    @parent
    <script>
        $('#accordionExample .card').on("click", function () {
            $(this).siblings().find(".card-header").removeClass("card-header-active");
            $(this).find(".card-header").toggleClass("card-header-active");
        });
    </script>
@append