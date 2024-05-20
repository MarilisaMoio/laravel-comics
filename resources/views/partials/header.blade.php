<header>
    <div class="container">
        <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="">
        <nav>
            <ul>
                @foreach ($nav as $singleNav)
                    <li><a href="#">{{ $singleNav }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>

{{-- <li v-for="element, index in navElements" :class="{ 'active': index == activeElement }" @click="changeActive(index)"><a href="#">{{ element }}</a></li> --}}
