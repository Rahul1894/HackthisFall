/* Header */
        header {
            background-color: #007bff;
            padding: 20px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 24px;
            margin-left: 20px; /* Adjusted margin */
        }

        header img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
        }

        header .nav-buttons button {
            background-color: #007bff;
            color: #fff;
            border: 1px solid #fff;
            padding: 10px 20px;
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        header .nav-buttons button:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .nav-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            align-items: center;
        }

        .nav-buttons button {
            background-color: #2c3e50; 
            color: #ecf0f1;
            border: none; 
            padding: 10px 20px;
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 15px;
        }

        .nav-buttons button:hover {
            background-color: #34495e; 
            color: #fff; 
        }