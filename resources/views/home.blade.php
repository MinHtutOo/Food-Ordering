@extends('layout.master')

@section('title', 'Home')

@section('content')

  <!-- banner-area -->
  <section class="banner-area padding-top-100 padding-bottom-150">
    <div class="banner-shapes">
      <span class="b-shape-1 item-animateOne"><img src="{!!asset('/images/img/5.png')!!}" alt="" /></span>
      <span class="b-shape-2 item-animateTwo"><img src="{!!asset('/images/img/6.png')!!}" alt="" /></span>
      <span class="b-shape-3 item-bounce"><img src="{!!asset('/images/img/7.png')!!}" alt="" /></span>
      <span class="b-shape-4"><img src="{!!asset('/images/img/9.png')!!}" alt="" /></span>
      <span class="b-shape-5"><img src="{!!asset('/images/shapes/18.png')!!}" alt="" /></span>
    </div>
    <div class="container padding-top-145">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-12 col-lg-6 col-xl-6">
          <div class="banner-content">
            <h1>enjoy our delicious <span>food</span></h1>

            <!-- order-box -->
            <div class="order-box">
              <span class="order-img"><img src="{!!asset('/images/icons/1.png')!!}" alt="" /></span>
              <div class="order-content">
                <p>delivery order num.</p>
                <span>123-59794069</span>
              </div>
              <a href="#" class="btn">try it now</a>
            </div>
          </div>
        </div>
        <div class="d-none d-lg-block col-lg-6 col-xl-6">
          <div class="banner-img">
            <div class="pizza-shapes">
              <span class="p-shape-1"><img src="{!!asset('/images/img/2.png')!!}" alt="" /></span>
              <span class="p-shape-2"><img src="{!!asset('/images/img/3.png')!!}" alt="" /></span>
              <span class="p-shape-3"><img src="{!!asset('/images/img/4.png')!!}" alt="" /></span>
              <span class="p-shape-4"><img src="{!!asset('/images/img/8.png')!!}" alt="" /></span>
            </div>
            <img src="{!!asset('/images/img/1.png')!!}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- about us -->
  <section class="about-area padding-top-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-12 wow fadeInLeft">
          <div class="about-left">
            <div class="about-l-shapes">
              <span class="als-1"><img src="{!!asset('/images/shapes/2.png')!!}" alt="" /></span>
            </div>
            <div class="row">
              <div class="
                    col-lg-4 col-md-4 col-sm-4 col-4
                    d-flex
                    align-items-end
                    justify-content-end
                    margin-bottom-20
                  ">
                <div class="about-gallery-1">
                  <img src="{!!asset('/images/gallery/1.jpg')!!}" alt="" />
                </div>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-8 col-8 margin-bottom-20">
                <div class="about-gallery-2">
                  <img src="{!!asset('/images/gallery/2.jpg')!!}" alt="" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="about-gallery-3">
                  <img src="{!!asset('/images/gallery/3.jpg')!!}" alt="" />
                </div>
              </div>
              <div class="
                    col-lg-5 col-md-5 col-sm-5 col-5
                    d-flex
                    align-items-start
                  ">
                <div class="about-gallery-4 text-center">
                  <img class="mp" src="{!!asset('/images/icons/3.png')!!}" alt="" />
                  <div class="items counter">{{$count}}</div>
                  <p>food item</p>
                  <span class="g-s-4"><img src="{!!asset('/images/shapes/10.png')!!}" alt="" /></span>
                  <span class="g-s-5"><img src="{!!asset('/images/shapes/14.png')!!}" alt="" /></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 offset-lg-1 wow fadeInRight">
          <div class="about-right">
            <div class="about-r-shapes">
              <span class="as-1 item-bounce"><img src="{!!asset('/images/shapes/1.png')!!}" alt="" /></span>
            </div>
            <h2>
              Fresh taste at a great price, only for
              <span>hungry people.</span>
            </h2>
            <p>
              Food is a restaurant, bar and coffee roastery located on a busy
              corner site in Farringdon's Exmouth Market. With glazed.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- popular-dishes -->
  <section class="popular-dishes-area padding-top-110">
    <div class="pshapes">
      <span class="ps-1 item-animateTwo"><img src="assets/images/shapes/11.png" alt="" /></span>
      <span class="ps-2 item-animateTwo"><img src="assets/images/shapes/12.png" alt="" /></span>
      <span class="ps-3 item-bounce"><img src="assets/images/shapes/13.png" alt="" /></span>
      <span class="ps-4 item-bounce"><img src="assets/images/shapes/14.png" alt="" /></span>
      <span class="ps-5"><img src="assets/images/shapes/15.png" alt="" /></span>
      <span class="ps-6"><img src="assets/images/shapes/16.png" alt="" /></span>
    </div>
    
    <div class="container">
        <nav class="popular-tab-nav d-flex flex-wrap justify-content-between align-items-center">
            <div class="common-title-area padding-bottom-30 wow fadeInLeft">
                <h3>food items</h3>
                <h2>all <span>dishes</span></h2>
            </div>
        </nav>
    
        <div class="popular-tab-nav">
            <ul class="nav padding-bottom-30" id="popularDishesTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <div class="nav-link menu-text active" id="all-items-tab" data-bs-toggle="tab"
                        data-bs-target="#all-items-tab-pane" role="tab" aria-controls="all-items-tab-pane"
                        aria-selected="true">
                        all items
                    </div>
                </li>
    
                @foreach($categories as $key => $category)
                    <li class="nav-item menu-text" role="presentation">
                        <div class="nav-link" id="{{ Str::slug($category->name) }}-tab" data-bs-toggle="tab"
                            data-bs-target="#{{ Str::slug($category->name) }}-tab-pane" role="tab"
                            aria-controls="{{ Str::slug($category->name) }}-tab-pane"
                            aria-selected="{{ $key == 0 ? 'true' : 'false' }}">{{ $category->name }}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    
        <div class="tab-content" id="popularDishesTabContent">
            <div class="tab-pane fade show active" id="all-items-tab-pane" role="tabpanel" aria-labelledby="all-items-tab" tabindex="0">
                <div class="row">
                    @foreach($allItems as $menuItem)
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-dishes">
                                <div class="dish-img">
                                    <a href="{{asset('/uploads/' . $menuItem->image)}}" target="_blank" style="width: inherit;">
                                        <img src="{{asset('/uploads/' . $menuItem->image)}}" alt="" style="border-radius: 50%;">
                                    </a>
                                </div>
                                <div class="dish-content">
                                    <h5> {{Str::limit($menuItem->name, 15)}}
                                        </h5>
                                    <p>{{Str::limit($menuItem->description, 90)}}</p>
                                    <span class="price badge-color">price :${{$menuItem->price}}</span>
                                </div>
                                <span class="badge"></span>
                                <div class="cart-opt">
                                  <span>
                                    <a href="{{route('menu.detail', $menuItem->id)}}"><i class="fas fa-info-circle"></i></a>
                                  </span>
                                  <span>
                                    <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                  </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{ $allItems->withQueryString(['tab' => 'all'])->links() }}
            </div>
    
            @foreach($categories as $key => $category)
                <div class="tab-pane fade" id="{{ Str::slug($category->name) }}-tab-pane" role="tabpanel"
                    aria-labelledby="{{ Str::slug($category->name) }}-tab" tabindex="0">
                    <div class="row">
                        @foreach($category->menuItems as $menuItem)
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <a href="{{asset('/uploads/' . $menuItem->image)}}" target="_blank" style="width: inherit;">
                                            <img src="{{asset('/uploads/' . $menuItem->image)}}" alt="" style="border-radius: 50%;">
                                        </a>
                                    </div>
                                    <div class="dish-content">
                                        <h5> {{Str::limit($menuItem->name, 15)}}
                                            </h5>
                                        <p>{{Str::limit($menuItem->description, 90)}}</p>
                                        <span class="price badge-color">price :${{$menuItem->price}}</span>
                                    </div>
                                    <span class="badge"></span>
                                    <div class="cart-opt">
                                      <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                      </span>
                                      <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                      </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{ $category->menuItems->withQueryString(['tab' => $category->id])->links() }}
                </div>
            @endforeach
        </div>
    </div>

    
  </section>

  <!-- testimonial -->
  <section class="testimonial padding-bottom-120 padding-top-110">
    <div class="container">
      <div class="testi-shapes">
        <span class="ts-1"><img src="{!!asset('/images/img/31.png')!!}" alt="" /></span>
        <span class="ts-2"><img src="{!!asset('/images/img/32.png')!!}" alt="" /></span>
        <span class="ts-3 item-animateTwo"><img src="{!!asset('/images/shapes/7.png')!!}" alt="" /></span>
        <span class="ts-4"><img src="{!!asset('/images/shapes/26.png')!!}" alt="" /></span>
      </div>
      <div class="common-title-area text-center padding-bottom-50 wow fadeInUp">
        <h3>testimonial</h3>
        <h2>client <span>feedback</span></h2>
      </div>
      <div class="testimonial-active">
        <div class="single-testimonial">
          <div class="testi-top">
            <div class="tin-shapes">
              <span class="tsin-1"><img src="{!!asset('/images/shapes/33.png')!!}" alt="" /></span>
            </div>
            <div class="testi-img">
              <img src="{!!asset('/images/testimonial/testi-1.png')!!}" alt="" />
            </div>
            <div class="testi-meta">
              <h6>Christ Deo</h6>
              <p>CEO A4Tech Ltd.</p>
              <div class="testi-rating">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
              </div>
            </div>
          </div>
          <p>
            Food Khan is a gret Restaurant from the University of Texas at
            Austin has been researching the benefits of frequent testing and
            the feedback leads to. He explains that in the history of the
            study.
          </p>
        </div>
        <div class="single-testimonial">
          <div class="testi-top">
            <div class="tin-shapes">
              <span class="tsin-1"><img src="{!!asset('/images/shapes/33.png')!!}" alt="" /></span>
            </div>
            <div class="testi-img">
              <img src="{!!asset('/images/testimonial/testi-2.png')!!}" alt="" />
            </div>
            <div class="testi-meta">
              <h6>Lipayka Maya</h6>
              <p>CEO SoftTechit Ltd.</p>
              <div class="testi-rating">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
              </div>
            </div>
          </div>
          <p>
            Food Khan is a gret Restaurant from the University of Texas at
            Austin has been researching the benefits of frequent testing and
            the feedback leads to. He explains that in the history of the
            study.
          </p>
        </div>
        <div class="single-testimonial">
          <div class="testi-top">
            <div class="tin-shapes">
              <span class="tsin-1"><img src="{!!asset('/images/shapes/33.png')!!}" alt="" /></span>
            </div>
            <div class="testi-img">
              <img src="{!!asset('/images/testimonial/testi-1.png')!!}" alt="" />
            </div>
            <div class="testi-meta">
              <h6>Christ Deo</h6>
              <p>CEO A4Tech Ltd.</p>
              <div class="testi-rating">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
              </div>
            </div>
          </div>
          <p>
            Food Khan is a gret Restaurant from the University of Texas at
            Austin has been researching the benefits of frequent testing and
            the feedback leads to. He explains that in the history of the
            study.
          </p>
        </div>
        <div class="single-testimonial">
          <div class="testi-top">
            <div class="tin-shapes">
              <span class="tsin-1"><img src="{!!asset('/images/shapes/33.png')!!}" alt="" /></span>
            </div>
            <div class="testi-img">
              <img src="{!!asset('/images/testimonial/testi-2.png')!!}" alt="" />
            </div>
            <div class="testi-meta">
              <h6>Lipayka Maya</h6>
              <p>CEO SoftTechit Ltd.</p>
              <div class="testi-rating">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
              </div>
            </div>
          </div>
          <p>
            Food Khan is a gret Restaurant from the University of Texas at
            Austin has been researching the benefits of frequent testing and
            the feedback leads to. He explains that in the history of the
            study.
          </p>
        </div>
        <div class="single-testimonial">
          <div class="testi-top">
            <div class="tin-shapes">
              <span class="tsin-1"><img src="{!!asset('/images/shapes/33.png')!!}" alt="" /></span>
            </div>
            <div class="testi-img">
              <img src="{!!asset('/images/testimonial/testi-1.png')!!}" alt="" />
            </div>
            <div class="testi-meta">
              <h6>Christ Deo</h6>
              <p>CEO A4Tech Ltd.</p>
              <div class="testi-rating">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
              </div>
            </div>
          </div>
          <p>
            Food Khan is a gret Restaurant from the University of Texas at
            Austin has been researching the benefits of frequent testing and
            the feedback leads to. He explains that in the history of the
            study.
          </p>
        </div>
        <div class="single-testimonial">
          <div class="testi-top">
            <div class="tin-shapes">
              <span class="tsin-1"><img src="{!!asset('/images/shapes/33.png')!!}" alt="" /></span>
            </div>
            <div class="testi-img">
              <img src="{!!asset('/images/testimonial/testi-2.png')!!}" alt="" />
            </div>
            <div class="testi-meta">
              <h6>Lipayka Maya</h6>
              <p>CEO SoftTechit Ltd.</p>
              <div class="testi-rating">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
              </div>
            </div>
          </div>
          <p>
            Food Khan is a gret Restaurant from the University of Texas at
            Austin has been researching the benefits of frequent testing and
            the feedback leads to. He explains that in the history of the
            study.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- slider-gallery-img -->
  <div class="slider-gallery-img">
    <div class="container-fluid">
      <div class="slider-gallery-active">
        <div class="single-gallery-img">
          <img src="{!!asset('/images/gallery/gm1.jpg')!!}" alt="" />
          <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
        </div>
        <div class="single-gallery-img">
          <img src="{!!asset('/images/gallery/gm2.jpg')!!}" alt="" />
          <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
        </div>
        <div class="single-gallery-img">
          <img src="{!!asset('/images/gallery/gm3.jpg')!!}" alt="" />
          <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
        </div>
        <div class="single-gallery-img">
          <img src="{!!asset('/images/gallery/gm4.jpg')!!}" alt="" />
          <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
        </div>
        <div class="single-gallery-img">
          <img src="{!!asset('/images/gallery/gm5.jpg')!!}" alt="" />
          <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
        </div>
        <div class="single-gallery-img">
          <img src="{!!asset('/images/gallery/gm6.jpg')!!}" alt="" />
          <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- delivery-area -->
  <section class="delivery-area padding-top-115 padding-bottom-90">
    <div class="del-shapes">
      <span class="ds-1 item-bounce"><img src="{!!asset('/images/shapes/35.png')!!}" alt="" /></span>
      <span class="ds-2"><img src="{!!asset('/images/shapes/34.png')!!}" alt="" /></span>
      <span class="ds-3 item-bounce"><img src="{!!asset('/images/shapes/17.png')!!}" alt="" /></span>
      <span class="ds-4 item-animateOne"><img src="{!!asset('/images/shapes/6.png')!!}" alt="" /></span>
    </div>
    <div class="container">
      <div class="row">
        <div class="
              col-lg-6
              align-self-lg-center
              col-md-12
              margin-bottom-20
              wow
              fadeInLeft
            ">
          <div class="delivery-left">
            <img src="{!!asset('/images/bg/delivery-img.png')!!}" alt="" />
          </div>
        </div>
        <div class="col-lg-6 col-md-12 wow fadeInRight">
          <div class="delivery-right">
            <div class="common-title-area padding-bottom-40">
              <h3>delivery</h3>
              <h2>
                A Moments of Delivered <span> On Right Time & Place </span>
              </h2>
              <p>
                Food Khan is a restaurant, bar and coffee roastery located on
                a busy corner site in Farringdon's Exmouth Market. With glazed
                frontage on two sides of the building, overlooking the market
                and a bustling London inteon.
              </p>
              <div class="order-box d-flex align-items-end">
                <span class="order-img"><img src="{!!asset('/images/icons/1.png')!!}" alt="" /></span>
                <div class="order-content">
                  <p>delivery order num.</p>
                  <span>123-59794069</span>
                </div>
                <a href="shopping-cart.html" class="btn">order now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection


