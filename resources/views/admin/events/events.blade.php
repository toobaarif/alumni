<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <title>Events | Admin</title>

    <link rel="shortcut icon" type="image/png" href="{{ url('theme/images/favi.png') }}">
    <link href="{{ url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/ajax/libs/noUiSlider/14.6.4/nouislider.min.css') }}">
    <link href="{{ url('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/jvmap/jquery-jvectormap.css') }}" rel="stylesheet">
    <link href="{{ url('assets/buttons/1.6.4/css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/tagify/dist/tagify.css') }}" rel="stylesheet">
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

        .radio-group {
            display: flex;
            align-items: center;
        }

        .radio-option {
            display: flex;
            align-items: center;
            margin-right: 15px;
        }

        .radio-option input {
            margin-right: 5px;
        }

        .alert-success {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }

        #preloader {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background-color: #fff;
            z-index: 9999;
        }

        .lds-ripple {
            display: inline-block;
            position: relative;
            width: 64px;
            height: 64px;
        }

        .lds-ripple div {
            position: absolute;
            border: 4px solid #007bff;
            opacity: 1;
            border-radius: 50%;
            animation: lds-ripple 1.0s cubic-bezier(0, 0.2, 0.8, 1) infinite;
        }

        .lds-ripple div:nth-child(2) {
            animation-delay: -0.5s;
        }

        @keyframes lds-ripple {
            0% {
                top: 28px;
                left: 28px;
                width: 0;
                height: 0;
                opacity: 1;
            }

            100% {
                top: -1px;
                left: -1px;
                width: 58px;
                height: 58px;
                opacity: 0;
            }
        }
    </style>
</head>

<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">
    <div id="main-wrapper">
        <!-- Preloader start -->
        <div id="preloader">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloader end -->

        @include('admin.layout.header')
        @include('admin.layout.sidebar')

        <div class="container">
            <h1>Create Event</h1>
            @if (session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form id="eventForm">
                @csrf
                <div class="form-group">
                    <label for="eventId">Event ID:</label>
                    <input type="text" id="eventId" name="eventId" required>
                </div>
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

    <script>
        document.getElementById('eventForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const eventId = document.getElementById('eventId').value;
            const name = document.getElementById('name').value;
            const description = document.getElementById('description').value;
            const picture = document.getElementById('picture').files[0];
            const eventDate = document.getElementById('eventDate').value;
            const eventLocation = document.getElementById('eventLocation').value;
            const eventType = document.getElementById('eventType').value;
            const eventStatus = document.getElementById('eventStatus').value;

            console.log({
                eventId,
                name,
                description,
                picture,
                eventDate,
                eventLocation,
                eventType,
                eventStatus
            });

            alert('Event created successfully!');

            document.getElementById('eventForm').reset();
        });
    </script>

    <script src="{{ url('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ url('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('assets/js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ url('assets/vendor/draggable/draggable.js') }}"></script>
    <script src="{{ url('assets/vendor/tagify/dist/tagify.js') }}"></script>
    <script src="{{ url('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('assets/vendor/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('assets/vendor/datatables/js/jszip.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins-init/datatables.init.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
    <script src="{{ url('assets/js/deznav-init.js') }}"></script>
    <script src="{{ url('assets/js/demo.js') }}"></script>
    <script src="{{ url('assets/js/styleSwitcher.js') }}"></script>
</body>

</html>
