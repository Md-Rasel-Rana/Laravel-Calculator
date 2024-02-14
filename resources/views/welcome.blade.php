<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Calculator</h1>
        
        @if(session('error'))
            <div class="alert alert-danger mt-3">{{ session('error') }}</div>
        @endif

        <form method="post" action="{{ url('/calculator') }}" class="mt-3">
            @csrf
            <div class="form-group">
                <input type="number" class="form-control" name="num1" placeholder="Enter number 1" required>
            </div>
            <div class="form-group">
                <select class="form-control" name="operator" required>
                    <option value="add">+</option>
                    <option value="subtract">-</option>
                    <option value="multiply">*</option>
                    <option value="divide">/</option>
                </select>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="num2" placeholder="Enter number 2" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>

        @if(session('result'))
            <h2 class="mt-3">Result: {{ session('result') }} </h2>
        @endif
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
