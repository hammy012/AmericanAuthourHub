<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Truncate the table to get a clean slate
        Faq::truncate();

        // 2. Prepare exactly 6 high-quality, SEO-optimized FAQs
        $faqs = [
            [
                'topic' => 'Services',
                'question' => 'What professional book services does American Author Hub offer?',
                'answer' => 'We offer a complete, end-to-end suite of book writing and publishing services tailored for authors in the United States and globally. This includes professional ghostwriting, book editing, proofreading, custom book cover design, interior layout formatting, audiobook production, video book trailers, author website design, and global distribution on platforms like Amazon KDP, IngramSpark, and Barnes & Noble.',
                'is_active' => true,
            ],
            [
                'topic' => 'Royalties & Ownership',
                'question' => 'Who owns the rights and royalties to my book?',
                'answer' => 'You retain 100% of the rights and ownership of your book. Unlike traditional publishers, American Author Hub does not take any percentage of your royalties or intellectual property. Once your project is completed and paid for, all files, copyrights, and earnings from platforms like Amazon KDP are entirely yours.',
                'is_active' => true,
            ],
            [
                'topic' => 'Ghostwriting',
                'question' => 'How does the ghostwriting process work at American Author Hub?',
                'answer' => 'Our ghostwriting process is highly collaborative. It begins with an in-depth interview to understand your concept, outline, and voice. We then pair you with an elite ghostwriter who specializes in your genre (fiction or non-fiction). We write chapter-by-chapter, submitting drafts for your feedback and approval. You are involved in every step of the journey to ensure the manuscript captures your vision.',
                'is_active' => true,
            ],
            [
                'topic' => 'Timelines',
                'question' => 'How long does it take to write and publish a book?',
                'answer' => 'The timeline varies depending on the service and complexity of the project. A standard editing or formatting project might take 2-4 weeks, while a full ghostwriting project for a standard-length manuscript (50,000 words) usually takes 3 to 6 months. Once the manuscript is ready, self-publishing setup on Amazon KDP takes approximately 1-2 weeks.',
                'is_active' => true,
            ],
            [
                'topic' => 'Publishing Support',
                'question' => 'Do you assist with self-publishing on Amazon KDP and other platforms?',
                'answer' => 'Yes, we specialize in self-publishing setup. We guide you through creating your accounts on Amazon KDP, IngramSpark, or Barnes & Noble. We handle the technical upload, format files to meet print-ready standards, input SEO-optimized keywords and categories, set up your pricing, and launch the book. We ensure your listing looks polished and professional.',
                'is_active' => true,
            ],
            [
                'topic' => 'Book Editing',
                'question' => 'Why is professional book editing necessary?',
                'answer' => 'Even the most talented authors need editors. Professional editing ensures your book is polished, grammatically correct, cohesive, and engaging. It eliminates pacing issues, plot holes, and formatting errors that pull readers out of the story. Standard industry-quality editing is key to receiving positive reviews and ranking high on bookstore algorithms.',
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $f) {
            Faq::create($f);
        }
    }
}
