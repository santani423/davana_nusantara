@extends('cms.layout.index')

@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="body">
                    <h4>Setting</h4>
                    <form action=" " method="POST">
                        @csrf
                        @method('PUT')
                        @foreach($settings->toArray() as $key => $value)
                            @if(!in_array($key, ['id', 'created_at', 'updated_at']))
                                <div class="form-group">
                                    <label for="{{ $key }}">{{ ucfirst(str_replace('_', ' ', $key)) }}</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        id="{{ $key }}" 
                                        name="{{ $key }}" 
                                        value="{{ old($key, $value) }}" 
                                        placeholder="Enter {{ str_replace('_', ' ', $key) }}">
                                </div>
                            @endif
                        @endforeach
                        @foreach($settings as $key => $value)
                            <div class="form-group">
                                <label for="{{ $key }}">{{ ucfirst(str_replace('_', ' ', $key)) }}</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="{{ $key }}" 
                                    name="{{ $key }}" 
                                    value="{{ old($key, $value) }}" 
                                    placeholder="Enter {{ str_replace('_', ' ', $key) }}">
                            </div>
                        @endforeach
                        
                        <button type="submit" class="btn btn-primary">Save Settings</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
