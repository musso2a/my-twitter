@extends('layouts.app')

@section('content')
<div class="container" style="border: none">
    <div class="row justify-content-center" style="border: none">
        <div class="col-md-8" style="border: none">
            <div class="card" id="form-container"  style="border: none">

                <div class="card-header" style="border: none">
{{--                    {{ __('Dashboard') }}--}}
                    envoie ton tweet
                </div>

                <div class="card-body">

                    <livewire:form>

                </div>

            </div>
            <livewire:posts />
        </div>
    </div>
</div>
@endsection

<style>
    #form-container {
        margin-bottom: 10px;
    }
    div {
        border: 1px solid whitesmoke;
    }
</style>
