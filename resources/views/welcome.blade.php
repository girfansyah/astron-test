@extends('layouts.app')

@section('content')
<section>
  <div class="container">
    <div class="row hero">

      <div class="col justify-content-center headline-banner">
        <h2 class="mb-3 font-weight-500">
          Learn the best JavaScript tools and frameworks from industry pros.
        </h2>
        <p class="mb-3 text-black-50">
          Video tutorials for badass web developers.
        </p>
        <a href="/login" class="btn btn-primary btn-md">Click to start learning</a>
      </div>
      <div class="mb-3 text-center col-lg-6 col-md-6">
        <img src="{{ asset('/images/banner-illustration.svg')}}" alt="banner" class="img-banner">
      </div>
    </div>
    <section class="row summary">
      <div class="text-center summary-tools">
        <div class="wrapper-tools">
          <img class="img-tools" src="{{asset('images/now.png')}}" alt="tool-now">
          <div class="title">
            <p>Now</p>
          </div>
        </div>

        <div class="wrapper-tools">
          <img class="img-tools" src="{{asset('images/yarn.png')}}" alt="tool-yarn">
          <div class="title">
            <p>Yarn</p>
          </div>
        </div>
        <div class="wrapper-tools">
          <img class="img-tools" src="{{asset('images/webpack.png')}}" alt="tool-webpack">
          <div class="title">
            <p>Webpack</p>
          </div>
          </div>

        <div class="wrapper-tools">
          <img class="img-tools" src="{{asset('images/xstate.png')}}" alt="tool-xstate">
          <div class="title">
            <p>Xstate</p>
          </div>
        </div>

        <div class="wrapper-tools">
          <img class="img-tools" src="{{asset('images/x-ray.png')}}" alt="tool-xray">
          <div class="title">
            <p>X-ray</p>
          </div>
        </div>

        <div class="wrapper-tools">
          <img class="img-tools" src="{{asset('images/wp.png')}}" alt="tool-wordpress">
          <div class="title">
            <p>Wordpress</p>
          </div>
        </div>

      </div>
      <div class="col summary-info">
        <h1>What is Astron?</h1>
        <p>Astron is a group of working web development professionals and open source contributors that provide you with concise, information dense video courses on the best tools in the industry.</p>
        <p>We are dedicated to respecting your time. This means that egghead courses get to the point and deliver knowledge that you can use today. You won't find boring 8 hour courses on egghead, instead you'll find a wealth of bite-sized courses that pack more information in a fraction of the time.</p>
      </div>
    </section>
    <div class="container pt-5">
      <div class="mb-3 card-review">
        <i class="fa fa-quote-left"></i>
        <h3 class="text-center">If you're a developer, you owe it to yourself to follow @astorn. Short, instructional videos on the technologies we use.
        </h3>
        <div class="card-review-footer">
          <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle" title="review jhon" alt="jhon" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
          <h4 class="px-2 text-black-50">Jhon Doe - Software Developer, Notion</h4>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
