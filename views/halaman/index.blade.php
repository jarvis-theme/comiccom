<div class="container">
	<div class="inner-column row">
        <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
            @if(recentBlog(null, 2)->count() > 0)
            <div id="latest-news" class="block">
                <div class="title"><h2>Artikel Terbaru</h2></div>
                <ul class="block-content">
                    @foreach(recentBlog(null, 2) as $blogs)
                    <li>
                        <h5 class="title-news">{{$blogs->judul}}</h5>
                        <p>{{short_description($blogs->isi, 150)}}<a class="read-more" href="{{blog_url($blogs)}}">Selengkapnya</a></p>
                        <span class="date-post">{{date("F d, Y", strtotime($blogs->created_at))}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(best_seller()->count() > 0)
            <div id="best-seller" class="block">
                <div class="title"><h2>Produk Terlaris</h2></div>
                <ul class="block-content">
                    @foreach(best_seller() as $bestproduk )
                    <li>
                        <a href="{{product_url($bestproduk)}}">
                            <div class="img-block">
                                {{HTML::image(product_image_url($bestproduk->gambar1,'thumb'), $bestproduk->nama, array('class'=>'img-responsive','id'=>'img-best'))}}
                            </div>
                            <p class="product-name">{{short_description($bestproduk->nama,15)}}</p>
                            @if(!empty($bestproduk->hargaCoret))
                            <p class="author"><del>{{price($bestproduk->hargaCoret)}}</del></p>
                            @endif
                            <p class="price">{{price($bestproduk->hargaJual)}}</p> 
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="btn-more"><a href="{{url('produk')}}">Lihat Semua</a></div>
            </div>
            @endif
            @foreach(vertical_banner() as $banners)
        	<div id="adv-sidebar">
        		<a href="{{url($banners->url)}}">
                    {{HTML::image(banner_image_url($banners->gambar),'Info Promo',array('class'=>'img-responsive'))}}
                </a>
            </div>
            @endforeach
        </div>
        <div class="col-lg-9 col-xs-12 col-sm-8">
            <h1 class="bold">{{$data->judul}}</h1>
        	<div class="row">
                <article class="col-lg-12 col-md-12 col-xs-12">
                    <h3>{{$data->up}}</h3>
                    {{$data->isi}}
                </article>
            </div>
        </div>
    </div>
</div>