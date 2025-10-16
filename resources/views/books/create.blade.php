<!DOCTYPE html>
<html>
<head>
    <title>Add New Book</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #c9e7ff, #f6d6ff);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-container {
            background: #fff;
            padding: 40px 50px;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            text-align: center;
            width: 380px;
            animation: fadeIn 0.7s ease-in;
        }

        h1 {
            color: #333;
            font-weight: 600;
            margin-bottom: 25px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 6px;
            font-weight: 500;
            color: #444;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            margin-bottom: 18px;
            transition: 0.3s;
        }

        input:focus, textarea:focus {
            border-color: #7d4bff;
            outline: none;
            box-shadow: 0 0 5px rgba(125, 75, 255, 0.3);
        }

        button {
            background: linear-gradient(135deg, #7d4bff, #5ac8fa);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 18px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            transition: 0.3s;
            font-family: 'Poppins', sans-serif;
            margin-top: 5px;
        }

        button:hover {
            transform: scale(1.05);
            filter: brightness(1.1);
        }

        a {
            display: inline-block;
            margin-top: 14px;
            text-decoration: none;
            color: #7d4bff;
            font-weight: 500;
            transition: 0.3s;
        }

        a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Add New Book</h1>

        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <label>Title:</label>
            <input type="text" name="title" required>

            <label>Author:</label>
            <input type="text" name="author" required>

            <label>Description:</label>
            <textarea name="description" rows="3"></textarea>

            <button type="submit">Save</button>
        </form>

        <a href="{{ route('books.index') }}">← Back</a>
    </div>
</body>
</html>
