@extends('welcome')
@section('content')
<div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{('./../public/frontend/image/slide-img1.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{('./../public/frontend/image/slide-img2.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{('./../public/frontend/image/slide-img1.png')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="row p-5 m-1">

    <div class="col-lg-9 col-md-9 col-sm-12 border">
        <div>
            <h2 class="border-bottom border-danger d-inline pe-5 ps-1 float-start">Văn học nổi tiếng</h2>
            <h6 class="d-inline pe-2 float-end mt-3 zoom">Kinh doanh bán hàng</h6>
            <h6 class="d-inline pe-2 float-end mt-3 zoom">Văn học Việt Nam</h6>
            <h6 class="d-inline pe-2 float-end mt-3 zoom">Kĩ năng hướng nghiệp</h6>
        </div>

        <div class="">
            <a href="#" title="Văn học nổi tiếng">
                <img width="100%" class="lazy" style="image-rendering: pixelated;" alt="Văn học nổi tiếng" src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/bn_pr_3.png?1634809483920">
            </a>
        </div>

        <div>
            <div>
                <div id="" class="carousel slide" data-bs-ride="">
                    <div class="">
                    </div>
                    <div class="mt-2  p-2">
                        <div class=" w-100">
                            <div class="mySlides" style="display: block;">
                                <div class="slide-container">
                                    @foreach($relate_product->slice(0, 4) as $key => $relates)
                                    <div class="border zoom p-3 d-inline-flex position-relative modal-open border">
                                        <div class="display_detail_image"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}"><img src="{{asset('./../public/frontend/image/'.$relates->Img)}}" class="img-fluid mb-2" width="223px" alt=""></a></div>
                                        <div class="item-info-home position-absolute text-center ">
                                            <h6 class="pt-1 modal-open d-block " style="display: -webkit-box;">{{$relates->BookName}}</h6>
                                            <button class="btn action font-weight-bold d-inline-block position-relative mt-1 mb-2"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}">Chi tiết</a></button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="mySlides">
                                <div class="slide-container">
                                    @foreach($relate_product->slice(4, 8) as $key => $relates)
                                    <div class="border zoom p-3 d-inline-flex position-relative modal-open border">
                                        <div class="display_detail_image"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}"><img src="{{asset('./../public/frontend/image/'.$relates->Img)}}" class="img-fluid mb-2" width="223px" alt=""></a></div>
                                        <div class="item-info-home position-absolute text-center ">
                                            <h6 class="pt-1 modal-open d-block " style="display: -webkit-box;">{{$relates->BookName}}</h6>
                                            <button class="btn action font-weight-bold d-inline-block position-relative mt-1 mb-2"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}">Chi tiết</a></button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="mySlides">
                                <div class="slide-container">
                                    @foreach($relate_product->slice(8, 12) as $key => $relates)
                                    <div class="border zoom p-3 d-inline-flex position-relative modal-open border">
                                        <div class="display_detail_image"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}"><img src="{{asset('./../public/frontend/image/'.$relates->Img)}}" class="img-fluid mb-2" width="223px" alt=""></a></div>
                                        <div class="item-info-home position-absolute text-center ">
                                            <h6 class="pt-1 modal-open d-block " style="display: -webkit-box;">{{$relates->BookName}}</h6>
                                            <button class="btn action font-weight-bold d-inline-block position-relative mt-1 mb-2"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}">Chi tiết</a></button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>
    <div id="slibar" class="col-lg-3 col-md-0 col-sm-0 border">
        <h3 class="border-bottom border-danger">CÙNG ĐÓN ĐỌC</h3>
        @foreach($relate_product->slice(0, 4) as $key => $relates)
        <div class="row border m-2 p-2 zoom">           
            <div class="col-lg-5"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}"><img src="{{asset('./../public/frontend/image/'.$relates->Img)}}" class="img-fluid mb-2" width="1250px" alt=""></a></div>
            <div class="col-lg-7">
                <b>{{$relates->BookName}}</b>
                <div>Tác giả: {{$relates->AuthorName}}</div>
                <div class="product-price-slibar">
                    <span class="special-price font-weight-bold">{{$relates->PriceSale}}₫</span>
                    <del class="old-price">{{$relates->PriceUnit}}₫</del>
                </div>
                <h6><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}">Chi tiết</a></h6>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="row p-5 m-1">

    <div class="col-lg-9 col-md-9 col-sm-12 border">
        <div>
            <h2 class="border-bottom border-danger d-inline pe-5 ps-1 float-start">Văn học nổi tiếng</h2>
            <h6 class="d-inline pe-2 float-end mt-3 zoom">Kinh doanh bán hàng</h6>
            <h6 class="d-inline pe-2 float-end mt-3 zoom">Văn học Việt Nam</h6>
            <h6 class="d-inline pe-2 float-end mt-3 zoom">Kĩ năng hướng nghiệp</h6>
        </div>

        <div class="">
            <a href="#" title="Văn học nổi tiếng">
                <img width="100%" class="lazy" style="image-rendering: pixelated;" alt="Văn học nổi tiếng" src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/bn_pr_3.png?1634809483920">
            </a>
        </div>

        <div>
            <div>
                <div id="" class="carousel slide" data-bs-ride="">
                    <div class="">
                    </div>
                    <div class="mt-2  p-2">
                        <div class=" w-100">
                            <div class="mySlides" style="display: block;">
                                <div class="slide-container">
                                    @foreach($relate_product->slice(0, 4) as $key => $relates)
                                    <div class="border zoom p-3 d-inline-flex position-relative modal-open border">
                                        <div class="display_detail_image"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}"><img src="{{asset('./../public/frontend/image/'.$relates->Img)}}" class="img-fluid mb-2" width="223px" alt=""></a></div>
                                        <div class="item-info-home position-absolute text-center ">
                                            <h6 class="pt-1 modal-open d-block " style="display: -webkit-box;">{{$relates->BookName}}</h6>
                                            <button class="btn action font-weight-bold d-inline-block position-relative mt-1 mb-2"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}">Chi tiết</a></button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="mySlides">
                                <div class="slide-container">
                                    @foreach($relate_product->slice(4, 8) as $key => $relates)
                                    <div class="border zoom p-3 d-inline-flex position-relative modal-open border">
                                        <div class="display_detail_image"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}"><img src="{{asset('./../public/frontend/image/'.$relates->Img)}}" class="img-fluid mb-2" width="223px" alt=""></a></div>
                                        <div class="item-info-home position-absolute text-center ">
                                            <h6 class="pt-1 modal-open d-block " style="display: -webkit-box;">{{$relates->BookName}}</h6>
                                            <button class="btn action font-weight-bold d-inline-block position-relative mt-1 mb-2"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}">Chi tiết</a></button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="mySlides">
                                <div class="slide-container">
                                    @foreach($relate_product->slice(8, 12) as $key => $relates)
                                    <div class="border zoom p-3 d-inline-flex position-relative modal-open border">
                                        <div class="display_detail_image"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}"><img src="{{asset('./../public/frontend/image/'.$relates->Img)}}" class="img-fluid mb-2" width="223px" alt=""></a></div>
                                        <div class="item-info-home position-absolute text-center ">
                                            <h6 class="pt-1 modal-open d-block " style="display: -webkit-box;">{{$relates->BookName}}</h6>
                                            <button class="btn action font-weight-bold d-inline-block position-relative mt-1 mb-2"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}">Chi tiết</a></button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="slibar" class="col-lg-3 col-md-0 col-sm-0 border">
        <h3 class="border-bottom border-danger">CÙNG ĐÓN ĐỌC</h3>
        @foreach($relate_product->slice(0, 4) as $key => $relates)
        <div class="row border m-2 p-2 zoom">           
            <div class="col-lg-5"><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}"><img src="{{asset('./../public/frontend/image/'.$relates->Img)}}" class="img-fluid mb-2" width="1250px" alt=""></a></div>
            <div class="col-lg-7">
                <b>{{$relates->BookName}}</b>
                <div>Tác giả: {{$relates->AuthorName}}</div>
                <div class="product-price-slibar">
                    <span class="special-price font-weight-bold">{{$relates->PriceSale}}₫</span>
                    <del class="old-price">{{$relates->PriceUnit}}₫</del>
                </div>
                <h6><a href="{{URL::to('/chi-tiet-san-pham/'.$relates->BookID)}}">Chi tiết</a></h6>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- <div class="pb-lg-5 pt-lg-5 pt-3 pb-3">
        <div class="container border border-dark float-left">
            <div class="col-12 col-xl-9 d-inline check border-bottom border-dark">
                <h2 class="d-inline">Văn học nổi tiếng</h2>
                <p class="d-inline ms-3">
                    <a href="#">Kinh doanh bán hàng</a>
                </p>
                <p class="d-inline ms-3">
                    <a href="#">Văn học Việt Nam</a>
                </p>
                <p class="d-inline ms-3">
                    <a href="#">Kĩ năng hướng nghiệp</a>
                </p>
                <div class="bn_product mt-4 mb-5">
                    <a href="#" title="Văn học nổi tiếng">
                        <img class="lazy" style="image-rendering: pixelated;" alt="Văn học nổi tiếng" src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/bn_pr_3.png?1634809483920">
                    </a>
                </div>   
                <a href="#" class="" title="Virgo">
                    <div class="d-inline m-2">
                        <img width="230px" src="//bizweb.dktcdn.net/thumb/1024x1024/100/415/471/products/cover-virgo.jpg?v=1612348064000">
                    </div>
                    <div class="d-inline m-2">
                        <img width="230px" src="//bizweb.dktcdn.net/thumb/1024x1024/100/415/471/products/cover-virgo.jpg?v=1612348064000">
                    </div>
                    <div class="d-inline m-2">
                        <img width="230px" src="//bizweb.dktcdn.net/thumb/1024x1024/100/415/471/products/cover-virgo.jpg?v=1612348064000">
                    </div>
                    <div class="d-inline m-2">
                        <img width="230px" src="//bizweb.dktcdn.net/thumb/1024x1024/100/415/471/products/cover-virgo.jpg?v=1612348064000">
                    </div>
                </a>
            </div>
            
            <div class="float-right">Cùng đón đọc</div>
            
        </div>

        
    </div> -->

