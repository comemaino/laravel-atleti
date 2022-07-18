<div class="container">
    <ul>
        @foreach ($athletes as $athlete)
        <li>{{ $athlete->name }}</li>
        <li>{{ $athlete->genre }}</li>
        
        @endforeach
    </ul>
</div>