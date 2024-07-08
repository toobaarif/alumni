<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events | Admin</title>
    <link rel="shortcut icon" type="image/png" href="{{ url('theme/images/favi.png') }}">
    <link href="{{ url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            transition: border-color 0.3s;
        }

        .form-group input[type="file"] {
            padding: 3px;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #007bff;
            outline: none;
        }

        .form-group button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .alert-success {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div id="main-wrapper">
        @include('admin.layout.header')
        @include('admin.layout.sidebar')

        <div class="container">
            <h1>Create Event</h1>
            @if (session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form id="eventForm" action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
          
                <div class="form-group">
                    <label for="name">Event Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="picture">Picture:</label>
                    <input type="file" id="picture" name="picture" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="eventDate">Event Date:</label>
                    <input type="date" id="eventDate" name="eventDate" required>
                </div>
                <div class="form-group">
                    <label for="eventLocation">Event Location:</label>
                    <input type="text" id="eventLocation" name="eventLocation" required>
                </div>
                <div class="form-group">
                    <label for="eventType">Event Type:</label>
                    <select id="eventType" name="eventType" required>
                        <option value="1">Conference</option>
                        <option value="2">Workshop</option>
                        <option value="3">Meetup</option>
                        <option value="4">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="eventStatus">Event Status:</label>
                    <select id="eventStatus" name="eventStatus" required>
                        <option value="planned">Planned</option>
                        <option value="ongoing">Ongoing</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit">Create Event</button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ url('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
</body>

</html>
