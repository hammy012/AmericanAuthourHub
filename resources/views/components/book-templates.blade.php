<template id="template-journey">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survival of the Species: The Journey &mdash; American Author Hub</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Fonts: Cinzel & Playfair Display for headers, Cormorant Garamond for authentic book prose -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    :root {
      --book-h: min(76vh, 650px);
      --book-w: calc(var(--book-h) * (5.5 / 8.5));
    }

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    body {
      font-family: 'Cormorant Garamond', Georgia, serif;
      background: radial-gradient(ellipse at 50% 25%, #081122 0%, #040814 55%, #010308 100%);
      user-select: none;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .font-ui { font-family: 'Montserrat', sans-serif; }
    .font-cinzel { font-family: 'Cinzel', serif; }
    .font-playfair { font-family: 'Playfair Display', Georgia, serif; }

    .scene-3d {
      perspective: 2600px;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      flex: 1;
      overflow: hidden;
    }

    .book-core {
      width: var(--book-w);
      height: var(--book-h);
      position: relative;
      transform-style: preserve-3d;
      transition: transform 0.85s cubic-bezier(0.25, 1, 0.5, 1);
      transform-origin: left center;
      transform: translateX(0%);
      flex-shrink: 0;
    }

    .sheet {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      width: 100% !important;
      height: 100% !important;
      transform-origin: left center;
      transform-style: preserve-3d;
      transition: transform 0.85s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .sheet.flipped {
      transform: rotateY(-180deg);
    }

    .sheet-face {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      right: 0 !important;
      bottom: 0 !important;
      width: 100% !important;
      height: 100% !important;
      box-sizing: border-box !important;
      margin: 0 !important;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
      overflow: hidden;
    }

    .sheet-face.front {
      z-index: 2;
      border-radius: 3px 12px 12px 3px;
    }

    .sheet-face.back {
      transform: rotateY(180deg);
      z-index: 1;
      border-radius: 12px 3px 3px 12px;
    }

    /* Authentic Book Paper Styling & 3D Book Shape */
    .book-paper {
      background-color: #faf6ee;
      color: #221c17;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden;
      line-height: 1.58;
    }

    /* Verso (Left Page) - Spine is on the Right */
    .book-paper-verso {
      padding: 1.25rem 1.65rem 0.85rem 1.25rem;
      background: linear-gradient(to right, #faf6ee 0%, #faf6ee 80%, #f0e8d6 95%, #dfd1b8 100%);
      box-shadow: inset -26px 0 28px -12px rgba(45, 25, 12, 0.3), -4px 6px 18px rgba(0,0,0,0.35);
      border-right: 1px solid rgba(80, 50, 20, 0.25);
    }

    /* Recto (Right Page) - Spine is on the Left */
    .book-paper-recto {
      padding: 1.25rem 1.25rem 0.85rem 1.65rem;
      background: linear-gradient(to left, #faf6ee 0%, #faf6ee 80%, #f0e8d6 95%, #dfd1b8 100%);
      box-shadow: inset 26px 0 28px -12px rgba(45, 25, 12, 0.3), 4px 6px 18px rgba(0,0,0,0.35);
      border-left: 1px solid rgba(80, 50, 20, 0.25);
    }

    /* Spine Creases on Covers */
    .book-spine-crease {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 28px;
      background: linear-gradient(to right, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.18) 25%, rgba(255,255,255,0.06) 28%, transparent 100%);
      pointer-events: none;
      z-index: 5;
    }

    .book-spine-crease-right {
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      width: 28px;
      background: linear-gradient(to left, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.18) 25%, rgba(255,255,255,0.06) 28%, transparent 100%);
      pointer-events: none;
      z-index: 5;
    }

    /* Refined Running Header (Book Standard) */
    .book-running-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 8px;
      font-weight: 600;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: #7a6a5a;
      padding-bottom: 4px;
      border-bottom: 1px solid #e0d6c7;
      margin-bottom: 8px;
    }

    /* Refined Chapter Headings */
    .book-chapter-head {
      text-align: center;
      margin-bottom: 8px;
    }

    .book-chapter-number {
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 9px;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: #8c6943;
      font-weight: 600;
      display: block;
    }

    .book-chapter-title {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 15.5px;
      font-weight: 700;
      color: #1a1410;
      letter-spacing: 0.02em;
      margin-top: 1px;
    }

    .book-chapter-divider {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      margin: 4px auto;
      color: #a8947e;
      font-size: 8px;
    }

    .book-chapter-divider::before,
    .book-chapter-divider::after {
      content: '';
      width: 18px;
      height: 1px;
      background-color: #d8cdbe;
    }

    /* Refined Drop Cap */
    .book-drop-cap {
      float: left;
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 2.7em;
      line-height: 0.76;
      padding-top: 2px;
      padding-right: 6px;
      padding-bottom: 0px;
      color: #1a1410;
      font-weight: 700;
    }

    .book-small-caps {
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 9.5px;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 700;
      color: #2b221a;
    }

    /* Body Text & Indents (Book Typography) */
    .book-prose {
      text-align: justify;
      text-justify: inter-word;
      font-size: 11.5px;
      line-height: 1.58;
      color: #261f19;
    }

    .book-prose p + p {
      text-indent: 1.25em;
      margin-top: 0.25em;
    }

    /* Bottom Folio */
    .book-folio {
      text-align: center;
      font-family: 'Cormorant Garamond', Georgia, serif;
      font-size: 10.5px;
      font-style: italic;
      color: #857566;
      border-top: 1px solid #e5dcce;
      padding-top: 4px;
      margin-top: 6px;
      letter-spacing: 0.08em;
    }

    .page-turn-overlay {
      position: absolute;
      inset: 0;
      cursor: pointer;
      z-index: 30;
    }

    #starsCanvas {
      position: fixed;
      inset: 0;
      pointer-events: none;
      z-index: 1;
    }

    @media (max-width: 640px) {
      :root {
        --book-h: min(72vh, 520px);
        --book-w: calc(var(--book-h) * (5.5 / 8.5));
      }
      .book-paper { padding: 0.9rem 1rem; }
      .book-prose { font-size: 10.5px; line-height: 1.5; }
    }
  </style>
</head>
<body class="text-slate-100">

  <canvas id="starsCanvas"></canvas>

  <!-- Interactive 3D Book Stage -->
  <main class="relative z-10 flex-1 flex flex-col items-center justify-center p-2 sm:p-4 overflow-hidden">
    <div id="turnNotice" class="font-ui text-[11px] uppercase tracking-widest text-amber-200/80 mb-2 flex items-center space-x-2 animate-pulse flex-shrink-0">
      <i data-lucide="hand" class="w-3.5 h-3.5"></i>
      <span>Click any page edge or press &rarr; to turn &bull; End cover flips to start</span>
    </div>

    <div class="scene-3d">
      <div id="book" class="book-core">

        <!-- SHEET 0: FRONT COVER & TITLE PAGE -->
        <div class="sheet" id="sheet-0" style="z-index: 10;">
          <!-- Front Cover -->
          <div class="sheet-face front bg-[#0a0a0f] text-white flex flex-col justify-between shadow-2xl overflow-hidden group">
            <img src="/assets/covers/journey.png" alt="Survival of the Species: The Journey" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none" style="border-radius: 3px 12px 12px 3px;">
            <div class="book-spine-crease"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-r from-black/40 via-transparent to-black/20"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>

            <div class="relative z-10 p-4 mt-auto text-center pointer-events-none">
              <span class="inline-flex items-center space-x-1.5 px-3.5 py-1 rounded-full bg-black/80 backdrop-blur-md border border-white/20 text-[10px] text-white uppercase tracking-wider font-semibold shadow-lg">
                <span>Click Cover to Open</span> <i data-lucide="arrow-right" class="w-3.5 h-3.5 ml-1"></i>
              </span>
            </div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 1 (Verso): Title Page / Colophon -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="text-center pt-3">
    <span class="font-cinzel text-[8.5px] tracking-[0.25em] uppercase text-sky-800 font-semibold block">The Science Fiction Epic</span>
    <h1 class="font-playfair text-[19px] sm:text-[21px] font-extrabold text-[#1a1410] tracking-wide mt-1.5">
      SURVIVAL OF THE SPECIES
    </h1>
    <p class="font-playfair text-[12.5px] italic text-[#3b4d5c] mt-0.5">Book Two &bull; The Journey</p>
    <div class="flex items-center justify-center my-2 space-x-2 text-[#9db2c2]">
      <span class="h-px w-6 bg-[#beced8]"></span>
      <span class="text-[9px]">✦</span>
      <span class="h-px w-6 bg-[#beced8]"></span>
    </div>
    <p class="font-cinzel text-[9.5px] tracking-[0.2em] uppercase text-[#233138] font-bold">By Suresh Gupta</p>
  </div>
  
  <div class="my-3 text-center">
    <div class="w-10 h-10 mx-auto rounded-full border border-sky-800/20 bg-sky-900/5 flex items-center justify-center">
      <i data-lucide="orbit" class="w-5 h-5 text-sky-800"></i>
    </div>
    <span class="font-cinzel text-[7.5px] uppercase tracking-[0.25em] text-[#667a8c] mt-1 block">First Edition</span>
  </div>

  <div class="text-center text-[9px] font-ui text-[#5c6d7a] space-y-0.5 mt-2">
    <p class="font-semibold uppercase tracking-wider text-[#2c3b4a]">American Author Hub Publishing</p>
    <p>New York &bull; London &bull; Toronto</p>
    <p class="text-[8px] text-[#7d8f9c]">Library of Congress Cataloging-in-Publication Data</p>
    <p class="text-[8px] text-[#7d8f9c]">Copyright &copy; 2026 Suresh Gupta. All rights reserved.</p>
  </div>
</div>
<div class="book-folio">— i —</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 1: PAGES 2 & 3 -->
        <div class="sheet" id="sheet-1" style="z-index: 9;">
          <!-- Page 2 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>The Journey</span>
    <span>Contents &amp; Trajectory</span>
  </div>

  <div class="p-2 my-1 rounded border border-sky-900/15 bg-sky-900/5 text-center">
    <p class="font-playfair text-[10.5px] italic text-[#2b3a4a] leading-snug">
      "We leave behind our cradle, not because we have conquered it, but because we must navigate the great void to endure."
    </p>
  </div>

  <div class="book-chapter-head mt-2">
    <span class="book-chapter-number">Table of Contents</span>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="font-ui text-[9.5px] text-[#27353d] space-y-1.5 px-1">
    <div class="flex items-baseline justify-between font-semibold">
      <span>PREFACE &bull; The Long Night of Motion</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">6</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER I &bull; Breaking the Ancient Orbit</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">9</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER II &bull; The Debris Crucible</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">28</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER III &bull; Toroidal Arks &amp; Bernal Spheres</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">52</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER IV &bull; The Lunar Shield Halo</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">76</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER V &bull; The Mars Perimeter</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">104</span>
    </div>
  </div>
</div>
<div class="book-folio">2</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 3 (Verso) -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="book-running-head">
    <span>Survival of the Species: The Journey</span>
    <span>Author's Preface</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Author's Note</span>
    <h2 class="book-chapter-title">The Long Night of Motion</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">I</span><span class="book-small-caps"> have always been</span> more interested in what happens after the warning than the warning itself. <em>Survival of the Species: Our Sun</em> was about the moment humanity realized the sky was collapsing. <em>The Journey</em> is about the long, cinematic ordeal of moving an entire world.
    </p>
    <p>
      I did not want to write a sequel about easy heroism. When a planet must break its orbit and drift across millions of miles of empty black, politics and slogans dissolve. What remains is physics, metal, and the quiet devotion of billions who may never see the destination.
    </p>
    <p>
      The Moon, shattered into a protective kinetic ring, now shields our fragile blue hull from asteroid storms. We are not arriving; we are enduring. And in that endurance lies everything noble about our kind.
    </p>
    <p class="text-right font-playfair italic font-bold text-[#18262d] pt-0.5 text-[10.5px]">
      &mdash; Suresh Gupta
    </p>
  </div>
</div>
<div class="book-folio">3</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 2: PAGES 4 & 5 -->
        <div class="sheet" id="sheet-2" style="z-index: 8;">
          <!-- Page 4 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>The Odyssey Begins</span>
    <span>Chapter One</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Chapter One</span>
    <h2 class="book-chapter-title">Breaking the Ancient Orbit</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">T</span><span class="book-small-caps">he firing of the</span> equatorial ion thrusters was felt not as a rumble, but as a subtle shift in the weight of the human heart. Earth had slipped the celestial mooring it had held for four and a half billion years.
    </p>
    <p>
      In the Geneva command complex, Charles Renier stood motionless before the immense planetary trajectory projection. Ben Stafford and Yoko Tomasu monitored real-time telemetry from lunar orbit. The blue sphere was accelerating outwards, carving a vast elliptical corridor past Mars.
    </p>
    <p>
      Antonio Guterres, his voice echoing across every surviving broadcast network, addressed billions looking up at a slowly shrinking sun: <em>"We leave behind our cradle, not out of fear, but in sacred commitment to the tomorrow of our species."</em>
    </p>
  </div>
</div>
<div class="book-folio">4</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 5 (Verso) -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="book-running-head">
    <span>The Asteroid Belt</span>
    <span>Chapter Two</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Chapter Two</span>
    <h2 class="book-chapter-title">The Debris Crucible</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">B</span><span class="book-small-caps">eyond Mars lay the</span> supreme danger: the Asteroid Belt. Millions of jagged boulders and iron monoliths drifted across humanity’s path like floating reefs in a pitch-black ocean.
    </p>
    <p>
      Ahead of Earth's atmosphere, the lunar debris ring—formed when the Moon was fractured by kinetic charges—glowed like a halo of powdered diamond. Micrometeorites struck the barrier at thirty kilometers per second, sparkling harmlessly in silent flashes of incandescent plasma.
    </p>
    <p>
      Above the clouds, colossal Toroidal Arks and Bernal Spheres maintained escort positions, their solar mirrors reflecting the dimming rays of the retreating sun to power the subterranean agrarian domes below.
    </p>
  </div>
</div>
<div class="book-folio">5</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 3: PAGE 6 & REAL BACK COVER -->
        <div class="sheet" id="sheet-3" style="z-index: 7;">
          <!-- Page 6 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>Survival of the Species</span>
    <span>The Continuing Saga</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">The Journey Continues</span>
    <h2 class="book-chapter-title">Toward the Outer Rim</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="space-y-1.5 font-ui text-[9.5px] text-[#27353d]">
    <div class="p-1.5 rounded border border-sky-800/25 bg-sky-950/5">
      <span class="font-cinzel text-[10px] font-bold text-sky-900 block">The Unprecedented Migration</span>
      <p class="text-[#455a64] mt-0.5 leading-snug">
        "We are not trying to propel Earth to another galaxy in a single generation. All we need to do is match our distance to the expanding corona, preserving the delicate balance that allows life to breathe."
      </p>
    </div>

    <div class="p-1.5 rounded border border-slate-300 bg-white/50 text-center">
      <span class="font-ui text-[9px] text-slate-600 block">Preview of Book III &bull; <em>The Arrival</em></span>
      <p class="text-slate-800 text-[11px] font-serif italic mt-0.5">Where humanity discovers that survival is only the prologue to living.</p>
    </div>
  </div>

  <div class="mt-2.5 p-1.5 rounded border border-[#beced8] text-center bg-[#f0f5fa]">
    <span class="font-cinzel text-[8.5px] uppercase tracking-wider text-[#2c3b4a] font-bold block">Turn page to view full back cover &rarr;</span>
  </div>
</div>
<div class="book-folio">6</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- REAL BACK COVER (Verso on flip) -->
          <div class="sheet-face back bg-[#0a0a0f] text-white flex flex-col justify-between shadow-2xl overflow-hidden group">
            <img src="/assets/covers/back/journey-back.png" alt="Survival of the Species: The Journey Back Cover" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none" style="border-radius: 12px 3px 3px 12px;">
            <div class="book-spine-crease-right"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-l from-black/40 via-transparent to-black/20"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/55 via-transparent to-transparent"></div>

            <div class="relative z-10 p-4 mt-auto text-center pointer-events-none">
              <button id="backCoverRestartBtn" class="pointer-events-auto inline-flex items-center space-x-1.5 px-3.5 py-1.5 rounded-full bg-black/85 hover:bg-black text-amber-200 border border-white/20 text-[10px] uppercase tracking-wider font-semibold shadow-xl transition cursor-pointer">
                <i data-lucide="rotate-ccw" class="w-3.5 h-3.5 mr-1 text-amber-300"></i>
                <span>Click to Flip to Start</span>
              </button>
            </div>
            <div class="page-turn-overlay" id="backCoverOverlay"></div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <!-- Reader Bottom Navigation Bar -->
  <footer class="relative z-20 bg-black/75 backdrop-blur-md border-t border-white/10 px-4 py-2 flex items-center justify-between text-xs font-ui flex-shrink-0">
    <div class="flex items-center space-x-2">
      <button id="prevBtn" class="px-3 py-1 rounded-lg bg-white/10 hover:bg-white/20 text-white disabled:opacity-30 disabled:pointer-events-none transition flex items-center space-x-1">
        <i data-lucide="chevron-left" class="w-3.5 h-3.5"></i>
        <span class="hidden sm:inline">Previous</span>
      </button>
      <button id="nextBtn" class="px-3 py-1 rounded-lg bg-amber-600/80 hover:bg-amber-600 text-white disabled:opacity-30 disabled:pointer-events-none transition flex items-center space-x-1">
        <span class="hidden sm:inline">Next</span>
        <i data-lucide="chevron-right" class="w-4 h-4"></i>
      </button>
    </div>

    <div class="flex items-center space-x-3">
      <span id="pageLabel" class="text-amber-200/90 font-medium tracking-wide text-[11px]">Cover &bull; 0 / 4</span>
      <div id="dotIndicators" class="flex items-center space-x-1.5"></div>
    </div>

    <div class="text-[10.5px] text-slate-400 hidden md:block tracking-wider">
      Use <kbd class="px-1.5 py-0.5 rounded bg-white/10 text-white font-mono text-[9.5px]">Space</kbd> or <kbd class="px-1.5 py-0.5 rounded bg-white/10 text-white font-mono text-[9.5px]">&rarr;</kbd> to turn pages
    </div>
  </footer>

  <script>
    const sheets = [
      document.getElementById('sheet-0'),
      document.getElementById('sheet-1'),
      document.getElementById('sheet-2'),
      document.getElementById('sheet-3')
    ];

    const book = document.getElementById('book');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const pageLabel = document.getElementById('pageLabel');
    const dotContainer = document.getElementById('dotIndicators');
    const turnNotice = document.getElementById('turnNotice');

    let currentSheet = 0;
    const totalSheets = sheets.length;

    function getOpenScale() {
      const bookW = book.offsetWidth || (window.innerHeight * 0.72 * (5.5 / 8.5));
      const spreadW = bookW * 2;
      const availW = window.innerWidth - 20; // 10px safe margin on both sides
      if (spreadW > availW) {
        return Math.min(1, Math.max(0.35, availW / spreadW));
      }
      return 1;
    }

    function renderBook() {
      sheets.forEach((sheet, idx) => {
        sheet.style.transform = '';
        if (idx < currentSheet) {
          sheet.classList.add('flipped');
          sheet.style.zIndex = idx + 1;
        } else {
          sheet.classList.remove('flipped');
          sheet.style.zIndex = totalSheets - idx;
        }
      });

      if (currentSheet === 0) {
        // Front Cover: single closed book centered
        book.style.transform = 'translateX(0%) scale(1)';
        pageLabel.textContent = 'Cover • 0 / ' + totalSheets;
        turnNotice.style.opacity = '1';
      } else if (currentSheet === totalSheets) {
        // Back Cover: single closed book centered, fully covering prior pages
        book.style.transform = 'translateX(100%) scale(1)';
        pageLabel.textContent = 'Back Cover • ' + totalSheets + ' / ' + totalSheets;
        turnNotice.style.opacity = '0';
        sheets[totalSheets - 1].style.zIndex = 100;
      } else {
        // Open two-page spread: centered on spine, scaled on mobile so it never cuts off
        const openScale = getOpenScale();
        book.style.transform = `translateX(50%) scale(${openScale})`;
        pageLabel.textContent = `Pages ${currentSheet * 2 - 1}-${currentSheet * 2} • ${currentSheet} / ${totalSheets}`;
        turnNotice.style.opacity = '0';
      }

      prevBtn.disabled = (currentSheet === 0);
      nextBtn.disabled = (currentSheet === totalSheets);
      buildDots();
    }

    function buildDots() {
      dotContainer.innerHTML = '';
      for (let i = 0; i <= totalSheets; i++) {
        const dot = document.createElement('button');
        dot.className = `w-2 h-2 rounded-full transition-all ${i === currentSheet ? 'bg-amber-400 w-5' : 'bg-white/30 hover:bg-white/50'}`;
        dot.onclick = () => jumpToSheet(i);
        dotContainer.appendChild(dot);
      }
    }

    function turnNext() {
      if (currentSheet < totalSheets) {
        currentSheet++;
        renderBook();
      }
    }

    function turnPrev() {
      if (currentSheet > 0) {
        currentSheet--;
        renderBook();
      }
    }

    function jumpToSheet(index) {
      currentSheet = Math.max(0, Math.min(totalSheets, index));
      renderBook();
    }

    // Sheet click triggers
    sheets.forEach((sheet, idx) => {
      const overlays = sheet.querySelectorAll('.page-turn-overlay');
      overlays.forEach(overlay => {
        overlay.addEventListener('click', (e) => {
          e.stopPropagation();
          if (overlay.id === 'backCoverOverlay') {
            jumpToSheet(0);
            return;
          }
          if (idx < currentSheet) {
            turnPrev();
          } else {
            turnNext();
          }
        });
      });
    });

    // Back cover restart handlers
    const backCoverBtn = document.getElementById('backCoverRestartBtn');
    if (backCoverBtn) {
      backCoverBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        jumpToSheet(0);
      });
    }

    prevBtn.addEventListener('click', turnPrev);
    nextBtn.addEventListener('click', turnNext);

    window.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowRight' || e.key === ' ') {
        e.preventDefault();
        if (currentSheet === totalSheets) jumpToSheet(0);
        else turnNext();
      } else if (e.key === 'ArrowLeft') {
        e.preventDefault();
        turnPrev();
      }
    });

    window.addEventListener('resize', () => {
      renderBook();
    });

    // Stars background effect
    (function initStars() {
      const canvas = document.getElementById('starsCanvas');
      if (!canvas) return;
      const ctx = canvas.getContext('2d');
      let w = canvas.width = window.innerWidth;
      let h = canvas.height = window.innerHeight;

      const stars = Array.from({ length: 80 }, () => ({
        x: Math.random() * w,
        y: Math.random() * h,
        r: Math.random() * 1.4 + 0.3,
        alpha: Math.random() * 0.7 + 0.2,
        speed: Math.random() * 0.015 + 0.005
      }));

      function animate() {
        ctx.clearRect(0, 0, w, h);
        stars.forEach(s => {
          s.alpha += s.speed;
          if (s.alpha > 0.9 || s.alpha < 0.2) s.speed = -s.speed;
          ctx.fillStyle = `rgba(255, 255, 255, ${Math.abs(s.alpha)})`;
          ctx.beginPath();
          ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
          ctx.fill();
        });
        requestAnimationFrame(animate);
      }
      animate();

      window.addEventListener('resize', () => {
        w = canvas.width = window.innerWidth;
        h = canvas.height = window.innerHeight;
      });
    })();

    lucide.createIcons();
    renderBook();
  </script>
