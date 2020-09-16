<div style="margin-bottom: 50px;">
    <section class="featured-tag"><a href="#">
            Tag numer 1
        </a><a href="#">
            Tag numer 2
        </a><a href="#">
            Tag numer 3
        </a><a href="#">
            Tag numer 4
        </a></section> <!---->
    <div>
        <div id="items">


        </div>
      <script>


          const tag = ({id, name}) => `
                           <a href="/t/${id}">
                ${name}
            </a>
        `;
          const item = ({id, title, description}) => `
    <div id="stream-0">
    <div>
        <article class="post-cell photo">
            <header>
                <div class="post-top">
                    <div class="post-section"><a href="https://9gag.com/funny?ref=post-section" class="icon">
                            <picture>
                                <source
                                    srcset="https://miscmedia-9gag-fun.9cache.com/images/thumbnail-facebook/1557376304.186_U5U7u5_100x100wp.webp"
                                    type="image/webp">
                                <img
                                    src="https://miscmedia-9gag-fun.9cache.com/images/thumbnail-facebook/1557376304.186_U5U7u5_100x100.jpg"
                                    loading="lazy"></picture>
                        </a>
                        <p class="message"><a href="https://9gag.com/funny?ref=post-section" class="section">
                                Funny
                            </a> Â· 3h </p></div><a href="javascript:void(0)" class="icon"><i
    class="icn more"></i></a></div>
    <a href="/gag/aVwK932"><h3>${title}</h3></a></header>
    <div id="jsid-post-item-aVwK932">
    <div class="post-content" style="height: 509.478px;"> <a href="/gag/aVwK932">
    <picture>
    <source srcset="https://img-9gag-fun.9cache.com/photo/aVwK932_460swp.webp" type="image/webp">
    <img src="https://img-9gag-fun.9cache.com/photo/aVwK932_460s.jpg"
    alt="Epstein didn't kill himself" loading="lazy"></picture>
        </a>
        </div>
    </div>

    <div class="post-action"><a href="javascript:void(0)" class="btn upvote"><i class="icn upvote-000"></i>
    1.6K
    </a> <a href="javascript:void(0)" class="btn downvote"><i class="icn downvote-000"></i>
    85
    </a> <a href="/gag/aVwK932#comment" class="btn"><i class="icn comment-000"></i>
    106
    </a> <a href="javascript:void(0)" class="btn more"><i class="icn more-000"></i>
    SHARE
    </a></div>
    </article>
    </div>
    </div>
    `;
        function postsInit() {
            console.log("loadPosts EVENT");



            let page = 1;
            let end = 0;
            loadMore(page);
            let recentScroll = false;
            $('div').bind("scrollstop", function () {
                console.log($(window).scrollTop() + $(window).height());
                console.log($(document).height());
                if ($(window).scrollTop() + $(window).height() == $(document).height()) {
                    page++;
                    console.log('scroll');
                    if (!end) loadMore(page);

                    recentScroll = true;
                    window.setTimeout(() => {
                        recentScroll = false;
                    }, 1000)
                }
            });
        }

    function loadMore(page) {
        $.ajax({
            url: "{{route('api.get.posts')}}?page=" + page,
            type: 'POST',
            data: {_token: $('meta[name="csrf-token"]').attr('content')},
            global: false,
            cache: false,
            beforeSend: function () {
                addLoadingAnimation();
            }
        })
            .done(function (data) {
                $('div.loading').remove();
                if (JSON.parse(data).data.length === 0) {
                    end = true;
                    $('div#items').append('<p>Nie ma wiÄ™cej memĂłw :(');

                }
                let post_item = JSON.parse(data).data;
                $.each(post_item, function (heading, text) {
                    $('div#items').append(item(text));
                    $.each(text.tags, function (heading, text_) {
                        $('div#tag-' + text.id).append(tag(text_));
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


    const tag_ = ({id, name}) => `    <li class="drawer-item"><a href="/${name}-${id}" id="tag-${id}" class="picture">
                                <div class="thumbnail large">
 <span class="material-icons">
                            local_offer
                            </span>
                                </div>
                                ${name}
                            </a></li>`;
    $.ajax({
        type: 'POST',
        url: "{{route('api.get.tags')}}",
        global: false,
        cache: false,
    })
        .done(function (data) {
            $.each(JSON.parse(data), function (heading, text) {
                $("#tags").append(tag_(text))
            });
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            alert('Brak odpowiedzi od serwera');
        });
    $('.shade').on('click', function () {
        $("html").removeClass("slideout-open");
        $("div#sidebar").hide();
    });
    $('a.menu').on('click', function () {
        $("html").addClass("slideout-open");
        $("div#sidebar").show();
    });


      </script>
    </div>
</div>
