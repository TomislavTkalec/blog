<x-layout>
    
    <article>
        <h1>{{ $post->title }}</h1>

        <p>
            {{ $post->category->name }}
        </p>

        <div>
            {!! $post->body !!}
        </div>

    </article>
    <a href="/">Go back</a>

</x-layout>

