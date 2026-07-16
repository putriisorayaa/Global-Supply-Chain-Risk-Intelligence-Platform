@if(!empty($news))

<h3 class="section-title">📰 Latest News</h3>

<div class="news-list">

    @forelse(array_slice($news, 0, 3) as $article)

        <div class="news-card">

            <h4>{{ $article['title'] }}</h4>

            <div class="news-meta">

                <span>
                    <strong>Source</strong><br>
                    {{ $article['source'] }}
                </span>

                <span>
                    <strong>Published</strong><br>
                    {{ $article['published_at'] }}
                </span>

                <span>
                    <strong>Sentiment</strong><br>
                    {{ $article['sentiment'] }}
                </span>

            </div>

            <a href="{{ $article['url'] }}"
               target="_blank"
               class="read-more">

                Read More →

            </a>

        </div>

    @empty

        <p>Tidak ada berita.</p>

    @endforelse

</div>

@endif