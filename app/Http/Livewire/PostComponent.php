<?php

namespace App\Http\Livewire;
//modelo
use App\Models\Post;

use Livewire\Component;

//paginacion
use Livewire\WithPagination;

class PostComponent extends Component
{
    use WithPagination;

    public $postId, $name, $body, $action="store";

    //reglas aplicadas a la validacion, si es que no se señala directamente en la funcion
    protected $rules=[
        'name'=>'required',
        'body'=>'required'
    ];

    protected $validationAttributes=[
        'name'=>'titulo',
        'body'=>'post'
    ];
    public function render()
    {
        $posts=Post::latest('id')->paginate(5);
       // dump($posts);
       return view('livewire.post-component', compact('posts'));
    }
    public function store(){

      $this->validate();
       Post::create([
           'name'=>$this->name,
           'body'=>$this->body
       ]);

       $this->default();
    }

    public function edit(Post $post){
        $this->name=$post->name;
        $this->body=$post->body;
        $this->postId=$post->id;

        $this->action="update";
    }

    public function update(){

        $this->validate();
        $post=Post::find($this->postId);

        $post->name=$this->name;
        $post->body=$this->body;

        $post->save();
        $this->default();
    }

    public function default(){
        $this->reset(['name','body', 'postId','action']);
    }

    public function destroy(Post $post){
        $post->delete();

    }
}
