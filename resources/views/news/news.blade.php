@extends('welcome')
@section('content')
<div>
    <div class="breadcrumbs position-relative pl-4 pr-4 pt-4 pb-4 lazy_bg loaded">
        <div class="inner position-relative text-center">
            <h1 class="cat-heading d-none d-md-block">Tin tuc</h1>
            <ul class="breadcrumb align-items-center justify-content-center m-0">
                <!-- <li class="home">
                        <a href="/" title="Mew BS">Trang chủ</a>						
                        <img src="#" alt="Mew BS">
                    </li>
                    <li>
                        <a href="#">Sách kĩ năng sống</a>						
                        <img src="#" alt="Mew BS">
                    </li> -->
                <li class="font-weight-bold"><span>Tin tuc</span></li>
                <li>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="col-main pt-5 pb-4 border">
            <article class="row">
                <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-xl-3 border">
                    <div class="item_grid mb-4">
                        <div class="position-relative">
                            <a href="#" title="Review sách Bình tĩnh khi ế, mạnh mẽ khi yêu - All The Rules" class="effect-ming">
                                <div class="position-relative w-100 m-0 be_opa modal-open">
                                    <img src="{{asset('./../public/frontend/image/thiet-ke-khong-ten-1.png')}}" class="lazy loaded" alt="Review sách Bình tĩnh khi ế, mạnh mẽ khi yêu - All The Rules" width="300px;">
                                    <div class="position-absolute w-100 h-100 overlay"></div>
                                </div>
                            </a>

                            <div class="entry-date position-absolute text-center rounded-right">
                                <p class="day font-weight-bold">
                                    24
                                </p>
                                <p class="yeah">
                                    02/2021
                                </p>
                            </div>
                        </div>
                        <div class="cont">
                            <h6 class="font-weight-bold mt-2 line_1" href="#" title="Review sách Bình tĩnh khi ế, mạnh mẽ khi yêu - All The Rules">Review sách Bình
                                tĩnh khi ế, mạnh mẽ khi yêu - All The Rules</h6>
                            <div class="line_3 line_1 h-auto">
                                Sách “ Bình tĩnh khi ế mạnh mẽ khi yêu ” là bản dịch tiếng Việt từ tác phẩm All the rule
                                . Đây là một thể loại sách kỹ năng (hay còn gọi là Self-Help) do 2 tác giả người Mỹ viết
                                nên đó là Ellen Fein và Sherrie Schneider . Cuốn sách được xuất bản lần đầu tiên năm
                                1995 tại Mỹ và nhanh chóng trở thành tác phẩm được đông đảo phụ nữ Mỹ đón nhận. Không
                                chỉ vậy, trải qua 2 thập kỷ, cuốn sách đã trở thành bí quyết gối...
                            </div>
                        </div>
                    </div>
                </div>

                
            </article>
        </div>
    </div>
</div>
</div>

@endsection