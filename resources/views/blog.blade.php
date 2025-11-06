@extends('layouts.app')

@section('title', 'How to Market Your Book Effectively | Ebook')

@section('content')

    <style>
        .single-banner {
            padding: 40px 0;
            background: #f7f9fc;
        }

        .single-article {
            padding: 60px 0;
        }

        .post-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(159, 11, 7, 0.06);
            overflow: hidden;
        }

        .post-hero {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
        }

        .post-body {
            padding: 28px;
            color: #333;
            line-height: 1.8;
        }

        .post-title {
            color: #002768;
            margin-bottom: 8px;
        }

        .post-meta {
            color: #666;
            font-size: 14px;
            margin-bottom: 16px;
        }

        .post-content img {
            max-width: 100%;
            height: auto;
        }

        .sidebar .recent-card {
            background: #fff;
            border-radius: 10px;
            padding: 12px;
            margin-bottom: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.03);
        }

        .share-buttons a {
            margin-right: 8px;
            text-decoration: none;
        }

        @media (max-width:991px) {
            .post-hero {
                height: 260px;
            }
        }

        @media (max-width:767px) {
            .single-article {
                padding: 30px 0;
            }
        }
    </style>

    <section class="single-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-head">
                        <span style="color:#002768;font-weight:700;">Article</span>
                        <h1 style="color:#9F0B07;">How to Market Your Book Effectively</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="single-article">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">

                    <article class="post-card">

                        {{-- Static featured image (use blog1.avif) --}}
                        <img src="{{ asset('assets/imgs/blog1.avif') }}" alt="How to Market Your Book Effectively"
                            class="post-hero">

                        <div class="post-body">
                            <div class="post-meta">November 06, 2025 • Ebook Team</div>

                            <h2 class="post-title">How to Market Your Book Effectively</h2>

                            <div class="post-content">
                                <p>Marketing a book requires planning, consistency, and using the right channels to reach
                                    readers. Start by identifying your target audience, preparing a launch timeline, and
                                    building a mailing list before release. Use social media strategically — share
                                    behind-the-scenes,
                                    excerpts, and reader testimonials. Collaborate with book bloggers, podcasters, and local
                                    bookstores for wider reach.</p>

                                <h3>Key steps</h3>
                                <ul>
                                    <li><strong>Build an email list:</strong> Your list is the most reliable promotional
                                        tool.</li>
                                    <li><strong>Plan a launch:</strong> Have promotions, giveaways, and outreach ready for
                                        launch week.</li>
                                    <li><strong>Use paid ads wisely:</strong> Small, targeted campaigns on
                                        Facebook/Instagram can boost visibility.</li>
                                    <li><strong>Leverage reviews:</strong> Ask early readers for honest reviews on
                                        Amazon/Goodreads.</li>
                                </ul>

                                <p>Remember — marketing is a marathon. Keep engaging with your readers, publish helpful
                                    content,
                                    and iterate based on what works.</p>
                            </div>

                        </div>

                    </article>

                </div>

                <div class="col-lg-4 sidebar">
                    <div class="mb-3">
                        <h5 style="color:#002768;">Recent Posts</h5>
                    </div>

                    {{-- Static recent cards --}}
                    <div class="recent-card">
                        <div class="d-flex">
                            <div style="flex:0 0 76px; margin-right:10px;">
                                <img src="{{ asset('assets/imgs/blog2.avif') }}" alt="Market Your Book"
                                    style="width:76px;height:54px;object-fit:cover;border-radius:6px;">
                            </div>
                            <div>
                                <a href="javascript:;" style="color:#002768;font-weight:700;">How to Market Your Book
                                    Effectively</a>
                                <div style="font-size:13px;color:#666;">Nov 06, 2025</div>
                            </div>
                        </div>
                    </div>

                    <div class="recent-card">
                        <div class="d-flex">
                            <div style="flex:0 0 76px; margin-right:10px;">
                                <img src="{{ asset('assets/imgs/blog4.jpg') }}" alt="Writing Fiction"
                                    style="width:76px;height:54px;object-fit:cover;border-radius:6px;">
                            </div>
                            <div>
                                <a href="javascript:;" style="color:#002768;font-weight:700;">The Art of Writing Engaging
                                    Fiction</a>
                                <div style="font-size:13px;color:#666;">Nov 04, 2025</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection
