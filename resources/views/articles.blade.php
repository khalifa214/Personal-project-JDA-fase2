<x-layout>
    @if ($articles != null)
        @if (request()->is('artikel')) 
            @foreach ($articles as $article)
                <x-article-list :id="$article['id']" :title="$article['title']" :description="$article['description']"></x-article-list> 
            @endforeach
        @endif
        @if (request()->is('artikel/*'))
            <x-article :id="$articles['id']" :title="$articles['title']" :description="$articles['description']"></x-article>
        @endif
    @endif
</x-layout>