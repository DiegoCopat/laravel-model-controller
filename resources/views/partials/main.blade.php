<h1>{{ $title }}</h1>
<div class="cards">
    <section class="container">
        @foreach ($movies as $movie)
            
                <div class="card">
                    <h2>{{ $movie->title }}</h2>
                    <h4>{{ $movie->original_title }}</h4>
                    <h4>{{ $movie->nationality }}</h4>
                    <h5>{{ $movie->vote }}</h5>
                    <small>{{ $movie->nationality . " - " . $movie->date }}</small>
                </div>
            
        @endforeach
    </section>
</div>