</body>
</html>
</template>

<template id="template-our_sun">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survival of the Species: Our Sun &mdash; American Author Hub</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Fonts: Cinzel & Playfair Display for headers, Cormorant Garamond for authentic book prose -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    :root {
      --book-h: min(76vh, 650px);
      --book-w: calc(var(--book-h) * (5.5 / 8.5));
    }

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    body {
      font-family: 'Cormorant Garamond', Georgia, serif;
      background: radial-gradient(ellipse at 50% 25%, #1c0a00 0%, #0d0400 55%, #050100 100%);
      user-select: none;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .font-ui { font-family: 'Montserrat', sans-serif; }
    .font-cinzel { font-family: 'Cinzel', serif; }
    .font-playfair { font-family: 'Playfair Display', Georgia, serif; }

    .scene-3d {
      perspective: 2600px;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      flex: 1;
      overflow: hidden;
    }

    .book-core {
      width: var(--book-w);
      height: var(--book-h);
      position: relative;
      transform-style: preserve-3d;
      transition: transform 0.85s cubic-bezier(0.25, 1, 0.5, 1);
      transform-origin: left center;
      transform: translateX(0%);
      flex-shrink: 0;
    }

    .sheet {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      width: 100% !important;
      height: 100% !important;
      transform-origin: left center;
      transform-style: preserve-3d;
      transition: transform 0.85s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .sheet.flipped {
      transform: rotateY(-180deg);
    }

    .sheet-face {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      right: 0 !important;
      bottom: 0 !important;
      width: 100% !important;
      height: 100% !important;
      box-sizing: border-box !important;
      margin: 0 !important;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
      overflow: hidden;
    }

    .sheet-face.front {
      z-index: 2;
      border-radius: 3px 12px 12px 3px;
    }

    .sheet-face.back {
      transform: rotateY(180deg);
      z-index: 1;
      border-radius: 12px 3px 3px 12px;
    }

    /* Authentic Book Paper Styling & 3D Book Shape */
    .book-paper {
      background-color: #faf6ee;
      color: #221c17;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden;
      line-height: 1.58;
    }

    /* Verso (Left Page) - Spine is on the Right */
    .book-paper-verso {
      padding: 1.25rem 1.65rem 0.85rem 1.25rem;
      background: linear-gradient(to right, #faf6ee 0%, #faf6ee 80%, #f0e8d6 95%, #dfd1b8 100%);
      box-shadow: inset -26px 0 28px -12px rgba(45, 25, 12, 0.3), -4px 6px 18px rgba(0,0,0,0.35);
      border-right: 1px solid rgba(80, 50, 20, 0.25);
    }

    /* Recto (Right Page) - Spine is on the Left */
    .book-paper-recto {
      padding: 1.25rem 1.25rem 0.85rem 1.65rem;
      background: linear-gradient(to left, #faf6ee 0%, #faf6ee 80%, #f0e8d6 95%, #dfd1b8 100%);
      box-shadow: inset 26px 0 28px -12px rgba(45, 25, 12, 0.3), 4px 6px 18px rgba(0,0,0,0.35);
      border-left: 1px solid rgba(80, 50, 20, 0.25);
    }

    /* Spine Creases on Covers */
    .book-spine-crease {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 28px;
      background: linear-gradient(to right, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.18) 25%, rgba(255,255,255,0.06) 28%, transparent 100%);
      pointer-events: none;
      z-index: 5;
    }

    .book-spine-crease-right {
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      width: 28px;
      background: linear-gradient(to left, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.18) 25%, rgba(255,255,255,0.06) 28%, transparent 100%);
      pointer-events: none;
      z-index: 5;
    }

    /* Refined Running Header (Book Standard) */
    .book-running-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 8px;
      font-weight: 600;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: #7a6a5a;
      padding-bottom: 4px;
      border-bottom: 1px solid #e0d6c7;
      margin-bottom: 8px;
    }

    /* Refined Chapter Headings */
    .book-chapter-head {
      text-align: center;
      margin-bottom: 8px;
    }

    .book-chapter-number {
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 9px;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: #8c6943;
      font-weight: 600;
      display: block;
    }

    .book-chapter-title {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 15.5px;
      font-weight: 700;
      color: #1a1410;
      letter-spacing: 0.02em;
      margin-top: 1px;
    }

    .book-chapter-divider {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      margin: 4px auto;
      color: #a8947e;
      font-size: 8px;
    }

    .book-chapter-divider::before,
    .book-chapter-divider::after {
      content: '';
      width: 18px;
      height: 1px;
      background-color: #d8cdbe;
    }

    /* Refined Drop Cap */
    .book-drop-cap {
      float: left;
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 2.7em;
      line-height: 0.76;
      padding-top: 2px;
      padding-right: 6px;
      padding-bottom: 0px;
      color: #1a1410;
      font-weight: 700;
    }

    .book-small-caps {
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 9.5px;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 700;
      color: #2b221a;
    }

    /* Body Text & Indents (Book Typography) */
    .book-prose {
      text-align: justify;
      text-justify: inter-word;
      font-size: 11.5px;
      line-height: 1.58;
      color: #261f19;
    }

    .book-prose p + p {
      text-indent: 1.25em;
      margin-top: 0.25em;
    }

    /* Bottom Folio */
    .book-folio {
      text-align: center;
      font-family: 'Cormorant Garamond', Georgia, serif;
      font-size: 10.5px;
      font-style: italic;
      color: #857566;
      border-top: 1px solid #e5dcce;
      padding-top: 4px;
      margin-top: 6px;
      letter-spacing: 0.08em;
    }

    .page-turn-overlay {
      position: absolute;
      inset: 0;
      cursor: pointer;
      z-index: 30;
    }

    #starsCanvas {
      position: fixed;
      inset: 0;
      pointer-events: none;
      z-index: 1;
    }

    @media (max-width: 640px) {
      :root {
        --book-h: min(72vh, 520px);
        --book-w: calc(var(--book-h) * (5.5 / 8.5));
      }
      .book-paper { padding: 0.9rem 1rem; }
      .book-prose { font-size: 10.5px; line-height: 1.5; }
    }
  </style>
</head>
<body class="text-slate-100">

  <canvas id="starsCanvas"></canvas>

  <!-- Interactive 3D Book Stage -->
  <main class="relative z-10 flex-1 flex flex-col items-center justify-center p-2 sm:p-4 overflow-hidden">
    <div id="turnNotice" class="font-ui text-[11px] uppercase tracking-widest text-amber-200/80 mb-2 flex items-center space-x-2 animate-pulse flex-shrink-0">
      <i data-lucide="hand" class="w-3.5 h-3.5"></i>
      <span>Click any page edge or press &rarr; to turn &bull; End cover flips to start</span>
    </div>

    <div class="scene-3d">
      <div id="book" class="book-core">

        <!-- SHEET 0: FRONT COVER & TITLE PAGE -->
        <div class="sheet" id="sheet-0" style="z-index: 10;">
          <!-- Front Cover -->
          <div class="sheet-face front bg-[#0a0a0f] text-white flex flex-col justify-between shadow-2xl overflow-hidden group">
            <img src="/assets/covers/our-sun.jpg" alt="Survival of the Species: Our Sun" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none" style="border-radius: 3px 12px 12px 3px;">
            <div class="book-spine-crease"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-r from-black/40 via-transparent to-black/20"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>

            <div class="relative z-10 p-4 mt-auto text-center pointer-events-none">
              <span class="inline-flex items-center space-x-1.5 px-3.5 py-1 rounded-full bg-black/80 backdrop-blur-md border border-white/20 text-[10px] text-white uppercase tracking-wider font-semibold shadow-lg">
                <span>Click Cover to Open</span> <i data-lucide="arrow-right" class="w-3.5 h-3.5 ml-1"></i>
              </span>
            </div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 1 (Verso): Title Page / Colophon -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="text-center pt-3">
    <span class="font-cinzel text-[8.5px] tracking-[0.25em] uppercase text-amber-800 font-semibold block">The Science Fiction Epic</span>
    <h1 class="font-playfair text-[19px] sm:text-[21px] font-extrabold text-[#1a1410] tracking-wide mt-1.5">
      SURVIVAL OF THE SPECIES
    </h1>
    <p class="font-playfair text-[12.5px] italic text-[#5c4a3b] mt-0.5">Book One &bull; Our Sun</p>
    <div class="flex items-center justify-center my-2 space-x-2 text-[#c2b29d]">
      <span class="h-px w-6 bg-[#d8cdbe]"></span>
      <span class="text-[9px]">✦</span>
      <span class="h-px w-6 bg-[#d8cdbe]"></span>
    </div>
    <p class="font-cinzel text-[9.5px] tracking-[0.2em] uppercase text-[#382d23] font-bold">By Suresh Gupta</p>
  </div>
  
  <div class="my-3 text-center">
    <div class="w-10 h-10 mx-auto rounded-full border border-amber-800/20 bg-amber-900/5 flex items-center justify-center">
      <i data-lucide="sun" class="w-5 h-5 text-amber-800"></i>
    </div>
    <span class="font-cinzel text-[7.5px] uppercase tracking-[0.25em] text-[#8c7866] mt-1 block">First Edition</span>
  </div>

  <div class="text-center text-[9px] font-ui text-[#7a6b5c] space-y-0.5 mt-2">
    <p class="font-semibold uppercase tracking-wider text-[#4a3b2c]">American Author Hub Publishing</p>
    <p>New York &bull; London &bull; Toronto</p>
    <p class="text-[8px] text-[#9c8d7d]">Library of Congress Cataloging-in-Publication Data</p>
    <p class="text-[8px] text-[#9c8d7d]">Copyright &copy; 2026 Suresh Gupta. All rights reserved.</p>
  </div>
</div>
<div class="book-folio">— i —</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 1: PAGES 2 & 3 -->
        <div class="sheet" id="sheet-1" style="z-index: 9;">
          <!-- Page 2 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>Survival of the Species</span>
    <span>Contents &amp; Dedication</span>
  </div>

  <div class="p-2 my-1 rounded border border-amber-900/15 bg-amber-900/5 text-center">
    <p class="font-playfair text-[10.5px] italic text-[#4a3a2b] leading-snug">
      "For those who look to the heavens not with complacency, but with the quiet courage to measure the truth and preserve humanity against all odds."
    </p>
  </div>

  <div class="book-chapter-head mt-2">
    <span class="book-chapter-number">Table of Contents</span>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="font-ui text-[9.5px] text-[#3d3227] space-y-1.5 px-1">
    <div class="flex items-baseline justify-between font-semibold">
      <span>PREFACE &bull; The Deadline Set by Nature</span>
      <span class="border-b border-dotted border-[#c8bcae] flex-1 mx-2"></span>
      <span class="font-serif">6</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER I &bull; The Expanding Sun Bombshell</span>
      <span class="border-b border-dotted border-[#c8bcae] flex-1 mx-2"></span>
      <span class="font-serif">8</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER II &bull; The Thirteen Nations Summit</span>
      <span class="border-b border-dotted border-[#c8bcae] flex-1 mx-2"></span>
      <span class="font-serif">24</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER III &bull; Solar Telemetry &amp; Mercury</span>
      <span class="border-b border-dotted border-[#c8bcae] flex-1 mx-2"></span>
      <span class="font-serif">45</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER IV &bull; The Orbital Shift Equations</span>
      <span class="border-b border-dotted border-[#c8bcae] flex-1 mx-2"></span>
      <span class="font-serif">68</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER V &bull; The Global Evacuation Doctrine</span>
      <span class="border-b border-dotted border-[#c8bcae] flex-1 mx-2"></span>
      <span class="font-serif">96</span>
    </div>
  </div>
</div>
<div class="book-folio">2</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 3 (Verso) -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="book-running-head">
    <span>Survival of the Species: Our Sun</span>
    <span>Author's Preface</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Author's Note</span>
    <h2 class="book-chapter-title">The Deadline Set by Nature</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">T</span><span class="book-small-caps">his novel began with</span> a number I could not stop turning over: a measurement so small that most instruments would dismiss it as noise, and so large, if true, that it would outlast every government, every currency, every argument human beings have ever had with one another.
    </p>
    <p>
      <em>Survival of the Species</em> asks what happens when the deadline for those arguments is finally, undeniably, set by something other than us.
    </p>
    <p>
      I did not want to write a book with a villain. There is no invading fleet, no corrupt syndicate to rally against. The threat is the sun itself—indifferent and colossal. The real drama is watching thirteen world leaders, a dozen faiths, and several billion individual self-interests try to organize themselves against something that cannot be negotiated with, bribed, or voted out of office.
    </p>
    <p class="text-right font-playfair italic font-bold text-[#2d2218] pt-0.5 text-[10.5px]">
      &mdash; Suresh Gupta
    </p>
  </div>
</div>
<div class="book-folio">3</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 2: PAGES 4 & 5 -->
        <div class="sheet" id="sheet-2" style="z-index: 8;">
          <!-- Page 4 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>The Global Warming Symposium</span>
    <span>Chapter One</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Chapter One</span>
    <h2 class="book-chapter-title">The Expanding Sun Bombshell</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">A</span><span class="book-small-caps">t the December 2011</span> Global Warming Symposium, famed climatologist Charles Renier emerged from years of solitude alongside two persistent college seniors: Ben Stafford and Yoko Tomasu.
    </p>

    <div class="p-2 my-1 rounded border border-amber-800/20 bg-amber-950/5 text-center">
      <p class="font-playfair text-[11px] italic font-bold text-[#3d2716] leading-snug">
        "Ladies and Gentlemen, we don’t have five billion years, or four, three, two, or even one. The Sun is expanding."
      </p>
    </div>

    <p>
      Ben and Yoko's solar telemetry proved that while distances between Earth and neighboring planets remained constant, solar distance was shortening—heralding an unprecedented coronal expansion.
    </p>
    <p>
      Detractors shouted that our sun was only halfway through its cycle, touting four billion years of security. But the spectroscopic measurements did not lie: the outer corona had begun an irreversible surge outward.
    </p>
  </div>
</div>
<div class="book-folio">4</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 5 (Verso) -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="book-running-head">
    <span>The Summit of Thirteen</span>
    <span>Chapter Two</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Chapter Two</span>
    <h2 class="book-chapter-title">The Planetary Ultimatum</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">W</span><span class="book-small-caps">ithin hours, panic</span> rippled across diplomatic channels. UN Secretary-General Ban Ki-moon convened an emergency closed-door summit with the leaders of thirteen nations: the United States, United Kingdom, Russia, Germany, China, Japan, Indonesia, India, the UAE, Brazil, France, South Africa, and Canada.
    </p>
    <p>
      In that soundproof chamber beneath Lake Geneva, political divisions collapsed before physics. The oceans could not be shielded by mirrors alone; terrestrial temperatures would reach lethal thresholds before the century ended.
    </p>
    <p>
      The only viable salvation required a colossal collaborative endeavor never before conceived: shifting the orbit of Earth outward, synchronized with the expanding corona, to preserve humanity's cradle.
    </p>
  </div>
</div>
<div class="book-folio">5</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 3: PAGE 6 & REAL BACK COVER -->
        <div class="sheet" id="sheet-3" style="z-index: 7;">
          <!-- Page 6 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>Survival of the Species</span>
    <span>Trilogy Overview</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">The Grand Vision</span>
    <h2 class="book-chapter-title">The Three Volumes</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="space-y-1.5 font-ui text-[9.5px] text-[#3d3227]">
    <div class="p-1.5 rounded border border-amber-800/25 bg-amber-950/5">
      <span class="font-cinzel text-[10px] font-bold text-amber-900 block">Book I &bull; Our Sun</span>
      <p class="text-[#594736] mt-0.5 leading-snug">The discovery of coronal expansion, the UN summit, and the historic mobilization of planet Earth.</p>
    </div>

    <div class="p-1.5 rounded border border-cyan-800/25 bg-cyan-950/5">
      <span class="font-cinzel text-[10px] font-bold text-cyan-900 block">Book II &bull; The Journey</span>
      <p class="text-[#455a64] mt-0.5 leading-snug">Earth breaking orbit past Mars, navigating the dangerous Asteroid Belt shielded by the lunar debris ring.</p>
    </div>

    <div class="p-1.5 rounded border border-indigo-800/25 bg-indigo-950/5">
      <span class="font-cinzel text-[10px] font-bold text-indigo-900 block">Book III &bull; The Arrival</span>
      <p class="text-[#4a3b69] mt-0.5 leading-snug">Reaching the outer perimeter and securing humanity's permanent refuge among the stars.</p>
    </div>
  </div>

  <div class="mt-2.5 p-1.5 rounded border border-[#d8cdbe] text-center bg-[#faf3e3]">
    <span class="font-cinzel text-[8.5px] uppercase tracking-wider text-[#684f37] font-bold block">Turn page to view full back cover &rarr;</span>
  </div>
</div>
<div class="book-folio">6</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- REAL BACK COVER (Verso on flip) -->
          <div class="sheet-face back bg-[#0a0a0f] text-white flex flex-col justify-between shadow-2xl overflow-hidden group">
            <img src="/assets/covers/back/our-sun-back.png" alt="Survival of the Species: Our Sun Back Cover" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none" style="border-radius: 12px 3px 3px 12px;">
            <div class="book-spine-crease-right"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-l from-black/40 via-transparent to-black/20"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/55 via-transparent to-transparent"></div>

            <div class="relative z-10 p-4 mt-auto text-center pointer-events-none">
              <button id="backCoverRestartBtn" class="pointer-events-auto inline-flex items-center space-x-1.5 px-3.5 py-1.5 rounded-full bg-black/85 hover:bg-black text-amber-200 border border-white/20 text-[10px] uppercase tracking-wider font-semibold shadow-xl transition cursor-pointer">
                <i data-lucide="rotate-ccw" class="w-3.5 h-3.5 mr-1 text-amber-300"></i>
                <span>Click to Flip to Start</span>
              </button>
            </div>
            <div class="page-turn-overlay" id="backCoverOverlay"></div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <!-- Reader Bottom Navigation Bar -->
  <footer class="relative z-20 bg-black/75 backdrop-blur-md border-t border-white/10 px-4 py-2 flex items-center justify-between text-xs font-ui flex-shrink-0">
    <div class="flex items-center space-x-2">
      <button id="prevBtn" class="px-3 py-1 rounded-lg bg-white/10 hover:bg-white/20 text-white disabled:opacity-30 disabled:pointer-events-none transition flex items-center space-x-1">
        <i data-lucide="chevron-left" class="w-3.5 h-3.5"></i>
        <span class="hidden sm:inline">Previous</span>
      </button>
      <button id="nextBtn" class="px-3 py-1 rounded-lg bg-amber-600/80 hover:bg-amber-600 text-white disabled:opacity-30 disabled:pointer-events-none transition flex items-center space-x-1">
        <span class="hidden sm:inline">Next</span>
        <i data-lucide="chevron-right" class="w-4 h-4"></i>
      </button>
    </div>

    <div class="flex items-center space-x-3">
      <span id="pageLabel" class="text-amber-200/90 font-medium tracking-wide text-[11px]">Cover &bull; 0 / 4</span>
      <div id="dotIndicators" class="flex items-center space-x-1.5"></div>
    </div>

    <div class="text-[10.5px] text-slate-400 hidden md:block tracking-wider">
      Use <kbd class="px-1.5 py-0.5 rounded bg-white/10 text-white font-mono text-[9.5px]">Space</kbd> or <kbd class="px-1.5 py-0.5 rounded bg-white/10 text-white font-mono text-[9.5px]">&rarr;</kbd> to turn pages
    </div>
  </footer>

  <script>
    const sheets = [
      document.getElementById('sheet-0'),
      document.getElementById('sheet-1'),
      document.getElementById('sheet-2'),
      document.getElementById('sheet-3')
    ];

    const book = document.getElementById('book');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const pageLabel = document.getElementById('pageLabel');
    const dotContainer = document.getElementById('dotIndicators');
    const turnNotice = document.getElementById('turnNotice');

    let currentSheet = 0;
    const totalSheets = sheets.length;

    function getOpenScale() {
      const bookW = book.offsetWidth || (window.innerHeight * 0.72 * (5.5 / 8.5));
      const spreadW = bookW * 2;
      const availW = window.innerWidth - 20; // 10px safe margin on both sides
      if (spreadW > availW) {
        return Math.min(1, Math.max(0.35, availW / spreadW));
      }
      return 1;
    }

    function renderBook() {
      sheets.forEach((sheet, idx) => {
        sheet.style.transform = '';
        if (idx < currentSheet) {
          sheet.classList.add('flipped');
          sheet.style.zIndex = idx + 1;
        } else {
          sheet.classList.remove('flipped');
          sheet.style.zIndex = totalSheets - idx;
        }
      });

      if (currentSheet === 0) {
        // Front Cover: single closed book centered
        book.style.transform = 'translateX(0%) scale(1)';
        pageLabel.textContent = 'Cover • 0 / ' + totalSheets;
        turnNotice.style.opacity = '1';
      } else if (currentSheet === totalSheets) {
        // Back Cover: single closed book centered, fully covering prior pages
        book.style.transform = 'translateX(100%) scale(1)';
        pageLabel.textContent = 'Back Cover • ' + totalSheets + ' / ' + totalSheets;
        turnNotice.style.opacity = '0';
        sheets[totalSheets - 1].style.zIndex = 100;
      } else {
        // Open two-page spread: centered on spine, scaled on mobile so it never cuts off
        const openScale = getOpenScale();
        book.style.transform = `translateX(50%) scale(${openScale})`;
        pageLabel.textContent = `Pages ${currentSheet * 2 - 1}-${currentSheet * 2} • ${currentSheet} / ${totalSheets}`;
        turnNotice.style.opacity = '0';
      }

      prevBtn.disabled = (currentSheet === 0);
      nextBtn.disabled = (currentSheet === totalSheets);
      buildDots();
    }

    function buildDots() {
      dotContainer.innerHTML = '';
      for (let i = 0; i <= totalSheets; i++) {
        const dot = document.createElement('button');
        dot.className = `w-2 h-2 rounded-full transition-all ${i === currentSheet ? 'bg-amber-400 w-5' : 'bg-white/30 hover:bg-white/50'}`;
        dot.onclick = () => jumpToSheet(i);
        dotContainer.appendChild(dot);
      }
    }

    function turnNext() {
      if (currentSheet < totalSheets) {
        currentSheet++;
        renderBook();
      }
    }

    function turnPrev() {
      if (currentSheet > 0) {
        currentSheet--;
        renderBook();
      }
    }

    function jumpToSheet(index) {
      currentSheet = Math.max(0, Math.min(totalSheets, index));
      renderBook();
    }

    // Sheet click triggers
    sheets.forEach((sheet, idx) => {
      const overlays = sheet.querySelectorAll('.page-turn-overlay');
      overlays.forEach(overlay => {
        overlay.addEventListener('click', (e) => {
          e.stopPropagation();
          if (overlay.id === 'backCoverOverlay') {
            jumpToSheet(0);
            return;
          }
          if (idx < currentSheet) {
            turnPrev();
          } else {
            turnNext();
          }
        });
      });
    });

    // Back cover restart handlers
    const backCoverBtn = document.getElementById('backCoverRestartBtn');
    if (backCoverBtn) {
      backCoverBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        jumpToSheet(0);
      });
    }

    prevBtn.addEventListener('click', turnPrev);
    nextBtn.addEventListener('click', turnNext);

    window.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowRight' || e.key === ' ') {
        e.preventDefault();
        if (currentSheet === totalSheets) jumpToSheet(0);
        else turnNext();
      } else if (e.key === 'ArrowLeft') {
        e.preventDefault();
        turnPrev();
      }
    });

    window.addEventListener('resize', () => {
      renderBook();
    });

    // Stars background effect
    (function initStars() {
      const canvas = document.getElementById('starsCanvas');
      if (!canvas) return;
      const ctx = canvas.getContext('2d');
      let w = canvas.width = window.innerWidth;
      let h = canvas.height = window.innerHeight;

      const stars = Array.from({ length: 80 }, () => ({
        x: Math.random() * w,
        y: Math.random() * h,
        r: Math.random() * 1.4 + 0.3,
        alpha: Math.random() * 0.7 + 0.2,
        speed: Math.random() * 0.015 + 0.005
      }));

      function animate() {
        ctx.clearRect(0, 0, w, h);
        stars.forEach(s => {
          s.alpha += s.speed;
          if (s.alpha > 0.9 || s.alpha < 0.2) s.speed = -s.speed;
          ctx.fillStyle = `rgba(255, 255, 255, ${Math.abs(s.alpha)})`;
          ctx.beginPath();
          ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
          ctx.fill();
        });
        requestAnimationFrame(animate);
      }
      animate();

      window.addEventListener('resize', () => {
        w = canvas.width = window.innerWidth;
        h = canvas.height = window.innerHeight;
      });
    })();

    lucide.createIcons();
    renderBook();
  </script>
