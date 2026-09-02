<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Ahsan Firoz, PMP, MIAB — Architect, Project Management Professional, Business & Development Strategist, Founder & CEO.">
  <meta name="theme-color" content="#39BF47">
  <title>Ahsan Firoz — Architect · Project Management · Development</title>
  <link rel="icon" href="{{ asset('assets/img/brand-green-reference.jpg') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>tailwind.config={corePlugins:{preflight:false},theme:{extend:{colors:{afgreen:'#39BF47',afdeep:'#122019'}}}}</script>
</head>
<body>
  <header id="site-header" class="site-header">
    <div class="header-shell">
      <a class="brand" href="#home" aria-label="Ahsan Firoz home">
        <span class="brand-mark">AF</span>
        <span class="brand-word">AHSAN FIROZ</span>
      </a>
      <button class="mobile-toggle" type="button" aria-controls="primary-nav" aria-expanded="false" aria-label="Open menu"><i class="bi bi-list"></i></button>
      <nav id="primary-nav" class="primary-nav" aria-label="Primary navigation">
        <a class="nav-link active" href="#home">Home</a>
        <a class="nav-link" href="#about">About</a>
        <a class="nav-link" href="#skills">Skills</a>
        <div class="nav-item">
          <a class="nav-link" href="#experience">Experience</a>
          <button type="button" class="nav-caret-btn" aria-expanded="false" aria-controls="experience-dropdown" aria-label="Show experience roles"><i class="bi bi-chevron-down"></i></button>
          <div class="nav-dropdown" id="experience-dropdown">
            <div class="nav-dropdown-inner">
              <a href="#exp-founder">Founder &amp; CEO<span>Avenue Projects</span></a>
              <a href="#exp-ace">Architect<span>ACE Consultants Ltd.</span></a>
              <a href="#exp-vitti">Senior Architect / PM<span>Vitti Sthapati Brindo Ltd.</span></a>
              <a href="#exp-balisera">Head of Development<span>Balisera Hill Tea Co. Ltd.</span></a>
              <a href="#exp-lged">Architect / Project Coordinator<span>LGED, Bangladesh</span></a>
              <a href="#exp-brac">Consulting &amp; Early Practice<span>BRAC / UNDP / Vitti Sthapati Brindo</span></a>
            </div>
          </div>
        </div>
        <a class="nav-link" href="#contact">Contact</a>
      </nav>
      <a class="header-cta" href="#contact">Let's Talk <i class="bi bi-arrow-up-right"></i></a>
    </div>
  </header>

  <main>
    <section id="home" class="hero section-anchor">
      <div class="hero-grid-lines" aria-hidden="true"></div>
      <div class="container hero-inner">
        <div class="row align-items-center gy-5">
          <div class="col-lg-7" data-aos="fade-right">
            <div class="eyebrow"><span class="dot"></span> ARCHITECT · PROJECT MANAGEMENT · DEVELOPMENT</div>
            <h1>Architecting<br><span>Better Futures.</span></h1>
            <p class="hero-role">I’m an <strong>Architect</strong>, <strong>Project Management Professional</strong> &amp; <strong>Business &amp; Development Strategist</strong>.</p>
            <p class="hero-copy">More than 16 years of multidisciplinary experience connecting architectural creativity with structured project delivery, commercial thinking and sustainable development.</p>
            <div class="hero-actions">
              <a href="#experience" class="btn-primary-af">Explore Experience <i class="bi bi-arrow-right"></i></a>
              <a href="#contact" class="btn-outline-af">Start a Conversation</a>
            </div>
            <div class="hero-proof">
              <div><strong data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1.4" class="purecounter">16</strong><span>Years<br>Experience</span></div>
              <div><strong>20+</strong><span>Projects<br>Listed</span></div>
              <div><strong>$120M+</strong><span>Project<br>Value</span></div>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-left" data-aos-delay="150">
            <div class="hero-portrait-wrap">
              <div class="datum datum-a"></div><div class="datum datum-b"></div><div class="datum datum-c"></div>
              <div class="portrait-frame"><img src="{{ asset('assets/img/ahsan-portrait.jpeg') }}" alt="Professional portrait of Ahsan Firoz"></div>
              {{-- <div class="portrait-tag"><span>AF / 01</span><b>DESIGN · DELIVERY · DEVELOPMENT</b></div>
              <div class="coordinate">23°48′N<br>90°24′E</div> --}}
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="about section-anchor">
      <div class="container">
        <div class="section-kicker" data-aos="fade-up">01 / ABOUT</div>
        <div class="row g-5 align-items-start">
          <div class="col-lg-5" data-aos="fade-up">
            <div class="section-title"><h2>Leadership.<br><em>Vision.</em><br>Dedication.</h2></div>
            <p class="lead-copy">A multidisciplinary professional profile built around design excellence, disciplined execution and long-term value.</p>
            <div class="about-card">
              <div class="about-card-top"><span>PROFESSIONAL PROFILE</span><i class="bi bi-arrow-up-right"></i></div>
              <h3>Ahsan Firoz, PMP, MIAB</h3>
              <p>Architect · Project Management Professional · Business &amp; Development Strategist · Founder &amp; CEO</p>
            </div>
          </div>
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="120">
            <p class="body-large">Ahsan Firoz brings together technical architectural expertise, project management capability, commercial understanding and strategic leadership across government and private-sector projects.</p>
            <p>As Founder &amp; CEO of Avenue Projects, he provides strategic leadership across architectural design, project management, interior design-build and construction—guiding projects from concept and feasibility through procurement, construction, handover and post-completion.</p>
            <div class="value-grid">
              <div><span>01</span><h4>Integrity</h4><p>Accountability, transparency and responsible professional practice.</p></div>
              <div><span>02</span><h4>Innovation</h4><p>Practical ideas that improve design, delivery and development.</p></div>
              <div><span>03</span><h4>Sustainability</h4><p>Long-term thinking across environmental, social and operational value.</p></div>
              <div><span>04</span><h4>Excellence</h4><p>Quality-driven execution with attention to detail and outcomes.</p></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="skills" class="skills section-anchor">
      <div class="container">
        <div class="section-kicker" data-aos="fade-up">02 / SKILLS</div>
        <div class="row mb-5 align-items-end">
          <div class="col-lg-7"><h2 class="display-title" data-aos="fade-up">Capabilities that<br><span>move projects forward.</span></h2></div>
          <div class="col-lg-5"><p class="section-intro" data-aos="fade-up">A balanced skill set across architecture, project delivery, business development and stakeholder leadership.</p></div>
        </div>
        <div class="skill-grid">
          <article class="skill-card" data-aos="fade-up"><span class="skill-no">01</span><i class="bi bi-building"></i><h3>Architectural Design</h3><p>Architectural design and drawing, planning, detailing, coordination and design development.</p><div class="skill-line"></div></article>
          <article class="skill-card" data-aos="fade-up" data-aos-delay="80"><span class="skill-no">02</span><i class="bi bi-kanban"></i><h3>Project Management</h3><p>Planning, forecasting, quality, risk, schedule, cost control, procurement and delivery.</p><div class="skill-line"></div></article>
          <article class="skill-card" data-aos="fade-up" data-aos-delay="160"><span class="skill-no">03</span><i class="bi bi-diagram-3"></i><h3>Feasibility &amp; Planning</h3><p>Feasibility analysis, strategic development, project acquisition and commercial structuring.</p><div class="skill-line"></div></article>
          <article class="skill-card" data-aos="fade-up"><span class="skill-no">04</span><i class="bi bi-people"></i><h3>Stakeholder Leadership</h3><p>Multidisciplinary coordination, negotiation, client communication and team management.</p><div class="skill-line"></div></article>
          <article class="skill-card" data-aos="fade-up" data-aos-delay="80"><span class="skill-no">05</span><i class="bi bi-hammer"></i><h3>Construction Management</h3><p>Construction coordination, implementation, quality control and handover.</p><div class="skill-line"></div></article>
          <article class="skill-card" data-aos="fade-up" data-aos-delay="160"><span class="skill-no">06</span><i class="bi bi-recycle"></i><h3>Sustainability</h3><p>Sustainable development, WASH innovation, safeguards and environmentally responsible solutions.</p><div class="skill-line"></div></article>
        </div>
        <div class="tool-strip" data-aos="fade-up"><span>TOOLS</span><b>AutoCAD 2D/3D</b><b>Photoshop</b><b>Illustrator</b><b>Visio</b><b>MS Project</b><b>Primavera P6</b><b>SketchUp</b></div>
      </div>
    </section>

    <section id="experience" class="experience section-anchor">
      <div class="container">
        <div class="section-kicker" data-aos="fade-up">03 / EXPERIENCE</div>
        <div class="row g-5">
          <div class="col-lg-4" data-aos="fade-up">
            <h2 class="display-title">Built across<br><span>complex contexts.</span></h2>
            <p class="section-intro">Government, private sector, development, consulting and entrepreneurship—each role adding a different layer of delivery intelligence.</p>
            <div class="experience-proof"><strong>$115M</strong><span>LGED development program</span></div>
            <div class="experience-proof"><strong>$7M</strong><span>Selected contractual agreements</span></div>
          </div>
          <div class="col-lg-8">
            <div class="timeline">
              <article id="exp-founder" class="timeline-item" data-aos="fade-up"><div class="timeline-year">Sept ’26 — Now</div><div class="timeline-dot"></div><div class="timeline-content"><span>Avenue Projects</span><h3>Founder &amp; CEO</h3><ul class="timeline-list"><li>Define and execute the company's long-term vision, business strategy, growth roadmap and market positioning across project management, architectural design, interior design-build and construction.</li><li>Provide strategic direction from initial concept, feasibility and design through procurement, construction, handover and post-completion, ensuring quality, timeline, budget and client expectations are met.</li><li>Lead the organization in delivering innovative architectural solutions, high-quality interiors and technically sound construction while upholding the highest standards of craftsmanship, safety and compliance.</li><li>Build and develop a high-performing multidisciplinary team of architects, engineers, project managers, designers and construction professionals, fostering accountability and continuous improvement.</li></ul></div></article>
              <article id="exp-ace" class="timeline-item" data-aos="fade-up"><div class="timeline-year">Nov ’21 — Aug ’26</div><div class="timeline-dot"></div><div class="timeline-content"><span>ACE Consultants Ltd. / SJ-SMEC</span><h3>Architect</h3><p>Prepared feasibility study and detailed architectural design for Dhaka MRT Line 05 Southern Route, including station infrastructure, specifications, BoQ and cost estimation, plus TOD strategy, finishes, façade and roofing systems.</p></div></article>
              <article id="exp-vitti" class="timeline-item" data-aos="fade-up"><div class="timeline-year">Oct ’19 — Nov ’21</div><div class="timeline-dot"></div><div class="timeline-content"><span>Vitti Sthapati Brindo Ltd.</span><h3>Senior Architect / Project Manager</h3><ul class="timeline-list"><li>Led project acquisition and commercial structuring for EXIM Tower, British American Tobacco, DPDC Twin Tower, Aviation &amp; Aerospace University, Hamid Tower and DPDC Four Star Hotel.</li><li>Managed projects totaling USD 20M+, serving as Project Manager for EXIM Tower, BIDA Bhaban and British American Tobacco within a two-year period.</li><li>Developed schematic designs, ballpark estimates and contractual frameworks, including USD 7M in agreements for EXIM Tower and DPDC Hatirjheel projects.</li><li>Coordinated complex multi-party and international collaborations involving Kengo Kuma &amp; Associates, HVS Singapore and DPDC.</li></ul><div class="mini-projects"><b>EXIM Tower</b><b>BIDA Bhaban</b><b>BAT Project</b></div></div></article>
              <article id="exp-balisera" class="timeline-item" data-aos="fade-up"><div class="timeline-year">Earlier</div><div class="timeline-dot"></div><div class="timeline-content"><span>Balisera Hill Tea Co. Ltd.</span><h3>Head of Development</h3><p>Designed and supervised construction of a 30,000 kg-capacity withering house, prepared contract packages and delivered small civil structures.</p></div></article>
              <article id="exp-lged" class="timeline-item" data-aos="fade-up"><div class="timeline-year">2013 — 2018</div><div class="timeline-dot"></div><div class="timeline-content"><span>LGED, Bangladesh</span><h3>Architect / Project Coordinator</h3><p>Worked across public infrastructure, landscape, parks and transportation interchange projects, supporting priorities for Gazipur City Corporation, 13 municipalities and 35 urban centers.</p></div></article>
              <article id="exp-brac" class="timeline-item" data-aos="fade-up"><div class="timeline-year">Earlier</div><div class="timeline-dot"></div><div class="timeline-content"><span>BRAC / UNDP / Vitti Sthapati Brindo</span><h3>Consulting, Coordination &amp; Early Practice</h3><p>Contributed to WASH innovation, floating sanitation solutions, knowledge management, climate/disaster-risk initiatives and the Old Modhumoti River Project, including bridges, roads, sidewalks and public amenities.</p></div></article>
            </div>
          </div>
        </div>

        <div class="project-band" data-aos="fade-up">
          <div><span class="section-kicker">SELECTED PROJECTS</span><h3>20 projects across architecture, infrastructure &amp; development.</h3></div>
          <a href="{{ asset('docs/Projects-Done-by-Ahsan-Firoz.pdf') }}" target="_blank" rel="noopener">View project list <i class="bi bi-arrow-up-right"></i></a>
        </div>
        <div class="project-grid">
          <div class="project-tile tile-green" data-aos="zoom-in"><span>INFRASTRUCTURE</span><h3>Dhaka MRT Line 05</h3><p>Southern Route · Feasibility &amp; Detailed Architectural Design</p><i class="bi bi-arrow-up-right"></i></div>
          <div class="project-tile tile-dark" data-aos="zoom-in" data-aos-delay="80"><span>COMMERCIAL</span><h3>EXIM Tower</h3><p>Project Management · Acquisition · Commercial Structuring</p><i class="bi bi-arrow-up-right"></i></div>
          <div class="project-tile tile-line" data-aos="zoom-in" data-aos-delay="160"><span>PUBLIC DEVELOPMENT</span><h3>LGED Urban Infrastructure</h3><p>Architect / Project Coordinator · $115M program</p><i class="bi bi-arrow-up-right"></i></div>
          <div class="project-tile tile-light" data-aos="zoom-in"><span>RIVERFRONT</span><h3>Old Modhumoti River Project</h3><p>Project Coordination · Bridges · Roads · Public Amenities</p><i class="bi bi-arrow-up-right"></i></div>
        </div>
      </div>
    </section>

    <section class="credentials">
      <div class="container">
        <div class="credential-row" data-aos="fade-up">
          <div><span>CREDENTIALS</span><strong>PMP</strong><small>Project Management Institute, USA · 2016</small></div>
          <div><strong>M.Arch / Disaster Management</strong><small>BRAC University · Vice Chancellor’s Medal</small></div>
          <div><strong>B.Arch</strong><small>North South University</small></div>
          <div><strong>IAB · F-031</strong><small>Institute of Architects Bangladesh</small></div>
          <div><strong>IELTS 7.5</strong><small>Academic English proficiency</small></div>
        </div>
      </div>
    </section>

    <section id="contact" class="contact section-anchor">
      <div class="container">
        <div class="contact-shell" data-aos="fade-up">
          <div class="contact-copy"><div class="section-kicker">04 / CONTACT</div><h2>Let’s build something<br><span>worth remembering.</span></h2><p>For architecture, project management, development strategy, consulting or collaboration, start a conversation.</p><a class="btn-primary-af" href="mailto:hello@avenueprojects.com">Get in Touch <i class="bi bi-arrow-up-right"></i></a></div>
          <div class="contact-meta"><div><span>PROFILE</span><b>Ahsan Firoz, PMP, MIAB</b></div><div><span>LANGUAGES</span><b>Bangla · English</b></div><div><span>DOCUMENTS</span><a href="{{ asset('docs/Ahsan-Firoz-Resume.pdf') }}" target="_blank">View Resume <i class="bi bi-arrow-up-right"></i></a></div><div><span>PROJECTS</span><a href="{{ asset('docs/Projects-Done-by-Ahsan-Firoz.pdf') }}" target="_blank">Project List <i class="bi bi-arrow-up-right"></i></a></div></div>
        </div>
      </div>
    </section>
  </main>

  <footer><div class="container footer-inner"><span>© <span id="year"></span> Ahsan Firoz</span><span>ARCHITECTURE · PROJECT MANAGEMENT · DEVELOPMENT</span><a href="#home">Back to top ↑</a></div></footer>

  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.umd.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
