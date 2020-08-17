@extends('layouts.app', ['activePage' => 'Customer Registration Page', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
<form class="form" method="POST" action="{{ route('customer') }}">
        @csrf
        <input type="hidden" name="customer" value="customer">
<div class="container-fluid" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-8 col-md-8 col-sm-8 ml-auto mr-auto">
        <div class="card card-login card-hidden mb-6">
          <div class="card card-header-primary">
            Add New Customer
          </div>
          <div class="card-body ">
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="fa fa-user"></i>
                  </span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="{{ __('Name...') }}">
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>



              <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-envelope"></i>
                  </span>
                </div>
                
                <input type="email" name="email" class="form-control" placeholder="Email...">
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>

               <div class="bmd-form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="fa fa-envelope  "></i>
                  </span>
                </div>
                <input type="text" name="phone" class="form-control" placeholder="{{ __('Enter Phone Number') }}">
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>


             <div class="bmd-form-group{{ $errors->has('identification') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="fa fa-id-card"></i>
                  </span>
                </div>
                <input type="text" name="identification" class="form-control" placeholder="{{ __('Enter ID Type, i.e. NIDA, Driving e.t.c') }}">
              </div>
              @if ($errors->has('identification'))
                <div id="name-error" class="error text-danger pl-3" for="identification" style="display: block;">
                  <strong>{{ $errors->first('identification') }}</strong>
                </div>
              @endif
            </div>

             <div class="bmd-form-group{{ $errors->has('identification_number') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="fa fa-id-card fa-1x"></i>
                  </span>
                </div>
                <input type="text" name="identification_number" class="form-control" placeholder="{{ __('Enter ID Number. i.e. S-001') }}">
              </div>
              @if ($errors->has('identification_number'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('identification_number') }}</strong>
                </div>
              @endif
            </div>




            <div class="bmd-form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </span>
                </div>
                <input type="text" name="country" class="form-control" placeholder="{{ __('country...') }}">
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>


            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </span>
                </div>
                <input type="text" name="region" class="form-control" placeholder="{{ __('Region...') }}">
              </div>
              @if ($errors->has('region'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>


            <div class="bmd-form-group{{ $errors->has('district') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </span>
                </div>
                <input type="text" name="district" class="form-control" placeholder="{{ __('District...') }}">
              </div>
              @if ($errors->has('district'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>


            <div class="bmd-form-group{{ $errors->has('street') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </span>
                </div>
                <input type="text" name="street" class="form-control" placeholder="{{ __('street...') }}">
              </div>
              @if ($errors->has('street'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('street') }}</strong>
                </div>
              @endif
            </div>

          <div class="bmd-form-group{{ $errors->has('yob') ? ' has-danger' : '' }}">
               &nbsp;
              <div class="input-group">

                <div class="input-group-prepend">
                  <span class="input-group-text">
                     
                  </span>
                </div>
                  <label>Enter Date Of Birth</label>

              </div>
              @if ($errors->has('yob'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('yob') }}</strong>
                </div>
              @endif
            </div>

            <div class="bmd-form-group{{ $errors->has('yob') ? ' has-danger' : '' }}">
               
              <div class="input-group">

                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="fa fa-calendar"></i>
                  </span>
                </div>

                     <input type="date" name="yob" class="form-control" placeholder="{{ __('Year Of Birth...') }}">

              </div>
              @if ($errors->has('yob'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('yob') }}</strong>
                </div>
              @endif
            </div>

             <div class="bmd-form-group{{ $errors->has('yob') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <select class="form-control" id="sex" name="sex" class="form-control">
                    <option>Sex</option>
                    <option value="male">Male</option>
                    <option value="femail">Female</option>
                  </select>
              </div>
              @if ($errors->has('yob'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('yob') }}</strong>
                </div>
              @endif
            </div>

             <div class="bmd-form-group{{ $errors->has('yob') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="fa fa-list"></i>
                  </span>
                </div>
                 <select class="form-control" id="sex" name="type" class="form-control">
                    <option>User Type</option>
                    <option value="Buyer">Buyer</option>
                  </select>
              </div>
              @if ($errors->has('yob'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('yob') }}</strong>
                </div>
              @endif
            </div>




       <!--      <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}">
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div> -->
         <!--    <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password...') }}">
              </div>
              @if ($errors->has('password_confirmation'))
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif
            </div> -->
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                {{ __('I agree with the ') }} <a href="#">{{ __('Privacy Policy') }}</a>
              </label>
            </div>
          </div>
          <div class="card-footer">

            <div class="row">
              <div class="col-md-8">
                <a href="{{route('customer.index')}}" class="btn btn-primary">Back</a>
              </div>
              <div class="col-md-4 text-right" >
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>



  </div>
</div>
@endsection