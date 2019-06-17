<div class="sidebar-module sidebar-module-inset">
    <h4>News about the team</h4>
</div>

<div class="sidebar-module">
    @isset($news_team)
        @foreach($news_team as $team)
            
            <a class="btn btn-info" href="/news/tag_news/{{ $team->id }}">
                {{$team->name}}
            </a>
            <br><br>
        
         @endforeach
   @endisset
</div>

<div class="sidebar-module">
    <ol class="list-unstyled">
            <li><a href="#">March 2014</a></li>
            <li><a href="#">February 2014</a></li>
            <li><a href="#">January 2014</a></li>
            <li><a href="#">December 2013</a></li>
            <li><a href="#">November 2013</a></li>
            <li><a href="#">October 2013</a></li>
            <li><a href="#">September 2013</a></li>
            <li><a href="#">August 2013</a></li>
            <li><a href="#">July 2013</a></li>
            <li><a href="#">June 2013</a></li>
            <li><a href="#">May 2013</a></li>
            <li><a href="#">April 2013</a></li>
    </ol>
</div>