@extends('layout.admin')

@section('content')
    <div class="container"> 

        <h2>patients for {{ $patient->name }}</h2>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Patient ID: {{ $patient->id }}</th>
                    <th>Date: {{ $patient->date }}</th>
                    <th>Location: {{ $patient->location }}</th>
                </tr>
            </thead>
        </table>
        

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p style="color: red">{{ $error }}</p>
            @endforeach
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="post" action="{{ route('patients.store', $patient->id) }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">patient Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">patient Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            @csrf
            <input type="hidden" name="patient_id" value="{{ $patient->id }}">
            <button type="submit" class="btn btn-primary">Add patient</button>
            
        </form>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>patient ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($patients as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->email }}</td>
                        <td>
                            <a href="{{ route('patients.edit', [$patient->id, $patient->id]) }}" class="btn btn-warning">Edit patient</a>
                            <form method="post" action="{{ route('patients.destroy', [$patient->id, $patient->id]) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this patient?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No patients registered yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <a href="{{ route('patients.index') }}" class="btn btn-secondary mt-3">Back to patients</a>
    </div>
@endsection