@extends('layouts.app')
@section('head')

@endsection
@section('content')
    <section class="position-overview">
        <div class="container">
            <div class="position-heading py-5">
                <h3>Vice President (Financial Advisor)/ผู้อํานวยการ (ที.ปรึกษาทางการเงิน)</h3>
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
                    <li>Lead engagement teams and manage client deliverables and engagement execution.</li>
                    <li>Maximize clients’ benefits by providing financial advisory services in terms of issuing and 
                        offering securities, merger and acquisition, independent financial advisor, etc.</li>
                    <li>Manage and coach junior engagement team members</li>
                    <li>Lead engagement documentation negotiations, due diligence meetings and serve as the primary client contact</li>
                    <li>Review valuation opinions and financial models</li>
                    <li>Present financial analysis to client senior management, internal engagement review committee and other relevant client advisors.</li>
                </ul>
            </div>
            <div class="my-4">
                <h6 class="overview-heading">Requirements:</h6>
                <ul>
                    <li>Master’s Degree in Finance or Accounting.</li>
                    <li>CFA preferred.</li>
                    <li>5+ year work experience in investment banking and possess FA license are preferable</li>
                    <li>Able to execute various IB transactions i.e. IPO, Valuation, Merger and Acquisition, IFA, etc. with strong knowledge of SEC and SET regulations.</li>
                    <li>Proven experience leading teams and executing client engagements</li>
                    <li>Superb presentation, interpersonal, communication skills and positive attitude.</li>
                    <li>Excellent spoken and written English</li>
                </ul>
            </div>
            <div class="my-4">
                <h6 class="overview-heading">Work place:</h6>
                <p>170/37 Ocean Tower 1, 13thFloor, Soi Sukhumvit 16 (Sammitr), Ratchadaphisek Road, Klongtoey, Bangkok 10110</p>
            </div>
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-md-6">
                    <h6 class="overview-heading">S14 Advisory Company Limited</h6>
                    <p>
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
