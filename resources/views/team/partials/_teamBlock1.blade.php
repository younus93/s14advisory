<div class="col-md-3 col-sm-6 col-12">
    <div class="team-member">
        <div class="team-member-image">
            <img src="{{ asset('img/s14team/'.$slug.'.jpg') }}" style="max-height: 337px;" alt="img">
            <div class="team-member-overlay">
                <div class="team-member-content">
                    <ul>
                        <li><a target="_blank" href="{{ $person['linkedIn'] }}"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="team-member-name">
            <h4><a href="{{ url("/team/{$slug}") }}">{{ $person['name'] }}</a></h4>
            <h6>{{ $person['role'] }}</h6>
        </div>
    </div>
</div>