</body>
</html>
</template>

<template id="template-saved_words">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Silent Words: What the Poems Didn't Say &mdash; American Author Hub</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Fonts: Cinzel & Playfair Display for headers, Cormorant Garamond for authentic book prose -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    :root {
      --book-h: min(76vh, 650px);
      --book-w: calc(var(--book-h) * (5.5 / 8.5));
    }

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    body {
      font-family: 'Cormorant Garamond', Georgia, serif;
      background: radial-gradient(ellipse at 50% 25%, #061a14 0%, #020d0a 55%, #010504 100%);
      user-select: none;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .font-ui { font-family: 'Montserrat', sans-serif; }
    .font-cinzel { font-family: 'Cinzel', serif; }
    .font-playfair { font-family: 'Playfair Display', Georgia, serif; }

    .scene-3d {
      perspective: 2600px;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      flex: 1;
      overflow: hidden;
    }

    .book-core {
      width: var(--book-w);
      height: var(--book-h);
      position: relative;
      transform-style: preserve-3d;
      transition: transform 0.85s cubic-bezier(0.25, 1, 0.5, 1);
      transform-origin: left center;
      transform: translateX(0%);
      flex-shrink: 0;
    }

    .sheet {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      width: 100% !important;
      height: 100% !important;
      transform-origin: left center;
      transform-style: preserve-3d;
      transition: transform 0.85s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .sheet.flipped {
      transform: rotateY(-180deg);
    }

    .sheet-face {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      right: 0 !important;
      bottom: 0 !important;
      width: 100% !important;
      height: 100% !important;
      box-sizing: border-box !important;
      margin: 0 !important;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
      overflow: hidden;
    }

    .sheet-face.front {
      z-index: 2;
      border-radius: 3px 12px 12px 3px;
    }

    .sheet-face.back {
      transform: rotateY(180deg);
      z-index: 1;
      border-radius: 12px 3px 3px 12px;
    }

    /* Authentic Book Paper Styling & 3D Book Shape */
    .book-paper {
      background-color: #faf6ee;
      color: #221c17;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden;
      line-height: 1.58;
    }

    /* Verso (Left Page) - Spine is on the Right */
    .book-paper-verso {
      padding: 1.25rem 1.65rem 0.85rem 1.25rem;
      background: linear-gradient(to right, #faf6ee 0%, #faf6ee 80%, #f0e8d6 95%, #dfd1b8 100%);
      box-shadow: inset -26px 0 28px -12px rgba(45, 25, 12, 0.3), -4px 6px 18px rgba(0,0,0,0.35);
      border-right: 1px solid rgba(80, 50, 20, 0.25);
    }

    /* Recto (Right Page) - Spine is on the Left */
    .book-paper-recto {
      padding: 1.25rem 1.25rem 0.85rem 1.65rem;
      background: linear-gradient(to left, #faf6ee 0%, #faf6ee 80%, #f0e8d6 95%, #dfd1b8 100%);
      box-shadow: inset 26px 0 28px -12px rgba(45, 25, 12, 0.3), 4px 6px 18px rgba(0,0,0,0.35);
      border-left: 1px solid rgba(80, 50, 20, 0.25);
    }

    /* Spine Creases on Covers */
    .book-spine-crease {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 28px;
      background: linear-gradient(to right, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.18) 25%, rgba(255,255,255,0.06) 28%, transparent 100%);
      pointer-events: none;
      z-index: 5;
    }

    .book-spine-crease-right {
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      width: 28px;
      background: linear-gradient(to left, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.18) 25%, rgba(255,255,255,0.06) 28%, transparent 100%);
      pointer-events: none;
      z-index: 5;
    }

    /* Refined Running Header (Book Standard) */
    .book-running-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 8px;
      font-weight: 600;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: #7a6a5a;
      padding-bottom: 4px;
      border-bottom: 1px solid #e0d6c7;
      margin-bottom: 8px;
    }

    /* Refined Chapter Headings */
    .book-chapter-head {
      text-align: center;
      margin-bottom: 8px;
    }

    .book-chapter-number {
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 9px;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: #8c6943;
      font-weight: 600;
      display: block;
    }

    .book-chapter-title {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 15.5px;
      font-weight: 700;
      color: #1a1410;
      letter-spacing: 0.02em;
      margin-top: 1px;
    }

    .book-chapter-divider {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      margin: 4px auto;
      color: #a8947e;
      font-size: 8px;
    }

    .book-chapter-divider::before,
    .book-chapter-divider::after {
      content: '';
      width: 18px;
      height: 1px;
      background-color: #d8cdbe;
    }

    /* Refined Drop Cap */
    .book-drop-cap {
      float: left;
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 2.7em;
      line-height: 0.76;
      padding-top: 2px;
      padding-right: 6px;
      padding-bottom: 0px;
      color: #1a1410;
      font-weight: 700;
    }

    .book-small-caps {
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 9.5px;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 700;
      color: #2b221a;
    }

    /* Body Text & Indents (Book Typography) */
    .book-prose {
      text-align: justify;
      text-justify: inter-word;
      font-size: 11.5px;
      line-height: 1.58;
      color: #261f19;
    }

    .book-prose p + p {
      text-indent: 1.25em;
      margin-top: 0.25em;
    }

    /* Bottom Folio */
    .book-folio {
      text-align: center;
      font-family: 'Cormorant Garamond', Georgia, serif;
      font-size: 10.5px;
      font-style: italic;
      color: #857566;
      border-top: 1px solid #e5dcce;
      padding-top: 4px;
      margin-top: 6px;
      letter-spacing: 0.08em;
    }

    .page-turn-overlay {
      position: absolute;
      inset: 0;
      cursor: pointer;
      z-index: 30;
    }

    #starsCanvas {
      position: fixed;
      inset: 0;
      pointer-events: none;
      z-index: 1;
    }

    @media (max-width: 640px) {
      :root {
        --book-h: min(72vh, 520px);
        --book-w: calc(var(--book-h) * (5.5 / 8.5));
      }
      .book-paper { padding: 0.9rem 1rem; }
      .book-prose { font-size: 10.5px; line-height: 1.5; }
    }
  </style>
</head>
<body class="text-slate-100">

  <canvas id="starsCanvas"></canvas>

  <!-- Interactive 3D Book Stage -->
  <main class="relative z-10 flex-1 flex flex-col items-center justify-center p-2 sm:p-4 overflow-hidden">
    <div id="turnNotice" class="font-ui text-[11px] uppercase tracking-widest text-amber-200/80 mb-2 flex items-center space-x-2 animate-pulse flex-shrink-0">
      <i data-lucide="hand" class="w-3.5 h-3.5"></i>
      <span>Click any page edge or press &rarr; to turn &bull; End cover flips to start</span>
    </div>

    <div class="scene-3d">
      <div id="book" class="book-core">

        <!-- SHEET 0: FRONT COVER & TITLE PAGE -->
        <div class="sheet" id="sheet-0" style="z-index: 10;">
          <!-- Front Cover -->
          <div class="sheet-face front bg-[#0a0a0f] text-white flex flex-col justify-between shadow-2xl overflow-hidden group">
            <img src="/assets/covers/silent-words.png" alt="Silent Words: What the Poems Didn't Say" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none" style="border-radius: 3px 12px 12px 3px;">
            <div class="book-spine-crease"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-r from-black/40 via-transparent to-black/20"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>

            <div class="relative z-10 p-4 mt-auto text-center pointer-events-none">
              <span class="inline-flex items-center space-x-1.5 px-3.5 py-1 rounded-full bg-black/80 backdrop-blur-md border border-white/20 text-[10px] text-white uppercase tracking-wider font-semibold shadow-lg">
                <span>Click Cover to Open</span> <i data-lucide="arrow-right" class="w-3.5 h-3.5 ml-1"></i>
              </span>
            </div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 1 (Verso): Title Page / Colophon -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="text-center pt-3">
    <span class="font-cinzel text-[8.5px] tracking-[0.25em] uppercase text-emerald-800 font-semibold block">Poetry &amp; Memoir</span>
    <h1 class="font-playfair text-[19px] sm:text-[21px] font-extrabold text-[#1a1410] tracking-wide mt-1.5">
      SILENT WORDS
    </h1>
    <p class="font-playfair text-[12.5px] italic text-[#3b5c4a] mt-0.5">What the Poems Didn't Say</p>
    <div class="flex items-center justify-center my-2 space-x-2 text-[#9dc2b2]">
      <span class="h-px w-6 bg-[#bed8cd]"></span>
      <span class="text-[9px]">✦</span>
      <span class="h-px w-6 bg-[#bed8cd]"></span>
    </div>
    <p class="font-cinzel text-[9.5px] tracking-[0.2em] uppercase text-[#23382d] font-bold">By Crystal Rauch</p>
  </div>
  
  <div class="my-3 text-center">
    <div class="w-10 h-10 mx-auto rounded-full border border-emerald-800/20 bg-emerald-900/5 flex items-center justify-center">
      <i data-lucide="feather" class="w-5 h-5 text-emerald-800"></i>
    </div>
    <span class="font-cinzel text-[7.5px] uppercase tracking-[0.25em] text-[#668c78] mt-1 block">First Edition</span>
  </div>

  <div class="text-center text-[9px] font-ui text-[#5c7a6b] space-y-0.5 mt-2">
    <p class="font-semibold uppercase tracking-wider text-[#2c4a3b]">American Author Hub Publishing</p>
    <p>New York &bull; London &bull; Nashville</p>
    <p class="text-[8px] text-[#7d9c8d]">Library of Congress Cataloging-in-Publication Data</p>
    <p class="text-[8px] text-[#7d9c8d]">Copyright &copy; 2026 Crystal Rauch. All rights reserved.</p>
  </div>
</div>
<div class="book-folio">— i —</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 1: PAGES 2 & 3 -->
        <div class="sheet" id="sheet-1" style="z-index: 9;">
          <!-- Page 2 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>Silent Words</span>
    <span>Dedication &amp; Foreword</span>
  </div>

  <div class="p-2 my-1 rounded border border-emerald-900/15 bg-emerald-900/5 text-center">
    <p class="font-playfair text-[10.5px] italic text-[#2b4a3a] leading-snug">
      "To anyone who has ever swallowed their sorrow in silence, believing their pain had no name. Your words matter. Your healing is possible. Every broken chapter is leading you home."
    </p>
  </div>

  <div class="book-chapter-head mt-2">
    <span class="book-chapter-number">The Journey Within</span>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="font-ui text-[9.5px] text-[#273d32] space-y-1.5 px-1">
    <div class="flex items-baseline justify-between font-semibold">
      <span>AUTHOR'S NOTE &bull; Every Broken Chapter</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">6</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>PART I &bull; Early Echoes &amp; The Quiet Home</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">11</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>PART II &bull; Courtrooms, Custody &amp; Fear</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">34</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>PART III &bull; The Fragile Road to Sobriety</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">58</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>PART IV &bull; Motherhood, Rescued Souls &amp; Grace</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">86</span>
    </div>
  </div>
</div>
<div class="book-folio">2</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 3 (Verso) -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="book-running-head">
    <span>Silent Words: What the Poems Didn't Say</span>
    <span>Author's Note</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Author's Reflection</span>
    <h2 class="book-chapter-title">Every Broken Chapter Led Me Here</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">G</span><span class="book-small-caps">rowing up in a home</span> filled with hurt, uncertainty, and addiction, I learned early how to survive in silence. When you feel unheard, you begin to believe that silence is safety. For decades, the only place my deepest truths could breathe was on scraps of paper hidden in dresser drawers.
    </p>
    <p>
      These poems are not merely verses—they are the breadcrumbs of a woman walking out of deep darkness. From bitter custody battles to overcoming substance dependency, from debilitating agoraphobia to finding unconditional love in God and my family, this book is living proof that grace can rewrite any ending.
    </p>
    <p class="text-right font-playfair italic font-bold text-[#182d23] pt-0.5 text-[10.5px]">
      &mdash; Crystal Rauch
    </p>
  </div>
</div>
<div class="book-folio">3</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 2: PAGES 4 & 5 -->
        <div class="sheet" id="sheet-2" style="z-index: 8;">
          <!-- Page 4 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>The Voice in the Shadow</span>
    <span>Part One</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Selected Poems</span>
    <h2 class="book-chapter-title">The Girl Who Waited</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="text-center italic space-y-1.5 my-1 text-stone-800 text-[11px] leading-relaxed">
    <p>I learned to count the footsteps in the hall,</p>
    <p>To measure anger by the closing door,</p>
    <p>To tuck my prayers beneath the bedroom floor,</p>
    <p>And whisper promises when tears would fall.</p>
    <div class="flex items-center justify-center space-x-1 text-emerald-800/40 my-1">
      <span>&bull;</span><span>&bull;</span><span>&bull;</span>
    </div>
    <p>They thought the silence was an empty space,</p>
    <p>A quiet child who had no words to say—</p>
    <p>They never knew I saved them for the day</p>
    <p>When truth would wash the shadow from my face.</p>
  </div>
</div>
<div class="book-folio">4</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 5 (Verso) -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="book-running-head">
    <span>Rising into Grace</span>
    <span>Part Two</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Healing &amp; Full Circle</span>
    <h2 class="book-chapter-title">Her Child, My Child</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">R</span><span class="book-small-caps">ecovery did not happen</span> like a lightning strike; it came like dawn, slow and tender. Holding my child for the first time showed me the ferocious, healing power of pure love. Rescuing dogs with broken pasts taught me that love can mend what seemed permanently shattered.
    </p>
    <p>
      Today, as an ordained minister standing beside my wonderful husband and raising our blended family, I can look back at every storm with gratitude. Not because the pain was easy, but because without it, I would never have discovered how bright the light could be.
    </p>
  </div>
</div>
<div class="book-folio">5</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 3: PAGE 6 & REAL BACK COVER -->
        <div class="sheet" id="sheet-3" style="z-index: 7;">
          <!-- Page 6 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>Silent Words</span>
    <span>About the Author</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">In Grace &amp; Faith</span>
    <h2 class="book-chapter-title">About Crystal Rauch</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="space-y-1.5 font-ui text-[9.5px] text-[#273d32]">
    <div class="p-1.5 rounded border border-emerald-800/25 bg-emerald-950/5">
      <span class="font-cinzel text-[10px] font-bold text-emerald-900 block">Ordained Minister, Poet &amp; Mother</span>
      <p class="text-[#3b5947] mt-0.5 leading-snug">
        Crystal Rauch dedicates her life and ministry to encouraging those who walk through the valleys of grief, addiction recovery, and trauma. Her words offer a warm hand in the dark.
      </p>
    </div>

    <div class="p-1.5 rounded border border-emerald-900/15 bg-white/60 text-center">
      <p class="font-serif italic text-[11px] text-[#2b4a3a]">
        "Recovery doesn't mean the struggle never existed; it means love had the final word."
      </p>
    </div>
  </div>

  <div class="mt-2.5 p-1.5 rounded border border-[#bed8cd] text-center bg-[#f0faf5]">
    <span class="font-cinzel text-[8.5px] uppercase tracking-wider text-[#2c4a3b] font-bold block">Turn page to view full back cover &rarr;</span>
  </div>
</div>
<div class="book-folio">6</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- REAL BACK COVER (Verso on flip) -->
          <div class="sheet-face back bg-[#0a0a0f] text-white flex flex-col justify-between shadow-2xl overflow-hidden group">
            <img src="/assets/covers/back/silent-words-back.png" alt="Silent Words: What the Poems Didn't Say Back Cover" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none" style="border-radius: 12px 3px 3px 12px;">
            <div class="book-spine-crease-right"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-l from-black/40 via-transparent to-black/20"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/55 via-transparent to-transparent"></div>

            <div class="relative z-10 p-4 mt-auto text-center pointer-events-none">
              <button id="backCoverRestartBtn" class="pointer-events-auto inline-flex items-center space-x-1.5 px-3.5 py-1.5 rounded-full bg-black/85 hover:bg-black text-amber-200 border border-white/20 text-[10px] uppercase tracking-wider font-semibold shadow-xl transition cursor-pointer">
                <i data-lucide="rotate-ccw" class="w-3.5 h-3.5 mr-1 text-amber-300"></i>
                <span>Click to Flip to Start</span>
              </button>
            </div>
            <div class="page-turn-overlay" id="backCoverOverlay"></div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <!-- Reader Bottom Navigation Bar -->
  <footer class="relative z-20 bg-black/75 backdrop-blur-md border-t border-white/10 px-4 py-2 flex items-center justify-between text-xs font-ui flex-shrink-0">
    <div class="flex items-center space-x-2">
      <button id="prevBtn" class="px-3 py-1 rounded-lg bg-white/10 hover:bg-white/20 text-white disabled:opacity-30 disabled:pointer-events-none transition flex items-center space-x-1">
        <i data-lucide="chevron-left" class="w-3.5 h-3.5"></i>
        <span class="hidden sm:inline">Previous</span>
      </button>
      <button id="nextBtn" class="px-3 py-1 rounded-lg bg-amber-600/80 hover:bg-amber-600 text-white disabled:opacity-30 disabled:pointer-events-none transition flex items-center space-x-1">
        <span class="hidden sm:inline">Next</span>
        <i data-lucide="chevron-right" class="w-4 h-4"></i>
      </button>
    </div>

    <div class="flex items-center space-x-3">
      <span id="pageLabel" class="text-amber-200/90 font-medium tracking-wide text-[11px]">Cover &bull; 0 / 4</span>
      <div id="dotIndicators" class="flex items-center space-x-1.5"></div>
    </div>

    <div class="text-[10.5px] text-slate-400 hidden md:block tracking-wider">
      Use <kbd class="px-1.5 py-0.5 rounded bg-white/10 text-white font-mono text-[9.5px]">Space</kbd> or <kbd class="px-1.5 py-0.5 rounded bg-white/10 text-white font-mono text-[9.5px]">&rarr;</kbd> to turn pages
    </div>
  </footer>

  <script>
    const sheets = [
      document.getElementById('sheet-0'),
      document.getElementById('sheet-1'),
      document.getElementById('sheet-2'),
      document.getElementById('sheet-3')
    ];

    const book = document.getElementById('book');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const pageLabel = document.getElementById('pageLabel');
    const dotContainer = document.getElementById('dotIndicators');
    const turnNotice = document.getElementById('turnNotice');

    let currentSheet = 0;
    const totalSheets = sheets.length;

    function getOpenScale() {
      const bookW = book.offsetWidth || (window.innerHeight * 0.72 * (5.5 / 8.5));
      const spreadW = bookW * 2;
      const availW = window.innerWidth - 20; // 10px safe margin on both sides
      if (spreadW > availW) {
        return Math.min(1, Math.max(0.35, availW / spreadW));
      }
      return 1;
    }

    function renderBook() {
      sheets.forEach((sheet, idx) => {
        sheet.style.transform = '';
        if (idx < currentSheet) {
          sheet.classList.add('flipped');
          sheet.style.zIndex = idx + 1;
        } else {
          sheet.classList.remove('flipped');
          sheet.style.zIndex = totalSheets - idx;
        }
      });

      if (currentSheet === 0) {
        // Front Cover: single closed book centered
        book.style.transform = 'translateX(0%) scale(1)';
        pageLabel.textContent = 'Cover • 0 / ' + totalSheets;
        turnNotice.style.opacity = '1';
      } else if (currentSheet === totalSheets) {
        // Back Cover: single closed book centered, fully covering prior pages
        book.style.transform = 'translateX(100%) scale(1)';
        pageLabel.textContent = 'Back Cover • ' + totalSheets + ' / ' + totalSheets;
        turnNotice.style.opacity = '0';
        sheets[totalSheets - 1].style.zIndex = 100;
      } else {
        // Open two-page spread: centered on spine, scaled on mobile so it never cuts off
        const openScale = getOpenScale();
        book.style.transform = `translateX(50%) scale(${openScale})`;
        pageLabel.textContent = `Pages ${currentSheet * 2 - 1}-${currentSheet * 2} • ${currentSheet} / ${totalSheets}`;
        turnNotice.style.opacity = '0';
      }

      prevBtn.disabled = (currentSheet === 0);
      nextBtn.disabled = (currentSheet === totalSheets);
      buildDots();
    }

    function buildDots() {
      dotContainer.innerHTML = '';
      for (let i = 0; i <= totalSheets; i++) {
        const dot = document.createElement('button');
        dot.className = `w-2 h-2 rounded-full transition-all ${i === currentSheet ? 'bg-amber-400 w-5' : 'bg-white/30 hover:bg-white/50'}`;
        dot.onclick = () => jumpToSheet(i);
        dotContainer.appendChild(dot);
      }
    }

    function turnNext() {
      if (currentSheet < totalSheets) {
        currentSheet++;
        renderBook();
      }
    }

    function turnPrev() {
      if (currentSheet > 0) {
        currentSheet--;
        renderBook();
      }
    }

    function jumpToSheet(index) {
      currentSheet = Math.max(0, Math.min(totalSheets, index));
      renderBook();
    }

    // Sheet click triggers
    sheets.forEach((sheet, idx) => {
      const overlays = sheet.querySelectorAll('.page-turn-overlay');
      overlays.forEach(overlay => {
        overlay.addEventListener('click', (e) => {
          e.stopPropagation();
          if (overlay.id === 'backCoverOverlay') {
            jumpToSheet(0);
            return;
          }
          if (idx < currentSheet) {
            turnPrev();
          } else {
            turnNext();
          }
        });
      });
    });

    // Back cover restart handlers
    const backCoverBtn = document.getElementById('backCoverRestartBtn');
    if (backCoverBtn) {
      backCoverBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        jumpToSheet(0);
      });
    }

    prevBtn.addEventListener('click', turnPrev);
    nextBtn.addEventListener('click', turnNext);

    window.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowRight' || e.key === ' ') {
        e.preventDefault();
        if (currentSheet === totalSheets) jumpToSheet(0);
        else turnNext();
      } else if (e.key === 'ArrowLeft') {
        e.preventDefault();
        turnPrev();
      }
    });

    window.addEventListener('resize', () => {
      renderBook();
    });

    // Stars background effect
    (function initStars() {
      const canvas = document.getElementById('starsCanvas');
      if (!canvas) return;
      const ctx = canvas.getContext('2d');
      let w = canvas.width = window.innerWidth;
      let h = canvas.height = window.innerHeight;

      const stars = Array.from({ length: 80 }, () => ({
        x: Math.random() * w,
        y: Math.random() * h,
        r: Math.random() * 1.4 + 0.3,
        alpha: Math.random() * 0.7 + 0.2,
        speed: Math.random() * 0.015 + 0.005
      }));

      function animate() {
        ctx.clearRect(0, 0, w, h);
        stars.forEach(s => {
          s.alpha += s.speed;
          if (s.alpha > 0.9 || s.alpha < 0.2) s.speed = -s.speed;
          ctx.fillStyle = `rgba(255, 255, 255, ${Math.abs(s.alpha)})`;
          ctx.beginPath();
          ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
          ctx.fill();
        });
        requestAnimationFrame(animate);
      }
      animate();

      window.addEventListener('resize', () => {
        w = canvas.width = window.innerWidth;
        h = canvas.height = window.innerHeight;
      });
    })();

    lucide.createIcons();
    renderBook();
  </script>
