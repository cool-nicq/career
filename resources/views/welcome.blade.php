<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vacancies | IGI Prudential Insurance</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <style>
        :root {
            --primary-color: #e53935; /* A shade of red */
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            max-height: 80px; /* Adjust as needed */
            z-index: 10;
        }

        .banner {
            width: 100%;
            height: 250px;
            background-image: url({{ asset('images/banner.png') }});
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .deadline {
            font-style: italic;
            color: var(--primary-color);
            font-weight: bold;
        }
        footer{
            bottom: 0;
            position: fixed;
            width: 100%;
        }
    </style>
</head>
<body>

    <main>
        
        <section class="banner d-flex align-items-center justify-content-center text-white">
            <img src="{{ asset('images/logo.jpg') }}" alt="IGI Prudential Insurance" class="logo">
        </section>

        <div class="container my-4">
            <h2 class="mb-4">Current Vacancies</h2>
            <div class="row g-4">
                @if ($vacancies->isEmpty())
                    <p class="text-gray-600">No vacancies available at the moment.</p>
                @else
                    @foreach ($vacancies as $vacancy)
                        <div class="col-12 col-md-6">
                            <div class="card h-100 shadow-sm p-4">
                                <div class="card-body">
                                    <h3 class="card-title text-danger">{{ $vacancy->title }}</h3>
                                    <p class="card-text"><strong>Location:</strong> {{ $vacancy->location }}</p>
                                    <p class="card-text"><strong>Type:</strong> {{ $vacancy->type }}</p>
                                    <p class="card-text deadline"><strong>Deadline:</strong> {{ \Carbon\Carbon::parse($vacancy->deadline)->format('F d, Y') }}</p>
                                    <p class="card-text">{{ $vacancy->description }}</p>
                                    
                                    <div class="d-flex gap-2 mt-3">
                                        <a href="{{ route('job.apply', $vacancy->id) }}" class="btn btn-danger">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </main>

    <footer class="text-center text-white p-3 mt-5 bg-danger">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} IGI Prudential Insurance Ltd. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>