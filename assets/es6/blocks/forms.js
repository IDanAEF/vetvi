const forms = () => {
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
        const formAjax = document.querySelectorAll('form.form'),
              modal = document.querySelector('.modal'),
              modalItems = modal.querySelectorAll('.modal__item'),
              modalSuccess = modal.querySelector('.modal__success');

        formAjax.forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();

                const formData = new FormData(form);

                postData(form.action, formData)
                .then((res) => {
                    modalItems.forEach(item => item.classList.remove('active'));
                    modal.classList.add('active');
                    modalSuccess.classList.add('active');
                    hideScroll();
                });
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default forms;