</body>
</html>
</template>

<template id="template-fog_steam">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fog of Steam &mdash; American Author Hub</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Fonts: Cinzel & Playfair Display for headers, Cormorant Garamond for authentic book prose -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    :root {
      --book-h: min(76vh, 650px);
      --book-w: calc(var(--book-h) * (5.5 / 8.5));
    }

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    body {
      font-family: 'Cormorant Garamond', Georgia, serif;
      background: radial-gradient(ellipse at 50% 25%, #1a1208 0%, #0e0a04 55%, #050301 100%);
      user-select: none;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .font-ui { font-family: 'Montserrat', sans-serif; }
    .font-cinzel { font-family: 'Cinzel', serif; }
    .font-playfair { font-family: 'Playfair Display', Georgia, serif; }

    .scene-3d {
      perspective: 2600px;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      flex: 1;
      overflow: hidden;
    }

    .book-core {
      width: var(--book-w);
      height: var(--book-h);
      position: relative;
      transform-style: preserve-3d;
      transition: transform 0.85s cubic-bezier(0.25, 1, 0.5, 1);
      transform-origin: left center;
      transform: translateX(0%);
      flex-shrink: 0;
    }

    .sheet {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      width: 100% !important;
      height: 100% !important;
      transform-origin: left center;
      transform-style: preserve-3d;
      transition: transform 0.85s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .sheet.flipped {
      transform: rotateY(-180deg);
    }

    .sheet-face {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      right: 0 !important;
      bottom: 0 !important;
      width: 100% !important;
      height: 100% !important;
      box-sizing: border-box !important;
      margin: 0 !important;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
      overflow: hidden;
    }

    .sheet-face.front {
      z-index: 2;
      border-radius: 3px 12px 12px 3px;
    }

    .sheet-face.back {
      transform: rotateY(180deg);
      z-index: 1;
      border-radius: 12px 3px 3px 12px;
    }

    /* Authentic Book Paper Styling & 3D Book Shape */
    .book-paper {
      background-color: #faf6ee;
      color: #221c17;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden;
      line-height: 1.58;
    }

    /* Verso (Left Page) - Spine is on the Right */
    .book-paper-verso {
      padding: 1.25rem 1.65rem 0.85rem 1.25rem;
      background: linear-gradient(to right, #faf6ee 0%, #faf6ee 80%, #f0e8d6 95%, #dfd1b8 100%);
      box-shadow: inset -26px 0 28px -12px rgba(45, 25, 12, 0.3), -4px 6px 18px rgba(0,0,0,0.35);
      border-right: 1px solid rgba(80, 50, 20, 0.25);
    }

    /* Recto (Right Page) - Spine is on the Left */
    .book-paper-recto {
      padding: 1.25rem 1.25rem 0.85rem 1.65rem;
      background: linear-gradient(to left, #faf6ee 0%, #faf6ee 80%, #f0e8d6 95%, #dfd1b8 100%);
      box-shadow: inset 26px 0 28px -12px rgba(45, 25, 12, 0.3), 4px 6px 18px rgba(0,0,0,0.35);
      border-left: 1px solid rgba(80, 50, 20, 0.25);
    }

    /* Spine Creases on Covers */
    .book-spine-crease {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 28px;
      background: linear-gradient(to right, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.18) 25%, rgba(255,255,255,0.06) 28%, transparent 100%);
      pointer-events: none;
      z-index: 5;
    }

    .book-spine-crease-right {
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      width: 28px;
      background: linear-gradient(to left, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.18) 25%, rgba(255,255,255,0.06) 28%, transparent 100%);
      pointer-events: none;
      z-index: 5;
    }

    /* Refined Running Header (Book Standard) */
    .book-running-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 8px;
      font-weight: 600;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: #7a6a5a;
      padding-bottom: 4px;
      border-bottom: 1px solid #e0d6c7;
      margin-bottom: 8px;
    }

    /* Refined Chapter Headings */
    .book-chapter-head {
      text-align: center;
      margin-bottom: 8px;
    }

    .book-chapter-number {
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 9px;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: #8c6943;
      font-weight: 600;
      display: block;
    }

    .book-chapter-title {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 15.5px;
      font-weight: 700;
      color: #1a1410;
      letter-spacing: 0.02em;
      margin-top: 1px;
    }

    .book-chapter-divider {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      margin: 4px auto;
      color: #a8947e;
      font-size: 8px;
    }

    .book-chapter-divider::before,
    .book-chapter-divider::after {
      content: '';
      width: 18px;
      height: 1px;
      background-color: #d8cdbe;
    }

    /* Refined Drop Cap */
    .book-drop-cap {
      float: left;
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 2.7em;
      line-height: 0.76;
      padding-top: 2px;
      padding-right: 6px;
      padding-bottom: 0px;
      color: #1a1410;
      font-weight: 700;
    }

    .book-small-caps {
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 9.5px;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 700;
      color: #2b221a;
    }

    /* Body Text & Indents (Book Typography) */
    .book-prose {
      text-align: justify;
      text-justify: inter-word;
      font-size: 11.5px;
      line-height: 1.58;
      color: #261f19;
    }

    .book-prose p + p {
      text-indent: 1.25em;
      margin-top: 0.25em;
    }

    /* Bottom Folio */
    .book-folio {
      text-align: center;
      font-family: 'Cormorant Garamond', Georgia, serif;
      font-size: 10.5px;
      font-style: italic;
      color: #857566;
      border-top: 1px solid #e5dcce;
      padding-top: 4px;
      margin-top: 6px;
      letter-spacing: 0.08em;
    }

    .page-turn-overlay {
      position: absolute;
      inset: 0;
      cursor: pointer;
      z-index: 30;
    }

    #starsCanvas {
      position: fixed;
      inset: 0;
      pointer-events: none;
      z-index: 1;
    }

    @media (max-width: 640px) {
      :root {
        --book-h: min(72vh, 520px);
        --book-w: calc(var(--book-h) * (5.5 / 8.5));
      }
      .book-paper { padding: 0.9rem 1rem; }
      .book-prose { font-size: 10.5px; line-height: 1.5; }
    }
  </style>
</head>
<body class="text-slate-100">

  <canvas id="starsCanvas"></canvas>

  <!-- Interactive 3D Book Stage -->
  <main class="relative z-10 flex-1 flex flex-col items-center justify-center p-2 sm:p-4 overflow-hidden">
    <div id="turnNotice" class="font-ui text-[11px] uppercase tracking-widest text-amber-200/80 mb-2 flex items-center space-x-2 animate-pulse flex-shrink-0">
      <i data-lucide="hand" class="w-3.5 h-3.5"></i>
      <span>Click any page edge or press &rarr; to turn &bull; End cover flips to start</span>
    </div>

    <div class="scene-3d">
      <div id="book" class="book-core">

        <!-- SHEET 0: FRONT COVER & TITLE PAGE -->
        <div class="sheet" id="sheet-0" style="z-index: 10;">
          <!-- Front Cover -->
          <div class="sheet-face front bg-[#0a0a0f] text-white flex flex-col justify-between shadow-2xl overflow-hidden group">
            <img src="/assets/covers/fog-of-steam.jpg" alt="Fog of Steam" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none" style="border-radius: 3px 12px 12px 3px;">
            <div class="book-spine-crease"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-r from-black/40 via-transparent to-black/20"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>

            <div class="relative z-10 p-4 mt-auto text-center pointer-events-none">
              <span class="inline-flex items-center space-x-1.5 px-3.5 py-1 rounded-full bg-black/80 backdrop-blur-md border border-white/20 text-[10px] text-white uppercase tracking-wider font-semibold shadow-lg">
                <span>Click Cover to Open</span> <i data-lucide="arrow-right" class="w-3.5 h-3.5 ml-1"></i>
              </span>
            </div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 1 (Verso): Title Page / Colophon -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="text-center pt-3">
    <span class="font-cinzel text-[8.5px] tracking-[0.25em] uppercase text-amber-900 font-semibold block">A Victorian Romance</span>
    <h1 class="font-playfair text-[19px] sm:text-[21px] font-extrabold text-[#1a1410] tracking-wide mt-1.5">
      FOG OF STEAM
    </h1>
    <p class="font-playfair text-[12.5px] italic text-[#5c473b] mt-0.5">A Victorian Journey of Souls</p>
    <div class="flex items-center justify-center my-2 space-x-2 text-[#c2aba0]">
      <span class="h-px w-6 bg-[#d8c3bc]"></span>
      <span class="text-[9px]">✦</span>
      <span class="h-px w-6 bg-[#d8c3bc]"></span>
    </div>
    <p class="font-cinzel text-[9.5px] tracking-[0.2em] uppercase text-[#382b23] font-bold">By Suresh Gupta</p>
  </div>
  
  <div class="my-3 text-center">
    <div class="w-10 h-10 mx-auto rounded-full border border-amber-900/20 bg-amber-950/5 flex items-center justify-center">
      <i data-lucide="train" class="w-5 h-5 text-amber-900"></i>
    </div>
    <span class="font-cinzel text-[7.5px] uppercase tracking-[0.25em] text-[#8c7366] mt-1 block">First Edition</span>
  </div>

  <div class="text-center text-[9px] font-ui text-[#7a645c] space-y-0.5 mt-2">
    <p class="font-semibold uppercase tracking-wider text-[#4a352c]">American Author Hub Publishing</p>
    <p>New York &bull; London &bull; Edinburgh</p>
    <p class="text-[8px] text-[#9c857d]">Library of Congress Cataloging-in-Publication Data</p>
    <p class="text-[8px] text-[#9c857d]">Copyright &copy; 2026 Suresh Gupta. All rights reserved.</p>
  </div>
</div>
<div class="book-folio">— i —</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 1: PAGES 2 & 3 -->
        <div class="sheet" id="sheet-1" style="z-index: 9;">
          <!-- Page 2 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>Fog of Steam</span>
    <span>Dedication &amp; Contents</span>
  </div>

  <div class="p-2 my-1 rounded border border-amber-900/15 bg-amber-950/5 text-center">
    <p class="font-playfair text-[10.5px] italic text-[#4a352b] leading-snug">
      "For the travelers between worlds, who understand that the deepest journeys are not measured in miles, but in the quiet encounters that alter the soul."
    </p>
  </div>

  <div class="book-chapter-head mt-2">
    <span class="book-chapter-number">Table of Contents</span>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="font-ui text-[9.5px] text-[#3d2e27] space-y-1.5 px-1">
    <div class="flex items-baseline justify-between font-semibold">
      <span>CHAPTER I &bull; Platform Nine in the Mist</span>
      <span class="border-b border-dotted border-[#c8b6ae] flex-1 mx-2"></span>
      <span class="font-serif">7</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER II &bull; Locomotive #4817</span>
      <span class="border-b border-dotted border-[#c8b6ae] flex-1 mx-2"></span>
      <span class="font-serif">21</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER III &bull; The Lady with the Notebook</span>
      <span class="border-b border-dotted border-[#c8b6ae] flex-1 mx-2"></span>
      <span class="font-serif">44</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER IV &bull; The Vintage Dining Car</span>
      <span class="border-b border-dotted border-[#c8b6ae] flex-1 mx-2"></span>
      <span class="font-serif">68</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER V &bull; Letters to Meadowbrook</span>
      <span class="border-b border-dotted border-[#c8b6ae] flex-1 mx-2"></span>
      <span class="font-serif">95</span>
    </div>
  </div>
</div>
<div class="book-folio">2</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 3 (Verso) -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="book-running-head">
    <span>Fog of Steam</span>
    <span>Chapter One</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Chapter One</span>
    <h2 class="book-chapter-title">Platform Nine in the Mist</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">T</span><span class="book-small-caps">he iron roof of St. Pancras</span> groaned under November drizzle, but beneath the arches it was the steam that commanded the station. Thick, billowing white plumes rolled from the belly of locomotive #4817, smelling sharply of wet coal and polished brass.
    </p>
    <p>
      Robert adjusted his wool greatcoat against the damp chill. Having recently inherited the secluded country villa of Meadowbrook, he wanted nothing more than to put the smoking brick chimneys and frantic commercial gossip of London behind him. In his satchel was a single volume of Keats and a ticket for the 10:15 express.
    </p>
  </div>
</div>
<div class="book-folio">3</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 2: PAGES 4 & 5 -->
        <div class="sheet" id="sheet-2" style="z-index: 8;">
          <!-- Page 4 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>The Compartment</span>
    <span>Chapter Two</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Chapter Two</span>
    <h2 class="book-chapter-title">The Lady with the Notebook</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">T</span><span class="book-small-caps">he whistle pierced</span> the fog just as the heavy brass door-handle turned. A young woman stepped into the third-class compartment, breathless, brushing raindrops from the velvet ribbons of her bonnet. Under her arm was an ink-stained dispatch case and a bundle of morning proofs.
    </p>
    <p>
      Emily sat opposite him, offering an apologetic nod. She was an investigative journalist for the London Morning Star—a woman whose pen challenged city magistrates and factory owners alike. But today, she too was fleeing the cynical roar of the newsroom, searching for the quiet truth of England's heartland.
    </p>
  </div>
</div>
<div class="book-folio">4</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 5 (Verso) -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="book-running-head">
    <span>Conversations in the Mist</span>
    <span>Chapter Three</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Chapter Three</span>
    <h2 class="book-chapter-title">The Vintage Dining Car</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">A</span><span class="book-small-caps">s the train climbed</span> toward the heather-draped hills of Yorkshire, the steam outside parted to reveal golden autumn meadows. In the vintage dining car, over smoked salmon and hot tea from a silver pot, hours vanished like miles beneath the wheels.
    </p>
    <p>
      Robert spoke of his longing for literature, quiet gardens, and a life measured by seasons rather than ledger books. Emily spoke with fiery wit about justice, art, and the untold stories of ordinary folk. By the time twilight painted the hills purple, two strangers who had sought solitude realized they had found something infinitely rarer: understanding.
    </p>
  </div>
</div>
<div class="book-folio">5</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 3: PAGE 6 & REAL BACK COVER -->
        <div class="sheet" id="sheet-3" style="z-index: 7;">
          <!-- Page 6 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>Fog of Steam</span>
    <span>Historical Romance</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">A Victorian Masterpiece</span>
    <h2 class="book-chapter-title">A Friendship Beyond Time</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="space-y-1.5 font-ui text-[9.5px] text-[#3d2e27]">
    <div class="p-1.5 rounded border border-amber-900/25 bg-amber-950/5">
      <span class="font-cinzel text-[10px] font-bold text-amber-950 block">Platform Nine &bull; Locomotive #4817</span>
      <p class="text-[#5c473b] mt-0.5 leading-snug">
        "No two people could have anticipated a more blissful ending to a friendship that shone through the heaviest mist and forever united two wandering souls."
      </p>
    </div>

    <div class="p-1.5 rounded border border-[#d8c3bc] bg-[#fbf5f2] text-center">
      <p class="font-serif italic text-[11px] text-[#4a352b]">
        A celebrated exploration of Victorian humanism, romance, and the beauty of quiet connection.
      </p>
    </div>
  </div>

  <div class="mt-2.5 p-1.5 rounded border border-[#d8c3bc] text-center bg-[#fbf5f2]">
    <span class="font-cinzel text-[8.5px] uppercase tracking-wider text-[#4a352c] font-bold block">Turn page to view full back cover &rarr;</span>
  </div>
</div>
<div class="book-folio">6</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- REAL BACK COVER (Verso on flip) -->
          <div class="sheet-face back bg-[#0a0a0f] text-white flex flex-col justify-between shadow-2xl overflow-hidden group">
            <img src="/assets/covers/back/fog-of-steam-back.png" alt="Fog of Steam Back Cover" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none" style="border-radius: 12px 3px 3px 12px;">
            <div class="book-spine-crease-right"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-l from-black/40 via-transparent to-black/20"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/55 via-transparent to-transparent"></div>

            <div class="relative z-10 p-4 mt-auto text-center pointer-events-none">
              <button id="backCoverRestartBtn" class="pointer-events-auto inline-flex items-center space-x-1.5 px-3.5 py-1.5 rounded-full bg-black/85 hover:bg-black text-amber-200 border border-white/20 text-[10px] uppercase tracking-wider font-semibold shadow-xl transition cursor-pointer">
                <i data-lucide="rotate-ccw" class="w-3.5 h-3.5 mr-1 text-amber-300"></i>
                <span>Click to Flip to Start</span>
              </button>
            </div>
            <div class="page-turn-overlay" id="backCoverOverlay"></div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <!-- Reader Bottom Navigation Bar -->
  <footer class="relative z-20 bg-black/75 backdrop-blur-md border-t border-white/10 px-4 py-2 flex items-center justify-between text-xs font-ui flex-shrink-0">
    <div class="flex items-center space-x-2">
      <button id="prevBtn" class="px-3 py-1 rounded-lg bg-white/10 hover:bg-white/20 text-white disabled:opacity-30 disabled:pointer-events-none transition flex items-center space-x-1">
        <i data-lucide="chevron-left" class="w-3.5 h-3.5"></i>
        <span class="hidden sm:inline">Previous</span>
      </button>
      <button id="nextBtn" class="px-3 py-1 rounded-lg bg-amber-600/80 hover:bg-amber-600 text-white disabled:opacity-30 disabled:pointer-events-none transition flex items-center space-x-1">
        <span class="hidden sm:inline">Next</span>
        <i data-lucide="chevron-right" class="w-4 h-4"></i>
      </button>
    </div>

    <div class="flex items-center space-x-3">
      <span id="pageLabel" class="text-amber-200/90 font-medium tracking-wide text-[11px]">Cover &bull; 0 / 4</span>
      <div id="dotIndicators" class="flex items-center space-x-1.5"></div>
    </div>

    <div class="text-[10.5px] text-slate-400 hidden md:block tracking-wider">
      Use <kbd class="px-1.5 py-0.5 rounded bg-white/10 text-white font-mono text-[9.5px]">Space</kbd> or <kbd class="px-1.5 py-0.5 rounded bg-white/10 text-white font-mono text-[9.5px]">&rarr;</kbd> to turn pages
    </div>
  </footer>

  <script>
    const sheets = [
      document.getElementById('sheet-0'),
      document.getElementById('sheet-1'),
      document.getElementById('sheet-2'),
      document.getElementById('sheet-3')
    ];

    const book = document.getElementById('book');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const pageLabel = document.getElementById('pageLabel');
    const dotContainer = document.getElementById('dotIndicators');
    const turnNotice = document.getElementById('turnNotice');

    let currentSheet = 0;
    const totalSheets = sheets.length;

    function getOpenScale() {
      const bookW = book.offsetWidth || (window.innerHeight * 0.72 * (5.5 / 8.5));
      const spreadW = bookW * 2;
      const availW = window.innerWidth - 20; // 10px safe margin on both sides
      if (spreadW > availW) {
        return Math.min(1, Math.max(0.35, availW / spreadW));
      }
      return 1;
    }

    function renderBook() {
      sheets.forEach((sheet, idx) => {
        sheet.style.transform = '';
        if (idx < currentSheet) {
          sheet.classList.add('flipped');
          sheet.style.zIndex = idx + 1;
        } else {
          sheet.classList.remove('flipped');
          sheet.style.zIndex = totalSheets - idx;
        }
      });

      if (currentSheet === 0) {
        // Front Cover: single closed book centered
        book.style.transform = 'translateX(0%) scale(1)';
        pageLabel.textContent = 'Cover • 0 / ' + totalSheets;
        turnNotice.style.opacity = '1';
      } else if (currentSheet === totalSheets) {
        // Back Cover: single closed book centered, fully covering prior pages
        book.style.transform = 'translateX(100%) scale(1)';
        pageLabel.textContent = 'Back Cover • ' + totalSheets + ' / ' + totalSheets;
        turnNotice.style.opacity = '0';
        sheets[totalSheets - 1].style.zIndex = 100;
      } else {
        // Open two-page spread: centered on spine, scaled on mobile so it never cuts off
        const openScale = getOpenScale();
        book.style.transform = `translateX(50%) scale(${openScale})`;
        pageLabel.textContent = `Pages ${currentSheet * 2 - 1}-${currentSheet * 2} • ${currentSheet} / ${totalSheets}`;
        turnNotice.style.opacity = '0';
      }

      prevBtn.disabled = (currentSheet === 0);
      nextBtn.disabled = (currentSheet === totalSheets);
      buildDots();
    }

    function buildDots() {
      dotContainer.innerHTML = '';
      for (let i = 0; i <= totalSheets; i++) {
        const dot = document.createElement('button');
        dot.className = `w-2 h-2 rounded-full transition-all ${i === currentSheet ? 'bg-amber-400 w-5' : 'bg-white/30 hover:bg-white/50'}`;
        dot.onclick = () => jumpToSheet(i);
        dotContainer.appendChild(dot);
      }
    }

    function turnNext() {
      if (currentSheet < totalSheets) {
        currentSheet++;
        renderBook();
      }
    }

    function turnPrev() {
      if (currentSheet > 0) {
        currentSheet--;
        renderBook();
      }
    }

    function jumpToSheet(index) {
      currentSheet = Math.max(0, Math.min(totalSheets, index));
      renderBook();
    }

    // Sheet click triggers
    sheets.forEach((sheet, idx) => {
      const overlays = sheet.querySelectorAll('.page-turn-overlay');
      overlays.forEach(overlay => {
        overlay.addEventListener('click', (e) => {
          e.stopPropagation();
          if (overlay.id === 'backCoverOverlay') {
            jumpToSheet(0);
            return;
          }
          if (idx < currentSheet) {
            turnPrev();
          } else {
            turnNext();
          }
        });
      });
    });

    // Back cover restart handlers
    const backCoverBtn = document.getElementById('backCoverRestartBtn');
    if (backCoverBtn) {
      backCoverBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        jumpToSheet(0);
      });
    }

    prevBtn.addEventListener('click', turnPrev);
    nextBtn.addEventListener('click', turnNext);

    window.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowRight' || e.key === ' ') {
        e.preventDefault();
        if (currentSheet === totalSheets) jumpToSheet(0);
        else turnNext();
      } else if (e.key === 'ArrowLeft') {
        e.preventDefault();
        turnPrev();
      }
    });

    window.addEventListener('resize', () => {
      renderBook();
    });

    // Stars background effect
    (function initStars() {
      const canvas = document.getElementById('starsCanvas');
      if (!canvas) return;
      const ctx = canvas.getContext('2d');
      let w = canvas.width = window.innerWidth;
      let h = canvas.height = window.innerHeight;

      const stars = Array.from({ length: 80 }, () => ({
        x: Math.random() * w,
        y: Math.random() * h,
        r: Math.random() * 1.4 + 0.3,
        alpha: Math.random() * 0.7 + 0.2,
        speed: Math.random() * 0.015 + 0.005
      }));

      function animate() {
        ctx.clearRect(0, 0, w, h);
        stars.forEach(s => {
          s.alpha += s.speed;
          if (s.alpha > 0.9 || s.alpha < 0.2) s.speed = -s.speed;
          ctx.fillStyle = `rgba(255, 255, 255, ${Math.abs(s.alpha)})`;
          ctx.beginPath();
          ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
          ctx.fill();
        });
        requestAnimationFrame(animate);
      }
      animate();

      window.addEventListener('resize', () => {
        w = canvas.width = window.innerWidth;
        h = canvas.height = window.innerHeight;
      });
    })();

    lucide.createIcons();
    renderBook();
  </script>