<div class="about w-auto m-5" style="background-image: url('./../public/frontend/image/about_bg.png');">
    <div class="position-relative h-100 w-auto b_tx w-100">
        <div class="row d-flex justify-content-end align-items-center">
            <div class="col-lg-6 col-12 d-flex justify-content-center flex-column h-100 bg">
                <div class="title_s text-uppercase font-weight-bold">
                    Đăng ký đại lý
                </div>
                <div class="content">
                    Bạn có khả năng kinh doanh và đang tìm kiếm sản phẩm.<br>
                    Trở thành đại lý của Mew BS
                    để được hưởng trọn các quyền lợi sau:<br><br>
                    - Chiết khấu vô cùng hấp dẫn<br>
                    - Chính sách hoàn hàng linh hoạt<br>
                    - Luôn luôn miễn phí vận chuyển<br>
                    - Hỗ trợ truyền thông để bán hàng tốt hơn<br>
                    - Hỗ trợ thủ tục bán trên sàn TMĐT<br>
                    - Có nhân viên hỗ trợ riêng
                </div>
                <div class="open_form">
                    <a id="open_form" href="javascript:;" title="Đăng ký ngay" class="pt-3 pb-3 pl-5 pr-5 sitdown text-uppercase modal-open position-relative btn_send d-inline-block font-weight-bold">
                        <span class="m_op">Đăng ký ngay</span>
                        <!-- <span class="m_cl position-absolute h-100 w-100 d-flex justify-content-center align-items-center">Đóng</span> -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="m_blog pb-lg-5 pt-lg-5 pt-3 pb-3">
    <div class="container">
        <h2 class="mb-5 text-uppercase font-weight-bold text-center position-relative" href="#" title="Tin tức - Sự kiện">
            Tin tức - Sự kiện
        </h2>
        <article class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="item_grid mb-4">
                    <div class="position-relative">
                        <a href="#" title="Review sách Xa ngoài kia nơi loài tôm hát của Delia Owens" class="effect-ming">
                            <div class="position-relative w-100 m-0 be_opa modal-open">
                                <img src="{{asset('./../public/frontend/image/thiet-ke-khong-ten-4.png')}}" class="lazy loaded" alt="Review sách Xa ngoài kia nơi loài tôm hát của Delia Owens" width="300px;">
                                <div class="position-absolute w-100 h-100 overlay"></div>
                            </div>
                        </a>

                        <div class="entry-date position-absolute text-center rounded-right">
                            <p class="day font-weight-bold m-0">
                                24
                            </p>
                            <p class="yeah">
                                02/2021
                            </p>
                        </div>
                    </div>
                    <div class="cont">
                        <h6 class="font-weight-bold mt-2" href="#" title="Review sách Xa ngoài kia nơi loài tôm hát của Delia Owens">Review sách Xa ngoài
                            kia nơi loài tôm hát của Delia Owens</h6>
                        <div class="line_3 line_1 h-auto">
                            Cuốn sách Xa ngoài kia nơi loài tôm hát (Tên gốc: Where the Crawdads Sing) tiểu thuyết
                            đầu tay của nhà văn Delia Owens được xuất bản lần đầu năm 2018, nhưng đã nhanh chóng
                            chiếm được sự yêu mến của đông đảo độc giả. Cuốn sách liên tục đứng trong danh sách bán
                            chạy của New York Times suốt 58 tuần với 6 triệu bản được bán ra trên toàn thế giới và
                            dẫn đầu mục tiểu thuyết bán chạy của Amazon trong năm 2019.
                            Delia Owens sinh năm 1949, là tác giả, nhà động...
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="item_grid mb-4">
                    <div class="position-relative">
                        <a href="#" title="Review sách Xa ngoài kia nơi loài tôm hát của Delia Owens" class="effect-ming">
                            <div class="position-relative w-100 m-0 be_opa modal-open">
                                <img src="{{asset('./../public/frontend/image/thiet-ke-khong-ten-3.png')}}" class="lazy loaded" alt="Review sách Xa ngoài kia nơi loài tôm hát của Delia Owens" width="300px;">
                                <div class="position-absolute w-100 h-100 overlay"></div>
                            </div>
                        </a>

                        <div class="entry-date position-absolute text-center rounded-right">
                            <p class="day font-weight-bold">
                                29
                            </p>
                            <p class="yeah">
                                02/2021
                            </p>
                        </div>
                    </div>
                    <div class="cont">
                        <h6 class="mt-2" href="#" title="Review sách Vô cùng tàn nhẫn vô cùng yêu thương">Review
                            sách Vô cùng tàn nhẫn vô cùng yêu thương</h6>
                        <div class="line_3 line_1 h-auto">
                            Ý nghĩa của quyển sách Vô cùng tàn nhẫn vô cùng yêu thương
                            Hành trình nuôi dạy trẻ nhỏ là một trong những trải nghiệm mà có thể không một cha mẹ
                            nào quên. Khi con trong giai đoạn vừa chào đời phải quan sát theo từng hành động, từng
                            cử chỉ nhỏ nhặt nhất của con. Lớn hơn một xíu, bố mẹ phải đối mặt với hàng ngàn câu hỏi
                            vì sao và cùng con khám phá chân trời mới. Bắt đầu vào giai đoạn đi học đến trường, đó
                            sẽ là những trải nghiệm...
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="item_grid mb-4">
                    <div class="position-relative">
                        <a href="#" title="Review sách Luật hấp dẫn bí mật tối cao" class="effect-ming">
                            <div class="position-relative w-100 m-0 be_opa modal-open">
                                <img src="{{asset('./../public/frontend/image/thiet-ke-khong-ten-2.png')}}" class="lazy loaded" alt="Review sách Luật hấp dẫn bí mật tối cao" width="300px;">
                                <div class="position-absolute w-100 h-100 overlay"></div>
                            </div>
                        </a>

                        <div class="entry-date position-absolute text-center rounded-right">
                            <p class="day font-weight-bold">
                                05
                            </p>
                            <p class="yeah">
                                04/2021
                            </p>
                        </div>
                    </div>
                    <div class="cont">
                        <h6 class="font-weight-bold mt-2" href="#" title="Review sách Xa ngoài kia nơi loài tôm hát của Delia Owens">Review sách Luật hấp
                            dẫn bí mật tối cao</h6>
                        <div class="line_3 line_1 h-auto">
                            Đôi nét về tác giả quyển sách Luật hấp dẫn – Bí mật tối cao
                            Tác giả của quyển sách Luật hấp dẫn – Bí mật tối cao chính là Som Sujeera – một trong
                            những người ấp ủ niềm đam mê khám phá những bí ẩn có trong vũ trụ. Đặc biệt hơn khi được
                            lớn lên trong môi trường thiên về Phật giáo, ông lại càng có thêm nhiều phát hiện đặc
                            sắc liên quan giữa con người đối với những bí ẩn trong cuộc sống. Sách...
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
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
<link rel="stylesheet" href="{{asset('./../public/frontend/css/style.css')}}">
@endsection