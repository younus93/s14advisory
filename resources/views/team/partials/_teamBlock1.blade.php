<div class="col-md-3 col-sm-6 col-12">
    <div class="team-member">
        <div class="team-member-image">
            <a href="{{ url("/team/{$slug}") }}">
                <img src="{{ asset('img/s14team/'.$slug.'.jpg') }}" style="max-height: 337px;" alt="img">
                <div class="team-member-overlay">
                    <div class="team-member-content">
                    </div>
                </div>
            </a>
        </div>
        <div class="team-member-name">
            <h4><a href="{{ url("/team/{$slug}") }}">{{ $person['name'] }}</a></h4>
            <h6>{{ $person['role'] }}</h6>
            <h6><a target="_blank" href="{{ $person['linkedIn'] }}"><i class="fab fa-linkedin-in"></i></a></h6>
        </div>
    </div>
</div>