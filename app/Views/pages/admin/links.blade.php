@extends('layouts.admin')

@section('title')
    @parent
    {{ lang('Admin/Layout.sidebar.links') }}
@endsection

@section('content')
    @parent
    <section class="col-lg-12">
        <!-- card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    {{ lang('Admin/Links.social_accounts') }}
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                    <!-- button with a dropdown -->
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                        title="{{ lang('Admin/Links.collapse') }}">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"
                        title="{{ lang('Admin/Links.maximize') }}">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"
                        title="{{ lang('Admin/Links.remove') }}">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="card-body">
                <form id="form-update-socials" role="form" method="post" class="row needs-validation" novalidate>
                    {!! csrf_field() !!}
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="email"
                                aria-label="email" style="width: 50px">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                        </div>
                        <input type="email" name="email" placeholder="email" class="form-control" maxlength="320"
                            aria-label="email" aria-describedby="email">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="phone"
                                aria-label="phone" style="width: 50px">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                        </div>
                        <input type="tel" name="phone" placeholder="phone" class="form-control"
                            pattern="[0-9]{7,15}" aria-label="phone" aria-describedby="phone">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="website"
                                aria-label="website" style="width: 50px">
                                <i class="fa-solid fa-link"></i>
                            </span>
                        </div>
                        <input type="url" name="website" placeholder="website" class="form-control"
                            aria-label="website" aria-describedby="website">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="facebook"
                                aria-label="facebook" style="width: 50px">
                                <i class="fa-brands fa-facebook"></i>
                            </span>
                        </div>
                        <input type="url" name="facebook" placeholder="facebook" class="form-control"
                            aria-label="facebook" aria-describedby="facebook">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="x-twitter"
                                aria-label="twitter" style="width: 50px">
                                <i class="fa-brands fa-x-twitter"></i>
                            </span>
                        </div>
                        <input type="url" name="x-twitter" placeholder="x-twitter" class="form-control"
                            aria-label="x-twitter" aria-describedby="x-twitter">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="mastodon"
                                aria-label="mastodon" style="width: 50px">
                                <i class="fa-brands fa-mastodon"></i>
                            </span>
                        </div>
                        <input type="url" name="mastodon" placeholder="mastodon" class="form-control"
                            aria-label="mastodon" aria-describedby="mastodon">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="instagram"
                                aria-label="instagram" style="width: 50px">
                                <i class="fa-brands fa-instagram"></i>
                            </span>
                        </div>
                        <input type="url" name="instagram" placeholder="instagram" class="form-control"
                            aria-label="instagram" aria-describedby="instagram">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="youtube"
                                aria-label="youtube" style="width: 50px">
                                <i class="fa-brands fa-youtube"></i>
                            </span>
                        </div>
                        <input type="url" name="youtube" placeholder="youtube" class="form-control"
                            aria-label="youtube" aria-describedby="youtube">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="linkedin"
                                aria-label="linkedin" style="width: 50px">
                                <i class="fa-brands fa-linkedin"></i>
                            </span>
                        </div>
                        <input type="url" name="linkedin" placeholder="linkedin" class="form-control"
                            aria-label="linkedin" aria-describedby="linkedin">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="twitch"
                                aria-label="twitch" style="width: 50px">
                                <i class="fa-brands fa-twitch"></i>
                            </span>
                        </div>
                        <input type="url" name="twitch" placeholder="twitch" class="form-control"
                            aria-label="twitch" aria-describedby="twitch">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="github"
                                aria-label="github" style="width: 50px">
                                <i class="fa-brands fa-github"></i>
                            </span>
                        </div>
                        <input type="url" name="github" placeholder="github" class="form-control"
                            aria-label="github" aria-describedby="github">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="gitlab"
                                aria-label="gitlab" style="width: 50px">
                                <i class="fa-brands fa-gitlab"></i>
                            </span>
                        </div>
                        <input type="url" name="gitlab" placeholder="gitlab" class="form-control"
                            aria-label="gitlab" aria-describedby="gitlab">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="telegram"
                                aria-label="telegram" style="width: 50px">
                                <i class="fa-brands fa-telegram"></i>
                            </span>
                        </div>
                        <input type="url" name="telegram" placeholder="telegram" class="form-control"
                            aria-label="telegram" aria-describedby="telegram">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="discord"
                                aria-label="discord" style="width: 50px">
                                <i class="fa-brands fa-discord"></i>
                            </span>
                        </div>
                        <input type="url" name="discord" placeholder="discord" class="form-control"
                            aria-label="discord" aria-describedby="discord">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="slack"
                                aria-label="slack" style="width: 50px">
                                <i class="fa-brands fa-slack"></i>
                            </span>
                        </div>
                        <input type="url" name="slack" placeholder="slack" class="form-control"
                            aria-label="slack" aria-describedby="slack">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="medium"
                                aria-label="medium" style="width: 50px">
                                <i class="fa-brands fa-medium"></i>
                            </span>
                        </div>
                        <input type="url" name="medium" placeholder="medium" class="form-control"
                            aria-label="medium" aria-describedby="medium">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="devto"
                                aria-label="devto" style="width: 50px">
                                <i class="fa-brands fa-dev"></i>
                            </span>
                        </div>
                        <input type="url" name="devto" placeholder="devto" class="form-control"
                            aria-label="devto" aria-describedby="devto">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="codepen"
                                aria-label="codepen" style="width: 50px">
                                <i class="fa-brands fa-codepen"></i>
                            </span>
                        </div>
                        <input type="url" name="codepen" placeholder="codepen" class="form-control"
                            aria-label="codepen" aria-describedby="codepen">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="hackerrank"
                                aria-label="hackerrank" style="width: 50px">
                                <i class="fa-brands fa-hackerrank"></i>
                            </span>
                        </div>
                        <input type="url" name="hackerrank" placeholder="hackerrank" class="form-control"
                            aria-label="hackerrank" aria-describedby="hackerrank">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="kaggle"
                                aria-label="kaggle" style="width: 50px">
                                <i class="fa-brands fa-kaggle"></i>
                            </span>
                        </div>
                        <input type="url" name="kaggle" placeholder="kaggle" class="form-control"
                            aria-label="kaggle" aria-describedby="kaggle">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="hashnode"
                                aria-label="hashnode" style="width: 50px">
                                <i class="fa-brands fa-hashnode"></i>
                            </span>
                        </div>
                        <input type="url" name="hashnode" placeholder="hashnode" class="form-control"
                            aria-label="hashnode" aria-describedby="hashnode">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="bitbucket"
                                aria-label="bitbucket" style="width: 50px">
                                <i class="fa-brands fa-bitbucket"></i>
                            </span>
                        </div>
                        <input type="url" name="bitbucket" placeholder="bitbucket" class="form-control"
                            aria-label="bitbucket" aria-describedby="bitbucket">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="stack-overflow"
                                aria-label="stack-overflow" style="width: 50px">
                                <i class="fa-brands fa-stack-overflow"></i>
                            </span>
                        </div>
                        <input type="url" name="stack-overflow" placeholder="stack-overflow" class="form-control"
                            aria-label="stack-overflow" aria-describedby="stack-overflow">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="product-hunt"
                                aria-label="product-hunt" style="width: 50px">
                                <i class="fa-brands fa-product-hunt"></i>
                            </span>
                        </div>
                        <input type="url" name="product-hunt" placeholder="product-hunt" class="form-control"
                            aria-label="product-hunt" aria-describedby="product-hunt">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="hacker-news"
                                aria-label="hacker-news" style="width: 50px">
                                <i class="fa-brands fa-hacker-news"></i>
                            </span>
                        </div>
                        <input type="url" name="hacker-news" placeholder="hacker-news" class="form-control"
                            aria-label="hacker-news" aria-describedby="hacker-news">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="dribbble"
                                aria-label="dribbble" style="width: 50px">
                                <i class="fa-brands fa-dribbble"></i>
                            </span>
                        </div>
                        <input type="url" name="dribbble" placeholder="dribbble" class="form-control"
                            aria-label="dribbble" aria-describedby="dribbble">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="behance"
                                aria-label="behance" style="width: 50px">
                                <i class="fa-brands fa-behance"></i>
                            </span>
                        </div>
                        <input type="url" name="behance" placeholder="behance" class="form-control"
                            aria-label="behance" aria-describedby="behance">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="bandcamp"
                                aria-label="bandcamp" style="width: 50px">
                                <i class="fa-brands fa-bandcamp"></i>
                            </span>
                        </div>
                        <input type="url" name="bandcamp" placeholder="bandcamp" class="form-control"
                            aria-label="bandcamp" aria-describedby="bandcamp">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="pinterest"
                                aria-label="pinterest" style="width: 50px">
                                <i class="fa-brands fa-pinterest"></i>
                            </span>
                        </div>
                        <input type="url" name="pinterest" placeholder="pinterest" class="form-control"
                            aria-label="pinterest" aria-describedby="pinterest">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="soundcloud"
                                aria-label="soundcloud" style="width: 50px">
                                <i class="fa-brands fa-soundcloud"></i>
                            </span>
                        </div>
                        <input type="url" name="soundcloud" placeholder="soundcloud" class="form-control"
                            aria-label="soundcloud" aria-describedby="soundcloud">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="spotify"
                                aria-label="spotify" style="width: 50px">
                                <i class="fa-brands fa-spotify"></i>
                            </span>
                        </div>
                        <input type="url" name="spotify" placeholder="spotify" class="form-control"
                            aria-label="spotify" aria-describedby="spotify">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="tumblr"
                                aria-label="tumblr" style="width: 50px">
                                <i class="fa-brands fa-tumblr"></i>
                            </span>
                        </div>
                        <input type="url" name="tumblr" placeholder="tumblr" class="form-control"
                            aria-label="tumblr" aria-describedby="tumblr">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="reddit"
                                aria-label="reddit" style="width: 50px">
                                <i class="fa-brands fa-reddit"></i>
                            </span>
                        </div>
                        <input type="url" name="reddit" placeholder="reddit" class="form-control"
                            aria-label="reddit" aria-describedby="reddit">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="vk" aria-label="vk"
                                style="width: 50px">
                                <i class="fa-brands fa-vk"></i>
                            </span>
                        </div>
                        <input type="url" name="vk" placeholder="vk" aria-label="vk" class="form-control"
                            aria-describedby="vk">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="whatsapp"
                                aria-label="whatsapp" style="width: 50px">
                                <i class="fa-brands fa-whatsapp"></i>
                            </span>
                        </div>
                        <input type="url" name="whatsapp" placeholder="whatsapp" class="form-control"
                            aria-label="whatsapp" aria-describedby="whatsapp">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="snapchat"
                                aria-label="snapchat" style="width: 50px">
                                <i class="fa-brands fa-snapchat"></i>
                            </span>
                        </div>
                        <input type="url" name="snapchat" placeholder="snapchat" class="form-control"
                            aria-label="snapchat" aria-describedby="snapchat">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="vimeo"
                                aria-label="vimeo" style="width: 50px">
                                <i class="fa-brands fa-vimeo"></i>
                            </span>
                        </div>
                        <input type="url" name="vimeo" placeholder="vimeo" class="form-control"
                            aria-label="vimeo" aria-describedby="vimeo">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="tiktok"
                                aria-label="tiktok" style="width: 50px">
                                <i class="fa-brands fa-tiktok"></i>
                            </span>
                        </div>
                        <input type="url" name="tiktok" placeholder="tiktok" class="form-control"
                            aria-label="tiktok" aria-describedby="tiktok">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="foursquare"
                                aria-label="foursquare" style="width: 50px">
                                <i class="fa-brands fa-foursquare"></i>
                            </span>
                        </div>
                        <input type="url" name="foursquare" placeholder="foursquare" class="form-control"
                            aria-label="foursquare" aria-describedby="foursquare">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="meetup"
                                aria-label="meetup" style="width: 50px">
                                <i class="fa-brands fa-meetup"></i>
                            </span>
                        </div>
                        <input type="url" name="meetup" placeholder="meetup" class="form-control"
                            aria-label="meetup" aria-describedby="meetup">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="skype"
                                aria-label="skype" style="width: 50px">
                                <i class="fa-brands fa-skype"></i>
                            </span>
                        </div>
                        <input type="url" name="skype" placeholder="skype" class="form-control"
                            aria-label="skype" aria-describedby="skype">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="paypal"
                                aria-label="paypal" style="width: 50px">
                                <i class="fa-brands fa-paypal"></i>
                            </span>
                        </div>
                        <input type="url" name="paypal" placeholder="paypal" class="form-control"
                            aria-label="paypal" aria-describedby="paypal">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="patreon"
                                aria-label="patreon" style="width: 50px">
                                <i class="fa-brands fa-patreon"></i>
                            </span>
                        </div>
                        <input type="url" name="patreon" placeholder="patreon" class="form-control"
                            aria-label="patreon" aria-describedby="patreon">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="amazon"
                                aria-label="amazon" style="width: 50px">
                                <i class="fa-brands fa-amazon"></i>
                            </span>
                        </div>
                        <input type="url" name="amazon" placeholder="amazon" class="form-control"
                            aria-label="amazon" aria-describedby="amazon">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="etsy" aria-label="etsy"
                                style="width: 50px">
                                <i class="fa-brands fa-etsy"></i>
                            </span>
                        </div>
                        <input type="url" name="etsy" placeholder="etsy" aria-label="etsy" class="form-control"
                            aria-describedby="etsy">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="goodreads"
                                aria-label="goodreads" style="width: 50px">
                                <i class="fa-brands fa-goodreads"></i>
                            </span>
                        </div>
                        <input type="url" name="goodreads" placeholder="goodreads" class="form-control"
                            aria-label="goodreads" aria-describedby="goodreads">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="figma"
                                aria-label="figma" style="width: 50px">
                                <i class="fa-brands fa-figma"></i>
                            </span>
                        </div>
                        <input type="url" name="figma" placeholder="figma" class="form-control"
                            aria-label="figma" aria-describedby="figma">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="strava"
                                aria-label="strava" style="width: 50px">
                                <i class="fa-brands fa-strava"></i>
                            </span>
                        </div>
                        <input type="url" name="strava" placeholder="strava" class="form-control"
                            aria-label="strava" aria-describedby="strava">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="threads"
                                aria-label="threads" style="width: 50px">
                                <i class="fa-brands fa-threads"></i>
                            </span>
                        </div>
                        <input type="url" name="threads" placeholder="threads" class="form-control"
                            aria-label="threads" aria-describedby="threads">
                    </div>
                    <div class="form-group input-group col-4">
                        <div class="input-group-append">
                            <span class="input-group-text d-flex justify-content-center" id="steam"
                                aria-label="steam" style="width: 50px">
                                <i class="fa-brands fa-steam"></i>
                            </span>
                        </div>
                        <input type="url" name="steam" placeholder="steam" class="form-control"
                            aria-label="steam" aria-describedby="steam">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" form="form-update-socials">
                        {{ lang('Admin/Links.update_socials') }}
                    </button>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </section>
@endsection

@section('scripts')
    @parent
    <script src="@asset('assets/bootstrap-validation.js')"></script>
@endsection
