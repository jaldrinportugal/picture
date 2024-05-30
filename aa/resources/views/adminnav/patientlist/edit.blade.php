@extends('layout.admin')

@section('content')
    <div class="container">
        <h2>Edit Patient</h2>
        @error('date')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <form method="post" action="{{ route('patientlist.update', $patient->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">patient Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $patient->name }}" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">patient Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $patient->date }}" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">patient Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $patient->location }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update patient</button>
        </form>
    </div>
@endsection