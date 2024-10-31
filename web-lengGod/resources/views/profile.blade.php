<!-- resources/views/profile.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <!-- Profile Photo -->
                <div class="card">
                    <img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" class="card-img-top" alt="Profile Photo">
                </div>
            </div>
            <div class="col-md-8">
                <!-- User Information -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profile Information</h5>
                        <p class="card-text"><strong>Username:</strong> {{ Auth::user()->username }}</p>
                        <p class="card-text"><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <!-- Add more user information if needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>