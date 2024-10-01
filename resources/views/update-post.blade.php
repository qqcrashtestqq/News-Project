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

<form action="{{ route('update_post', $post->id) }}" method="post">
    @csrf
    @method('PUT')
    <input name="title" type="text" placeholder="title" value="{{ $post->title }}">
    <textarea name="description">{{ $post->description }}</textarea>
    <select name="author_id">
        @foreach($authors as $author)
            <option value="{{ $author->id }}" {{ $post->author_id == $author->id ? 'selected' : '' }}>
                {{ $author->author_name }}
            </option>
        @endforeach
    </select>
    <button type="submit">Update Post</button>
</form>




</body>
</html>
