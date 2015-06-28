@foreach($categories as $type => $contests)
    <div class="panel panel-contests">
        <div class="panel-heading" style="background-color: {{ config('colors.'.$type, '#000') }}">
            <h3 class="panel-title text-uppercase">{{ $type }}</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                @foreach($contests as $index => $contest)
                    <div class="col-xs-12 col-sm-4 col-md-3 text-center">
                        <div class="card overlay-caption">
                            <img src="{{ $contest->image or 'https://unsplash.it/248/?random&' . str_random(4) }}"
                                 alt="Cover image of {{ $contest->name }}"/>

                            <div class="caption text-left"
                                 style="background: {{ $contest->bg_color }}; color: {{ $contest->color }}">
                                <div>{{ $contest->name }}</div>
                                <div>
                                    <small><?php $c = $contest->entries()->count(); echo $c . ($c == 1 ? ' entry' : ' entries') ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endforeach