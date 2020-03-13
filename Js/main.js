//header_sub_menu
//===============

const sub_menu = document.querySelector('.header-sub');

document.querySelector('.header-menu__avatar').onclick = function () {

    const curDisplayStyle = sub_menu.style.display;

    if (curDisplayStyle === 'none' || curDisplayStyle === ''){
        sub_menu.style.display = 'block';
    }
    else{
        sub_menu.style.display = 'none';
    }
};

window.onclick = function () {
    const curDisplayStyle = sub_menu.style.display;
    if (!event.target.matches('.header-menu__avatar')){
        if (curDisplayStyle === 'block'){
            sub_menu.style.display = 'none';
        }
    }
};

//settings.php
//--------------
if (window.location.pathname.indexOf('/settings.php') >= 0) {

    //edit_item
    const password = document.querySelector('#password');
    const info2 = document.querySelector('#site-setting');
    const info = document.querySelector('#info');

    document.querySelector('#selector-info').onclick = function () {
        info2.classList.remove('edit-item__show');
        password.classList.remove('edit-item__show');
        info.classList.add('edit-item__show');
    };

    document.querySelector('#selector-site__setting').onclick = function () {
        info.classList.remove('edit-item__show');
        password.classList.remove('edit-item__show');
        info2.classList.add('edit-item__show');
    };

    document.querySelector('#selector-password').onclick = function () {
        info.classList.remove('edit-item__show');
        info2.classList.remove('edit-item__show');
        password.classList.add('edit-item__show');
    };

    //uploader__submit
    const uploader__submit = document.querySelector('#uploader-submit');
    const uploader__submit_no = document.querySelector('#uploader-submit__no');

    document.querySelector('#uploader-caption__Avatar').onclick = function () {
        uploader__submit.classList.add('uploader-submit__show');
        uploader__submit_no.classList.add('uploader-submit__show');
    };

    document.querySelector('#uploader-submit__no').onclick = function () {
        uploader__submit.classList.remove('uploader-submit__show');
        uploader__submit_no.classList.remove('uploader-submit__show');
    };

}