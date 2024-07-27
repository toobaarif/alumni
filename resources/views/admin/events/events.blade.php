<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alumni | Events</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ url('theme/images/favi.png') }}">
    <!-- Bootstrap CSS -->
    <link href="{{ url('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Swiper CSS -->
    <link href="{{ url('assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Google Fonts - Material Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- noUiSlider CSS -->
    <link rel="stylesheet" href="{{ url('assets/ajax/libs/noUiSlider/14.6.4/nouislider.min.css') }}">
    <!-- DataTables CSS -->
    <link href="{{ url('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- jVectorMap CSS -->
    <link href="{{ url('assets/vendor/jvmap/jquery-jvectormap.css') }}" rel="stylesheet">
    <!-- Buttons for DataTables CSS -->
    <link href="{{ url('assets/css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <!-- Bootstrap DateTimePicker CSS -->
    <link href="{{ url('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"
        rel="stylesheet">
    <!-- Tagify CSS -->
    <link href="{{ url('assets/vendor/tagify/dist/tagify.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <!-- Font Awesome 6 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom Styles for Buttons -->
    <style>
        .btn-group .btn {
            border-radius: 5px !important;
            margin-inline: 5px;
        }

        .no-scrollbar {
    overflow-y: hidden;
    white-space: pre-wrap; /* Ensure word wrapping */
}

.scrollable-description {
    max-width: 200px; /* Adjust width as needed */
    overflow-x: auto; /* Enable horizontal scroll */
    white-space: nowrap; /* Prevent line breaks */
}
    </style>
</head>

