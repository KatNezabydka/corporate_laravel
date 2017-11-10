<div id="content-page" class="content group">
    <div class="clear"></div>
    <div class="posts">
        <div class="group portfolio-post internal-post">
            @if($portfolio)

                <div id="portfolio" class="portfolio-full-description">

                    <div class="fulldescription_title gallery-filters">
                        <h1>{{$portfolio->title}}</h1>
                    </div>

                    <div class="portfolios hentry work group">
                        <div class="work-thumbnail">
                            <a class="thumb"><img
                                        src="{{asset(config('settings.theme'))}}/images/projects/{{ $portfolio->img->max }}"
                                        alt="{{Lang::get('ru.empty')}}" title="{{$portfolio->title}}"/></a>
                        </div>
                        <div class="work-description">
                            <p> {{$portfolio->text}}</p>
                            <div class="clear"></div>
                            <div class="work-skillsdate">
                                <p class="skills"><span class="label">{{Lang::get('ru.Filter')}}
                                        : </span> {{ $portfolio->filter->title }}</p>
                                <p class="workdate"><span class="label">{{Lang::get('ru.Customer')}}
                                        : </span> {{ $portfolio->customer }}</p>
                                {{--Добавляем дату создания--}}
                                @if($portfolio->create_at)
                                    <p class="workdate"><span class="label">{{Lang::get('ru.Year')}}
                                            : </span> {{ $portfolio->ctreated_at->format('Y') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="clear"></div>
                    {{--Проверяем если колекция не пуста, выводим снизу их--}}
                    @if(!$portfolios->isEmpty())
                    <h3>{{Lang::get('ru.other_projects')}}</h3>

                    <div class="portfolio-full-description-related-projects">

                        @foreach($portfolios as $portfolio)

                            <div class="related_project">
                                <a class="related_proj related_img" href="{{ route('portfolios.show',['alias' => $portfolio->alias] ) }}" title="{{$portfolio->title}}"><img
                                            src="{{asset(config('settings.theme'))}}/images/projects/{{ $portfolio->img->mini }}" alt="{{Lang::get('ru.empty')}}" title="{{$portfolio->title}}"/></a>
                                <h4><a href="{{ route('portfolios.show',['alias' => $portfolio->alias] ) }}">{{$portfolio->title}}</a></h4>
                            </div>

                            @endforeach

                    </div>

                        @endif

                </div>

            @endif
            <div class="clear"></div>
        </div>
    </div>
</div>