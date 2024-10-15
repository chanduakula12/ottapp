<div class="full price_table padding_infor_info">
                                 <div class="row">
                                    @foreach($movies as $movie)
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                       <div class="contact_blog">
                                          <!-- <h4 class="brief">Digital Strategist</h4> -->
                                          <div class="contact_inner">
                                             <div class="left">
                                                <h3>{{$movie->title}}</h3>
                                                <p><strong>Price: </strong>{{$movie->price}}</p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i>{{$movie->watch_hours}}</li>
                                                </ul>
                                             </div>
                                             <div class="right">
                                                <div class="profile_contacts">
                                                   <img class="img-responsive" src="{{public_path($movie->thumbnail)}}" alt="#" />
                                                </div>
                                             </div>
                                             <div class="bottom_list">
                                                
                                                <div class="right_button">
                                                    <a href="{{route('admin.movieupload', ['id' => $movie->id])}}">
                                                        <button type="button" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-user"> </i> Movie File {{$movie->video ? '' : '(NA)'}}
                                                        </button>
                                                    </a>
                                                   <button type="button" class="btn btn-primary btn-xs">
                                                   <i class="fa fa-user"> </i> View Profile
                                                   </button>
                                                   
                                                </div>
                                                
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach
                                 </div>
                              </div>