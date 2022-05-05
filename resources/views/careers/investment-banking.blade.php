@extends('layouts.app')
@section('head')

@endsection
@section('content')
    <section class="position-overview">
        <div class="container">
            <div class="position-heading pt-5 pb-4">
                <h3>Investment Banking (Manager Level)</h3>
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
                    <li>Developing financial analysis and financial model for the valuation of securities such as pricing for offerings or M&A transaction.</li>
                    <li>Conducting due diligence process.</li>
                    <li>Conducting researches to perform various analysis in preparation for pitching with clients</li>
                    <li>Producing presentation materials to convey key messages and preparing/reviewing valuation of a business</li>
                    <li>Assisting deal execution process including corporate finance, regulatory and marketing process</li>
                    <li>Drafting and preparing prospectus and/or information memorandumand/orroad show materials.</li>
                    <li>Assisting senior bankers in servicing and maintaining client relationship</li>
                </ul>
            </div>
            <div class="my-4">
                <h6 class="overview-heading">Requirements:</h6>
                <ul>
                    <li>Bachelor’s Degree or higher in Finance or Accounting.</li>
                    <li>Excellent in spoken and written English.</li>
                    <li>At least 2 years work experience in Investment Banking with strong knowledge of SEC and SET regulations, FA license are preferable (for manager level)</li>
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
