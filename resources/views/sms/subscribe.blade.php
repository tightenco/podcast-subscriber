@extends('layouts.app')

@section('body')
    <h1 class="text-center mb-6">
        <img src="/logo.svg" alt="Stauffers On Science" class="w-64">
    </h1>
    @include('components.errors')
    <h2>Subscribe via SMS:</h2>
    <form action="/sms/subscribe" method="post">
        {{ csrf_field() }}
        <input type="text" name="subscribe-sms-phone-number" class="my-2 text-lg border-teal shadow appearance-none border rounded py-2 px-3 text-grey-darker" placeholder="313-867-5309" value="{{ old('subscribe-sms-phone-number') }}">
        <input type="submit" class="my-2 text-lg border-teal bg-teal text-white shadow appearance-none border rounded py-2 px-4 text-grey-darker" value="Subscribe">
    </form>
@endsection
