<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .required:after {
            content: " *";
            color: red;
        }
    </style>
</head>

<body>
    @props(['label' => "", 'name'=>""])

    <label class="text-md text-gray-600 required" for="{{ $name }}">
        {{ $label }}
    </label>
</body>

</html>