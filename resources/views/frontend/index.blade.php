@extends('frontend.layouts.master')

@section('main')
    <section style="height: 200px;" class="has-bg-bluedient">

    </section>
    <section class="section bg-lightdient is-medium">
        <div class="container">
            <h2 class="title">Highlights</h2>
            <ul class="tab-nav">
                <li class="active">New</li>
                <li>Top</li>
                <li>Popular</li>
                <li>Best</li>
            </ul>
            <div class="columns is-multiline article-cards has-gap-half has-mb-3">
                <div class="article-card column is-3-desktop is-6-tablet is-12-mobile">
                    <a href="/" class="wrapper">
                        <img src="/frontend/images/placeholders/article-card-1.jpg" />
                        <div class="inner">
                            <header class="has-text-right"><span class="tag is-white has-text-secondary">Save 33%</span></header>
                            <div class="body">
                                <h3>World of Warcraft: Legion</h3>
                            </div>
                            <footer>
                                <div class="button is-white is-static is-outlined has-mr-7">from €33,99 </div>
                                <span>10 Shops</span>
                            </footer>
                        </div>
                    </a>
                </div>
                <div class="article-card column is-3-desktop is-6-tablpret is-12-mobile">
                    <a href="/" class="wrapper">
                        <img src="/frontend/images/placeholders/article-card-2.jpg" />
                        <div class="inner">
                            <header class="has-text-right"><span class="tag is-white has-text-secondary">Save 20%</span></header>
                            <div class="body">
                                <h3>Battlefield</h3>
                            </div>
                            <footer>
                                <div class="button is-white is-static is-outlined has-mr-7">from €54,99</div>
                                <span>12 Shops</span>
                            </footer>
                        </div>
                    </a>
                </div>
                <div class="article-card column is-3-desktop is-6-tablet is-12-mobile">
                    <a href="/" class="wrapper">
                        <img src="/frontend/images/placeholders/article-card-3.jpg" />
                        <div class="inner">
                            <header class="has-text-right"><span class="tag is-white has-text-secondary">Save 46%</span></header>
                            <div class="body">
                                <h3>Fifa 18</h3>
                            </div>
                            <footer class="has-text-justified">
                                <div class="button is-white is-static is-outlined has-mr-7">from €26,49</div>
                                <span>6 Shops</span>
                            </footer>
                        </div>
                    </a>
                </div>
                <div class="article-card column is-3-desktop is-6-tablet is-12-mobile">
                    <a href="/" class="wrapper">
                        <img src="/frontend/images/placeholders/article-card-4.jpg" />
                        <div class="inner">
                            <header class="has-text-right"><span class="tag is-white has-text-secondary">Save 16%</span></header>
                            <div class="body">
                                <h3>Star Wars: Battlefront II</h3>
                            </div>
                            <footer>
                                <div class="button is-white is-static is-outlined has-mr-7">from €44,95</div>
                                <span>11 Shops</span>
                            </footer>
                        </div>
                    </a>
                </div>
            </div>

            <h2 class="heading">Favorites</h2>
        </div>
    </section>
    <section class="bg-white">

    </section>




@endsection

