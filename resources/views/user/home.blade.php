@extends('user.layout.user')
@section('title', 'Home')

@section('content')
<div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="books-media-gird">
                        <div class="container">
                            <div class="row">
                                <!-- Start: Search Section -->
                                <section class="search-filters">
                                    <div class="container">
                                        <div class="filter-box">
                                            <h3>{{ __('Welcome') }}</h3>
                                            <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="keywords">{{ __('Search by Keyword') }}</label>
                                                        <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <select name="catalog" id="catalog" class="form-control">
                                                            <option>{{ __('Search by Publisher') }}</option>
                                                            <option>Catalog 01</option>
                                                            <option>Catalog 02</option>
                                                            <option>Catalog 03</option>
                                                            <option>Catalog 04</option>
                                                            <option>Catalog 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <select name="category" id="category" class="form-control">
                                                            <option>{{ __('All Categories') }}</option>
                                                            <option>Category 01</option>
                                                            <option>Category 02</option>
                                                            <option>Category 03</option>
                                                            <option>Category 04</option>
                                                            <option>Category 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control" type="submit" value="{{ __('Search') }}">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                                <!-- End: Search Section -->
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-md-push-3">
                                    <div class="filter-options margin-list">

                                    </div>
                                    <div class="books-gird">
                                        <ul class ="row">
                                            <li class="col-md-4 col-sm-12">
                                                <figure>
                                                    <img src="{{ asset('img/books-media/gird-view/book-media-grid-01.jpg')}}" alt="Book">
                                                    <figcaption>
                                                        <p><strong>The Great Gatsby</strong></p>
                                                        <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                    </figcaption>
                                                </figure> 
                                                <div class="book-list-icon blue-icon"></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                <li><strong>ISBN:</strong> 9781581573268</li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="books-media-detail-v1.html">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                       
                                            </li>
                                            <li class="col-md-4 col-sm-12">
                                                <figure>                                                    
                                                    <img src="{{ asset('img/books-media/gird-view/book-media-grid-02.jpg')}}" alt="Book">
                                                    <figcaption>
                                                        <p><strong>The Great Gatsby</strong></p>
                                                        <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                    </figcaption>
                                                </figure>
                                                <div class="book-list-icon blue-icon"></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                <li><strong>ISBN:</strong> 9781581573268</li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="books-media-detail-v1.html">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                                                                                
                                            </li>
                                            <li class="col-md-4 col-sm-12">
                                                <figure>
                                                    <img src="{{ asset('img/books-media/gird-view/book-media-grid-03.jpg')}}" alt="Book">
                                                    <figcaption>
                                                        <p><strong>The Great Gatsby</strong></p>
                                                        <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                    </figcaption>
                                                </figure>
                                                <div class="book-list-icon red-icon"></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                <li><strong>ISBN:</strong> 9781581573268</li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="books-media-detail-v1.html">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                                                                                
                                            </li>
                                            <li class="col-md-4 col-sm-12">
                                                <figure>
                                                    <img src="{{ asset('img/books-media/gird-view/book-media-grid-04.jpg')}}" alt="Book">
                                                    <figcaption>
                                                        <p><strong>The Great Gatsby</strong></p>
                                                        <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                    </figcaption>
                                                </figure>
                                                <div class="book-list-icon yellow-icon"></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                <li><strong>ISBN:</strong> 9781581573268</li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="books-media-detail-v1.html">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                                                                                
                                            </li>
                                            <li class="col-md-4 col-sm-12">
                                                <figure>
                                                    <img src="{{ asset('img/books-media/gird-view/book-media-grid-05.jpg')}}" alt="Book">
                                                    <figcaption>
                                                        <p><strong>The Great Gatsby</strong></p>
                                                        <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                    </figcaption>
                                                </figure>
                                                <div class="book-list-icon red-icon"></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                <li><strong>ISBN:</strong> 9781581573268</li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="books-media-detail-v1.html">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                                                                                
                                            </li>
                                            <li class="col-md-4 col-sm-12">
                                                <figure>
                                                    <img src="{{ asset('img/books-media/gird-view/book-media-grid-06.jpg')}}" alt="Book">
                                                    <figcaption>
                                                        <p><strong>The Great Gatsby</strong></p>
                                                        <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                    </figcaption>
                                                </figure>
                                                <div class="book-list-icon green-icon"></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                <li><strong>ISBN:</strong> 9781581573268</li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="books-media-detail-v1.html">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                                                                                
                                            </li>
                                            <li class="col-md-4 col-sm-12">
                                                <figure>
                                                    <img src="{{ asset('img/books-media/gird-view/book-media-grid-07.jpg')}}" alt="Book">
                                                    <figcaption>
                                                        <p><strong>The Great Gatsby</strong></p>
                                                        <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                    </figcaption>
                                                </figure>
                                                <div class="book-list-icon light-green-icon"></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                <li><strong>ISBN:</strong> 9781581573268</li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="books-media-detail-v1.html">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                                                                                
                                            </li>
                                            <li class="col-md-4 col-sm-12">
                                                <figure>
                                                    <img src="{{ asset('img/books-media/gird-view/book-media-grid-08.jpg')}}" alt="Book">
                                                    <figcaption>
                                                        <p><strong>The Great Gatsby</strong></p>
                                                        <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                    </figcaption>
                                                </figure>
                                                <div class="book-list-icon green-icon"></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                <li><strong>ISBN:</strong> 9781581573268</li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="books-media-detail-v1.html">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                                                                                
                                            </li>
                                            <li class="col-md-4 col-sm-12">
                                                <figure>
                                                    <img src="{{ asset('img/books-media/gird-view/book-media-grid-09.jpg')}}" alt="Book">
                                                    <figcaption>
                                                        <p><strong>The Great Gatsby</strong></p>
                                                        <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                    </figcaption>
                                                </figure>
                                                <div class="book-list-icon yellow-icon"></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                <li><strong>ISBN:</strong> 9781581573268</li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="books-media-detail-v1.html">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                                                                                
                                            </li>
                                            <li class="col-md-4 col-sm-12">
                                                <figure>
                                                    <img src="{{ asset('img/books-media/gird-view/book-media-grid-10.jpg')}}" alt="Book">
                                                    <figcaption>
                                                        <p><strong>The Great Gatsby</strong></p>
                                                        <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                    </figcaption>
                                                </figure>
                                                <div class="book-list-icon light-green-icon"></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                <li><strong>ISBN:</strong> 9781581573268</li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="books-media-detail-v1.html">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                                                                                
                                            </li>
                                            <li class="col-md-4 col-sm-12">
                                                <figure>
                                                    <img src="{{ asset('img/books-media/gird-view/book-media-grid-11.jpg')}}" alt="Book">
                                                    <figcaption>
                                                        <p><strong>The Great Gatsby</strong></p>
                                                        <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                    </figcaption>
                                                </figure>
                                                <div class="book-list-icon yellow-icon"></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                <li><strong>ISBN:</strong> 9781581573268</li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="books-media-detail-v1.html">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                                                                                
                                            </li>
                                            <li class="col-md-4 col-sm-12">
                                                <figure>
                                                    <img src="{{ asset('img/books-media/gird-view/book-media-grid-12.jpg')}}" alt="Book">
                                                    <figcaption>
                                                        <p><strong>The Great Gatsby</strong></p>
                                                        <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                    </figcaption>
                                                </figure>
                                                <div class="book-list-icon red-icon"></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                                                <li><strong>ISBN:</strong> 9781581573268</li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="books-media-detail-v1.html">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                                                                                
                                            </li>
                                        </ul>
                                    </div>
                                    <nav class="navigation pagination text-center">
                                        <h2 class="screen-reader-text">Posts navigation</h2>
                                        <div class="nav-links">
                                            <a class="prev page-numbers" href="#."><i class="fa fa-long-arrow-left"></i> Previous</a>
                                            <a class="page-numbers" href="#.">1</a>
                                            <span class="page-numbers current">2</span>
                                            <a class="page-numbers" href="#.">3</a>
                                            <a class="page-numbers" href="#.">4</a>
                                            <a class="next page-numbers" href="#.">Next <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </nav>
                                </div>
                                <div class="col-md-3 col-md-pull-9">
                                    <aside id="secondary" class="sidebar widget-area" data-accordion-group>
                                        <div class="widget widget_related_search open" data-accordion>
                                            <h4 class="widget-title" data-control>{{ __('RelatedSearch') }}</h4>
                                            <div data-content>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Subject</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li><a href="#">Love stories <span>(18)</span></a></li>
                                                            <li><a href="#">Texas <span>(04)</span></a></li>
                                                            <li><a href="#">Rich people <span>(03)</span></a></li>
                                                            <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                            <li><a href="#">Widows <span>(02)</span></a></li>
                                                            <li><a href="#">Women <span>(11)</span></a></li>
                                                            <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                            <li><a href="#">Law firms <span>(09)</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>{{ __('Author') }}</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li><a href="#">Love stories <span>(18)</span></a></li>
                                                            <li><a href="#">Texas <span>(04)</span></a></li>
                                                            <li><a href="#">Rich people <span>(03)</span></a></li>
                                                            <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                            <li><a href="#">Widows <span>(02)</span></a></li>
                                                            <li><a href="#">Women <span>(11)</span></a></li>
                                                            <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                            <li><a href="#">Law firms <span>(09)</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                        
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>                                        
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
@endsection