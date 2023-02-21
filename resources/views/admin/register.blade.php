{{-- For admin check only --}}
<div class="card-header">{{ __('Admin Register') }}</div>

<x-layout>
    <section
          class="flex justify-center h-full gradient-form bg-gray-200 md:h-screen"
        >
          <div class="container py-12 px-6 h-full">
            <div
              class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800"
            >
              <div class="xl:w-10/12">
                <div class="block bg-white shadow-lg rounded-lg">
                  <div
                    class="flex justify-center items-center lg:flex lg:flex-wrap g-0"
                  >
                    <div class="lg:w-6/12 px-4 md:px-0">
                      <div class="md:p-12 md:mx-6">
                        <div class="text-center">
                          <img
                            class="mx-auto w-48 pb-7"
                            src="/images/logo.png"
                            alt="logo"
                          />
                        </div>
                        <form method="POST" action="/admin">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
</x-layout>
