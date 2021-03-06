{{--Для отображения правого бара на главной странице--}}

    <div class="widget-first widget recent-posts">

        @if($articles)
            <h3>{{trans('ru.from_blog')}}</h3>
            <div class="recent-post group">


                @foreach($articles as $article)

                    <div class="hentry-post group">
                        <div class="thumb-img"><img src="{{asset(config('settings.theme')) }}/images/articles/{{ $article->img->mini }}"
                                                    alt="{{Lang::get('ru.empty')}}" title="001"/></div>
                        <div class="text">
                            {{--format('') - метода класса Carbon который работает со временем--}}
                            <a href="{{ route('articles.show',['alias'=>$article->alias]) }}" title="Section shortcodes &amp; sticky posts!" class="title">{{ $article->title }}</a>
                            <p class="post-date">{{ $article->created_at->format('F d, Y') }}</p>
                        </div>
                    </div>

                @endforeach


            </div>

         @endif



    <div class="widget-last widget text-image">
        <h3>{{ Lang::get('ru.customer_support') }}</h3>
        <div class="text-image" style="text-align:left"><img
                    src="{{asset(config('settings.theme')) }}/images/callus.gif" alt="Customer support"/></div>
        <p>Оставьте заявку сейчас и получите скидку </p>
    </div>
    </div>

