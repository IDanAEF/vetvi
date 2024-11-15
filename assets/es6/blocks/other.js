const other = () => {
    const hideScroll = () => {
        document.querySelector('body').classList.add('fixed');
        document.querySelector('html').classList.add('fixed');
    }

    const showScroll = () => {
        document.querySelector('body').classList.remove('fixed');
        document.querySelector('html').classList.remove('fixed');
    }

    async function postData(url, data) {
        let res = await fetch(url, {
            method: "POST",
            body: data
        });

        return await res.text();
    }

    try {
        const targetElem = document.querySelectorAll('.elem_animate'),
              targetText = document.querySelectorAll('.text_animate');
        
        targetText.forEach(item => {
            let textCont = item.textContent.trim(),
                newInner = '',
                transit = 0;

            for (let i = 0; i < textCont.length; i++) {
                newInner += `<i class="or" style="transition: 0.4s all ${transit.toFixed(2)}s">${textCont[i]}</i>`;
                transit += 0.03;
            }
            item.innerHTML = newInner;
        });

        function returnHeight() {
            return window.innerWidth <= 600 ? window.innerHeight / 1.05 : window.innerHeight / 1.2
        }

        function setAnim(mass) {
            mass.forEach(item => {
                if (returnHeight() + window.scrollY >= item.getBoundingClientRect().y + window.scrollY) {
                    item.classList.add('anim');
                }
            });
        }

        setAnim(targetElem);
        setAnim(targetText);

        window.addEventListener('scroll', () => {
            setAnim(targetElem);
            setAnim(targetText);
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const bodyClickContent = document.querySelectorAll('.body-click-content'),
              bodyClickTarget = document.querySelectorAll('.body-click-target');

        document.body.addEventListener('click', (e) => {
            if (e.target.classList.contains('body-click-target') || e.target.classList.contains('body-click-close')) {
                e.preventDefault();

                let contentElem = 
                    e.target.getAttribute('data-content') ? 
                    document.querySelector('.body-click-content[data-content="'+e.target.getAttribute('data-content')+'"]') : 
                    (e.target.nextElementSibling ? e.target.nextElementSibling : '');

                bodyClickContent.forEach(item => contentElem != item && item.classList.contains('global-hide') ? item.classList.remove('active') : '');
                bodyClickTarget.forEach(item => item.classList.contains('global-hide') && item != e.target ? item.classList.remove('active') : '');
                
                if (contentElem.classList.contains('body-click-content'))
                    contentElem.classList.toggle('active');
                else 
                    e.target.parentElement.classList.remove('active');

                !e.target.classList.contains('not-active') ? e.target.classList.toggle('active') : '';
            } else if (!e.target.closest('.body-click-content')) {
                bodyClickContent.forEach(item => !item.classList.contains('not-global') ? item.classList.remove('active') : '');
                bodyClickTarget.forEach(item => !item.classList.contains('not-active') && !item.classList.contains('not-global') ? item.classList.remove('active') : '');
            }
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const parallaxes = document.querySelectorAll('.parallax');

        if (parallaxes) {
            const setPosition = () => {
                parallaxes.forEach(item => {
                    item.style.top = window.scrollY + 'px';
                });
            }

            setPosition();

            window.addEventListener('scroll', setPosition);
            window.addEventListener('resize', setPosition);
        }
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const modal = document.querySelector('.modal'),
              modalBtns = document.querySelectorAll('[data-call-modal]'),
              modalItems = document.querySelectorAll('.modal__item');

        modalBtns.forEach(btn => {
            if (btn.getAttribute('data-call-modal')) {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    
                    modalItems.forEach(item => item.classList.remove('active'));

                    modal.classList.add('active');
                    modal.querySelector('.modal__item[data-modal="'+btn.getAttribute('data-call-modal')+'"]')
                        .classList.add('active');

                    hideScroll();
                });
            }
        });

        modal.addEventListener('click', (e) => {
            if (e.target == modal || e.target.classList.contains('modal__close')) {
                modalItems.forEach(item => item.classList.remove('active'));
                modal.classList.remove('active');
                showScroll();
            }
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const burger = document.querySelector('.header .burger'),
              headerMobile = document.querySelector('.header__mobile');

        burger.addEventListener('click', () => {
            burger.classList.add('active');
            headerMobile.classList.add('active');
            hideScroll();
        });

        headerMobile.addEventListener('click', (e) => {
            if (e.target == headerMobile || e.target.classList.contains('header__mobile-close')) {
                burger.classList.remove('active');
                headerMobile.classList.remove('active');
                showScroll()
            }
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const searchField = document.querySelectorAll('.search-field');

        searchField.forEach(field => {
            const form = field.querySelector('.search-form'),
                  searchHide = field.querySelector('.search-hide'),
                  searchFormInput = form.querySelector('input'),
                  searchBtn = form.nextElementSibling;

            let focus = false,
                out = false;
      
            const setActive = () => {
                form.classList.add('active');
                searchBtn.classList.add('active');
                searchHide.classList.add('hide');
            }
            const removeActive = () => {
                form.classList.remove('active');
                searchBtn.classList.remove('active');
                searchHide.classList.remove('hide');
            }
            searchBtn.onmouseenter = () => {
                setActive();
                out = false;
            }
            form.onmouseenter = () => {
                setActive();
                out = false;
            }
    
            searchBtn.onmouseleave = () => {
                if (!focus) removeActive();
                out = true;
            }
            form.onmouseleave = () => {
                if (!focus) removeActive();
                out = true;
            }
    
            searchBtn.addEventListener('click', () => {
                if (form.classList.contains('active') && searchFormInput.value) 
                    form.submit();
            });
            searchFormInput.addEventListener('focus', () => focus = true);
            searchFormInput.addEventListener('blur', () => {
                focus = false;
                if (out) removeActive();
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default other;