</body>
</html>
</template>

<template id="template-shadow">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Call of Shadow: Talira &mdash; American Author Hub</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Fonts: Cinzel & Playfair Display for headers, Cormorant Garamond for authentic book prose -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    :root {
      --book-h: min(76vh, 650px);
      --book-w: calc(var(--book-h) * (5.5 / 8.5));
    }

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    body {
      font-family: 'Cormorant Garamond', Georgia, serif;
      background: radial-gradient(ellipse at 50% 25%, #150624 0%, #090212 55%, #030008 100%);
      user-select: none;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .font-ui { font-family: 'Montserrat', sans-serif; }
    .font-cinzel { font-family: 'Cinzel', serif; }
    .font-playfair { font-family: 'Playfair Display', Georgia, serif; }

    .scene-3d {
      perspective: 2600px;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      flex: 1;
      overflow: hidden;
    }

    .book-core {
      width: var(--book-w);
      height: var(--book-h);
      position: relative;
      transform-style: preserve-3d;
      transition: transform 0.85s cubic-bezier(0.25, 1, 0.5, 1);
      transform-origin: left center;
      transform: translateX(0%);
      flex-shrink: 0;
    }

    .sheet {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      width: 100% !important;
      height: 100% !important;
      transform-origin: left center;
      transform-style: preserve-3d;
      transition: transform 0.85s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .sheet.flipped {
      transform: rotateY(-180deg);
    }

    .sheet-face {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      right: 0 !important;
      bottom: 0 !important;
      width: 100% !important;
      height: 100% !important;
      box-sizing: border-box !important;
      margin: 0 !important;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
      overflow: hidden;
    }

    .sheet-face.front {
      z-index: 2;
      border-radius: 3px 12px 12px 3px;
    }

    .sheet-face.back {
      transform: rotateY(180deg);
      z-index: 1;
      border-radius: 12px 3px 3px 12px;
    }

    /* Authentic Book Paper Styling & 3D Book Shape */
    .book-paper {
      background-color: #faf6ee;
      color: #221c17;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden;
      line-height: 1.58;
    }

    /* Verso (Left Page) - Spine is on the Right */
    .book-paper-verso {
      padding: 1.25rem 1.65rem 0.85rem 1.25rem;
      background: linear-gradient(to right, #faf6ee 0%, #faf6ee 80%, #f0e8d6 95%, #dfd1b8 100%);
      box-shadow: inset -26px 0 28px -12px rgba(45, 25, 12, 0.3), -4px 6px 18px rgba(0,0,0,0.35);
      border-right: 1px solid rgba(80, 50, 20, 0.25);
    }

    /* Recto (Right Page) - Spine is on the Left */
    .book-paper-recto {
      padding: 1.25rem 1.25rem 0.85rem 1.65rem;
      background: linear-gradient(to left, #faf6ee 0%, #faf6ee 80%, #f0e8d6 95%, #dfd1b8 100%);
      box-shadow: inset 26px 0 28px -12px rgba(45, 25, 12, 0.3), 4px 6px 18px rgba(0,0,0,0.35);
      border-left: 1px solid rgba(80, 50, 20, 0.25);
    }

    /* Spine Creases on Covers */
    .book-spine-crease {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 28px;
      background: linear-gradient(to right, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.18) 25%, rgba(255,255,255,0.06) 28%, transparent 100%);
      pointer-events: none;
      z-index: 5;
    }

    .book-spine-crease-right {
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      width: 28px;
      background: linear-gradient(to left, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.18) 25%, rgba(255,255,255,0.06) 28%, transparent 100%);
      pointer-events: none;
      z-index: 5;
    }

    /* Refined Running Header (Book Standard) */
    .book-running-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 8px;
      font-weight: 600;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: #7a6a5a;
      padding-bottom: 4px;
      border-bottom: 1px solid #e0d6c7;
      margin-bottom: 8px;
    }

    /* Refined Chapter Headings */
    .book-chapter-head {
      text-align: center;
      margin-bottom: 8px;
    }

    .book-chapter-number {
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 9px;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: #8c6943;
      font-weight: 600;
      display: block;
    }

    .book-chapter-title {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 15.5px;
      font-weight: 700;
      color: #1a1410;
      letter-spacing: 0.02em;
      margin-top: 1px;
    }

    .book-chapter-divider {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      margin: 4px auto;
      color: #a8947e;
      font-size: 8px;
    }

    .book-chapter-divider::before,
    .book-chapter-divider::after {
      content: '';
      width: 18px;
      height: 1px;
      background-color: #d8cdbe;
    }

    /* Refined Drop Cap */
    .book-drop-cap {
      float: left;
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 2.7em;
      line-height: 0.76;
      padding-top: 2px;
      padding-right: 6px;
      padding-bottom: 0px;
      color: #1a1410;
      font-weight: 700;
    }

    .book-small-caps {
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 9.5px;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 700;
      color: #2b221a;
    }

    /* Body Text & Indents (Book Typography) */
    .book-prose {
      text-align: justify;
      text-justify: inter-word;
      font-size: 11.5px;
      line-height: 1.58;
      color: #261f19;
    }

    .book-prose p + p {
      text-indent: 1.25em;
      margin-top: 0.25em;
    }

    /* Bottom Folio */
    .book-folio {
      text-align: center;
      font-family: 'Cormorant Garamond', Georgia, serif;
      font-size: 10.5px;
      font-style: italic;
      color: #857566;
      border-top: 1px solid #e5dcce;
      padding-top: 4px;
      margin-top: 6px;
      letter-spacing: 0.08em;
    }

    .page-turn-overlay {
      position: absolute;
      inset: 0;
      cursor: pointer;
      z-index: 30;
    }

    #starsCanvas {
      position: fixed;
      inset: 0;
      pointer-events: none;
      z-index: 1;
    }

    @media (max-width: 640px) {
      :root {
        --book-h: min(72vh, 520px);
        --book-w: calc(var(--book-h) * (5.5 / 8.5));
      }
      .book-paper { padding: 0.9rem 1rem; }
      .book-prose { font-size: 10.5px; line-height: 1.5; }
    }
  </style>
</head>
<body class="text-slate-100">

  <canvas id="starsCanvas"></canvas>

  <!-- Interactive 3D Book Stage -->
  <main class="relative z-10 flex-1 flex flex-col items-center justify-center p-2 sm:p-4 overflow-hidden">
    <div id="turnNotice" class="font-ui text-[11px] uppercase tracking-widest text-amber-200/80 mb-2 flex items-center space-x-2 animate-pulse flex-shrink-0">
      <i data-lucide="hand" class="w-3.5 h-3.5"></i>
      <span>Click any page edge or press &rarr; to turn &bull; End cover flips to start</span>
    </div>

    <div class="scene-3d">
      <div id="book" class="book-core">

        <!-- SHEET 0: FRONT COVER & TITLE PAGE -->
        <div class="sheet" id="sheet-0" style="z-index: 10;">
          <!-- Front Cover -->
          <div class="sheet-face front bg-[#0a0a0f] text-white flex flex-col justify-between shadow-2xl overflow-hidden group">
            <img src="/assets/covers/call-of-shadow.png" alt="Call of Shadow: Talira" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none" style="border-radius: 3px 12px 12px 3px;">
            <div class="book-spine-crease"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-r from-black/40 via-transparent to-black/20"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>

            <div class="relative z-10 p-4 mt-auto text-center pointer-events-none">
              <span class="inline-flex items-center space-x-1.5 px-3.5 py-1 rounded-full bg-black/80 backdrop-blur-md border border-white/20 text-[10px] text-white uppercase tracking-wider font-semibold shadow-lg">
                <span>Click Cover to Open</span> <i data-lucide="arrow-right" class="w-3.5 h-3.5 ml-1"></i>
              </span>
            </div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 1 (Verso): Title Page / Colophon -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="text-center pt-3">
    <span class="font-cinzel text-[8.5px] tracking-[0.25em] uppercase text-purple-900 font-semibold block">Dark Fantasy YA</span>
    <h1 class="font-playfair text-[19px] sm:text-[21px] font-extrabold text-[#1a1410] tracking-wide mt-1.5">
      CALL OF SHADOW
    </h1>
    <p class="font-playfair text-[12.5px] italic text-[#4f3b5c] mt-0.5">Book One &bull; Talira</p>
    <div class="flex items-center justify-center my-2 space-x-2 text-[#b7a0c2]">
      <span class="h-px w-6 bg-[#cdbcd8]"></span>
      <span class="text-[9px]">✦</span>
      <span class="h-px w-6 bg-[#cdbcd8]"></span>
    </div>
    <p class="font-cinzel text-[9.5px] tracking-[0.2em] uppercase text-[#302338] font-bold">By Lucas Hanley</p>
  </div>
  
  <div class="my-3 text-center">
    <div class="w-10 h-10 mx-auto rounded-full border border-purple-900/20 bg-purple-950/5 flex items-center justify-center">
      <i data-lucide="shield" class="w-5 h-5 text-purple-900"></i>
    </div>
    <span class="font-cinzel text-[7.5px] uppercase tracking-[0.25em] text-[#7a668c] mt-1 block">First Edition</span>
  </div>

  <div class="text-center text-[9px] font-ui text-[#6d5c7a] space-y-0.5 mt-2">
    <p class="font-semibold uppercase tracking-wider text-[#3d2c4a]">American Author Hub Publishing</p>
    <p>New York &bull; London &bull; Sydney</p>
    <p class="text-[8px] text-[#8f7d9c]">Library of Congress Cataloging-in-Publication Data</p>
    <p class="text-[8px] text-[#8f7d9c]">Copyright &copy; 2026 Lucas Hanley. All rights reserved.</p>
  </div>
</div>
<div class="book-folio">— i —</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 1: PAGES 2 & 3 -->
        <div class="sheet" id="sheet-1" style="z-index: 9;">
          <!-- Page 2 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>Call of Shadow: Talira</span>
    <span>Dedication &amp; Map</span>
  </div>

  <div class="p-2 my-1 rounded border border-purple-900/15 bg-purple-950/5 text-center">
    <p class="font-playfair text-[10.5px] italic text-[#3d2b4a] leading-snug">
      "For Opal—whose memory outshines the darkest night, and for anyone who has ever wished time could turn back just one more minute."
    </p>
  </div>

  <div class="book-chapter-head mt-2">
    <span class="book-chapter-number">The Realm of Letherim</span>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="font-ui text-[9.5px] text-[#35273d] space-y-1.5 px-1">
    <div class="flex items-baseline justify-between font-semibold">
      <span>CHAPTER I &bull; Ezrah &amp; The Obsidian Necklace</span>
      <span class="border-b border-dotted border-[#beaec8] flex-1 mx-2"></span>
      <span class="font-serif">7</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER II &bull; The Continent of Zallare</span>
      <span class="border-b border-dotted border-[#beaec8] flex-1 mx-2"></span>
      <span class="font-serif">24</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER III &bull; The Tome of Talira</span>
      <span class="border-b border-dotted border-[#beaec8] flex-1 mx-2"></span>
      <span class="font-serif">49</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER IV &bull; The Shadow's Smile</span>
      <span class="border-b border-dotted border-[#beaec8] flex-1 mx-2"></span>
      <span class="font-serif">78</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>CHAPTER V &bull; The Sea of Darkness</span>
      <span class="border-b border-dotted border-[#beaec8] flex-1 mx-2"></span>
      <span class="font-serif">112</span>
    </div>
  </div>
</div>
<div class="book-folio">2</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 3 (Verso) -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="book-running-head">
    <span>Call of Shadow</span>
    <span>Chapter One</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Chapter One</span>
    <h2 class="book-chapter-title">Ezrah</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">I</span><span class="book-small-caps"> slowly worked up</span> the energy to get out of bed, still groggy from staying up late talking to Sam, my therapist. After I brushed my teeth, it was hard not to notice the bags under my green eyes. The house was so still; Mom was asleep, and Dad was at work.
    </p>
    <p>
      The drive to the next six hours of prison was difficult. I had to cross the bridge where it happened. Someone had set up a memorial for her: fake flowers, rain-soaked letters, and candles melted into pavement. Beneath my shirt, the obsidian necklace pressed cold against my collarbone, vibrating like an electric pulse.
    </p>
  </div>
</div>
<div class="book-folio">3</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 2: PAGES 4 & 5 -->
        <div class="sheet" id="sheet-2" style="z-index: 8;">
          <!-- Page 4 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>The Continent of Zallare</span>
    <span>Chapter Two</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Chapter Two</span>
    <h2 class="book-chapter-title">A New World &bull; Harlindale</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">M</span><span class="book-small-caps">y skull was splitting.</span> Hugo, Olivia, and I woke surrounded by silver trees shining with a dark blue tint. The necklace wouldn't come off my throat; it felt like a part of my own flesh.
    </p>
    <p>
      We were sheltered at the Gladly farm on the continent of Zallare, on a world named Letherim. An old woman dressed in indigo wool offered us bitter broth while Hugo stared at his lifeless cell phone. We had crossed an impossible threshold into a realm ruled by living shadows and forgotten gods.
    </p>
  </div>
</div>
<div class="book-folio">4</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 5 (Verso) -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="book-running-head">
    <span>The Ancient Ruins</span>
    <span>Chapter Three</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Chapter Three</span>
    <h2 class="book-chapter-title">The Tome of Talira</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">I</span><span class="book-small-caps">n the stilled hall,</span> the shadow at the center of the chamber ceased flickering. It coalesced into the form of a tall, silver-masked traveler with eyes like twin violet embers. It didn't threaten us; it gave a calm, patient smile.
    </p>
    <p>
      <em>"Ezrah,"</em> the voice echoed gently in my head. <em>"You mourn Opal. You seek the Tome of Talira, which commands the threads of time. It can undo the bridge. But time does not yield without taking something of equal weight in return."</em>
    </p>
  </div>
</div>
<div class="book-folio">5</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 3: PAGE 6 & REAL BACK COVER -->
        <div class="sheet" id="sheet-3" style="z-index: 7;">
          <!-- Page 6 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>Call of Shadow</span>
    <span>The Legend of Talira</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">The Quest for Time</span>
    <h2 class="book-chapter-title">The Sea of Darkness Awaits</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="space-y-1.5 font-ui text-[9.5px] text-[#35273d]">
    <div class="p-1.5 rounded border border-purple-900/25 bg-purple-950/5">
      <span class="font-cinzel text-[10px] font-bold text-purple-950 block">A Voice That Knows His Grief</span>
      <p class="text-[#533b61] mt-0.5 leading-snug">
        "The second tome lies where judgment sleeps, beyond the sea that swallows light. Lunee will not stop. And the Shadow waits at the window's reflection."
      </p>
    </div>

    <div class="p-1.5 rounded border border-[#cdbcd8] bg-[#fbf5fc] text-center">
      <p class="font-serif italic text-[11px] text-[#3d2b4a]">
        An epic journey of grief, brotherhood, time manipulation, and impossible choices across the forgotten continents of Letherim.
      </p>
    </div>
  </div>

  <div class="mt-2.5 p-1.5 rounded border border-[#cdbcd8] text-center bg-[#fbf5fc]">
    <span class="font-cinzel text-[8.5px] uppercase tracking-wider text-[#3d2c4a] font-bold block">Turn page to view full back cover &rarr;</span>
  </div>
</div>
<div class="book-folio">6</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- REAL BACK COVER (Verso on flip) -->
          <div class="sheet-face back bg-[#0a0a0f] text-white flex flex-col justify-between shadow-2xl overflow-hidden group">
            <img src="/assets/covers/back/call-of-shadow-back.png" alt="Call of Shadow: Talira Back Cover" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none" style="border-radius: 12px 3px 3px 12px;">
            <div class="book-spine-crease-right"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-l from-black/40 via-transparent to-black/20"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/55 via-transparent to-transparent"></div>

            <div class="relative z-10 p-4 mt-auto text-center pointer-events-none">
              <button id="backCoverRestartBtn" class="pointer-events-auto inline-flex items-center space-x-1.5 px-3.5 py-1.5 rounded-full bg-black/85 hover:bg-black text-amber-200 border border-white/20 text-[10px] uppercase tracking-wider font-semibold shadow-xl transition cursor-pointer">
                <i data-lucide="rotate-ccw" class="w-3.5 h-3.5 mr-1 text-amber-300"></i>
                <span>Click to Flip to Start</span>
              </button>
            </div>
            <div class="page-turn-overlay" id="backCoverOverlay"></div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <!-- Reader Bottom Navigation Bar -->
  <footer class="relative z-20 bg-black/75 backdrop-blur-md border-t border-white/10 px-4 py-2 flex items-center justify-between text-xs font-ui flex-shrink-0">
    <div class="flex items-center space-x-2">
      <button id="prevBtn" class="px-3 py-1 rounded-lg bg-white/10 hover:bg-white/20 text-white disabled:opacity-30 disabled:pointer-events-none transition flex items-center space-x-1">
        <i data-lucide="chevron-left" class="w-3.5 h-3.5"></i>
        <span class="hidden sm:inline">Previous</span>
      </button>
      <button id="nextBtn" class="px-3 py-1 rounded-lg bg-amber-600/80 hover:bg-amber-600 text-white disabled:opacity-30 disabled:pointer-events-none transition flex items-center space-x-1">
        <span class="hidden sm:inline">Next</span>
        <i data-lucide="chevron-right" class="w-4 h-4"></i>
      </button>
    </div>

    <div class="flex items-center space-x-3">
      <span id="pageLabel" class="text-amber-200/90 font-medium tracking-wide text-[11px]">Cover &bull; 0 / 4</span>
      <div id="dotIndicators" class="flex items-center space-x-1.5"></div>
    </div>

    <div class="text-[10.5px] text-slate-400 hidden md:block tracking-wider">
      Use <kbd class="px-1.5 py-0.5 rounded bg-white/10 text-white font-mono text-[9.5px]">Space</kbd> or <kbd class="px-1.5 py-0.5 rounded bg-white/10 text-white font-mono text-[9.5px]">&rarr;</kbd> to turn pages
    </div>
  </footer>

  <script>
    const sheets = [
      document.getElementById('sheet-0'),
      document.getElementById('sheet-1'),
      document.getElementById('sheet-2'),
      document.getElementById('sheet-3')
    ];

    const book = document.getElementById('book');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const pageLabel = document.getElementById('pageLabel');
    const dotContainer = document.getElementById('dotIndicators');
    const turnNotice = document.getElementById('turnNotice');

    let currentSheet = 0;
    const totalSheets = sheets.length;

    function getOpenScale() {
      const bookW = book.offsetWidth || (window.innerHeight * 0.72 * (5.5 / 8.5));
      const spreadW = bookW * 2;
      const availW = window.innerWidth - 20; // 10px safe margin on both sides
      if (spreadW > availW) {
        return Math.min(1, Math.max(0.35, availW / spreadW));
      }
      return 1;
    }

    function renderBook() {
      sheets.forEach((sheet, idx) => {
        sheet.style.transform = '';
        if (idx < currentSheet) {
          sheet.classList.add('flipped');
          sheet.style.zIndex = idx + 1;
        } else {
          sheet.classList.remove('flipped');
          sheet.style.zIndex = totalSheets - idx;
        }
      });

      if (currentSheet === 0) {
        // Front Cover: single closed book centered
        book.style.transform = 'translateX(0%) scale(1)';
        pageLabel.textContent = 'Cover • 0 / ' + totalSheets;
        turnNotice.style.opacity = '1';
      } else if (currentSheet === totalSheets) {
        // Back Cover: single closed book centered, fully covering prior pages
        book.style.transform = 'translateX(100%) scale(1)';
        pageLabel.textContent = 'Back Cover • ' + totalSheets + ' / ' + totalSheets;
        turnNotice.style.opacity = '0';
        sheets[totalSheets - 1].style.zIndex = 100;
      } else {
        // Open two-page spread: centered on spine, scaled on mobile so it never cuts off
        const openScale = getOpenScale();
        book.style.transform = `translateX(50%) scale(${openScale})`;
        pageLabel.textContent = `Pages ${currentSheet * 2 - 1}-${currentSheet * 2} • ${currentSheet} / ${totalSheets}`;
        turnNotice.style.opacity = '0';
      }

      prevBtn.disabled = (currentSheet === 0);
      nextBtn.disabled = (currentSheet === totalSheets);
      buildDots();
    }

    function buildDots() {
      dotContainer.innerHTML = '';
      for (let i = 0; i <= totalSheets; i++) {
        const dot = document.createElement('button');
        dot.className = `w-2 h-2 rounded-full transition-all ${i === currentSheet ? 'bg-amber-400 w-5' : 'bg-white/30 hover:bg-white/50'}`;
        dot.onclick = () => jumpToSheet(i);
        dotContainer.appendChild(dot);
      }
    }

    function turnNext() {
      if (currentSheet < totalSheets) {
        currentSheet++;
        renderBook();
      }
    }

    function turnPrev() {
      if (currentSheet > 0) {
        currentSheet--;
        renderBook();
      }
    }

    function jumpToSheet(index) {
      currentSheet = Math.max(0, Math.min(totalSheets, index));
      renderBook();
    }

    // Sheet click triggers
    sheets.forEach((sheet, idx) => {
      const overlays = sheet.querySelectorAll('.page-turn-overlay');
      overlays.forEach(overlay => {
        overlay.addEventListener('click', (e) => {
          e.stopPropagation();
          if (overlay.id === 'backCoverOverlay') {
            jumpToSheet(0);
            return;
          }
          if (idx < currentSheet) {
            turnPrev();
          } else {
            turnNext();
          }
        });
      });
    });

    // Back cover restart handlers
    const backCoverBtn = document.getElementById('backCoverRestartBtn');
    if (backCoverBtn) {
      backCoverBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        jumpToSheet(0);
      });
    }

    prevBtn.addEventListener('click', turnPrev);
    nextBtn.addEventListener('click', turnNext);

    window.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowRight' || e.key === ' ') {
        e.preventDefault();
        if (currentSheet === totalSheets) jumpToSheet(0);
        else turnNext();
      } else if (e.key === 'ArrowLeft') {
        e.preventDefault();
        turnPrev();
      }
    });

    window.addEventListener('resize', () => {
      renderBook();
    });

    // Stars background effect
    (function initStars() {
      const canvas = document.getElementById('starsCanvas');
      if (!canvas) return;
      const ctx = canvas.getContext('2d');
      let w = canvas.width = window.innerWidth;
      let h = canvas.height = window.innerHeight;

      const stars = Array.from({ length: 80 }, () => ({
        x: Math.random() * w,
        y: Math.random() * h,
        r: Math.random() * 1.4 + 0.3,
        alpha: Math.random() * 0.7 + 0.2,
        speed: Math.random() * 0.015 + 0.005
      }));

      function animate() {
        ctx.clearRect(0, 0, w, h);
        stars.forEach(s => {
          s.alpha += s.speed;
          if (s.alpha > 0.9 || s.alpha < 0.2) s.speed = -s.speed;
          ctx.fillStyle = `rgba(255, 255, 255, ${Math.abs(s.alpha)})`;
          ctx.beginPath();
          ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
          ctx.fill();
        });
        requestAnimationFrame(animate);
      }
      animate();

      window.addEventListener('resize', () => {
        w = canvas.width = window.innerWidth;
        h = canvas.height = window.innerHeight;
      });
    })();

    lucide.createIcons();
    renderBook();
  </script>
