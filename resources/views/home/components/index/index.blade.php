<div class="page">
    <div class="topBannerAd-container">
        <div id="jsid-ad-container-banner_top" class="topBannerAd" data-collapseonempty="1"
             style="width: 970px; height: 250px; transition: height 0.3s ease-out 0s; display: none !important;"></div>
    </div>

    <div class="main-wrap">

        <section id="list-view-2">


        </section>


    </div>
    <script>
        const tag = ({id, name}) => `
                           <a href="/t/${id}">
                ${name}
            </a>
        `;

        const item = ({id, title, description}) => `<div id="stream-${id}" class="list-stream" style="min-height: 0px;">
            <div>
                <article id="jsid-post-avzW14b">
                    <header>
                        <div class="post-section">
                           <div class="featured-tag" id="tag-${id}">

                            </div>
                        </div>
                        <a data-evt="PostList,TapPost,Hot,,PostTitle" data-entry-id="avzW14b" data-position="1" track="post,v,,,d,avzW14b,l" redirect='true' href="/p/${id}" class="badge-evt badge-track">
                            <h1>${title}</h1>
                        </a>
                    </header>
                    <div class="post-container">
                        <div>
                            <a  redirect='true' href="/p/${id}" data-track="post,p,,,d,avzW14b,p" class="badge-track" style="min-height: 463.043px;">
                                <div class="post-view video-post">
                                    <video preload="auto" poster="https://img-9gag-fun.9cache.com/photo/avzW14b_460swp.webp" loop="loop" width="500" style="min-height: 463.043px; width: 500px;">

                                        <source src="https://img-9gag-fun.9cache.com/photo/avzW14b_460svvp9.webm" type="video/webm; codecs=&quot;vp9, opus&quot;">
                                        <source src="https://img-9gag-fun.9cache.com/photo/avzW14b_460sv.mp4" type="video/mp4">

                                    </video>
                                    <div class="sound-toggle off"></div>

                                    <div class="hide"><span class="play">Play</span></div>
                                </div>
                            </a>
                        </div>
                        <div class="post-text-container"></div>
                    </div>
                    <p class="post-meta"><a data-evt="PostList,TapPost,Hot,,Point" data-entry-id="avzW14b" data-position="1" href="/gag/avzW14b" target="_blank" class="point badge-evt">
                            680 punktów
                        </a> ·
                        <a data-evt="PostList,TapPost,Hot,,CommentCountText" data-entry-id="avzW14b" data-position="1" href="/gag/avzW14b#comment" target="_blank" class="comment badge-evt">
                            25 komentarzy
                        </a>
                    </p>
                    <div class="post-afterbar-a in-list-view">
                        <ul class="btn-vote left">
                            <li><a href="javascript:void(0);" class="up"><span class="icon material-icons">
thumb_up
</span></a></li>
                            <li><a href="javascript:void(0);" class="down"><span class="icon material-icons">
thumb_down
</span></a></li>
                        </ul>
                        <ul class="btn-vote left">
                            <li><a data-entry-id="avzW14b" data-position="1" target="_blank" href="/gag/avzW14b#comment" class=" comment badge-evt">
                                      <span class="icon material-icons">
local_fire_department
</span>

                                </a>
                            </li>
                        </ul>
                        <ul class="btn-vote left">
                            <li><a data-entry-id="avzW14b" data-position="1" target="_blank" href="/gag/avzW14b#comment" class=" comment badge-evt">
                                      <span class="icon material-icons">
favorite
</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="btn-vote left">
                            <li><a data-entry-id="avzW14b" data-position="1" target="_blank" href="/gag/avzW14b#comment" class=" comment badge-evt">
                                       <span class="icon material-icons">
add_comment
</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="btn-vote left">

                        </ul>


                        <div class="share right">
                            <ul>
                                <li><a  class="badge-evt badge-track btn-share facebook">
                                         <span class="material-icons">
facebook
</span>
                                        Facebook
                                    </a>
                                </li>
                                <li>
                            </ul>
                        </div>
                    </div> <div class="clearfix"></div>
                </article>
            </div>
        </div>`;
        let page = 1;
        let end = 0;
        loadMore(page);
        let recentScroll = false;
        $(window).scroll(function () {
            if (!recentScroll &&$(window).scrollTop() + $(window).height() >= $(document).height()) {
                page++;
                console.log('scroll');
                if (!end) loadMore(page);

                recentScroll = true;
                window.setTimeout(() => { recentScroll = false; }, 1000)
            }
        });

        function loadMore(page) {
            $.ajax({
                url: "{{route('api.get.posts')}}?page=" + page,
                type: 'POST',
                global: false,
                cache: false,
                beforeSend: function () {
                    addLoadingAnimation();
                }
            })
                .done(function (data) {
                    $('div.loading').remove();
                    if (JSON.parse(data).data.length === 0) {
                        console.log('koniec');
                        end = true;
                        $('section#list-view-2').append('<p>Nie ma więcej memów :(');

                    }
                    let post_item = JSON.parse(data).data;
                    $.each(post_item, function (heading, text) {
                        $('section#list-view-2').append(item(text));
                        $.each(text.tags, function (heading,text_) {
                            console.log(text.id);
                            $('div#tag-'+text.id).append(tag(text_));
                        })
                    });
                })
                .fail(function (jqXHR, ajaxOptions, thrownError) {
                    alert('Brak odpowiedzi od serwera');
                });
        }

        function addLoadingAnimation() {
            let loading = `<div class="loading">
                <a class="btn spin">
                    <div class="simple-spinner"></div>
                </a>
                <div data-v-46b21138="" class="infinite-loading-container">
                    <div data-v-46b21138="" class="infinite-status-prompt" style="display: none;"><span data-v-46b21138=""></span></div>
                    <div data-v-46b21138="" class="infinite-status-prompt" style="color: rgb(102, 102, 102); font-size: 14px; padding: 10px 0px; display: none;">No results :(</div>
                    <div data-v-46b21138="" class="infinite-status-prompt" style="display: none;"><a data-v-46b21138="" class="btn end">No more posts</a></div>
                    <div data-v-46b21138="" class="infinite-status-prompt" style="color: rgb(102, 102, 102); font-size: 14px; padding: 10px 0px; display: none;">
                        Opps, something went wrong :(
                        <br data-v-46b21138=""> <button data-v-46b21138="" class="btn-try-infinite">Retry</button>
                    </div>
                </div>
            </div>`;
            $('section#list-view-2').append(loading);
        }


    </script>
    <section id="sidebar">

        <div id="sidebar-content" style="position: relative; width: inherit;">

            <section class="block-ad" style="display: none !important;">
                <div id="jsid-ad-container-sidebar_top" class="img-container"
                     style="width: 300px; height: 250px;"></div>
            </section>
            <section class="block-feature-cover">
                <ul>
                    <li>
                        <a href="#" target="_blank">
                            <div class="img-container">
                                <picture>
                                    <source
                                        srcset="https://miscmedia-9gag-fun.9cache.com/images/featured/1595600564.2108_y6epa3_300x158wp.webp"
                                        type="image/webp">
                                    <img
                                        src="https://miscmedia-9gag-fun.9cache.com/images/featured/1595600564.2108_y6epa3_300x158.jpg"
                                        loading="lazy">
                                </picture>
                            </div>
                            <div class="info-container">
                                <h3>Kurwny robak</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </section>
            <div>
                <section class="block-ad" style="display: none !important;">
                    <div id="jsid-ad-container-sidebar_bottom_B" class="img-container"></div>
                </section>
                <section class="block-ad" style="display: none !important;">
                    <div id="jsid-ad-container-sidebar_bottom" class="img-container" style="height: 600px;"></div>
                </section>
                <section class="block-social-love">
                    <h2 class="sidebar-title">Zaobserwuj nas na:</h2>
                    <ul class="social-love">
                    </ul>
                </section>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
</div>
