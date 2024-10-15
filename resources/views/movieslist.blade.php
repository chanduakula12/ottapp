
@foreach($movie->movieslist as $moviedata) 


<li class="slide-items slick-slide slick-current slick-active first" tabindex="0" style="width: 369px;" data-slick-index="4" aria-hidden="false">
                                      <div class="block-images position-relative">
                                        <div class="img-box">
                                          <a href="{{ route('watchtrailer', ['id' => $moviedata->movielistdatainfo->id]) }}" tabindex="0"></a>
                                          <img src="" class="img-fluid  iqonic-lazy" alt="Fast &amp; Furious" data-srcset="" srcset="{{ asset($moviedata->movielistdatainfo->bannerimages->banner_image) }}">
                                        </div>
                                        <!-- 2nd -->
                                        <div class="card-description with-transition">
                                          <div class="cart-content">
                                            <div class="content-left">
                                              <h5 class="iq-title">
                                                <a href="{{ route('watchtrailer', ['id' => $moviedata->movielistdatainfo->id]) }}" tabindex="0">
                                                  {{$moviedata->movielistdatainfo->title}} </a>
                                              </h5>
                                              <div class="movie-time d-flex align-items-center my-2">
                                                <span class="movie-time-text font-normal">{{$moviedata->movielistdatainfo->watch_hours}}</span>
                                              </div>
                                            </div>
                                            <!-- <div class="watchlist">
                                              <a class="watch-list-not" href="../pages/login.html" tabindex="0">
                                                <span>
                                                  <i class="mr-1 fas fa-plus"></i>
                                                </span>
                                                <span class="watchlist-label"> Watchlist </span>
                                              </a>
                                            </div> -->
                                          </div>
                                        </div>
                                      </div>
                                    </li> @endforeach 