</body>
</html>
</template>

<template id="template-silent_words">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Silent Words: What the Poems Didn't Say &mdash; American Author Hub</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Fonts: Cinzel & Playfair Display for headers, Cormorant Garamond for authentic book prose -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    :root {
      --book-h: min(76vh, 650px);
      --book-w: calc(var(--book-h) * (5.5 / 8.5));
    }

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    body {
      font-family: 'Cormorant Garamond', Georgia, serif;
      background: radial-gradient(ellipse at 50% 25%, #061a14 0%, #020d0a 55%, #010504 100%);
      user-select: none;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .font-ui { font-family: 'Montserrat', sans-serif; }
    .font-cinzel { font-family: 'Cinzel', serif; }
    .font-playfair { font-family: 'Playfair Display', Georgia, serif; }

    .scene-3d {
      perspective: 2600px;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      flex: 1;
      overflow: hidden;
    }

    .book-core {
      width: var(--book-w);
      height: var(--book-h);
      position: relative;
      transform-style: preserve-3d;
      transition: transform 0.85s cubic-bezier(0.25, 1, 0.5, 1);
      transform-origin: left center;
      transform: translateX(0%);
      flex-shrink: 0;
    }

    .sheet {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      width: 100% !important;
      height: 100% !important;
      transform-origin: left center;
      transform-style: preserve-3d;
      transition: transform 0.85s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .sheet.flipped {
      transform: rotateY(-180deg);
    }

    .sheet-face {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      right: 0 !important;
      bottom: 0 !important;
      width: 100% !important;
      height: 100% !important;
      box-sizing: border-box !important;
      margin: 0 !important;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
      overflow: hidden;
    }

    .sheet-face.front {
      z-index: 2;
      border-radius: 3px 12px 12px 3px;
    }

    .sheet-face.back {
      transform: rotateY(180deg);
      z-index: 1;
      border-radius: 12px 3px 3px 12px;
    }

    /* Authentic Book Paper Styling & 3D Book Shape */
    .book-paper {
      background-color: #faf6ee;
      color: #221c17;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden;
      line-height: 1.58;
    }

    /* Verso (Left Page) - Spine is on the Right */
    .book-paper-verso {
      padding: 1.25rem 1.65rem 0.85rem 1.25rem;
      background: linear-gradient(to right, #faf6ee 0%, #faf6ee 80%, #f0e8d6 95%, #dfd1b8 100%);
      box-shadow: inset -26px 0 28px -12px rgba(45, 25, 12, 0.3), -4px 6px 18px rgba(0,0,0,0.35);
      border-right: 1px solid rgba(80, 50, 20, 0.25);
    }

    /* Recto (Right Page) - Spine is on the Left */
    .book-paper-recto {
      padding: 1.25rem 1.25rem 0.85rem 1.65rem;
      background: linear-gradient(to left, #faf6ee 0%, #faf6ee 80%, #f0e8d6 95%, #dfd1b8 100%);
      box-shadow: inset 26px 0 28px -12px rgba(45, 25, 12, 0.3), 4px 6px 18px rgba(0,0,0,0.35);
      border-left: 1px solid rgba(80, 50, 20, 0.25);
    }

    /* Spine Creases on Covers */
    .book-spine-crease {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 28px;
      background: linear-gradient(to right, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.18) 25%, rgba(255,255,255,0.06) 28%, transparent 100%);
      pointer-events: none;
      z-index: 5;
    }

    .book-spine-crease-right {
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      width: 28px;
      background: linear-gradient(to left, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.18) 25%, rgba(255,255,255,0.06) 28%, transparent 100%);
      pointer-events: none;
      z-index: 5;
    }

    /* Refined Running Header (Book Standard) */
    .book-running-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 8px;
      font-weight: 600;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: #7a6a5a;
      padding-bottom: 4px;
      border-bottom: 1px solid #e0d6c7;
      margin-bottom: 8px;
    }

    /* Refined Chapter Headings */
    .book-chapter-head {
      text-align: center;
      margin-bottom: 8px;
    }

    .book-chapter-number {
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 9px;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: #8c6943;
      font-weight: 600;
      display: block;
    }

    .book-chapter-title {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 15.5px;
      font-weight: 700;
      color: #1a1410;
      letter-spacing: 0.02em;
      margin-top: 1px;
    }

    .book-chapter-divider {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      margin: 4px auto;
      color: #a8947e;
      font-size: 8px;
    }

    .book-chapter-divider::before,
    .book-chapter-divider::after {
      content: '';
      width: 18px;
      height: 1px;
      background-color: #d8cdbe;
    }

    /* Refined Drop Cap */
    .book-drop-cap {
      float: left;
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 2.7em;
      line-height: 0.76;
      padding-top: 2px;
      padding-right: 6px;
      padding-bottom: 0px;
      color: #1a1410;
      font-weight: 700;
    }

    .book-small-caps {
      font-family: 'Cinzel', 'Playfair Display', Georgia, serif;
      font-size: 9.5px;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 700;
      color: #2b221a;
    }

    /* Body Text & Indents (Book Typography) */
    .book-prose {
      text-align: justify;
      text-justify: inter-word;
      font-size: 11.5px;
      line-height: 1.58;
      color: #261f19;
    }

    .book-prose p + p {
      text-indent: 1.25em;
      margin-top: 0.25em;
    }

    /* Bottom Folio */
    .book-folio {
      text-align: center;
      font-family: 'Cormorant Garamond', Georgia, serif;
      font-size: 10.5px;
      font-style: italic;
      color: #857566;
      border-top: 1px solid #e5dcce;
      padding-top: 4px;
      margin-top: 6px;
      letter-spacing: 0.08em;
    }

    .page-turn-overlay {
      position: absolute;
      inset: 0;
      cursor: pointer;
      z-index: 30;
    }

    #starsCanvas {
      position: fixed;
      inset: 0;
      pointer-events: none;
      z-index: 1;
    }

    @media (max-width: 640px) {
      :root {
        --book-h: min(72vh, 520px);
        --book-w: calc(var(--book-h) * (5.5 / 8.5));
      }
      .book-paper { padding: 0.9rem 1rem; }
      .book-prose { font-size: 10.5px; line-height: 1.5; }
    }
  </style>
</head>
<body class="text-slate-100">

  <canvas id="starsCanvas"></canvas>

  <!-- Interactive 3D Book Stage -->
  <main class="relative z-10 flex-1 flex flex-col items-center justify-center p-2 sm:p-4 overflow-hidden">
    <div id="turnNotice" class="font-ui text-[11px] uppercase tracking-widest text-amber-200/80 mb-2 flex items-center space-x-2 animate-pulse flex-shrink-0">
      <i data-lucide="hand" class="w-3.5 h-3.5"></i>
      <span>Click any page edge or press &rarr; to turn &bull; End cover flips to start</span>
    </div>

    <div class="scene-3d">
      <div id="book" class="book-core">

        <!-- SHEET 0: FRONT COVER & TITLE PAGE -->
        <div class="sheet" id="sheet-0" style="z-index: 10;">
          <!-- Front Cover -->
          <div class="sheet-face front bg-[#0a0a0f] text-white flex flex-col justify-between shadow-2xl overflow-hidden group">
            <img src="/assets/covers/silent-words.png" alt="Silent Words: What the Poems Didn't Say" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none" style="border-radius: 3px 12px 12px 3px;">
            <div class="book-spine-crease"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-r from-black/40 via-transparent to-black/20"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>

            <div class="relative z-10 p-4 mt-auto text-center pointer-events-none">
              <span class="inline-flex items-center space-x-1.5 px-3.5 py-1 rounded-full bg-black/80 backdrop-blur-md border border-white/20 text-[10px] text-white uppercase tracking-wider font-semibold shadow-lg">
                <span>Click Cover to Open</span> <i data-lucide="arrow-right" class="w-3.5 h-3.5 ml-1"></i>
              </span>
            </div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 1 (Verso): Title Page / Colophon -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="text-center pt-3">
    <span class="font-cinzel text-[8.5px] tracking-[0.25em] uppercase text-emerald-800 font-semibold block">Poetry &amp; Memoir</span>
    <h1 class="font-playfair text-[19px] sm:text-[21px] font-extrabold text-[#1a1410] tracking-wide mt-1.5">
      SILENT WORDS
    </h1>
    <p class="font-playfair text-[12.5px] italic text-[#3b5c4a] mt-0.5">What the Poems Didn't Say</p>
    <div class="flex items-center justify-center my-2 space-x-2 text-[#9dc2b2]">
      <span class="h-px w-6 bg-[#bed8cd]"></span>
      <span class="text-[9px]">✦</span>
      <span class="h-px w-6 bg-[#bed8cd]"></span>
    </div>
    <p class="font-cinzel text-[9.5px] tracking-[0.2em] uppercase text-[#23382d] font-bold">By Crystal Rauch</p>
  </div>
  
  <div class="my-3 text-center">
    <div class="w-10 h-10 mx-auto rounded-full border border-emerald-800/20 bg-emerald-900/5 flex items-center justify-center">
      <i data-lucide="feather" class="w-5 h-5 text-emerald-800"></i>
    </div>
    <span class="font-cinzel text-[7.5px] uppercase tracking-[0.25em] text-[#668c78] mt-1 block">First Edition</span>
  </div>

  <div class="text-center text-[9px] font-ui text-[#5c7a6b] space-y-0.5 mt-2">
    <p class="font-semibold uppercase tracking-wider text-[#2c4a3b]">American Author Hub Publishing</p>
    <p>New York &bull; London &bull; Nashville</p>
    <p class="text-[8px] text-[#7d9c8d]">Library of Congress Cataloging-in-Publication Data</p>
    <p class="text-[8px] text-[#7d9c8d]">Copyright &copy; 2026 Crystal Rauch. All rights reserved.</p>
  </div>
</div>
<div class="book-folio">— i —</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 1: PAGES 2 & 3 -->
        <div class="sheet" id="sheet-1" style="z-index: 9;">
          <!-- Page 2 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>Silent Words</span>
    <span>Dedication &amp; Foreword</span>
  </div>

  <div class="p-2 my-1 rounded border border-emerald-900/15 bg-emerald-900/5 text-center">
    <p class="font-playfair text-[10.5px] italic text-[#2b4a3a] leading-snug">
      "To anyone who has ever swallowed their sorrow in silence, believing their pain had no name. Your words matter. Your healing is possible. Every broken chapter is leading you home."
    </p>
  </div>

  <div class="book-chapter-head mt-2">
    <span class="book-chapter-number">The Journey Within</span>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="font-ui text-[9.5px] text-[#273d32] space-y-1.5 px-1">
    <div class="flex items-baseline justify-between font-semibold">
      <span>AUTHOR'S NOTE &bull; Every Broken Chapter</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">6</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>PART I &bull; Early Echoes &amp; The Quiet Home</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">11</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>PART II &bull; Courtrooms, Custody &amp; Fear</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">34</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>PART III &bull; The Fragile Road to Sobriety</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">58</span>
    </div>
    <div class="flex items-baseline justify-between">
      <span>PART IV &bull; Motherhood, Rescued Souls &amp; Grace</span>
      <span class="border-b border-dotted border-[#aebec8] flex-1 mx-2"></span>
      <span class="font-serif">86</span>
    </div>
  </div>
</div>
<div class="book-folio">2</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 3 (Verso) -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="book-running-head">
    <span>Silent Words: What the Poems Didn't Say</span>
    <span>Author's Note</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Author's Reflection</span>
    <h2 class="book-chapter-title">Every Broken Chapter Led Me Here</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">G</span><span class="book-small-caps">rowing up in a home</span> filled with hurt, uncertainty, and addiction, I learned early how to survive in silence. When you feel unheard, you begin to believe that silence is safety. For decades, the only place my deepest truths could breathe was on scraps of paper hidden in dresser drawers.
    </p>
    <p>
      These poems are not merely verses—they are the breadcrumbs of a woman walking out of deep darkness. From bitter custody battles to overcoming substance dependency, from debilitating agoraphobia to finding unconditional love in God and my family, this book is living proof that grace can rewrite any ending.
    </p>
    <p class="text-right font-playfair italic font-bold text-[#182d23] pt-0.5 text-[10.5px]">
      &mdash; Crystal Rauch
    </p>
  </div>
</div>
<div class="book-folio">3</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 2: PAGES 4 & 5 -->
        <div class="sheet" id="sheet-2" style="z-index: 8;">
          <!-- Page 4 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>The Voice in the Shadow</span>
    <span>Part One</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Selected Poems</span>
    <h2 class="book-chapter-title">The Girl Who Waited</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="text-center italic space-y-1.5 my-1 text-stone-800 text-[11px] leading-relaxed">
    <p>I learned to count the footsteps in the hall,</p>
    <p>To measure anger by the closing door,</p>
    <p>To tuck my prayers beneath the bedroom floor,</p>
    <p>And whisper promises when tears would fall.</p>
    <div class="flex items-center justify-center space-x-1 text-emerald-800/40 my-1">
      <span>&bull;</span><span>&bull;</span><span>&bull;</span>
    </div>
    <p>They thought the silence was an empty space,</p>
    <p>A quiet child who had no words to say—</p>
    <p>They never knew I saved them for the day</p>
    <p>When truth would wash the shadow from my face.</p>
  </div>
</div>
<div class="book-folio">4</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- Page 5 (Verso) -->
          <div class="sheet-face back book-paper book-paper-verso">
            <div>
  <div class="book-running-head">
    <span>Rising into Grace</span>
    <span>Part Two</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">Healing &amp; Full Circle</span>
    <h2 class="book-chapter-title">Her Child, My Child</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="book-prose space-y-1.5">
    <p>
      <span class="book-drop-cap">R</span><span class="book-small-caps">ecovery did not happen</span> like a lightning strike; it came like dawn, slow and tender. Holding my child for the first time showed me the ferocious, healing power of pure love. Rescuing dogs with broken pasts taught me that love can mend what seemed permanently shattered.
    </p>
    <p>
      Today, as an ordained minister standing beside my wonderful husband and raising our blended family, I can look back at every storm with gratitude. Not because the pain was easy, but because without it, I would never have discovered how bright the light could be.
    </p>
  </div>
</div>
<div class="book-folio">5</div>
            <div class="page-turn-overlay"></div>
          </div>
        </div>

        <!-- SHEET 3: PAGE 6 & REAL BACK COVER -->
        <div class="sheet" id="sheet-3" style="z-index: 7;">
          <!-- Page 6 (Recto) -->
          <div class="sheet-face front book-paper book-paper-recto">
            <div>
  <div class="book-running-head">
    <span>Silent Words</span>
    <span>About the Author</span>
  </div>

  <div class="book-chapter-head">
    <span class="book-chapter-number">In Grace &amp; Faith</span>
    <h2 class="book-chapter-title">About Crystal Rauch</h2>
    <div class="book-chapter-divider"></div>
  </div>

  <div class="space-y-1.5 font-ui text-[9.5px] text-[#273d32]">
    <div class="p-1.5 rounded border border-emerald-800/25 bg-emerald-950/5">
      <span class="font-cinzel text-[10px] font-bold text-emerald-900 block">Ordained Minister, Poet &amp; Mother</span>
      <p class="text-[#3b5947] mt-0.5 leading-snug">
        Crystal Rauch dedicates her life and ministry to encouraging those who walk through the valleys of grief, addiction recovery, and trauma. Her words offer a warm hand in the dark.
      </p>
    </div>

    <div class="p-1.5 rounded border border-emerald-900/15 bg-white/60 text-center">
      <p class="font-serif italic text-[11px] text-[#2b4a3a]">
        "Recovery doesn't mean the struggle never existed; it means love had the final word."
      </p>
    </div>
  </div>

  <div class="mt-2.5 p-1.5 rounded border border-[#bed8cd] text-center bg-[#f0faf5]">
    <span class="font-cinzel text-[8.5px] uppercase tracking-wider text-[#2c4a3b] font-bold block">Turn page to view full back cover &rarr;</span>
  </div>
</div>
<div class="book-folio">6</div>
            <div class="page-turn-overlay"></div>
          </div>

          <!-- REAL BACK COVER (Verso on flip) -->
          <div class="sheet-face back bg-[#0a0a0f] text-white flex flex-col justify-between shadow-2xl overflow-hidden group">
            <img src="/assets/covers/back/silent-words-back.png" alt="Silent Words: What the Poems Didn't Say Back Cover" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none" style="border-radius: 12px 3px 3px 12px;">
            <div class="book-spine-crease-right"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-l from-black/40 via-transparent to-black/20"></div>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/55 via-transparent to-transparent"></div>

            <div class="relative z-10 p-4 mt-auto text-center pointer-events-none">
              <button id="backCoverRestartBtn" class="pointer-events-auto inline-flex items-center space-x-1.5 px-3.5 py-1.5 rounded-full bg-black/85 hover:bg-black text-amber-200 border border-white/20 text-[10px] uppercase tracking-wider font-semibold shadow-xl transition cursor-pointer">
                <i data-lucide="rotate-ccw" class="w-3.5 h-3.5 mr-1 text-amber-300"></i>
                <span>Click to Flip to Start</span>
              </button>
            </div>
            <div class="page-turn-overlay" id="backCoverOverlay"></div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <!-- Reader Bottom Navigation Bar -->
  <footer class="relative z-20 bg-black/75 backdrop-blur-md border-t border-white/10 px-4 py-2 flex items-center justify-between text-xs font-ui flex-shrink-0">
    <div class="flex items-center space-x-2">
      <button id="prevBtn" class="px-3 py-1 rounded-lg bg-white/10 hover:bg-white/20 text-white disabled:opacity-30 disabled:pointer-events-none transition flex items-center space-x-1">
        <i data-lucide="chevron-left" class="w-3.5 h-3.5"></i>
        <span class="hidden sm:inline">Previous</span>
      </button>
      <button id="nextBtn" class="px-3 py-1 rounded-lg bg-amber-600/80 hover:bg-amber-600 text-white disabled:opacity-30 disabled:pointer-events-none transition flex items-center space-x-1">
        <span class="hidden sm:inline">Next</span>
        <i data-lucide="chevron-right" class="w-4 h-4"></i>
      </button>
    </div>

    <div class="flex items-center space-x-3">
      <span id="pageLabel" class="text-amber-200/90 font-medium tracking-wide text-[11px]">Cover &bull; 0 / 4</span>
      <div id="dotIndicators" class="flex items-center space-x-1.5"></div>
    </div>

    <div class="text-[10.5px] text-slate-400 hidden md:block tracking-wider">
      Use <kbd class="px-1.5 py-0.5 rounded bg-white/10 text-white font-mono text-[9.5px]">Space</kbd> or <kbd class="px-1.5 py-0.5 rounded bg-white/10 text-white font-mono text-[9.5px]">&rarr;</kbd> to turn pages
    </div>
  </footer>

  <script>
    const sheets = [
      document.getElementById('sheet-0'),
      document.getElementById('sheet-1'),
      document.getElementById('sheet-2'),
      document.getElementById('sheet-3')
    ];

    const book = document.getElementById('book');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const pageLabel = document.getElementById('pageLabel');
    const dotContainer = document.getElementById('dotIndicators');
    const turnNotice = document.getElementById('turnNotice');

    let currentSheet = 0;
    const totalSheets = sheets.length;

    function getOpenScale() {
      const bookW = book.offsetWidth || (window.innerHeight * 0.72 * (5.5 / 8.5));
      const spreadW = bookW * 2;
      const availW = window.innerWidth - 20; // 10px safe margin on both sides
      if (spreadW > availW) {
        return Math.min(1, Math.max(0.35, availW / spreadW));
      }
      return 1;
    }

    function renderBook() {
      sheets.forEach((sheet, idx) => {
        sheet.style.transform = '';
        if (idx < currentSheet) {
          sheet.classList.add('flipped');
          sheet.style.zIndex = idx + 1;
        } else {
          sheet.classList.remove('flipped');
          sheet.style.zIndex = totalSheets - idx;
        }
      });

      if (currentSheet === 0) {
        // Front Cover: single closed book centered
        book.style.transform = 'translateX(0%) scale(1)';
        pageLabel.textContent = 'Cover • 0 / ' + totalSheets;
        turnNotice.style.opacity = '1';
      } else if (currentSheet === totalSheets) {
        // Back Cover: single closed book centered, fully covering prior pages
        book.style.transform = 'translateX(100%) scale(1)';
        pageLabel.textContent = 'Back Cover • ' + totalSheets + ' / ' + totalSheets;
        turnNotice.style.opacity = '0';
        sheets[totalSheets - 1].style.zIndex = 100;
      } else {
        // Open two-page spread: centered on spine, scaled on mobile so it never cuts off
        const openScale = getOpenScale();
        book.style.transform = `translateX(50%) scale(${openScale})`;
        pageLabel.textContent = `Pages ${currentSheet * 2 - 1}-${currentSheet * 2} • ${currentSheet} / ${totalSheets}`;
        turnNotice.style.opacity = '0';
      }

      prevBtn.disabled = (currentSheet === 0);
      nextBtn.disabled = (currentSheet === totalSheets);
      buildDots();
    }

    function buildDots() {
      dotContainer.innerHTML = '';
      for (let i = 0; i <= totalSheets; i++) {
        const dot = document.createElement('button');
        dot.className = `w-2 h-2 rounded-full transition-all ${i === currentSheet ? 'bg-amber-400 w-5' : 'bg-white/30 hover:bg-white/50'}`;
        dot.onclick = () => jumpToSheet(i);
        dotContainer.appendChild(dot);
      }
    }

    function turnNext() {
      if (currentSheet < totalSheets) {
        currentSheet++;
        renderBook();
      }
    }

    function turnPrev() {
      if (currentSheet > 0) {
        currentSheet--;
        renderBook();
      }
    }

    function jumpToSheet(index) {
      currentSheet = Math.max(0, Math.min(totalSheets, index));
      renderBook();
    }

    // Sheet click triggers
    sheets.forEach((sheet, idx) => {
      const overlays = sheet.querySelectorAll('.page-turn-overlay');
      overlays.forEach(overlay => {
        overlay.addEventListener('click', (e) => {
          e.stopPropagation();
          if (overlay.id === 'backCoverOverlay') {
            jumpToSheet(0);
            return;
          }
          if (idx < currentSheet) {
            turnPrev();
          } else {
            turnNext();
          }
        });
      });
    });

    // Back cover restart handlers
    const backCoverBtn = document.getElementById('backCoverRestartBtn');
    if (backCoverBtn) {
      backCoverBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        jumpToSheet(0);
      });
    }

    prevBtn.addEventListener('click', turnPrev);
    nextBtn.addEventListener('click', turnNext);

    window.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowRight' || e.key === ' ') {
        e.preventDefault();
        if (currentSheet === totalSheets) jumpToSheet(0);
        else turnNext();
      } else if (e.key === 'ArrowLeft') {
        e.preventDefault();
        turnPrev();
      }
    });

    window.addEventListener('resize', () => {
      renderBook();
    });

    // Stars background effect
    (function initStars() {
      const canvas = document.getElementById('starsCanvas');
      if (!canvas) return;
      const ctx = canvas.getContext('2d');
      let w = canvas.width = window.innerWidth;
      let h = canvas.height = window.innerHeight;

      const stars = Array.from({ length: 80 }, () => ({
        x: Math.random() * w,
        y: Math.random() * h,
        r: Math.random() * 1.4 + 0.3,
        alpha: Math.random() * 0.7 + 0.2,
        speed: Math.random() * 0.015 + 0.005
      }));

      function animate() {
        ctx.clearRect(0, 0, w, h);
        stars.forEach(s => {
          s.alpha += s.speed;
          if (s.alpha > 0.9 || s.alpha < 0.2) s.speed = -s.speed;
          ctx.fillStyle = `rgba(255, 255, 255, ${Math.abs(s.alpha)})`;
          ctx.beginPath();
          ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
          ctx.fill();
        });
        requestAnimationFrame(animate);
      }
      animate();

      window.addEventListener('resize', () => {
        w = canvas.width = window.innerWidth;
        h = canvas.height = window.innerHeight;
      });
    })();

    lucide.createIcons();
    renderBook();
  </script>
</body>
</html>
</template>