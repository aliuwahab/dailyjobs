<ul>
    @foreach($jobs as $job)
        <li>{{ $job->title }}</li>
    @endforeach
</ul>
