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

                        <li class="post__box-item"><a href="#">Update</a></li>
                        <li class="post__box-item"><button>Delete</button></li>
                    </ul>
                </div>
                <p>{{$post->description}}</p>
                <p>{{$post->author->author_name}}</p>
            </li>
        </ul>
            @endforeach
{{--            <ul class="post__list">--}}
{{--                <li class="post__item">--}}
{{--                    <div class="post__box">--}}
{{--                        <h4 class="post__box-title">Title</h4>--}}
{{--                        <ul class="post__box-list">--}}

{{--                            <li class="post__box-item"><a href="#">Update</a></li>--}}
{{--                            <li class="post__box-item"><button>Delete</button></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>--}}
{{--                    <p>Lenin</p>--}}
{{--                </li>--}}
{{--                <li class="post__item">--}}
{{--                    <div class="post__box">--}}
{{--                        <h4 class="post__box-title">Title</h4>--}}
{{--                        <ul class="post__box-list">--}}

{{--                            <li class="post__box-item"><a href="#">Update</a></li>--}}
{{--                            <li class="post__box-item"><button>Delete</ button></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero.</p>--}}
{{--                    <p>dyadya Andrey</p>--}}
{{--                </li>--}}
{{--                <li class="post__item">--}}
{{--                    <div class="post__box">--}}
{{--                        <h4 class="post__box-title">Title</h4>--}}
{{--                        <ul class="post__box-list">--}}

{{--                            <li class="post__box-item"><a href="#">Update</a></li>--}}
{{--                            <li class="post__box-item"><button>Delete</ button></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>--}}
{{--                    <p>Papich</p>--}}
{{--                </li>--}}
{{--                <li class="post__item">--}}
{{--                    <div class="post__box">--}}
{{--                        <h4 class="post__box-title">Title</h4>--}}
{{--                        <ul class="post__box-list">--}}

{{--                            <li class="post__box-item"><a href="#">Update</a></li>--}}
{{--                            <li class="post__box-item"><button>Delete</ button></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>--}}
{{--                    <p>Chechen</p>--}}
{{--                </li>--}}
{{--                <li class="post__item">--}}
{{--                    <div class="post__box">--}}
{{--                        <h4 class="post__box-title">Title</h4>--}}
{{--                        <ul class="post__box-list">--}}

{{--                            <li class="post__box-item"><a href="#">Update</a></li>--}}
{{--                            <li class="post__box-item"><button>Delete</ button></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <p>In in ultrices nisi, ac dapibus elit. Pellentesque aliquam efficitur dui, ut ultricies est pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tortor neque, pretium efficitur sollicitudin ut, tincidunt ut velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vivamus venenatis dui non metus venenatis convallis. Morbi ut libero justo. Curabitur vel dolor enim.</p>--}}
{{--                    <p>Vlad ChaCha</p>--}}
{{--                </li>--}}
{{--                <li class="post__item">--}}
{{--                    <div class="post__box">--}}
{{--                        <h4 class="post__box-title">Title</h4>--}}
{{--                        <ul class="post__box-list">--}}

{{--                            <li class="post__box-item"><a href="#">Update</a></li>--}}
{{--                            <li class="post__box-item"><button>Delete</ button></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <p>Fusce aliquam porta tortor at fringilla. Nunc eget iaculis sem, vel volutpat ligula. Fusce sollicitudin tempus accumsan. Aenean eleifend leo in lacus hendrerit imperdiet. Quisque ac tempor felis, in varius felis. Aenean at efficitur orci. Proin porttitor bibendum justo, sed pulvinar nisi feugiat ac. Aenean condimentum orci sit amet mi convallis faucibus non vitae tortor. Ut vitae semper mauris. Nullam ac eros ante. Morbi suscipit lorem in purus mollis, quis imperdiet sem facilisis. Maecenas ligula neque, ultrices vel tempor nec, facilisis a sapien. Fusce dictum eros molestie justo aliquet, in finibus nunc consequat. Phasellus tempor iaculis sodales. Sed id leo nec nibh iaculis volutpat. Vestibulum fringilla ante a est pretium ornare.</p>--}}
{{--                    <p>Nikos</p>--}}
{{--                </li>--}}
{{--                <li class="post__item">--}}
{{--                    <div class="post__box">--}}
{{--                        <h4 class="post__box-title">Title</h4>--}}
{{--                        <ul class="post__box-list">--}}

