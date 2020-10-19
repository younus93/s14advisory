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

        .checkboxText {
            font-size: 30px;
            font-weight: 700;
            line-height: 0.8;
            color: white;
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
        <div class="row mt-40 justify-content-center">
            <div class="col-md-9 col-sm-12 col-12 text-center">
                <!-- <div class="accordion" id="accordionExample">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td style="width: 50px; background: #ddb329">
                                    <button class="btn btn-link" style="text-decoration: none !important"
                                            type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        <span class="checkboxText">S</span>
                                    </button>
                                </td>
                                <td style="width: 50px"></td>
                                <td style="width: 50px; background: #ddb329">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" style="text-decoration: none !important"
                                                type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="true"
                                                aria-controls="collapseThree">
                                            <span class="checkboxText">L</span>
                                        </button>
                                    </h5>
                                </td>
                                <td style="width: 50px"></td>
                                <td style="width: 50px; background: #ddb329">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" style="text-decoration: none !important"
                                                type="button" data-toggle="collapse"
                                                data-target="#collapseFive" aria-expanded="true"
                                                aria-controls="collapseFive">
                                            <span class="checkboxText">T</span>
                                        </button>
                                    </h5>
                                </td>
                                <td style="width: 50px"></td>
                                <td style="width: 50px; background: #ddb329">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" style="text-decoration: none !important"
                                                type="button" data-toggle="collapse"
                                                data-target="#collapseSeven" aria-expanded="true"
                                                aria-controls="collapseSeven">
                                            <span class="checkboxText">O</span>
                                        </button>
                                    </h5>

                                </td>
                                <td style="width: 50px;"></td>
                            </tr>
                            <tr>
                                <td style="width: 50px;"></td>
                                <td style="width: 50px; background: #52ab22">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" style="text-decoration: none !important"
                                                type="button" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                            <span class="checkboxText">O</span>
                                        </button>
                                    </h5>
                                </td>
                                <td style="width: 50px;"></td>
                                <td style="width: 50px; background: #52ab22">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" style="text-decoration: none !important"
                                                type="button" data-toggle="collapse"
                                                data-target="#collapseFour" aria-expanded="true"
                                                aria-controls="collapseFour">
                                            <span class="checkboxText">U</span>
                                        </button>
                                    </h5>
                                </td>
                                <td style="width: 50px;"></td>
                                <td style="width: 50px; background: #52ab22">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" style="text-decoration: none !important"
                                                type="button" data-toggle="collapse"
                                                data-target="#collapseSix" aria-expanded="true"
                                                aria-controls="collapseSix">
                                            <span class="checkboxText">I</span>
                                        </button>
                                    </h5>
                                </td>
                                <td style="width: 50px;"></td>
                                <td style="width: 50px; background: #52ab22">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" style="text-decoration: none !important"
                                                type="button" data-toggle="collapse"
                                                data-target="#collapseEight" aria-expanded="true"
                                                aria-controls="collapseEight">
                                            <span class="checkboxText">N</span>
                                        </button>
                                    </h5>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="mt-10">
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 yellow dropcap-sm text-content-big">
                                        <p>S <b>Success...</b> {{ __('messages.success') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>O <b>Organization...</b> {{ __('messages.organization') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 yellow dropcap-sm text-content-big">
                                        <p>L <b>Loyalty...</b> {{ __('messages.loyalty') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>U <b>Understanding...</b> {{ __('messages.understanding') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 yellow dropcap-sm text-content-big">
                                        <p>T <b>Teamwork...</b> {{ __('messages.teamwork') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>I <b>Integrity...</b> {{ __('messages.integrity') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 yellow dropcap-sm text-content-big">
                                        <p>O <b>Outstanding...</b>{{ __('messages.outstanding') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>N <b>Nimble...</b> {{ __('messages.nimble') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row">

                    <div class="wrapper">
                        <!-- <h1>Timeline Created With CSS Grid</h1> -->
                        <div class="timeline">
                            <dl class="timeline--entry">
                                <dt class="timeline--entry__title">
                                    Success
                                </dt>
                                <dd class="timeline--entry__detail">
                                    {{ __('messages.success') }}
                                </dd>
                            </dl>
                            <dl class="timeline--entry">
                                <dt class="timeline--entry__title greenish">
                                    Organization
                                </dt>
                                <dd class="timeline--entry__detail">
                                    {{ __('messages.organization') }}
                                </dd>
                            </dl>
                            <dl class="timeline--entry">
                                <dt class="timeline--entry__title">
                                    Loyalty
                                </dt>
                                <dd class="timeline--entry__detail">
                                    {{ __('messages.loyalty') }}
                                </dd>
                            </dl>
                            <dl class="timeline--entry">
                                <dt class="timeline--entry__title greenish">
                                    Understanding
                                </dt>
                                <dd class="timeline--entry__detail">
                                    {{ __('messages.understanding') }}
                                </dd>
                            </dl>
                            <dl class="timeline--entry">
                                <dt class="timeline--entry__title">
                                    Teamwork
                                </dt>
                                <dd class="timeline--entry__detail">
                                    {{ __('messages.teamwork') }}
                                </dd>
                            </dl>
                            <dl class="timeline--entry">
                                <dt class="timeline--entry__title greenish">
                                    Integrity
                                </dt>
                                <dd class="timeline--entry__detail">
                                    {{ __('messages.integrity') }}
                                </dd>
                            </dl>
                            <dl class="timeline--entry">
                                <dt class="timeline--entry__title">
                                    Outstanding
                                </dt>
                                <dd class="timeline--entry__detail">
                                    {{ __('messages.outstanding') }}
                                </dd>
                            </dl>
                            <dl class="timeline--entry">
                                <dt class="timeline--entry__title greenish">
                                    Nimble
                                </dt>
                                <dd class="timeline--entry__detail">
                                    {{ __('messages.nimble') }}
                                </dd>
                            </dl> 
                        </div>
                    </div>
                </div>
                <!-- <div class="row accordion" id="accordionExample">
                    <div class="col-md-5">
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 yellow dropcap-sm text-content-big">
                                        <p>S <b>Success...</b> {{ __('messages.success') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 yellow dropcap-sm text-content-big">
                                        <p>L <b>Loyalty...</b> {{ __('messages.loyalty') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 yellow dropcap-sm text-content-big">
                                        <p>T <b>Teamwork...</b> {{ __('messages.teamwork') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 yellow dropcap-sm text-content-big">
                                        <p>O <b>Outstanding...</b>{{ __('messages.outstanding') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="outer-box shadow-lg">
                            <button class="inner-box w-100 yellow" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                <span class="checkboxText">
                                    S
                                </span>
                            </button>
                            <button class="inner-box w-100" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                <span class="checkboxText">
                                    O
                                </span>
                            </button>
                            <button class="inner-box w-100 yellow" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="true"
                                                aria-controls="collapseThree">
                                <span class="checkboxText">
                                    L
                                </span>
                            </button>
                            <button class="inner-box w-100"data-toggle="collapse"
                                                data-target="#collapseFour" aria-expanded="true"
                                                aria-controls="collapseFour">
                                <span class="checkboxText">
                                    U
                                </span>
                            </button>
                            <button class="inner-box w-100 yellow" data-toggle="collapse"
                                                data-target="#collapseFive" aria-expanded="true"
                                                aria-controls="collapseFive">
                                <span class="checkboxText">
                                    T
                                </span>
                            </button>
                            <button class="inner-box w-100" data-toggle="collapse"
                                                data-target="#collapseSix" aria-expanded="true"
                                                aria-controls="collapseSix">
                                <span class="checkboxText">
                                    I
                                </span>
                            </button>
                            <button class="inner-box w-100 yellow" data-toggle="collapse"
                                                data-target="#collapseSeven" aria-expanded="true"
                                                aria-controls="collapseSeven">
                                <span class="checkboxText">
                                    O
                                </span>
                            </button>
                            <button class="inner-box w-100" data-toggle="collapse"
                                                data-target="#collapseEight" aria-expanded="true"
                                                aria-controls="collapseEight">
                                <span class="checkboxText">
                                    N
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>O <b>Organization...</b> {{ __('messages.organization') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>U <b>Understanding...</b> {{ __('messages.understanding') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>I <b>Integrity...</b> {{ __('messages.integrity') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                             data-parent="#accordionExample">
                            <div class="timeline-content">
                                <div class="timeline-content-inner">
                                    <div class="dropcap-3 dropcap-sm text-content-big">
                                        <p>N <b>Nimble...</b> {{ __('messages.nimble') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
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
        $(document).scroll(function (){
            console.log($( ".outer-box button" ).scrollTop());
        })
    </script>
@append