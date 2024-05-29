<x-layout>
    @if ($articles != null)
        @if (request()->is('artikel')) 
            @foreach ($articles as $article)
                <x-article.article-list :id="$article['id']" :title="$article['title']" :description="$article['description']"></x-article.article-list> 
            @endforeach
        @endif
        @if (request()->is('artikel/*'))
            <x-article.article :id="$articles['id']" :title="$articles['title']" :image="$articles['image']" :description="$articles['description']"></x-article.article>
        @endif
    @endif
</x-layout>