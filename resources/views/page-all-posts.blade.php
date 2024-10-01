<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            vertical-align: baseline;
            margin: 0;
            border: 0;
            padding: 0;
            font: inherit;
            font-size: 100%;
        }

        /* HTML5 display-role reset for older browsers */
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote::before,
        blockquote::after,
        q::before,
        q::after {
            content: none;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            border: none;
            padding: 0;
            background-color: transparent;
            cursor: pointer;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type='number'] {
            -moz-appearance: textfield;
        }

        [type='checkbox'],
        [type='radio'] {
            padding: 0;
            box-sizing: border-box;
        }

        [disabled],
        [disabled] * {
            cursor: not-allowed;
            user-select: none;
        }

        [hidden] {
            display: none;
        }

        img {
            display: block;
            width: 100%;
            max-width: 100%;
        }

        svg {
            display: block;
        }

        input,
        textarea {
            -webkit-border-radius: 0;
            border-radius: 0;
        }

        html {
            box-sizing: border-box;
            font-size: 16px;
        }

        html,
        body,
        #__nuxt {
            height: 100%;
            min-height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: var(--font-family);
            font-weight: 400;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            line-height: 1;
            -ms-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        .container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 0 80px;
        }

        .block {
            padding: 30px 0 100px;
        }

        .block__nav {
            margin-bottom: 80px;
        }

        .block__nav-btn {
            background-color: #4b5563;
            color: #D9D9D9;
            padding: 15px;
            border-radius: 10px;
        }

        .post__list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px 30px;
        }

        .post__item {
            padding: 20px;
            border-radius: 15px;
            background-color: #D9D9D9;
            display: flex;
            flex-direction: column;
            justify-content: space-between;

        }

        .post__box {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .post__box-list {
            display: flex;
            align-items: center;
            gap: 10px;
        }
    </style>
</head>

<body>

<section class="block">
    <div class="container">
        <nav class="block__nav">
            <a href="{{route('form_post')}}" class="block__nav-btn">Create post</a>
        </nav>
        <div class="post">
            @foreach($posts as $post)
                    <ul class="post__list">
                        <li class="post__item">
                            <div class="post__box">
                                <h4 class="post__box-title">{{$post->title}}</h4>
                                <ul class="post__box-list">

                                    <li class="post__box-item">
                                        <a href="{{route('form_update_post', $post->id)}}">Update</a>
                                    </li>
                                    <li class="post__box-item">
                                        <form action="{{route('delete_post', $post->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </li>
                                    <li class="post__box-item">
                                        <a href="{{route('one_post', $post->id)}}">Show</a>
                                    </li>
                                </ul>
                            </div>
                            <p>{{$post->description}}</p>
                            <p>{{$post->author->author_name}}</p>
                        </li>
                    </ul>
            @endforeach
        </div>
    </div>
</section>

</body>
</html>


