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

</footer>
