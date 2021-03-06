<div class="inner-column row">
    <div id="center_column" class="col-lg-12 col-xs-12 col-sm-12">
        <div id="adv-home">
            <div class="row">
                @foreach(horizontal_banner() as $main_banner)
                <div class="col-xs-12">
                    <div class="adv-third">
                        <a href="{{$main_banner->url}}">
                            <img src="{{url(banner_image_url($main_banner->gambar))}}" alt="Info Promo" />
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div id="home-featured">
            <div class="product-list">
                <ul class="grid row">
                {{-- */ $i=0;$j=0; /* --}}
                @foreach(home_product() as $home)
                    @if($i==0)
                        <li class="col-xs-12 col-sm-12 col-md-12 col-lg-6 big-fl">
                            <div class="prod-container">
                                <div class="image-container">
                                    <a href="{{product_url($home)}}">
                                        <img class="img-responsive" src="{{url(product_image_url($home->gambar1,'large'))}}" id="home-product" alt="{{$home->nama}}" />
                                    </a>
                                    @if(is_outstok($home))
                                    <div class="icon-info icon-sold">Sold</div>
                                    @elseif(is_terlaris($home))
                                    <div class="icon-info icon-new">Best</div>
                                    @elseif(is_produkbaru($home))
                                    <div class="icon-info icon-sale">New</div>
                                    @endif
                                </div>
                                <div class="p-desc">
                                    <div class="p-info">
                                        <h5 class="product-name">{{short_description($home->nama,60)}}</h5>
                                        <span class="price">{{price($home->hargaJual)}}</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @else
                        <li class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="prod-container">
                                <div class="image-container">
                                    <a href="{{product_url($home)}}">
                                        <img class="img-responsive" src="{{url(product_image_url($home->gambar1,'medium'))}}" alt="{{$home->nama}}" />
                                    </a>
                                    @if(is_outstok($home))
                                    <div class="icon-info icon-sold">Sold</div>
                                    @elseif(is_terlaris($home))
                                    <div class="icon-info icon-new">Best</div>
                                    @elseif(is_produkbaru($home))
                                    <div class="icon-info icon-sale">New</div>
                                    @endif
                                </div>
                                <div class="p-desc">
                                    <h5 class="product-name">{{short_description($home->nama,15)}}</h5>
                                    <span class="price">{{price($home->hargaJual)}}</span>
                                </div>
                            </div>
                        </li>
                        @if($i % 4 == 0)
                        <div class="clr"></div>
                        @endif
                    @endif
                    {{-- */ $i++; /* --}}
                @endforeach
                </ul>
                <div class="clr"></div>
            </div>
        </div>
        <div id="adv-home">
            <div class="row">
                {{-- */ $i=vertical_banner()->count(); /* --}}
                @foreach(vertical_banner() as $side_banner)
                <div class="col-xs-12 col-sm-4">
                    <div class="{{$i>1?'adv-third':''}}">
                        <a href="{{$side_banner->url}}">
                            <img src="{{url(banner_image_url($side_banner->gambar))}}" alt="Info Promo" />
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>