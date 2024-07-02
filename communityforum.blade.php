<x-app-layout>
    @section('title', 'Community Forum')

    @section('content')
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f5f5f5; /* Light grey background */
                color: #333; /* Dark grey text */
            }
            .navbar {
                background-color: #007bff; /* Blue navbar */
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
            .navbar-brand {
                font-weight: bold;
                font-size: 1.5rem;
                color: #fff; /* White text */
            }
            .navbar-nav .nav-link {
                color: #fff; /* White text */
            }
            .navbar-nav .nav-link:hover {
                color: #cce6ff; /* Light blue text on hover */
            }
            .forum-container {
                margin-top: 20px;
                padding: 20px;
                background-color: #fff; /* White background */
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }
            .form-container {
                background-color: #fff; /* White background */
                border: 1px solid #e1e8ed;
                border-radius: 8px;
                padding: 20px;
                margin-bottom: 20px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }
            .form-container h3 {
                margin-bottom: 10px;
                color: #007bff; /* Blue title */
            }
            .tweet-card {
                background-color: #fff; /* White card background */
                border: 1px solid #e1e8ed;
                border-radius: 8px;
                padding: 15px;
                margin-bottom: 20px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                transition: transform 0.3s ease; /* Add transition for transform */
            }
            .tweet-card:hover {
                transform: translateY(-5px); /* Move card up on hover */
                box-shadow: 0 6px 12px rgba(0,0,0,0.15); /* Enhance shadow on hover */
            }
            .tweet-header {
                display: flex;
                align-items: center;
                justify-content: space-between; /* Align items horizontally */
                margin-bottom: 10px;
            }
            .tweet-header .username {
                font-weight: bold;
                color: #007bff; /* Blue username */
            }
            .tweet-header .timestamp {
                color: #657786; /* Dark grey timestamp */
            }
            .tweet-content {
                margin-top: 10px;
                font-size: 0.9rem;
                line-height: 1.6;
            }
            .tweet-actions {
                margin-top: 10px;
                display: flex;
                justify-content: flex-end; /* Align buttons to the right */
            }
            .btn-action {
                font-size: 0.875rem;
                border-radius: 50px;
                padding: 5px 15px;
                background-color: #f8f9fa; /* Light grey background */
                color: #333; /* Dark grey text */
                border: 1px solid #ccc;
                transition: background-color 0.3s ease;
                margin-left: 10px; /* Add margin between buttons */
            }
            .btn-action:hover {
                background-color: #e9ecef; /* Light grey on hover */
            }
            .container {
                max-width: 100%; /* Ensure container takes full width */
                padding-right: 15px; /* Adjust for Bootstrap container padding */
                padding-left: 15px; /* Adjust for Bootstrap container padding */
                margin-right: auto;
                margin-left: auto;
            }
        </style>

        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Community Forum</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.communityforum.create') }}">Add Topic</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-4">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="form-container">
                <h3>Post a New Topic</h3>
                <form action="{{ route('admin.communityforum.store') }}" method="POST" id="postTopicForm">
                    @csrf
                    <div class="input-group mb-3">
                        <textarea type="text" class="form-control" id="topic" name="topic" placeholder="Type here..." required></textarea>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Post Topic</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="forum-container">
                @foreach ($communityforums as $communityforum)
                    <div class="tweet-card">
                        <div class="tweet-header">
                            <div>
                                <span class="username">{{ $communityforum->name }}</span>
                                <span class="timestamp">{{ $communityforum->created_at->setTimezone('Asia/Manila')->format('F d, Y h:i A') }}</span>
                            </div>
                        </div>
                        <div class="tweet-content">
                            <p>{{ $communityforum->topic }}</p>
                        </div>
                        <div class="tweet-actions">
                            <a href="{{ route('admin.showComment', $communityforum->id) }}" class="btn-action">View Comment</a>
                            <a href="{{ route('admin.updateCommunityforum', $communityforum->id) }}" class="btn-action">Update</a>
                            <form method="post" action="{{ route('admin.deleteCommunityforum', $communityforum->id) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if ($communityforums->lastPage() > 1)
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <!-- Previous Page Link -->
                        @if ($communityforums->onFirstPage())
                            <li class="page-item disabled" aria-disabled="true">
                                <span class="page-link" aria-hidden="true">&laquo;</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $communityforums->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
                            </li>
                        @endif

                        <!-- Pagination Elements -->
                        @for ($i = 1; $i <= $communityforums->lastPage(); $i++)
                            <li class="page-item {{ $i == $communityforums->currentPage() ? 'active' : '' }}" aria-current="page">
                                <a class="page-link" href="{{ $communityforums->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        <!-- Next Page Link -->
                        @if ($communityforums->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $communityforums->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
                            </li>
                        @else
                            <li class="page-item disabled" aria-disabled="true">
                                <span class="page-link" aria-hidden="true">&raquo;</span>
                            </li>
                        @endif
                    </ul>
                </nav>
            @endif
        </div>

        <script>
            // JavaScript for form submission animation
            document.getElementById('postTopicForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the form from submitting

                console.log('Posting topic...');
                setTimeout(function() {
                    document.getElementById('postTopicForm').submit(); // Submit the form after animation or delay
                }, 1000); // Adjust delay as needed
            });
        </script>
    @endsection
</x-app-layout>
