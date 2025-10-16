<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f9d6ff, #a3d8f4);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            margin: 0;
            padding: 30px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            width: 80%;
            max-width: 800px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #eee;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f8f9fa;
            font-weight: 600;
            color: #555;
        }
        tr:nth-child(even) {
            background-color: #fafafa;
        }
        .btn {
            padding: 8px 14px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            color: white;
            font-weight: 500;
            transition: 0.3s;
        }
        .btn-add {
            background-color: #4caf50;
        }
        .btn-edit {
            background-color: #3498db;
        }
        .btn-delete {
            background-color: #e74c3c;
        }
        .btn:hover {
            transform: scale(1.07);
            filter: brightness(1.1);
        }
        .success-message {
            background-color: #c8e6c9;
            color: #2e7d32;
            padding: 10px 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 500;
            animation: fadeIn 1s;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 My Book Collection</h1>

        @if (session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        <a href="{{ route('books.create') }}" class="btn btn-add">+ Add New Book</a>

        <table>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->description }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4">No books yet 😢</td></tr>
            @endforelse
        </table>
    </div>
</body>
</html>
