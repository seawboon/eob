@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('layouts/language_switcher')
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                {{ __('home.welcome') }}
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table>
                      @foreach($posts as $post)
                        <tr>
                          <td>
                            {{$post->title}}
                          </td>
                          <td class="p-4">
                            {{$post->content}}
                          </td>
                        </tr>
                      @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
