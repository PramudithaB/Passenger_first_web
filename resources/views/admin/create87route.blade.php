<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add 87 Bus Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 80px 10;
            display: flex;
            justify-content: center;
        }

        .form-container {
            width: 100%;
            max-width: 480px; /* <<< FIXED WIDTH */
            background: white;
            padding: 30px 55px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        .form-container h2 {
            text-align: center;
            color: #222;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
            color: #333;
        }

        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #cfcfcf;
            border-radius: 8px;
            font-size: 15px;
        }

        button {
            width: 100%;
            padding: 14px;
            margin-top: 15px;
            background: #1E88E5;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        button:hover {
            background: #1565C0;
        }

        .time-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        @media (max-width: 480px) {
            .time-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Add 87 Bus Details</h2>

        <form action="{{route('store87route')}}" method="POST">
@csrf
            <div class="form-group">
                <label>Bus Number</label>
                <input type="text" name="bus_number" placeholder="87-xxxx" required>
            </div>

            <div class="form-group">
                <label>Bus Route</label>
                <input type="text" name="bus_route" placeholder="Colombo - Kandy" required>
            </div>

            <div class="form-group">
                <label>Bus Type</label>
                <select name="bus_type" required>
                    <option value="Normal">Normal</option>
                                        <option value="Semi-Luxury">Semi-Luxury</option>

                    <option value="Luxury">Luxury</option>
                </select>
            </div>

            <h3 style="margin-top: 25px; color:#333;"> Time Slots</h3>

            <div class="time-grid">
                <div>
                    <label>Colombo</label>
                    <input type="time" name="colombo">
                </div>
                <div>
                    <label>Thelwatta</label>
                    <input type="time" name="thelwatta">
                </div>
                <div>
                    <label>Thoppuwa</label>
                    <input type="time" name="thoppuwa">
                </div>
                <div>
                    <label>Chilow</label>
                    <input type="time" name="chilow">
                </div>
                <div>
                    <label>Palawiya</label>
                    <input type="time" name="palawiya">
                </div>
                <div>
                    <label>Puththalam</label>
                    <input type="time" name="puththalam">
                </div>
                <div>
                    <label>Anuradhapura</label>
                    <input type="time" name="Anuradhapura">
                </div>
                <div>
                    <label>Madawachchiya</label>
                    <input type="time" name="madawachchiya">
                </div>
                <div>
                    <label>Mannar</label>
                    <input type="time" name="mannar">
                </div>
                <div>
                    <label>Vauniya</label>
                    <input type="time" name="vauniya">
                </div>
                 <div>
                    <label>Jaffna</label>
                    <input type="time" name="jaffna">
                </div>
            </div>

            <button type="submit">Submit</button>

        </form>
    </div>
</body>
</html>
