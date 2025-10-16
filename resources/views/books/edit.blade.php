<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f6d5f7, #fbe9d7);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            width: 400px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            font-weight: 500;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }
        .btn {
            padding: 10px 16px;
            border: none;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-update {
            background-color: #3498db;
        }
        .btn-update:hover {
            transform: scale(1.05);
            filter: brightness(1.1);
        }
        .btn-back {
            display: inline-block;
            margin-top: 10px;
            color: #3498db;
            text-decoration: none;
            font-weight: 500;
        }
        .btn-back:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Edit Book</h1>

        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Title:</label>
            <input type="text" name="title" value="{{ $book->title }}" required>

            <label>Author:</label>
            <input type="text" name="author" value="{{ $book->author }}" required>

            <label>Description:</label>
            <textarea name="description" rows="3">{{ $book->description }}</textarea>

            <button type="submit" class="btn btn-update">Update Book</button>
        </form>

        <a href="{{ route('books.index') }}" class="btn-back">← Back to list</a>
    </div>
</body>
</html>
