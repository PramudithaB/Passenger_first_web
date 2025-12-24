<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passengers First | Book Your Bus Tickets</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #0a2463 0%, #1e3c72 50%, #2a5298 100%);
            color: white;
            padding: 1.5rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .logo {
            font-size: 2rem;
            font-weight: bold;
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo span {
            color: #ffd700;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            transition: all 0.3s;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #ffd700;
            transform: translateY(-2px);
        }

        /* Hero Banner with Search */
       .hero-banner {
    background: url('/assets/images/banner1.jpeg');
    background-size: cover;
    background-position: center;
    min-height: 650px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 80px;
    position: relative;
}


        .hero-content {
            text-align: center;
            color: white;
            max-width: 1200px;
            padding: 2rem;
            z-index: 2;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
            animation: fadeInDown 1s;
        }

        .hero-content .tagline {
            font-size: 1.5rem;
            margin-bottom: 3rem;
            color: #ffd700;
            font-weight: 600;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            animation: fadeInUp 1s;
        }

        /* Search Form on Banner */
        .search-form {
            background: rgba(255, 255, 255, 0.95);
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
            max-width: 900px;
            margin: 0 auto;
            animation: fadeInUp 1.2s;
        }

        .search-form h2 {
            color: #1e3c72;
            margin-bottom: 2rem;
            font-size: 1.8rem;
            text-align: center;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            color: #1e3c72;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }

        .form-group input,
        .form-group select {
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #2a5298;
            box-shadow: 0 0 0 3px rgba(42, 82, 152, 0.1);
        }

        .search-button {
            background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
            color: #1e3c72;
            padding: 15px 50px;
            border: none;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4);
            width: 100%;
        }

        .search-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 215, 0, 0.6);
        }

        /* Passengers First Section */
        .passengers-first {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 100px 2rem;
        }

        .passengers-content {
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            color: #1e3c72;
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 20px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #ffd700, #2a5298);
            border-radius: 2px;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.3rem;
            color: #666;
            margin-bottom: 4rem;
        }

        .passengers-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        .passenger-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.4s;
        }

        .passenger-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }

        .card-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
        }

        .card-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 250"><rect fill="%23667eea" width="400" height="250"/><circle cx="80" cy="80" r="60" fill="%23ffffff" opacity="0.1"/><circle cx="320" cy="180" r="70" fill="%23ffffff" opacity="0.1"/><rect x="150" y="100" width="100" height="60" rx="10" fill="%23ffffff" opacity="0.15"/></svg>');
            background-size: cover;
        }

        .card-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 5rem;
            z-index: 2;
        }

        .card-content {
            padding: 2rem;
        }

        .card-content h3 {
            color: #1e3c72;
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .card-content p {
            color: #666;
            line-height: 1.8;
            font-size: 1.05rem;
        }

        /* Bus Time Table Section */
        .timetable-section {
            padding: 100px 2rem;
            background: white;
        }

        .timetable-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .route-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .route-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 15px;
            padding: 2rem;
            color: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .route-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }

        .route-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        }

        .route-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 2;
        }

        .route-from-to {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .route-arrow {
            font-size: 2rem;
            color: #ffd700;
        }

        .route-details {
            position: relative;
            z-index: 2;
        }

        .route-time {
            font-size: 2rem;
            font-weight: bold;
            color: #ffd700;
            margin: 1rem 0;
        }

        .route-info {
            display: flex;
            justify-content: space-between;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255,255,255,0.3);
        }

        .info-item {
            text-align: center;
        }

        .info-label {
            font-size: 0.85rem;
            opacity: 0.9;
        }

        .info-value {
            font-size: 1.1rem;
            font-weight: bold;
            margin-top: 0.3rem;
        }

        /* Features with Images */
        .features-section {
            padding: 100px 2rem;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
        }

        .features-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .features-section .section-title {
            color: white;
        }

        .features-section .section-title::after {
            background: linear-gradient(90deg, #ffd700, white);
        }

        .features-section .section-subtitle {
            color: rgba(255,255,255,0.9);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
            margin-top: 3rem;
        }

        .feature-box {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 2.5rem;
            border-radius: 15px;
            text-align: center;
            border: 2px solid rgba(255,255,255,0.2);
            transition: all 0.4s;
        }

        .feature-box:hover {
            background: rgba(255,255,255,0.15);
            transform: translateY(-10px);
            border-color: #ffd700;
        }

        .feature-image {
            width: 100px;
            height: 100px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            box-shadow: 0 5px 20px rgba(255,215,0,0.3);
        }

        .feature-box h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #ffd700;
        }

        .feature-box p {
            line-height: 1.8;
            color: rgba(255,255,255,0.9);
        }

        /* Gallery Section */
        .gallery-section {
            padding: 100px 2rem;
            background: #f8f9fa;
        }

        .gallery-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .gallery-item {
            height: 300px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: relative;
            cursor: pointer;
            transition: all 0.4s;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .gallery-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, #667eea, #764ba2, #f093fb, #4facfe);
            background-size: 400% 400%;
            animation: gradientShift 10s ease infinite;
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            padding: 2rem;
            color: white;
            transform: translateY(100%);
            transition: transform 0.4s;
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        /* Stats Banner */
        .stats-banner {
            background: linear-gradient(135deg, #0a2463 0%, #1e3c72 100%);
            padding: 80px 2rem;
            color: white;
        }

        .stats-grid {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 3rem;
        }

        .stat-box {
            text-align: center;
            padding: 2rem;
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.2);
        }

        .stat-icon {
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: bold;
            color: #ffd700;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.2rem;
            color: rgba(255,255,255,0.9);
        }

        /* Footer */
        footer {
            background: #0a1f44;
            color: white;
            padding: 4rem 2rem 2rem;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            color: #ffd700;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .footer-section p,
        .footer-section a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: #ffd700;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.7);
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.2rem;
            }

            .search-form {
                padding: 2rem 1.5rem;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .nav-links {
                display: none;
            }

            .section-title {
                font-size: 2rem;
            }

            .passengers-grid,
            .route-cards,
            .features-grid,
            .gallery-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo">
                Passenger <span>First</span>
            </div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#timetable">Time Table</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="{{route('news')}}">News</a></li>
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Register</a></li>

            </ul>
        </nav>
    </header>

    <!-- Hero Banner with Search Form -->
    <section class="hero-banner" id="home">
        <div class="hero-content">
            <h1>Welcome to Passenger First</h1>
            <p class="tagline">Passengers First - Your Comfort, Our Priority</p>
            
    
  

        <form method="GET" action="{{ route('search.bus') }}">
            <div class="search-form">
                <h2>🔍 Search Bus Schedule</h2>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="from">From</label>
                        <select id="from" name="from">
                            <option value="">Select Starting Point</option>
                            <option value="colombo">colombo</option>
                            <option value="thelwatta">thelwatta</option>
                            <option value="chilow">chilow</option>
                            <option value="palawiya">palawiya</option>
                            <option value="puththalam">puththalam</option>
                            <option value="Anuradhapura">anuradhapura</option>
                            <option value="madawachchiya">madawachchiya</option>
                            <option value="mannar">mannar</option>
                            <option value="vauniya">vauniya</option>
                            <option value="jaffna">jaffna</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="to">To</label>
                        <select id="to" name="to">
                            <option value="">Select  Destination</option>
                            <option value="colombo">colombo</option>
                            <option value="thelwatta">thelwatta</option>
                            <option value="chilow">chilow</option>
                            <option value="palawiya">palawiya</option>
                            <option value="puththalam">puththalam</option>
                            <option value="anuradhapura">anuradhapura</option>
                            <option value="madawachchiya">madawachchiya</option>
                            <option value="mannar">mannar</option>
                            <option value="vauniya">vauniya</option>
                            <option value="jaffna">jaffna</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="time" name="time" class="form-control" id="time">
                    </div>
                </div>
                <button type="submit" class="search-button">🔎 Search Available Buses</button>
            </div>
        </form>
    </div>
</section>

 

  <!-- Bus Time Table Section -->
    <section class="timetable-section" id="timetable">
        <div class="timetable-container">
            <h2 class="section-title">Bus Time Table</h2>
            <p class="section-subtitle">Popular Routes & Schedules</p>
            
            <div class="route-cards">
                <div class="route-card">
                    <div class="route-header">
                        <div class="route-from-to">Makumbura</div>
                        <div class="route-arrow">→</div>
                        <div class="route-from-to">Ella</div>
                    </div>
                    <div class="route-details">
                        <div class="route-time">06:30 AM</div>
                        <div class="route-info">
                            <div class="info-item">
                                <div class="info-label">Duration</div>
                                <div class="info-value">5h 30m</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Type</div>
                                <div class="info-value">Super Luxury</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Price</div>
                                <div class="info-value">Rs. 1,200</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="route-card">
                    <div class="route-header">
                        <div class="route-from-to">Colombo</div>
                        <div class="route-arrow">→</div>
                        <div class="route-from-to">Passara</div>
                    </div>
                    <div class="route-details">
                        <div class="route-time">07:00 AM</div>
                        <div class="route-info">
                            <div class="info-item">
                                <div class="info-label">Duration</div>
                                <div class="info-value">6h 15m</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Type</div>
                                <div class="info-value">Semi Luxury</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Price</div>
                                <div class="info-value">Rs. 950</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>
    </section>
                
    <!-- Passengers First Section -->
    <section class="passengers-first" id="about">
        <div class="passengers-content">
            <h2 class="section-title">PASSENGERS FIRST</h2>
            <p class="section-subtitle">Your Safety, Comfort and Satisfaction are Our Top Priorities</p>
            
            <div class="passengers-grid">
                <div class="passenger-card">
                    <div class="card-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <div class="card-icon">🛡️</div>
                    </div>
                    <div class="card-content">
                        <h3>Safety First</h3>
                        <p>We take stringent measures to ensure passenger safety including regular maintenance and inspections, adherence to traffic rules, continuous driver training on safe practices, and implementation of advanced safety technologies in all our buses.</p>
                    </div>
                </div>

                <div class="passenger-card">
                    <div class="card-image" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                        <div class="card-icon">💺</div>
                    </div>
                    <div class="card-content">
                        <h3>Premium Comfort</h3>
                        <p>Experience luxury travel with our super luxury and semi-luxury buses featuring comfortable reclining seats, air conditioning, entertainment systems, and spacious interiors designed for your comfort during long journeys.</p>
                    </div>
                </div>

                <div class="passenger-card">
                    <div class="card-image" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                        <div class="card-icon">🤝</div>
                    </div>
                    <div class="card-content">
                        <h3>Professional Service</h3>
                        <p>Our friendly and professional staff are trained to provide excellent customer service. Clean and well-maintained buses, courteous drivers and conductors, and responsive customer support ensure a pleasant journey every time.</p>
                    </div>
                </div>

                <div class="passenger-card">
                    <div class="card-image" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                        <div class="card-icon">⏰</div>
                    </div>
                    <div class="card-content">
                        <h3>Punctuality Guaranteed</h3>
                        <p>We understand the value of your time. Our buses operate on strict schedules with timely departures and arrivals, real-time tracking systems, and efficient route planning to get you to your destination on time.</p>
                    </div>
                </div>

                <div class="passenger-card">
                    <div class="card-image" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                        <div class="card-icon">🌍</div>
                    </div>
                    <div class="card-content">
                        <h3>Wide Coverage</h3>
                        <p>With our extensive network spanning across Sri Lanka, we connect major cities, towns, and remote areas. Over 50 routes operated daily ensure you can reach your destination no matter where you're going.</p>
                    </div>
                </div>

                <div class="passenger-card">
                    <div class="card-image" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);">
                        <div class="card-icon">💳</div>
                    </div>
                    <div class="card-content">
                        <h3>Easy Booking</h3>
                        <p>Book your tickets online through our website or mobile app with secure payment options including credit/debit cards and digital wallets. Get instant confirmation and e-tickets delivered to your phone.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  