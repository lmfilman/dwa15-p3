@extends('_master')

@section('title')
  P3 - Developer's Best Friend Homepage
@stop

@section('content')
  <div class="container">
      <div class="starter-template">
        <h1>Developer's Best Friend</h1>
        <p class="lead">This application was written by Laura Filman as P3 for Harvard Extension's <a href="http://dwa15.com">Dynamic Web Applications</a> 2014 summer course.  
          The application contans two tools, a <em>Lorem Ipsum Generator</em> and a <em>User Generator</em>.
        </p>
        <p>
        	The <a href='/lorem-ipsum'>Lorem Ipsum Generator</a> is a tool which generates paragraphs of Latin text, which can be incorporated into a website during the design phase to 
        	encourage developers and reviewers to focus on the visual design of a page and not have their attention drawn to the textual content.
        </p>
        <p>
        	The <a href='/random-user'>User Generator</a> is a tool which can be used by developers to prepopulate their apps with fake user data, including names, birthdays, locations, and profile blurbs.
        	Prepopulating an app with fake user data can be helpful for design and testing purposes.
        </p>
      </div>
    </div>
@stop