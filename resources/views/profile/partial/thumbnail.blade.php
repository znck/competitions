<div class="col-xs-6 col-sm-4 col-md-3 text-center">
    <a href="{{ route('contest.show', $contest->slug) }}">
        <div class="card overlay-caption"
             style="background-image: url('{{ route('contest.cover', [$contest->slug, 300]) }}')">
            <div class="caption text-left">
                <div>{{ $contest->name }}</div>
                <div>
                    <small>
                        <?php $c = $contest->entries()->count(); echo $c . ($c == 1 ? ' entry' : ' entries') ?>
                        <span class="badge pull-right" style="font-weight: 200">{{ $contest->public ? 'published' : 'draft' }}</span>
                    </small>
                </div>
            </div>
        </div>
    </a>
</div>