{{--                            <li class="post__box-item"><a href="#">Update</a></li>--}}
{{--                            <li class="post__box-item"><button>Delete</ button></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <p>Praesent viverra, ligula eu dictum vestibulum, justo nibh finibus sapien, in facilisis tortor velit lobortis dolor. Praesent aliquam lacus pharetra pellentesque condimentum. Duis convallis nec nisl eget placerat. Aliquam eget lacus dui. Nunc placerat non justo eget tincidunt. Duis lacus ipsum, varius non consequat non, luctus ut metus. Praesent bibendum nulla vel nulla suscipit, in aliquam dui luctus. Maecenas quis neque nisl.</p>--}}
{{--                    <p>Romzes 1</p>--}}
{{--                </li>--}}
{{--                <li class="post__item">--}}
{{--                    <div class="post__box">--}}
{{--                        <h4 class="post__box-title">Title</h4>--}}
{{--                        <ul class="post__box-list">--}}

{{--                            <li class="post__box-item"><a href="#">Update</a></li>--}}
{{--                            <li class="post__box-item"><button>Delete</ button></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda fuga numquam quam reiciendis voluptates. Ab beatae dolores ex in pariatur ratione sapiente sed suscipit tenetur totam. Consequatur eveniet iusto libero?</p>--}}
{{--                    <p>Lorem ipsum</p>--}}
{{--                </li>--}}
{{--                <li class="post__item">--}}
{{--                    <div class="post__box">--}}
{{--                        <h4 class="post__box-title">Title</h4>--}}
{{--                        <ul class="post__box-list">--}}

{{--                            <li class="post__box-item"><a href="#">Update</a></li>--}}
{{--                            <li class="post__box-item"><button>Delete</ button></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <p>Curabitur vestibulum, nibh ut viverra ultricies, est nunc aliquet quam, eget tempus ante elit ut odio. Mauris quis interdum lacus, eget semper lectus. Nullam dui ipsum, bibendum ac ex a, laoreet lacinia est. Quisque volutpat sit amet nunc ac fermentum. Praesent magna velit, venenatis nec vehicula in, commodo at tortor. Aliquam blandit consectetur ex ut fermentum. Suspendisse ultrices lectus ac ipsum auctor, eu egestas neque mattis. Nunc auctor, mauris eu ultricies venenatis, orci libero porttitor tellus, nec luctus turpis libero sit amet risus. In hac habitasse platea dictumst. Nulla aliquet urna et lacus elementum, ac luctus eros convallis. Donec quis nibh felis.--}}

{{--                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin convallis massa sit amet erat mattis vulputate. Donec vitae posuere magna. Nunc ac magna pharetra, fermentum sem sit amet, blandit sem. Quisque ut venenatis libero. Aenean varius, neque quis faucibus scelerisque, purus elit sagittis sapien, a rhoncus erat velit eu ipsum. Aenean accumsan metus ac augue scelerisque tempor. Etiam quis libero ut magna facilisis maximus. Nullam rutrum, magna non laoreet consectetur, eros sem semper tellus, id fringilla eros ligula mollis leo. Duis dapibus pulvinar accumsan. Ut eu justo sed enim imperdiet tristique et sit amet sapien. Pellentesque turpis velit, molestie vitae enim porta, eleifend feugiat augue. Pellentesque volutpat eros a placerat pretium. Donec est lorem, euismod in tempor a, mollis in erat. Donec ipsum odio, consequat non turpis quis, porta sagittis diam.</p>--}}
{{--                    <p>test</p>--}}
{{--                </li>--}}
{{--                <li class="post__item">--}}
{{--                    <div class="post__box">--}}
{{--                        <h4 class="post__box-title">Title</h4>--}}
{{--                        <ul class="post__box-list">--}}

{{--                            <li class="post__box-item"><a href="#">Update</a></li>--}}
{{--                            <li class="post__box-item"><button>Delete</ button></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <p>Vestibulum blandit odio vitae pulvinar cursus. Cras feugiat erat sed justo commodo, ut tristique enim ultricies. Ut vitae nisi auctor, malesuada purus nec, consectetur leo. Fusce tristique tellus ante, sit amet efficitur quam hendrerit eu. Aenean lacinia, urna vel euismod aliquet, felis nunc ullamcorper nisl, vel consectetur ante libero sit amet orci. Morbi tincidunt dapibus ligula ut congue. Donec maximus nec erat eu porta. Sed at lectus risus. Sed et erat vitae eros aliquet egestas.</p>--}}
{{--                    <p>test</p>--}}
{{--                </li>--}}
{{--            </ul>--}}
        </div>
    </div>
</section>

</body>
</html>


