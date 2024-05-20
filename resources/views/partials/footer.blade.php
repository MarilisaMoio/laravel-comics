<footer>
    <section class="footer-nav">
        <div class="container">
            @foreach ($footerNav as $nav)
                <nav>
                    <ul>
                        @foreach ($nav as $listElement)
                        <li><a href="#">{{ $listElement }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            @endforeach
        </div>
    </section>
    <section class="contacts">
        <div class="container">
            <button type="button">sign-up now!</button>
            <div class="social">
                <span>follow us</span>
                @foreach ($socialIcons as $icon)
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-' . $icon ) }}" alt="">
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</footer>
