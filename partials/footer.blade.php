<footer>
    <div class="top-footer">
        <div class="container">
            <div class="row">
                @foreach(all_menu() as $key=>$menu)
                <div id="links-foot" class="col-xs-12 col-sm-3">
                    <h4 class="title">{{$menu->nama}}</h3>
                    <div class="block-content">
                        <ul>
                        @foreach($menu->link as $link_menu)
                            @if($menu->id == $link_menu->tautanId)
                            <li>
                                <a href="{{menu_url($link_menu)}}">{{$link_menu->nama}}</a>
                            </li>
                            @endif
                        @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach

                <div id="testi-info" class="col-xs-12 col-sm-3">
                    <div class="block-content blocks">
                    @if(count(random_testimonial(1)) > 0)
                        @foreach(random_testimonial(1) as $testimonial)
                        <div class="item">
                            <div class="test-item">
                                <p>{{short_description($testimonial->isi,150)}}</p>
                                <i>&nbsp;</i>
                            </div>
                            <div class="ava"><i class="fa fa-user fa-3x"></i> <span>{{$testimonial->nama}}</span></div>
                        </div>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="center-footer">
        <div class="container">
            <div class="row">
                {{ Theme::partial('subscribe') }}
                
                <div id="social" class="col-sm-6">
                    <!-- <h2 class="title">Social Media</h2> -->
                    <ul>
                        @if(!empty($kontak->fb))
                        <li>
                            <a href="{{url($kontak->fb)}}" title="Facebook"><span class="fa-stack fa"><i class="fa fa-circle fa-stack-2x" id="fb"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a>
                        </li>
                        @endif
                        @if(!empty($kontak->tw))
                        <li>
                            <a href="{{url($kontak->tw)}}" title="Twitter"><span class="fa-stack fa"><i class="fa fa-circle fa-stack-2x" id="tw"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a>
                        </li>
                        @endif
                        @if(!empty($kontak->gp))
                        <li>
                            <a href="{{url($kontak->gp)}}" title="Google+"><span class="fa-stack fa"><i class="fa fa-circle fa-stack-2x" id="gp"></i><i class="fa fa-google-plus fa-stack-1x fa-inverse"></i></span></a>
                        </li>
                        @endif
                        @if(!empty($kontak->pt))
                        <li>
                            <a href="{{url($kontak->pt)}}" title="Pinterest"><span class="fa-stack fa"><i class="fa fa-pinterest fa-2x" id="pt"></i></span></a>
                        </li>
                        @endif
                        @if(!empty($kontak->tl))
                        <li>
                            <a href="{{url($kontak->tl)}}" title="Tumblr"><span class="fa-stack fa"><i class="fa fa-circle fa-stack-2x" id="tl"></i><i class="fa fa-tumblr fa-stack-1x fa-inverse"></i></span></a>
                        </li>
                        @endif
                        @if(!empty($kontak->ig))
                        <li>
                            <a href="{{url($kontak->ig)}}" title="Instagram"><span class="fa-stack fa"><i class="fa fa-circle fa-stack-2x" id="ig-circle"></i><i class="fa fa-instagram fa-stack-1x fa-inverse" id="ig"></i></span></a>
                        </li>
                        @endif
                        @if(!empty($kontak->picmix))
                        <li>
                            <a href="{{url($kontak->picmix)}}" title="Picmix" target="_blank">
                                <img class="picmix" src="//d3kamn3rg2loz7.cloudfront.net/blogs/event/icon-picmix.png">
                            </a>
                        </li>
                        @endif
                    </ul>
                    <div class="clr"></div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
    <div id="bottom-footer">
        <div class="container">
            <div class="row">
                <div id="link_footer" class="col-xs-12 col-sm-6">
                    @foreach(all_menu() as $key=>$menu_bottom)
                    @if($key == '2')
                    <ul>
                        @foreach($menu_bottom->link as $link)
                        @if($menu_bottom->id == $link->tautanId)
                        <li><a href="{{menu_url($link)}}" title="{{$link->nama}}">{{$link->nama}}</a></li>
                        @endif
                        @endforeach
                    </ul>  
                    @endif
                    @endforeach
                    <div class="clr"></div> 
                </div>
                <div id="payment_footer" class="col-xs-12 col-sm-6">
                    <span>Payment :</span>
                    @foreach(list_banks() as $value)
                        @if($value->status == 1)
                        <img src="{{bank_logo($value)}}" alt="{{$value->bankdefault->nama}}" title="{{$value->bankdefault->nama}}">
                        @endif
                    @endforeach
                    @foreach(list_payments() as $pay)
                        @if($pay->nama == 'paypal' && $pay->aktif == 1)
                        <img src="{{url('img/bank/paypal.png')}}" alt="Paypal" title="Paypal">
                        @endif
                        @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                        <img src="{{url('img/bank/ipaymu.jpg')}}" alt="Ipaymu" title="Ipaymu">
                        @endif
                        @if($pay->nama == 'bitcoin' && $pay->aktif == 1)
                        <img src="{{url('img/bitcoin.png')}}" alt="Bitcoin" title="Bitcoin" />
                        @endif
                    @endforeach
                    @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                    <img src="{{url('img/bank/doku.jpg')}}" alt="Doku" title="Doku">
                    @endif
                    @if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)
                    <img src="{{url('img/bank/midtrans.png')}}" class="midtrans" alt="Midtrans" title="Midtrans">
                    @endif
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>&copy; {{Theme::place('title')}} {{date('Y')}} All Right Reserved. Powered by <a href="http://jarvis-store.com" target="_blank">Jarvis Store</a></p>
        </div>
    </div>
</footer>
{{pluginPowerup()}} 