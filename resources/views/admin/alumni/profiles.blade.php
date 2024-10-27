<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        .section {
            margin-bottom: 20px;
            padding: 15px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h3 {
            border-bottom: 2px solid #007BFF;
            padding-bottom: 10px;
            color: #007BFF;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1 style=" color: #007BFF;">{{ $alumni->name }}'s Profile</h1> <!-- Profile Name Heading -->

    <div class="section">
        <h3>Basic Information</h3>
        <p><strong>Name:</strong> {{ $alumni->name }}</p>
        <p><strong>Email:</strong> {{ $alumni->email }}</p>
        <!-- Other basic info fields -->
        <p><strong>Phone:</strong> {{ $alumni->phone ?? 'N/A' }}</p>
        <p><strong>Address:</strong> {{ $alumni->address ?? 'N/A' }}</p>
        <p><strong>City:</strong> {{ $alumni->city ?? 'N/A' }}</p>
        <p><strong>State:</strong> {{ $alumni->state ?? 'N/A' }}</p>
        <p><strong>ZIP:</strong> {{ $alumni->zip ?? 'N/A' }}</p>
        <p><strong>Gender:</strong> {{ $alumni->gender ?? 'N/A' }}</p>
        <p><strong>Birthdate:</strong> {{ $alumni->birthdate ?? 'N/A' }}</p>
    </div>

    <div class="section">
        <h3>Work Experience</h3>
        @if($workExperiences->isNotEmpty())
            <table>
                <thead>
                    <tr>
                        <th>Job Title</th>
                        <th>Company</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Job Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($workExperiences as $experience)
                        <tr>
                            <td>{{ $experience->job_title }}</td>
                            <td>{{ $experience->company }}</td>
                            <td>{{ $experience->start_date }}</td>
                            <td>{{ $experience->end_date }}</td>
                            <td>{{ $experience->job_description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No work experience available.</p>
        @endif
    </div>

    <div class="section">
        <h3>Education Details</h3>
        @if($educationDetails->isNotEmpty())
            <table>
                <thead>
                    <tr>
                        <th>Institution</th>
                        <th>Degree</th>
                        <th>Field of Study</th>
                        <th>Graduation Year</th>
                        <th>GPA</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($educationDetails as $education)
                        <tr>
                            <td>{{ $education->institution }}</td>
                            <td>{{ $education->degree }}</td>
                            <td>{{ $education->field_of_study }}</td>
                            <td>{{ $education->graduation_year }}</td>
                            <td>{{ $education->gpa }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No education details available.</p>
        @endif
    </div>

</body>
</html>
