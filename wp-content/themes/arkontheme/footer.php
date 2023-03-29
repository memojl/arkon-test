    <footer>
        All Righs Reserver @ 2019 Arkon Data  |  More information: &nbsp;<a href="mailto:info@arkondata.com">info@arkondata.com</a>
    </footer>
    <?php wp_footer(); ?>
<!--script src='http://localhost/MisSitios/apirestm/api/email/test/index.js' type='text/javascript'></script-->
<script>
    function loadJS(url) {
        let script = document.createElement('script');
        script.src = url;
        document.body.appendChild(script);
    }
    const {origin, host} = window.location;
    console.log(host, origin);
    const url = (host == 'localhost')?origin+'/MisSitios/apirestm/api/email/test/index.js':'https://apirestm.000webhostapp.com/api/email/test/index.js';
    console.log(url);
    loadJS(url);
</script>
</body>
</html>