<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
<div x-data="{count:0}">
    <span x-text="count"></span>
    <button x-on:click="count++" class="px-4 py-2 bg-indigo-600 text-white">Click</button>
</div>

<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>