<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/bootstrap5/css/bootstrap.min.css', 'resources/fontawesome/css/all.min.css'])
</head>

<body>
    @yield('content')
    @include('layouts.models')
    @include('layouts.toast')
</body>
<script>
    // Hiển thị form xác nhận khi nhấn nút "Delete"
    function showConfirmationForm(id) {
        document.getElementById('confirmDeleteForm').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('deleteForm').action = "{{ route('student.destroy', '') }}" + '/' + id;
    }

    // Ẩn form xác nhận nếu nhấn "No"
    function hideConfirmationForm() {
        document.getElementById('confirmDeleteForm').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }

    // Submit form nếu nhấn "Yes"
    function submitDeleteForm() {
        // document.getElementById('deleteForm').submit();
        hideConfirmationForm();
        showToast();
    }

    function showToast() {
        document.getElementById("successToast").style.display = 'block';
        let timeoutId = setTimeout(function() {
            document.getElementById("successToast").style.display = 'none';
        }, 2000);
        // Hủy hàm timeout
        clearTimeout(timeoutId);
    }
</script>

</html>
