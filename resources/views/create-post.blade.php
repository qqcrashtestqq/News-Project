<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="create__form">
    <form action="{{route('create_post')}}" method="post">
        @csrf
        <input name="title" type="text" placeholder="title">
        <textarea name="description" id="" cols="10" rows="3"></textarea>
        <select name="author_id">
        @foreach($authors as $author)
            <option value="{{ $author->id }}">{{ $author->author_name }}</option>
        @endforeach
        </select>
        <button>Create post</button>
    </form>
</div>
</body>
</html>
