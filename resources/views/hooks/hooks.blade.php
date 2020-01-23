@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($hooks as $hook)
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Commit id :
                            {{$hook->commit_id}}</div>
                        <div class="card-body">
                            <p>Committer: {{$hook->pusher}}</p>
                            <p>Message: {{$hook->message}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection