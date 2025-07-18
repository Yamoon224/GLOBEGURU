<x-auth-layout>
    <!-- Session Status -->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

    <form role="form" class="text-start" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="input-group input-group-outline my-3">
            <label class="form-label">@lang('locale.email')</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="input-group input-group-outline mb-3">
            <label class="form-label">@lang('locale.password')</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="form-check form-switch d-flex align-items-center mb-3">
            <input class="form-check-input" type="checkbox" name="remember" id="rememberMe" checked>
            <label class="form-check-label mb-0 ms-3" for="rememberMe">@lang('locale.remember_me')</label>
        </div>
        <div class="text-center">
            <button class="btn bg-gradient-dark w-100 my-4 mb-2">@lang('locale.sign_in')</button>
        </div>
    </form>
</x-auth-layout>
