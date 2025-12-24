
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results | Passengers First</title>
    <style>
        /* General Styles - Standardized modern styles for clarity */
        body { font-family: 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; line-height: 1.6; color: #333; }
        .timetable-section { padding: 80px 2rem; background: #f4f4f9; }
        .timetable-container { max-width: 1400px; margin: 0 auto; }
        .section-title { text-align: center; font-size: 2.5rem; color: #1e3c72; margin-bottom: 10px; }
        .section-subtitle { text-align: center; font-size: 1.1rem; color: #666; margin-bottom: 30px; }
        
        /* Horizontal Scroll Container */
        .route-cards-scroll {
            display: flex; /* Makes items display in a row */
            overflow-x: auto; /* Enables horizontal scrolling */
            padding: 20px 0;
            gap: 20px; /* Space between cards */
            -webkit-overflow-scrolling: touch; /* For smoother scrolling on iOS */
        }
        
        /* Styling the scrollbar for webkit browsers */
        .route-cards-scroll::-webkit-scrollbar { height: 10px; }
        .route-cards-scroll::-webkit-scrollbar-thumb { background: #1e3c72; border-radius: 10px; }
        .route-cards-scroll::-webkit-scrollbar-track { background: #e0e0e0; }

        /* Route Card Styling */
        .route-card {
            flex: 0 0 350px; 
            background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
            border-radius: 15px;
            padding: 25px;
            color: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: all 0.3s;
            position: relative;
            display: flex; /* Added for layout flexibility */
            flex-direction: column; /* Added for layout flexibility */
        }

        .route-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        }

        .route-header {
            margin-bottom: 15px;
        }

        .route-from-to {
            font-size: 1.6rem;
            font-weight: bold;
            color: #ffd700;
        }
        
        /* Added style for the main route */
        .bus-route-name {
            font-size: 0.9rem;
            opacity: 0.8;
            margin-top: 5px;
        }

        .route-time-label {
            font-size: 0.8rem;
            opacity: 0.7;
            margin-top: 10px;
        }

        .route-time {
            font-size: 2.2rem; /* Slightly reduced font size */
            font-weight: bold;
            color: white;
            margin-bottom: 10px;
        }

        .route-info {
            display: flex;
            justify-content: space-between;
            margin-top: auto; /* Pushes info to the bottom */
            padding-top: 15px;
            border-top: 1px solid rgba(255,255,255,0.3);
        }

        .info-item {
            text-align: center;
        }

        .info-label {
            font-size: 0.8rem;
            opacity: 0.9;
        }

        .info-value {
            font-size: 1.1rem;
            font-weight: bold;
            margin-top: 5px;
            color: #ffd700;
        }

        .book-button {
            display: block;
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: #ffd700;
            color: #1e3c72;
            text-align: center;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s;
        }
        .book-button:hover { background: #ffeb3b; }

        .no-results {
            text-align: center;
            padding: 50px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <section class="timetable-section">
        <div class="timetable-container">
            <h2 class="section-title">🚌 Bus Search Results</h2>
            <p class="section-subtitle">
                Journey from **<?php echo e(ucfirst($from ?? 'Any')); ?>** to **<?php echo e(ucfirst($to ?? 'Any')); ?>**
                <?php echo e($time ? ' (Showing departures from ' . date('h:i A', strtotime($time)) . ' onwards)' : ''); ?>

            </p>

            <?php if($availableRoutes->isNotEmpty()): ?>
                <div class="route-cards-scroll">
                    <?php $__currentLoopData = $availableRoutes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="route-card">
                            <div class="route-header">
                                <div class="route-from-to"><?php echo e(ucfirst($from)); ?> → <?php echo e(ucfirst($to)); ?></div>
                                <div class="bus-route-name"><?php echo e($route->bus_route ?? 'Route details unavailable'); ?></div>
                            </div>

                            <div class="route-time-label">Departure Time from <?php echo e(ucfirst($from)); ?></div>
                            <div class="route-time">
                                
                                <?php if(!empty($route->{$from})): ?>
                                    <?php echo e(\Carbon\Carbon::createFromTimeString($route->{$from})->format('h:i A')); ?>

                                <?php else: ?>
                                    N/A
                                <?php endif; ?>
                            </div>
                            
                            <div class="route-details">
                                <div class="route-info">
                                    <div class="info-item">
                                        <div class="info-label">Bus No.</div>
                                        <div class="info-value"><?php echo e($route->bus_number ?? 'N/A'); ?></div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-label">Arrival at <?php echo e(ucfirst($to)); ?></div>
                                        <div class="info-value">
                                            
                                            <?php if(!empty($route->{$to})): ?>
                                                <?php echo e(\Carbon\Carbon::createFromTimeString($route->{$to})->format('h:i A')); ?>

                                            <?php else: ?>
                                                N/A
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-label">Type</div>
                                        <div class="info-value"><?php echo e($route->bus_type ?? 'N/A'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="book-button">Book Bus <?php echo e($route->bus_number); ?></a> 
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <div class="no-results">
                    <h3>❌ No Buses Found</h3>
                    <p>Sorry, no routes match your search criteria. Please try a different time or route.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</body>
</html><?php /**PATH /Users/pramudithabandara/Desktop/Passenger_first_web/busapp/resources/views/search_results.blade.php ENDPATH**/ ?>