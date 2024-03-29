function session_unregister (name) {
    // http://kevin.vanzonneveld.net
    // +   original by: Brett Zamir (http://brett-zamir.me)
    // %          note 1: Deprecated in PHP
    // *     example 1: session_unregister('someVarName');
    // *     returns 1: true

    var obj = this.$_SESSION ? this : window; // Allow storage on the namespaced object
    if (obj.$_SESSION) {
        delete obj.$_SESSION[name];
    }
    return true;
}

function session_unregister () {
    // http://kevin.vanzonneveld.net
    // +   original by: Louis Stowasser
    // +   improved by: Brett Zamir (http://brett-zamir.me)
    // -    depends on: urlencode
    // *     example 1: 
    // *     returns 1: 

    //* Bundle all session destroying functions (they all do the same thing)
    //* Resets the global $_SESSION and sets the cookie to null
    var session_set_cookie = function (name, value, expires, path, domain, secure) {
        if (expires) {
            expires = (new Date((new Date).getTime() + expires * 3600)).toGMTString();
        }
     
        var r = [name + '=' + t.urlencode(value)], s = {}, i = '';
        s = {expires: expires, path: path, domain: domain};
        for (var i in s) {
            if (s.hasOwnProperty(i)) { // Exclude items on Object.prototype
                s[i] && r.push(i + '=' + s[i]);
            }
        }
        
        return secure && r.push('secure'), document.cookie = r.join(";"), true;
    };


    var t = this;
    t.$_SESSION = null;
	// t.setcookie('JSSESSID', null);
    return session_set_cookie('JSSESSID', null);
}