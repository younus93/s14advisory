<div class="col-md-3 col-sm-6 col-12">
    <div class="team-circle">
        <a href="{{ url("/team/{$slug}") }}">
            <div class="team-circle-img">
                <img src="/img/s14team/{{ $slug }}.jpg" style="max-height: 200px;" alt="img">
            </div>
            <div class="team-circle-text">
                <h4><a href="{{ url("/team/{$slug}") }}">{{ $person['name'] }}</a></h4>
                <h5 class="italic libre-baskerville">{{ $person['role'] }}</h5>
                <ul class="team-circle-social">
                    <li><a target="_blank" href="{{ $person['linkedIn'] }}"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </a>
    </div>
</div>