<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black"
    data-headerbg="color_1">
    <div id="main-wrapper">
        <!-- Preloader -->
        <div id="preloader">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>

        <!-- Header (Assuming included from external file) -->
        @include('admin.layout.header')

        <!-- Sidebar (Assuming included from external file) -->
        @include('admin.layout.sidebar')

        <!-- Content Body -->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive active-projects style-1">
                                    <div class="tbl-caption d-flex justify-content-between align-items-center">
                                        <h4 class="heading mb-0">Events</h4>
                                        <a class="btn btn-primary btn-sm" href="{{ url('/event-form') }}" role="button"
                                            aria-controls="addEventModal">
                                            Add Events +
                                        </a>

                                    </div>
                                    <table id="empoloyees-tblwrapper" class="table">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Event Name</th>
                                                <th>Event Type</th>
                                                <th>Event Status</th>
                                                <th>Event Location</th>
                                                <th>Event Date</th>
                                                <th>Picture</th>
                                                <th>Event Description</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $sno = 1;
                                            @endphp
                                            .. @foreach ($event as $event) <!-- Corrected from $event to $events -->
                                            <tr>
                                                <td>{{ $sno++ }}</td>
                                                <td>{{ $event->name }}</td>
                                                <td>{{ $event->event_type }}</td>
                                                <td>{{ $event->event_status }}</td>
                                                <td>{{ $event->event_location }}</td>
                                                <td>{{ $event->event_date }}</td>
                                                <td>
                                                    @if($event->picture)
                                                    <img src="{{ asset('uploads/' . $event->picture) }}"
                                                        alt="Event Picture" style="width: 100px; height: auto;">
                                                    @else
                                                    No Picture
                                                    @endif
                                                </td>
                                                <td class="scrollable-description">{{ $event->description }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary edit-btn"
                                                            data-bs-toggle="modal" data-bs-target="#editEventModal"
                                                            data-event-id="{{ $event->id }}"
                                                            data-event-name="{{ $event->name }}"
                                                            data-event-type="{{ $event->event_type }}"
                                                            data-event-status="{{ $event->event_status }}"
                                                            data-event-location="{{ $event->event_location }}"
                                                            data-event-date="{{ $event->event_date }}"
                                                            data-picture="{{ asset('uploads/' . $event->picture) }}"
                                                            data-description="{{ $event->description }}">
                                                            Edit
                                                        </button>
                                                        <form action="{{ route('events.destroy', $event->id) }}"
                                                            method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Are you sure?')">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach -->
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Event Modal -->
        <!-- Edit Event Modal -->
<div class="modal fade" id="editEventModal" tabindex="-1" aria-labelledby="editEventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!-- Added modal-lg for large size -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEventModalLabel">Edit Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editEventForm" method="POST" action="{{ route('events.update', 'event_id') }}" enctype="multipart/form-data">
    @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="edit-name" class="form-label">Event Name</label>
                                <input type="text" class="form-control" id="edit-name" name="name">
                            </div>

                            <div class="mb-3">
                                <label for="edit-event-type" class="form-label">Event Type</label>
                                <select class="default-select form-control wide" id="edit-event-type" name="event_type">
                                    <option value="Conference">Conference</option>
                                    <option value="Workshop">Workshop</option>
                                    <option value="Meetup">Meetup</option>
                                    <option value="Other">Other</option>#edit-description
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="edit-event-status" class="form-label">Event Status</label>
                                <select class="default-select form-control wide" id="edit-event-status" name="event_status">
                                    <option value="planned">Planned</option>
                                    <option value="ongoing">Ongoing</option>
                                    <option value="completed">Completed</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="edit-event-location" class="form-label">Event Location</label>
                                <input type="text" class="form-control" id="edit-event-location" name="event_location">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="edit-event-date" class="form-label">Event Date</label>
                                <input type="date" class="form-control" id="edit-event-date" name="event_date">
                            </div>
                            <div class="mb-3">
                                <label for="edit-picture" class="form-label">Picture</label>
                                <input type="file" class="form-control" id="edit-picture" name="picture">
                                <img id="edit-picture-preview" src="" alt="Event Picture Preview" style="width: 100px; height: auto; margin-top: 10px; display: none;">
                            </div>
                            <div class="mb-3">
                                <label for="edit-description" class="form-label">Event Description</label>
                                <textarea class="form-control no-scrollbar" id="edit-description" name="description"></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="edit-event-id" name="event_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


    </div>

    <!-- Bootstrap JS -->
    <script src="{{ url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Global JS -->
    <script src="{{ url('assets/vendor/global/global.min.js') }}"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap Select JS -->
    <script src="{{ url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <!-- ApexCharts JS -->
    <script src="{{ url('assets/vendor/apexchart/apexchart.js') }}"></script>
    <!-- Custom Scripts -->
    <script src="{{ url('assets/js/custom.js') }}"></script>
    <!-- deznav-init JS -->
    <script src="{{ url('assets/js/deznav-init.js') }}"></script>
    <!-- Demo JS -->
    <script src="{{ url('assets/js/demo.js') }}"></script>
    <!-- Style Switcher JS -->
    <script src="{{ url('assets/js/styleSwitcher.js') }}"></script>
    <!-- Your Custom Scripts -->
    <script>
    $(document).ready(function () {
        $('.edit-btn').click(function () {
            var eventId = $(this).data('event-id'); 
            var eventName = $(this).data('event-name');
            var eventType = $(this).data('event-type');
            var eventStatus = $(this).data('event-status');
            var eventLocation = $(this).data('event-location');
            var eventDate = $(this).data('event-date');
            var picture = $(this).data('picture');
            var description = $(this).data('description');

            // Set values in the edit modal
            $('#edit-event-id').val(eventId);
            $('#edit-name').val(eventName);
            $('#edit-event-type').val(eventType);
            $('#edit-event-status').val(eventStatus);
            $('#edit-event-location').val(eventLocation);
            $('#edit-event-date').val(eventDate);
            $('#edit-description').val(description);

            // Set image preview src attribute
            if (picture) {
                $('#edit-picture-preview').attr('src', picture).show();
            } else {
                $('#edit-picture-preview').hide();
            }

            // Set form action URL
            $('#editEventForm').attr('action', "{{ url('/events') }}/" + eventId + "/update");

            // Show the edit modal
            $('#editEventModal').modal('show');
        });

        // Update image preview when a new file is selected
        $('#edit-picture').change(function () {
            var reader = new FileReader();
            var file = this.files[0];
            if (file) {
                reader.onload = function (e) {
                    $('#edit-picture-preview').attr('src', e.target.result).show();
                };
                reader.readAsDataURL(file);
            } else {
                $('#edit-picture-preview').hide();
            }
        });

        // Auto resize the textarea based on content
        $('#edit-description').on('input', function () {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });

        // Trigger input event to resize based on pre-filled content
        $('#editEventModal').on('shown.bs.modal', function () {
            $('#edit-description').trigger('input');
        });

        // Handle form submission via AJAX
        $('#editEventForm').submit(function (e) {
            e.preventDefault(); // Prevent default form submission

            var formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response); // Debugging: check response in console
                    if (response.success) {
                        alert('Event updated successfully.');
                        $('#editEventModal').modal('hide');
                        // Optionally, refresh the events table or update the specific row
                        location.reload(); // Refresh page to see updated data
                    } else {
                        alert('Error updating event.');
                    }
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText); // Debugging: check error in console
                    alert('An error occurred: ' + error);
                }
            });
        });
    });
    
</script>





</body>

</html>
