(function(){
  const header=document.getElementById('site-header');
  const toggle=document.querySelector('.mobile-toggle');
  const nav=document.getElementById('primary-nav');
  const links=[...document.querySelectorAll('.nav-link')];
  const sections=[...document.querySelectorAll('.section-anchor')];
  const reduced=window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  function onScroll(){header.classList.toggle('scrolled',window.scrollY>24);let current='home';sections.forEach(s=>{if(window.scrollY>=s.offsetTop-150) current=s.id});links.forEach(l=>l.classList.toggle('active',l.getAttribute('href')==='#'+current));}
  window.addEventListener('scroll',onScroll,{passive:true});onScroll();
  toggle.addEventListener('click',()=>{const open=nav.classList.toggle('open');toggle.setAttribute('aria-expanded',String(open));toggle.innerHTML=open?'<i class="bi bi-x-lg"></i>':'<i class="bi bi-list"></i>';});
  function closeMobileNav(){nav.classList.remove('open');toggle.setAttribute('aria-expanded','false');toggle.innerHTML='<i class="bi bi-list"></i>';document.querySelectorAll('.nav-item.open').forEach(i=>{i.classList.remove('open');const b=i.querySelector('.nav-caret-btn');if(b)b.setAttribute('aria-expanded','false');});}
  links.forEach(l=>l.addEventListener('click',closeMobileNav));
  document.querySelectorAll('.nav-caret-btn').forEach(btn=>{btn.addEventListener('click',(e)=>{e.preventDefault();e.stopPropagation();const item=btn.closest('.nav-item');const open=item.classList.toggle('open');btn.setAttribute('aria-expanded',String(open));});});
  document.querySelectorAll('.nav-dropdown a').forEach(a=>a.addEventListener('click',()=>{
    closeMobileNav();
    const target=document.querySelector(a.getAttribute('href'));
    if(target){setTimeout(()=>{target.querySelector('.timeline-content').classList.add('timeline-flash');setTimeout(()=>target.querySelector('.timeline-content').classList.remove('timeline-flash'),1300);},450);}
  }));
  if(window.AOS&&!reduced) AOS.init({duration:700,once:true,offset:70,easing:'ease-out-cubic'}); else document.querySelectorAll('[data-aos]').forEach(e=>e.removeAttribute('data-aos'));
  document.getElementById('year').textContent=new Date().getFullYear();
})();
