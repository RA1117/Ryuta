{"filter":false,"title":"Category.php","tooltip":"/blog/app/Models/Category.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":14,"column":5},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":4},"end":{"row":16,"column":0},"action":"insert","lines":["",""]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":16,"column":4},"end":{"row":19,"column":1},"action":"insert","lines":["public function getByCategory(int $limit_count = 5)","{","     return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);","}"],"id":3}],[{"start":{"row":16,"column":0},"end":{"row":19,"column":1},"action":"remove","lines":["    public function getByCategory(int $limit_count = 5)","{","     return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);","}"],"id":4},{"start":{"row":15,"column":4},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":5}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "],"id":6}],[{"start":{"row":16,"column":4},"end":{"row":19,"column":5},"action":"insert","lines":["public function getByCategory(int $limit_count = 5)","    {","        return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);","    }"],"id":7}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":22,"column":0},"end":{"row":22,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1691028614495,"hash":"188e2ed8922326f2b03551d148a2a5e0807858f6"}