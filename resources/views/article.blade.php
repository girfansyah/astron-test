@extends('layouts.app')

@section('content')
<div class="container">
  <div class="p-3 bg-white rounded jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Fluid Article</h1>
      <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit, atque tempora ab fugit ex explicabo animi velit expedita. Inventore, nihil.</p>
    </div>
  </div>
  <div class="pt-2 row">
    @if(Auth::user()->role == 'typeA')
      <div class="p-2 col-md-4">
        <div class=" card">
          <div class="card-body">
            <h5 class="card-title">
              Lorem ipsum dolor
            </h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
            </p>

            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="p-2 col-md-4">
        <div class=" card">
          <div class="card-body">
            <h5 class="card-title">
              Lorem ipsum dolor
            </h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
            </p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="p-2 col-md-4">
        <div class=" card">
          <div class="card-body">
            <h5 class="card-title">
              Lorem ipsum dolor
            </h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
            </p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    @elseif(Auth::user()->role == 'typeB')
    <div class="p-2 col-md-4">
      <div class=" card">
        <div class="card-body">
          <h5 class="card-title">
            Lorem ipsum dolor
          </h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
          </p>

          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="p-2 col-md-4">
      <div class=" card">
        <div class="card-body">
          <h5 class="card-title">
            Lorem ipsum dolor
          </h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
          </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="p-2 col-md-4">
      <div class=" card">
        <div class="card-body">
          <h5 class="card-title">
            Lorem ipsum dolor
          </h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
          </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="p-2 col-md-4">
      <div class=" card">
        <div class="card-body">
          <h5 class="card-title">
            Lorem ipsum dolor
          </h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
          </p>

          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="p-2 col-md-4">
      <div class=" card">
        <div class="card-body">
          <h5 class="card-title">
            Lorem ipsum dolor
          </h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
          </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="p-2 col-md-4">
      <div class=" card">
        <div class="card-body">
          <h5 class="card-title">
            Lorem ipsum dolor
          </h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
          </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="p-2 col-md-4">
      <div class=" card">
        <div class="card-body">
          <h5 class="card-title">
            Lorem ipsum dolor
          </h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
          </p>

          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="p-2 col-md-4">
      <div class=" card">
        <div class="card-body">
          <h5 class="card-title">
            Lorem ipsum dolor
          </h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
          </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="p-2 col-md-4">
      <div class=" card">
        <div class="card-body">
          <h5 class="card-title">
            Lorem ipsum dolor
          </h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
          </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="p-2 col-md-4">
      <div class=" card">
        <div class="card-body">
          <h5 class="card-title">
            Lorem ipsum dolor
          </h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
          </p>

          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>

    @elseif(Auth::user()->role == 'typeC')
    <div class="p-2 col-md-4">
      <div class=" card">
        <div class="card-body">
          <h5 class="card-title">
            Lorem ipsum dolor
          </h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
          </p>

          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="p-2 col-md-4">
      <div class=" card">
        <div class="card-body">
          <h5 class="card-title">
            Lorem ipsum dolor
          </h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
          </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="p-2 col-md-4">
      <div class=" card">
        <div class="card-body">
          <h5 class="card-title">
            Lorem ipsum dolor
          </h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
          </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  @elseif(Auth::user()->role == 'typeB')
  <div class="p-2 col-md-4">
    <div class=" card">
      <div class="card-body">
        <h5 class="card-title">
          Lorem ipsum dolor
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
        </p>

        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  <div class="p-2 col-md-4">
    <div class=" card">
      <div class="card-body">
        <h5 class="card-title">
          Lorem ipsum dolor
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
        </p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  <div class="p-2 col-md-4">
    <div class=" card">
      <div class="card-body">
        <h5 class="card-title">
          Lorem ipsum dolor
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
        </p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  <div class="p-2 col-md-4">
    <div class=" card">
      <div class="card-body">
        <h5 class="card-title">
          Lorem ipsum dolor
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
        </p>

        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  <div class="p-2 col-md-4">
    <div class=" card">
      <div class="card-body">
        <h5 class="card-title">
          Lorem ipsum dolor
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
        </p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  <div class="p-2 col-md-4">
    <div class=" card">
      <div class="card-body">
        <h5 class="card-title">
          Lorem ipsum dolor
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
        </p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  <div class="p-2 col-md-4">
    <div class=" card">
      <div class="card-body">
        <h5 class="card-title">
          Lorem ipsum dolor
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
        </p>

        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  <div class="p-2 col-md-4">
    <div class=" card">
      <div class="card-body">
        <h5 class="card-title">
          Lorem ipsum dolor
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
        </p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  <div class="p-2 col-md-4">
    <div class=" card">
      <div class="card-body">
        <h5 class="card-title">
          Lorem ipsum dolor
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
        </p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  <div class="p-2 col-md-4">
    <div class=" card">
      <div class="card-body">
        <h5 class="card-title">
          Lorem ipsum dolor
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
        </p>

        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  <div class="p-2 col-md-4">
    <div class=" card">
      <div class="card-body">
        <h5 class="card-title">
          Lorem ipsum dolor
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
        </p>

        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  <div class="p-2 col-md-4">
    <div class=" card">
      <div class="card-body">
        <h5 class="card-title">
          Lorem ipsum dolor
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas adipisci libero consequatur eveniet porro, recusandae.
        </p>

        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>

    @endif
  </div>
</div>
@endsection

