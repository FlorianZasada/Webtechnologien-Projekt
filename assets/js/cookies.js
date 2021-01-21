$(() => {
    const cname = "acceptsCookies";
    if(!getCookie(cname))
        $(".modalCookie").modal();

    $('.cookie-btn').click( () => setCookie(cname, 'true', 36500));

    
    console.log(getCookie(cname))
});

function setCookie(cname, cvalue, exdays) {
    let d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
    
function getCookie(name) {
    return document.cookie.split(';').some(c => {
        return c.trim().startsWith(name + '=');
    });
}