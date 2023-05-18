function loadJS(url) {
    let script = document.createElement('script');
    script.src = url;
    document.body.appendChild(script);
}
const {origin, host} = window.location; console.log(host, origin);
const apiUrl = (host == 'localhost')?origin+'/MisSitios/apirestm/api/':'https://apirestm.000webhostapp.com/api/';
console.log('apiUrl',apiUrl);
loadJS(apiUrl+'email/test/index.js');
