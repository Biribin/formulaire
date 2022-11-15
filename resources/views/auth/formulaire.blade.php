@extends('base')

@section('title','Formulaire')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <h1 class="text-center text-muted mb-3"> Contact form</h1>
            <p class="text-center text-muted mb-5"> form form form.</p>

            <form  method="post" action="/formulaire" method="post" class="row g-3" id="contact-form">
{{-- protège des attaques, post bien envoyé de ce site --}}
                @csrf

            @error('email')
            <div class="alert alert-danger text-center" role="alert">
                {{ $message }}
              </div>
            @enderror



  <div class="col-md-6">
    <label for="email" class="form-label"> Email</label>
    <input type="email" name="email" id="email" class="form-control" @error('email')is-invalid @enderror
    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="exemple@gmail.com">
  </div>

  <div class="col-md-6">
  <label for="name" class="form-label"> Name and firstname</label>
  <input type="name" name="name" id="name" class="form-control"  @error('name')is-invalid @enderror
  value="{{ old('name') }}" required autocomplete="name" autofocus>
  <small class="text-danger fw-bold" id="error-name"> </small>
</div>

  <div class="col-12">
    <label for="inputAddress" class="form-label"> Address</label>
    <input type="inputAddress" name="inputAddress" id="inputAddress" class="form-control"  @error('inputAddress')is-invalid @enderror
    value="{{ old('inputAddress') }}" required autocomplete="inputAdress" autofocus>
    <small class="text-danger fw-bold" id="error-address"> </small>
  </div>

  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="inputAddress2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>

  <div class="col-md-6">
    <label for="city" class="form-label">City</label>
    <input type="city" class="form-control" id="city" name="city"
    @error('city')is-invalid @enderror
  value="{{ old('city') }}" required autocomplete="city" autofocus>
  <small class="text-danger fw-bold" id="error-city"> </small>
  </div>

  <div class="col-md-4">
    <label for="state" class="form-label">State</label>
    <input type="state" class="form-control" id="state" name="state"
    @error('state')is-invalid @enderror
    value="{{ old('state') }}" required autocomplete="state" autofocus>
    <small class="text-danger fw-bold" id="error-state"> </small>
  </div>



  <div class="col-md-2">
    <label for="zip" class="form-label">Zip</label>
    <input type="zip" class="form-control" id="zip" pattern="[0-9]{5}" name="zip"
    @error('zip')is-invalid @enderror
    value="{{ old('zip') }}" required autocomplete="zip" autofocus>
    <small class="text-danger fw-bold" id="error-zip"> </small>
  </div>



  <div class="col-12">
    <label for="comment" class="form-label">Comment</label>
    <input class="form-control" id="comment" rows="3" name="comment"
    @error('comment')is-invalid @enderror
    value="{{ old('comment') }}" required autocomplete="comment" autofocus
    placeholder="Leave a comment here"> </input>
    <small class="text-danger fw-bold" id="error-comment"> </small>
  </div>

   <div class="col-12">
    <input class="form-check-input" type="checkbox" value="" id="agreeTerms">
    <label class="form-check-label" for="agreeTerms">Agree Terms</label> <br>
    <small class="text-danger fw-bold" id="error-agreeTerms"> </small>
  </div>

  <div class="d-grid gap-2">
    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
  </div>

</div>
</form>


        </div>
    </div>
</div>

@endsection
