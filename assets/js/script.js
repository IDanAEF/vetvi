(()=>{"use strict";const e=e=>{function t(e){let t="+7 (___) ___-__-__",c=0,a=t.replace(/\D/g,""),o=this.value.replace(/\D/g,"");a.length>=o.length&&(o=a),this.value=t.replace(/./g,(function(e){return/[_\d]/.test(e)&&c<o.length?o.charAt(c++):c>=o.length?"":e})),"blur"===e.type?2==this.value.length&&(this.value=""):((e,t)=>{if(t.focus(),t.setSelectionRange)t.setSelectionRange(e,e);else if(t.createTextRange){let c=t.createTextRange();c.collapse(!0),c.moveEnd("character",e),c.moveStart("character",e),c.select()}})(this.value.length,this)}document.querySelectorAll(e).forEach((e=>{e.addEventListener("input",t),e.addEventListener("focus",t),e.addEventListener("blur",t)}))},t=()=>{try{const e=document.querySelectorAll('[href^="#"]'),t=.15,c=e=>{let c=document.documentElement.scrollTop,a=document.querySelector(e).getBoundingClientRect().top-70,o=null;requestAnimationFrame((function e(s){null===o&&(o=s);let l=s-o,i=a<0?Math.max(c-l/t,c+a):Math.min(c+l/t,c+a);document.documentElement.scrollTo(0,i),i!=c+a&&requestAnimationFrame(e)}))};window.location.hash&&c(window.location.hash),e.forEach((e=>{e.addEventListener("click",(function(e){e.preventDefault(),c(this.hash)}))}))}catch(e){console.log(e.stack)}};window.addEventListener("DOMContentLoaded",(()=>{e('input[type="tel"]'),t(),(()=>{try{$(".home__promo-slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,dots:!0,appendDots:$(".home__promo-dots"),prevArrow:$(".home__promo-arrows .left"),nextArrow:$(".home__promo-arrows .right")}),$(".catalog-detail__image-main .images").slick({infinite:!1,slidesToScroll:1,dots:!0,appendDots:$(".catalog-detail__image-main .dots"),prevArrow:$(".catalog-detail__image-main .arrows .left"),nextArrow:$(".catalog-detail__image-main .arrows .right"),asNavFor:".catalog-detail__image-thumbs"}),$(".catalog-detail__image-thumbs").slick({slidesToShow:6,slidesToScroll:1,asNavFor:".catalog-detail__image-main .images",arrows:!1,focusOnSelect:!0,infinite:!1,vertical:!0,verticalSwiping:!0})}catch(e){console.log(e.stack)}try{document.querySelectorAll(".about__way-slider").forEach((e=>{const t=e.querySelectorAll(".about__way-slider-item");let c=t.length,a=Math.floor(c/2);const o=()=>{a<0&&(a=c-1),a>=c&&(a=0),t.forEach((e=>e.classList.remove("active","left","right"))),a-1>=0&&t[a-1].classList.add("left"),t[a].classList.add("active"),a+1<t.length&&t[a+1].classList.add("right")};o(),t.forEach(((e,t)=>{e.addEventListener("click",(()=>{a=t,o()}))}));let s=0;e.addEventListener("touchstart",(e=>{s=e.changedTouches[0].screenX})),e.addEventListener("touchend",(e=>{s-e.changedTouches[0].screenX>50?(a++,o()):s-e.changedTouches[0].screenX<-50&&(a--,o())}))}))}catch(e){console.log(e.stack)}})(),(()=>{try{const e=document.querySelectorAll("form.form"),t=document.querySelector(".modal"),c=t.querySelectorAll(".modal__item"),a=t.querySelector(".modal__success");e.forEach((e=>{e.addEventListener("submit",(o=>{o.preventDefault();const s=new FormData(e);(async function(e,t){let c=await fetch(e,{method:"POST",body:t});return await c.text()})(e.action,s).then((e=>{c.forEach((e=>e.classList.remove("active"))),t.classList.add("active"),a.classList.add("active"),document.querySelector("body").classList.add("fixed"),document.querySelector("html").classList.add("fixed")}))}))}))}catch(e){console.log(e.stack)}})(),(()=>{const e=()=>{document.querySelector("body").classList.add("fixed"),document.querySelector("html").classList.add("fixed")},t=()=>{document.querySelector("body").classList.remove("fixed"),document.querySelector("html").classList.remove("fixed")};try{const c=document.querySelectorAll(".elem_animate"),a=document.querySelectorAll(".text_animate");function o(e){e.forEach((e=>{(window.innerWidth<=600?window.innerHeight/1.05:window.innerHeight/1.2)+window.scrollY>=e.getBoundingClientRect().y+window.scrollY&&e.classList.add("anim")}))}a.forEach((e=>{let t=e.textContent.trim(),c="",a=0;for(let e=0;e<t.length;e++)c+=`<i class="or" style="transition: 0.4s all ${a.toFixed(2)}s">${t[e]}</i>`,a+=.03;e.innerHTML=c})),o(c),o(a),window.addEventListener("scroll",(()=>{o(c),o(a)}))}catch(s){console.log(s.stack)}try{const l=document.querySelectorAll(".body-click-content"),i=document.querySelectorAll(".body-click-target");document.body.addEventListener("click",(e=>{if(e.target.classList.contains("body-click-target")||e.target.classList.contains("body-click-close")){e.preventDefault();let t=e.target.getAttribute("data-content")?document.querySelector('.body-click-content[data-content="'+e.target.getAttribute("data-content")+'"]'):e.target.nextElementSibling?e.target.nextElementSibling:"";l.forEach((e=>t!=e&&e.classList.contains("global-hide")?e.classList.remove("active"):"")),i.forEach((t=>t.classList.contains("global-hide")&&t!=e.target?t.classList.remove("active"):"")),t.classList.contains("body-click-content")?t.classList.toggle("active"):e.target.parentElement.classList.remove("active"),!e.target.classList.contains("not-active")&&e.target.classList.toggle("active")}else e.target.closest(".body-click-content")||(l.forEach((e=>e.classList.contains("not-global")?"":e.classList.remove("active"))),i.forEach((e=>e.classList.contains("not-active")||e.classList.contains("not-global")?"":e.classList.remove("active"))))}))}catch(n){console.log(n.stack)}try{const r=document.querySelectorAll(".parallax");if(r){const d=()=>{r.forEach((e=>{e.style.top=window.scrollY+"px"}))};d(),window.addEventListener("scroll",d),window.addEventListener("resize",d)}}catch(m){console.log(m.stack)}try{const u=document.querySelector(".modal"),h=document.querySelectorAll("[data-call-modal]"),g=document.querySelectorAll(".modal__item");h.forEach((t=>{t.getAttribute("data-call-modal")&&t.addEventListener("click",(c=>{c.preventDefault(),g.forEach((e=>e.classList.remove("active"))),u.classList.add("active"),u.querySelector('.modal__item[data-modal="'+t.getAttribute("data-call-modal")+'"]').classList.add("active"),e()}))})),u.addEventListener("click",(e=>{(e.target==u||e.target.classList.contains("modal__close"))&&(g.forEach((e=>e.classList.remove("active"))),u.classList.remove("active"),t())}))}catch(v){console.log(v.stack)}try{const L=document.querySelector(".header .burger"),y=document.querySelector(".header__mobile");L.addEventListener("click",(()=>{L.classList.add("active"),y.classList.add("active"),e()})),y.addEventListener("click",(e=>{(e.target==y||e.target.classList.contains("header__mobile-close"))&&(L.classList.remove("active"),y.classList.remove("active"),t())}))}catch(f){console.log(f.stack)}try{document.querySelectorAll(".search-field").forEach((e=>{const t=e.querySelector(".search-form"),c=e.querySelector(".search-hide"),a=t.querySelector("input"),o=t.nextElementSibling;let s=!1,l=!1;const i=()=>{t.classList.add("active"),o.classList.add("active"),c.classList.add("hide")},n=()=>{t.classList.remove("active"),o.classList.remove("active"),c.classList.remove("hide")};o.onmouseenter=()=>{i(),l=!1},t.onmouseenter=()=>{i(),l=!1},o.onmouseleave=()=>{s||n(),l=!0},t.onmouseleave=()=>{s||n(),l=!0},o.addEventListener("click",(()=>{t.classList.contains("active")&&a.value&&t.submit()})),a.addEventListener("focus",(()=>s=!0)),a.addEventListener("blur",(()=>{s=!1,l&&n()}))}))}catch(_){console.log(_.stack)}})()}))})();