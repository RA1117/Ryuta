{"filter":false,"title":"CategoryController.php","tooltip":"/blog/app/Http/Controllers/CategoryController.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":12,"column":4},"end":{"row":50,"column":5},"action":"remove","lines":["public function index(Post $post)","    {","        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(5)]);","    }","    ","    public function show(Post $post)","    {","        return view('posts/show')->with(['post' => $post]);","    }","    ","    public function create(Category $category)","    {","        return view('posts/create')->with(['categories' => $category->get()]);","    }","    ","    public function store(PostRequest $request, Post $post) ","    {","        $input = $request['post'];","        $post->fill($input)->save();","        return redirect('/posts/' . $post->id);","    }","    ","    public function edit(Post $post)","    {","        return view('posts/edit')->with(['post' => $post]);","    }","    ","    public function update(PostRequest $request, Post $post)","    {","        $input_post = $request['post'];","        $post->fill($input_post)->save();","        return redirect('/posts/' . $post->id);","    }","    ","    public function delete(Post $post)","    {","        $post->delete();","        return redirect('/');","    }"],"id":2}],[{"start":{"row":12,"column":4},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":12,"column":4},"end":{"row":15,"column":5},"action":"insert","lines":["public function index(Category $category)","    {","        return view('categories.index')->with(['posts' => $category->getByCategory()]);","    }"],"id":4}],[{"start":{"row":9,"column":6},"end":{"row":9,"column":20},"action":"remove","lines":["PostController"],"id":5}],[{"start":{"row":9,"column":6},"end":{"row":9,"column":24},"action":"insert","lines":["CategoryController"],"id":6}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":1},"end":{"row":17,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1691029830292,"hash":"21d903e952398de17686d4d361e0e347a4d8c3a7"}