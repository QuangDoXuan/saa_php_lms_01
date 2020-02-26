<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dictionary\BookRepository;
use App\Repositories\Dictionary\AuthorRepository;
use App\Repositories\Dictionary\PublisherRepository;
use App\Repositories\Dictionary\CategoryRepository;
use App\Http\Requests\BookFormRequest;

class BookController extends Controller
{
    //
    protected $repository;
    protected $authorRepository;
    protected $publisherRepository;
    protected $cateRepository;

    public function __construct(BookRepository $repository, AuthorRepository $authorRepository, PublisherRepository $publisherRepository, CategoryRepository $cateRepository ){
        $this->repository = $repository;
        $this->authorRepository= $authorRepository;
        $this->publisherRepository=$publisherRepository;
        $this->cateRepository=$cateRepository;
    }

    public function index(){
        $books = $this->repository->all();
        return view('admin/book/index',compact('books'));
    }

    public function create(){
        $authors = $this->authorRepository->all();
        $publishers = $this->publisherRepository->all();
        $categories = $this->cateRepository->all();
        return view('admin/book/create',compact('authors', 'publishers','categories'));
    }

    public function store(Request $request){
        $fileSize = $request->file('file')->getSize();
        if ($fileSize&&$fileSize<2000000) {
            $fileName = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs('public/uploads',$fileName);
            $url = $fileName;
            $this->repository->create($request, $url);
        }
        return redirect()->back()->with('status',trans('Successful'));
    }

    public function search(Request $request){
        $books = $this->repository->search($request->keyword);
        return view('admin/book/index',compact('books'));
    }

    public function edit($id){
        $book = $this->repository->show($id);
        $authors = $this->authorRepository->all();
        $publishers = $this->publisherRepository->all();
        return view('admin/book/edit', compact('book','authors','publishers'));
    }

    public function update(Request $request, $id){
        $result = $this->repository->update($request->all(), $id);
        if($result){
            return redirect()->route('admin\book\index');
        }
        return redirect()->route('admin\book\index');
    }

    public function delete($id){
        $this->repository->delete($id);
        return redirect()->route('admin\book\index');
    }
}
