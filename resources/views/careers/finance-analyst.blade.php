@extends('layouts.app')
@section('head')

@endsection
@section('content')
    <section class="position-overview">
        <div class="container">
            <div class="position-heading pt-5 pb-4">
                <h3>Finance Analyst</h3>
                <div>
                    <button class="primary-button button-sm full-width semi-rounded" data-toggle="modal" data-target="#positionForm">
                        Apply for position
                    </button>
                </div>
            </div>
            <hr/>

            <div class="my-4">
                <h6 class="overview-heading">Company summary</h6>
                <p>S14 Advisory Company Limited company has been granted a licensefrom the SEC in 2016, 
                    and is now looking for talent, to join as team leader. to help in forming a team, 
                    and propelling the company towards professional standard in the future.</p>
            </div>
            <div class="my-4">
                <h6 class="overview-heading">Responsibilities:</h6>
                <ul>
                    <li>Collect relevant data, analyzefinancial data,and create financial models for decision support.</li>
                    <li>Conduct comparable analysis and market research to support financial analysis.</li>
                    <li>Work closely with the team to ensure accurate financial reporting.</li>
                    <li>Develop financial models to support valuation, planning, and forecasting.</li>
                    <li>Prepare and give business reviews and presentationsto the Senior managementteam.</li>
                    <li>Create recommendations to be presented to management and executives.</li>
                    <li>Maintain up-to-date technical knowledge of financial instruments, market conditions, andtrends.</li>
                    <li>Assist the senior management team inthedeal execution process</li>
                </ul>
            </div>
            <div class="my-4">
                <h6 class="overview-heading">Requirements:</h6>
                <ul>
                    <li>Bachelor’s Degree or higher in Finance or Accounting.</li>
                    <li>Ability to streamline functions and the passion to learn and grow.</li>
                    <li>Strong interpersonal skills, including written and oral communication skills in English</li>
                    <li>Strong fluency with Excel formulas and functions.</li>
                    <li>Strong analytical and data gathering skills</li>
                    <li>Strong quantitative and analytical competency.</li>
                </ul>
            </div>
            <div class="my-4">
                <h6 class="overview-heading">Work place:</h6>
                <p>170/37 Ocean Tower 1, 13thFloor, Soi Sukhumvit 16 (Sammitr), Ratchadaphisek Road, Klongtoey, Bangkok 10110</p>
            </div>
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-md-6">
                    <img src="/img/logos/logo.png" style="max-height: 50px;" alt="logo" id="main_logo">
                    <h6 class="overview-heading mt-3 mb-0">S14 Advisory Company Limited</h6>
                    <p style="line-height: 18px;margin: 0;">
                    170/37 Ocean Tower 1, 13thFloor, Soi Sukhumvit 16 (Sammitr),Ratchadaphisek Road, Klongtoey, Bangkok 10110
                    </p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center text-center my-4">
                <div class="col-md-6">
                    <button class="primary-button button-sm full-width semi-rounded" data-toggle="modal" data-target="#positionForm">
                        Apply for position
                    </button>
                </div>
            </div>
        </div>
    </section>
    @include('modals._positionform')
@endsection
@section('scripts')

    <script></script>

@endsection
