<h2>
    {{ $job->title }}
</h2>

<p>
    Congrats! Your job is live on our website.
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">Visit Your Job Listing</a>
</p>
