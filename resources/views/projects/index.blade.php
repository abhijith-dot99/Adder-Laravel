<!DOCTYPE html>
<html>
<head>
    <title>Task</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f4f6;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2, h3 {
            color: #111827;
        }

        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);    
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 16px;
        }

        button {
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        button:hover {
            background-color: #1d4ed8;
        }

        ul {
            list-style: none;
            padding: 0;
            width: 100%;
            max-width: 500px;
        }

        li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
            margin-bottom: 12px;
            padding: 15px;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.04);
        }

        .delete-button {
            background-color: #ef4444;
            color: white;
            padding: 8px 14px;
            border-radius: 6px;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .delete-button:hover {
            background-color: #dc2626;
        }
    </style>
</head>
<body>
    <h2>Type Anything </h2>
    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <input type="text" name="name" placeholder="type anything" required>
        <button type="submit">Add</button>
    </form>

    <h3>List</h3>
    <ul>
        @foreach ($projects as $project)
            <li>
                {{ $project->name }}
                <form method="POST" action="{{ route('projects.destroy', $project->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="delete-button" type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
