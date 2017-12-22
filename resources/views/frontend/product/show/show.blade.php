@extends('frontend.layouts.master')

@section('main')
    <section class="product-header has-bg-dark section is-large">
        <div class="container">
          <div class="columns is-vcentered">
              <div class="column is-7-desktop">
                  <h1 class="title has-text-white">World of Warcraft: Legion</h1>
                  <p class="description">
                      World of Warcraft: Legion ist die sechste Erweiterung von Blizzard Entertainments weltberühmtem Massively Multiplayer Online Role-Playing Game. Im Angesicht der sicheren Vernichtung müssen Azeroths Champions Stärke beweisen und sich sagenumwobene Artefakte zueigen machen – Die großen Waffen der Geschichte, auf denen die Hoffnung eines Sieges über die Legion ruht. Im Zuge dessen werden sie einen teuflischen Pakt mit den Dämonenjägern der Illidari eingehen – einer uralten elfischen Bruderschaft teufelsberührter Assassinen und Anhänger des ruchlosen Verräters Illidan.
                  </p>
                  <ul class="attributes">
                      <li><span class="icon icon-calendar"></span> 30. August 2016</li>
                      <li>Blizzard Entertainement</li>
                      <li>Online-Rollenspiel</li>
                      <li>PC/MAC</li>
                  </ul>
              </div>
              <div class="is-offset-1 column is-4-desktop product-prices">
                  <div class="wrapper">
                      <img src="/frontend/images/placeholders/article-card-1.jpg" />
                      <div class="tags has-addons">
                          <span class="tag">UVP</span>
                          <span class="tag is-white has-text-dark">€ 39,99</span>
                      </div>

                      <div class="inner">
                        <h4 class="subtitle is-size-6 has-mb-7">Choose a Partner Shop</h4>
                        <ul class="shops">
                            <li class="best">
                                <a href="/">
                                    <img src="/frontend/images/placeholders/Amazon-icon.png" />Amazon.de
                                    <span class="price">€ 26,99</span>
                                    <div class="button has-ml-7 is-small is-static is-outlined is-white">Buy now</div>
                                </a>
                            </li>
                            <li>
                                <a href="/">
                                    <img src="/frontend/images/placeholders/gamesrocket.icn.png" />Gamesrocket.de
                                    <span class="price">€ 31,99</span>
                                    <div class="button has-ml-7 is-small is-static is-outlined  is-secondary">Buy now</div>
                                </a>
                            </li>
                            <li>
                                <a href="/">
                                    <img src="/frontend/images/placeholders/green-man-icon.png" />Greenmangaming.com
                                    <span class="price">€ 33,49</span>
                                    <div class="button has-ml-7 is-small is-static is-outlined  is-secondary">Buy now</div>
                                </a>
                            </li>
                        </ul>
                      </div>
                      <a href="/" class="price-alarm">
                          <span class="icon icon-bell-alt"></span>
                          Activate Price Alarm
                      </a>
                  </div>
              </div>
          </div>
        </div>
    </section>
    <div class="section has-bg-light is-spaceless">
        <div class="container">
            <div class="columns is-gapless">
                <div class="column is-7-desktop">
                    <ul class="product-meta">
                        <li>
                            <span class="icon icon-doc-text-inv"></span>Reviews (9)
                            <span class="meta has-text-success">∅ 1,6</span>
                        </li>
                        <li>
                            <span class="icon icon-tasks"></span>Community Reviews (1.899)
                            <span class="meta has-text-success">91%</span>
                        </li>
                        <li>
                            <a href="#" class="button is-primary is-small">Add Review</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="section is-medium">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop">
                    <div class="product-description content">
                        <p>Die Brennende Legion rollt in einer unaufhaltsamen Welle über Azeroth hinweg, während der Hexenmeister Gul'dan nach den Überresten des Verräters Illidan sucht. Diese sind der letzte Bestandteil eines Rituals, mit dem der dunkle Titan Sargeras beschworen werden soll. Während eure Welt vor euren Augen unter der Invasion zusammenbricht, müsst ihr uralte Artefaktwaffen mit grenzenloser Macht ergreifen und einen verbotenen Pakt mit den rachsüchtigen Dämonenjägern der Illidari schmieden. Denn nur ihr und eure Verbündeten können die apokalyptischen Anstrengungen der Legion beenden und Azeroth vor der Vernichtung bewahren.</p>
                        <h3>Mythische Artefaktwaffen</h3>
                        <p>Wappnet euch mit einem Artefakt unvorstellbarer Macht! Diese sagenumwobene Waffe lässt sich beliebig anpassen und kann nur von einem Helden eures Kalibers gemeistert werden. Wenn die Kraft eures Charakters zunimmt, ermöglicht euch dies, aus eurem Artefakt ein Kampfinstrument zu formen, das die Streitkräfte der Brennenden Legion vernichtet.</p>
                        <div class="collapse-more">
                            <div class="button is-small is-light"><span class="icon icon-plus"></span> <span>Show more</span></div>
                        </div>
                    </div>

                    <h2 class="title has-mt-1">Game Reviews <span class="tag is-success is-medium">∅ 1,6</span></h2>
                    <h4 class="subtitle">From popular and well-known websites</h4>
                    <ul class="product-tests">
                        <li>
                            <div class="rating has-bg-success">4/5</div>
                            <div class="description">
                                <div class="page">Gamespot.com</div>
                                <p>Besonders die atemberaubenden Schauplätze und die Artefakt-Waffen mit Talentbaum runden den positiven Eindruck ab. Lediglich die fehlenden neuen Waffentypen wurden bemängelt. <a href="/">Read Review</a></p>
                            </div>
                            <div class="tester">
                                <a class="is-block" href="/">
                                    <img src="/frontend/images/placeholders/gamespot-icon.png" />
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="rating has-bg-success">Super</div>
                            <div class="description">
                                <div class="page">Ign.com</div>
                                <p>Besonders die atemberaubenden Schauplätze und die Artefakt-Waffen mit Talentbaum runden den positiven Eindruck ab. Lediglich die fehlenden neuen Waffentypen wurden bemängelt. <a href="/">Read Review</a></p>
                            </div>
                            <div class="tester">
                                <a class="is-block" href="/">
                                    <img src="/frontend/images/placeholders/ign-icon.png" />
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="rating has-bg-warning">64%</div>
                            <div class="description">
                                <div class="page">Gamona.de</div>
                                <p>Besonders die atemberaubenden Schauplätze und die Artefakt-Waffen mit Talentbaum runden den positiven Eindruck ab. Lediglich die fehlenden neuen Waffentypen wurden bemängelt. <a href="/">Read Review</a></p>
                            </div>
                            <div class="tester">
                                <a class="is-block" href="/">
                                    <img src="/frontend/images/placeholders/gamona-icon.png" />
                                </a>
                            </div>
                        </li>
                    </ul>

                    <h2 class="title has-mt-1">Community Reviews <span class="tag is-success is-medium">91%</span></h2>
                    <h4 class="subtitle">Share your thoughts with us</h4>
                    <div class="columns product-ratings">
                        <div class="column is-8-desktop is-9-tablet is-10-mobile">
                            <div class="rating-stat high">
                                <div class="region">70% - 100%</div>
                                <div class="bar">
                                    <div style="width: 70%;" class="bar-inner"></div>
                                </div>
                                <span class="counter">10</span>
                            </div>
                            <div class="rating-stat mid">
                                <div class="region">50% - 69%</div>
                                <div class="bar">
                                    <div style="width: 20%;" class="bar-inner"></div>
                                </div>
                                <span class="counter">3</span>
                            </div>
                            <div class="rating-stat low">
                                <div class="region">0% - 49%</div>
                                <div class="bar">
                                    <div style="width: 10%;" class="bar-inner"></div>
                                </div>
                                <span class="counter">1</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-reviews">
                        <a href="#" class="button is-primary is-small">Add Review</a>

                        <div class="product-review">
                            <div class="author">
                                <img src="/frontend/images/placeholders/user-icon.jpg" />
                                <div>
                                    <span class="is-block">2 days ago</span>
                                    Abuma Badi
                                </div>
                            </div>
                            <div class="review">
                                <span class="rating tag is-success">92%</span>
                                afasf asfsafasf asfsafasf asfsafasf asfsafasf
                                asfsafasf asfsafasf asfsafasf asfsafasf
                                asfsafasf asfsafasf asfsafasf asfsafasf a
                                sfsafasf asfsafasf asfsafasf asfsafasf as
                                fsafasf asfsafasf asfsafasf asfsafasf asfs
                                afasf asfsafasf asfsafasf asfsafasf asfsaf
                                asf asfsafasf asfsafasf asf

                                <div class="review-report has-mt-6">
                                    <a class="button is-light is-small" href="/">Report</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-review">
                            <div class="author">
                                <img src="/frontend/images/placeholders/user-icon.jpg" />
                                <div>
                                    <span class="is-block">2 days ago</span>
                                    Abuma Badi
                                </div>
                            </div>
                            <div class="review">
                                <span class="rating tag is-warning">66%</span>
                                afasf asfsafasf asfsafasf asfsafasf asfsafasf
                                asfsafasf asfsafasf asfsafasf asfsafasf
                                asfsafasf asfsafasf

                                <div class="review-report has-mt-6">
                                    <a class="button is-light is-small" href="/">Report</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-review">
                            <div class="author">
                                <img src="/frontend/images/placeholders/user-icon.jpg" />
                                <div>
                                    <span class="is-block">2 days ago</span>
                                    Abuma Badi
                                </div>
                            </div>
                            <div class="review">
                                <span class="rating tag is-success">80%</span>
                                afasf asfsafasf asfsafasf asfsafasf asfsafasf
                                asfsafasf asfsafasf asfsafasf asfsafasf
                                asfsafasf asfsafasf asfsafasf asfsafasf a
                                sfsafasf asfsafasf asfsafasf asfsafasf as
                                fsafasf asfsafasf

                                <div class="review-report has-mt-6">
                                    <a class="button is-light is-small" href="/">Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-medium has-bg-light">
        <div class="container">
            asf
        </div>

    </section>




@endsection

