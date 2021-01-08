@extends('layouts.app')

@section('content')
<div class="container">
  <div class="p-3 bg-white rounded jumbotron jumbotron-fluid p-md-5">
    <div class="container">
      <h1 class="display-4">Build a site from scratch with Next.js</h1>
      <p class="lead">
        In this collection we're going to learn how to harness the power of Next.js + TypeScript and how to work with Netlify in order to deploy our site for others to enjoy!
      </p>
    </div>
  </div>
  <div class="mb-4 row">

    @if(Auth::user()->role == 'typeA')
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Welcome</h5>
        </figure>
      </div>
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/MxR5I5_hOKk" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Introduction</h5>
        </figure>
      </div>
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/AGl52moyISU" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Serverless</h5>
        </figure>
      </div>
    @elseif(Auth::user()->role == 'typeB')
      <div class="mb-3 justify-content-center row">
        <div class="m-2 col-sm card">
          <figure>
            <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
            <h5 class="card-title">Welcome</h5>
          </figure>
        </div>
        <div class="m-2 col-sm card">
          <figure>
            <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
            <h5 class="card-title">Welcome</h5>
          </figure>
        </div>
        <div class="m-2 col-sm card">
          <figure>
            <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
            <h5 class="card-title">Welcome</h5>
          </figure>
        </div>
        <div class="m-2 col-sm card">
          <figure>
            <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
            <h5 class="card-title">Welcome</h5>
          </figure>
        </div>
        <div class="m-2 col-sm card">
          <figure>
            <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
            <h5 class="card-title">Welcome</h5>
          </figure>
        </div>
        <div class="m-2 col-sm card">
          <figure>
            <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
            <h5 class="card-title">Welcome</h5>
          </figure>
        </div>
        <div class="m-2 col-sm card">
          <figure>
            <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
            <h5 class="card-title">Welcome</h5>
          </figure>
        </div>
        <div class="m-2 col-sm card">
          <figure>
            <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
            <h5 class="card-title">Welcome</h5>
          </figure>
        </div>
        <div class="m-2 col-sm card">
          <figure>
            <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
            <h5 class="card-title">Welcome</h5>
          </figure>
        </div>
        <div class="m-2 col-sm card">
          <figure>
            <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
            <h5 class="card-title">Welcome</h5>
          </figure>
        </div>
      </div>
    @elseif(Auth::user()->role == 'typeC')
    <div class="mb-3 row">
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Welcome</h5>
        </figure>
      </div>
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Welcome</h5>
        </figure>
      </div>
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Welcome</h5>
        </figure>
      </div>
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Welcome</h5>
        </figure>
      </div>
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Welcome</h5>
        </figure>
      </div>
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Welcome</h5>
        </figure>
      </div>
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Welcome</h5>
        </figure>
      </div>
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Welcome</h5>
        </figure>
      </div>
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Welcome</h5>
        </figure>
      </div>
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/JCOPVq2AYXc" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Welcome</h5>
        </figure>
      </div>
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/u8iv_yhSRI8" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Welcome</h5>
        </figure>
      </div>
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/1nRWL5ljOqU" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Welcome</h5>
        </figure>
      </div>
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/OndBtUUD8XE" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Welcome</h5>
        </figure>
      </div>
      <div class="m-2 card">
        <figure>
          <iframe src="https://www.youtube.com/embed/Fvoi6g52bk0" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353"></iframe>
          <h5 class="card-title">Welcome</h5>
        </figure>
      </div>
    </div>
    @endif
  </div>
</div>
@endsection
