<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Delete all existing blogs to clean the slate
        Blog::truncate();

        // 2. Prepare the 6 new SEO-optimized blog posts
        $blogs = [
            [
                'title' => 'The Ultimate Guide to Self-Publishing on Amazon KDP in 2026',
                'slug' => 'ultimate-guide-self-publishing-amazon-kdp',
                'thumbnail' => 'assets/imgs/blogs/kdp-guide.png',
                'images' => ['assets/imgs/blogs/kdp-guide.png'],
                'date' => Carbon::parse('2026-07-23'),
                'tags' => ['Amazon KDP', 'Self-Publishing', 'Book Launch', 'Author Tips', 'American Author Hub'],
                'meta_title' => 'The Ultimate Guide to Self-Publishing on Amazon KDP (2026)',
                'meta_description' => 'Learn how to self-publish your book on Amazon KDP. A complete step-by-step guide from formatting to launching successfully in 2026.',
                'description' => '<h3>Introduction</h3>
<p>Self-publishing has revolutionized the literary world, giving authors complete creative control and direct access to global audiences. At the heart of this revolution is Amazon Kindle Direct Publishing (KDP). In 2026, KDP remains the most dominant and accessible self-publishing platform in the world. Whether you are a first-time writer or an experienced novelist, this guide provides a step-by-step blueprint to successfully publish your book on Amazon KDP.</p>
<h3>1. Preparing Your Manuscript for KDP</h3>
<p>Before uploading your manuscript, formatting is critical. Amazon KDP supports various formats, but EPUB is the industry standard for eBooks, while a print-ready PDF is required for paperback and hardcover editions. Make sure your layout, page numbers, margins, and gutter settings are professionally aligned to ensure a flawless reading experience.</p>
<blockquote>"A professionally formatted book is the first step in earning your reader\'s trust."</blockquote>
<h3>2. Designing an Eye-Catching Cover</h3>
<p>Your book cover is your most important marketing asset. It must be professionally designed, high-resolution, and optimized to look great even at thumbnail size in search results. Ensure the typography is legible and the imagery matches your genre conventions.</p>
<h3>3. Keyword & Category Research (The SEO Secret)</h3>
<p>To help readers discover your book naturally, you must optimize your metadata. KDP allows you to choose 7 backend search keywords and select primary categories. Use tools like Publisher Rocket or search autocompletes to find high-volume, low-competition keywords like <em>"self-publishing guide"</em> or <em>"Amazon KDP publishing"</em>.</p>
<h3>4. Setting Up Your KDP Listing</h3>
<ul>
  <li><strong>Book Title & Subtitle:</strong> Make them descriptive and keyword-rich.</li>
  <li><strong>Book Description:</strong> Write a compelling blurb using HTML headers and bullet points to entice buyers.</li>
  <li><strong>Pricing Strategy:</strong> Choose between the 35% and 70% royalty options depending on your book price and target markets.</li>
</ul>
<h3>Conclusion</h3>
<p>Launching a book on KDP is an exciting journey. By following this blueprint, you will be well on your way to becoming a published author. Need help with professional editing, cover design, or KDP setup? Contact the experts at American Author Hub today!</p>',
            ],
            [
                'title' => 'How to Choose the Right Ghostwriting Service for Your Book',
                'slug' => 'how-to-choose-right-ghostwriting-service',
                'thumbnail' => 'assets/imgs/blogs/ghostwriting.png',
                'images' => ['assets/imgs/blogs/ghostwriting.png'],
                'date' => Carbon::parse('2026-07-22'),
                'tags' => ['Ghostwriting', 'Book Writing', 'Hire a Writer', 'Creative Writing', 'American Author Hub'],
                'meta_title' => 'How to Choose the Best Ghostwriting Service for Your Book',
                'meta_description' => 'Thinking of hiring a ghostwriter? Here is how to evaluate ghostwriting services and find the perfect writer to bring your story to life.',
                'description' => '<h3>Introduction</h3>
<p>Many people have incredible stories to tell, but they lack the time or professional writing expertise to put them on paper. That is where a ghostwriter comes in. Hiring a ghostwriting service is a common practice among busy professionals, celebrities, and aspiring authors. However, choosing the right partner can determine the success or failure of your book. Here is how to make the right choice.</p>
<h3>1. Define Your Goals and Style</h3>
<p>Before looking for a ghostwriting agency, clarify what you want to achieve. Are you writing an autobiography, a self-help guide, or a fantasy novel? Knowing your target audience and the desired tone of your book will help you find a writer who specializes in your specific genre.</p>
<h3>2. Assess Portfolios and Writing Samples</h3>
<p>Always review the samples provided by ghostwriting services. Check for clarity, emotional resonance, and consistency in voice. A professional ghostwriter should be a chameleon, able to write in different tones and styles seamlessly.</p>
<blockquote>"A great ghostwriter doesn\'t impose their voice; they amplify yours."</blockquote>
<h3>3. Evaluate the Collaboration Process</h3>
<p>Writing a book is a collaborative effort. Ask how the ghostwriting service handles interviews, feedback, and revisions. A robust process usually involves regular voice interviews, outline approvals, and chapter-by-chapter reviews to keep you in control.</p>
<h3>4. Ensure Confidentiality & Rights Ownership</h3>
<p>This is crucial: verify that the ghostwriting agreement guarantees 100% rights ownership to you. A reputable agency like American Author Hub ensures all intellectual property remains solely yours upon completion, with complete confidentiality.</p>
<h3>Conclusion</h3>
<p>Choosing the right ghostwriter is a huge milestone. Take your time, ask the right questions, and partner with a team that values your voice. At American Author Hub, our elite ghostwriters are ready to make your dream book a reality.</p>',
            ],
            [
                'title' => '5 Essential Book Marketing Strategies to Drive Bestseller Sales',
                'slug' => 'book-marketing-strategies-bestseller-sales',
                'thumbnail' => 'assets/imgs/blogs/book-marketing.png',
                'images' => ['assets/imgs/blogs/book-marketing.png'],
                'date' => Carbon::parse('2026-07-21'),
                'tags' => ['Book Marketing', 'Book Promotion', 'Bestseller Tips', 'Author Branding', 'American Author Hub'],
                'meta_title' => '5 Book Marketing Strategies for Bestseller Sales | American Author Hub',
                'meta_description' => 'Discover 5 proven book marketing strategies used by bestselling authors to build buzz, drive sales, and reach global audiences.',
                'description' => '<h3>Introduction</h3>
<p>Writing a book is only half the battle; the other half is getting it into the hands of readers. In today\'s crowded digital marketplace, a passive approach won\'t cut it. To drive bestseller sales, you need a dynamic, proactive marketing strategy. Here are 5 essential book marketing tactics used by top authors to build buzz and climb the charts.</p>
<h3>1. Build an Email List Early</h3>
<p>Your email list is your most powerful marketing tool. Unlike social media algorithms, your email list gives you direct access to your readers. Start building a list months before your launch by offering a "lead magnet," such as a free prequel novella or a helpful guide related to your book.</p>
<h3>2. Leverage a Launch Team (ARC Readers)</h3>
<p>A launch team is a dedicated group of readers who receive an Advanced Reader Copy (ARC) of your book in exchange for an honest review on release day. Reviews are the lifeblood of Amazon’s algorithm, helping to improve visibility and conversion rates.</p>
<blockquote>"Social proof is the single most powerful driver of online book sales."</blockquote>
<h3>3. Optimize Your Amazon KDP Product Page</h3>
<p>Ensure your book listing is conversion-ready. This includes a captivating book description, keyword-rich metadata, an eye-catching cover, and clean formatting. If readers land on your page but don\'t buy, your advertising efforts will go to waste.</p>
<h3>4. Run Targeted Ads (Amazon and Meta Ads)</h3>
<p>Targeted paid ads are a fast way to reach your exact target audience. Amazon Ads allow you to target readers looking for similar books or authors, while Facebook/Instagram ads help build brand awareness and interest.</p>
<h3>5. Utilize Digital Content & Book Trailers</h3>
<p>Visual storytelling is incredibly engaging. A professional book trailer or eye-catching social media graphics can capture attention instantly. Share behind-the-scenes content, teasers, and author interviews to build an emotional connection with your audience.</p>
<h3>Conclusion</h3>
<p>Successful book marketing is about consistency and planning. Start early, build your author platform, and test different channels. For professional book promotion services and tailored launch plans, contact the experts at American Author Hub.</p>',
            ],
            [
                'title' => 'The Art of Book Editing: Why Professional Editing is Non-Negotiable',
                'slug' => 'art-of-book-editing-why-it-is-non-negotiable',
                'thumbnail' => 'assets/imgs/blogs/editing.png',
                'images' => ['assets/imgs/blogs/editing.png'],
                'date' => Carbon::parse('2026-07-20'),
                'tags' => ['Book Editing', 'Manuscript Polish', 'Writing Process', 'Publishing Quality', 'American Author Hub'],
                'meta_title' => 'Why Professional Book Editing Services are Non-Negotiable',
                'meta_description' => 'Don\'t let typos ruin your manuscript. Understand the different types of book editing and why hiring a professional editor guarantees success.',
                'description' => '<h3>Introduction</h3>
<p>You have spent months, perhaps years, putting your heart and soul into your manuscript. But before you press "publish," there is one critical step you cannot afford to skip: editing. No matter how talented a writer you are, a raw manuscript needs polishing. Professional editing is the difference between a self-published book that looks amateur and one that competes with traditional bestsellers.</p>
<h3>1. The Different Types of Book Editing</h3>
<p>Editing is not a single, one-size-fits-all process. A comprehensive edit involves multiple stages:</p>
<ul>
  <li><strong>Developmental Editing:</strong> Focuses on the big picture — plot holes, character arcs, pacing, and overall structure.</li>
  <li><strong>Copyediting:</strong> Refines grammar, style, sentence structure, and flow while keeping the author\'s voice intact.</li>
  <li><strong>Proofreading:</strong> The final line of defense, fixing typos, punctuation, spelling, and formatting errors.</li>
</ul>
<h3>2. Self-Editing vs. Professional Editing</h3>
<p>While self-editing is a great first step, it is impossible to edit your own work objectively. Your brain naturally fills in missing words and ignores minor typos because you know what the sentence is *supposed* to say. A professional editor brings fresh, objective eyes and years of market experience.</p>
<blockquote>"Even the best writers in the world have editors. Writing is an art, but editing is a science."</blockquote>
<h3>3. Enhancing Reader Retention and Reviews</h3>
<p>Nothing pulls a reader out of a story faster than a spelling mistake or a confusing plot hole. Negative reviews frequently cite poor editing, which can destroy your book\'s sales ranking. Investing in a professional editor builds trust and guarantees a smooth reading experience.</p>
<h3>Conclusion</h3>
<p>Do not let typos tarnish your reputation. Professional editing is an investment in your success as an author. At American Author Hub, we provide elite editing services to transform your manuscript into a polished masterpiece.</p>',
            ],
            [
                'title' => 'Building an Author Website: Your Digital Headquarters',
                'slug' => 'building-author-website-digital-headquarters',
                'thumbnail' => 'assets/imgs/blogs/author-website.png',
                'images' => ['assets/imgs/blogs/author-website.png'],
                'date' => Carbon::parse('2026-07-19'),
                'tags' => ['Author Website', 'Author Branding', 'Digital Marketing', 'Platform Building', 'American Author Hub'],
                'meta_title' => 'How to Build a Professional Author Website | Branding Guide',
                'meta_description' => 'An author website is your brand\'s digital hub. Learn what key pages and features every successful author website needs to convert visitors into fans.',
                'description' => '<h3>Introduction</h3>
<p>As an author, your books are available on platforms like Amazon, Barnes & Noble, and Apple Books. However, you do not own those platforms. If their policies change, you could lose touch with your readers. That is why every serious writer needs a professional author website — a digital headquarters that you own and control completely.</p>
<h3>1. Why an Author Website is Essential</h3>
<p>Your website is the central hub for your brand. It is where readers go to learn more about you, buy your books, read your blog, and join your newsletter. It establishes your professionalism and builds long-term credibility in the publishing industry.</p>
<h3>2. Essential Pages for Your Website</h3>
<ul>
  <li><strong>Home Page:</strong> Needs a clear hook, a prominent image of your latest book, and an obvious call to action (like a newsletter signup).</li>
  <li><strong>Books Page:</strong> Displays all your titles with covers, synopses, and purchase links.</li>
  <li><strong>About Page:</strong> Tells your story as an author, helping readers connect with you on a personal level.</li>
  <li><strong>Contact Page:</strong> Provides a form for media inquiries, partnerships, and fan mail.</li>
</ul>
<blockquote>"Your website is the only piece of digital real estate that belongs entirely to you."</blockquote>
<h3>3. Capturing Lead Generation (Newsletters)</h3>
<p>The primary goal of your website should be collecting email addresses. Offer a free chapter or a newsletter-exclusive story to encourage readers to sign up. A strong newsletter allows you to launch future books directly to a warm audience of fans.</p>
<h3>Conclusion</h3>
<p>A professional website is non-negotiable for modern author branding. If you want to stand out, you need a site that is mobile-friendly, fast, and visually stunning. Need help building your author platform? Contact American Author Hub to design your custom website today.</p>',
            ],
            [
                'title' => 'Fiction vs. Non-Fiction: Designing a Cover that Sells',
                'slug' => 'fiction-vs-non-fiction-book-cover-design',
                'thumbnail' => 'assets/imgs/blogs/cover-design.png',
                'images' => ['assets/imgs/blogs/cover-design.png'],
                'date' => Carbon::parse('2026-07-18'),
                'tags' => ['Book Cover Design', 'Publishing Tips', 'Visual Marketing', 'Book Sales', 'American Author Hub'],
                'meta_title' => 'Book Cover Design: Fiction vs Non-Fiction Best Practices',
                'meta_description' => 'A great cover sells books. Explore the key differences in cover design principles for fiction and non-fiction books to attract your target readers.',
                'description' => '<h3>Introduction</h3>
<p>The old saying "don\'t judge a book by its cover" is completely ignored by readers. In the digital age, your cover is the single most important factor in whether a reader clicks on your book. However, cover design principles vary drastically depending on whether you are publishing fiction or non-fiction. Understanding these differences is key to capturing the right audience.</p>
<h3>1. Fiction Cover Design: Emotional and Atmospheric</h3>
<p>Fiction covers are about mood, emotion, and storytelling. They should transport the reader into your world. Best practices include:</p>
<ul>
  <li><strong>Imagery:</strong> Show characters, atmospheric landscapes, or symbolic objects that hint at the plot.</li>
  <li><strong>Typography:</strong> Font styles are highly genre-specific (e.g., elegant scripts for romance, distressed sans-serifs for thrillers, or glowing serif fonts for fantasy).</li>
  <li><strong>Colors:</strong> Rely on rich gradients and high contrast to set the mood (e.g., dark blues/purples for mystery, bright warm colors for romance).</li>
</ul>
<h3>2. Non-Fiction Cover Design: Clear and Benefit-Driven</h3>
<p>Non-fiction covers are about solutions, clarity, and authority. The reader wants to know exactly what they will learn. Key elements include:</p>
<ul>
  <li><strong>Typography:</strong> Big, bold, clean, and highly readable fonts. The title should dominate the cover.</li>
  <li><strong>Imagery:</strong> Minimalist graphics, clean lines, or professional portraits of the author. Avoid complex or cluttered designs.</li>
  <li><strong>Colors:</strong> Corporate and trust-building tones (navy blue, solid white, bold red/yellow accents).</li>
</ul>
<blockquote>"A fiction cover sells a dream; a non-fiction cover sells a solution."</blockquote>
<h3>Conclusion</h3>
<p>Whether you write sci-fi thrillers or business guides, your cover must align with reader expectations in your genre. Partnering with a professional designer is key. At American Author Hub, our award-winning designers create covers that hook readers and drive sales.</p>',
            ]
        ];

        foreach ($blogs as $b) {
            Blog::create($b);
        }
    }
}
