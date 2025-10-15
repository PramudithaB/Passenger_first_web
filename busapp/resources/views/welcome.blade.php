<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>TourSite – Explore the world</title>
<style>
  :root{
    --bg:#0f172a;          /* slate-900 */
    --card:#111827;        /* gray-900 */
    --muted:#94a3b8;       /* slate-400 */
    --text:#e5e7eb;        /* gray-200 */
    --brand:#22d3ee;       /* cyan-400 */
    --brand-2:#a78bfa;     /* violet-400 */
    --accent:#34d399;      /* emerald-400 */
    --ring:rgba(34,211,238,.35);
    --radius:18px;
    --shadow:0 10px 25px rgba(0,0,0,.35);
  }
  *{box-sizing:border-box}
  html,body{margin:0;padding:0;background:linear-gradient(120deg,#0b1226, #0f172a 35%, #111827 100%);color:var(--text);font-family:Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;}
  a{color:inherit;text-decoration:none}
  img{max-width:100%;display:block;border-radius:14px}
  .container{width:min(1100px,92%);margin:auto}

  /* Header */
  header{
    position:sticky;top:0;z-index:50;
    background:rgba(15,23,42,.7);backdrop-filter:blur(10px);
    border-bottom:1px solid rgba(148,163,184,.12);
  }
  .nav{display:flex;align-items:center;justify-content:space-between;padding:14px 0;}
  .brand{display:flex;gap:10px;align-items:center;font-weight:800;letter-spacing:.3px}
  .brand .logo{width:36px;height:36px;border-radius:11px;background:conic-gradient(from 180deg at 50% 50%, var(--brand), var(--brand-2), var(--accent), var(--brand));box-shadow:0 0 0 3px rgba(167,139,250,.15)}
  .nav a.link{opacity:.9;margin-left:18px}
  .nav a.cta{
    margin-left:18px;background:linear-gradient(135deg,var(--brand),var(--brand-2));
    padding:10px 16px;border-radius:12px;font-weight:600;box-shadow:var(--shadow)
  }

  /* Hero */
  .hero{padding:64px 0 32px;position:relative;overflow:hidden}
  .hero-grid{display:grid;gap:28px;grid-template-columns:1.2fr .8fr;align-items:center}
  .headline{font-size:clamp(28px,4vw,46px);line-height:1.05;margin:0 0 14px}
  .sub{color:var(--muted);max-width:48ch;margin:0 0 22px}
  .search{
    background:linear-gradient(180deg,rgba(17,24,39,.8),rgba(15,23,42,.9));
    border:1px solid rgba(148,163,184,.18);border-radius:16px;padding:12px;display:flex;gap:8px;flex-wrap:wrap;
    box-shadow:var(--shadow)
  }
  .search input,.search select{
    flex:1 1 180px;background:#0b1020;border:1px solid rgba(148,163,184,.18);
    color:var(--text);padding:12px 14px;border-radius:12px;outline:none
  }
  .search button{
    background:linear-gradient(135deg,var(--accent),var(--brand));
    border:none;color:#041018;font-weight:800;padding:12px 16px;border-radius:12px;cursor:pointer
  }
  .hero-art{
    background:radial-gradient(1200px 700px at 120% -10%, rgba(34,211,238,.15), transparent 40%),
               radial-gradient(900px 600px at -10% 110%, rgba(167,139,250,.12), transparent 45%),
               #0b1020;
    border:1px solid rgba(148,163,184,.15);border-radius:var(--radius);padding:16px;box-shadow:var(--shadow)
  }
  .mosaic{display:grid;grid-template-columns:1fr 1fr;gap:12px}
  .tile{position:relative;aspect-ratio:16/10;background:#0d1326;border:1px solid rgba(148,163,184,.15);border-radius:14px;overflow:hidden}
  .tile::after{
    content:attr(data-label);position:absolute;left:10px;bottom:10px;font-weight:700;
    padding:6px 10px;border-radius:10px;background:rgba(2,8,23,.7);border:1px solid rgba(148,163,184,.2)
  }

  /* Section titles */
  .section{padding:36px 0}
  .section h2{margin:0 0 18px;font-size:clamp(22px,3vw,30px)}
  .muted{color:var(--muted)}

  /* Cards */
  .grid-3{display:grid;gap:18px;grid-template-columns:repeat(3,1fr)}
  .card{
    background:linear-gradient(180deg, rgba(17,24,39,.8), rgba(15,23,42,.95));
    border:1px solid rgba(148,163,184,.15);border-radius:16px;overflow:hidden;box-shadow:var(--shadow)
  }
  .card .body{padding:14px}
  .pill{display:inline-block;padding:6px 10px;border-radius:999px;border:1px solid rgba(148,163,184,.25);font-size:12px;color:var(--muted)}

  /* Perks */
  .perks{display:grid;gap:14px;grid-template-columns:repeat(4,1fr)}
  .perk{background:rgba(2,8,23,.6);border:1px solid rgba(148,163,184,.15);border-radius:14px;padding:14px}
  .perk b{display:block;margin-bottom:6px}

  /* Testimonials */
  .quotes{display:grid;gap:16px;grid-template-columns:1fr 1fr}
  .quote{padding:16px;border-radius:14px;border:1px solid rgba(148,163,184,.15);background:rgba(2,8,23,.6)}

  /* Newsletter */
  .newsletter{
    margin-top:10px;display:flex;gap:10px;flex-wrap:wrap;background:linear-gradient(135deg, rgba(34,211,238,.18), rgba(167,139,250,.16));
    border:1px solid rgba(148,163,184,.2);padding:14px;border-radius:16px
  }
  .newsletter input{flex:1 1 260px;background:#0b1020;border:1px solid rgba(148,163,184,.25);color:var(--text);padding:12px;border-radius:12px}
  .newsletter button{
    background:linear-gradient(135deg,var(--brand-2),var(--brand));border:none;border-radius:12px;padding:12px 16px;font-weight:700;color:#041018
  }

  /* Footer */
  footer{padding:28px 0;color:var(--muted);border-top:1px solid rgba(148,163,184,.12);margin-top:28px}
  .foot{display:flex;gap:20px;flex-wrap:wrap;justify-content:space-between;align-items:center}
  .foot small{opacity:.9}

  /* Responsive */
  @media (max-width: 900px){
    .hero-grid{grid-template-columns:1fr}
    .grid-3{grid-template-columns:1fr 1fr}
    .perks{grid-template-columns:1fr 1fr}
  }
  @media (max-width: 620px){
    .grid-3{grid-template-columns:1fr}
    .perks{grid-template-columns:1fr}
    .quotes{grid-template-columns:1fr}
    .nav a.link{display:none}
  }
</style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="container nav">
      <div class="brand">
        <div class="logo" aria-hidden="true"></div>
        <span>TourSite</span>
      </div>
      <nav>
        <a class="link" href="#destinations">Destinations</a>
        <a class="link" href="#tours">Tours</a>
        <a class="link" href="#why">Why Us</a>
        <a class="link" href="#reviews">Reviews</a>
        <a class="link" href="#search">Book Now</a> 
               <a class="cta" href="{{ route('login') }}">login</a>
                              <a class="cta" href="{{ route('register') }}">Register</a>


      </nav>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero">
    <div class="container hero-grid">
      <div>
        <h1 class="headline">Passernger first bus booking site <span style="background:linear-gradient(90deg,var(--brand),var(--brand-2));-webkit-background-clip:text;background-clip:text;color:transparent">TourSite</span></h1>
        <p class="sub">Curated experiences, flexible dates, and transparent pricing. From tropical retreats to alpine treks—plan it your way.</p>

        <form id="search" class="search" action="#" method="get">
          <input type="text" name="q" placeholder="Search destinations (e.g., Bali, Paris, Kandy)" aria-label="Search destinations" />
          <select name="dates" aria-label="Select month">
            <option value="">Any month</option>
            <option>January</option><option>February</option><option>March</option><option>April</option>
            <option>May</option><option>June</option><option>July</option><option>August</option>
            <option>September</option><option>October</option><option>November</option><option>December</option>
          </select>
          <select name="guests" aria-label="Number of travelers">
            <option value="">Guests</option>
            <option>1</option><option>2</option><option>3–5</option><option>6+</option>
          </select>
          <button type="submit">Search Trips</button>
        </form>
      </div>

      <div class="hero-art" aria-label="Featured gallery">
        <div class="mosaic">
          <div class="tile" data-label="🏝️ Maldives">
            <!-- Placeholder art -->
            <div style="position:absolute;inset:0;background:linear-gradient(180deg,rgba(34,211,238,.25),transparent), url('') center/cover no-repeat;"></div>
          </div>
          <div class="tile" data-label="🏔️ Ella">
            <div style="position:absolute;inset:0;background:linear-gradient(180deg,rgba(167,139,250,.22),transparent);"></div>
          </div>
          <div class="tile" data-label="🏛️ Rome">
            <div style="position:absolute;inset:0;background:linear-gradient(180deg,rgba(52,211,153,.22),transparent);"></div>
          </div>
          <div class="tile" data-label="🌇 Bangkok">
            <div style="position:absolute;inset:0;background:linear-gradient(180deg,rgba(148,163,184,.18),transparent);"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Popular Destinations -->
  <section id="destinations" class="section">
    <div class="container">
      <h2>Popular destinations</h2>
      <p class="muted">Handpicked places travelers love this season.</p>
      <div class="grid-3">
        <article class="card">
          <div class="body">
            <span class="pill">Beach • 5D/4N</span>
            <h3 style="margin:10px 0 6px">Bali Getaway</h3>
            <p class="muted">Relax on pristine beaches, sunrise at Mount Batur, and café hopping in Ubud.</p>
            <p style="margin-top:10px"><b>$899</b> per person</p>
          </div>
        </article>
        <article class="card">
          <div class="body">
            <span class="pill">Culture • 4D/3N</span>
            <h3 style="margin:10px 0 6px">Kandy & Hill Country</h3>
            <p class="muted">Temple of the Tooth, misty tea trails, and the iconic Ella train ride.</p>
            <p style="margin-top:10px"><b>$549</b> per person</p>
          </div>
        </article>
        <article class="card">
          <div class="body">
            <span class="pill">City • 3D/2N</span>
            <h3 style="margin:10px 0 6px">Singapore Express</h3>
            <p class="muted">Skyline walks, Night Safari, and hawker food tours packed into a quick escape.</p>
            <p style="margin-top:10px"><b>$699</b> per person</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Featured Tours -->
  <section id="tours" class="section">
    <div class="container">
      <h2>Featured tours</h2>
      <p class="muted">Limited seats, high demand—secure your spot.</p>
      <div class="grid-3">
        <article class="card">
          <div class="body">
            <h3 style="margin:0 0 6px">Sigiriya Sunrise Hike</h3>
            <p class="muted">Climb the Lion Rock at dawn and explore ancient frescoes.</p>
            <ul style="padding-left:18px;margin:10px 0 0;line-height:1.7">
              <li>Group size: 12</li><li>Difficulty: Easy</li><li>Free cancellation</li>
            </ul>
          </div>
        </article>
        <article class="card">
          <div class="body">
            <h3 style="margin:0 0 6px">South Coast Safari</h3>
            <p class="muted">Spot leopards in Yala and whales off Mirissa shores.</p>
            <ul style="padding-left:18px;margin:10px 0 0;line-height:1.7">
              <li>Group size: 10</li><li>Difficulty: Moderate</li><li>Hotel pickup</li>
            </ul>
          </div>
        </article>
        <article class="card">
          <div class="body">
            <h3 style="margin:0 0 6px">Anuradhapura Heritage Trail</h3>
            <p class="muted">Cycle through sacred ruins with a local expert guide.</p>
            <ul style="padding-left:18px;margin:10px 0 0;line-height:1.7">
              <li>Group size: 8</li><li>Difficulty: Easy</li><li>Audio guide</li>
            </ul>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Why choose us -->
  <section id="why" class="section">
    <div class="container">
      <h2>Why TourSite?</h2>
      <div class="perks">
        <div class="perk"><b>✅ Flexible plans</b><span class="muted">Change dates for free up to 7 days before departure.</span></div>
        <div class="perk"><b>🛡️ Trusted partners</b><span class="muted">Vetted local guides and insured transport.</span></div>
        <div class="perk"><b>💬 24/7 support</b><span class="muted">Real people ready to help—any time, anywhere.</span></div>
        <div class="perk"><b>💳 Clear pricing</b><span class="muted">No hidden fees. What you see is what you pay.</span></div>
      </div>
    </div>
  </section>

  <!-- Reviews -->
  <section id="reviews" class="section">
    <div class="container">
      <h2>Traveler stories</h2>
      <div class="quotes">
        <div class="quote">“Everything was seamless—from pickup to check-in. The Ella views were unreal!” — <b>Amal</b></div>
        <div class="quote">“TourSite nailed our honeymoon. Private guide, perfect hotels, zero stress.” — <b>Savindi</b></div>
      </div>
      <form class="newsletter" action="#" method="post" style="margin-top:18px">
        <input type="email" placeholder="Get deals in your inbox (you can unsubscribe any time)" aria-label="Email address">
        <button type="submit">Subscribe</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container foot">
      <small>© <span id="y">2025</span> TourSite. All rights reserved.</small>
      <div style="display:flex;gap:12px;flex-wrap:wrap">
        <a class="link" href="#">Terms</a>
        <a class="link" href="#">Privacy</a>
        <a class="link" href="#">Support</a>
      </div>
    </div>
  </footer>

<script>
  // small enhancement for current year (optional, no external deps)
  document.getElementById('y').textContent = new Date().getFullYear();
</script>
</body>
</html>
