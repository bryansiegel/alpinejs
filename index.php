<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpine js</title>
    <script src="//unpkg.com/alpinejs" defer></script>

</head>

<body>


    <div x-data="{ open: false }">
        <button @click="open = true">Expand</button>
        <div x-show="open" x-cloak>
            yo
        </div>
    </div>

</body>

</html>