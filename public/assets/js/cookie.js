function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

const key = window.btoa('43374eeb4f50cdc97a154607c28d7e07-' + Date.now())
if (getCookie('43374eeb4f50cdc97a154607c28d7e07') == "" || getCookie('43374eeb4f50cdc97a154607c28d7e07') == null) {
    setCookie('43374eeb4f50cdc97a154607c28d7e07', key, 1000000)
}