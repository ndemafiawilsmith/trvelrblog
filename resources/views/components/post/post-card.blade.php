  @props(['post'])
  <div class="news-card-thirteen">
                        <div class="news-card-img">
                            <img src="{{ $pick['image'] }}" alt="Image" loading='lazy' />

                        </div>
                        <div class="news-card-info">
                            <h3 class='font-semibold text-sm'>
                                <a href="{{ $pick['link'] }}">{{ $pick['title'] }}</a>
                            </h3>
                            <ul class="news-metainfo list-style">
                                <li>
                                    <i class="fi fi-rr-calendar-minus"></i>
                                    <a href="news-by-date.html">{{ $pick['date'] }}</a>
                                </li>
                                <li><i class="fi fi-rr-clock-three"></i>{{ $pick['read_time'] }}</li>
                            </ul>
                        </div>
                    </div>