{"filter":false,"title":"index.blade.php","tooltip":"/blog/resources/views/posts/index.blade.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":38,"column":36},"end":{"row":38,"column":37},"action":"insert","lines":["i"],"id":1029},{"start":{"row":38,"column":37},"end":{"row":38,"column":38},"action":"insert","lines":["t"]}],[{"start":{"row":38,"column":35},"end":{"row":38,"column":38},"action":"remove","lines":["tit"],"id":1030},{"start":{"row":38,"column":35},"end":{"row":38,"column":40},"action":"insert","lines":["title"]}],[{"start":{"row":38,"column":40},"end":{"row":38,"column":41},"action":"insert","lines":["]"],"id":1031}],[{"start":{"row":38,"column":40},"end":{"row":38,"column":41},"action":"insert","lines":["'"],"id":1032}],[{"start":{"row":38,"column":42},"end":{"row":38,"column":43},"action":"insert","lines":[" "],"id":1033}],[{"start":{"row":38,"column":51},"end":{"row":39,"column":0},"action":"insert","lines":["",""],"id":1034},{"start":{"row":39,"column":0},"end":{"row":39,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":39,"column":12},"end":{"row":39,"column":16},"action":"remove","lines":["    "],"id":1035}],[{"start":{"row":39,"column":12},"end":{"row":39,"column":13},"action":"insert","lines":["@"],"id":1036},{"start":{"row":39,"column":13},"end":{"row":39,"column":14},"action":"insert","lines":["e"]}],[{"start":{"row":39,"column":14},"end":{"row":39,"column":15},"action":"insert","lines":["n"],"id":1037}],[{"start":{"row":39,"column":13},"end":{"row":39,"column":15},"action":"remove","lines":["en"],"id":1038},{"start":{"row":39,"column":13},"end":{"row":39,"column":23},"action":"insert","lines":["endforeach"]}],[{"start":{"row":36,"column":8},"end":{"row":40,"column":14},"action":"remove","lines":["<div>","            @foreach($questions as $question)","                <div>{{ $question['title'] }}</div>","            @endforeach","        </div>"],"id":1039},{"start":{"row":36,"column":4},"end":{"row":36,"column":8},"action":"remove","lines":["    "]},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"remove","lines":["    "]},{"start":{"row":35,"column":17},"end":{"row":36,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":37,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>blog</title>","        ","                <!-- Fonts -->","        <link href=\"https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap\" rel=\"stylesheet\">","    </head>","    <body class=\"antialiased\">","        <h1>Blog Name</h1>","        <a href='/posts/create'>create</a>","        <div class='posts'>","            @foreach($posts as $post)","                 <div class='post'>","                    <a href='/posts/{{ $post->id }}'><h2 class='title'>{{ $post->title }}</h2></a>","                    <a href=''>{{ $post->category->name}}</a>","                    <p class='body'>{{ $post->body }}</p>","                    <form action='/posts/{{ $post->id }}' id='form_{{ $post->id }}' method='post'>","                        @csrf","                        @method('DELETE')","                         <button type='button' onclick='deletePost({{ $post->id }})'>delete</button>","                    </form>","                </div>","            @endforeach","        </div>","        <div class='paginate'>{{ $posts->links()}}</div>","        <script>","            function deletePost(id) {","                'use strict'","                    ","                if(confirm('削除すると復元できません。\\n本当に削除しますか？')){","                    document.getElementById(`form_${id}`).submit();","                }","            }","        </script>","    </body>","</html>"],"id":1040}],[{"start":{"row":0,"column":0},"end":{"row":27,"column":11},"action":"insert","lines":["<body class=\"antialiased\">","        <h1>Blog Name</h1>","        <a href='/posts/create'>create</a>","        <div class='posts'>","            @foreach($posts as $post)","                 <div class='post'>","                    <a href='/posts/{{ $post->id }}'><h2 class='title'>{{ $post->title }}</h2></a>","                    <a href=''>{{ $post->category->name}}</a>","                    <p class='body'>{{ $post->body }}</p>","                    <form action='/posts/{{ $post->id }}' id='form_{{ $post->id }}' method='post'>","                        @csrf","                        @method('DELETE')","                         <button type='button' onclick='deletePost({{ $post->id }})'>delete</button>","                    </form>","                </div>","            @endforeach","        </div>","        <div class='paginate'>{{ $posts->links()}}</div>","        <script>","            function deletePost(id) {","                'use strict'","                    ","                if(confirm('削除すると復元できません。\\n本当に削除しますか？')){","                    document.getElementById(`form_${id}`).submit();","                }","            }","        </script>","    </body>"],"id":1041}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":1042}],[{"start":{"row":0,"column":0},"end":{"row":3,"column":13},"action":"insert","lines":["<x-app-layout>","    <x-slot name=\"header\">","        　（ヘッダー名）","    </x-slot>"],"id":1043}],[{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"remove","lines":["）"],"id":1044},{"start":{"row":2,"column":14},"end":{"row":2,"column":15},"action":"remove","lines":["名"]},{"start":{"row":2,"column":13},"end":{"row":2,"column":14},"action":"remove","lines":["ー"]},{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"remove","lines":["ダ"]},{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"remove","lines":["ッ"]},{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"remove","lines":["ヘ"]},{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"remove","lines":["（"]}],[{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"remove","lines":["　"],"id":1045},{"start":{"row":2,"column":4},"end":{"row":2,"column":8},"action":"remove","lines":["    "]},{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"remove","lines":["    "]},{"start":{"row":1,"column":26},"end":{"row":2,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":1,"column":26},"end":{"row":2,"column":8},"action":"insert","lines":["","        "],"id":1046}],[{"start":{"row":2,"column":8},"end":{"row":4,"column":13},"action":"insert","lines":["<h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","            {{ __('Dashboard') }}","        </h2>"],"id":1047}],[{"start":{"row":3,"column":27},"end":{"row":3,"column":28},"action":"remove","lines":["d"],"id":1048},{"start":{"row":3,"column":26},"end":{"row":3,"column":27},"action":"remove","lines":["r"]},{"start":{"row":3,"column":25},"end":{"row":3,"column":26},"action":"remove","lines":["a"]},{"start":{"row":3,"column":24},"end":{"row":3,"column":25},"action":"remove","lines":["o"]},{"start":{"row":3,"column":23},"end":{"row":3,"column":24},"action":"remove","lines":["b"]},{"start":{"row":3,"column":22},"end":{"row":3,"column":23},"action":"remove","lines":["h"]},{"start":{"row":3,"column":21},"end":{"row":3,"column":22},"action":"remove","lines":["s"]},{"start":{"row":3,"column":20},"end":{"row":3,"column":21},"action":"remove","lines":["a"]},{"start":{"row":3,"column":19},"end":{"row":3,"column":20},"action":"remove","lines":["D"]}],[{"start":{"row":3,"column":19},"end":{"row":3,"column":20},"action":"insert","lines":["i"],"id":1049},{"start":{"row":3,"column":20},"end":{"row":3,"column":21},"action":"insert","lines":["n"]},{"start":{"row":3,"column":21},"end":{"row":3,"column":22},"action":"insert","lines":["d"]}],[{"start":{"row":3,"column":19},"end":{"row":3,"column":22},"action":"remove","lines":["ind"],"id":1050},{"start":{"row":3,"column":19},"end":{"row":3,"column":24},"action":"insert","lines":["index"]}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"insert","lines":["    "],"id":1051}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":15},"action":"insert","lines":["</x-app-layout>"],"id":1052}],[{"start":{"row":2,"column":8},"end":{"row":33,"column":11},"action":"remove","lines":["<h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","            {{ __('index') }}","        </h2>","    </x-slot>","    <body class=\"antialiased\">","        <h1>Blog Name</h1>","        <a href='/posts/create'>create</a>","        <div class='posts'>","            @foreach($posts as $post)","                 <div class='post'>","                    <a href='/posts/{{ $post->id }}'><h2 class='title'>{{ $post->title }}</h2></a>","                    <a href=''>{{ $post->category->name}}</a>","                    <p class='body'>{{ $post->body }}</p>","                    <form action='/posts/{{ $post->id }}' id='form_{{ $post->id }}' method='post'>","                        @csrf","                        @method('DELETE')","                         <button type='button' onclick='deletePost({{ $post->id }})'>delete</button>","                    </form>","                </div>","            @endforeach","        </div>","        <div class='paginate'>{{ $posts->links()}}</div>","        <script>","            function deletePost(id) {","                'use strict'","                    ","                if(confirm('削除すると復元できません。\\n本当に削除しますか？')){","                    document.getElementById(`form_${id}`).submit();","                }","            }","        </script>","    </body>"],"id":1053}],[{"start":{"row":0,"column":0},"end":{"row":3,"column":15},"action":"remove","lines":["<x-app-layout>","    <x-slot name=\"header\">","        ","</x-app-layout>"],"id":1054}],[{"start":{"row":0,"column":0},"end":{"row":38,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>blog</title>","","        <!-- Fonts -->","        <link href=\"https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap\" rel=\"stylesheet\">","","    </head>","    <body class=\"antialiased\">","        <h1>Blog Name</h1>","        <a href='/posts/create'>create</a>","        <div class='posts'>","            @foreach($posts as $post)","                 <div class='post'>","                    <a href='/posts/{{ $post->id }}'><h2 class='title'>{{ $post->title }}</h2></a>","                    <a href=\"/categories/{{ $post->category->id }}\">{{ $post->category->name }}</a>","                    <p class='body'>{{ $post->body }}</p>","                    <form action='/posts/{{ $post->id }}' id='form_{{ $post->id }}' method='post'>","                        @csrf","                        @method('DELETE')","                         <button type='button' onclick='deletePost({{ $post->id }})'>delete</button>","                    </form>","                </div>","            @endforeach","        </div>","        <div class='paginate'>{{ $posts->links()}}</div>","        <script>","            function deletePost(id) {","                'use strict'","                ","                if(confirm('削除すると復元できません。\\n本当に削除しますか？')){","                    document.getElementById(`form_${id}`).submit();","                }","            }","        </script>","    </body>","</html>"],"id":1055}],[{"start":{"row":9,"column":11},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":1056},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":4},"end":{"row":15,"column":15},"action":"insert","lines":["<x-app-layout>","    <x-slot name=\"header\">","        　（ヘッダー名）","    </x-slot>","   (各ブレードファイルの中身)","</x-app-layout>"],"id":1057}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":15},"action":"remove","lines":["</x-app-layout>"],"id":1058},{"start":{"row":14,"column":0},"end":{"row":14,"column":15},"action":"insert","lines":["</x-app-layout>"]}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":32},"action":"remove","lines":["</x-app-layout>   (各ブレードファイルの中身)"],"id":1059},{"start":{"row":13,"column":13},"end":{"row":14,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":13,"column":13},"end":{"row":14,"column":0},"action":"remove","lines":["",""],"id":1060}],[{"start":{"row":41,"column":11},"end":{"row":42,"column":0},"action":"insert","lines":["",""],"id":1061},{"start":{"row":42,"column":0},"end":{"row":42,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":42,"column":4},"end":{"row":42,"column":19},"action":"insert","lines":["</x-app-layout>"],"id":1062}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "],"id":1063},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"insert","lines":["    "]},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]},{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"insert","lines":["    "]},{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"insert","lines":["    "]},{"start":{"row":39,"column":0},"end":{"row":39,"column":4},"action":"insert","lines":["    "]},{"start":{"row":40,"column":0},"end":{"row":40,"column":4},"action":"insert","lines":["    "]},{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":8},"action":"insert","lines":["    "],"id":1064}],[{"start":{"row":12,"column":9},"end":{"row":12,"column":16},"action":"remove","lines":["（ヘッダー名）"],"id":1065}],[{"start":{"row":11,"column":30},"end":{"row":12,"column":12},"action":"insert","lines":["","            "],"id":1066}],[{"start":{"row":13,"column":8},"end":{"row":13,"column":9},"action":"remove","lines":["　"],"id":1067},{"start":{"row":13,"column":4},"end":{"row":13,"column":8},"action":"remove","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "]},{"start":{"row":12,"column":12},"end":{"row":13,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":12,"column":12},"end":{"row":14,"column":13},"action":"insert","lines":["<h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","            {{ __('Dashboard') }}","        </h2>"],"id":1068}],[{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"remove","lines":["d"],"id":1069},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"remove","lines":["r"]},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"remove","lines":["a"]},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"remove","lines":["o"]},{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"remove","lines":["b"]},{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"remove","lines":["h"]},{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"remove","lines":["s"]},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"remove","lines":["a"]},{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"remove","lines":["D"]}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"insert","lines":["i"],"id":1070},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["n"]},{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"insert","lines":["d"]},{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"insert","lines":["e"]}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":23},"action":"remove","lines":["inde"],"id":1071},{"start":{"row":13,"column":19},"end":{"row":13,"column":24},"action":"insert","lines":["index"]}],[{"start":{"row":14,"column":8},"end":{"row":14,"column":12},"action":"insert","lines":["    "],"id":1072}],[{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"remove","lines":["x"],"id":1073},{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"remove","lines":["e"]},{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"remove","lines":["d"]},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"remove","lines":["n"]},{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"remove","lines":["i"]}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"insert","lines":["D"],"id":1074},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["a"]},{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"insert","lines":["s"]}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":22},"action":"remove","lines":["Das"],"id":1075},{"start":{"row":13,"column":19},"end":{"row":13,"column":28},"action":"insert","lines":["Dashboard"]}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"remove","lines":["D"],"id":1076}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"insert","lines":["D"],"id":1077}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"remove","lines":["D"],"id":1078},{"start":{"row":13,"column":19},"end":{"row":13,"column":25},"action":"insert","lines":["DELETE"]}],[{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"remove","lines":["d"],"id":1079},{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"remove","lines":["r"]},{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"remove","lines":["a"]},{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"remove","lines":["o"]},{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"remove","lines":["b"]},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"remove","lines":["h"]},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"remove","lines":["s"]},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"remove","lines":["a"]},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"remove","lines":["E"]},{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"remove","lines":["T"]},{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"remove","lines":["E"]},{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"remove","lines":["L"]},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"remove","lines":["E"]},{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"remove","lines":["D"]}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"insert","lines":["D"],"id":1080},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["a"]}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":21},"action":"remove","lines":["Da"],"id":1081},{"start":{"row":13,"column":19},"end":{"row":13,"column":28},"action":"insert","lines":["Dashboard"]}],[{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"remove","lines":["d"],"id":1082},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"remove","lines":["r"]},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"remove","lines":["a"]},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"remove","lines":["o"]},{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"remove","lines":["b"]},{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"remove","lines":["h"]},{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"remove","lines":["s"]},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"remove","lines":["a"]},{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"remove","lines":["D"]}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"insert","lines":["i"],"id":1083},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["n"]}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":21},"action":"remove","lines":["in"],"id":1084},{"start":{"row":13,"column":19},"end":{"row":13,"column":24},"action":"insert","lines":["index"]}],[{"start":{"row":11,"column":8},"end":{"row":11,"column":9},"action":"insert","lines":["/"],"id":1085},{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":["/"]}],[{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"remove","lines":["/"],"id":1086},{"start":{"row":11,"column":8},"end":{"row":11,"column":9},"action":"remove","lines":["/"]}],[{"start":{"row":11,"column":8},"end":{"row":14,"column":17},"action":"remove","lines":["<x-slot name=\"header\">","            <h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","            {{ __('index') }}","            </h2>"],"id":1087}],[{"start":{"row":10,"column":18},"end":{"row":11,"column":8},"action":"insert","lines":["","        "],"id":1088}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":8},"action":"remove","lines":["    "],"id":1089},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["    "]},{"start":{"row":11,"column":8},"end":{"row":12,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":11,"column":8},"end":{"row":14,"column":17},"action":"insert","lines":["<x-slot name=\"header\">","            <h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","            {{ __('index') }}","            </h2>"],"id":1090}],[{"start":{"row":32,"column":18},"end":{"row":33,"column":0},"action":"insert","lines":["",""],"id":1091},{"start":{"row":33,"column":0},"end":{"row":33,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":33,"column":12},"end":{"row":33,"column":13},"action":"insert","lines":["<"],"id":1092},{"start":{"row":33,"column":13},"end":{"row":33,"column":14},"action":"insert","lines":["d"]},{"start":{"row":33,"column":14},"end":{"row":33,"column":15},"action":"insert","lines":["i"]},{"start":{"row":33,"column":15},"end":{"row":33,"column":16},"action":"insert","lines":["v"]}],[{"start":{"row":33,"column":16},"end":{"row":33,"column":17},"action":"insert","lines":[" "],"id":1093},{"start":{"row":33,"column":17},"end":{"row":33,"column":18},"action":"insert","lines":["c"]},{"start":{"row":33,"column":18},"end":{"row":33,"column":19},"action":"insert","lines":["l"]},{"start":{"row":33,"column":19},"end":{"row":33,"column":20},"action":"insert","lines":["a"]},{"start":{"row":33,"column":20},"end":{"row":33,"column":21},"action":"insert","lines":["s"]},{"start":{"row":33,"column":21},"end":{"row":33,"column":22},"action":"insert","lines":["s"]}],[{"start":{"row":33,"column":22},"end":{"row":33,"column":23},"action":"insert","lines":["="],"id":1094},{"start":{"row":33,"column":23},"end":{"row":33,"column":24},"action":"insert","lines":["v"]},{"start":{"row":33,"column":24},"end":{"row":33,"column":25},"action":"insert","lines":["e"]}],[{"start":{"row":33,"column":25},"end":{"row":33,"column":26},"action":"insert","lines":["r"],"id":1095},{"start":{"row":33,"column":26},"end":{"row":33,"column":27},"action":"insert","lines":["i"]}],[{"start":{"row":33,"column":26},"end":{"row":33,"column":27},"action":"remove","lines":["i"],"id":1096}],[{"start":{"row":33,"column":26},"end":{"row":33,"column":27},"action":"insert","lines":["y"],"id":1097}],[{"start":{"row":33,"column":26},"end":{"row":33,"column":27},"action":"remove","lines":["y"],"id":1098},{"start":{"row":33,"column":25},"end":{"row":33,"column":26},"action":"remove","lines":["r"]},{"start":{"row":33,"column":24},"end":{"row":33,"column":25},"action":"remove","lines":["e"]},{"start":{"row":33,"column":23},"end":{"row":33,"column":24},"action":"remove","lines":["v"]}],[{"start":{"row":33,"column":23},"end":{"row":33,"column":24},"action":"insert","lines":["r"],"id":1099},{"start":{"row":33,"column":24},"end":{"row":33,"column":25},"action":"insert","lines":["o"]},{"start":{"row":33,"column":25},"end":{"row":33,"column":26},"action":"insert","lines":["g"]},{"start":{"row":33,"column":26},"end":{"row":33,"column":27},"action":"insert","lines":["i"]}],[{"start":{"row":33,"column":27},"end":{"row":33,"column":28},"action":"insert","lines":["n"],"id":1100},{"start":{"row":33,"column":28},"end":{"row":33,"column":29},"action":"insert","lines":[">"]}],[{"start":{"row":33,"column":29},"end":{"row":34,"column":16},"action":"insert","lines":["","                "],"id":1101}],[{"start":{"row":33,"column":27},"end":{"row":33,"column":28},"action":"remove","lines":["n"],"id":1102},{"start":{"row":33,"column":26},"end":{"row":33,"column":27},"action":"remove","lines":["i"]},{"start":{"row":33,"column":25},"end":{"row":33,"column":26},"action":"remove","lines":["g"]},{"start":{"row":33,"column":24},"end":{"row":33,"column":25},"action":"remove","lines":["o"]},{"start":{"row":33,"column":23},"end":{"row":33,"column":24},"action":"remove","lines":["r"]}],[{"start":{"row":33,"column":23},"end":{"row":33,"column":24},"action":"remove","lines":[">"],"id":1103}],[{"start":{"row":33,"column":23},"end":{"row":33,"column":25},"action":"insert","lines":["''"],"id":1104}],[{"start":{"row":33,"column":24},"end":{"row":33,"column":25},"action":"insert","lines":["l"],"id":1105},{"start":{"row":33,"column":25},"end":{"row":33,"column":26},"action":"insert","lines":["o"]},{"start":{"row":33,"column":26},"end":{"row":33,"column":27},"action":"insert","lines":["g"]},{"start":{"row":33,"column":27},"end":{"row":33,"column":28},"action":"insert","lines":["i"]},{"start":{"row":33,"column":28},"end":{"row":33,"column":29},"action":"insert","lines":["n"]}],[{"start":{"row":33,"column":30},"end":{"row":33,"column":37},"action":"insert","lines":["></div>"],"id":1106}],[{"start":{"row":33,"column":31},"end":{"row":33,"column":32},"action":"insert","lines":["{"],"id":1107},{"start":{"row":33,"column":32},"end":{"row":33,"column":33},"action":"insert","lines":["{"]},{"start":{"row":33,"column":33},"end":{"row":33,"column":34},"action":"insert","lines":["}"]},{"start":{"row":33,"column":34},"end":{"row":33,"column":35},"action":"insert","lines":["}"]}],[{"start":{"row":33,"column":33},"end":{"row":33,"column":34},"action":"insert","lines":[" "],"id":1108},{"start":{"row":33,"column":34},"end":{"row":33,"column":35},"action":"insert","lines":["A"]},{"start":{"row":33,"column":35},"end":{"row":33,"column":36},"action":"insert","lines":["u"]}],[{"start":{"row":33,"column":36},"end":{"row":33,"column":37},"action":"insert","lines":["t"],"id":1109},{"start":{"row":33,"column":37},"end":{"row":33,"column":38},"action":"insert","lines":["h"]},{"start":{"row":33,"column":38},"end":{"row":33,"column":39},"action":"insert","lines":[":"]}],[{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"insert","lines":[":"],"id":1110},{"start":{"row":33,"column":40},"end":{"row":33,"column":41},"action":"insert","lines":["u"]},{"start":{"row":33,"column":41},"end":{"row":33,"column":42},"action":"insert","lines":["s"]},{"start":{"row":33,"column":42},"end":{"row":33,"column":43},"action":"insert","lines":["e"]},{"start":{"row":33,"column":43},"end":{"row":33,"column":44},"action":"insert","lines":["r"]}],[{"start":{"row":33,"column":44},"end":{"row":33,"column":45},"action":"insert","lines":["("],"id":1111}],[{"start":{"row":33,"column":45},"end":{"row":33,"column":46},"action":"insert","lines":[")"],"id":1112},{"start":{"row":33,"column":46},"end":{"row":33,"column":47},"action":"insert","lines":["-"]},{"start":{"row":33,"column":47},"end":{"row":33,"column":48},"action":"insert","lines":[">"]}],[{"start":{"row":33,"column":48},"end":{"row":33,"column":49},"action":"insert","lines":["n"],"id":1113},{"start":{"row":33,"column":49},"end":{"row":33,"column":50},"action":"insert","lines":["a"]},{"start":{"row":33,"column":50},"end":{"row":33,"column":51},"action":"insert","lines":["m"]},{"start":{"row":33,"column":51},"end":{"row":33,"column":52},"action":"insert","lines":["e"]}],[{"start":{"row":33,"column":52},"end":{"row":33,"column":53},"action":"insert","lines":[" "],"id":1114}],[{"start":{"row":33,"column":31},"end":{"row":33,"column":35},"action":"insert","lines":["ログイン"],"id":1115}],[{"start":{"row":33,"column":35},"end":{"row":33,"column":39},"action":"insert","lines":["ユーザー"],"id":1116}],[{"start":{"row":32,"column":18},"end":{"row":33,"column":0},"action":"insert","lines":["",""],"id":1117},{"start":{"row":33,"column":0},"end":{"row":33,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":33,"column":12},"end":{"row":33,"column":13},"action":"insert","lines":["<"],"id":1118},{"start":{"row":33,"column":13},"end":{"row":33,"column":14},"action":"insert","lines":["p"]}],[{"start":{"row":33,"column":14},"end":{"row":33,"column":19},"action":"insert","lines":["></p>"],"id":1119}],[{"start":{"row":33,"column":18},"end":{"row":33,"column":19},"action":"remove","lines":[">"],"id":1120},{"start":{"row":33,"column":17},"end":{"row":33,"column":18},"action":"remove","lines":["p"]},{"start":{"row":33,"column":16},"end":{"row":33,"column":17},"action":"remove","lines":["/"]},{"start":{"row":33,"column":15},"end":{"row":33,"column":16},"action":"remove","lines":["<"]},{"start":{"row":33,"column":14},"end":{"row":33,"column":15},"action":"remove","lines":[">"]},{"start":{"row":33,"column":13},"end":{"row":33,"column":14},"action":"remove","lines":["p"]},{"start":{"row":33,"column":12},"end":{"row":33,"column":13},"action":"remove","lines":["<"]},{"start":{"row":33,"column":8},"end":{"row":33,"column":12},"action":"remove","lines":["    "]},{"start":{"row":33,"column":4},"end":{"row":33,"column":8},"action":"remove","lines":["    "]},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":32,"column":18},"end":{"row":33,"column":0},"action":"remove","lines":["",""],"id":1121}],[{"start":{"row":33,"column":31},"end":{"row":34,"column":16},"action":"insert","lines":["","                "],"id":1122}],[{"start":{"row":34,"column":48},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":1123},{"start":{"row":35,"column":0},"end":{"row":35,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":35,"column":12},"end":{"row":35,"column":16},"action":"remove","lines":["    "],"id":1124}],[{"start":{"row":34,"column":16},"end":{"row":34,"column":17},"action":"insert","lines":["<"],"id":1125},{"start":{"row":34,"column":17},"end":{"row":34,"column":18},"action":"insert","lines":["p"]}],[{"start":{"row":34,"column":17},"end":{"row":34,"column":18},"action":"remove","lines":["p"],"id":1126},{"start":{"row":34,"column":17},"end":{"row":34,"column":18},"action":"insert","lines":["p"]}],[{"start":{"row":34,"column":18},"end":{"row":34,"column":23},"action":"insert","lines":["></p>"],"id":1127}],[{"start":{"row":34,"column":19},"end":{"row":34,"column":23},"action":"remove","lines":["</p>"],"id":1128}],[{"start":{"row":34,"column":51},"end":{"row":34,"column":55},"action":"insert","lines":["</p>"],"id":1129}]]},"ace":{"folds":[],"scrolltop":17,"scrollleft":184,"selection":{"start":{"row":26,"column":33},"end":{"row":26,"column":33},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1691026951203,"hash":"8d73af6c58aa052963aedc60a41a390a5c1d0b4c"}